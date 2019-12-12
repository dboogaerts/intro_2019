<?php

/**
 * return the PDO instance of the db connection
 */
function connectDB(): PDO{
    //1. Ouverture de connection
    $dbh = new PDO(
        "mysql:dbname=intro_2019;host=localhost",
        "root",
        "root",
        array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'',
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        )
    );
    return $dbh;
}

/**
 * return an array of all users in DB 
 */
function getAllUsers(PDO $connexion){ 
    $stagiaires = [];
    $sql = "SELECT * FROM USER";
    $stmt = $connexion -> prepare($sql);

    //3. Exécution de la requête
    $stmt->execute(); 
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach($stmt as $row) {
        $date = new DateTime($row["use_ddn"]);
        $row["use_ddn"] = $date -> format("d/m/Y");
        $stagiaires[] = $row;
    }
    return $stagiaires;
}

/**
 * insert a user in DB
 */
function insertUser(PDO $connexion, string $firstName, string $lastName, string $ddn, int $genre, string $mdp){
    $sql = "insert into user values (
        default, 
        :nom,
        :prenom,
        :ddn,
        :sexe,
        md5(:mdp))";
    $stmt = $connexion -> prepare($sql);
    $stmt -> bindParam('nom', $lastName);
    $stmt -> bindParam('prenom', $firstName);
    $stmt -> bindParam('ddn', $ddn);
    $stmt -> bindParam('sexe', $genre);
    $stmt -> bindParam('mdp', $mdp);
    $stmt -> execute();
}
