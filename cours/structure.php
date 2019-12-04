<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Structure de controle</title>
</head>
<body>
    <div>
    <h2>Condition</h2>
    <div>
        <?php
            $op1 = 3;
            $op2 = 2;
            if ( $op1 > $op2) {
                echo "$op1 > $op2";
            } else {
                ?>
                <p>
                    <?php echo $op1;?> &lt; $op2
                </p>
                <?php
            }
        ?>
    </div>
    </div>
    <div>
    <h2>For</h2>
    <div>
        <?php
           for ($i = 0; $i < 10; $i++) { 
               echo $i;
           }
        ?>
    </div>
    </div>
    <div>
    <h2>While</h2>
    <div>
        <?php
            $i = 0;
           while ( $i < 10) { 
               echo $i;
               $i++;
           }
        ?>
    </div>
    </div>
    <div>
    <h2>Array</h2>
    <div>
        <?php
           $array = [1,2,3,4,5];
           for ($i=0; $i < count($array); $i++) {
               echo $array[$i];
           }
           $array[5] = 6;
        ?>
    </div>
    </div>
</body>
</html>