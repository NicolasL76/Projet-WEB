<?php
/**
 * Sample layout.
 */
use Core\Language;

?>

<!-- utilisation de bootstrap-->
<link href="css/bootstrap.css" rel="stylesheet" xmlns="http://www.w3.org/1999/html">

<!-- Second css qui a la priorité sur bootstrap -->
<link href="css/cover.css" rel="stylesheet">


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

<!--ouverture et gestion de la base de donnée-->
<?php
try
{
	$BDD = new PDO('mysql:host=127.0.0.1;dbname=bdd_projetweb','root','');

}
catch (Exception $e)
{
	die('Erreur: ' . $e->getMessage());
}
?><!-- Connexion via PDO -->


<!-- barre de Navigation -->
<header>

	<div class="site-wrapper">
		<div class="site-wrapper-inner">
			<div class="cover-container">
				<div class="masthead clearfix">
					<div class="inner">
						<h3 class="masthead-brand">iPortfolio</h3>
						<nav>
							<ul class="nav masthead-nav">
								<li class="active"><a href="#">Modifier</a></li>
								<li><a href="<?php echo DIR; ?>">Deconnexion </a></li>
								<li><a id="theme1">Theme 1</a></li>
								<li><a id="theme2">Theme 2</a></li>
							</ul>
						</nav>
					</div>
				</div>

</header>
<br/><br/><br/><br/>


<!--Recuperation du profil -->
<?php
$query = $BDD->query("SELECT * FROM utilisateur");
($donnees = $query->fetch())

?>
<!--Affichage des informations de l'utilisateur -->
<div class=" col-lg-4 panel panel-default">
	<div class="panel-heading"><?php echo $donnees['nom']; ?><?php echo $donnees['prenom']; ?></div>
	<div class="panel-body">Mail : <?php echo $donnees['mail']; ?></div>
	<div class="panel-body">Telephone : <?php echo $donnees['tel']; ?></div>
	<div class="panel-body">Date de naissance : <?php echo $donnees['date_naissance']; ?></div>
	<div class="panel-body">Sexe : <?php echo $donnees['sexe']; ?></div>
</div>

<?php

$query->closeCursor(); // Termine le traitement de la requête

?>

<!-- Contenu de la page -->
<div class="container">

	<!-- Premier titre : Projets -->
	<div class="row">
		<div class="col-lg-12"><!-- Longueure des colones-->
			<h1 class="page-header">Mes Projets
			</h1>
		</div>
	</div>
	<!-- /.row -->

	<!-- Projects Row -->
	<div class="row">

		<!-- requette de récupération des projets -->
		<?php
		$query = $BDD->query("SELECT * FROM projet LIMIT 0, 2");
		while ($donnees = $query->fetch())
		{
			?>
			<div class="col-md-6 portfolio-item">
				<a href="#"><!-- Lien mort pour eventuellement inclure un lien vers le projet -->
					<img class="img-responsive" src="<?php echo $donnees['lien_illustration']; ?>" alt="">
				</a>
				<h3><?php echo $donnees['nom_project']; ?></h3>
				<p><?php echo $donnees['description_project']; ?></p>
			</div>
			<?php
		}
		$query->closeCursor(); // Termine le traitement de la requête

		?>
	</div>
	<!-- /.row -->

	<div class="row">
		<!-- seconde requette de récupération des projets  -->
		<?php
		$query = $BDD->query("SELECT * FROM projet LIMIT 2, 4");
		while ($donnees = $query->fetch())
		{
			?>
			<div class="col-md-6 portfolio-item">
				<a href="#"><!-- Lien mort pour eventuellement inclure un lien vers le projet -->
					<img class="img-responsive" src="<?php echo $donnees['lien_illustration']; ?>" alt="">
				</a>
				<h3><?php echo $donnees['nom_project']; ?></h3>
				<p><?php echo $donnees['description_project']; ?></p>
			</div>
			<?php
		}
		$query->closeCursor(); // Termine le traitement de la requête

		?>
	</div>


	<br/><br/><br/><br/><br/>

	<!-- Second titre de la page : Competences-->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Mes Compétences</h1>
		</div>
	</div>
	<!-- /.row -->

	<div class="row">
		<!-- Requette de récupération des competences  -->
		<?php
		$query = $BDD->query("SELECT * FROM competence");
		while ($donnees = $query->fetch())
		{
			?>
			<div class="col-lg-4 portfolio-item">
				<div><!-- affichage des competences -->
					<h3><?php echo $donnees['categorie_competence']?></h3>
					<p>
						Compétence :<?php echo $donnees['competence']?><br/>
						Niveau de compétence :<?php echo $donnees['niveau_competence']?><br/>
					</p>
				</div>


			</div>

			<?php
		}
		$query->closeCursor(); // Termine le traitement de la requête

		?>
	</div>

	<!-- /.row -->

	<br/><br/><br/><br/><br/><br/><br/><br/>

	<!-- Troisieme titre : Formations-->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Mes experiences en entreprise</h1>
		</div>
	</div>
	<!-- /.row -->

	<!-- Formations Row -->
	<div class="row">
		<!-- Requette de récupération des experiences en entreprise -->
		<?php
		$query = $BDD->query("SELECT * FROM experience LIMIT 0, 2");
		while ($donnees = $query->fetch())
		{

			?>
			<div class="col-md-6 portfolio-item">
				<!-- Affichage des experiences en entreprise -->
				<h3>
					<?php echo $donnees['entreprise']; ?>
				</h3>
				<p>Mon poste : <?php echo $donnees['poste']; ?> <br/>
					Mission effectuée : <?php echo $donnees['detail_mission']; ?><br/>
					Lieu : <?php echo $donnees['lieu_experience']; ?><br/>
					Début d'experience : <?php echo $donnees['annee_experience']; ?>
				</p>
			</div>
			<?php
		}
		$query->closeCursor(); // Termine le traitement de la requête

		?>

	</div>
	<!-- /.row -->

	<br/><br/><br/><br/><br/>



	<!-- Quatrième titre : Formations-->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Mes Formations</h1>
		</div>
	</div>
	<!-- /.row -->

	<!-- Formations Row -->
	<div class="row">
		<!-- Requette de récupération des experiences en entreprise -->
		<?php
		$query = $BDD->query("SELECT * FROM formation");
		while ($donnees = $query->fetch())
		{

			?>
			<div class="col-md-6 portfolio-item">
				<!-- Affichage des formations -->
				<h3>
					<?php echo $donnees['titre_de_la_formation']; ?>
				</h3>
				<p>Diplome : <?php echo $donnees['diplome']; ?> <br/>
					Description : <?php echo $donnees['descriptif_formation']; ?><br/>
					Lieu de ma formation : <?php echo $donnees['lieu_formation']; ?><br/>
					Début de ma formation : <?php echo $donnees['annee_formation']; ?>
				</p>
			</div>
			<?php
		}
		$query->closeCursor(); // Termine le traitement de la requête

		?>

	</div>
	<!-- /.row -->

	<br/><br/><br/><br/><br/>
	<!-- Cinquième titre : Contact -->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Me Contacter
			</h1>
		</div>
	</div>


	<form class="form-horizontal" role="form" method="post" action=""><!-- Formulaire d'envoi de mail -->
		<div class="form-group">
			<label for="name" class="col-sm-2 control-label">Nom</label><!-- Emplacement pour le nom -->
			<div class="col-sm-10">
				<input type="text" class="form-control" id="name" name="name"
					   placeholder="Nom et Prenom" value="">
			</div>
		</div>
		<div class="form-group">
			<label for="email" class="col-sm-2 control-label">Email</label><!-- Emplacement pour l'Email -->
			<div class="col-sm-10">
				<input type="email" class="form-control" id="email" name="email"
					   placeholder="example@domain.com" value="">
			</div>
		</div>
		<div class="form-group">
			<label for="message" class="col-sm-2 control-label">Message</label><!-- Emplacement pour le message -->
			<div class="col-sm-10">
				<textarea class="form-control" rows="4" name="message"></textarea>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2">
				<input id="submit" name="submit" type="submit" value="Envoyer" class="btn btn-primary"><!-- Bouton d'envoi -->
			</div>
		</div>
	</form>

	<!-- Footer -->
	<footer>
		<div class="row">
			<div class="col-lg-12">
				<p>Copyright &copy;</p>
			</div>
		</div>
		<!-- /.row -->
	</footer>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script type="text/javascript" src="../../../js/theme.js"></script>
