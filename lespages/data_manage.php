<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionnaire</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
    $conn = @mysqli_connect("tp-epua:3308", "rothan", "1g4vprum");

	if (mysqli_connect_errno()) {
		$msg = "erreur ". mysqli_connect_error();
	} else {
		$msg = "connecte au serveur " . mysqli_get_host_info($conn);
		mysqli_select_db($conn, "rothan");
		mysqli_query($conn, "SET NAMES UTF8");
	}

    if(isset($_POST['send'])){
        $Q1=$_POST['Q1'];
        $Q2=$_POST['Q2'];
        $Q3=$_POST['Q3'];

        $err = 3;
        $err_txt = "";

        //requete pour la question 1
        $sql = "INSERT INTO data_question (nom_question, reponse, id_user) VALUES ('Que pensez-vous de notre site ?','$Q1', 1) ;";
        //mettre le numéro de l'utilisateur à la place de 1 (récupérer avec l'aide d'une connexion et d'une session)
        if (mysqli_query($conn, $sql)){
            $err = $err - 1;
        } else {
            $err_txt = $err_txt.(mysqli_error($conn)."\n".$sql);
        }

        //requete pour la question 2
        $sql = "INSERT INTO data_question (nom_question, reponse, id_user) VALUES ('Quel est le principal aspect a ameliorer ?','$Q2', 1) ;";
        if (mysqli_query($conn, $sql)){
            $err = $err - 1;
        } else {
            $err_txt = $err_txt.(mysqli_error($conn)."\n".$sql);
        }

        //requete pour la question 3
        $sql = "INSERT INTO data_question (nom_question, reponse, id_user) VALUES ('Reviendrez vous sur ce site ?','$Q3', 1) ;";
        if (mysqli_query($conn, $sql)){
            $err = $err - 1;
        } else {
            $err_txt = $err_txt.(mysqli_error($conn)."\n".$sql);
        }

        if ($err==0) {
            echo "<h1>Merci de vos reponses</h1>"; 
        } else {
            echo "<h1>Nous n'avons pas pu prendre en compte vos reponses</h1>"; 
        }
        unset($_POST);
    }
?>

</body>
</html>