<?php 
include_once("main.class.php");
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
	<title>Sitare – Online Movies, TV Shows & Cinema</title>
</head>

<body class="body">

	<!-- header -->
	<?php include_once("header.php");
	   if(isset($_POST['userSingUp']))
	   {
		  if($_POST['form_id']==$_SESSION['session_form'])
		   {
			$password=$_POST['password'];
			$cpassword=$_POST['cpassword'];
			if($password!=$cpassword)
			{
				$msg="<h4 style='color:red;'>Password doesn't match</h4>";

			}
			if($password==$cpassword)
			{
				$_SESSION['session_form']='';
				$msg=$object->cretUserLogin();
			}		                         
		   }                					
	   }
		else
		{
		$_SESSION['session_form']=md5(uniqid(rand(0,10000000)));
		session_write_close();
		}	
	 ?>
	<!-- end header -->

	<!-- page title -->
	<section class="section section--first section--bg" data-bg="img/section/section.jpg" style="margin-top: 0px;">		
	</section>
	<!-- end page title -->

	<!-- content -->
	<div class="content">		

		<div class="container">
			<!-- content tabs -->
			<div class="tab-content">
				<div class="tab-pane fade show active">
					<div class="row">
						<!-- details form -->
						<div class="col-12 col-lg-12">
							<form method="post" class="profile__form">
								<div class="row">
									<div class="col-12">
										<h4 class="profile__title"><?= isset($msg)? $msg: 'Sign up credentials';?></h4>
									</div>

									<div class="col-12 col-md-6 col-lg-12 col-xl-3">
									<input type="hidden" name="form_id" value="<?= $_SESSION['session_form'];?>" />
										<div class="profile__group">
											<label class="profile__label" for="username">Name</label>
											<input type="text" name="userName" class="profile__input" placeholder="Name" pattern="[a-zA-Z][a-zA-Z\s]*" minlength="3" maxlength="50" oninvalid="setCustomValidity('Enter Valid Name')"  onchange="try{setCustomValidity('')}catch(e){}" required>
										</div>
									</div>

									<div class="col-12 col-md-6 col-lg-12 col-xl-3">
										<div class="profile__group">
											<label class="profile__label" for="username">Phone Number</label>
											<input type="text" name="phoneNumber" class="profile__input" placeholder="Phone Number"  pattern="[0-9]{1}[0-9]{9}" minlength="3" maxlength="10"  oninvalid="setCustomValidity('Enter Valid Mobile Number')" onchange="try{setCustomValidity('')}catch(e){}" required>
										</div>
									</div>									

									<div class="col-12 col-md-6 col-lg-12 col-xl-3">
										<div class="profile__group">
											<label class="profile__label" for="username">Date of Birth</label>
											<input type="date" name="dob" required>
										</div>
									</div>

									<div class="col-12 col-md-6 col-lg-12 col-xl-3">
										<div class="profile__group">
											<label class="profile__label" for="username">Referral code (Optional)</label>
											<input type="text" name="refelcod" class="profile__input" placeholder="Referral code (Optional)" >
										</div>
									</div>

									<div class="col-12 col-md-6 col-lg-12 col-xl-4">
										<div class="profile__group">
											<label class="profile__label" >Email</label>
											<input type="email" name="email" class="profile__input" placeholder="email@sitare.com" required> 
										</div>
									</div>									

									<div class="col-12 col-md-6 col-lg-12 col-xl-4">
										<div class="profile__group">
										<label class="profile__label" >Password</label>
											<input type="password" name="password" class="profile__input" placeholder="Password" id="txtNewPassword" required>
										</div>
									</div>

									<div class="col-12 col-md-6 col-lg-12 col-xl-4">
										<div class="profile__group">
										<label class="profile__label" for="newpass">Confirm Password <span id="divCheckPassword"></span></label>
											<input type="password" name="cpassword" class="profile__input" placeholder="Confirm Password" id="txtConfirmPassword" required>
										</div>
										
									</div>									

									<div class="col-12">
										<button class="profile__btn" type="submit" name="userSingUp" id="submt" >Sing-Up</button>
									</div>
								</div>
							</form>
						</div>
						<!-- end details form -->
					</div>
				</div>

				
			</div>
			<!-- end content tabs -->
		</div>
	</div>
	<!-- end content -->

    <!-- footer -->
    
    <?php include_once("footer.php") ?>

	<!-- end footer -->

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
	<script>
		$('#txtConfirmPassword').on('keyup', function () {
		var password = $("#txtNewPassword").val();
		var confirmPassword = $("#txtConfirmPassword").val();

		if (password != confirmPassword) {
		$("#divCheckPassword").html("Passwords do not match!").css("color", "red");
		$("#submt").prop('disabled', true).css('opacity', '0.2');
		} else {
		$("#divCheckPassword").html("Passwords match.").css("color", "green");
		$("#submt").prop('disabled', false).css('opacity', '1');

		}
		});
	</script>
	<style>
	input[type="date"] {
	background-color: rgba(210,201,255,0.04);
	outline: none;
	color:#fff;
	width:100%;
	border: none;
	border: 1px solid transparent;
	border-radius: 6px;
	padding: 0 20px;
	}

	input[type="date"]::-webkit-clear-button {
	font-size: 16px;
	height: 46px;
	position: relative;
	}

	input[type="date"]::-webkit-inner-spin-button {
	height: 46px;
	}

	input[type="date"]::-webkit-calendar-picker-indicator {
	font-size: 46px;
	}
	</style>
</body>

</html>