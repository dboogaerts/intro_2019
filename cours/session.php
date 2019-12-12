<?php

// récupère et/ou crée une session
session_start();
session_regenerate_id();
// Doit être fait avant toute écriture!!!!
if (!isset($_SESSION['cpt'])){
    $_SESSION['cpt'] = 1;
} else {
    $_SESSION['cpt']++;

}

echo $_SESSION['cpt'];
