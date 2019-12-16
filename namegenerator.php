<?php

$name = [
    "Nathalie",
    "Crisse",
    "Annelies",
    "Jurgen",
    "Roel",
];

$lastname = [
    "Pillen",
    "Soto",
    "Hofman",
    "Keppens",
    "Jacobs",
];

//print_r($name);
//echo '<br>';

//print_r($lastname);

//echo $name[array_rand($name)] . ' ' . $lastname[array_rand($lastname)];

print_r ($name);
echo '<br>';

$shuffle = shuffle($name);

print_r ($shuffle);
echo '<br>';

for ($i=0; $i<=4; $i++){
    echo $name[$i] . ' ' . $lastname[$i];
}

$name = explode(PHP_EOL, file_get_contents('names.txt'));
print_r($name);



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>