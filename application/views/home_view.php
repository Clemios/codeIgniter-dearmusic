<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Page d'accueil| DearMusic.com</title>
	<!--link the bootstrap css file-->
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="<?= constant('ASSETS') ?>css/flexslider.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="<?= constant('ASSETS') ?>css/line-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="<?= constant('ASSETS') ?>css/elegant-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="<?= constant('ASSETS') ?>css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="<?= constant('ASSETS') ?>css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="<?= constant('ASSETS') ?>css/theme-cobalt.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="<?= constant('ASSETS') ?>css/custom.css" rel="stylesheet" type="text/css" media="all"/>
        <!--[if gte IE 9]>
        	<link rel="stylesheet" type="text/css" href="css/ie9.css" />
		<![endif]-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' rel='stylesheet' type='text/css'>
        <script src="<?= constant('ASSETS') ?>js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <link href="http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic" rel="stylesheet" type="text/css">
        <link href="<?= constant('ASSETS') ?>css/font-libre.css" rel="stylesheet" type="text/css">
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo base_url(); ?>index.php/home">DEAR MUSIC MAMENE</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<?php if ($this->session->userdata('login')){ ?>
				<li><p class="navbar-text">Hello miskine <?php echo $this->session->userdata('uname'); ?></p></li>
				<li><a href="<?php echo base_url(); ?>index.php/home/logout">Log Out</a></li>
				<?php } else { ?>
				<li><a href="<?php echo base_url(); ?>index.php/login">Login</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/signup">Signup</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</nav>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
 <!--<![endif]-->

    	<div class="loader">
    		<div class="spinner">
			  <div class="double-bounce1"></div>
			  <div class="double-bounce2"></div>
			</div>
    	</div>
				
		<div class="nav-container">
			
		
			
		
						
			
		
			
		
	
						
						
					</div>	
			</header>
			
			<section class="duplicatable-content milestones">
			
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
							<h1>Dear Music, what is this ?</h1>
							<p class="lead">
								With Dear Music, you can :</p>	
						</div>
					</div>
		
					<div class="row">
						<div class="col-md-3 col-sm-6 text-center">
							<div class="feature feature-icon-large">
								<i class="icon icon-upload"></i>
								<div class="pin-body"></div>
								<div class="pin-head"></div>
								<h5>Upload and Share <br>your Music</h5>
								<span> </span>
								<span class="sub"> </span>
							</div>
						</div>
						
						<div class="col-md-3 col-sm-6 text-center">
							<div class="feature feature-icon-large">
								<i class="icon icon-adjustments"></i>
								<div class="pin-body"></div>
								<div class="pin-head"></div>
								<h5>Listen Music of&nbsp;<br>every users</h5>
								<span> </span>
								<span class="sub"> </span>
							</div>
						</div>
						
						<div class="col-md-3 col-sm-6 text-center">
							<div class="feature feature-icon-large">
								<i class="icon icon-ribbon"></i>
								<div class="pin-body"></div>
								<div class="pin-head"></div>
								<h5>Some informations<br>about them</h5>
								<span> </span>
								<span class="sub"> </span>
							</div>
						</div>
						
						<div class="col-md-3 col-sm-6 text-center">
							<div class="feature feature-icon-large">
								<i class="icon icon-mic"></i>
								<div class="pin-body"></div>
								<div class="pin-head"></div>
								<h5>Donate to the artist</h5>
								<span> </span>
								<span class="sub"> </span>
							</div>
						</div>
					
		
					</div>
				</div>
			
			</section>
		</div>
		
		<div class="footer-container">
		
			<footer class="short bg-secondary-1">
				<div class="container">
					<div class="row">
						<div class="col-sm-10">
							<span class="sub">© Copright Mamene 2016</span>
							<ul>
								<li><a href="#">Terms Of Use</a></li>
								<li><a href="#">Privacy &amp; Security Statement</a></li>
								<li><a href="#">Sitemap</a></li>
							</ul>
						</div>
						
						<div class="col-sm-2 text-right">
							<ul class="social-icons">
								<li>
									<a href="#">
										<i class="icon social_googleplus"></i>
									</a>
								</li>
								
								<li>
									<a href="#">
										<i class="icon social_facebook"></i>
									</a>
								</li>
							</ul>	
						</div>
					</div>
				</div>
			</footer>
		</div>
				
		<script src="https://www.youtube.com/iframe_api"></script>
		<script src="<?= constant('ASSETS') ?>js/jquery.min.js"></script>
        <script src="<?= constant('ASSETS') ?>js/jquery.plugin.min.js"></script>
        <script src="<?= constant('ASSETS') ?>js/bootstrap.min.js"></script>
        <script src="<?= constant('ASSETS') ?>js/jquery.flexslider-min.js"></script>
        <script src="<?= constant('ASSETS') ?>js/smooth-scroll.min.js"></script>
        <script src="<?= constant('ASSETS') ?>js/skrollr.min.js"></script>
        <script src="<?= constant('ASSETS') ?>js/spectragram.min.js"></script>
        <script src="<?= constant('ASSETS') ?>js/scrollReveal.min.js"></script>
        <script src="<?= constant('ASSETS') ?>js/isotope.min.js"></script>
        <script src="<?= constant('ASSETS') ?>js/twitterFetcher_v10_min.js"></script>
        <script src="<?= constant('ASSETS') ?>js/lightbox.min.js"></script>
        <script src="<?= constant('ASSETS') ?>js/jquery.countdown.min.js"></script>
        <script src="<?= constant('ASSETS') ?>js/scripts.js"></script>



<script type="text/javascript" src="<?php echo base_url("<?= constant('ASSETS') ?>js/jquery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("<?= constant('ASSETS') ?>js/bootstrap.js"); ?>"></script>
</body>
</html>
