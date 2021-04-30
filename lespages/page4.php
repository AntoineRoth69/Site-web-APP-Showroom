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
