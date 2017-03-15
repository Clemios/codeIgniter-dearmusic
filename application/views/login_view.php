<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Connexion</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
	<link href="<?= constant('ASSETS') ?>css/login_view.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">

</head>
<body>
<?php 
include('application/views/menu.php');
?>
<br/>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well Signupformelement">
		<?php $attributes = array("name" => "loginform");
			echo form_open("login/index", $attributes);?>
			<legend>Connexion</legend>
			<div class="form-group">
				<label for="name">Email</label>
				<input class="form-control" name="Mail" placeholder="Entrez votre mail" type="text" value="<?php echo set_value('Mail'); ?>" />
				<span class="text-danger"><?php echo form_error('Mail'); ?></span>
			</div>
			<div class="form-group">
				<label for="name">Mot de passe</label>
				<input class="form-control" name="Password" placeholder="Mot de passe" type="Password" value="<?php echo set_value('Password'); ?>" />
				<span class="text-danger"><?php echo form_error('Password'); ?></span>
			</div>
			<div class="form-group">
				<button name="submit" type="submit" class="btn btn-info">Se connecter</button>
				<button name="cancel" type="reset" class="btn btn-info">Annuler</button>
			</div>
		<?php echo form_close(); ?>
		<?php echo $this->session->flashdata('msg'); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center well foote">	
		Nouveau ? <a href="<?php echo base_url(); ?>index.php/signup">S'enregistrer ici</a>
		</div>
	</div>
</div>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>
