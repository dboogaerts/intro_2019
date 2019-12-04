<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variables</title>
</head>
<body>
    <?php
        echo "1.<br>2.";
    ?>
    <hr>
    <?php
        echo "1.";
        echo "<br>";
        echo '2.';
    ?>
    <hr>
    <?php
        echo "1."."<br>"."2.";
    ?>
    <hr>
    <?php
        $nom = "Denis";
        echo "Hello ".$nom."<br>";
        $nom = 123;
        echo "Hello $nom <br>";
        echo "Hello \$nom <br>";
        echo 'Hello $nom <br>';
        echo 'Hello \$nom <br>';
    ?>
    <hr>
    <h2>Chaine de caractère</h2>
    <?php
        $prenom = "Josy";
        $nom = "Dubois";
        $complet = "Mme ".$prenom." ".$nom;
        $complet = "Mme $prenom $nom";
        echo $complet;
    ?>
    <h2>Numérique</h2>
    <?php
        $a = 103;
        $b = -2;
        $somme = $a + $b;
        $produit = $a * $b;
        $soustraction = $a - $b;
        $division = $a / $b;
        $modulo = $a % $b;
        $increment = $a++;
        echo "Somme : $somme <br>";
        echo "Produit : $produit <br>";
        echo "Soustraction : $soustraction <br>";
        echo "Division : $division <br>";
        echo "Modulo : $modulo <br>";
        echo "Increment : $increment | $a <br>";
    ?>
    <h2>Booléen</h2>
    <?php
        $vrai = true;
        $faux = false;
        echo "Vrai : $vrai<br>";
        echo "Faux : $faux<br>";
        
        echo "vrai et faux: ".($vrai&&$faux)."<br>";
        echo "vrai ou faux: ".($vrai||$faux)."<br>";
        echo "non vrai: ".(!$vrai)."<br>";
    ?>
    <h2>Comparaison</h2>
    <?php
        $op1 = "Salut";
        $op2 = "salut";
        echo "$op1 == $op2 :".($op1 == $op2)."<br>";
        echo "$op1 != $op2 :".($op1 != $op2)."<br>";
        echo "$op1 < $op2 :".($op1 < $op2)."<br>";
        echo "$op1 > $op2 :".($op1 > $op2)."<br>";
        echo "$op1 >= $op2 :".($op1 >= $op2)."<br>";
        echo "$op1 <= $op2 :".($op1 <= $op2)."<br>";

        echo "$op1 === $op2 :".($op1 === $op2)."<br>";
        echo "$op1 !== $op2 :".($op1 !== $op2)."<br>";


        $op1 = 3;
        $op2 = "3cheval";
        echo "$op1 == $op2 :".($op1 == $op2)."<br>";
        echo "$op1 != $op2 :".($op1 != $op2)."<br>";
        echo "$op1 < $op2 :".($op1 < $op2)."<br>";
        echo "$op1 > $op2 :".($op1 > $op2)."<br>";
        echo "$op1 >= $op2 :".($op1 >= $op2)."<br>";
        echo "$op1 <= $op2 :".($op1 <= $op2)."<br>";

        echo "$op1 === $op2 :".($op1 === $op2)."<br>";
        echo "$op1 !== $op2 :".($op1 !== $op2)."<br>";
    ?>
</body>
</html>