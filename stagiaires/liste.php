<?php
    require_once('data/liste_stagiaires.php');
    require_once('functions/string.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des stagiaires</title>
</head>
<body>
   <h1>Liste des stagiaires</h1> 
   <ul>
    <?php
        foreach($stagiaires as $position => $stagiaire) {
            echo "
            <li>
                <a href=\"update.php?id=$position\">".
                    formatCompleteNom($stagiaire["nom"],$stagiaire["prenom"], $stagiaire["sexe"])
            ."</a>
            </li>";
        }
    ?>
   </ul>
</body>
</html>


<!-- ".formatCompleteNom($stagiaire["nom"], $stagiaire["prenom"], $stagiaire["sexe"])." -->





