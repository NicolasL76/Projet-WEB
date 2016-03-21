<?php
/**
 * Sample layout.
 */

use Core\Language;

?>

<html xmlns="http://www.w3.org/1999/html">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Custom styles for this template -->
	<link href="css/cover.css" rel="stylesheet">


</head>
<header>

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">ePortfolio</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Modifier</a></li>
					<li><a href="<?php echo DIR; ?>">Deconnexion </a></li>
					<li><a href="#">lien de partage</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
</header>
	<body>

		<!-- bande supérieure -->
					<form action="lol.php" method="post">
						<!-- Titre de la mention -->
						<div class="competences">
							<h2>Vos compétences</h2>
							<label for="prenom">Login :</label><br/>
							<input type="text" name="login" id="login" max length="20" placeholder="Entre ton prénom"/><br/>
							<label for="nom">Email:</label><br/>
							<input type="text" name="mail" id="mail" max length="20" placeholder="Entre ton nom"/><br/>

							<label for="nom">Mot de passe:</label><br/>
								<input type="text" name="mdp" id="mdp" max length="20" placeholder="Entre ton nom"/><br/>
							<br/>
						</div>
					</form>



					<form action="lol.php" method="post">
						<!-- Titre de la mention -->
						<div class="projets">
							<h2>S'inscrire</h2>
							<label for="compétence">Compétence :</label> <br/>
							<input type="text" name="login" id="login" max length="20" placeholder="Entre ton prénom"/><br/>
							<label for="nom">Email:</label><br/>
							<input type="text" name="mail" id="mail" max length="20" placeholder="Entre ton nom"/><br/>

							<label for="nom">Mot de passe:</label><br/>
							<input type="text" name="mdp" id="mdp" max length="20" placeholder="Entre ton nom"/><br/>
							<br/>
						</div>
					</form>



					<form action="lol.php" method="post">
						<!-- Titre de la mention -->
						<div class="formations">
							<h2>S'inscrire</h2>
							<label for="prenom">Login :</label><a  class="btn btn-lg btn-default"type="submit" name="connexion" value="Ajo" href="<?php  ?>><br/>
							<input type="text" name="login" id="login" max length="20" placeholder="Entre ton prénom"/><br/>
							<label for="nom">Email:</label><br/>
							<input type="text" name="mail" id="mail" max length="20" placeholder="Entre ton nom"/><br/>

							<label for="nom">Mot de passe:</label><br/>
							<input type="text" name="mdp" id="mdp" max length="20" placeholder="Entre ton nom"/><br/>
							<br/>
						</div>
					</form>


					<form action="lol.php" method="post">
						<!-- Titre de la mention -->
						<div class="experiences">
							<h2>S'inscrire</h2>
							<label for="prenom">Login :</label><br/>
							<input type="text" name="login" id="login" max length="20" placeholder="Entre ton prénom"/><br/>
							<label for="nom">Email:</label><br/>
							<input type="text" name="mail" id="mail" max length="20" placeholder="Entre ton nom"/><br/>

							<label for="nom">Mot de passe:</label><br/>
							<input type="text" name="mdp" id="mdp" max length="20" placeholder="Entre ton nom"/><br/>
							<br/>
						</div>
					</form>



					<!-- bouton de validation finale -->
					<div class="valider">
						<p>
							<a  class="btn btn-lg btn-default"type="submit" name="connexion" value="Lancez vous!" href="<?php echo DIR; ?>subpage">
								Valider
							</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>

