
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META SECTION -->
        <title>Atlant - Responsive Bootstrap Admin Template</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->
        <link rel="stylesheet" type="text/css" id="theme" href="<?=base_url('backend/')?>css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->
		<body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">

     		<?php $this->load->view('include/backend/sidebar'); ?>

            <!-- PAGE CONTENT -->
            <div class="page-content">

        <?php $this->load->view('include/backend/header'); ?>

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Tenaga Ahli</li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE TITLE -->
                <div class="page-title">
                    <h3>Tenaga Ahli</h3>
                </div>
                <!-- END PAGE TITLE -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">



                    <div class="row">
                        <div class="col-md-12">

			    <?php if ($this->session->flashdata('success')) {?>

										<div class="alert alert-info" id="success-alert">
										  <strong>Informasi !</strong> <?php echo $this->session->flashdata('success');?>
										</div>

				<?php }?>

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
							    <div class="panel-heading">
                                    <h3 class="panel-title"><button type="button" id="tambah" class="btn btn-primary  pull-center">Tambah Data</button></h3>

                                </div>

                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Pendidikan Terakhir</th>
                                                <th>Pengalaman Kerja</th>
                                                <th>Keahlian</th>
                                                <th>Jabatan</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
												if ($query->num_rows() > 0)
												{
												   foreach ($query->result() as $row)
												   {
													   ?>
													 <tr>
                                                <td><?php echo  $row->nama;?></td>
                                                <td><?php echo  $row->pendidikan_terakhir;?></td>
                                                <td><?php echo  $row->pengalaman_kerja;?></td>
                                                <td><?php echo  $row->keahlian;?></td>
                                                <td><?php echo  $row->jabatan;?></td>
                                                <td width="120px"> <a href="<?php echo base_url('tenaga_ahli/hapus/'.$row->id);?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')">Delete </a>|<a href="<?php echo base_url('tenaga_ahli/form/'.$row->id);?>"> Edit</a></td>
													</tr>
													  <?php
												   }
												}
										?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->


                        </div>
                    </div>

                </div>
                <!-- PAGE CONTENT WRAPPER -->
            </div>
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->


    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/bootstrap/bootstrap.min.js"></script>
        <!-- END PLUGINS -->

        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='<?=base_url('backend/')?>js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/datatables/jquery.dataTables.min.js"></script>
        <!-- END PAGE PLUGINS -->

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins.js"></script>
        <script type="text/javascript" src="<?=base_url('backend/')?>js/actions.js"></script>
        <!-- END TEMPLATE -->
		<script type="text/javascript">

			$("#tambah").click(function() {
				  window.location.href = "<?php echo base_url('tenaga_ahli/form')?>";
			});

			$(document).ready (function(){
					$("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
					$("#success-alert").slideUp(500);
                });
			});

    </script>
    <!-- END SCRIPTS -->

    </body>
</html>