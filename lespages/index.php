<!DOCTYPE HTML>

<html>

  <head>
    <title></title>
    <meta content="info">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="gestion_batiment.css" />
  </head>
  
  <?php   
        /*Connexion à la base de données sur le serveur tp-epua*/
		$conn = @mysqli_connect("tp-epua:3308", "login", "mdp");    
		
		if (mysqli_connect_errno()) {
            $msg = "erreur ". mysqli_connect_error();
        } else {  
            $msg = "connecté au serveur " . mysqli_get_host_info($conn);
            /*Sélection de la base de données*/
            mysqli_select_db($conn, "login"); 

            /*Encodage UTF8 pour les échanges avecla BD*/
            mysqli_query($conn, "SET NAMES UTF8");
        }
		
  ?> 
  
  <body>
  
  <div id="fond">
  
    <div id="titre">
      <span>Présentation APP showroom</span>
    </div>
  
    <div id="menu">
      <ul id="lemenu">
      <?php  
      $encours = array(" "," "," "," "," ");

      if( !isset($_GET["page"]) ) { 
        $page=0;
      }else{
        $page=$_GET["page"];
      }
      $encours[$page] = "encours";
       
      echo "<li><a href=\"?page=0\" class=\"btn_menu $encours[0]\">Accueil</a></li>\n";
      echo "<li><a href=\"?page=1\" class=\"btn_menu $encours[1]\">présentation</a></li>\n";
      echo "<li><a href=\"?page=2\" class=\"btn_menu $encours[2]\">objectif</a></li> \n";   
      echo "<li><a href=\"?page=3\" class=\"btn_menu $encours[3]\">demonstrateur</a></li> \n";   
      echo "<li><a href=\"?page=4\" class=\"btn_menu $encours[4]\">demonstrateur</a></li> \n"; 
      ?> 
      </ul>
    </div>
  
    <div id="contenu">
    <?php
      if( file_exists("page_".$page.".inc.php") ){ 
        include("page_".$page.".inc.php");
      }
    ?>
    </div>
  
    <div id="pied">
      <span>Polytech Annecy-Chambéry - APP - Base de données et Technologies web</span>
    </div>
 
  </div>
  
  </body>
</html>  
  
  
  
