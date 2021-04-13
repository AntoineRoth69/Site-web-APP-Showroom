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

		echo "<p>and here</p>";

		$sql = "SELECT nom, prenom, adresse_mail FROM users;";
		$result = mysqli_query($conn, $sql) or die("Requête invalide: ". mysqli_error($conn)."\n".$sql);
		echo "<span>Membres :</span><br/>"."<ul>";
		while ($row = mysqli_fetch_array($result)) {
			echo "<li \>".$row["nom"].", ".$row["prenom"]." - ".$row["adresse_mail"]."</li>";
		}
		echo "</ul>";
?>