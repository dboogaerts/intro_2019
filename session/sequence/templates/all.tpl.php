<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Page <?php echo $currentPage?> </title>
    </head>
    <body>
        <?php
            require_once("{__DIR__}/{$currentPage}.tpl.php");
            require_once("{__DIR__}/footer.tpl.php");
        ?>
    </body>
</html>