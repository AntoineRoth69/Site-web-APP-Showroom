<?php
		/*Connexion � la base de donn�es sur le serveur tp-epua*/
		$conn = @mysqli_connect("tp-epua:3308", "rothan", "1g4vprum");

		if (mysqli_connect_errno()) {
            $msg = "erreur ". mysqli_connect_error();
        } else {
            $msg = "connect� au serveur " . mysqli_get_host_info($conn);
            /*S�lection de la base de donn�es*/
            mysqli_select_db($conn, "rothan");
            /*Encodage UTF8 pour les �changes avecla BD*/
            mysqli_query($conn, "SET NAMES UTF8");
        }

		echo "<p>and here</p>";

		$sql = "SELECT nom, prenom, adresse_mail FROM users;";
		$result = mysqli_query($conn, $sql) or die("Requ�te invalide: ". mysqli_error($conn)."\n".$sql);
		echo "<span>Membres :</span><br/>"."<ul>";
		while ($row = mysqli_fetch_array($result)) {
			echo "<li \>".$row["nom"].", ".$row["prenom"]." - ".$row["adresse_mail"]."</li>";
		}
		echo "</ul>";
?>