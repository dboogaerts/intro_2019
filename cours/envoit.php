<?php
    require_once('./../stagiaires/liste_stagiaires.php');
    var_dump($stagiaires);
    var_dump($hobbies);
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Envoyer de données</title>
</head>
<body>
    <!--Via un Lien-->
    <a href="recoit.php?nom=Doe&prenom=John">click</a>
    <!--Via un formulaire-->
    <form action="recoit.php" method="GET">
        nom : <input type="text" name="nom"/><br/>
        prenom : <input type="text" name="prenom"/><br/>
        Sexe :  
        M : <input type="radio" name="Sexe" value="Male"/><br/>
        F : <input type="radio" name="Sexe" value="Female" checked/><br/>
        Hobbies : <br>
        Tennis : <input type="checkbox" name="Hobbies[]" value="Tennis">
        Vidéo : <input type="checkbox" name="Hobbies[]" value="Video">
        Amis : <input type="checkbox" name="Hobbies[]" value="Friends">
        <hr>
        <select name="pays">
            <option value="be">Belgique</option>
            <option value="fr" >France</option>
            <option value="de" selected>Allemagne</option>
        </select>
        <select name="pays[]" multiple>
            <option value="be">Belgique</option>
            <option value="fr">France</option>
            <option value="de">Allemagne</option>
        </select>
        <br/>
        <textarea name="comment" cols="30" rows="10">une valeur par défaut</textarea>
        <input type="submit" value="Soumettre"/>
        <input type="reset" value="Annuler"/>
    </form>                                 

</body>
</html>