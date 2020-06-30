
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
	<title>Sitare – Online Movies, TV Shows & Cinema </title>
</head>

<body class="body">

	<!-- header -->
	<?php include_once("header.php");
	$cateStrmName=$object->categoryStream(base64_decode($_GET['li']));
	?>
	<!-- end header -->
	
	<!-- page title -->
	<section class="section section--first section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section__wrap">
						<!-- section title -->
						<h2 class="section__title"><?= $cateStrmName;?></h2>
						<!-- end section title -->

						<!-- breadcrumb -->
						<ul class="breadcrumb">
							<li class="breadcrumb__item"><a href="index">Home</a></li>
							<li class="breadcrumb__item breadcrumb__item--active"><?= $cateStrmName;?></li>
						</ul>
						<!-- end breadcrumb -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end page title -->


	<!-- catalog -->
	<div class="catalog">
		<div class="container">
			<div class="row">
			    
				<?php foreach($object->specificCategoryFullStreamDtls(base64_decode($_GET['li'])) as $cSSD) {?>
				<!-- card -->
				<div class="col-6 col-sm-4 col-md-3 col-xl-2">
					<div class="card">
						<div class="card__cover">
							<img src="img/covers/<?= $cSSD['coverpic'];?>" alt="">
							<a href="details?id=<?= base64_encode($cSSD['id']);?>" class="card__play">
								<i class="icon ion-ios-play"></i>
							</a>							
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="details?id=<?= base64_encode($cSSD['id']);?>"><?= $cSSD['title'];?></a></h3>
							<span class="card__category">
								<a href="details?id=<?= base64_encode($cSSD['id']);?>"><?= $cSSD['genres'];?></a>								
							</span>
						</div>
					</div>
				</div>
				<!-- end card -->
				<?php } ?>

				

				<!-- paginator -->
				<div class="col-12">
					<ul class="paginator">
						<li class="paginator__item paginator__item--prev">
							<a href="#"><i class="icon ion-ios-arrow-back"></i></a>
						</li>
						<li class="paginator__item  paginator__item--active"><a href="#">1</a></li>
						<li class="paginator__item"><a href="#">2</a></li>
						<li class="paginator__item"><a href="#">3</a></li>
						<li class="paginator__item"><a href="#">4</a></li>
						<li class="paginator__item paginator__item--next">
							<a href="#"><i class="icon ion-ios-arrow-forward"></i></a>
						</li>
					</ul>
				</div>
				<!-- end paginator -->
			</div>
		</div>
	</div>
	<!-- end catalog -->
	
	
	
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
</body>


</html>