<?php
/**
 * Sample layout.
 */
use Core\Language;

?>


<!-- Custom styles for this template -->
<link href="css/cover.css" rel="stylesheet">

<!-- Navigation -->
<header> <div class="logo-wrapper">
		<div class="site-wrapper-inner">
			<div class="inner cover">
				<a href="http://projet.web/"><h1><i>ePortfolio</i></h1></a>
				<p>Votre Portfolio</p>
			</div>
		</div>
	</div>
</header>

<body><br/>
<div class="ultimate-wrapper">
				<!-- Page Header -->
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">Mes Projets
						</h1>
					</div>
				</div>
				<!-- /.row -->

				<!-- Projects Row -->
				<div class="row">
					<div class="col-md-6 portfolio-item">
						<a href="#">
							<img class="img-responsive" src="http://placehold.it/700x400" alt="">
						</a>
						<h3>
							<a href="#">Projet 1</a>
						</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
					</div>
					<div class="col-md-6 portfolio-item">
						<a href="#">
							<img class="img-responsive" src="http://placehold.it/700x400" alt="">
						</a>
						<h3>
							<a href="#">Projet deux</a>
						</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
					</div>
				</div>
				<!-- /.row -->

				<!-- Projects Row -->
				<div class="row">
					<div class="col-md-6 portfolio-item">
						<a href="#">
							<img class="img-responsive" src="http://placehold.it/700x400" alt="">
						</a>
						<h3>
							<a href="#">Projet trois</a>
						</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
					</div>
					<div class="col-md-6 portfolio-item">
						<a href="#">
							<img class="img-responsive" src="http://placehold.it/700x400" alt="">
						</a>
						<h3>
							<a href="#">Projet quatre</a>
						</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
					</div>
				</div>
				<!-- /.row -->

<br/>

				<!-- Page Header N°2-->
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">Mes Compétences
							<small>Et mon experience</small>
						</h1>
					</div>
				</div>
				<!-- /.row -->

				<!-- compétences Row -->
				<div class="row">
					<div class="col-md-4 portfolio-item">
						<h3>
							<a href="#">Categorie 1</a>
						</h3>
						<ul>
							<li>compétence 1</li>
							<li>compétence 2</li>
							<li>compétence 3</li>
						</ul>
					</div>
					<div class="col-md-4 portfolio-item">

						<h3>
							<a href="#">Categorie 2</a>
						</h3>
						<ul>
							<li>compétence 1</li>
							<li>compétence 2</li>
							<li>compétence 3</li>
						</ul>
					</div>

					<div class="col-md-4 portfolio-item">

						<h3>
							<a href="#">Categorie 2</a>
						</h3>
						<ul>
							<li>compétence 1</li>
							<li>compétence 2</li>
							<li>compétence 3</li>
						</ul>
					</div>
				</div>
				<!-- /.row -->

				<br/>

				<!-- Page Header N°3-->
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">Mes Formations
						</h1>
					</div>
				</div>
				<!-- /.row -->

				<!-- Formations Row -->
				<div class="row">
					<div class="col-md-6 portfolio-item">

						<h3>
							<a href="#">Entreprise exempl1</a>
						</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
					</div>
					<div class="col-md-6 portfolio-item">

						<h3>
							<a href="#">Entreprise exempl2</a>
						</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
					</div>
				</div>
				<!-- /.row -->

				<br/>

				<!-- Page Header N°4-->
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">Me Contacter
						</h1>
					</div>
				</div>



				<form class="form-horizontal" role="form" method="post" action="index.php">
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
						</div>
					</div>
					<div class="form-group">
						<label for="message" class="col-sm-2 control-label">Message</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="4" name="message"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<! Will be used to display an alert to the user>
						</div>
					</div>
				</form>
				</div>
</body>
				<footer>
					<p>Copyright &copy; ePortfolio<br/><br/></p>
				</footer>

