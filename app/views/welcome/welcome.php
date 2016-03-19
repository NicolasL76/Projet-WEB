<?php
/**
 * Sample layout.
 */
use Core\Language;

?>

<!DOCTYPE html>
<html lang="en"><head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="http://getbootstrap.com/favicon.ico">

	<title>Cover Template for Bootstrap</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/cover.css" rel="stylesheet">


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>

<body>

<div class="site-wrapper">
	<div class="site-wrapper-inner">
		<div class="cover-container">
			<div class="masthead clearfix">
				<div class="inner">
					<h3 class="masthead-brand">iPortfolio</h3>
					<nav>
						<ul class="nav masthead-nav">
							<li class="active"><a href="#">Accueil</a></li>
							<li><a href="#">Connexion</a></li>
							<li><a href="#">Inscription</a></li>
						</ul>
					</nav>
				</div>
			</div>
<br/><br/><br/><br/>
			<div class="inner cover">
					<h1><?php echo $data['title'] ?></h1>

				<p><?php echo $data['welcome_message'] ?></p>
				<p class="lead">
				<a  class="btn btn-lg btn-default" href="<?php echo DIR; ?>subpage">
					<?php echo Language::show('open_subpage', 'Welcome'); ?>
				</a>
				</p>
			</div>



			<div class="mastfoot">
				<div class="inner">
					<p>Cover template for <a href="http://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
				</div>
			</div>

		</div>

	</div>

</div>



</body></html>

