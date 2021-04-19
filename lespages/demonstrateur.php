<!DOCTYPE HTML>

<html>

	<head>
		<title></title>
		<meta content="info">
		<meta charset="UTF-8">
		<link rel="stylesheet" href="base.css" />
		<link rel="stylesheet" href="header.css" />
		<link rel="stylesheet" href="footer.css" />
		<link rel="stylesheet" href="header-tel.css" />
	</head>

	<body>


		<div id="header">
		
			<div id="baniere">
				<a href="https://www.polytech.univ-smb.fr/" target="_blank">
					<img src="../media/Logo_Polytech.png" style="width:100px; max-height:100%;">
				</a>
				<h1 id="titre">Présentation APP Showroom<h1>
				<a href="https://www.univ-smb.fr/" target="_blank">
					<img src="../media/usmb.png" style="width:100px; max-height:100%;">
				</a>
				
			</div>

			<div id="bande">
				
				<div id="home" class="btn">
					<a href="base.php">Accueil</a>
				</div>
				

				<div id="menuDeroulant">
					<ul id="choix">
						<li id="parent"><a href="#">menu</a>
							<ul>
								<li><a href="base.php" class="btn_menu encours" >Accueil</a></li>
								<li><a href="demonstrateur.php" class="btn_menu">démonstrateur</a></li>
								<li><a href="contexteEtObjectifs.php" class="btn_menu">contexte et objectifs</a></li>    
								<li><a href="bilanCompetences.php" class="btn_menu">bilan et compétences</a></li>    
								<li><a href="gestionProjet.php" class="btn_menu">gestion du projet</a></li>
								<li><a href="documentsPublics.php" class="btn_menu">documentation</a></li>
								<li><a href="ressources.php" class="btn_menu">ressources</a></li>
							</ul>
						</li>
					</ul>
				</div>
				
				<div id="contacter" class="btn">
					<a href="contact.php">contacter</a>
				</div>
				
			</div>


		</div>


	
			<div id='contenu'>
			<link rel='stylesheet' href='lespages/demonstrateur.css' />

				<div id='titre'>
					<span>Demonstrateur Showroom</span>
				</div>

		
				<span id='presentation'>Nous allons ajoutez ici un simulateur représentant notre projet d'APP</span>
				<div id='video'>
					<iframe width='560' height='315' src='https://www.youtube.com/embed/ylciNhRP4P4' title='YouTube video player' 
					frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
				</div>

				<span id='description'>Cette video contient les différents systèmes possible pour capter la position des différentes personnes dans la pièce.
				</span>
				<figure>
					<img src='media/fauteuil.jpg' alt='Fauteuil' id='im'>
				</figure>

			</div>

		<footer>
			<span>Polytech Annecy-Chambéry - APP - Base de données et Technologies web</span>
		</footer>

		
	
	</body>
</html>  
