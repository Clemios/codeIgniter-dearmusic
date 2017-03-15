<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User Signup Form | DearMusic.com</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="<?= constant('ASSETS') ?>css/flexslider.min.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="<?= constant('ASSETS') ?>css/line-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="<?= constant('ASSETS') ?>css/elegant-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="<?= constant('ASSETS') ?>css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="<?= constant('ASSETS') ?>css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="<?= constant('ASSETS') ?>css/theme-sunset.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="<?= constant('ASSETS') ?>css/custom.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="<?= constant('ASSETS') ?>css/signup.css" rel="stylesheet" type="text/css" media="all"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' rel='stylesheet' type='text/css'>
    <script src="<?= constant('ASSETS') ?>js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <link href="http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic" rel="stylesheet" type="text/css">
    <link href="<?= constant('ASSETS') ?>css/font-libre.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Yellowtail" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">

</head>
<body>
	<?php 
		include('application/views/menu.php');
	?>
	<div class="loader">
		<div class="spinner">
			<div class="double-bounce1"></div>
			<div class="double-bounce2"></div>
		</div>
	</div>
	<div class="container">
		<header class="row">
			<div class="col-md-12 col-sm-12 ">
				<h1 class="signupTitle">Créer un </h1>
				<h1 class="signupTitle">compte</h1>
			</div>
		</header>
		<content class="row">
			<div class="col-md-10 col-md-offset-1 well signupformelement">
				<?php $attributes = array("name" => "signupform");
				echo form_open("signup/index", $attributes);?>
				<legend><i class="fa fa-address-card-o" aria-hidden="true"></i>S'enregistrer</legend>
				<div class="photo-form-wrapper clearfix">
					<div class="col-md-4 col-sm-4">
						<label for="name">Prénom</label>
						<input class="form-control" name="FirstName" placeholder="Prénom" type="text" value="<?php echo set_value('FirstName'); ?>" />
						<span class="text-danger"><?php echo form_error('FirstName'); ?></span>
					</div>			
					<div class="col-md-4 col-sm-4">
						<label for="name">Nom</label>
						<input class="form-control" name="LastName" placeholder="Nom" type="text" value="<?php echo set_value('Name'); ?>" />					
						<span class="text-danger"><?php echo form_error('LastName'); ?></span>
					</div>
					<div class="col-md-4 col-sm-4">
						<label for="name">Nom d'utilisateur</label>
						<input class="form-control" name="UserName" placeholder="nom d'utilisateur" type="text" value="<?php echo set_value('UserName'); ?>" />
						<span class="text-danger"><?php echo form_error('UserName'); ?></span>
					</div>
					<div class="col-md-4 col-sm-4">
						<label for="Mail">Email</label>
						<input class="form-control" name="Mail" placeholder="Mail" type="text" value="<?php echo set_value('Mail'); ?>" />
						<span class="text-danger"><?php echo form_error('Mail'); ?></span>
					</div>
					<div class="col-md-4 col-sm-4">
						<label for="name">Ville</label>
						<input class="form-control" name="City" placeholder="Ville" type="text" value="<?php echo set_value('City'); ?>" />
						<span class="text-danger"><?php echo form_error('City'); ?></span>
					</div>
					<div class="col-md-4 col-sm-4">
						<label for="name">Pays</label>
						<input class="form-control" name="Country" placeholder="Pays" type="text" value="<?php echo set_value('Country'); ?>" />
						<span class="text-danger"><?php echo form_error('Country'); ?></span>
					</div>
					<div class="col-md-4 col-sm-4">
						<label for="name">Téléphone</label>
						<input class="form-control" name="Phone" placeholder="Numéro de téléphone" type="text" value="<?php echo set_value('Phone'); ?>" />
						<span class="text-danger"><?php echo form_error('Phone'); ?></span>
					</div>
					<div class="col-md-4 col-sm-4">
						<label for="subject">Mot de passe</label>
						<input class="form-control" name="Password" placeholder="Mot de passe" type="Password" />
						<span class="text-danger"><?php echo form_error('Password'); ?></span>
					</div>
					<div class="col-md-4 col-sm-4">
						<label for="subject">Confirmer le mot de passe</label>
						<input class="form-control" name="cPassword" placeholder="Confirmer le mot de passe" type="Password" />
						<span class="text-danger"><?php echo form_error('cPassword'); ?></span>
					</div>
					<div class="col-md-4 col-sm-4"">
						<button name="submit" type="submit" class="btn btn-info">S'enregistrer</button>
						<button name="cancel" type="reset" class="btn btn-info">Annuler</button>
					</div>
					<?php echo form_close(); ?>
					<?php echo $this->session->flashdata('msg'); ?>
				</div>
			</div>
		</content>			
		<footer class="row">
			<div class="col-md-4 col-md-offset-4 text-center">Déja un compte ?<a href="<?php echo base_url(); ?>index.php/login">Se connecter</a>
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


</body>
</html>