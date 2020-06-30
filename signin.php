<?php 
include_once("main.class.php");
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/plyr.css">
	<link rel="stylesheet" href="css/photoswipe.css">
	<link rel="stylesheet" href="css/default-skin.css">
	<link rel="stylesheet" href="css/main.css">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">
	<link rel="apple-touch-icon" sizes="72x72" href="icon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="icon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="icon/apple-touch-icon-144x144.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>Sitare – Online Movies, TV Shows & Cinema HTML Template</title>
</head>

<body class="body">


	<?php 
	if(isset($_POST['userSingIn']))
	{
	if($_POST['form_id']==$_SESSION['session_form'])
	{

	$_SESSION['session_form']='';
	if(!isset($_GET['id']))
	{
		$msg=$object->userLogin();
	}
	if(isset($_GET['id']))
	{
		$msg=$object->userLoginVideoSource($_GET['id']);

	}


	}                					
	}
	else
	{
	$_SESSION['session_form']=md5(uniqid(rand(0,10000000)));
	session_write_close();
	}	
	?>
	<div class="sign section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- authorization form -->
						<form method="post" class="sign__form">
							<a href="index" class="sign__logo">
								<img src="img/logo.png" alt="">
							</a>
							<span><?= isset($msg)? $msg: '';?></span>

							<input type="hidden" name="form_id" value="<?= $_SESSION['session_form'];?>" />

							<div class="sign__group">
								<input type="email" name="email" class="sign__input" placeholder="Email">
							</div>

							<div class="sign__group">
								<input type="password" name="password" class="sign__input" placeholder="Password">
							</div>

							<div class="sign__group sign__group--checkbox">
								<input id="remember" name="remember" type="checkbox" checked="checked">
								<label for="remember">Remember Me</label>
							</div>
							
							<button class="sign__btn" type="submit" name="userSingIn">Sign in</button>

							<span class="sign__text">Don't have an account? <a href="signup">Sign up!</a></span>

							<span class="sign__text"><a href="forgot">Forgot password?</a></span>
						</form>
						<!-- end authorization form -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- JS -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.mousewheel.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.min.js"></script>
	<script src="js/wNumb.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.morelines.min.js"></script>
	<script src="js/plyr.min.js"></script>
	<script src="js/photoswipe.min.js"></script>
	<script src="js/photoswipe-ui-default.min.js"></script>
	<script src="js/main.js"></script>
</body>


</html>