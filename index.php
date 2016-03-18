<html>

    <head>
        <link type="text/css" rel="stylesheet" href="stylesheet.css"/>
        <title>Projet-WEB</title>
        <meta charset="utf-8"/>
    </head>

    <body>
    <?php echo '
		<h1>Portfolio</h1>
        <div  class="Login">
		<form action="Profile.php" method="post">

			<p>
				<label for="prenom">Votre Identifiant:</label>
				<input type="text" name="login" id="login" max length="20" placeholder="ex:Saussice"/><br/>

				<label for="nom">Votre Mot de pase:</label>
				<input type="text" name="mdp" id="mdp" max length="20" placeholder="ex:MAd355"/><br/>

				<input type="submit" name="connexion" value="Lancez Vous!"/>
			</p>
		</form></div>'; ?>
    </body>

</html>