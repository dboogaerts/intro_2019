<?php
    require_once('./functions/session.func.php');
    session_start();
    $page = getCurrentPage();
    $sens = isset($_GET["sens"]) ? $_GET["sens"] : 0;

    $currentPage = setNextPage($page, $sens, 4);

