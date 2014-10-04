<?php
session_start();
ob_start();

require 'conf/config.php';
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php if($Maintenance_Mode) { ?>
			<meta http-equiv="refresh" content="5;./">
		<?php } ?>
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="img/favicon.ico">

		<title>BootPanel | PHP Server Control Panel</title>

		<!-- Bootstrap core CSS -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<link href="bootstrap/css/carousel.css" rel="stylesheet">
	</head>

	<body>
		<div class="navbar-wrapper">
			<div class="container">
				<div class="navbar navbar-inverse navbar-static-top" role="navigation">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="">BootPanel</a>
						</div>
						<div class="navbar-collapse collapse">
							<ul class="nav navbar-nav">
								<li><a href="./">Home</a></li>
								<li><a href="./?about">About</a></li>
								<li><a href="./?contact">Contact</a></li>
								<li><a href="./?api">API</a></li>
								<li><a href="./?download">Download</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="bootpanel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#bootpanel" data-slide-to="0" class="active"></li>
				<li data-target="#bootpanel" data-slide-to="1"></li>
				<li data-target="#bootpanel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
					<div class="container">
						<div class="carousel-caption">
							<h1>BootPanel</h1>
							<p>BootPanel is a free, open source server control panel written in PHP.</br>
							   It supports custom plugins and themes to allow customization.
							</p>
							<p><a class="btn btn-lg btn-primary" href="./?download" role="button">Download Now</a></p>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="data:image/gif;base64,R0lGODlhAQABAIAAAGZmZgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
					<div class="container">
						<div class="carousel-caption">
							<h1>Extensive API</h1>
							<p>The BootPanel Software runs completely on its API.  This allows plugins and themes to do almost anything.</p>
							<p><a class="btn btn-lg btn-primary" href="./?api" role="button">View API Documentation</a></p>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="data:image/gif;base64,R0lGODlhAQABAIAAAFVVVQAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
					<div class="container">
						<div class="carousel-caption">
							<h1>Always Updating</h1>
							<p>The BootPanel Software is constantly being updated to allow new and improved features in both Themes and Plugins!</p>
							<p><a class="btn btn-lg btn-primary" href="./?download" role="button">Download Now</a></p>
						</div>
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#bootpanel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
			<a class="right carousel-control" href="#bootpanel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div><!-- /.carousel -->

		<?php if(!$Maintenance_Mode) { 
				if(isset($_GET['about']) && empty($_GET['about'])) {?>
					<div class="container marketing">
						<div class="row">
							<div class="col-lg-4">
								<h2>About BootPanel</h2>
								<p>BootPanel is a free, open source server control panel.  It has an extensive API to allow Themes and Plugins to do almost anything.  The BootPanel software has many features including Server Statistics, File Management, MySQL Management, One-Click Plugin Installation, and more!</p>
							</div><!-- /.col-lg-4 -->
						</div>
					</div>
		<?php 	} elseif(isset($_GET['contact']) && empty($_GET['contact'])) { ?>
					<div class="container marketing">
						<div class="row">
							<div class="col-lg-4">
								<h2>Contact Us</h2>
								<p>The Contact form is currently unavailable.</p>
							</div><!-- /.col-lg-4 -->
						</div>
					</div>
		<?php	} elseif(isset($_GET['api']) && empty($_GET['api'])) { ?>
					<div class="container marketing">
						<div class="row">
							<div class="col-lg-4">
								<h2>BootPanel API</h2>
								<p>The BootPanel API reference is currently unavailable.</p>
							</div><!-- /.col-lg-4 -->
						</div>
					</div>
		<?php	} elseif(isset($_GET['download']) && empty($_GET['download'])) { ?>
					<div class="container marketing">
						<div class="row">
							<div class="col-lg-4">
								<h2>Download BootPanel</h2>
								<a class="btn btn-lg btn-default" href="https://github.com/BootPanel/BootPanel/archive/master.zip">Download ZIP</a>
								<a class="btn btn-lg btn-default disabled">Download RPM</a>
							</div><!-- /.col-lg-4 -->
						</div>
					</div>
		<?php	} else { ?>
					<div class="container marketing">
						<div class="row">
							<div class="col-lg-4">
								<!-- <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;"> -->
								<h2>Free</h2>
								<p>BootPanel is a free, open source server control panel.  No restrictions!</p>
								<p><a class="btn btn-default" href="./?download" role="button">Download Now</a></p>
							</div><!-- /.col-lg-4 -->
							<div class="col-lg-4">
								<!-- <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;"> -->
								<h2>Customizable</h2>
								<p>BootPanel can load custom themes or run plugins with the click of a button.</p>
								<p><a class="btn btn-default" href="./?api" role="button">API Documentation</a></p>
							</div><!-- /.col-lg-4 -->
							<div class="col-lg-4">
								<!-- <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;"> -->
								<h2>Simple</h2>
								<p>BootPanel has a simple, user friendly interface to allow you to control your server with ease.</p>
								<p><a class="btn btn-default disabled" href="/BootPanel-Demo" role="button">View Demo</a></p>
							</div>
						</div>
		<?php	}
			  } else { ?>
				<div class="col-lg-4">
					<h2>Under Maintenance!</h2>
					<p>The site is currently undergoing maintenance.  Your browser will check to is if the website has gone public automatically every 5 seconds.</p>
				</div>
		<?php } ?>

			<footer>
				<p class="pull-right">&copy; 2014 BootPanel</p>
			</footer>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="bootstrap/assets/js/docs.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>