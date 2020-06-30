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
	<title>Sitare – Online Movies, TV Shows & Cinema</title>
</head>

<body class="body">

	<!-- header -->
	<?php include_once("header.php");
	$userDetals=$object->singelUserDetails($_SESSION['sl_no']);
	?>
	<!-- end header -->

	<!-- page title -->
	<section class="section section--first section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section__wrap">
						<!-- section title -->
						<h2 class="section__title">My Sitare</h2>
						<!-- end section title -->

						<!-- breadcrumb -->
						<ul class="breadcrumb">
							<li class="breadcrumb__item"><a href="index">Home</a></li>
							<li class="breadcrumb__item breadcrumb__item--active">Profile</li>
						</ul>
						<!-- end breadcrumb -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end page title -->

	<!-- content -->
	<div class="content">
		<!-- profile -->
		<div class="profile">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="profile__content">
							<div class="profile__user">
								<div class="profile__avatar">
									<img src="img/user.png" alt="">
								</div>
								<div class="profile__meta">
									<h3><?= $userDetals['name'];?></h3>
									<span>Sitare ID: <?= $userDetals['id'];?></span>
								</div>
							</div>

							<!-- content tabs nav -->
							<ul class="nav nav-tabs content__tabs content__tabs--profile" id="content__tabs" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Profile</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Subscription</a>
								</li>
							</ul>
							<!-- end content tabs nav -->

							<!-- content mobile tabs nav -->
							<div class="content__mobile-tabs content__mobile-tabs--profile" id="content__mobile-tabs">
								<div class="content__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<input type="button" value="Profile">
									<span></span>
								</div>

								<div class="content__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">
									<ul class="nav nav-tabs" role="tablist">
										<li class="nav-item"><a class="nav-link active" id="1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Profile</a></li>

										<li class="nav-item"><a class="nav-link" id="2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Subscription</a></li>
									</ul>
								</div>
							</div>
							<!-- end content mobile tabs nav -->
							

							<button class="profile__logout">
								<i class="icon ion-ios-log-out"></i>
								<span><a href="logout" style="color:#fff;">Logout</a></span>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end profile -->

		<?php 
	  if(isset($_POST['userUpdate']))
	   {
		  if($_POST['form_id']==$_SESSION['session_form'])
		   {			
				$_SESSION['session_form']='';
				$msg=$object->updateUserLogin($_SESSION['sl_no']);				                         
		   }                					
	   }
		else
		{
		$_SESSION['session_form']=md5(uniqid(rand(0,10000000)));
		session_write_close();
		}	
	 ?>

		<div class="container">
			<!-- content tabs -->
			<div class="tab-content">
				<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
					<div class="row">
						<!-- details form -->
						<div class="col-12 col-lg-6">
							<form method="post" class="profile__form">
								<div class="row">
									<div class="col-12">
										<h4 class="profile__title"><?= isset($msg)? $msg: 'Profile details';?></h4>
									</div>
									<input type="hidden" name="form_id" value="<?= $_SESSION['session_form'];?>" />

									<div class="col-12 col-md-6 col-lg-12 col-xl-6">
										<div class="profile__group">
											<label class="profile__label" for="username">Name</label>
											<input id="username" type="text" name="userName" value="<?= $userDetals['name'];?>" class="profile__input" placeholder="Name" pattern="[a-zA-Z][a-zA-Z\s]*" minlength="3" maxlength="50" oninvalid="setCustomValidity('Enter Valid Name')"  onchange="try{setCustomValidity('')}catch(e){}" required>
										</div>
									</div>									

									<div class="col-12 col-md-6 col-lg-12 col-xl-6">
										<div class="profile__group">
											<label class="profile__label" for="firstname">Phone Number</label>
											<input id="firstname" type="text" name="phoneNumber" value="<?= $userDetals['phone'];?>" class="profile__input" required placeholder="Phone Number" pattern="[0-9]{1}[0-9]{9}" minlength="3" maxlength="10"  oninvalid="setCustomValidity('Enter Valid Mobile Number')" onchange="try{setCustomValidity('')}catch(e){}">
										</div>
									</div>

									<div class="col-12 col-md-6 col-lg-12 col-xl-6">
										<div class="profile__group">
											<label class="profile__label" for="lastname">Date of Barth</label>
											<input type="date" name="dob" value="<?= $userDetals['dob'];?>" required>
										</div>
									</div>

									<div class="col-12 col-md-6 col-lg-12 col-xl-6">
										<div class="profile__group">
											<label class="profile__label" for="email">Email</label>
											<input id="email" type="text" name="email" class="profile__input" value="<?= $userDetals['email'];?>" placeholder="email@email.com" required>
										</div>
									</div>

									<div class="col-12">
										<button class="profile__btn" type="submit" name="userUpdate">Update</button>
									</div>
								</div>
							</form>
						</div>
						<!-- end details form -->

						<!-- password form -->
						<div class="col-12 col-lg-6">
							<form action="#" class="profile__form">
								<div class="row">
									<div class="col-12">
										<h4 class="profile__title">Change password</h4>
									</div>

									<div class="col-12 col-md-6 col-lg-12 col-xl-6">
										<div class="profile__group">
											<label class="profile__label" for="oldpass">Old Password</label>
											<input id="oldpass" type="password" name="oldpass" class="profile__input">
										</div>
									</div>

									<div class="col-12 col-md-6 col-lg-12 col-xl-6">
										<div class="profile__group">
											<label class="profile__label" for="newpass">New Password</label>
											<input id="newpass" type="password" name="newpass" class="profile__input">
										</div>
									</div>

									<div class="col-12 col-md-6 col-lg-12 col-xl-6">
										<div class="profile__group">
											<label class="profile__label" for="confirmpass">Confirm New Password</label>
											<input id="confirmpass" type="password" name="confirmpass" class="profile__input">
										</div>
									</div>

									<div class="col-12">
										<button class="profile__btn" type="button">Change</button>
									</div>
								</div>
							</form>
						</div>
						<!-- end password form -->
					</div>
				</div>

				<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="2-tab">
					<div class="row">
						<!-- price -->
						<div class="col-12 col-md-6 col-lg-4">
							<div class="price price--profile">
								<div class="price__item price__item--first"><span>Basic</span> <span>Free</span></div>
								<div class="price__item"><span>30 days</span></div>
								<div class="price__item"><span>720p Resolution</span></div>
								<div class="price__item"><span>Limited Availability</span></div>
								<div class="price__item"><span>Desktop Only</span></div>
								<div class="price__item"><span>Limited Support</span></div>
								<div class="subsch">
								<div class="price__item procode" style="display: none;color: orange;"><span>Apply bellow promo code </span></div>
								<div class="price__item procode" style="display: none;"><span style="padding-right: 10px;">STVONEMONTH</span>
								<input type="text" id="promocode" >
								<input type="hidden" id="ui" value="<?= base64_encode($_SESSION['sl_no']);?>">
								</div>
								</div>
								<div class="price__item procode" style="display: none;"><span class="pcm"> </span></div>
								<button class="price__btn frp">Choose Plan</button>
								
							</div>
						</div>
						<!-- end price -->

						<!-- price -->
						<div class="col-12 col-md-6 col-lg-4">
							<div class="price price--profile price--premium">
								<div class="price__item price__item--first"><span>Premium</span> <span>&#8377;199.00</span></div>
								<div class="price__item"><span>6 Month</span></div>
								<div class="price__item"><span>Full HD</span></div>
								<div class="price__item"><span>Lifetime Availability</span></div>
								<div class="price__item"><span>TV & Desktop</span></div>
								<div class="price__item"><span>24/7 Support</span></div>
								<a href="#" class="price__btn">Choose Plan</a>
							</div>
						</div>
						<!-- end price -->

						<!-- price -->
						<div class="col-12 col-md-6 col-lg-4">
							<div class="price price--profile">
								<div class="price__item price__item--first"><span>Cinematic</span> <span>&#8377;309.99</span></div>
								<div class="price__item"><span>12 Months</span></div>
								<div class="price__item"><span>Ultra HD</span></div>
								<div class="price__item"><span>Lifetime Availability</span></div>
								<div class="price__item"><span>Any Device</span></div>
								<div class="price__item"><span>24/7 Support</span></div>
								<a href="#" class="price__btn">Choose Plan</a>
							</div>
						</div>
						<!-- end price -->
					</div>
				</div>
			</div>
			<!-- end content tabs -->
		</div>
	</div>
	<!-- end content -->

	<!-- partners -->
	<section class="section section--grid section--border">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12">
					<h2 class="section__title section__title--no-margin">Our Partners</h2>
				</div>
				<!-- end section title -->

				<!-- section text -->
				<div class="col-12">
					<p class="section__text section__text--last-with-margin">It is a long <b>established</b> fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using.</p>
				</div>
				<!-- end section text -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="img/partners/themeforest-light-background.png" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="img/partners/audiojungle-light-background.png" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="img/partners/codecanyon-light-background.png" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="img/partners/photodune-light-background.png" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="img/partners/activeden-light-background.png" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="img/partners/3docean-light-background.png" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->
			</div>
		</div>
	</section>
	<!-- end partners -->

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
	<script>	 
      $(".frp").click(function(){  			  
			  $('.procode').show(1000);	 
		});

		$(document).on('keyup','#promocode',function(){   
			var promoCode = $.trim($('#promocode').val());
			var ui = $.trim($('#ui').val());
			if(promoCode!='STVONEMONTH')
			{
				$(".pcm").html("Please insert correct Promo Code").css('color', '#ff3b3b');				

			}
			if(promoCode=='STVONEMONTH')
			{
				$("#promocode").attr('disabled','disabled');
				$(".pcm").html("Subscription is in processed please wait").css('color', '#1aff1a');

				$.ajax({
				  url:'ajax_inser_fre_subscription',
				  data:{ui:ui},				  
				  type : 'POST' ,
				  cache:false,
				  success:function(data){
				  $(".pcm").html(data).css('color', '#1aff1a');
				  $('.subsch').hide(1000);
				  $('.frp').hide(1000);		  
				 } 
				});

			}
			
		});
    </script>
</body>

</html>