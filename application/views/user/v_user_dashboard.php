<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
		<!-- CONTENT -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header text-primary"><strong>Pengguna (Users)</strong></h1>
					<p><a href="<?php echo base_url('');?>" class="btn btn-default"><i class="fa fa-arrow-circle-o-left"></i> Kembali</a></p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Daftar Pengguna
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<?php if(isset($_SESSION['message'])){?>
							
							<div class="alert alert-<?php echo $_SESSION['message'][0];?>">
								<?php echo $_SESSION['message'][1];?>.
							</div>
						<?php }?>
						
						<p><a href=<?php echo base_url('user/create_user');?> class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambahkan Akun Baru</a></p>
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Pengguna</th>
                                        <th>Status Level</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Info</th>
                                    </tr>
                                </thead>
                                <tbody><?php 
									$i = 1;
									foreach($data as $user){?>	<tr>
										<td><?php echo $i;?></td>
										<td><?php echo $user['user_name'];?></td>
										<td><?php echo $user['user_status'];?></td>
										<td><?php echo $user['user_username'];?></td>
										<td><?php echo $user['user_password'];?></td>
										<td><a href="<?php echo base_url('user/info_user/'.$user['user_id']);?>"> Info</a></td>
									</tr>
								<?php $i++;
								}?>
                                
								</tbody>
                            </table>
						</div>
					</div>
				</div>
			</div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->