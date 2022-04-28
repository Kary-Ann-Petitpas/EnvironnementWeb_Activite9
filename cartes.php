<?php
     $chiffres = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13];
     $suites = ["carreau",  "pique", "trèfle", "coeur"];
     $cartes = array();

     foreach ($chiffres as $chiffre)
     {
        foreach ($suites as $suite)
        {
            array_push($cartes, $chiffre . "_" . $suite);
        }
     }

     $cartesbrassees = array();
     $premieeremoitie = array_slice($cartes, 0, count($cartes) / 2);
     $deuxiememoitie = array_slice($cartes, (count($cartes) / 2), count($cartes) / 2);

     

     echo "test";
?>