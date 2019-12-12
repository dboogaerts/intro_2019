<?php
require_once('./functions/db.func.php');
$action = isset($_POST["action"]) ? $_POST["action"] : "List";

try{
    $dbh = connectDB();
    switch ($action) {
        case "Ajouter":
            $nom = isset($_POST["nom"]) ? $_POST["nom"] : null;
            $prenom = isset($_POST["prenom"]) ? $_POST["prenom"] : null;
            $ddn = isset($_POST["ddn"]) ? $_POST["ddn"] : null;
            $genre = isset($_POST["genre"]) ? $_POST["genre"] : null;
            $pwd = isset($_POST["pwd"]) ? $_POST["pwd"] : null;

            insertUser($dbh, $prenom, $nom, $ddn,$genre, $pwd);
            break;
    }
    $stagiaires = getAllUsers($dbh);
}catch (Exception $ex) {
    die("ERREUR FATALE : ". $ex->getMessage());
}



require_once('./templates/all.tpl.php');