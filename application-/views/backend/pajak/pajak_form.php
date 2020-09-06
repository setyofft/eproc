
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>JMTO eProc</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->

	<script src="<?=base_url('assets')?>/lib/jquery.js"></script>
	<script src="<?=base_url('assets')?>/dist/jquery.validate.js"></script>        
	
	<script>

	$().ready(function() {
	
		$("#pajak").validate({
			rules: {
				jenis_pajak: "required",
				masa_pajak_tahunan: "required",
				no_bkti_penerimaan_srt: "required",
				tgl_bkt_penerimaan_srt: "required",
				ktp: {
						  required: true,
						  extension: "pdf|png|jpeg"
						}
				},
			messages: {
				jenis_pajak: "Wajib di isi",
				masa_pajak_tahunan: "Wajib di isi",
				no_bkti_penerimaan_srt: "Wajib di isi",
				tgl_bkt_penerimaan_srt: "Wajib di isi",
				ktp: "File harus pdf"

			}
		});


	});
	</script>
	

	<style>
		#commentForm {
			width: 500px;
		}
		#commentForm label {
			width: 250px;
		}
		#commentForm label.error, #commentForm input.submit {
			margin-left: 253px;
		}

		#signupForm label.error {
			margin-left: 10px;
			width: auto;
			display: inline;
		}
		#newsletter_topics label.error {
			display: none;
			margin-left: 103px;
		}
	</style>

 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#tgl_bkt_penerimaan_srt" ).datepicker({ dateFormat: 'yy-mm-dd' });
  } );
  </script>
  
 
        <!-- CSS INCLUDE -->        
           <link rel="stylesheet" type="text/css" id="theme" href="<?=base_url('backend/')?>css/theme-default.css"/>
		   
		   <style>
.control-label {text-align:left!important;padding-left:140px!important;}
.control-label2 {text-align:left!important;padding-left:7px!important;}
@media (max-width: 768px) { .control-label {font-size:.7em;} }
@media (min-width: 769px) { .control-label {font-size:.9em;} }

@media (max-width: 768px) { .control-label2 {font-size:.7em;} }
@media (min-width: 769px) { .control-label2 {font-size:.9em;} }
</style>

        <!-- EOF CSS INCLUDE -->                   
 <body>
 
  <!-- Modal -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img class="" src="#" width="500px"/>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
        </div>
    </div>
</div>


        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
    		<?php $this->load->view('include/backend/sidebar'); ?>
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                        <!-- START X-NAVIGATION VERTICAL -->
        <?php $this->load->view('include/backend/header'); ?>
                <!-- END X-NAVIGATION VERTICAL -->                   
                
                    <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                
                    <li class="active">Pajak</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" method="post" id="pajak"  action="<?php echo base_url('pajak/simpan');?>" enctype="multipart/form-data">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Pajak</strong> </h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                           
                                <div class="panel-body">                                                                        
                                    <input type="hidden" name="id" id="id" value="<?php echo $id;?>">
                           		    <?php if ($this->session->flashdata('success')) {?>
											<div class="row">
												<div class="col-md-12">
													<div class="alert alert-info push-down-20">
														<span style="color: #FFF500;">Informasi !</span> <?php echo $this->session->flashdata('success');?>.
														<button type="button" class="close" data-dismiss="alert">×</button>
													</div>
												</div>
											</div>
									<?php }?>
                           		
								    <div class="form-group">
                                        <label class="col-md-4 col-xs-12 control-label">1. Jenis Pajak *</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <input type="text" class="form-control" name="jenis_pajak" id="jenis_pajak" value="<?php echo $jenis_pajak;?>" />
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="col-md-4 col-xs-12 control-label">2. Masa Pajak Tahunan</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <input type="text" class="form-control" name="masa_pajak_tahunan" id="masa_pajak_tahunan" value="<?php echo $masa_pajak_tahunan;?>"/>
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="col-md-4 col-xs-12 control-label">3. Nomor Bukti Penerimaan Surat *</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <input type="text" class="form-control" name="no_bkti_penerimaan_srt" id="no_bkti_penerimaan_srt" value="<?php echo $no_bkti_penerimaan_srt;?>"/>
                                        </div>
                                    </div>
									
			
									<div class="form-group">                                        
                                        <label class="col-md-4 col-xs-12 control-label">4. Tanggal Bukti Penerimaan Surat *</label>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text" class="form-control datepicker" name="tgl_bkt_penerimaan_srt" id="tgl_bkt_penerimaan_srt" value="<?php echo $tgl_bkt_penerimaan_srt;?>">                                            
                                            </div>
                                        </div>
                                    </div>
                   
			
                                    <div class="form-group">
                                        <label class="col-md-4 col-xs-12 control-label">5. Dokumen (pdf) *</label>
                                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                                            <input type="file" class="fileinput btn-primary" name="file" id="ktp" title="Browse file" required/>
											<?php
											if($dok<>""){
											?>
                                             <span class="help-block"><?php echo $dok;?></span>
											<?php
											}
											?>
                                        </div>
                                    </div>
									
									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">&nbsp;*Data Harus Di isi</label>
                                        <div class="col-md-6 col-xs-12">                                                                                                                                         
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="col-md-8 col-xs-12 control-label">&nbsp;*Dokumen yang diupload adalah scan dokumen ASLI, Bukan Fotokopi</label>
                                        <div class="col-md-6 col-xs-12">                                                                                                                                          
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
									
									
									<div class="form-group">
                                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                                              <button type="submit" class="btn btn-primary pull-right">Simpan</button>
                                        </div>
											  <div class="col-md-1 col-xs-12">                                                                                                                                        
                                              <button type="button" id="batal" class="btn btn-primary pull-right">Batal</button> &nbsp;
                                        </div>
                                    </div>
									
									
									<div class="form-group">
                                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                                              &nbsp;
                                        </div>
                                    </div>
									
                                </div>
                             <!--  
							 <div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>                                    
                                    <button type="submit" class="btn btn-primary pull-right">Simpan</button>
                                </div>-->
                            </div>
                            </form>
                            
                        </div>
                    </div>                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->


                
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
      <!--  <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/jquery/jquery-ui.min.js"></script>-->
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/bootstrap/bootstrap.min.js"></script>                
        <!-- END PLUGINS -->
        
        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='<?=base_url('backend/')?>js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
       <!-- <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/bootstrap/bootstrap-datepicker.js"></script>    -->            
  <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <!-- END THIS PAGE PLUGINS -->       
        
        <!-- START TEMPLATE -->

        
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins.js"></script>        
        <script type="text/javascript" src="<?=base_url('backend/')?>js/actions.js"></script>        
        <!-- END TEMPLATE -->
		
		<script type="text/javascript">
			$("#batal").click(function() {
				  window.location.href = "<?php echo base_url('pajak')?>";
			});
        </script>

		 <script type="text/javascript">
        $('li a').click(function(e) {
    	    $('#myModal img').attr('src', $(this).attr('data-img-url')); 
    	});
    	
        </script>
    <!-- END SCRIPTS -->                   
    </body>
</html>






