<?php 
include_once("main.class.php");
?>
<!DOCTYPE html>
<html lang="en">
  
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Sitare -Watch Bengali Movies | Original Web Series </title>
        <link rel="shortcut icon" href="img/favicon-32x32.png">
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
                        <h3><i class="fa fa-home"></i> Form Components </h3>
                        <div class="breadcrumb-wrapper">
                            <span class="label">You are here:</span>
                            <ol class="breadcrumb">
                                <li> <a href="#"> Home </a> </li>
                                <li class="active"> form components </li>
                            </ol>
                        </div>
                    </header>
                    <!--Page content-->
                    <?php
                    	if(isset($_POST['uploadslider']))
                        {
                            if($_POST['form_id']==$_SESSION['session_form'])
                            {
                            $_SESSION['session_form']='';
                            $msg=$object->uploadBannerSlider();
                            }                					
                        }
                            else
                            {
                            $_SESSION['session_form']=md5(uniqid(rand(0,10000000)));
                            session_write_close();
                            }	 		  
		    	    ?>
                    <!--===================================================-->
                    <section id="page-content">
                        <div class="row">                           
                            <div class="col-lg-12">                                
                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-control">
                                            <button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></button>
                                            <button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i></button>
                                            <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
                                            <button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>
                                        </div>
                                        <h3 class="panel-title"><?= isset($msg)? $msg:'Upload Banner Slider';?></h3>
                                    </div>
                                    <div class="panel-body">
                                        <!--Dropzonejs-->
                                        <!--===================================================-->
                                        <form method="post" enctype='multipart/form-data'>
                                        <input type="hidden" name="form_id" value="<?= $_SESSION['session_form'];?>" /> 
                                            <div class="dz-default dz-message">
                                                <div class="dz-icon icon-wrap icon-circle icon-wrap-md"> <i class="fa fa-cloud-upload fa-2x"></i> </div>
                                                <div>
                                                    <p class="dz-text">Resolution (Width 1920 pixel ) (Height 480 pixel ) </p>
                                                   
                                                </div>
                                            </div>
                                            <div class="fallback">
                                                <input name="bnrslider" type="file" required accept="image/gif, image/jpeg, image/png" />
                                            </div>
                                            <div>
                                                <button class="btn btn-info" type="submit" name="uploadslider">Submit</button>
                                            </div>
                                        </form>
                                        <!--===================================================-->
                                        <!-- End Dropzonejs -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--===================================================-->
                    <!--End page content-->
                </section>
                <!--===================================================-->
                <!--END CONTENT CONTAINER-->
                <!--MAIN NAVIGATION-->
                <!--===================================================-->
                <?php include_once("main-navigation.php"); ?>
                <!--===================================================-->
                <!--END MAIN NAVIGATION-->
               
                <!--===================================================-->
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
        <!--Masked Input [ OPTIONAL ]-->
        <script src="plugins/masked-input/jquery.maskedinput.min.js"></script>
        <!--Summernote [ OPTIONAL ]-->
        <script src="plugins/summernote/summernote.min.js"></script>
        <!--Fullscreen jQuery [ OPTIONAL ]-->
        <script src="plugins/screenfull/screenfull.js"></script>
        <!--Form Component [ SAMPLE ]-->
        <script src="js/demo/form-component.js"></script>
    </body>

</html>