<?php
function getCurrentPage(){
    return (isset($_SESSION["page"])) ? $_SESSION["page"] : 1;
}

function setNextPage($current, $sens, $max) {
    $nextPage = $current + $sens;
    $nextPage = ($nextPage<1) ? 1 : $nextPage;
    $nextPage = ($nextPage>$max) ? $max : $nextPage;
    return $nextPage;
}