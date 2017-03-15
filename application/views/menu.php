	<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
			</button>
			<a class="navbar-brand" href="<?php echo base_url(); ?>">DEAR MUSIC</a>
		</div>
			<div class="collapse navbar-collapse" id="navbar1">
				<ul class="nav navbar-nav navbar-right">
					<li><a class="unlien" href="<?php echo base_url(); ?>newsfeed">[Fil d'actualité]</a></li>
					<li><a class="unlien" href="<?php echo base_url(); ?>event">[Évènements]</a></li>
					<li><a class="unlien" href="<?php echo base_url(); ?>threads">[Tendances]</a></li>
					<li><a class="unlien" href="<?php echo base_url(); ?>addmusic">[Ajouter une musique]</a></li>
					<li><a class="unlien" href="<?php echo base_url(); ?>chat">[Chat]</a></li>
					<li><a class="unlien" href="<?php echo base_url(); ?>profile/index">[Mon compte]</a></li>
					<?php if ($this->session->userdata('login')){ ?>
						<li><p class="navbar-text">Hello <?php echo $this->session->userdata('uname'); ?></p></li>
						<li><a href="<?php echo base_url(); ?>home/logout">Log Out</a></li>
					<?php } else { ?>
						<li><a class="signuplogin" href="<?php echo base_url(); ?>login">Se connecter</a></li>
						<li><a class="signuplogin" href="<?php echo base_url(); ?>signup">S'enregistrer</a></li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</nav>
