<link rel="stylesheet" href="lespages/page4.css" />
<h1>Gestion du Projet</h1>
<?php
	$sql = "SELECT nom, prenom, role FROM users ORDER BY nom;";
	$result = mysqli_query($conn, $sql) or die("Requete invalide: ". mysqli_error($conn)."\n".$sql);
	$members = array();
	while ($row = mysqli_fetch_array($result)) {
		if(strpos($row["role"], "chef de projet")!==false) {
			echo "<div class='team_list_item'><h2>Chef de projet</h2><div id='canap' class='team'>";
			echo "<div class='member'><p>".$row["nom"]."</p><p>".$row["prenom"]."</p></div>";
			echo "</div></div>";
			$team=substr($row["role"],strpos($row["role"],",")+2,strlen($row["role"])-1);
			$members[$row["nom"]] = array("role" => $team, "prenom" => $row["prenom"]);
		} else {
			$members[$row["nom"]] = array("role" => $row["role"], "prenom" => $row["prenom"]);
		}
	}

	function create_div_eq($mem, $role) {
		foreach($mem as $key => $value) {
			if($value["role"]===$role) {
				echo "<div class='member'><p>".$key."</p><p>".$value["prenom"]."</p></div>";
			}
		}
	}

	function distinct_function($mem) {
		$teams = array();
		foreach ($mem as $key => $value) {
			if (in_array($value["role"], $teams)===false) {
				$teams [] = $value["role"];
			}
		}
		return $teams;
	}

	foreach (distinct_function($members) as $key => $value) {
		echo "<div class='team_list_item'><h2>E".substr($value, 2)."</h2><div id='canap' class='team'>";
		create_div_eq($members, $value);
		echo "</div></div>";
	}
?>
