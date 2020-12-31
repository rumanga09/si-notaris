<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
		<!-- CONTENT -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header text-primary"><strong>Ubah Kunjungan Tamu </strong></h1>
					<ul class="breadcrumb">	
					<?php
						foreach($segments  as $key => $value){
							echo '<li><a href="'.base_url($value).'">'.$key.'</a></li>';
						}
					?>
					</ul>
					<p><a href="<?php echo base_url('tamu/tamu_info/'.$data['tamu_id']);?>" class="btn btn-default"><i class="fa fa-arrow-circle-o-left"></i> Kembali</a></p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Form Pembuatan Surat Baru
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
							<?php echo validation_errors('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>','</div>');?>
							<?php echo form_open('tamu/tamu_update/'.$data['tamu_id']);?>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Nama Tamu</label>
										<input class="form-control" name="input_tamu_nama" value="<?php echo $data['tamu_nama']?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Nomor Handphone</label>
										<input class="form-control" name="input_tamu_no_hp" value="<?php echo $data['tamu_no_hp']?>">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Alamat</label>
										<input class="form-control" name="input_tamu_alamat" value="<?php echo $data['tamu_alamat']?>">
									</div>
									<div class="form-group">
										<label>Keterangan</label>
										<input class="form-control" name="input_tamu_keterangan" value="<?php echo $data['tamu_keterangan']?>">
									</div>
								</div>
							</div>
							<div class="text-right">
								<button type="submit" class="btn btn-primary" name="submit_tamu_edit"><i class="fa fa-save"></i> Masukkan Data</button>
								<a href="<?php echo base_url('tamu/tamu_info/'.$data['tamu_id']);?>" class="btn btn-default"><i class="fa fa-arrow-circle-o-left"></i> Kembali</a>
							</div>
							<?php echo form_close();?>
							
						</div>
					</div>
				</div>
			</div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->