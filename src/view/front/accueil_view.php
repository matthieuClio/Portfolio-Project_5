<!DOCTYPE html>
<html lang="fr">
	<head>
		<base href="/projet_5/">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Portfolio Matthieu</title>
		<meta name="description" content="Le livre Billet simple pour l'Alaska est disponible en lecture gratuite sur ce site.">
		<link rel="icon" type="image/jpg" href="public/images/icone/keyboard.png">

		<!-- Font -->
		<link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
		<!-- Normalize -->
		<!-- <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css"> -->
		<!-- Css custom -->
		<link rel="stylesheet" href="public/css/style.css">
	</head>

	<body>
		<!-- Menu -->
		<nav class="menu">
			<ul>
				<li class="logo">
					<a href="#accueil">
						Matthieu CLIO
					</a>
				</li>

				<li>
					<a href="#accueil">
						ACCUEIL
					</a>
				</li>

				<li>
					<a href="#competences">
						COMPETENCES
					</a>
				</li>

				<li>
					<a href="#formation">
						FORMATION
					</a>
				</li>
			</ul>
		</nav>

		<header class="slider" id="accueil">
			<!-- Image in background -->
			<img src="public/images/photo/dev_web.jpg" alt="ordinateur" class="slider_photo">
			
			<!-- CV picture -->
			<figure class="slider_picture">
				<img src="public/images/photo/cv_picture.png" alt="Photo de profil">
			</figure>

			<section class="slider_information">
				<h1>
					Développeur web full stack
				</h1>

				<div class="slider_text_one">
					<a href="#competences" >
						<input type="button" name="languages" value="Langages" class="button_blue button_accueil_right">
					</a>
				</div>
				

				<div class="slider_text_two">
					<a href="#formation">
						<input type="button" name="languages" value="Mon parcours" class="button_orange button_accueil_left">
					</a>
				</div>
				
			</section>
		</header>

		<section class="skill" id="competences">
			<h2>Compétences</h2>

			
		<?php 

			while($informations = $requete->fetch()) {
				?>
				<div class="specific_skill">
					<figure class="resize_image">
						<img src="public/images/logo/<?php echo $informations['image'];?>" alt="language">
					</figure>

					<p>
						<?php echo $informations['langage']; ?>
					</p>

					<meter max="100" value="<?php echo $informations['niveau']; ?>">
						0%
					</meter>
				</div>
		<?php 
			}
			?>
		</section>

		<section class="history">
			<h2>Matthieu CLIO</h2>

			<p>
				Actuellement à la recherche d’un poste dans le développement web
				<br>
				(CDD, CDI) pour 
				poursuivre une vrai carrière dans ce millieu.
				<br>
				<br>
				Mes précédents travails, stages et alternance m’ont apporté une expérience 
				<br>
				professionnelle principalement dans le domaine du développement web,
				<br>
				de la programmation et du réseau informatique.
				<br>
				<br>
				Sportif dans l'âme, joue actuellement dans une équipe de foot en 7 vs 7
				<br>
				en paticipation avec la FLA et pratique régulièrement la musculation
				<br>
				pour rester en forme, avec comme objectif : se dépasser.
			</p>

			<!-- image -->
			<div class="history_background">
			</div>
		</section>

		<section class="formation" id="formation">
			<h2>Formation</h2>

			<div>
				<figure>
					<img src="public/images/logo/openclassrooms.png" alt="OpenClassroom" class="logo_languages">
				</figure>

				<p>
					<br>
					<span>
						2018-2019 – DEVELOPPEUR WEB JUNIOR – OPENCLASSROOM
					</span>
					<br>
					Formation en ligne: Développeur web junior.
				</p>
			</div>
		</section>

		<form method="post" action="" class="form_contact">
			<h2>Formulaire de contact</h2>

			<section>
				<input type="text" name="sujet" class="input_text" placeholder="Objet">
				<input type="text" name="email" class="input_text" placeholder="Email">
				Message
				<textarea placeholder="Message" class="input_text">
				</textarea>

				<input type="submit" name="send_form" value="Envoyer" class="button_blue">
			</section>
		</form>

		<footer class="main_footer">
			<h2>Footer</h2>
		</footer>
	</body>

</html>