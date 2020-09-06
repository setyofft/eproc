
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>JMTO Eproc</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
                        
        <!-- CSS INCLUDE -->        
           <link rel="stylesheet" type="text/css" id="theme" href="<?=base_url('backend/')?>css/theme-default.css"/>



 <script>

function PopupCenter(url, title, w, h) {
    // Fixes dual-screen position                         Most browsers      Firefox
    var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : window.screenX;
    var dualScreenTop = window.screenTop != undefined ? window.screenTop : window.screenY;

    var width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
    var height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

    var left = ((width / 2) - (w / 2)) + dualScreenLeft;
    var top = ((height / 2) - (h / 2)) + dualScreenTop;
    var newWindow = window.open(url, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);

    // Puts focus on the newWindow
    if (window.focus) {
        newWindow.focus();
    }
}
        </script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    var kd_klbi_1 = [
<?php
$query = $this->db->query("select * from drt_m_klbi");

foreach ($query->result() as $row)
{
?>
	"<?php echo $row->kode;?>-<?php echo $row->description;?>",
<?php
}
?>     
	
    ];
	
/*
	 $( "#kd_klbi_2").autocomplete({
      source: kd_klbi_1
    });
	
	$( "#kd_klbi_3").autocomplete({
      source: kd_klbi_1
    });
*/	
		<?php
		for ($i = 1; $i <= 10; $i++) {
		?>
		    $( "#kd_klbi_<?php echo $i;?>").autocomplete({
					source: kd_klbi_1
			});
																	
		<?php
		}
		?>
	
	
  } );
  
  		<?php
	for ($i = 1; $i <= 10; $i++) {
		?>
		
    function pick<?php echo $i;?>()
  {
	  var mystr= document.getElementById("kd_klbi_<?php echo $i;?>").value;
	  var myarr = mystr.split("-");
	  document.getElementById("kd_klbi_<?php echo $i;?>").value = myarr[0];
	  document.getElementById("ket_klbi_<?php echo $i;?>").value = myarr[1];
  }
  
  		<?php
	}
		?>
  /* function pick2()
  {
	  var mystr= document.getElementById("kd_klbi_2").value;
	  var myarr = mystr.split("-");
	  document.getElementById("kd_klbi_2").value = myarr[0];
	  document.getElementById("ket_klbi_2").value = myarr[1];
  }
  
   function pick3()
  {
	  var mystr= document.getElementById("kd_klbi_3").value;
	  var myarr = mystr.split("-");
	  document.getElementById("kd_klbi_3").value = myarr[0];
	  document.getElementById("ket_klbi_3").value = myarr[1];
  }
  */
  
  </script>
<!--
<script src="<?=base_url('assets')?>/lib/jquery-1.11.1.min.js"></script>
<script src="<?=base_url('assets')?>/lib/jquery.validate.min.js"></script>
<script src="<?=base_url('assets')?>/lib/additional-methods.min.js"></script>-->


	<script src="<?=base_url('assets')?>/lib/jquery.js"></script>
	<script src="<?=base_url('assets')?>/dist/jquery.validate.js"></script>        
	
	
	
	<script>

	$().ready(function() {
	
		$("#ijin_usaha").validate({
			rules: {
				jenis_ijin: "required",
				nomor_surat: "required",
				berlaku_sampai: "required",
				instansi_pemberi: "required",
                kualifikasi2: "required",
                klasifikasi: {
                        required: true
                        },

                    <?php
					if($dok==""){
					?>
				file: {
						  required: true,
						  extension: "pdf"
                        }
                        <?php
                     }
                        ?>
				},
			messages: {
				jenis_ijin: "Wajib di isi",
				nomor_surat: "Wajib di isi",
				berlaku_sampai: "Wajib di isi",
				instansi_pemberi: "Wajib di isi",
                kualifikasi2: "Wajib di isi",
                klasifikasi: {
                             required: "Please choose something!"
                    },
                <?php
				if($dok==""){
				?>
                file: "File harus pdf ukuran file max 2 MB"
                <?php
                    }
                ?>

			}
		});

	


	});
	</script>
	
 <!--
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <script>
  $( function() {
    $( "#berlaku_sampai" ).datepicker({ dateFormat: 'dd-mm-yy' });
  } );
  </script>
  -->
  
  
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#berlaku_sampai" ).datepicker({ dateFormat: 'yy-mm-dd' });
  } );
  </script>

  <script type="text/javascript">
  
       /* function displayResult()
        {
     document.getElementById("myTable").insertRow(-1).innerHTML = '<td>1</td><td>2</td>';
        }
		   <tr>
            <td class="col-sm-2">
                <input type="text" name="kd_klbi_1" id="kd_klbi_1"  class="form-control" onchange="pick1()"/>
            </td>
            <td class="col-sm-10">
                <input type="text" name="ket_klbi_1" id="ket_klbi_1"  class="form-control"/>
            </td>
        </tr>
		*/
		
	$(document).ready(function () {
    var counter = 0;

    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";
        cols += '<td><input type="text" class="form-control" name="kd_klbi_' + counter + '" id="kd_klbi_' + counter + '" onchange="pick'+ counter +'()" /></td>';
        cols += '<td><input type="text" class="form-control" name="ket_klbi_' + counter + '" id="ket_klbi_' + counter + '"/></td>';
        cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
        newRow.append(cols);
        $("table.table-bordered").append(newRow);
        counter++;
    });


    $("table.table-bordered").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});


  </script>
  
<style>
.control-label {text-align:left!important;padding-left:140px!important;}
.control-label2 {text-align:left!important;padding-left:7px!important;}
@media (max-width: 768px) { .control-label {font-size:.7em;} }
@media (min-width: 769px) { .control-label {font-size:.9em;} }

@media (max-width: 768px) { .control-label2 {font-size:.7em;} }
@media (min-width: 769px) { .control-label2 {font-size:.9em;} }
</style>


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
                
                    <li class="active">Ijin Usaha</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" id="ijin_usaha" method="post" action="<?php echo base_url('ijin_usaha/simpan');?>" enctype="multipart/form-data">
                            <input type="hidden" name="id" id="id" value="<?php echo $id; ?>" >
							<div class="panel panel-default">
                                <div class="panel-heading">
                                        <div class="page-title">                    
                    <h3>IJIN USAHA</h3>
                </div>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                           
                                <div class="panel-body">                                                                        
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
                                        <label class="col-md-3 col-xs-12 control-label">1. Jenis Ijin * </label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <input type="text" class="form-control" name="jenis_ijin" id="jenis_ijin"  value="<?php echo $jenis_ijin;?>" autocomplete="off"/>
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">2. Nomor Surat *</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <input type="text" class="form-control" name="nomor_surat" id="nomor_surat" value="<?php echo $nomor_surat;?>" autocomplete="off"/>
                                        </div>
                                    </div>
									
			
									
									<div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">3. Berlaku Sampai *</label>
                                        <div class="col-md-3 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text" class="form-control datepicker" name="berlaku_sampai" id="berlaku_sampai" value="<?php echo $berlaku_sampai;?>" autocomplete="off">                                            
                                            </div>
                                          
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">4. Instansi Pemberi *</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <input type="text" class="form-control" name="instansi_pemberi" id="instansi_pemberi" value="<?php echo $instansi_pemberi;?>" autocomplete="off"/>
                                        </div>
                                    </div>
									
									 <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">5. Kegiatan Usaha/KLBI *</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                           <!-- <select class="form-control select" name="kualifikasi" id="kualifikasi" required>
											<option value="">-- Pilih --</option>
											<?php
											foreach ($kualifikasi->result() as $row)
											{
											?>
                                                <option value="<?php echo $row->id;?>" <?php echo $row->id==$vkualifikasi?'selected':'';?>><?php echo $row->kualifikasi;?></option>
                                              <?php
											}
											  ?>
                                     </select>-->
											
								<table class="table table-bordered" id="myTable">
                                        <thead>
                                            <tr>
                                                <th width="5%">No</th>
                                                <th width="15%">Kode KLBI</th>
                                                <th>Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
										for ($i = 1; $i <= 10; $i++) {
										?>
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td>  
												<input type="text" class="form-control" name="kd_klbi_<?php echo $i;?>" id="kd_klbi_<?php echo $i;?>" value="" onchange="pick<?php echo $i;?>()" autocomplete="off"/>
												</td>
                                                <td><input type="text" class="form-control" name="ket_klbi_<?php echo $i;?>" id="ket_klbi_<?php echo $i;?>" value="" autocomplete="off"/></td>
                                            </tr>
										<?php
										}
										?>
                                           <!-- 
										   <tr>
                                                <td>2</td>
                                                <td>  
												<input type="text" class="form-control" name="kd_klbi_2" id="kd_klbi_2" value="" onchange="pick2()" autocomplete="off"/>
												</td>
                                                <td><input type="text" class="form-control" name="ket_klbi_2" id="ket_klbi_2" value="" autocomplete="off"/></td>
                                            </tr>
                                             <tr>
                                                <td>3</td>
                                                <td>  
												<input type="text" class="form-control" name="kd_klbi_3" id="kd_klbi_3" value="" onchange="pick3()" autocomplete="off"/>
												</td>
                                                <td><input type="text" class="form-control" name="ket_klbi_3" id="ket_klbi_3" value="" autocomplete="off"/></td>
                                            </tr>
											-->
                                        </tbody>
						
	
	
                                    </table>                    
									  <!--<button type="button" onclick="displayResult()">Insert new row</button>-->
									
	<!--								
<table id="myTable" class="table table-bordered">
    <thead>
        <tr>
            <td>Kode KLBI</td>
            <td>Keterangan</td>
            <td>Aksi</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="col-sm-2">
                <input type="text" name="kd_klbi_1" id="kd_klbi_1"  class="form-control" onchange="pick1()"/>
            </td>
            <td class="col-sm-10">
                <input type="text" name="ket_klbi_1" id="ket_klbi_1"  class="form-control"/>
            </td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="2" style="text-align: left;">
                <input type="button" class="btn btn-lg btn-block " id="addrow" value="Add Row" />
            </td>
        </tr>
        <tr>
        </tr>
    </tfoot>
</table>-->


                                         
                                        </div>
                                    </div>
									
			                
									
							 		<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">6. Klasifikasi *</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control select" name="klasifikasi" id="klasifikasi" required>
											<option value="">-- Pilih --</option>
											<?php
											foreach ($klasifikasi->result() as $row)
											{
											?>
                                                <option value="<?php echo $row->id;?>" <?php echo $row->id==$vklasifikasi?'selected':'';?>><?php echo $row->klasifikasi;?></option>
                                              <?php
											}
											  ?>
                                            </select>
                                         
                                        </div>
                                    </div>
				
										
									

                                   <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">6. 1 Klasifikasi Lainnya</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <textarea class="form-control" name="klasifikasi_lainnya" id="klasifikasi_lainnya" rows="5" autocomplete="off"><?php  echo $klasifikasi_lainnya;?></textarea>
                                         
                                        </div>
                                    </div>
                                    
                   
			
                                     <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">7. Dokumen  * </label>
                                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                                            <input type="file" class="fileinput btn-primary" name="file" id="file" title="Browse file"/>
											<?php
											if($dok<>"0" && $dok<>""){
											?>
                                            <!-- <span class="help-block"><?php echo $dok;?></span>-->
                                             <a href="#" onclick="PopupCenter('<?php echo base_url('uploads/ijin_usaha/'.$dok); ?>','xtf','1000','700')">Lihat</a>  
											 <?php
                                            }
                                            
                                         

											?>
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">&nbsp;*File PDF </label>
										
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
                                              <button type="submit" class="btn btn-primary pull-right">Simpan</button> &nbsp;
                            
                                          
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
                             <!--   <div class="panel-footer">
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
        <!--<script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/jquery/jquery.min.js"></script>-->
      <!--  <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/jquery/jquery-ui.min.js"></script>-->
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/bootstrap/bootstrap.min.js"></script>                
        <!-- END PLUGINS -->
        
        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='<?=base_url('backend/')?>js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="<?=base_url('backend/')?>js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
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
				  window.location.href = "<?php echo base_url('ijin_usaha')?>";
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






