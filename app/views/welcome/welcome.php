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
                <p>Créez votre Portfolio en quelques minutes</p>
            </div>
        </div>
    </div>
</header>
<body>
<br/>
<div class="ultimate-wrapper">
    <div class="row featurette">
        <h2>Se Connecter</h2>
        <form action="Subpage.php" method="post">
            <div class="col-lg-6">
                <p>
                    <label for="prenom">Login :</label>
                    <input type="text" name="login" id="login" max length="20" placeholder="Entrez votre prénom"/><br/>
                    <label for="nom">Mot de passe:</label>
                    <input type="text" name="mdp" id="mdp" max length="20" placeholder="Entrez votre nom"/><br/>
                    <br/>
                </p>
            </div>
            <div class="col-lg-6">
                <a class="btn btn-lg btn-warning" type="submit" name="connexion" value="Lancez vous!"
                   href="<?php echo DIR; ?>subpage">C'est parti!</a>
            </div>
        </form>
    </div>

    <hr class="featurette-divider"/>
    <h2>S'inscrire</h2>
    <div class="row featurette">
        <form action="Inscription.php" method="post">
            <fieldset>
                <div class="col-lg-6">
                    <p>
                        <label for="prenom">Login :</label>
                        <input type="text" name="login" id="login" max length="20"
                               placeholder="Entrez votre prénom"/><br/>
                        <label for="nom">Email:</label>
                        <input type="text" name="mail" id="mail" max length="20" placeholder="Entrez votre nom"/><br/>

                        <label for="nom">Mot de passe:</label>
                        <input type="text" name="mdp" id="mdp" max length="20" placeholder="Entrez votre nom"/><br/>
                        <br/>
                        <span class='msg'><?php echo $msg; ?></span>
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="centrer">
                        <div class="g-recaptcha" data-sitekey="6LfQYhsTAAAAAK5mFRaVoNSLkU6KNjvvaE-y1-nB"></div>
                        <p>
                        <a class="btn btn-lg btn-warning" type="submit" name="connexion"
                           href="<?php echo DIR; ?>Inscription">S'inscrire</a>
                        </p>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>
<br/>
</body>
<br/>
<footer>
    <p>Copyright &copy; ePortfolio - Saucisse.inc 2016<br/><br/></p>
    <p class="lead">
        <a class="btn btn-lg btn-default" href="<?php echo DIR; ?>subpage">open subpage
        </a>
    </p>
</footer>

</html>

