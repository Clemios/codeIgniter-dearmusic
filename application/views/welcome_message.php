<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!--<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
	<?php foreach ($bonjour as $row) : ?>
                            <div class="timeline-event">
                                    <h2><?php echo $row->Id; ?></h2>
                                    <h5><?php echo $row->Name; ?></h5>
                                </div>
    <?php endforeach; ?>
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/Welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>

		<p>If you want to create an new account click <a href="newAccount.html">here</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>
-->

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Variant HTML Builder by Medium Rare</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="../assets/css/flexslider.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="../assets/css/line-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="../assets/css/elegant-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="../assets/css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="../assets/css/theme-zest.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="../assets/css/custom.css" rel="stylesheet" type="text/css" media="all"/>
        <!--[if gte IE 9]>
        	<link rel="stylesheet" type="text/css" href="css/ie9.css" />
		<![endif]-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' rel='stylesheet' type='text/css'>
        <script src="../js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <link href="http://fonts.googleapis.com/css?family=Cardo:400,400italic" rel="stylesheet" type="text/css">
        <link href="../assets/css/font-cardo.css" rel="stylesheet" type="text/css">
    </head>

    <body>
    	<div class="loader">
    		<div class="spinner">
			  <div class="double-bounce1"></div>
			  <div class="double-bounce2"></div>
			</div>
    	</div>
				
		<div class="nav-container">
		</div>
		
		<div class="main-container">
		<section class="soundcloud-1 no-pad">
				<iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/154584032&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
			</section>
			
			<section class="no-pad login-page fullscreen-element">
			
				<div class="background-image-holder">
					<img class="background-image" alt="Poster Image For Mobiles" src="assets/img/hero6.jpg">
				</div>
			
				<div class="container align-vertical">
					<div class="row">
						<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
							<h1 class="text-white">Dear Music<br></h1>
							<div class="photo-form-wrapper clearfix">
								<form>
									<input class="form-email" placeholder="Email Address" type="text">
									<input class="form-password" placeholder="Password" type="password">
									<input class="login-btn btn-filled" value="Login" type="submit">
								</form>
							</div>
							<a href="#" class="text-white">Create an account ➞</a><br>
							<a href="#" class="text-white">I've forgotten my password</a>
						</div>
					</div>
				</div>
			</section>
			
			<section class="strip bg-white">
				<div class="container">
					<div class="row clearfix">
						<div class="col-sm-3 col-xs-12 pull-left">
							<a href="#" class="btn btn-primary btn-grey">Contact Us</a>
						</div>
						
						<div class="col-sm-4 col-xs-12 pull-right text-right">
							<ul class="social-icons">
								<li>
									<a href="#">
										<i class="icon social_twitter"></i>
									</a>
								</li>
								
								<li>
									<a href="#">
										<i class="icon social_facebook"></i>
									</a>
								</li>
								
								<li>
									<a href="#">
										<i class="icon social_dribbble"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
		</div>
		
		<div class="footer-container">
		</div>
				
		<script src="https://www.youtube.com/iframe_api"></script>
		<script src="dearmusic.com/assets/js/jquery.min.js"></script>
		<script src="https://www.youtube.com/iframe_api"></script>
		<script src="dearmusic.com/assets/js/jquery.min.js"></script>
        <script src="dearmusic.com/assets/js/jquery.plugin.min.js"></script>
        <script src="dearmusic.com/assets/js/bootstrap.min.js"></script>
        <script src="dearmusic.com/assets/js/jquery.flexslider-min.js"></script>
        <script src="dearmusic.com/assets/js/smooth-scroll.min.js"></script>
        <script src="dearmusic.com/assets/js/skrollr.min.js"></script>
        <script src="dearmusic.com/assets/js/spectragram.min.js"></script>
        <script src="dearmusic.com/assets/js/scrollReveal.min.js"></script>
        <script src="dearmusic.com/assets/js/isotope.min.js"></script>
        <script src="dearmusic.com/assets/js/twitterFetcher_v10_min.js"></script>
        <script src="dearmusic.com/assets/js/lightbox.min.js"></script>
        <script src="dearmusic.com/assets/js/jquery.countdown.min.js"></script>
        <script src="dearmusic.com/assets/js/scripts.js"></script>
    </body>
</html>
				
</body>
</html>