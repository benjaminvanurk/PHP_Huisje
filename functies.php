<?php
// koppel index.php
include_once('index.php');

// Variabelen die user input
$dak_hoogte = $_GET["hoogte_dak"] ??"";
$muur_hoogte = $_GET["hoogte_muur"] ??"";

// Functie dak
function maak_dak($limit) {
    for($row = 1; $row <= $limit; $row ++) {
        $stars = str_repeat('*', ($row - 1) * 2 + 1);
        $space = str_repeat(' ', $limit - $row);
        echo $space . $stars . '<br>';
    }
}

echo "<pre>";
// div voor stylen
echo "<div class = dak>"; 
// Runnen van funtie dak
maak_dak($dak_hoogte);


// Functie om muur te maken
function maak_muur($limit) {
    for($row = 0; $row < $limit; $row ++) {
        $stars = str_repeat('*' , $_GET["hoogte_dak"] * 2 - 1);
        echo $stars . '<br>';
    }
}
// div voor stylen
echo "<div class = muur>";
// runnen van functie muur
maak_muur($muur_hoogte);
?>