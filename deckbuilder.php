<?php

$suits =["Spades", "Hearts", "Clubs", "Diamonds"];

$faces = ["Two", "Three", "Four", "Five", "Six", "Seven", "Eight", "Nine", "Ten", "Jack", "Queen", "King", "Ace"];

// all the card values by creating a deck-array

$deck = [];

foreach ($suits as $suit){
foreach ($faces as $face) {
    $deck[] = ["face"=>$face, "suit"=>$suit];
 }
}

//print_r ($deck);
//echo '<br>';

shuffle($deck);

//Remove the first element from an array, and return the value of the removed element:
$card = array_shift($deck);

//echo $card['face'] . " of " . $card['suit'];

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
    <p><?php echo $card['face']?></p>
    <p><?php echo $card['suit']?></p>

    
</body>
</html>