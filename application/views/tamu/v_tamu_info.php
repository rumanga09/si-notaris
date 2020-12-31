<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
		<!-- CONTENT -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Informasi Detail Kunjungan Tamu</h1>
					<ul class="breadcrumb">	
					<?php
						foreach($segments  as $key => $value){
							echo '<li><a href="'.base_url($value).'">'.$key.'</a></li>';
						}
					?>
					</ul>
					<p><a href="<?php echo base_url('tamu');?>" class="btn btn-default"><i class="fa fa-arrow-circle-o-left"></i> Kembali</a></p>
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
				<div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Data Tamu
                        </div>
                        <!-- /.panesl-heading -->
                        <div class="panel-body">
							<div class="row">
								<div class="col-md-4">
									<p>
										<strong>Nama Tamu: </strong>
									</p>
									<p><?php echo $data['tamu_nama'];?></p>
									<p>
										<strong>Tangal Kunjungan :</strong>
									</p>
									<p><?php echo $data['tamu_tanggal'];?></p>
									<p>
										<strong>Nomor Telepon Tamu: </strong>
									</p>
									<p><?php echo $data['tamu_no_hp'];?></p>							
									<p>
										<strong>Kunjungan dimasukkan oleh: </strong>
									</p>
									<p><?php echo $data['tamu_insert_by_name'];?></p>
								</div>
								<div class="col-lg-8">
									<p>
										<strong>Alamat Tamu : </strong>
									</p>
									<p><?php echo $data['tamu_alamat'];?></p>
									<p>
										<strong>Keterangan : </strong>
									</p>
									<p><?php echo $data['tamu_keterangan'];?></p>									
								</div>
							</div>
						</div>
						<div class="panel-footer">
							<a href="<?php echo base_url('tamu/edit_tamu/'.$data['tamu_id']);?>" class="btn btn-primary"><i class="fa fa-pencil"></i> Ubah Tamu</a>
							<button class="btn btn-danger" data-toggle="modal" data-target="#modal_delete_user"><i class="fa fa-trash"></i> Hapus Tamu </button>
						
						</div>
					</div>
				</div>
			</div>
			<!-- modal hapus akta biasa-->
			<div class="modal fade" id="modal_delete_user" role='dialog'>
				<div class="modal-dialog">
					<div class="modal-content">
						<?php echo form_open('tamu/delete_tamu/'.$data['tamu_id']);?>
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Konfirmasi Ulang</h4>
						</div>
						<div class="modal-body">
							<p>Anda akan menghapus kunjungan tamu ini. <br>Apakah anda yakin ?</p>
						</div>	
						<div class="modal-footer">
							<button type="submit" class="btn btn-danger" name="submit_delete_tamu"><i class="fa fa-plus-circle"></i> Hapus</button>
							<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Batalkan</button>
						</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
			<!-- /.modal hapus akta biasa-->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->