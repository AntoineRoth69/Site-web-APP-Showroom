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
								<li><a href="index.php" class="btn_menu">questionnaire</a></li>
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
		
			<div id="titre">
				<span><h1>Ressources</h1></span>
			</div>

			

			
			<div id="Video">

					<iframe width='560' height='315' src='https://www.youtube.com/embed/AERfie9wlWM' title='YouTube video player' 
					frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
            </div>
			
			<div id="listeLiens">
				<ul>
					<li><a href="https://learn.adafruit.com/slamtec-rplidar-on-pi" class="btn_menu encours" >Lidar avec Raspberry pi</a></li>
					<li><a href="https://raspberry-lab.fr/Debuter-sur-Raspberry-Francais/Connexion-Bureau-a-distance-Raspberry-Francais/#:~:text=Configurations%20sur%20Windows&text=Entrez%20simplement%20l'adresse%20IP,pi%20et%20raspberry)%20et%20validez." class="btn_menu">Connecter une raspberry à un ordinateur</a></li>
				</ul>
			
			</div>
			


		<footer>
			<span>Polytech Annecy-Chambéry - APP - Base de données et Technologies web</span>
		</footer>

		</div>
	
	</body>
</html>