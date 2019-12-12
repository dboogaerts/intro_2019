<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Utilisateurs</title>
</head>

<body>
    <form action="user.php" method="POST">
    <table>
        <tr>
            <td>Nom</td>
            <td>Prenom</td>
            <td>Date de naissance</td>
            <td>Genre</td>
            <td></td>
            <td>Action</td>
        </tr>
        <?php
        foreach ($stagiaires as $stagiaire) {
            echo "
              <tr>
                <td>{$stagiaire["use_nom"]}</td>
                <td>{$stagiaire["use_prenom"]}</td>
                <td>" . $stagiaire["use_ddn"] . "</td>
                <td>" . (($stagiaire["use_sexe"]) ? "Masculin" : "Feminin") . "</td>
                <td></td>
                <td></td>
            </tr>";
        }
        ?>
        <tr>
            <td><input type="text" name="nom"></td>
            <td><input type="text" name="prenom"></td>
            <td><input type="date" name="ddn"></td>
            <td><select name="genre">
                <option value="0">Feminin</option>
                <option value="1">Masculin</option>
            </select></td>
            <td><input type="password" name="pwd"></td>
            <td><input type="submit" name="action" value="Ajouter"></td>
        </tr>
    </table>
    </form>
</body>
</html>