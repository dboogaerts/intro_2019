<?php     
    require_once('functions/string.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier le profil de <?php echo formatCompleteNom($nom, $prenom, $sexe) ?> </title>
</head>
<body>
   <h1>Modifier le profil de <?php echo formatCompleteNom($nom, $prenom, $sexe)?></h1>
   <form action="validate_update.php">
       <input type="hidden" name="position" value="<?php echo $position?>" >
       <label for="nom">Nom : </label>
       <input type="text" id="nom" name="nom" value="<?php echo $nom?>"><br>
       <?php 
            if(isset($error) && $error && $error_nom !==""){
                echo "<p style=\"color:red\">$error_nom</p>";
            }
        ?>
       <label for="hobbies">Hobbies : </label>
       <ul>
        <?php 
        foreach($hobbies as $tri => $intitule) {
            $checked = (in_array($tri, $hobbiesDuStagiaire))? "checked" : "";
            echo "
            <li>
                 <label for=\"H_$tri\">$intitule : </label>
                 <input type=\"checkbox\" name=\"hobbies[]\" id=\"H_$tri\" value=\"$tri\" $checked>
            </li>
            ";
        }
        ?>
       </ul>
       <input type="Submit" value="Modifier">

   </form>
</body>
</html>