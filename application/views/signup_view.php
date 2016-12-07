<!DOCTYPE html>
<html>









<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User Signup Form | DearMusic.com</title>


	<link href="<?php echo base_url("assets/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css" />
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
		<link href="<?= constant('ASSETS') ?>css/signup.css" rel="stylesheet" type="text/css" media="all"/>
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
			<a class="navbar-brand" href="<?php echo base_url(); ?>">DEAR MUSIC MAMENE</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<?php if ($this->session->userdata('login')){ ?>
				<li><p class="navbar-text">Hello <?php echo $this->session->userdata('uname'); ?></p></li>
				<li><a href="<?php echo base_url(); ?>home/logout">Log Out</a></li>
				<?php } else { ?>
				<li><a href="<?php echo base_url(); ?>login">Login</a></li>
				<li><a href="<?php echo base_url(); ?>signup">Signup</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</nav>





    	<div class="loader">
    		<div class="spinner">
			  <div class="double-bounce1"></div>
			  <div class="double-bounce2"></div>
			</div>
    	</div>
				


<div class="container">
	<div class="row">
		<header class="signup">
			<div class="background-image-holder parallax-background">
				<img class="background-image" alt="Background Image" src="<?= constant('ASSETS') ?>img/hero5.jpg">
			</div>
			<div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
				<h1>Créer un compte ☺</h1>
			</div>
				<div class="col-md-4 col-md-offset-4 well signupformelement">
					<?php $attributes = array("name" => "signupform");
					echo form_open("signup/index", $attributes);?>
					<legend>Signup page</legend>

					<div class="photo-form-wrapper clearfix">
						<div class="col-md-4 col-sm-4">
						<label for="name">First Name</label>
						<input class="form-control" name="FirstName" placeholder="Your First Name" type="text" value="<?php echo set_value('FirstName'); ?>" />
						<span class="text-danger"><?php echo form_error('FirstName'); ?></span>
							</div>			
							<div class="col-md-4 col-sm-4">
								<label for="name">Last Name</label>
								<input class="form-control" name="Name" placeholder="Last Name" type="text" value="<?php echo set_value('Name'); ?>" />					<span class="text-danger"><?php echo form_error('Name'); ?></span>
							</div>
							<div class="col-md-4 col-sm-4">
								<label for="name">UserName</label>
								<input class="form-control" name="UserName" placeholder="Nick Name" type="text" value="<?php echo set_value('UserName'); ?>" />
								<span class="text-danger"><?php echo form_error('UserName'); ?></span>
							</div>
							<div class="col-md-4 col-sm-4">
								<label for="Mail">Mail ID</label>
								<input class="form-control" name="Mail" placeholder="Mail-ID" type="text" value="<?php echo set_value('Mail'); ?>" />
								<span class="text-danger"><?php echo form_error('Mail'); ?></span>
							</div>
							<div class="col-md-4 col-sm-4">
								<label for="name">City</label>
								<input class="form-control" name="City" placeholder="City" type="text" value="<?php echo set_value('City'); ?>" />
								<span class="text-danger"><?php echo form_error('City'); ?></span>
							</div>
							<div class="col-md-4 col-sm-4">
								<label for="name">Country</label>
								<input class="form-control" name="Country" placeholder="Country" type="text" value="<?php echo set_value('Country'); ?>" />
								<span class="text-danger"><?php echo form_error('Country'); ?></span>
							</div>
							<div class="col-md-4 col-sm-4">
								<label for="name">Phone</label>
								<input class="form-control" name="Phone" placeholder="Phone" type="text" value="<?php echo set_value('Phone'); ?>" />
								<span class="text-danger"><?php echo form_error('Phone'); ?></span>
							</div>
							<div class="col-md-4 col-sm-4">
								<label for="subject">Password</label>
								<input class="form-control" name="Password" placeholder="Password" type="Password" />
								<span class="text-danger"><?php echo form_error('Password'); ?></span>
							</div>

							<div class="col-md-4 col-sm-4">
								<label for="subject">Confirm Password</label>
								<input class="form-control" name="cPassword" placeholder="Confirm Password" type="Password" />
								<span class="text-danger"><?php echo form_error('cPassword'); ?></span>
							</div>

							<div class="col-md-4 col-sm-4">
								<button name="submit" type="submit" class="btn btn-info">Signup</button>
								<button name="cancel" type="reset" class="btn btn-info">Cancel</button>
							</div>
							<?php echo form_close(); ?>
							<?php echo $this->session->flashdata('msg'); ?>
						</div>
					</div>
				</div>
					<div class="row">
					<div class="col-md-4 col-md-offset-4 text-center">	
				Already Registered? <a href="<?php echo base_url(); ?>index.php/login">Login Here</a>
			</div>
		</header>
	</div>
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






</body>






</html>