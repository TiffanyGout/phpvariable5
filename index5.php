<?php

$month=array(); //exercice1
$month[0] = 'Janvier';
$month[1] = 'Février';
$month[2] = 'Mars';
$month[3] = 'Avril';
$month[4] = 'Mai';
$month[5] = 'Juin';
$month[6] = 'Juillet';
$month[7] = 'Aout';
$month[8] = 'Septembre';
$month[9] = 'Octobre';
$month[10] = 'Novembre';
$month[11] = 'Décembre';
    echo $month[2] . "</br>" ; //exercice2
    echo $month[4] . "</br>"; //exercice3
    echo str_replace('u','û','Aout') . "</br>";//exercice4

$HautDeFrance =array(//exercice5
    '02' => "Aisne",
    '59' => "Nord",
    '60' => "Oise",
    '62' => "Pas-de-Calais",
    '80' => "Somme");

    echo $HautDeFrance[59] . "</br>";//exercice6

    $HautDeFrance[51] = "Reims";//exercice7

    for ($id = 0; $id < sizeof($month); $id++){
        echo $month[$id] . "</br>" ;//exercice8
    }

    foreach($HautDeFrance as $cle => $element){
        echo $cle . " " . $element . "</br>";//exercice9
    }
    
    foreach($HautDeFrance as $cle => $element){
        echo "Le département " . $element . "a le numéro du département " . $cle . "</br>";//exercice10
    }
?>