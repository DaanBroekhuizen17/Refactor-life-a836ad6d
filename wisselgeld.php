<?php

$input = $argv[1];
$bedrag = floatval($input);

define(
    "GELDEENHEDEN", 
    [
    500,
    200,
    100,
    50,
    20,
    10,
    5,
    2,
    1
    ]
);   

define(
    "CENTEN",
    [
    50,
    20,
    10,
    5
    ]
);

$restbedrag = $bedrag;

function euros($restbedrag){
    foreach(GELDEENHEDEN as $euro){
        if($restbedrag>=$euro) {
            $aantalKeerEuroInRestBedrag = floor($restbedrag / $euro);
            $restbedrag = $restbedrag - $euro * $aantalKeerEuroInRestBedrag;
            echo($aantalKeerEuroInRestBedrag. " X " .$euro. " euro".PHP_EOL);
        }
    }
    return $restbedrag;
}

$restbedrag = euros($restbedrag) * 100;

function cents($restbedrag){
    foreach(CENTEN as $euro){
        if($restbedrag>=$euro) {
            $aantalKeerEuroInRestBedrag = floor($restbedrag / $euro);
            $restbedrag = round($restbedrag - $euro * $aantalKeerEuroInRestBedrag);
            echo($aantalKeerEuroInRestBedrag. " X " .$euro. " cent".PHP_EOL);
        }
    }
}

cents($restbedrag);
?>