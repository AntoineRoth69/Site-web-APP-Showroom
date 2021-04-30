<link rel="stylesheet" href="lespages/questionnaire.css">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">

<h1>Notre questionnaire !</h1>
    <h2>N'oubliez pas de valider vos réponses avec le bouton Send en bas à droite de votre écran</h2>
 
    <form action="lespages/data_manage.php" method="post" class="container-faq">
        <div class="questions">
            <div class="visible-pannel">
                <h2>Que pensez-vous de notre site ?</h2>
                <img src="lespages/ressources/minus.svg">
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
                <img src="lespages/ressources/minus.svg">
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
                <img src="lespages/ressources/minus.svg">
            </div>
            <div class="toggle-pannel">
                <input type="radio" name= "Q3" value="Oui"> Oui
                <br></br>
                <input type="radio" name= "Q3" value="Non"> Non
            </div>
        </div>
        <button type="submit" name="send" id="submit_button" > <img src="lespages/ressources/envoi.svg">Send</button>
			
    </form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/gsap.min.js"></script>
<script src="lespages/app.js"></script>
