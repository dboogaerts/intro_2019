<?php
    /**
     * @param $nom String nom du stagiaires
     * @param $prenom string nom du stagiaires
     * @param $nom string nom du stagiaires
     */
    function formatCompleteNom($nom, $prenom, $sexe){
        $retour = 'Mme';
        if ($sexe === 'M') {
            $retour = 'Mr';
        }
        return "$retour ".strtoupper($nom)." ".strtoupper(substr($prenom,0,1)).strtolower(substr($prenom,1));
    }