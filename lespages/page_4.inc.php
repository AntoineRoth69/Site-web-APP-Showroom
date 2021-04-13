<!DOCTYPE HTML>

<html>

	 <head>
		<title></title>
		<meta content="info">
		<meta charset="UTF-8">
		<link rel="stylesheet" href="base.css" />
		<link rel="stylesheet" href="header.css" />
		<link rel="stylesheet" href="footer.css" />
	</head>

	<body>


		<div id="fond">

			<div id="titre">
				<span>pr�sentation APP Showroom</span>
			</div>

		<div id="header">
		
			<div id="home">
				<a href="#page=0" class="btn_menu encours" >Accueil</a>
			</div>
			
			<div id="menuDeroulant">
				<ul id="choix">
					<li><a href="#">menu</a>
						<ul>
							<li><a href="#page=0" class="btn_menu encours" >Accueil</a></li>
							<li><a href="#page=1" class="btn_menu">pr�sentation</a></li>
							<li><a href="#page=2" class="btn_menu">objectifs</a></li>    
							<li><a href="#page=3" class="btn_menu">demonstrateur</a></li>    
							<li><a href="#page=4" class="btn_menu">gestion</a></li>
						</ul>
					</li>
				</ul>
			</div>
			
			<div id="contacter">
				<a href="#page=4" class="btn_menu encours" >contacter</a>
			</div>

		</div>


		<div id="contenu">

	<?php
		/*Connexion à la base de données sur le serveur tp-epua*/
		$conn = @mysqli_connect("tp-epua:3308", "rothan", "1g4vprum");

		if (mysqli_connect_errno()) {
            $msg = "erreur ". mysqli_connect_error();
        } else {
            $msg = "connecté au serveur " . mysqli_get_host_info($conn);
            /*Sélection de la base de données*/
            mysqli_select_db($conn, "rothan");
            /*Encodage UTF8 pour les échanges avecla BD*/
            mysqli_query($conn, "SET NAMES UTF8");
        }

		$sql = "SELECT nom, prenom, adresse_mail FROM users;";
		$result = mysqli_query($conn, $sql) or die("Requête invalide: ". mysqli_error($conn)."\n".$sql);
		echo "<span>Membres :</span><br/>"."<ul>";
		while ($row = mysqli_fetch_array($result)) {
			echo "<li \>".$row["nom"].", ".$row["prenom"]." - ".$row["adresse_mail"]."</li>";
		}
		echo "</ul>";
	?>

	
		</div>


		<div id="pied">
			<span>Polytech Annecy-Chamb�ry - APP - Base de donn�es et Technologies web</span>
		</div>

		</div>

	</body>
</html>  

  