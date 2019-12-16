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


$hands = array(1 => array(), 2=>array());
 
for ($i = 0; $i < 5; $i++) {
    $hands[1][] = implode(" of ", array_shift($deck));
    $hands[2][] = implode(" of ", array_shift($deck));
}


function calculate_odds($draw, $deck) {
    $remaining = count($deck);
    $odds = 0;
    foreach ($deck as $card) {
        if (  ($draw['face'] == $card['face'] && $draw['suit'] == 
$card['suit'] ) ||
              ($draw['face'] == '' && $draw['suit'] == $card['suit'] ) ||
              ($draw['face'] == $card['face'] && $draw['suit'] == '' ) ) {
            $odds++;
        }
    }

    return $odds;
};

$draw = array('face' => 'Ace', 'suit' => 'Spades');
 
echo implode(" of ", $draw) . ' : ' . calculate_odds($draw, $deck);

echo '<br>';

$draw = array('face' => '', 'suit' => 'Spades');
echo implode("", $draw) . ' : ' . calculate_odds($draw, $deck);

echo '<br>';

$draw = array('face' => 'Ace', 'suit' => '');
echo implode("", $draw) . ' : ' . calculate_odds($draw, $deck);



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