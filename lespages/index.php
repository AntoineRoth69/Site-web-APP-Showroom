<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionnaire</title>
	<link rel="stylesheet" href="header.css" />
	<link rel="stylesheet" href="footer.css" />
	<link rel="stylesheet" href="header-tel.css" />
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
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
		
		
<h1>Notre questionnaire !</h1>
    <h2>N'oubliez pas de valider vos réponses avec le bouton Send en bas à droite de votre écran</h2>
 
    <form action="./data_manage.php" method="post" class="container-faq">
        <div class="questions">
            <div class="visible-pannel">
                <h2>Que pensez-vous de notre site ?</h2>
                <img src="ressources/minus.svg">
            </div>
            <div class="toggle-pannel">
                <input type="radio" name= "Q1" value="Très bien"> Très bien
                <br></br>
                <input type="radio" name= "Q1" value="Bien"> Bien
                <br></br>
                <input type="radio" name= "Q1" value="Moyen"> Moyen
                <br></br>
                <input type="radio" name= "Q1" value="Pas bien"> Pas bien
            </div>
        </div>

        <div class="questions">
            <div class="visible-pannel">
                <h2>Quel est le principal aspect à améliorer ?</h2>
                <img src="ressources/minus.svg">
            </div>
            <div class="toggle-pannel">
                <input type="radio" name= "Q2" value="Esthétique"> Esthétique
                <br></br>
                <input type="radio" name= "Q2" value="Contenu"> Contenu
                <br></br>
                <input type="radio" name= "Q2" value="Prise en main"> Prise en main
                <br></br>
                <input type="radio" name= "Q2" value="Rien"> Rien
            </div>
        </div>

        <div class="questions">
            <div class="visible-pannel">
                <h2>Reviendrez vous sur ce site ?</h2>
                <img src="ressources/minus.svg">
            </div>
            <div class="toggle-pannel">
                <input type="radio" name= "Q3" value="Oui"> Oui
                <br></br>
                <input type="radio" name= "Q3" value="Non"> Non
            </div>
        </div>
        <button type="submit" name="send" id="submit_button" > <img src="ressources/envoi.svg">Send</button>
			
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/gsap.min.js"></script>
    <script src="app.js"></script>
	
	
	
	<footer>
		<span>Polytech Annecy-Chambéry - APP - Base de données et Technologies web</span>
	</footer>


</body>
</html>
