<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tableau</title>
</head>
<body>
<div>
    <h2>Tableau : La vérité</h2>
    <div>
        <?php
           $array = [];
           $array[] = 2;
           $array[] = "salut";
           $array[] = true;
           $array[] = [1,4,7];
           var_dump($array);
        ?>
        <hr>
        <?php
            $array = [
                "nom" => "Boogaerts",
                "prenom" => "Denis",
            ];
           var_dump($array);
            echo $array["nom"];
        ?>
        <hr>
        <?php
            $array = [
                "salut",
                "nom" => "Boogaerts",
            ];
            $array[5] = "bobo   ";
            $array[1]= "un";
            $array[]= "fin";

           var_dump($array);
            echo $array["nom"];
        ?>
        <hr>
        <?php
            foreach($array as $cle => $valeur) {
                echo "$cle : $valeur <br>";
            }
        ?>
        <hr>
        <?php   
            if (isset($_GET["nom"])){
                echo "nom : ".$_GET["nom"]."<br/>";
            }
            if (isset($_GET["prenom"])){
                echo "prenom : ".$_GET["prenom"]."<br/>";
            }
            
        ?>
    </div>      
    </div>
</body>
</html>