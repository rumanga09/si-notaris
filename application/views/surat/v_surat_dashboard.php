<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
		<!-- CONTENT -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header text-primary"><strong>Surat</strong></h1>
					<ul class="breadcrumb">	
					<?php
						foreach($segments  as $key => $value){
							echo '<li><a href="'.base_url($value).'">'.$key.'</a></li>';
						}
					?>
				</ul>
				<p><a href="<?php echo base_url('');?>" class="btn btn-default"><i class="fa fa-arrow-circle-o-left"></i> Kembali</a></p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Daftar Surat
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<?php if(isset($_SESSION['message'])){?>
							
							<div class="alert alert-<?php echo $_SESSION['message'][0];?>">
								<?php echo $_SESSION['message'][1];?>.
							</div>
						<?php }?>
						
						<p><a href="<?php echo base_url('surat/surat_baru')?>" class="btn btn-primary" ><i class="fa fa-plus-circle"></i> Tambahkan Surat Baru</a></p>
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nomor Surat</th>
                                        <th>Tanggal Surat</th>
                                        <th>Sifat Surat</th>
                                        <th>Nama Penanda Tangan</th>
										<th>Surat</th>
                                        <th>Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
									<?php $i = 1;
										foreach($data as $data_surat){?>
											<tr>
												<td><?php echo $i;?></td>
												<td><?php echo $data_surat['surat_nomor'];?></td>
												<td><?php echo $data_surat['surat_tanggal'];?></td>
												<td><?php echo $data_surat['surat_sifat'];?></td>
												<td><?php echo $data_surat['surat_penanda_tangan'];?></td>
												<td><?php echo $data_surat['surat_upload'];?></td>
												<td><a href="<?php echo base_url('surat/info_surat/'.$data_surat['surat_id']);?>">Info</a></td>
											</tr>
										<?php $i++;}
									?>
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