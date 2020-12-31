<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
		<!-- CONTENT -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header text-primary"><strong>Ubah Suratu</strong></h1>
					<ul class="breadcrumb">	
					<?php
						foreach($segments  as $key => $value){
							echo '<li><a href="'.base_url($value).'">'.$key.'</a></li>';
						}
					?>
				</ul>
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
							<?php echo form_open('surat/surat_update/'.$data['surat_id']);?>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Nomor Surat</label>
										<input class="form-control" name="input_surat_nomor" value="<?php echo $data['surat_nomor'];?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Ditandatangani oleh</label>
										<input class="form-control" name="input_surat_penanda_tangan" value="<?php echo $data['surat_penanda_tangan'];?>">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Sifat Surat</label>
										<input class="form-control" name="input_surat_sifat" value="<?php echo $data['surat_sifat'];?>">
									</div>
								</div>
								
								<div class="col-md-12">
								<div class="form-group">
									<label for="name">Upload Surat</label>
									<input type="file" name="surat_upload" class="form-control"*
								</div>
								</div>
							</div>
							<div class="text-right">
								<button type="submit" class="btn btn-primary" name="submit_surat_edit"><i class="fa fa-save"></i> Masukkan Data</button>
								<a href="<?php echo base_url('surat/info_surat/'.$data['surat_id']);?>" class="btn btn-default"><i class="fa fa-arrow-circle-o-left"></i> Kembali</a>
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