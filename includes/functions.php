<?php

/*
 * To change this template use Tools | Templates.
 */

function generateRandomSuit(){
        
        $suit = rand(0,3);
        $suitArray = array('clubs', 'diamonds', 'hearts','spades');
        $folder = $suitArray[$suit];
        return $folder;
}

function getRandomCard(){
    $randInt = rand(1,13);
    return $randInt;
}

function getRow(){
    $cardRow = [];
    for($i = 0; $i < 6; $i++){
        $cardRow[] = getRandomCard();
    }
    return $cardRow;
}

function buildCardPaths($intArray){
    $cardPaths = [];
    foreach($intArray as $value){
        $cardPaths[] = "img/cards/".generateRandomSuit()."/".$value.".png";
    }
    return $cardPaths;
}



?>