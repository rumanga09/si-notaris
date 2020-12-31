<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akta_biasa extends CI_Controller {	
	public function __construct(){
		parent::__construct();
		
		$this->load->helper('url');
		$this->load->helper('download');
		
		
		if(isset($_SESSION['isLogged'])){
			$this->session->set_userdata('title', 'Akta Biasa');
			$this->load->model('m_akta_biasa');
			$this->load->library('form_validation');
		}
		else{
			$this->session->set_flashdata('AuthError', array('warning', 'Mohon untuk login terlebih dahulu'));
			redirect('auth/login');
		}
	}
	
	public function index(){	
		
		$_SESSION['addon'] = array('table');
		
		$data_akta_biasa = $this->m_akta_biasa->show_akta_biasa();
		
		$segments = array('Beranda' => '', 'Akta Biasa' => 'akta_biasa');
		$this->load->view('header', $_SESSION);
		$this->load->view('akta_biasa/v_akta_biasa_dashboard', array('data' => $data_akta_biasa, 'segments' => $segments, $_SESSION));
		$this->load->view('footer', $_SESSION);
		
	}
	public function download_akta(){
		
		$data = $this->db->get_where('akta_biasa',['akta_biasa_id'])->row();
		force_download('uploads/akta_biasa/'.$data->akta_upload, NULL);
		
	}
	
	
	public function akta_biasa_baru(){
		$this->load->library('form_validation');
		$this->load->helper('form');
		$segments = array('Beranda' => '', 'Akta Biasa' => 'akta_biasa', 'Tambahkan Akta Biasa Baru' => 'akta_biasa_baru');
		
		$this->load->view('header', $_SESSION);
		$this->load->view('akta_biasa/v_akta_biasa_baru', array($_SESSION, 'segments' => $segments));
		$this->load->view('footer', $_SESSION);
	}
	
	public function buat_akta_biasa(){
		$this->form_validation->set_rules('input_akta_biasa_nomor', 'Nomor Akta', 'trim|required|numeric');
		$this->form_validation->set_rules('input_akta_biasa_sifat', 'Sifat Akta', 'trim|required');
		$this->form_validation->set_rules('input_akta_biasa_penghadap', 'Nama Penghadap', 'trim|required');
		
		
		if($this->form_validation->run() == TRUE){
			if(isset($_POST['submit_akta_biasa_baru'])){
				$post_akta_biasa_nomor		= $this->input->post('input_akta_biasa_nomor');
				$post_akta_biasa_sifat       = $this->input->post('input_akta_biasa_sifat');
				$post_akta_biasa_penghadap   = $this->input->post('input_akta_biasa_penghadap');
		
			if ($akta_upload=''){}else{
				$config['upload_path']          = './uploads/akta_biasa';
				$config['allowed_types']        = 'doc|docx';
				$config['max_size']             = 2048;
				$config['file_name']			= $post_akta_biasa_nomor.$post_akta_biasa_tanggal.$post_akta_biasa_sifat.$post_akta_biasa_penghadap;
			
				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('akta_upload')){
					$this->session->set_flashdata('message', array('danger', 'Upload gagal. Mohon coba kembali'));
					redirect('akta_biasa');
				}else{
				$akta_upload=$this->upload->data('file_name');
			}
				
				$data = array(
					'akta_biasa_nomor'	=> $post_akta_biasa_nomor,
					'akta_biasa_tanggal'	=> date('Y-m-d'),
					'akta_biasa_sifat'	=> strtoupper($post_akta_biasa_sifat),
					'akta_biasa_penghadap'	=> strtoupper($post_akta_biasa_penghadap),
					'akta_biasa_dibuat_oleh'	=> $_SESSION['id'],
					'akta_upload'		=> $akta_upload,
				);
				
				$insert = $this->m_akta_biasa->insert_akta_biasa($data);
				if($insert == 1){
					$this->session->set_flashdata('message', array('success', 'Pembuatan Akta berhasil'));
				}
				else{
					$this->session->set_flashdata('message', array('danger', 'Pembuatan Akta gagal. Mohon coba kembali'));
				}
				redirect('akta_biasa');
			}
		}
		else{
			$this->load->view('header', $_SESSION);
			$this->load->view('akta_biasa/v_akta_biasa_baru', array($_SESSION));
			$this->load->view('footer', $_SESSION);
		}
		}
	}
	public function akta_biasa_info(){
		$this->load->helper('form');
		
		$id = $this->uri->segment(3);
		$data_akta_biasa = $this->m_akta_biasa->find_akta_biasa($id);
		
		$segments = array('Beranda' => '', 'Akta Biasa' => 'akta_biasa', 'Nomor : '.$id => 'akta_biasa/akta_biasa_info/'.$id);
		$this->load->view('header', $_SESSION);
		$this->load->view('akta_biasa/v_akta_biasa_info', array('data' => $data_akta_biasa, 'session' => $_SESSION, 'segments' => $segments));
		$this->load->view('footer', $_SESSION);
	}
	
	public function edit_akta_biasa(){
		$id = $this->uri->segment(3);
		$data_akta_biasa = $this->m_akta_biasa->find_akta_biasa($id);
		
		$segments = array('Beranda' => '', 'Akta Biasa' => 'akta_biasa', 'Nomor : '.$id => 'akta_biasa/edit_akta_biasa/'.$id);
		$this->load->view('header', $_SESSION);
		$this->load->view('akta_biasa/v_akta_biasa_edit', array('data' => $data_akta_biasa, 'session' => $_SESSION, 'segments' => $segments));
		$this->load->view('footer', $_SESSION);
	}
	
	public function akta_biasa_update(){
		$id = $this->uri->segment(3);
		
		$this->form_validation->set_rules('input_akta_biasa_nomor', 'Nomor Akta', 'trim|required|numeric');
		$this->form_validation->set_rules('input_akta_biasa_sifat', 'Sifat Akta', 'trim|required');
		$this->form_validation->set_rules('input_akta_biasa_penghadap', 'Nama Penghadap', 'trim|required');
		
		if($this->form_validation->run() == TRUE){
			if(isset($_POST['submit_akta_biasa_edit'])){
				$post_akta_biasa_nomor		= $this->input->post('input_akta_biasa_nomor');
				$post_akta_biasa_sifat       = $this->input->post('input_akta_biasa_sifat');
				$post_akta_biasa_penghadap   = $this->input->post('input_akta_biasa_penghadap');
				
			if ($akta_upload=''){}else{
				$config['upload_path']          = './uploads/akta_biasa';
				$config['allowed_types']        = 'doc|docx';
				$config['max_size']             = 2048;
				$config['file_name']			= $post_akta_biasa_nomor.$post_akta_biasa_tanggal.$post_akta_biasa_sifat.$post_akta_biasa_penghadap;
			
				$this->load->library('upload', $config);
			}
				if(!$this->upload->do_upload('akta_upload')){
					$this->session->set_flashdata('message', array('danger', 'Upload gagal. Mohon coba kembali'));
					redirect('akta_biasa');
			}	else{
				$akta_upload=$this->upload->data('file_name');
			}
				$data = array(
					'akta_biasa_nomor'		=> $post_akta_biasa_nomor,
					'akta_biasa_sifat'		=> strtoupper($post_akta_biasa_sifat),
					'akta_biasa_penghadap'	=> strtoupper($post_akta_biasa_penghadap),
					'akta_upload'			=> $akta_upload,
				);
				
				$insert = $this->m_akta_biasa->update_akta_biasa($id, $data);
				if($insert == 1){
					$this->session->set_flashdata('message', array('success', 'Perubahan Akta berhasil'));
				}
				else{
					$this->session->set_flashdata('message', array('danger', 'Perubahan Akta gagal. Mohon coba kembali'));
				}
				redirect('akta_biasa');
			}
		}
		else{
			$this->edit_akta_biasa();
		}
	}
	

	
	public function delete_akta_biasa(){
		$id = $this->uri->segment(3);
		
		$delete = $this->m_akta_biasa->delete_akta_biasa($id);

		if($delete == 1){
			$this->session->set_flashdata('message', array('success', 'Penghapusan Akta Biasa berhasil'));
		}
		else{
			$this->session->set_flashdata('message', array('danger', 'Penghapusan Akta Biasa gagal. Mohon coba kembali'));
		}
		
		redirect('akta_biasa');
	}

}