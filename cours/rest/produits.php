<?php
    require_once('./functions.php');
    header('Content-Type:application/json');
    try {
        $conn = connectDB();
        $sortie = [];
        $sortie["first"] = getFirstProduct($conn);
        $sortie["rand"] = getFirstRandomProduct($conn);
        echo json_encode($sortie);
    }catch(Exception $e) {
        http_response_code(500);
    }
