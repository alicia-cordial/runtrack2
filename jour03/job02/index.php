<?php

$str = 'Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.';

for ($compteur = 0 ;$compteur<=76; $compteur++)
{

    if ($compteur %2 == 0)

    {
        echo $str[$compteur]. ' ';
    }
} 


?>