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
	<title>Sitare – Web series, TV Shows & Cinema</title>
</head>

<body class="body">

	<!-- header -->
	<?php include_once("header.php"); 
	      $specSitareStrDtls=$object->singelSitareStar(base64_decode($_GET['id']));
	?>
	<!-- end header -->

	<!-- details -->
	<section class="section section--details section--bg" data-bg="img/section/details.jpg"> 
		<!-- details content -->
		<div class="container">
			<div class="row"> 
				<!-- title -->
				<div class="col-12">
					<h1 class="section__title"><?= $specSitareStrDtls['name'];?></h1>
				</div>
				<!-- end title -->

				
				<!-- end title -->

				<!-- content -->
				<div class="col-12 col-lg-6">
					<div class="card card--details">
						<div class="row">
							<!-- card cover -->
							<div class="col-12 col-sm-5 col-lg-6 col-xl-5">
								<div class="card__cover">
									<img src="img/star/<?= $specSitareStrDtls['coverpic'];?>" alt="">																	
								</div>								
							</div>
							<!-- end card cover -->

							<!-- card content -->
							<div class="col-12 col-sm-7 col-lg-6 col-xl-7">
								<div class="card__content">
									<ul class="card__meta">
										<li><span>Best movies:</span> <?= $specSitareStrDtls['best_films'];?></li>
									</ul>
								</div>
							</div>
							<!-- end card content -->
						</div>
					</div>
				</div>
				<!-- end content -->				

				<!-- player -->
				<div class="col-12 col-lg-6">	
				<div class="card__description">
                <?= $specSitareStrDtls['description'];?>
                </div> 
										  
				</div>
				<!-- end player -->
			</div>
		</div>
		<!-- end details content -->
	</section>
	<!-- end details -->

	

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
      $("#slider__rating").click(function(){            
			  var vl=$('.noUi-handle').attr('aria-valuetext');
			  $('#rating').val(vl);	 
		});
    </script>
</body>


</html>