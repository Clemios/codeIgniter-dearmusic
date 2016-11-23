<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User Signup Form | KodingMadeSimple.com</title>
	<link href="<?php echo base_url("assets/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css" />
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
			<a class="navbar-brand" href="<?php echo base_url(); ?>index.php/home">KODING MADE SIMPLE</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<?php if ($this->session->userdata('login')){ ?>
				<li><p class="navbar-text">Hello <?php echo $this->session->userdata('uname'); ?></p></li>
				<li><a href="<?php echo base_url(); ?>index.php/home/logout">Log Out</a></li>
				<?php } else { ?>
				<li><a href="<?php echo base_url(); ?>index.php/login">Login</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/signup">Signup</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</nav>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<?php $attributes = array("name" => "signupform");
			echo form_open("signup/index", $attributes);?>
			<legend>Signup</legend>
			
			<div class="form-group">
				<label for="name">First Name</label>
				<input class="form-control" name="FirstName" placeholder="Your First Name" type="text" value="<?php echo set_value('FirstName'); ?>" />
				<span class="text-danger"><?php echo form_error('FirstName'); ?></span>
			</div>			
		
			<div class="form-group">
				<label for="name">Last Name</label>
				<input class="form-control" name="Name" placeholder="Last Name" type="text" value="<?php echo set_value('Name'); ?>" />
				<span class="text-danger"><?php echo form_error('Name'); ?></span>
			</div>
			<div class="form-group">
				<label for="name">UserName</label>
				<input class="form-control" name="UserName" placeholder="Nick Name" type="text" value="<?php echo set_value('UserName'); ?>" />
				<span class="text-danger"><?php echo form_error('UserName'); ?></span>
			</div>
			<div class="form-group">
				<label for="Mail">Mail ID</label>
				<input class="form-control" name="Mail" placeholder="Mail-ID" type="text" value="<?php echo set_value('Mail'); ?>" />
				<span class="text-danger"><?php echo form_error('Mail'); ?></span>
			</div>
			<div class="form-group">
				<label for="name">City</label>
				<input class="form-control" name="City" placeholder="City" type="text" value="<?php echo set_value('City'); ?>" />
				<span class="text-danger"><?php echo form_error('City'); ?></span>
			</div>
			<div class="form-group">
				<label for="name">Country</label>
				<input class="form-control" name="Country" placeholder="Country" type="text" value="<?php echo set_value('Country'); ?>" />
				<span class="text-danger"><?php echo form_error('Country'); ?></span>
			</div>
			<div class="form-group">
				<label for="name">Phone</label>
				<input class="form-control" name="Phone" placeholder="Phone" type="text" value="<?php echo set_value('Phone'); ?>" />
				<span class="text-danger"><?php echo form_error('Phone'); ?></span>
			</div>
			<div class="form-group">
				<label for="subject">Password</label>
				<input class="form-control" name="Password" placeholder="Password" type="Password" />
				<span class="text-danger"><?php echo form_error('Password'); ?></span>
			</div>

			<div class="form-group">
				<label for="subject">Confirm Password</label>
				<input class="form-control" name="cPassword" placeholder="Confirm Password" type="Password" />
				<span class="text-danger"><?php echo form_error('cPassword'); ?></span>
			</div>

			<div class="form-group">
				<button name="submit" type="submit" class="btn btn-info">Signup</button>
				<button name="cancel" type="reset" class="btn btn-info">Cancel</button>
			</div>
			<?php echo form_close(); ?>
			<?php echo $this->session->flashdata('msg'); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">	
		Already Registered? <a href="<?php echo base_url(); ?>index.php/login">Login Here</a>
		</div>
	</div>
</div>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>