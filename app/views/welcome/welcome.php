<?php
/**
 * Sample layout.
 */
use Core\Language;

?>

<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <!-- g�n�r� par bootstrap permet la detection de la largeur de l'ecran pour l'affichage dynamique-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- outrepassage de bootstrap dans une feuille de style personalis�e -->
    <link href="css/cover.css" rel="stylesheet">
    <!-- inclusion de l'API Google reCaptcha JS -->
    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>

<header>
    <!-- utiliisation du mod�le des boites
   .logo-wrapper est une classe d�riv�e de bootsrap cr�e pour les besoins du site   -->
    <div class="logo-wrapper">
        <!--ancienne Div de bootstrap -->
        <div class="site-wrapper-inner">
            <div class="inner cover">
                <!-- Definition du logo du site avec un lien vers l'accueil-->
                <a href="http://projet.web/"><h1><i>ePortfolio</i></h1></a>
                <!-- sous titre  -->
                <p>Cr�ez votre Portfolio en quelques minutes</p>
            </div>
        </div>
    </div>
</header>
<body>
<br/>
<!-- l'ultimate-wrapper est une classe que nous avons cr�� pour englober et "styler" le body -->
<div class="ultimate-wrapper">
    <!-- une autre classe de bootstrap qui propose un decoupage de la page en sections  -->
    <div class="row featurette">
        <!-- Mon joli titre de connexion -->
        <h2>Se Connecter</h2>
        <!--blob de code PHP qui permet la detection de zones de texte vide dans le "form" suivant -->
        <?PHP
        /* appel des bibliotheques de verification*/
        require_once "formvalidator.php";
        $show_form1 = true;
        /* definition des conditions de validations  */
        if (isset($_POST['Submit'])) {
            $validator = new FormValidator();
            $validator->addValidation("login", "req", "<p class='errorlogin'>Veuillez renseigner votre login</p>");;
            $validator->addValidation("mdp", "req", "<p class='errorlogin'>Remplisez la case mot de passe</p>");
            /* conditions de validation du field */
            if ($validator->ValidateForm()) {
                echo "<h2>Validation Success!</h2>";
                $show_form1 = false;
                $data['redirect'] = "subpage";
                echo " <a class='btn btn-md btn-success' href='subpage'>continuer</a><br/>";
                /* non validation du field*/
            } else {
                echo "<B>Erreurs de validation:</B>";
                $data['redirect'] = NULL;
                $error_hash = $validator->GetErrors();
                foreach ($error_hash as $inpname => $inp_err) {
                    echo "<p>$inp_err</p>\n";
                }
            }
        }

        if (true == $show_form1) {
            ?>
            <!-- manipulation de la redirection de la page une fois la form complet� � l'aide d'une variable gener� a cette occasion -->
            <form action="<?php $data['redirect']; ?>" method="POST" onsubmit="return ValidationEvent()">
                <!-- division qui g�re son contenu en colonnes ideal pour le responsive design -->
                <div class="col-lg-6">
                    <p>
                        <!-- contenu du formulaire  -->
                        <label for="login">Login :</label>
                        <input type="text" name="login" id="login" max length="20"
                               placeholder="Entrez votre login"/><br/>
                        <label for="mdp">Mot de passe:</label>
                        <input type="password" name="mdp" id="mdp" max length="20"
                               placeholder="Entrez votre mot de passe"/><br/>
                        <br/>
                    </p>
                </div>
                <div class="col-lg-6">

                    <input class="btn btn-lg btn-warning" type='submit' name='Submit' value="Lancez vous!">
                </div>
            </form>
            <?PHP
        }
        //true == $show_form1
        ?>
    </div>
    <!-- separation horzontale pour le design mais aussi pour eviter le contact de nos div col-lg-6 -->
    <hr class="featurette-divider"/>
    <h2>S'inscrire</h2>
    <div class="row featurette">
        <?PHP
        /* appel des bibliotheques de verification*/
        require_once "formvalidator.php";
        $show_form = true;
        /* definition des conditions du form*/
        if (isset($_POST['Submit1'])) {
            $validator = new FormValidator();
            $validator->addValidation("login1", "req", "<p class='errorlogin'>Veuillez renseigner votre login</p>");
            $validator->addValidation("mail1", "email", "<p class='errorlogin'>Veuillez renseigner un email Valide</p>");
            $validator->addValidation("mail1", "req", "<p class='errorlogin'>Veuillez remplir la case email</p>");
            $validator->addValidation("mdp1", "req", "<p class='errorlogin'>Remplisez la case mot de passe</p>");
            $validator->addValidation("g-recaptcha-response", "req", "<p class='errorlogin'>Veuillez valider le captcha</p>");
            /* conditions de validation du field */
            if ($validator->ValidateForm()) {
                echo "<h2>connexion en cours!</h2>";
                echo "<img src='http://i.imgur.com/l7Wu1Bn.gif'>\n";
                $show_form = false;
                $data['redirect'] = "C_creation_profil";
                echo " <a class='btn btn-md btn-success' href='subpage'>continuer</a><br/>";
                /* non validation du field*/
            } else {
                echo "<B>Erreurs de validation:</B>";
                $data['redirect'] = NULL;

                $error_hash = $validator->GetErrors();
                foreach ($error_hash as $inpname => $inp_err) {
                    echo "<p>$inp_err</p>\n";
                }
            }
        }

        if (true == $show_form) {
            ?>
            <!-- manipulation de la redirection de la page une fois la form complet� � l'aide d'une variable gener� a cette occasion -->
            <form action="<?php $data['redirect']; ?>" method="POST">
                <fieldset>
                    <!-- division qui g�re son contenu en colonnes -->
                    <div class="col-lg-6">
                        <p>
                            <!-- contenu du formulaire  -->
                            <label for="login">Login :</label>
                            <input type="text" name="login1" id="login" max length="20"
                                   placeholder="Entrez votre login"/><br/>
                            <label for="mail">Email:</label>
                            <input type="text" name="mail1" id="mail" max length="20"
                                   placeholder="Entrez votre adresse mail"/><br/>
                            <label for="mdp">Mot de passe:</label>
                            <input type="password" name="mdp1" id="mdp" max length="255"
                                   placeholder="Entrez votre mot de passe"/><br/>
                            <br/>
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <div class="centrer">
                            <div class="g-recaptcha" data-sitekey="6LfQYhsTAAAAAK5mFRaVoNSLkU6KNjvvaE-y1-nB"></div>
                            <p>
                                <input class="btn btn-lg btn-warning" type='submit' name='Submit1' value='inscription'/>
                            </p>
                        </div>
                    </div>
                </fieldset>
            </form>
            <?PHP
        }//true == $show_form
        ?>

    </div>
</div>
</body>
<br/>
<!-- "footeur" pieds de page -->
<footer>
    <p>Copyright &copy; ePortfolio<br/><br/></p>
</footer>