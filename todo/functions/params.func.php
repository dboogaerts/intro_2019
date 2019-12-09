<?php
    function getAction($actionParams) {
        // explode('_', "toggle_6"); => ["toggle","6"]
        return explode('_', $actionParams)[0];
    }

    function getIndex($actionParams) {
        $retour = explode('_', $actionParams);
        return (count($retour)>1) ? $retour[1] : -1;
    }