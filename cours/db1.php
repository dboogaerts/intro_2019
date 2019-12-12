<?php
//1. Ouverture de connection
    $dbh = new PDO("mysql:dbname=intro_2019;host=localhost","root","root",
    array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
    
    //2. Préparation de la requête
    $sql = "SELECT * FROM USER";
    $stmt = $dbh -> prepare($sql);

    //3. Exécution de la requête
    $stmt->execute();
   
    // var_dump($dbh);
    // var_dump($stmt);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
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
            while ($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
                $date = new DateTime($row["use_ddn"]);
                $date = $date -> format("d/m/Y");
              echo "
              <tr>
                <td>{$row["use_nom"]}</td>
                <td>{$row["use_prenom"]}</td>
                <td>".$date."</td>
                <td>".(($row["use_sexe"]) ? "Masculin" : "Feminin")."</td>
                
                </tr>";

            }
            ?>
        </table>
    </body>
    </html>



    