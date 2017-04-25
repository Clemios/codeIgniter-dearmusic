<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Page de recherche</title>
	<link href="<?= constant('ASSETS') ?>css/flexslider.min.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="<?= constant('ASSETS') ?>css/line-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="<?= constant('ASSETS') ?>css/elegant-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="<?= constant('ASSETS') ?>css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="<?= constant('ASSETS') ?>css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="<?= constant('ASSETS') ?>css/theme.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="<?= constant('ASSETS') ?>css/custom.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="<?= constant('ASSETS') ?>css/search.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous">
    </script>
	
</head>
<body style="background-color: white; min-height: 2000px;">

	<!--Navbar-1-->
	<nav class="navbar-1">
		<div class="container-fluid">
			<div class="row" style="padding-top: 15px; color: white;">
				<h1 style="padding-left: 20px;">
					<a href="http://dearmusic.com" style="color: white">Dearmusic</a>
				</h1>
				<h1 class="col-md-offset-8" style="background-color: grey;"> 
					<a href="#" style="color: white;">Inscription</a>
					<a href="#" style="color: white;"> Connexion</a>
				</h1>
			</div>
		</div>
	</nav>

	<!--Navbar 2-->
	<nav class="navbar-2">
		<div class="container-fluid">
			<div class="row">
				<h1 style="padding-top: 12px; padding-left: 30px;">
					<a href="#" style="color: grey">Acceuil</a>
					<a href="#" style="color: grey">Tendances</a>
					<a href="#" style="color: grey">Catégories</a>
				</h1>
			</div>
		</div>
	</nav>
	
 <!--Navbar DearMusic - Sign In - Sign Up 
	<nav class="navbar navbar-inverse navbar-1" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="http://dearmusic.com" class="navbar-left" style="margin-top: 5px;">
					<img src="http://www.my-art.com/sites/default/files/styles/watermark/public/Gib%C3%A9/139ef807dc70211d11743be15d3113cc1792ef09_1334319171_crop_1x1.jpg?itok=XdaJUx7_" alt="murene" class="img-circle" style="max-width: 40px; height: auto;">
				</a>
				<a class="navbar-brand" style="margin-left: 1px;" href="#">DearMusic</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
      			<li><a href="#">Connexion</a></li>
    		</ul>
		</div>
	</nav>-->

 <!--Navbar Menus 
	<nav class="navbar navbar-inverse navbar-2">
		<div class="container-fluid">
			<ul class="nav navbar-nav">
				<li><a href="#"></a></li>
				<li><a href="#">Acceuil</a></li>
				<li><a href="#">Tendances</a></li>
				<li><a href="#">Genres</a></li>
			</ul>
			<form class="navbar-form navbar-left" role="search">
  				<div class="form-group">
					<input type="text" class="search-area" placeholder="Search">
				</div> -->

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

<!--JS temporaire-->
<script>
(function($){
    $(document).ready(function(){
		var offset = $(".navbar-2").offset().top;
		console.log(offset);

        $(document).scroll(function(){
            var scrollTop = $(document).scrollTop();

            if(scrollTop > offset){
                $(".navbar-2").addClass("navbar-2-fixed");
            }
            else {
                $(".navbar-2").removeClass("navbar-2-fixed");
            }
        });
    });
})(jQuery);
</script>