<?php
//echo rand(1,6) . '<br>';

//echo mt_rand(1,6) . '  more secure' . '<br>';

$side= rand(1,6);

function roll ($side) {

    return "images/dice$side.png";

    echo $side;
}

echo $side;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Die Roller</title>
</head>
<body>

<img src="<?php echo roll($side);?>" alt="">

    
</body>
</html>