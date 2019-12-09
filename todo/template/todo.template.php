<?php 
    require_once('./functions/template.func.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo List</title>
</head>
<body>
    <h1>Todo List</h1>
        <?php
            echo writeForm($todos);
        ?>
        <hr>
        <?php
            echo writeSumary($todos);
        ?>
        <hr>
    <form action="todo.php" method="POST">
        <input type="submit" name="action" value="reset">
    </form>
</body>
</html>