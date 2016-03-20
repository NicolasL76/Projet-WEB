<?php
/**
 * Sample layout.
 */
use Core\Language;

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html"><head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Custom styles for this template -->
	<link href="css/cover.css" rel="stylesheet">


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

		</div>

	</div>

</div>

<hr class="featurette-divider"/>
<form action="lol.php" method="post">
<div class="row featurette">
<div class="col-lg-6">
	<img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" height="140" width="140">
	<h2>S'inscrire</h2>


		<p>

			<label for="prenom">Login :</label><br/>
			<input type="text" name="login" id="login" max length="20" placeholder="Entre ton prénom"/><br/>
			<label for="nom">Email:</label><br/>
			<input type="text" name="mail" id="mail" max length="20" placeholder="Entre ton nom"/><br/>

			<label for="nom">Mot de passe:</label><br/>
			<input type="text" name="mdp" id="mdp" max length="20" placeholder="Entre ton nom"/><br/>
			<br/>

		</p>
</div><!-- /.col-lg-4 -->
	<div class="col-lg-6">
		<p>
			<a  class="btn btn-lg btn-default"type="submit" name="connexion" value="Lancez vous!" href="<?php echo DIR; ?>subpage">
				Lancez vous!
			</a>
		</p>

	</div><!-- /.col-lg-4 -->
</div>
</form>
<br/>

<hr class="featurette-divider"/>
<form action="lol.php" method="post">
	<div class="row featurette">
	<div class="col-lg-6">
		<img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" height="140" width="140">
		<h2>Se Connecter</h2>


			<p>

				<label for="prenom">Login :</label><br/>
				<input type="text" name="login" id="login" max length="20" placeholder="Entre ton prénom"/><br/>

				<label for="nom">Mot de passe:</label><br/>
				<input type="text" name="mdp" id="mdp" max length="20" placeholder="Entre ton nom"/><br/>
				<br/>

			</p>

	</div><!-- /.col-lg-4 -->
	<div class="col-lg-6">
		<a  class="btn btn-lg btn-default"type="submit" name="connexion" value="Lancez vous!" href="<?php echo DIR; ?>subpage">
			Lancez vous!
		</a>

	</div>
</div>
</form>
</body></html>

