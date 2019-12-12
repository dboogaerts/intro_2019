<?php
    $nom = isset($_GET["nom"]) ? $_GET["nom"] : null;
    try{
        //1. Ouverture de connection
        $dbh = new PDO("mysql:dbname=intro_2019;host=localhost","root","root",
        array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'',
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ));
        //2. Préparation de la requête
        $sql = "insert into user values (1, :nom,'Jane', '2000-01-01', 0, md5('toto'))";
        $stmt = $dbh -> prepare($sql);
        $stmt->bindParam('nom', $nom);
    
        //3. Exécution de la requête
        
        $stmt->execute();
    }catch (Exception $exception ){
        echo "Erreur :". $exception->getMessage();
    }