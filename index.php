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
	<title>Sitare – Web Series, TV Shows & Cinema</title>
</head>

<body class="body">

	<!-- Index page -->

	<!-- header -->
	<?php include_once("header.php"); ?>
	<!-- end header -->

	<!-- home -->
	<section class="home" style="margin-top: 15px;">
		<!-- home bg -->
		<div class="owl-carousel home__bg">
			<div class="item home__cover" data-bg="img/home/home__bg.jpg"></div>
			<div class="item home__cover" data-bg="img/home/home__bg2.jpg"></div>
			<div class="item home__cover" data-bg="img/home/home__bg3.jpg"></div>
			<div class="item home__cover" data-bg="img/home/home__bg4.jpg"></div>
			<div class="item home__cover" data-bg="img/home/home__bg5.jpg"></div>
		</div>
		<!-- end home bg -->
		<style>
		@media screen and (max-width: 360px) {
		.mySlides {
		height:180px;
		}
		}

		@media screen and (max-width: 411px) {
		.mySlides {
		height:205px;
		}
		}

		</style>

		<div class="container">
		<div class="row">
		<div class="col-12">
			<?php foreach($object->findBannerSlider() as $banerslid ) { ?>
				<img class="mySlides" src="img/slider/<?= $banerslid['banner_slider'];?>" style="width:100%;">
			<?php } ?>
		</div>		
		</div>
		</div>
		

		<div class="container" style="margin-top: 15px;" >
			<div class="row">
				<div class="col-12">
					<h1 class="home__title"><b>FRESH RELEASE</b> OF THIS SEASON</h1>

					<button class="home__nav home__nav--prev" type="button">
						<i class="icon ion-ios-arrow-round-back"></i>
					</button>
					<button class="home__nav home__nav--next" type="button">
						<i class="icon ion-ios-arrow-round-forward"></i>
					</button>
				</div>

				<div class="col-12">
					<div class="owl-carousel home__carousel">
					    <?php foreach($object->findFreshRealliseSession() as $banerslid ) { 
							$spcStream=$object->specificStreamDtls($banerslid['steram_id']);
						?>
						<!-- card -->
						<div class="card card--big">
							<div class="card__cover">
								<img src="img/covers/<?= $spcStream['coverpic'];?>" alt="">
								<a href="details?id=<?= base64_encode($spcStream['id']);?>" class="card__play">
									<i class="icon ion-ios-play"></i>
								</a>
							</div>
							<div class="card__content">
								<h3 class="card__title"><a href="details?id=<?= base64_encode($spcStream['id']);?>"><?= $spcStream['title'];?></a></h3>
								<span class="card__category">
									<a href="details?id=<?= base64_encode($spcStream['id']);?>"><?= $spcStream['genres'];?></a>
								</span>
							</div>
						</div>
						<!-- end card -->
						<?php } ?>						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end home -->
	
	<!-- content -->
	<section class="content">
		<div class="content__head">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- content title -->
						<h2 class="content__title">Trending  On-screen</h2>
						<!-- end content title -->

						<!-- content tabs nav -->
						<ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Popular</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Thriller</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Action</a>
							</li>
							
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-3" aria-selected="false">Romantic</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-5" role="tab" aria-controls="tab-4" aria-selected="false">Drama</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-6" role="tab" aria-controls="tab-5" aria-selected="false">Comedy</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-7" role="tab" aria-controls="tab-6" aria-selected="false">Education</a>
							</li>
							
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-8" role="tab" aria-controls="tab-7" aria-selected="false">It's Hot</a>
							</li>
						</ul>
						<!-- end content tabs nav -->

						<!-- content mobile tabs nav -->
						<div class="content__mobile-tabs" id="content__mobile-tabs">
							<div class="content__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<input type="button" value="Popular">
								<span></span>
							</div>

							<div class="content__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">
								<ul class="nav nav-tabs" role="tablist">
									<li class="nav-item"><a class="nav-link active" id="1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Popular</a></li>

									<li class="nav-item"><a class="nav-link" id="2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Thriller</a></li>

									<li class="nav-item"><a class="nav-link" id="3-tab" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Action</a></li>

									<li class="nav-item"><a class="nav-link" id="4-tab" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">Romantic</a></li>
									 
									<li class="nav-item"><a class="nav-link" id="5-tab" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">Drama</a></li>

									<li class="nav-item"><a class="nav-link" id="6-tab" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">Comedy</a></li>

									<li class="nav-item"><a class="nav-link" id="7-tab" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">Education</a></li>

									<li class="nav-item"><a class="nav-link" id="8-tab" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">It's Hot</a></li>
								
								</ul>
							</div>
						</div>
						<!-- end content mobile tabs nav -->
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<!-- content tabs -->
			<div class="tab-content">
				<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
					<div class="row">
						<?php foreach($object->findTreandingonscreenPopular() as $trndPopular ) { 
							$spcStreamTP=$object->specificStreamDtls($trndPopular['steram_id']);
						?>
						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="img/covers/<?= $spcStreamTP['coverpic'];?>" alt="">
									<a href="details?id=<?= base64_encode($trndPopular['steram_id']);?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>									
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="details?id=<?= base64_encode($trndPopular['steram_id']);?>"><?= $spcStreamTP['title'];?></a></h3>
									<span class="card__category">
										<a href="details?id=<?= base64_encode($trndPopular['steram_id']);?>"><?= $spcStreamTP['genres'];?></a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->
						<?php } ?>						
					</div>
				</div>

				<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="2-tab">
					<div class="row">
						
					<?php foreach($object->findTreandingonscreenThriller() as $trndThriller ) { 
							$spcStreamThriller=$object->specificStreamDtls($trndThriller['steram_id']);
					?>
						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="img/covers/<?= $spcStreamThriller['coverpic'];?>" alt="">
									<a href="details?id=<?= base64_encode($trndThriller['steram_id']);?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="details?id=<?= base64_encode($trndThriller['steram_id']);?>"><?= $spcStreamThriller['title'];?></a></h3>
									<span class="card__category">
										<a href="details?id=<?= base64_encode($trndThriller['steram_id']);?>"><?= $spcStreamThriller['genres'];?></a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->
						<?php } ?>

					</div>
				</div>

				<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="3-tab">
					<div class="row">
						<?php foreach($object->findTreandingonscreenAction() as $trndAction ) { 
								$spcStreamAction=$object->specificStreamDtls($trndAction['steram_id']);
						?>
						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="img/covers/<?= $spcStreamAction['coverpic'];?>" alt="">
									<a href="details?id=<?= base64_encode($trndAction['steram_id']);?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="details?id=<?= base64_encode($trndAction['steram_id']);?>"><?= $spcStreamAction['title'];?></a></h3>
									<span class="card__category">
										<a href="details?id=<?= base64_encode($trndAction['steram_id']);?>"><?= $spcStreamAction['genres'];?></a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->
						<?php } ?>						

					</div>
				</div>

				<div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="4-tab">
					<div class="row">
					<?php foreach($object->findTreandingonscreenRomantic() as $trndRomantic) { 
								$spcStreamRomantic=$object->specificStreamDtls($trndRomantic['steram_id']);
					?>

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="img/covers/<?= $spcStreamRomantic['coverpic'];?>" alt="">
									<a href="details?id=<?= base64_encode($trndRomantic['steram_id']);?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="details?id=<?= base64_encode($trndRomantic['steram_id']);?>"><?= $spcStreamRomantic['title'];?></a></h3>
									<span class="card__category">
										<a href="details?id=<?= base64_encode($trndRomantic['steram_id']);?>"><?= $spcStreamRomantic['genres'];?></a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->
					<?php } ?>

						
					</div>
				</div>

				<div class="tab-pane fade" id="tab-5" role="tabpanel" aria-labelledby="5-tab">
					<div class="row">
					<?php foreach($object->findTreandingonscreenDrama() as $trndDrama) { 
								$spcStreamDrama=$object->specificStreamDtls($trndDrama['steram_id']);
					?>

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="img/covers/<?= $spcStreamDrama['coverpic'];?>" alt="">
									<a href="details?id=<?= base64_encode($trndDrama['steram_id']);?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="details?id=<?= base64_encode($trndDrama['steram_id']);?>"><?= $spcStreamDrama['title'];?></a></h3>
									<span class="card__category">
										<a href="details?id=<?= base64_encode($trndDrama['steram_id']);?>"><?= $spcStreamDrama['genres'];?></a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->
					<?php } ?>

					</div>
				</div>
				<div class="tab-pane fade" id="tab-6" role="tabpanel" aria-labelledby="5-tab">
					<div class="row">
					<?php foreach($object->findTreandingonscreenComedy() as $trndComedy) { 
								$spcStreamComedy=$object->specificStreamDtls($trndComedy['steram_id']);
					?>

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="img/covers/<?= $spcStreamComedy['coverpic'];?>" alt="">
									<a href="details?id=<?= base64_encode($trndComedy['steram_id']);?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="details?id=<?= base64_encode($trndComedy['steram_id']);?>"><?= $spcStreamComedy['title'];?></a></h3>
									<span class="card__category">
										<a href="details?id=<?= base64_encode($trndComedy['steram_id']);?>"><?= $spcStreamComedy['genres'];?></a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->
					<?php } ?>
											
					</div>
				</div>

				<div class="tab-pane fade" id="tab-7" role="tabpanel" aria-labelledby="5-tab">
					<div class="row">
					<?php foreach($object->findTreandingonscreenEducation() as $trndEducation) { 
								$spcStreamEducation=$object->specificStreamDtls($trndEducation['steram_id']);
					?>

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="img/covers/<?= $spcStreamEducation['coverpic'];?>" alt="">
									<a href="details?id=<?= base64_encode($trndEducation['steram_id']);?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="details?id=<?= base64_encode($trndEducation['steram_id']);?>"><?= $spcStreamEducation['title'];?></a></h3>
									<span class="card__category">
										<a href="details?id=<?= base64_encode($trndEducation['steram_id']);?>"><?= $spcStreamEducation['genres'];?></a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->
					<?php } ?>
											
					</div>
				</div>

				<div class="tab-pane fade" id="tab-8" role="tabpanel" aria-labelledby="5-tab">
					<div class="row">
					<?php foreach($object->findTreandingonscreenHot() as $trndHot) { 
								$spcStreamHot=$object->specificStreamDtls($trndHot['steram_id']);
					?>

						<!-- card -->
						<div class="col-6 col-sm-4 col-md-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="img/covers/<?= $spcStreamHot['coverpic'];?>" alt="">
									<a href="details?id=<?= base64_encode($trndHot['steram_id']);?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="details?id=<?= base64_encode($trndHot['steram_id']);?>"><?= $spcStreamHot['title'];?></a></h3>
									<span class="card__category">
										<a href="details?id=<?= base64_encode($trndHot['steram_id']);?>"><?= $spcStreamHot['genres'];?></a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->
					<?php } ?>
											
					</div>
				</div>

			</div>
			<!-- end content tabs -->
		</div>
	</section>
	<!-- end content -->

	<!-- section -->
	<section class="section section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12">
					<div class="section__title-wrap">
						<h2 class="section__title section__title--carousel">Favoured Movies</h2>

						<div class="section__nav-wrap">
							<a href="#" class="section__view">View All</a>

							<button class="section__nav section__nav--prev" type="button" data-nav="#carousel1">
								<i class="icon ion-ios-arrow-back"></i>
							</button>

							<button class="section__nav section__nav--next" type="button" data-nav="#carousel1">
								<i class="icon ion-ios-arrow-forward"></i>
							</button>
						</div>
					</div>
				</div>
				<!-- end section title -->

				<!-- carousel -->
				<div class="col-12">
					<div class="owl-carousel section__carousel" id="carousel1">
					<?php foreach($object->findFavaouredMovies() as $fm) { 
								$spcStreamfm=$object->specificStreamDtls($fm['steram_id']);
					?>

						<!-- card -->
						<div class="card">
							<div class="card__cover">
								<img src="img/covers/<?= $spcStreamfm['coverpic'];?>" alt="">
								<a href="details?id=<?= base64_encode($fm['steram_id']);?>" class="card__play">
									<i class="icon ion-ios-play"></i>
								</a>
							</div>
							<div class="card__content">
								<h3 class="card__title"><a href="details?id=<?= base64_encode($fm['steram_id']);?>"><?= $spcStreamfm['title'];?></a></h3>
								<span class="card__category">
									<a href="details?id=<?= base64_encode($fm['steram_id']);?>"><?= $spcStreamfm['genres'];?></a>
								</span>
							</div>
						</div>
						<!-- end card -->
					<?php } ?>

						
					</div>
				</div>
				<!-- carousel -->
			</div>
		</div>
	</section>
	<!-- end section -->

	<!-- section -->
	<section class="section section--bg">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12">
					<div class="section__title-wrap">
						<h2 class="section__title section__title--carousel" style="margin-bottom: 16px;">Sitare Recommends</h2>

						<div class="slider">
						<?php foreach($object->findFavaouredRecommends() as $sr) { 
								$spcStreamSr=$object->specificStreamDtls($sr['steram_id']);
						?>
						<div class="slide" id="slide-1">
						<a href="details?id=<?= base64_encode($sr['steram_id']);?>">
						<img src="img/covers/<?= $spcStreamSr['coverpic'];?>" alt="" width="318" height="179">
						</a>
						</div>
						<?php } ?>

						</div>
					   </div>
				</div>
				<!-- end section title -->
			</div>
		</div>
	</section>
	<!-- end section -->

	<!-- section -->
	<section class="section section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12">
					<div class="section__title-wrap">
						<h2 class="section__title section__title--carousel" style="margin-bottom: 16px;">MUST WATCH SERIES</h2>

						<div class="slider">
						<?php foreach($object->findFavaouredMUSTWATCHSERIES() as $mws) { 
								$spcStreammws=$object->specificStreamDtls($mws['steram_id']);
						?>
						<div class="slide" id="slide-1">
						<a href="details?id=<?= base64_encode($mws['steram_id']);?>">
						<img src="img/covers/<?= $spcStreammws['coverpic'];?>" alt="" width="318" height="179">
						</a>
						</div>
						<?php } ?>

						</div>
					   </div>
				</div>
				<!-- end section title -->
			</div>
		</div>
	</section>
	<!-- end section -->

	<style>
	.slider {	
	height: auto;
	display: flex;
	overflow-x: auto;
	}
	.slide {
	
	flex-shrink: 0;
	height: 100%;
	scroll-behavior: smooth;
	margin-right:10px;
	margin-bottom: 7px;
	}
	/* width */
	.slider::-webkit-scrollbar {
	width: 10px;
	height:6px;
	}

	/* Track */
	.slider::-webkit-scrollbar-track {
	box-shadow: inset 0 0 5px grey; 
	border-radius: 10px;
	}
	
	/* Handle */
	.slider::-webkit-scrollbar-thumb {
	background: #ffd80e; 
	border-radius: 10px;
	}

	/* Handle on hover */
	.slider::-webkit-scrollbar-thumb:hover {
	background: #a78c05; 
	}

	
	</style>

	<!-- section -->
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="section__title"><b>SITARE</b> – Best Place for Entertainment </h2>
					<p class="section__text">It's time to switch to Sitare, Watch web series,Tv serials,movies,short films,news,music videos,reality shows,live tv and many more.  <a href="#">Sitare</a>  is also a great platform for the newcomers.Watch sitare tv and get the chance to win existing gifts everyhour.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- end section -->

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
	var myIndex = 0;
	carousel();

	function carousel() {
	var i;
	var x = document.getElementsByClassName("mySlides");
	for (i = 0; i < x.length; i++) {
		x[i].style.display = "none";  
	}
	myIndex++;
	if (myIndex > x.length) {myIndex = 1}    
	x[myIndex-1].style.display = "block";  
	setTimeout(carousel, 4000); // Change image every 4 seconds
	
	}
	</script>
</body>

</html>