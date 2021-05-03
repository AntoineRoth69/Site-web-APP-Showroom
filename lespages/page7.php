<link rel="stylesheet" href="lespages/page7.css" />
<div id="contact_title">
    <span>Contact</span>
</div>
<p id="start_phrase">Vous pouvez contactez les membres du groupes aux adresses mails suivantes :</p>

<?php
    $sql = "SELECT DISTINCT nom, role, adresse_mail FROM users ORDER BY nom;";
    $result = mysqli_query($conn, $sql) or die("Requete invalide: ". mysqli_error($conn)."\n".$sql);
    $members = array();
    while ($row = mysqli_fetch_array($result)) {
        if(strpos($row["role"], "chef de projet")!==false) {
            $team=substr($row["role"],strpos($row["role"],",")+2,strlen($row["role"])-1);
            $members[] = array("role" => $team, "mail" => $row["adresse_mail"]);
        } else {
            $members[] = array("role" => $row["role"], "mail" => $row["adresse_mail"]);
        }
    }

    function create_div_eq($mem, $role) {
        foreach($mem as $key => $value) {
            if($value["role"]===$role) {
                echo "<span>".$value["mail"];
                if($key!==count($mem)) {
                    echo " - ";
                }
                echo "</span>";
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

    echo "<ul id='contact_list'>";
    foreach (distinct_function($members) as $key => $value) {
        echo "<li>E".substr(trim($value), 2)." : ";
        create_div_eq($members, $value);
        echo "</li>";
    }
    echo "<ul>";
    echo "<div id='blank'></div>";
?>
