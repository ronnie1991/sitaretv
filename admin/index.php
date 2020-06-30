<?php
Session_start();
include_once("main.class.php");
if(isset($_SESSION['sl_no']))
{
?>
<script type="text/javascript">
window.location='dashboard';
</script>
<?php } ?>
<!DOCTYPE html>
<html lang="en">
 <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Login Sitare | Watch Bengali Movies | Original Web Series</title>
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
        <!--Demo [ DEMONSTRATION ]-->
        <link href="css/demo/jasmine.css" rel="stylesheet">
        <!--SCRIPT-->
        <!--=================================================-->
        <!--Page Load Progress Bar [ OPTIONAL ]-->
        <link href="plugins/pace/pace.min.css" rel="stylesheet">
        <script src="plugins/pace/pace.min.js"></script>
    </head>
    <!--TIPS-->
    <!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
    <body>
    <?php
        if(isset($_POST['adminLogin']))
        {
            if($_POST['form_id']==$_SESSION['session_form'])
            {
            $_SESSION['session_form']='';
            $msg=$object->adminLogin();                        
            }                					
        }
            else
            {
            $_SESSION['session_form']=md5(uniqid(rand(0,10000000)));
            session_write_close();
            }	 		  
    ?>
        <div id="container" class="cls-container">
            <!-- LOGIN FORM -->
            <!--===================================================-->
            <div class="lock-wrapper">
                <div class="panel lock-box">
                    <div class="center"> <img alt="" src="img/user.png" class="img-circle"/> </div>
                    <h4> Hello Admin !</h4>
                    <p class="text-center"><?= isset($msg)? $msg:'Please login to Access your Account';?></p>
                    <div class="row">
                        <form method="post" class="form-inline">
                        <input type="hidden" name="form_id" value="<?= $_SESSION['session_form'];?>" />
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="text-left">
                                    <label class="text-muted">User ID</label>
                                    <input id="signupInputEmail1" name="user_d" type="email" placeholder="Enter Email ID" class="form-control" required />
                                </div>
                                <div class="text-left">
                                    <label for="signupInputPassword" class="text-muted">Password</label>
                                    <input id="signupInputPassword" name="password" type="password" placeholder="Password" class="form-control lock-input" required />
                                </div>
                                <div class="pull-left pad-btm">
                                    <label class="form-checkbox form-icon form-text">
                                    <input type="checkbox"> Remember Me
                                    </label>
                                </div>
                                <button type="submit" name="adminLogin" class="btn btn-block btn-primary">
                                Sign In
                                </button>
                            </div>
                        </form>
                    </div>
                </div>                
            </div>
        </div>
        <!--===================================================-->
        <!-- END OF CONTAINER -->
        <!--JAVASCRIPT-->
        <!--=================================================-->
        <!--jQuery [ REQUIRED ]-->
        <script src="js/jquery-2.1.1.min.js"></script>
        <!--BootstrapJS [ RECOMMENDED ]-->
        <script src="js/bootstrap.min.js"></script>
        <!--Fast Click [ OPTIONAL ]-->
        <script src="plugins/fast-click/fastclick.min.js"></script>
        <!--Jasmine Admin [ RECOMMENDED ]-->
        <script src="js/scripts.js"></script>
        <!--Switchery [ OPTIONAL ]-->
        <script src="plugins/switchery/switchery.min.js"></script>
        <!--Bootstrap Select [ OPTIONAL ]-->
        <script src="plugins/bootstrap-select/bootstrap-select.min.js"></script>
    </body>

</html>