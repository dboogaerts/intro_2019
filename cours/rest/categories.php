<?php
    require_once('./functions.php');
    header('Content-Type:application/json');
    try {
        $conn = connectDB();
        $categories = getAllCategories($conn);
        echo json_encode($categories);
    }catch(Exception $e) {
        http_response_code(500);
    }
