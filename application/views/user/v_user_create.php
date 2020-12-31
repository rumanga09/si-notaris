<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
		<!-- CONTENT -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header text-primary"><strong>Tambahkan Akun Baru</strong></h1>
					<p><a href="<?php echo base_url('user');?>" class="btn btn-default"><i class="fa fa-arrow-circle-o-left"></i> Kembali</a></p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Form Pembuatan Akun Baru
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<?php if(isset($_SESSION['message'])){?>
							
							<div class="alert alert-<?php echo $_SESSION['message'][0];?>">
								<?php echo $_SESSION['message'][1];?>.
							</div>
						<?php }?>
							<?php echo validation_errors('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>','</div>');?>
							<?php echo form_open('user/create_new');?>
							<div class="form-group">
								<label>Nama Pengguna</label>
								<input class="form-control" name="input_name">
							</div>
							<div class="form-group">
								<label>Username*</label>
								<input class="form-control" name="input_username">
							</div>
							<div class="form-group">
								<label>Password*</label>
								<input type="password" class="form-control" name="input_password">
							</div>
							<div class="form-group">
								<label>Status Pengguna</label>
								<select class="form-control" name="input_status">
									<option value="Administrator">Administrator</option>
									<option value="Staff">Staff</option>
								</select>
							</div>
							<hr/>
							<button type="submit" class="btn btn-success" name="submit_new_account"><i class="fa fa-save"></i> Tambahkan</button>
							<a href="<?php echo base_url('user')?>" type="button" class="btn btn-default" ><i class="fa fa-arrow-circle-left"></i> Keluar</a>
							<?php echo form_close(); ?>
							
						</div>
					</div>
				</div>
			</div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

