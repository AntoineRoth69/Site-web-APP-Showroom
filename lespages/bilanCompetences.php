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
            <link rel='stylesheet' href='lespages/tableauCompetences.css' />
            <table id='competences'>
                <tr>
                  <th>Groupe</th>
                  <th>Domaine</th> 
                  <th>Compétences</th>
                  <th>Capteur</th>
                  <th>Image capteur</th>
                </tr>
                <tr>
                  <td>Canapé</td>
                  <td class='Domain'>Programmation micro:bit, programmation node-red, traitement de données, MQTT</td>
                  <td>Interaction capteur</td>
                  <td>RPI3 et de micro:bit</td>
                  <td><a href='https://microbit.org/fr/' target='_blank' title='Voir le capteur'><img src='media/Capteur_microbit.jpg' alt='micro:bit' class='im_capteur'></a></td>
                </tr>
                <tr>
                  <td>LIDAR</td>
                  <td class="Domain">C ou Python, liaison série, traitement d'image, algorithmes SLAM</td>
                  <td>Instrumentation/calibrage, connectique</td>
                  <td>RPLIDAR A1M8</td>
                  <td><a href="https://www.generationrobots.com/fr/402778-teemetre-laser-360-degres-rplidar-a1m8-avec-kit-de-d%C3%A9veloppement.html" target="_blank" title="Voir le capteur"><img src="../media/Capteur_lidar.jpg" alt="RPLIDAR A1M8" class="im_capteur"></a></td>
                </tr>
                <tr>
                  <td>Vibration</td>
                  <td class="Domain">Electronique de conditionnement de capteurs, traitement du signal</td>
                  <td>Algo d'apprentissage</td>
                  <td>ADXL354BZ </td>
                  <td><a href="https://fr.farnell.com/analog-devices/eval-adxl354bz/carte-deval-accelerometre-mems/dp/2707866" target="_blank" title="Voir le capteur"><img src="../media/Capteur_vibration.jpg" alt="ADXL354BZ" class="im_capteur"></a></td>
                </tr>
                <tr>
                    <td>Lumière</td>
                    <td class="Domain">Traitement du signal, analyse de données, langage C, micro-controleur XIAO (utilisé dans la plinthe connectée)
                        optionnellement BLE pour la communication</td>
                    <td>Node Red</td>
                    <td>PIR Panasonic EKMC260511 et GA1A12S202 </td>
                    <td><a href="https://www.adafruit.com/product/1384" target="_blank" title="Voir le capteur"><img src="../media/Capteur_lumiere.jpg" alt="GA1A12S202" class="im_capteur"></a> </td>
                  </tr>
              </table>
	
		</div>



		<footer>
			<span>Polytech Annecy-Chambéry - APP - Base de données et Technologies web</span>
		</footer>

		</div>
	
	</body>
</html>  

  