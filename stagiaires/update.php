<?php
require_once("data/liste_stagiaires.php");

$position = (isset($_GET["id"])) ? $_GET["id"] : null;

// Validation
$error_msg = "";
if (!isset($position)  || !is_numeric($position) || $position < 0 || $position >= count($stagiaires)) {
    if (!isset($position)) {
        $error_msg = "Veuillez fournir un id de stagiaire";
    } else {
        $error_msg = "Pas de stagiaire connu avec cet id";
    }
    // echo $error_msg;
    require_once("./liste.php");
} else {
    $nom = $stagiaires[$position]["nom"];
    $prenom = $stagiaires[$position]["prenom"];
    $sexe = $stagiaires[$position]["sexe"];
    $hobbiesDuStagiaire = $stagiaires[$position]["hobbies"];
    require_once("templates/stagiaire_form.php");
}

