<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
		<!-- CONTENT -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Informasi Detail Surat</h1>
					<ul class="breadcrumb">	
					<?php
						foreach($segments  as $key => $value){
							echo '<li><a href="'.base_url($value).'">'.$key.'</a></li>';
						}
					?>
				</ul>
					<p><a href="<?php echo base_url('surat');?>" class="btn btn-default"><i class="fa fa-arrow-circle-o-left"></i> Kembali</a></p>
                </div>				
                <!-- /.col-lg-12 -->
            </div>
			<?php if(isset($_SESSION['message'])){?>
				<div class="alert alert-<?php echo $_SESSION['message'][0];?>">
					<?php echo $_SESSION['message'][1];?>.
				</div>
			<?php }?>
            <!-- /.row -->
			<div class="row">
				<div class="col-lg-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Data Surat
                        </div>
                        <!-- /.panesl-heading -->
                        <div class="panel-body">
							
							<p>
								<strong>Nomor Surat: </strong>
							</p>
							<p><?php echo $data['surat_id'];?></p>
							<p>
								<strong>Tangal Surat:</strong>
							</p>
							<p><?php echo $data['surat_tanggal'];?></p>
							<p>
								<strong>Surat Dibuat Oleh: </strong>
							</p>
							<p><?php echo $data['surat_created_by_name'];?></p>
						</div>
					</div>
				</div>
                <div class="col-lg-8">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Data Isi Surat
                        </div>
                        <!-- /.panesl-heading -->
                        <div class="panel-body">
							<p>
								<strong>Sifat Surat : </strong>
							</p>
							<p><?php echo $data['surat_sifat'];?></p>
							
							<p>
								<strong>Ditandatangani oleh : </strong>
							</p>
							<p><?php echo $data['surat_penanda_tangan'];?></p>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Tindakan
                        </div>
                        <!-- /.panesl-heading -->
                        <div class="panel-body">
							<a href="<?php echo base_url('surat/edit_surat/'.$data['surat_id']);?>" class="btn btn-primary"><i class="fa fa-pencil"></i> Ubah Surat</a>
							<button class="btn btn-danger" data-toggle="modal" data-target="#modal_delete_user"><i class="fa fa-trash"></i> Hapus Surat </button>
						</div>
					</div>
				</div>
			</div>
			<!-- modal hapus surat -->
			<div class="modal fade" id="modal_delete_user" role='dialog'>
				<div class="modal-dialog">
					<div class="modal-content">
						<?php echo form_open('surat/delete_surat/'.$data['surat_id']);?>
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Konfirmasi Ulang</h4>
						</div>
						<div class="modal-body">
							<p>Anda akan menghapus Surat ini. <br>Apakah anda yakin ?</p>
						</div>	
						<div class="modal-footer">
							<button type="submit" class="btn btn-danger" name="submit_delete_surat"><i class="fa fa-plus-circle"></i> Hapus</button>
							<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Batalkan</button>
						</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
			<!-- /.modal hapus surat -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->