
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
	<title>Sitare – Web Series, TV Shows & Cinema HTML Template</title>
</head>

<body class="body">

	<!-- header -->
	<?php include_once("header.php"); ?>
	<!-- end header -->

	<!-- page title -->
	<section class="section section--first section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section__wrap">
						<!-- section title -->
						<h2 class="section__title">Pricing plan</h2>
						<!-- end section title -->

						<!-- breadcrumb -->
						<ul class="breadcrumb">
							<li class="breadcrumb__item"><a href="#">Home</a></li>
							<li class="breadcrumb__item breadcrumb__item--active">Pricing plan</li>
						</ul>
						<!-- end breadcrumb -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end page title -->
	
	<!-- pricing -->
	<div class="section">
		<div class="container">
			<div class="row">
				<!-- plan features -->
				<div class="col-12">
					<ul class="row plan-features">
						<li class="col-12 col-md-6 col-lg-4">1 month unlimited access!</li>
						<li class="col-12 col-md-6 col-lg-4">Stream on your phone, laptop, tablet or TV.</li>
						<li class="col-12 col-md-6 col-lg-4">1 month unlimited access!</li>
						<li class="col-12 col-md-6 col-lg-4">Thousands of TV shows, movies & more.</li>
						<li class="col-12 col-md-6 col-lg-4">You can even Download & watch offline.</li>
						<li class="col-12 col-md-6 col-lg-4">Thousands of TV shows, movies & more.</li>
					</ul>
				</div>
				<!-- end plan features -->

				<!-- price -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="price">
						<div class="price__item price__item--first"><span>Basic</span> <span>Free</span></div>
						<div class="price__item"><span>30 days</span></div>
						<div class="price__item"><span>720p Resolution</span></div>
						<div class="price__item"><span>Limited Availability</span></div>
						<div class="price__item"><span>Desktop Only</span></div>
						<div class="price__item"><span>Limited Support</span></div>
						<?php if(isset($_SESSION['sl_no']))
						{
							$userDetals=$object->singelUserDetails($_SESSION['sl_no']);
						?>
						<div class="subsch">
						<div class="price__item procode" style="display: none;color: orange;"><span>Apply bellow promo code </span></div>
						<div class="price__item procode" style="display: none;"><span style="padding-right: 10px;">STVONEMONTH</span>
						<input type="text" id="promocode" >
						<input type="hidden" id="ui" value="<?= base64_encode($_SESSION['sl_no']);?>">
						</div>
						</div>
						<div class="price__item procode" style="display: none;"><span class="pcm"> </span></div>
						<button class="price__btn frp">Choose Plan</button>
						
						<?php } if(!isset($_SESSION['sl_no'])) {?>
						<a href="signin" class="price__btn">Login & Subscrib</a>
						<?php } ?>
					</div>
				</div>
				
				<!-- end price -->

				<!-- price -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="price price--premium">
						<div class="price__item price__item--first"><span>Premium</span> <span>&#8377;199.00</span></div>
						<div class="price__item"><span>6 Month</span></div>
						<div class="price__item"><span>Full HD</span></div>
						<div class="price__item"><span>Lifetime Availability</span></div>
						<div class="price__item"><span>TV & Desktop</span></div>
						<div class="price__item"><span>24/7 Support</span></div>
						<a href="comingsoon" class="price__btn">Choose Plan</a>
					</div>
				</div>
				<!-- end price -->

				<!-- price -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="price">
						<div class="price__item price__item--first"><span>Prime</span> <span>&#8377;309.99</span></div>
						<div class="price__item"><span>12 Months</span></div>
						<div class="price__item"><span>Ultra HD</span></div>
						<div class="price__item"><span>Lifetime Availability</span></div>
						<div class="price__item"><span>Any Device</span></div>
						<div class="price__item"><span>24/7 Support</span></div>
						<a href="comingsoon" class="price__btn">Choose Plan</a>
					</div>
				</div>
				<!-- end price -->
			</div>
		</div>
	</div>
	<!-- end pricing -->

	<!-- features -->
	<section class="section section--grid section--border">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12">
					<h2 class="section__title section__title--no-margin">Our Features</h2>
				</div>
				<!-- end section title -->

				<!-- feature -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="feature">
						<i class="icon ion-ios-tv feature__icon"></i>
						<h3 class="feature__title">Ultra HD</h3>
						<p class="feature__text">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
					</div>
				</div>
				<!-- end feature -->

				<!-- feature -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="feature">
						<i class="icon ion-ios-film feature__icon"></i>
						<h3 class="feature__title">Film</h3>
						<p class="feature__text">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first.</p>
					</div>
				</div>
				<!-- end feature -->

				<!-- feature -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="feature">
						<i class="icon ion-ios-trophy feature__icon"></i>
						<h3 class="feature__title">Awards</h3>
						<p class="feature__text">It to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining.</p>
					</div>
				</div>
				<!-- end feature -->

				<!-- feature -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="feature">
						<i class="icon ion-ios-notifications feature__icon"></i>
						<h3 class="feature__title">Notifications</h3>
						<p class="feature__text">Various versions have evolved over the years, sometimes by accident, sometimes on purpose.</p>
					</div>
				</div>
				<!-- end feature -->

				<!-- feature -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="feature">
						<i class="icon ion-ios-rocket feature__icon"></i>
						<h3 class="feature__title">Rocket</h3>
						<p class="feature__text">It to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
					</div>
				</div>
				<!-- end feature -->

				<!-- feature -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="feature">
						<i class="icon ion-ios-globe feature__icon"></i>
						<h3 class="feature__title">Multi Language Subtitles </h3>
						<p class="feature__text">Various versions have evolved over the years, sometimes by accident, sometimes on purpose.</p>
					</div>
				</div>
				<!-- end feature -->
			</div>
		</div>
	</section>
	<!-- end features -->

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
	<?php include_once("footer.php"); ?>
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