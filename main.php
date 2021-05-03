<!DOCTYPE HTML>

<html>

	<head>
		<title></title>
		<meta content="info">
		<meta charset="UTF-8">
		<link rel="stylesheet" href="lespages/base.css" />
		<link rel="stylesheet" href="lespages/header.css" />
		<link rel="stylesheet" href="lespages/footer.css" />
		<link rel="stylesheet" href="lespages/header-tel.css" />
	</head>

	<body>


		<div id="header">
		
			<div id="baniere">
				<a href="https://www.polytech.univ-smb.fr/" target="_blank">
					<img src="media/Logo_Polytech.png" style="width:100px; max-height:100%;">
				</a>
				<h1 id="titre">Présentation APP Showroom<h1>
				<a href="https://www.univ-smb.fr/" target="_blank">
					<img src="media/usmb.png" style="width:100px; max-height:100%;">
				</a>
				
			</div>

			<div id="bande">

             <?php  
                $encours = array(" "," "," "," "," ");

                if( !isset($_GET["page"]) ) { 
                 $page=0;
                }else{
                    $page=$_GET["page"];
                }
                $encours[$page] = "encours";

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
            ?>
				
				<div id="home" class="btn">
					<?php 
						echo"<a href=\"?page=0\">Accueil</a>";
						?>
				</div>
				

				<div id="menuDeroulant">
					<ul id="choix">
						<li id="parent"><a href="#">menu</a>
							<ul>
							<?php 
								echo"<li><a href=\"?page=0\" class='btn_menu' >Accueil</a></li>
								<li><a href=\"?page=1\" class=class='btn_menu'>Démonstrateur</a></li>
								<li><a href=\"?page=2\" class=class='btn_menu'>Contexte et objectifs</a></li>    
								<li><a href=\"?page=3\" class=class='btn_menu'>Bilan et compétences</a></li>    
								<li><a href=\"?page=4\" class=class='btn_menu'>Gestion du projet</a></li>
								<li><a href=\"?page=5\" class=class='btn_menu'>Questionnaire</a></li>
								<li><a href=\"?page=6\" class=class='btn_menu'>Ressources</a></li>";
								?>

							</ul>
						</li>
					</ul>
				</div>
				
				<div id="contacter" class="btn">
					<?php 
						echo"<a href=\"?page=7\" class=class='btn_menu'>Contacter</a>";
						?>
				</div>
				
			</div>


		</div>


		<div id="contenu">
        <?php
         if( file_exists('lespages/page'.$page.'.php') ){ 
            include('lespages/page'.$page.'.php');
         }
        ?>

	
		</div>

		


		<footer>
			<span>Polytech Annecy-Chambéry - APP - Base de données et Technologies web</span>
		</footer>

		
	
	</body>
</html>  

  