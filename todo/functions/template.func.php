<?php
function writeLine($todo, $indice) {
    return "<li>
        <input type=\"submit\" 
            name = \"action\"
            value = \"toggle_$indice\"/>
        {$todo["intitule"]} - 
        ".($todo["complete"] ? "done" : "todo")
        ." 
        <input type=\"hidden\" 
            name=\"complete[$indice]\" 
            value=\"".($todo["complete"] ? "true" : "false") . "\"
            >
        <input type=\"hidden\" 
            name=\"todo_item[$indice]\" 
            value=\"{$todo["intitule"]}\"
            >
            <input type=\"submit\" 
            name = \"action\"
            value = \"delete_$indice\"/>
    </li>";
}

function writeForm($todos){
    $lines = "";
    foreach($todos as $indice => $todo){
        $lines .= writeLine($todo, $indice);
    }

    return "
    <form action=\"todo.php\" method=\"POST\">
        <input type=\"text\" name=\"newtodo\"/>
        <input type=\"submit\" name=\"action\" value=\"ajouter\"/>
        <hr>    
        <ul>
            $lines
        </ul>
    </form>
        ";
}

function calculSumary($todos) {
    $reste = [
        "todo" => 0,
        "complete" => 0,
        "total" => count($todos)
    ];
    foreach($todos as $index => $todo) {
        if ($todo["complete"]) {
            $reste["complete"]++;
        } else {
            $reste["todo"]++;
        }
    }
    return $reste;
}

function writeSumary ($todos) {
    ["todo" => $todo, "complete" => $complete, "total" => $total] = calculSumary($todos);
    return "
        <ul>
            <li>Total : $total</li>
            <li>To do : $todo</li>
            <li>Complete : $complete</li>
        </ul>
    ";
}