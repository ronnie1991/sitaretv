<?php 
include_once("main.class.php");
?>
<!DOCTYPE html>
<html lang="en">
  
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Sitare -Watch Bengali Movies | Original Web Series </title>
        <link rel="shortcut icon" href="img/favicon.ico">
        <!--STYLESHEET-->
        <!--=================================================-->
        <!--Roboto Slab Font [ OPTIONAL ] -->
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700|Roboto:300,400,700" rel="stylesheet">
        <!--Bootstrap Stylesheet [ REQUIRED ]-->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--Jasmine Stylesheet [ REQUIRED ]-->
        <link href="css/style.css" rel="stylesheet">
        <!--Font Awesome [ OPTIONAL ]-->
        <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!--Switchery [ OPTIONAL ]-->
        <link href="plugins/switchery/switchery.min.css" rel="stylesheet">
        <!--Bootstrap Select [ OPTIONAL ]-->
        <link href="plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
        <!--Bootstrap Tags Input [ OPTIONAL ]-->
        <link href="plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
        <!--Jquery Tag It [ OPTIONAL ]-->
        <link href="plugins/tag-it/jquery.tagit.css" rel="stylesheet">
        <!--Ion.RangeSlider [ OPTIONAL ]-->
        <link href="plugins/ion-rangeslider/ion.rangeSlider.css" rel="stylesheet">
        <link href="plugins/ion-rangeslider/ion.rangeSlider.skinNice.css" rel="stylesheet">
        <!--Chosen [ OPTIONAL ]-->
        <link href="plugins/chosen/chosen.min.css" rel="stylesheet">
        <!--noUiSlider [ OPTIONAL ]-->
        <link href="plugins/noUiSlider/jquery.nouislider.min.css" rel="stylesheet">
        <link href="plugins/noUiSlider/jquery.nouislider.pips.min.css" rel="stylesheet">
        <!--Bootstrap Timepicker [ OPTIONAL ]-->
        <link href="plugins/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
        <!--Bootstrap Datepicker [ OPTIONAL ]-->
        <link href="plugins/bootstrap-datepicker/bootstrap-datepicker.css" rel="stylesheet">
        <!--Dropzone [ OPTIONAL ]-->
        <link href="plugins/dropzone/dropzone.css" rel="stylesheet">
        <!--Summernote [ OPTIONAL ]-->
        <link href="plugins/summernote/summernote.min.css" rel="stylesheet">
        <!--Demo [ DEMONSTRATION ]-->
        <link href="css/demo/jasmine.css" rel="stylesheet">
        <!--SCRIPT-->
        <!--=================================================-->
        <!--Page Load Progress Bar [ OPTIONAL ]-->
        <link href="plugins/pace/pace.min.css" rel="stylesheet">
        <script src="plugins/pace/pace.min.js"></script>
    </head>
    <body>
        <div id="container" class="effect mainnav-lg navbar-fixed mainnav-fixed">
            <!--NAVBAR-->
            <!--===================================================-->
            <?php include_once("header.php"); ?>
            <!--===================================================-->
            <!--END NAVBAR-->
            <div class="boxed">
                <!--CONTENT CONTAINER-->
                <!--===================================================-->
                <section id="content-container">
                <?php include_once("profile-header.php"); ?>
                    <header class="pageheader">
                        <h3><i class="fa fa-film"></i> For Stream </h3>
                        <div class="breadcrumb-wrapper">
                            <span class="label">You are here:</span>
                            <ol class="breadcrumb">
                                <li> <a href="#"> Home </a> </li>
                                <li class="active"> form components </li>
                            </ol>
                        </div>
                    </header>
                    <?php
                    	if(isset($_POST['crtstrm']))
                        {
                            if($_POST['form_id']==$_SESSION['session_form'])
                            {
                            $_SESSION['session_form']='';
                            $msg=$object->createStream();                        
                            }                					
                        }
                            else
                            {
                            $_SESSION['session_form']=md5(uniqid(rand(0,10000000)));
                            session_write_close();
                            }	 		  
		    	    ?>
                    <!--Page content-->
                    <!--===================================================-->
                    <section id="page-content">
                        <div class="row">
                            <div class="col-sm-12 eq-box-sm">
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <div class="panel-control">
                                                <button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></button>
                                                <button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i></button>
                                                <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
                                                <button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>
                                            </div>
                                            <h3 class="panel-title"><?= isset($msg)? $msg:'Create Stream';?></h3>
                                        </div>
                                        <!--Block Styled Form -->
                                        <!--===================================================-->
                                        <form method="post" enctype='multipart/form-data'>
                                        <input type="hidden" name="form_id" value="<?= $_SESSION['session_form'];?>" />
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Title*</label>
                                                            <input type="text" name="title" class="form-control" placeholder="Title of the Video"  REQUIRED />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Cover Pic* (Width 348 pixel / heigh 196 pixel) </label>
                                                            <input type="file" name="coverpic" class="form-control" accept="image/gif, image/jpeg, image/png" REQUIRED />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Genres</label>
                                                            <input type="text" name="genes" placeholder="Action,Triler,etc." class="form-control" REQUIRED>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Director</label>
                                                            <input type="text" name="director" placeholder="Director Name"  class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Cast</label>
                                                            <input type="text" name="cast" placeholder="Cast Name"  class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Realies Year</label>
                                                            <input type="text" name="realiesyear" placeholder="Realies Year" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Running Time</label>
                                                            <input type="text" name="runintime" placeholder="Running Time" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Country</label>
                                                            <input type="text" name="country" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Description</label>
                                                            <textarea id="sidebarChatMessage" name="descripion" placeholder="Write Description" rows="4" class="form-control autosize" name="sidebarChatMessage"></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Trailer</label>
                                                            <input type="file" name="trailer" accept="video/mp4" class="form-control">
                                                        </div>
                                                    </div>
                                                   <div class="col-sm-6">
                                                    <div class="form-group">
                                                    <label class="control-label">Video Category</label>
                                                    <!-- Bootstrap Select with Search Input -->
                                                    <!--===================================================-->
                                                    <select name="videocategory" class="form-control selectpicker" data-live-search="true">
                                                        <option value="" >Select a video category</option>
                                                        <option value="1">Shows</option>
                                                        <option value="2">Music Video</option>
                                                        <option value="3">Shorts</option>
                                                        <option value="4">News</option>
                                                        <option value="5">Upcoming</option>
                                                        <option value="6">Timeline</option>
                                                    </select>
                                                    <!--===================================================-->                                                
                                                    </div>
                                                  </div>
                                                </div>
                                                
                                            </div>
                                            <div class="panel-footer text-right">
                                                <button class="btn btn-info" type="submit" name="crtstrm">Submit</button>
                                            </div>
                                        </form>
                                        <!--===================================================-->
                                        <!--End Block Styled Form -->
                                    </div>
                                </div>
                            
                        </div>
                    </section>
                    <!--===================================================-->
                    <?php

                        if(isset($_POST['upmnstrm']))
                        {
                           $mvf=$object->uplodMainVideoFile();          					
                        }
                                            		  
		    	    ?>
                    <section id="page-content">
                        <div class="row">
                            <div class="col-sm-12 eq-box-sm">
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <div class="panel-control">
                                                <button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></button>
                                                <button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i></button>
                                                <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
                                                <button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>
                                            </div>
                                            <h3 class="panel-title"><?= isset($mvf)? $mvf:'Upload Main Stream';?></h3>
                                        </div>
                                        <!--Block Styled Form -->
                                        <!--===================================================-->
                                        <form method="post" enctype='multipart/form-data'>                                        
                                            <div class="panel-body">
                                              <div class="row">
                                                <div class="col-sm-6">
                                                  <div class="form-group">
                                                    <label class="control-label">Stream Title*</label>
                                                    <!-- Bootstrap Select with Search Input -->
                                                    <!--===================================================-->
                                                    <select name="sttirnm" class="form-control selectpicker strmid" data-live-search="true" REQUIRED>
                                                        <option value="" >Select a Strem Title</option>
                                                        <?php foreach($object->findAllStream() as $strm ) {?>
                                                        <option value="<?= $strm['id'];?>"><?= $strm['title'];?></option>
                                                        <?php } ?>
                                                    </select>
                                                    <!--===================================================-->                                                
                                                  </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Upload Video File*</label>
                                                        <input type="file" name="mmainstrmfile" accept="video/mp4" class="form-control" REQUIRED />
                                                    </div>
                                                </div>
                                                
                                                <div class="col-sm-6 sesn" style="display:none">
                                                  <div class="form-group">
                                                    <label class="control-label">Session*</label>
                                                    <!-- Bootstrap Select with Search Input -->
                                                    <!--===================================================-->
                                                    <select name="session" class="form-control selectpicker rqr" data-live-search="true" REQUIRED>
                                                        <option value="" >Select a Session</option>
                                                        <?php for($i=1;$i<=15;$i++ ) {?>
                                                        <option value="<?= $i;?>">Session-<?= $i;?></option>
                                                        <?php } ?>
                                                    </select>
                                                    <!--===================================================-->                                                
                                                  </div>
                                                </div>
                                                <div class="col-sm-6 sesn" style="display:none">
                                                    <div class="form-group">
                                                        <label class="control-label">Episode*</label>
                                                        <input type="text" name="episode" class="form-control rqr" REQUIRED>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Cover Pic*</label>
                                                        <input type="file" name="coverpic" class="form-control" accept="image/gif, image/jpeg, image/png" REQUIRED />
                                                    </div>
                                                </div>

                                             </div>                                              
                                            </div>
                                            <div class="panel-footer text-right">
                                                <button class="btn btn-info" type="submit" name="upmnstrm">Submit</button>
                                            </div>
                                        </form>
                                        <!--===================================================-->
                                        <!--End Block Styled Form -->
                                    </div>
                                </div>
                            
                        </div>
                    </section>

                    <?php
                    if(isset($_POST['tagin']))
                    {
                        $tagm=$object->tagStream();          					
                    }
                    ?>

                    <section id="page-content">
                        <div class="row">
                            <div class="col-sm-12 eq-box-sm">
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <div class="panel-control">
                                                <button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></button>
                                                <button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i></button>
                                                <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
                                                <button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>
                                            </div>
                                            <h3 class="panel-title"><?= isset($tagm)? $tagm:'Tag Stream';?></h3>
                                        </div>
                                        <!--Block Styled Form -->
                                        <!--===================================================-->
                                        <form method="post" enctype='multipart/form-data'>                                        
                                            <div class="panel-body">
                                                <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                    <label class="control-label">Stream Title</label>
                                                    <!-- Bootstrap Select with Search Input -->
                                                    <!--===================================================-->
                                                    <select name="steram_id" class="form-control selectpicker" data-live-search="true" REQUIRED>
                                                        <option value="" >Select a Strem Title</option>
                                                        <?php foreach($object->findAllStream() as $strm ) {?>
                                                        <option value="<?= $strm['id'];?>"><?= $strm['title'];?></option>
                                                        <?php } ?>
                                                    </select>
                                                    <!--===================================================-->                                                
                                                    </div>
                                                  </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                        <label class="control-label">FRESH RELEASE OF THIS SEASON</label>
                                                            <select name="fros" class="form-control selectpicker" data-live-search="true">
                                                                <option value="" >Select a Status</option>
                                                                <option value="1">Active</option>
                                                                <option value="0">inactive</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                        <label class="control-label">Trending On-screen</label>
                                                            <!-- Bootstrap Select with Search Input -->
                                                            <!--===================================================-->
                                                            <select name="tos" class="form-control selectpicker" data-live-search="true">
                                                                        <option value="" >Select a Status</option>
                                                                        <option value="1">Popular</option>
                                                                        <option value="2">Thriller</option>
                                                                        <option value="3">Action</option>
                                                                        <option value="4">Romantic</option>
                                                                        <option value="5">Drama</option>
                                                                        <option value="6">Comedy</option>
                                                                        <option value="7">Education</option>
                                                                        <option value="8">It's Hot</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                        <label class="control-label">Favoured Movies</label>
                                                            <select name="fm" class="form-control selectpicker" data-live-search="true">
                                                                <option value="" >Select a Status</option>
                                                                <option value="1">Active</option>
                                                                <option value="0">inactive</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                        <label class="control-label">Sitare Recommends</label>
                                                            <select name="sr" class="form-control selectpicker" data-live-search="true">
                                                                <option value="" >Select a Status</option>
                                                                <option value="1">Active</option>
                                                                <option value="0">inactive</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                        <label class="control-label">MUST WATCH SERIES</label>
                                                        <select name="mws" class="form-control selectpicker" data-live-search="true">
                                                            <option value="" >Select a Status</option>
                                                            <option value="1">Active</option>
                                                            <option value="0">inactive</option>
                                                        </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>                                            
                                            <div class="panel-footer text-right">
                                                <button class="btn btn-info" type="submit" name="tagin">Submit</button>
                                            </div>
                                        </form>
                                        <!--===================================================-->
                                        <!--End Block Styled Form -->
                                    </div>
                                </div>
                            
                        </div>
                    </section>

                   
                    
                    <!--End page content-->
                </section>
                <!--===================================================-->
                <!--END CONTENT CONTAINER-->
                <!--MAIN NAVIGATION-->
                <!--===================================================-->
                <?php include_once("main-navigation.php"); ?>
                <!--===================================================-->
                <!--END MAIN NAVIGATION-->                
            </div>
            <!-- FOOTER -->
            <!--===================================================-->
            <?php include_once("footer.php"); ?>
            <!--===================================================-->
            <!-- END FOOTER -->
            <!-- SCROLL TOP BUTTON -->
            <!--===================================================-->
            <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
            <!--===================================================-->
        </div>
        <!--===================================================-->
        <!-- END OF CONTAINER -->
        <!--JAVASCRIPT-->
        <!--=================================================-->
        <!--jQuery [ REQUIRED ]-->
        <script src="js/jquery-2.1.1.min.js"></script>
        <!--jQuery UI [ REQUIRED ]-->
        <script src="js/jquery-ui.min.js"></script>
        <!--BootstrapJS [ RECOMMENDED ]-->
        <script src="js/bootstrap.min.js"></script>
        <!--Fast Click [ OPTIONAL ]-->
        <script src="plugins/fast-click/fastclick.min.js"></script>
        <!--Jasmine Admin [ RECOMMENDED ]-->
        <script src="js/scripts.js"></script>
        <!--Jquery Nano Scroller js [ REQUIRED ]-->
        <script src="plugins/nanoscrollerjs/jquery.nanoscroller.min.js"></script>
        <!--Metismenu js [ REQUIRED ]-->
        <script src="plugins/metismenu/metismenu.min.js"></script>
        <!--Switchery [ OPTIONAL ]-->
        <script src="plugins/switchery/switchery.min.js"></script>
        <!--Bootstrap Select [ OPTIONAL ]-->
        <script src="plugins/bootstrap-select/bootstrap-select.min.js"></script>
        <!--Bootstrap Tags Input [ OPTIONAL ]-->
        <script src="plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
        <!--Bootstrap Tags Input [ OPTIONAL ]-->
        <script src="plugins/tag-it/tag-it.min.js"></script>
        <!--Chosen [ OPTIONAL ]-->
        <script src="plugins/chosen/chosen.jquery.min.js"></script>
        <!--noUiSlider [ OPTIONAL ]-->
        <script src="plugins/noUiSlider/jquery.nouislider.all.min.js"></script>
        <!--Bootstrap Timepicker [ OPTIONAL ]-->
        <script src="plugins/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
        <!--Bootstrap Datepicker [ OPTIONAL ]-->
        <script src="plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
        <!--Dropzone [ OPTIONAL ]-->
        <script src="plugins/dropzone/dropzone.min.js"></script>
        <!--Dropzone [ OPTIONAL ]-->
        <script src="plugins/ion-rangeslider/ion.rangeSlider.min.js"></script>
        <!--Masked Input [ OPTIONAL ]-->
        <script src="plugins/masked-input/jquery.maskedinput.min.js"></script>
        <!--Summernote [ OPTIONAL ]-->
        <script src="plugins/summernote/summernote.min.js"></script>
        <!--Fullscreen jQuery [ OPTIONAL ]-->
        <script src="plugins/screenfull/screenfull.js"></script>
        <!--Form Component [ SAMPLE ]-->
        <script src="js/demo/form-component.js"></script>

        <script>
     
       $(".strmid").change(function(){            
			  var strmId=$(this).val();
                $.ajax({
				  url:'ajax_strmtyp',
				  data:{strmId:strmId},
				  type : 'POST' ,
				  cache:false,
				  success:function(data){
                    if(data!=3)
                    {
                        $(".sesn").show("slow"); 		
                    }
                    if(data==3)
                    {
                        $( ".sesn" ).hide("slow");
                        $('.rqr').removeAttr('required'); 		
                    }			  
				 } 
		        });  					 
			        	
		});  
       
    
    </script>
    </body>

</html>