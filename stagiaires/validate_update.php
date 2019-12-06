<?php
require_once ('functions/validation.php');
require_once ('data/liste_stagiaires.php');

$position = isset($_GET["position"])?$_GET["position"] : null;
$nom = isset($_GET["nom"])?$_GET["nom"] : null;
$prenom = isset($_GET["prenom"])?$_GET["prenom"] : null;
$sexe = isset($_GET["sexe"])?$_GET["sexe"] : null;
$hobbiesDuStagiaire = isset($_GET["hobbies"])?$_GET["hobbies"] : [];

$error = false;
$error_nom = "";
if (!isValidPosition($position, count($stagiaires))) {
    $error = true;
} else if (!isValidName($nom)) {
    $error = true;
    $error_nom = "Le nom est soit vide soit contient des digits";
}

if ($error) {
    require_once('templates/stagiaire_form.php');
}
