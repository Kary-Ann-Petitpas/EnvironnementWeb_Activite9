<?php
     $chiffres = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13];
     $suites = ["carreau", "pique", "trèfle", "coeur"];
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

     for ($i = 0; $i < count($premieeremoitie); ++$i)
     {
         array_push($cartesbrassees, $premieeremoitie[$i], $deuxiememoitie[$i]);
     }

     $rangees = [
         array_slice($cartesbrassees, 0, 13),
         array_slice($cartesbrassees, 13, 13),
         array_slice($cartesbrassees, 26, 13),
         array_slice($cartesbrassees, 39, 13),
     ];

     echo "<table style=\"width:100%\">";
     foreach ($rangees as $rangee)
     {
         echo "<tr style=\"height:32px\">";

        foreach ($rangee as $carte)
        {
            echo "<td>$carte</td>";
        }

         echo "</tr>";
     }
     echo "</table>";
    
?>