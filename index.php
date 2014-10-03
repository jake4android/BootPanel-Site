<?php require 'includes/header.php'; ?>
	<body>
		<div class="container">
			<!-- Main component for a primary marketing message or call to action -->
			<div class="jumbotron">
				<center>
					<h1>BootPanel | PHP Control Panel</h1>
					<p>
						BootPanel is a free, open source Server Control Panel written in PHP.  It supports Plugins and Themes to allow customization.
						You do not need any special installations on your Virtual Machine.  The only two services you need for BootPanel to work are PHP and MySQL.
					</p>
					<p>
						<a class="btn btn-lg btn-primary" href="features.php" role="button">View Features</a>
						<a class="btn btn-lg btn-primary" href="download.php" role="button">Download BootPanel</a>
					</p>
				</center>
			</div>
			<style>iframe{ border: none; }</style>
			<center>
				<h4>Percent Completion of Next Build</h4>
				<iframe scrolling="no" src="build_percent.php" height="30" width="1000"><?php echo $Percent_Next_Build; ?>%</iframe>
			</center>
			</br>
		</div>
	</body>
<?php require 'includes/footer.php'; ?>