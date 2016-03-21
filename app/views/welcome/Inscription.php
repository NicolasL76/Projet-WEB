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

	<!-- feuille de style  -->
	<link href="css/cover.css" rel="stylesheet">
</head>

<body>
<header>
	<div class="logo-wrapper">
		<div class="site-wrapper-inner">
			<div class="inner cover">
				<h1><i>ePortfolio</i></h1>
				<p>Renseignez les informations ci-dessous et obtenez votre Portfolio personnel!</p>
			</div>
		</div>
	</div>
</header>


<div class="ultimate-wrapper">
<!-- Module de Profil -->

<div>
	<h1>Profil</h1>
		<form NAME="Profil">
			<div>
				Entrer votre Nom :
				<input NAME="Nom" TYPE=text SIZE=10 MAXLENGTH=25>
			</div>
			<div>
				Entrez votre Prénom :
				<input NAME="Prénom" TYPE="text" SIZE="10" MAXLENGTH="25">
			</div>
			<div>
				Entrez votre Adresse :
				<input NAME="Adresse" TYPE="text" SIZE="25" MAXLENGTH="50">
			</div>
			<div>
				Entrez votre Code postal :
				<input NAME="CP" TYPE="number" SIZE="5" MAXLENGTH="5">
			</div>
			<div>
				Entrez votre Ville :
				<input NAME="Ville" TYPE="text" SIZE="10" MAXLENGTH="25">
			</div>
			<div>
				Entrez votre Pays :
				<input NAME="Pays" TYPE="text" SIZE="10" MAXLENGTH="25">
			</div>
			<div>
				Entrez votre Adresse Mail :
				<input NAME="Mail" TYPE="text" SIZE="10" MAXLENGTH="255">
			</div>
			<div>
				Entrez votre Numéro de téléphone :
				<input NAME="Tel" TYPE="number" SIZE="10" MAXLENGTH="15">
			</div>
			<div>
				Entrez votre Date de Naissance :
				<input NAME="Date_Naissance" TYPE="date" SIZE="10" MAXLENGTH="20">
			</div>
			<div>
				Entrez votre Sexe :
				<input NAME="Sexe" TYPE="text" SIZE="10" MAXLENGTH="25">
			</div>
			<div>
				Entrez le numéro de votre thème :
				<input NAME="Thème" TYPE="number" SIZE="10" MAXLENGTH="20">
			</div>
		</form>
</div>




<!-- Module de Formation -->
<div>
	<h1>Formation</h1>
		<form NAME="Mes Formations">
			Entrer votre Année de formation :
			<input NAME="Annee_Formation" TYPE=text SIZE=10 MAXLENGTH=25>
			</input>
			<div>
				Entrez votre Titre de formation :
				<input NAME="Titre_Formation" TYPE=text SIZE=10 MAXLENGTH=25>
				</input>
			</div>
			<div>
				Entrez votre Lieu de Formation :
				<input NAME="Lieu_Formation" TYPE=text SIZE=10 MAXLENGTH=25>
				</input>
			</div>
			<div>
				Entrez votre Diplome :
				<input NAME="Diplome" TYPE=text SIZE=10 MAXLENGTH=25>
				</input>
			</div>
			<div>
				Entrez le descriptif de votre formation :
				<div><textearea NAME="Descriptif_Formation" ROWS=4
								COLS=34>
					</textearea>
				</div>
			</div>
		</form>
	</div>

	<!-- Module de Compétence -->
<div>
	<h1>Compétences</h1>
		<form NAME="Mes compétences">
				Catégorie de Compétence :
			<div>
			<input NAME="Categorie_Competence" TYPE=text SIZE=10 MAXLENGTH=25> <!-- IMPORTANT : GERER EN PHP  -->
			</div>
			<div>
				Entrer votre Compétence :
				<input NAME="Competence" TYPE=text SIZE=10 MAXLENGTH=25>
			</div>
		</form>
</div>


<!-- Modules de Projet -->
<div>
	<h1>Projet</h1>
		<form NAME="Mes Projets">
			<div>
				Entrer le nom de votre projet :
				<input NAME="Nom_Projet" TYPE=text SIZE=10 MAXLENGTH=25>
			</div>
			<div>
				Décrivez votre projet :
				<div>
					<textarea NAME="Description_Projet" ROWS=4 COLS=34></textarea>
				</div>
			</div>
			<div>
				Ajoutez une illustration de votre projet :
				<input NAME="Lien_Illustration" TYPE=url SIZE=10 MAXLENGTH=200>
			</div>
			<div>
				Ajoutez le lien de la réalisation de votre projet :
				<input NAME="Lien_Realisation" TYPE=url SIZE=10 MAXLENGTH=200>
			</div>
		</form>
</div>


<!-- Module Experience -->
<div>
		<h1>Experience</h1>
		<form NAME="Mes Experiences">
			<div>
				Entrer vos Années d'éxperiences :
				<input NAME="Annee_Experience" TYPE=number SIZE=10 MAXLENGTH=2>
			</div>
			<div>
				Entrez votre Poste :
				<input NAME="Poste" TYPE=text SIZE=10 MAXLENGTH=25>
			</div>
			<div>
				Entrez votre Entreprise :
				<input NAME="Entreprise" TYPE=text SIZE=10 MAXLENGTH=25>
			</div>
			<div>
				Entrez vos détails de missions :
				<div>
					<textarea NAME="Detail_Mission" ROWS=4 COLS=34></textarea>
				</div>
			</div>
			<div>
				Entrez votre lieu d'éxperience :
				<input NAME="Lieu_Experience" TYPE=text SIZE=10 MAXLENGTH=25>
			</div>
		</form>
</div>


	<!-- Module thème -->
	<div>
		<h1>Thème</h1>
		<form NAME="Mon Thème">
			<div>
			Choisissez votre thème de portfolio
			<input NAME="Choix thème" TYPE=button>
			<input NAME="Poste" TYPE=button>
			</div>
		</form>
	</div>
</div>
</body>
<br/>
<footer>
	<p>Copyright &copy; ePortfolio - Saucisse.inc 2016<br/><br/></p>
</footer>

</html>

