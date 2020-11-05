<?php

 $str = 'I\'m sorry Dave I\'m afraid I can\'t do that.' ;
 $lettre = array ('a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y');

for ($compteur = 0 ; $compteur < strlen($str) ; $compteur ++)
{

    if (in_array($str[$compteur], $lettre))

    {
        echo $str[$compteur]. ' ' ;
    }
} 


?>