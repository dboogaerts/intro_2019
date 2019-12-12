<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Utilisateurs</title>
</head>

<body>
    <table>
        <tr>
            <td>Nom</td>
            <td>Prenom</td>
            <td>Date de naissance</td>
            <td>Genre</td>
        </tr>
        <?php
        foreach ($stagiaires as $stagiaire) {
            $date = $date->format("d/m/Y");
            echo "
              <tr>
                <td>{$stagiaire["use_nom"]}</td>
                <td>{$stagiaire["use_prenom"]}</td>
                <td>" . $date . "</td>
                <td>" . (($stagiaire["use_sexe"]) ? "Masculin" : "Feminin") . "</td>
            </tr>";
        }
        ?>
    </table>
</body>

</html>