<?php
require_once('./functions/params.func.php');

// 0. Créer le tableau des todos
$todos = [];
$item_intitule = isset($_POST["todo_item"]) ? $_POST["todo_item"] : [];
$item_complete = isset($_POST["complete"]) ? $_POST["complete"] : [];
foreach($item_intitule as $index => $intitule) {
    $todos[$index] = [
        "complete" => ($item_complete[$index] === "true") ? true : false,
        "intitule" => $intitule
    ];
}

// 1. Récupérer les paramètres
$action = isset($_POST["action"]) ? $_POST["action"] : "list";
$newtodo = isset($_POST["newtodo"]) ? $_POST["newtodo"] : "";

$index = getIndex($action);
$action = getAction($action);

// 2. Effectuer l'action
switch($action) {
    case "ajouter" :
        $todos[] = [
            "complete" => false,
            "intitule" => $newtodo
        ];
        break; 
    case "reset" : 
        $todos = [];
        break;
    case "delete" :
        unset($todos[$index]);
        break;
    case "toggle" :
        $todos[$index]["complete"] = !$todos[$index]["complete"];
        break;
    default:
}


// 3. Inclure le fichier HTML
require_once("./template/todo.template.php");