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
            <form action="" method="post">
                <div class="col-lg-6">
                    <p>
                        <label for="login">Login :</label>
                        <input type="text" name="login" id="login" max length="20" placeholder="Entrez votre pseudo"/><br/>
                        <label for="mdp">Mot de passe:</label>
                        <input type="password" name="mdp" id="mdp" max length="20" placeholder="Entrez votre mot de passe"/><br/>
                        <br/>
                    </p>
                </div>
                <div class="col-lg-6">
                    <button class="btn btn-lg btn-warning" type="submit" name="connexion" value="Lancez vous!"
                       href="<?php echo DIR; ?>subpage">C'est parti!</button>
                </div>
            </form>
        </div>

        <hr class="featurette-divider"/>
        <h2>S'inscrire</h2>
        <div class="row featurette">
            <form action="C_creation_profil" method="post">
                <fieldset>
                    <div class="col-lg-6">
                        <p>
                            <label for="login">Login :</label>
                            <input type="text" name="login" id="login" max length="20" placeholder="Entrez votre prénom"/><br/>
                            <label for="mail">Email:</label>
                            <input type="text" name="mail" id="mail" max length="20" placeholder="Entrez votre adresse mail"/><br/>
                            <label for="mdp">Mot de passe:</label>
                            <input type="password" name="mdp" id="mdp" max length="255" placeholder="Entrez votre mot de passe"/><br/>
                            <br/>
                            <span class='msg'><?php echo $msg; ?></span>
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <div class="centrer">
                            <div class="g-recaptcha" data-sitekey="6LfQYhsTAAAAAK5mFRaVoNSLkU6KNjvvaE-y1-nB"></div>
                            <p>
                                <button class="btn btn-lg btn-warning" type="submit" name="Inscription">S'inscrire</button>
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
    <p>Copyright &copy; ePortfolio<br/><br/></p>
</footer>