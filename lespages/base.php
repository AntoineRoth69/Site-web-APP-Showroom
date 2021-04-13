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
?>

	<body>


	    <div id="fond">

			<div id="titre">
				<span>présentation APP Showroom</span>
			</div>
		
		
		<div id="header">
		
			<div id="home">
				<a href="#page=0" class="btn_menu encours" >Accueil</a>
			</div>
			
			<div id="menuDeroulant">
				<ul id="choix">
					<li><a href="#">menu</a>
						<?php  
							  $encours = array(" "," "," "," "," ");

							  if( !isset($_GET["page"]) ) { 
								$page=0;
							  }else{
								$page=$_GET["page"];
							  }
							  $encours[$page] = "encours";
       
							  echo "<li><a href=\"?page=0\" class=\"btn_menu $encours[0]\">Accueil</a></li>\n";
							  echo "<li><a href=\"?page=1\" class=\"btn_menu $encours[1]\">Consultation</a></li>\n";
							  echo "<li><a href=\"?page=2\" class=\"btn_menu $encours[2]\">Capteurs</a></li> \n";   
							  echo "<li><a href=\"?page=3\" class=\"btn_menu $encours[3]\">Actionneurs</a></li> \n";   
							  echo "<li><a href=\"?page=4\" class=\"btn_menu $encours[4]\">Mesures</a></li> \n"; 
						 ?>
					</li>
				</ul>
			</div>
			
			<div id="contacter">
				<a href="#page=4" class="btn_menu encours" >contacter</a>
			</div>

		</div>


		<div id="contenu">
			<div id="slider">
				<figure>
					<img src="../media/Logo_Polytech.png" alt>
					<img src="../media/lac.png" alt>
					<img src="../media/usmb.png" alt>
				</figure>
			</div>
			
			<div id="boite">
				<span><a href="#page=0" class="btn_menu encours" >Accueil</a></span>
				<span><a href="#page=1" class="btn_menu">présentation</a></span>
				<span><a href="#page=2" class="btn_menu">objectifs</a></span>
				<span><a href="#page=3" class="btn_menu">demonstrateur</a></span>
				<span><a href="#page=4" class="btn_menu">gestion</a></span>
			</div>
	
	
		</div>


		<div id="pied">
			<span>Polytech Annecy-Chambéry - APP - Base de données et Technologies web</span>
		</div>

		</div>

	</body>
</html>  

  
 