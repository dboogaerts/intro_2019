<?php
/**
	* return connection 
	*/
	function connectDB(): PDO{
	    //1. Ouverture de connection
	    $connexion = new PDO(
	        "mysql:dbname=tshirt;host=localhost",
	        "root",
	        "root",
	        array(
	            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'',
	            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	        )
	    );
	    return $connexion;    
    }
    
    function getFirstProduct(PDO $dbh) {
        $sql = "SELECT * from produits ORDER BY prod_date DESC LIMIT 3";
        $stmt = $dbh -> prepare($sql);
        $stmt -> execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function getFirstRandomProduct(PDO $dbh) {
        $sql = "SELECT * from produits ORDER BY rand() DESC LIMIT 3";
        $stmt = $dbh -> prepare($sql);
        $stmt -> execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function getAllCategories(PDO $dbh) {
        $sql = "SELECT cat_id id, cat_nom nom
                FROM produits 
                JOIN categories ON cat_id = prod_fk_categorie
                group by cat_id";
        $stmt = $dbh -> prepare($sql);
        $stmt -> execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }