<?php 
include_once("main.class.php");
ob_start();
session_start();
?>
<header class="header">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="header__content">
						<!-- header logo -->
						<a href="index" class="header__logo">
							<img src="img/logo.png" alt="">
						</a>
						<!-- end header logo -->

						<!-- header nav -->
						<ul class="header__nav">
							<!-- dropdown -->
							<li class="header__nav-item">
								<a class="header__nav-link" href="index" >Home</a>								
							</li>
							<!-- end dropdown -->

							<!-- dropdown -->
							<li class="header__nav-item">
								<a href="list?li=<?= base64_encode("1");?>" class="header__nav-link" >SHOWS</a>
							</li>
							<!-- end dropdown -->							

							<li class="header__nav-item">
								<a href="comingsoon" class="header__nav-link">LIVE TV</a>
							</li>

							<li class="header__nav-item">
								<a href="list?li=<?= base64_encode("2");?>" class="header__nav-link">MUSIC VIDEOS</a>
							</li>

							<li class="header__nav-item">
								<a href="list?li=<?= base64_encode("3");?>" class="header__nav-link">Shorts</a>
							</li>

							<li class="header__nav-item">
								<a href="strlist" class="header__nav-link">SITARE STARS</a>
							</li>

							<!-- dropdown -->
							<li class="dropdown header__nav-item">
								<a class="dropdown-toggle header__nav-link header__nav-link--more" href="#" role="button" id="dropdownMenuMore" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon ion-ios-more"></i></a>

								<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuMore">
								    <li><a href="list?li=<?= base64_encode("4");?>">NEWS</a></li>
									<li><a href="list?li=<?= base64_encode("5");?>">UPCOMING</a></li>
									<li><a href="list?li=<?= base64_encode("6");?>">TIMELINE</a></li>
									<li><a href="about">About</a></li>
									<li><a href="plan">Plan</a></li>
									<li><a href="https://api.whatsapp.com/send?phone=917449844693">Career</a></li>
									<li><a href="contacts">Contacts</a></li>
								</ul>
							</li>
							<!-- end dropdown -->
						</ul>
						<!-- end header nav -->

						<!-- header auth -->
						<div class="header__auth">

						   <?php if(isset($_SESSION['sl_no']))
							{
								$userDetals=$object->singelUserDetails($_SESSION['sl_no']);
							?>
							<!-- dropdown -->
							<div class="dropdown header__lang">
								<a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuLang" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $userDetals['name'];?></a>

								<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuLang">
									<li><a href="profile">Profile</a></li>
									<li><a href="signin">Sign In</a></li>
									<li><a href="signup">Sign Up</a></li>									
								</ul>
							</div>
							<!-- end dropdown -->
							<?php } 
							if(!isset($_SESSION['sl_no']))
							{
							?>

							<a href="signin" class="header__sign-in">
								<i class="icon ion-ios-log-in"></i>
								<span>sign in</span>
							</a>
							<?php } 
							if(isset($_SESSION['sl_no']))
							{
							?>

							<a href="logout" class="header__sign-in">
								<i class="icon ion-ios-log-in"></i>
								<span>Logout</span>
							</a>
							<?php } ?>

						</div>
						<!-- end header auth -->

						<!-- header menu btn -->
						<button class="header__btn" type="button">
							<span></span>
							<span></span>
							<span></span>
						</button>
						<!-- end header menu btn -->
					</div>
				</div>
			</div>
		</div>
	</header>