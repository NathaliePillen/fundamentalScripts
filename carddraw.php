<?php

$suits =["Spades", "Hearts", "Clubs", "Diamonds"];
$faces = ["Two", "Three", "Four", "Five", "Six", "Seven", "Eight", "Nine", "Ten", "Jack", "Queen", "King", "Ace"];

$deck = [];

foreach ($suits as $suit){
foreach ($faces as $face) {
    $deck[] = ["face"=>$face, "suit"=>$suit];
 }
}

shuffle($deck);

//print_r($deck);
//echo '<br>';


$card = array_shift($deck);

//echo $card['face'] . " " . $card['suit'];

$hands = [1 => array(), 2=>array()];
 
for ($i = 0; $i < 5; $i++) {
    $hands[1][] = implode(" of ", array_shift($deck));
    $hands[2][] = implode(" of ", array_shift($deck));

    $cards1 = $hands[1];
    $cards2 = $hands[2];

    echo $cards1[$i];
    echo '<br>';
    echo $cards2[$i];
    echo '<br>';

}


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


    <h2>HTML</h2>

    <p><?php for ($i = 0; $i < 5; $i++) {echo $cards1[$i] . " ";}?></p>

    <p><?php for ($i = 0; $i < 5; $i++) {echo $cards2[$i] . " ";}?></p>
    

    
</body>
</html>