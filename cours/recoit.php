<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recoit les données</title>
</head>     
<body>
    <pre>      
    <?php
        var_dump($_GET);
        foreach($_GET as $cle => $value) {
            if (is_array($value)){
                echo "$cle :". implode(",", $value)."<br>";    
            } else {
                echo "$cle : $value<br>";
            }
        }
    ?>
    </pre>
</body>
</html>