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
	      $specifcStreamDetails=$object->specificStreamDtls(base64_decode($_GET['id']));
	?>
	<!-- end header -->

	<!-- details -->
	<section class="section section--details section--bg" data-bg="img/section/details.jpg"> 
		<!-- details content -->
		<div class="container">
			<div class="row"> 
			<?php
					if(isset($_POST['core']))
					{
						if($_POST['form_id']==$_SESSION['session_form'])
						{
						$_SESSION['session_form']='';
						$crmsmsg=$object->insertCommentReview();                        
						}                					
					}
					else
					{
					$_SESSION['session_form']=md5(uniqid(rand(0,10000000)));
					session_write_close();
					}	 		  
			?>
			<span><?= isset($crmsmsg)? $crmsmsg:'';?></span>
				<!-- title -->
				<div class="col-12">
					<h1 class="section__title"><?= $specifcStreamDetails['title'];?></h1>
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
									<img src="img/covers/<?= $specifcStreamDetails['coverpic'];?>" alt="" width="243" height="360">
									<span class="card__rate card__rate--green">8.4</span>																	
								</div>
								<i class="ion-md-heart like" style="color:#f92f2f; padding:10px;cursor: pointer;" title="Add to favorite"></i>
								<span style="color:#fff;"><?= $object->whislistRowcount(base64_decode($_GET['id']));?></span>	<span class="react"></span>							
							</div>
							<!-- end card cover -->

							<!-- card content -->
							<div class="col-12 col-sm-7 col-lg-6 col-xl-7">
								<div class="card__content">
									<ul class="card__meta">
										<li><span>Director:</span> <?= $specifcStreamDetails['director'];?></li>
										<li><span>Cast:</span> <a href="#"><?= $specifcStreamDetails['cast'];?></a> </li>
										<li><span>Genre:</span> <a href="#"><?= $specifcStreamDetails['genres'];?></a></li>
										<li><span>Release year:</span> <?= $specifcStreamDetails['release_year'];?></li>
										<li><span>Running time:</span> <?= $specifcStreamDetails['running_time'];?></li>
										<li><span>Country:</span> <a href="#"><?= $specifcStreamDetails['country'];?></a></li>
									</ul>
									<div class="card__description">
									<?= $specifcStreamDetails['description'];?>
									</div>
								</div>
							</div>
							<!-- end card content -->
						</div>
					</div>
				</div>
				<!-- end content -->				

				<!-- player -->
				<div class="col-12 col-lg-6">	
				<p style="margin-bottom: -0.1rem;color:#fff;font-size: 25px;" >Trailer</p>	 
					<video    id="player">
						<!-- Video files -->
						<source src="admin/video/trailer/<?= $specifcStreamDetails['trailers'];?>" type="video/mp4" size="576">					

					</video>					  
				</div>
				<!-- end player -->
			</div>
		</div>
		<!-- end details content -->
	</section>
	<!-- end details -->

	<!-- section -->
	<?PHP foreach($object->findDistinctSesionStrm($specifcStreamDetails['id']) as $dr){	 ?>
	<section class="section section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12">
					<div class="section__title-wrap">
						<h2 class="section__title section__title--carousel">Session <?= $dr['session'];?></h2>

						<div class="section__nav-wrap">
							<a href="#" class="section__view">View All</a>

							<button class="section__nav section__nav--prev" type="button" data-nav="#carousel2">
								<i class="icon ion-ios-arrow-back"></i>
							</button>

							<button class="section__nav section__nav--next" type="button" data-nav="#carousel2">
								<i class="icon ion-ios-arrow-forward"></i>
							</button>
						</div>
					</div>
				</div>
				<!-- end section title -->

				<!-- carousel -->
				<div class="col-12">
					<div class="owl-carousel section__carousel" id="carousel2">

						<?PHP foreach($object->findStreamBySession($specifcStreamDetails['id'],$dr['session']) as $strmSesion){	?>

						<!-- card -->
						<div class="card">
							<div class="card__cover">
								<img src="admin/video/coverpic/<?= $strmSesion['cover_pic'];?>" alt="">
								<a href="play?did=<?= base64_encode($strmSesion['id']);?>" class="card__play">
									<i class="icon ion-ios-play"></i>
								</a>
								
							</div>
							<div class="card__content">
								<h3 class="card__title"><a href="play?did=<?= base64_encode($strmSesion['id']);?>"><?= $strmSesion['episode'];?></a></h3>
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
	<?php } ?>

	<!-- end section -->

	<?php if(isset($_SESSION['sl_no'])){ ?>

	<!-- content -->
	<section class="content">
		<div class="content__head">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- content title -->
						<h2 class="content__title">Ratings & Reviews</h2>
						<!-- end content title -->

						<!-- content tabs nav -->
						<ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">
							
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Reviews</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Write Reviews</a>
							</li>
						</ul>
						<!-- end content tabs nav -->

						<!-- content mobile tabs nav -->
						<div class="content__mobile-tabs" id="content__mobile-tabs">
							<div class="content__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<input type="button" value="Comments">
								<span></span>
							</div>

							<div class="content__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">
								<ul class="nav nav-tabs" role="tablist">									

									<li class="nav-item"><a class="nav-link active" id="2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Reviews</a></li>

									<li class="nav-item"><a class="nav-link" id="3-tab" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Write Reviews</a></li>
								</ul>
							</div>
						</div>
						<!-- end content mobile tabs nav -->
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-8 col-xl-8">
					<!-- content tabs -->
					<div class="tab-content">						

						<div class="tab-pane fade show active" id="tab-2" role="tabpanel" aria-labelledby="2-tab">
							<div class="row">
								<!-- reviews -->
								<div class="col-12">
									<div class="reviews">
										<ul class="reviews__list">
										<?php foreach($object->findratingReviewbyStreamId(base64_decode($_GET['id'])) as $rtRv ) {
											$user=$object->singelUserDetails($rtRv['user_id']);
										?>
											<li class="reviews__item">
												<div class="reviews__autor">
													<img class="reviews__avatar" src="img/user.png" alt="">
													<span class="reviews__name"><?= $rtRv['title'];?></span>
													<span class="reviews__time"><?= date('d.M.Y , H:i', $rtRv['insert_on'])?> by <?= $user['name']?></span>

													<span class="reviews__rating reviews__rating--green"><?= $rtRv['rating'];?></span>
												</div>
												<p class="reviews__text"><?= $rtRv['comment'];?></p>
											</li>
										<?php } ?>	

										</ul>
									</div>
								</div>
								<!-- end reviews -->
							</div>
						</div>						

						<div class="tab-pane fade show" id="tab-3" role="tabpanel" aria-labelledby="3-tab">
							<div class="row">
								<!-- reviews -->
								<div class="col-12">
									<div class="reviews">
										<form  method="post" class="form">
										<input type="hidden" name="form_id" value="<?= $_SESSION['session_form'];?>" />
										<input type="hidden" name="strmid" value="<?= $_GET['id'];?>" />
											<input type="text" class="form__input" name="title" placeholder="Title" required>
											<textarea name="comment" class="form__textarea" placeholder="Review" required></textarea>
											<div class="form__slider">
												<div class="form__slider-rating" id="slider__rating"></div>
												<div class="form__slider-value" id="form__slider-value"></div>
											</div>
											<input type="hidden" name="rating" value="8.6" id="rating" />
											<button type="submit" name="core" class="form__btn">Send</button>
										</form>

									</div>
								</div>
								<!-- end reviews -->
							</div>
						</div>

						
					</div>
					<!-- end content tabs -->
				</div>

				<!-- sidebar -->
				<div class="col-12 col-lg-4 col-xl-4">
					<div class="row">
						<!-- section title -->
						<div class="col-12">
							<h2 class="section__title">You may also like...</h2>
						</div>
						<!-- end section title -->
						<?php foreach($object->findStreamByCategoryNotsmId($specifcStreamDetails['category'],$specifcStreamDetails['id']) as $simlStrm) { ?>

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-6">
							<div class="card">
								<div class="card__cover">
									<img src="img/covers/<?= $simlStrm['coverpic']?>" alt="">
									<a href="details?id=<?= base64_encode($simlStrm['id']);?>" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#"><?= $simlStrm['title']?></a></h3>
									<span class="card__category">
										<a href="#"><?= $simlStrm['genres']?></a>
									</span>
								</div>
							</div>
						</div>
						<!-- end card -->
						<?php } ?>

						
					</div>
				</div>
				<!-- end sidebar -->
			</div>
		</div>
	</section>
	<!-- end content -->
	<?php } ?>

	<!-- footer -->
	<?php include_once("footer.php"); ?>
	<!-- end footer -->

	<!-- Root element of PhotoSwipe. Must have class pswp. -->
	<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

		<!-- Background of PhotoSwipe. 
		It's a separate element, as animating opacity is faster than rgba(). -->
		<div class="pswp__bg"></div>

		<!-- Slides wrapper with overflow:hidden. -->
		<div class="pswp__scroll-wrap">

			<!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
			<!-- don't modify these 3 pswp__item elements, data is added later on. -->
			<div class="pswp__container">
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
			</div>

			<!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
			<div class="pswp__ui pswp__ui--hidden">

				<div class="pswp__top-bar">

					<!--  Controls are self-explanatory. Order can be changed. -->

					<div class="pswp__counter"></div>

					<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

					<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

					<!-- Preloader -->
					<div class="pswp__preloader">
						<div class="pswp__preloader__icn">
							<div class="pswp__preloader__cut">
								<div class="pswp__preloader__donut"></div>
							</div>
						</div>
					</div>
				</div>

				<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>

				<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>

				<div class="pswp__caption">
					<div class="pswp__caption__center"></div>
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
	<script>	 
      $("#slider__rating").click(function(){            
			  var vl=$('.noUi-handle').attr('aria-valuetext');
			  $('#rating').val(vl);	 
		});
		$(function () {
		$(".like").click(function(){
		var strmId = "<?php echo $_GET['id']; ?>";
		$.ajax({
        url:'adtowishlist',
        data:{strmId:strmId},
        type:'POST',
        cache:false,
        success:function(data)
        {          
          console.log(data);
		  $(".react").html(data);  
        }
        });

		});

		});
    </script>
</body>


</html>