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


		<div id="contenu">
			<h1>Gestion du Projet</h1>
		<?php
		/*Connexion a la base de donnees sur le serveur tp-epua*/
		$conn = @mysqli_connect("tp-epua:3308", "rothan", "1g4vprum");

		if (mysqli_connect_errno()) {
       		$msg = "erreur ". mysqli_connect_error();
    	} else {
        	$msg = "connecte au serveur " . mysqli_get_host_info($conn);
        	/*Selection de la base de donnees*/
        	mysqli_select_db($conn, "rothan");
        	/*Encodage UTF8 pour les echanges avec la BD*/
        	mysqli_query($conn, "SET NAMES UTF8");
    	}

		$sql = "SELECT nom, prenom FROM users;";
		$result = mysqli_query($conn, $sql) or die("Requete invalide: ". mysqli_error($conn)."\n".$sql);
		echo "<span>Membres :</span><br/>"."<ul>";
		while ($row = mysqli_fetch_array($result)) {
			echo "<li \>".$row["nom"].", ".$row["prenom"]."</li>";
		}
		echo "</ul>";
		?>
		</div>

		


		<footer>
			<span>Polytech Annecy-Chambéry - APP - Base de données et Technologies web</span>
		</footer>

		
	
	</body>
</html>  