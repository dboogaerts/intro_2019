<?php
require_once('./functions/db.func.php');
try{
    $dbh = connectDB();
    $stagiaires = getAllUsers($dbh);
}catch (Exception $ex) {
    die("ERREUR FATALE : ". $ex->getMessage());
}



require_once('./templates/all.tpl.php');