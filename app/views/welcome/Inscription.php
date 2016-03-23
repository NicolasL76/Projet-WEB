<?php
/**
 * Sample layout.
 */
use Core\Language;

?>


<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">
    <!-- Google reCaptcha JS -->
    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>

<header>
    <div class="logo-wrapper">
        <div class="site-wrapper-inner">
            <div class="inner cover">
                <a href="http://projet.web/"><h1><i>ePortfolio</i></h1></a>
                <p>Renseignez les informations ci-dessous et obtenez votre Portfolio personnel!</p>
            </div>
        </div>
    </div>
</header>
<br/>

<body>
<div class="ultimate-wrapper">
    <div class="row featurette">
        <!-- Module de Profil -->

        <div class="col-lg-5">
            <h2>Profil</h2>
            <form NAME="Profil">
                <fieldset>

                    <label>Entrer votre Nom :</label>
                    <input NAME="Nom" TYPE=text SIZE=10 MAXLENGTH=25><br/>

                    <label>Entrez votre Prénom :</label>
                    <input NAME="Prénom" TYPE="text" SIZE="10" MAXLENGTH="25"><br/>

                    <label>Entrez votre Adresse :</label>
                    <input NAME="Adresse" TYPE="text" SIZE="25" MAXLENGTH="50"><br/>

                    <label>Entrez votre Code postal :</label>
                    <input NAME="CP" TYPE="number" SIZE="5" MAXLENGTH="5"><br/>

                    <label>Entrez votre Ville :</label>
                    <input NAME="Ville" TYPE="text" SIZE="10" MAXLENGTH="25"><br/>


                    <label>Entrez votre Pays :</label>
                    <input NAME="Pays" TYPE="text" SIZE="10" MAXLENGTH="25"><br/>

                    <label>Entrez votre Adresse Mail :</label>
                    <input NAME="Mail" TYPE="text" SIZE="10" MAXLENGTH="255"><br/>

                    <label>Entrez votre Numéro de téléphone :</label>
                    <input NAME="Tel" TYPE="number" SIZE="10" MAXLENGTH="15"><br/>

                    <label>Entrez votre Date de Naissance :</label>
                    <input NAME="Date_Naissance" TYPE="date" SIZE="10" MAXLENGTH="20"><br/>

                    <label>Entrez votre Sexe :</label>
                    <input NAME="Sexe" TYPE="text" SIZE="10" MAXLENGTH="25"><br/>

                    <label>Entrez le numéro de votre thème :</label>
                    <input NAME="Theme" TYPE="number" SIZE="10" MAXLENGTH="20"><br/>
                </fieldset>
            </form>
        </div>

        <!-- Module de Formation -->
        <div class="col-lg-5">
            <h2>Formation</h2>

            <label>Entrer votre Année de formation :</label>
            <input NAME="Annee_Formation" TYPE=text SIZE=10 MAXLENGTH=25><br/>
            </input>

            <label>Entrez votre Titre de formation :</label>
            <input NAME="Titre_Formation" TYPE=text SIZE=10 MAXLENGTH=25><br/>
            </input>

            <label>Entrez votre Lieu de Formation :</label>
            <input NAME="Lieu_Formation" TYPE=text SIZE=10 MAXLENGTH=25><br/>
            </input>

            <label>Entrez votre Diplome :</label>
            <input NAME="Diplome" TYPE=text SIZE=10 MAXLENGTH=25><br/>
            </input>

            <label>Entrez le descriptif de votre formation :</label>
            <textarea NAME="Descriptif_Formation" ROWS=4 COLS=34/></textarea><br/>
        </div>

        <!-- Module de Compétence -->
        <div class="col-lg-5">
            <h2>Compétences</h2>
            <label>Catégorie de Compétence :</label>
            <input NAME="Categorie_Competence" TYPE=text SIZE=10 MAXLENGTH=25><br/> <!-- IMPORTANT : GERER EN PHP  -->

            <label>Entrer votre Compétence :</label>
            <input NAME="Competence" TYPE=text SIZE=10 MAXLENGTH=25><br/>
        </div>
    </div>

    <hr class="featurette-divider"/>
    <div class="row featurette">
        <!-- Modules de Projet -->
        <div class="col-lg-5">
            <h2>Projet</h2>

            <label>Entrer le nom de votre projet :</label>
            <input NAME="Nom_Projet" TYPE=text SIZE=10 MAXLENGTH=25><br/>

            <label>Décrivez votre projet :</label>
            <textarea NAME="Description_Projet" ROWS=4 COLS=34></textarea><br/>

            <label>Ajoutez une illustration de votre projet :</label>
            <input NAME="Lien_Illustration" TYPE=url SIZE=10 MAXLENGTH=200><br/>

            <label>Ajoutez le lien de la réalisation de votre projet :</label>
            <input NAME="Lien_Realisation" TYPE=url SIZE=10 MAXLENGTH=200><br/>
        </div>


        <!-- Module Experience -->
        <div class="col-lg-5">
            <h2>Experience</h2>

            <label>Entrer vos Années d'éxperiences :</label>
            <input NAME="Annee_Experience" TYPE=number SIZE=10 MAXLENGTH=2><br/>
            <label>Entrez votre Poste :</label>
            <input NAME="Poste" TYPE=text SIZE=10 MAXLENGTH=25><br/>
            <label>Entrez votre Entreprise :</label>
            <input NAME="Entreprise" TYPE=text SIZE=10 MAXLENGTH=25><br/>
            <label>Entrez vos détails de missions :</label>
            <textarea NAME="Detail_Mission" ROWS=4 COLS=34></textarea><br/>
            <label>Entrez votre lieu d'éxperience :</label>
            <input NAME="Lieu_Experience" TYPE=text SIZE=10 MAXLENGTH=25><br/>
        </div>


        <!-- Module thème -->
        <div class="col-lg-5">
            <h2>Thème</h2>

            <div>
                Choisissez votre thème de portfolio
                <input NAME="Choix thème" TYPE=button>
                <input NAME="Poste" TYPE=button>
            </div>
        </div>

        <div class="col-lg-5">
            <input type="submit" value="submit"/>
        </div>
    </div>
</div>
<br/>
</body>
<footer>
    <p>Copyright &copy; ePortfolio<br/><br/></p>
</footer>


