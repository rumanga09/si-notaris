<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
		<!-- CONTENT -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Informasi Pengguna (Users)</h1>
					<p><a href="<?php echo base_url('user');?>" class="btn btn-default"><i class="fa fa-arrow-circle-o-left"></i> Kembali</a></p>
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
                            Data Akun Pengguna
                        </div>
                        <!-- /.panesl-heading -->
                        <div class="panel-body">
							
							<p>
								<strong>Username Pengguna: </strong>
							</p>
							<p><?php echo $data['user_username'];?></p>
							<p>
								<strong>Password Pengguna: </strong>
							</p>
							<p><?php echo md5($data['user_password']);?></p>
							<p>
								<strong>Akun Dibuat Pada: </strong>
							</p>
							<p><?php echo $data['user_created_date'];?></p>
							<p>
								<strong>Akun Dibuat Oleh: </strong>
							</p>
							<p><?php echo $data['user_created_by_name'];?></p>
						</div>
					</div>
				</div>
                <div class="col-lg-8">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Data Diri Pengguna
                        </div>
                        <!-- /.panesl-heading -->
                        <div class="panel-body">
							<p>
								<strong>Nama Lengkap Pengguna : </strong>
							</p>
							<p><?php echo $data['user_name'];?></p>
							
							<p>
								<strong>Peran Pengguna : </strong>
							</p>
							<p><?php echo $data['user_status'];?></p>
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
							<button class="btn btn-primary" data-toggle="modal" data-target="#modal_edit_info"><i class="fa fa-pencil"></i> Ubah Data Diri</button>
							<button class="btn btn-danger" data-toggle="modal" data-target="#modal_delete_user"><i class="fa fa-trash"></i> Hapus Akun </button>
						</div>
					</div>
				</div>
			</div>
			<!-- modal edit user-->
			<div class="modal fade" id="modal_edit_info" role='dialog'>
				<div class="modal-dialog">
					<div class="modal-content">
						<?php 
							echo form_open('user/edit_user/'.$data['user_id']);?>
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Ubah Akun</h4>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label>Nama Pengguna</label>
								<input class="form-control" name="input_name_edit" value="<?php echo $data['user_name']?>" required>
							</div>
							<div class="form-group">
								<label>Username</label>
								<input class="form-control" name="input_username_edit" value="<?php echo $data['user_username']?>" required>
							</div>
							<div class="form-group">
								<label>Status Pengguna</label>
								<select class="form-control" name="input_status_edit">
									<option value="Administrator">Administrator</option>
									<option value="Staff">Staff</option>
								</select>
							</div>
						</div>	
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary" name="submit_edit_account"><i class="fa fa-pencil"></i> Ubah Data</button>
							<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Batalkan</button>
						</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
			<!-- /.modal edit user-->
			<!-- modal hapus user-->
			<div class="modal fade" id="modal_delete_user" role='dialog'>
				<div class="modal-dialog">
					<div class="modal-content">
						<?php echo form_open('user/delete_user/'.$data['user_id']);?>
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Konfirmasi Ulang</h4>
						</div>
						<div class="modal-body">
							<p>Anda akan menghapus akun ini. <br>Apakah anda yakin ?</p>
						</div>	
						<div class="modal-footer">
							<button type="submit" class="btn btn-danger" name="submit_delete_account"><i class="fa fa-plus-circle"></i> Hapus</button>
							<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Batalkan</button>
						</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
			<!-- /.modal hapus user-->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->