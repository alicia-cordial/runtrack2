<?php

$number = array (98, 171, 173, 200, 204, 404, 459);

for ($compteur = 0 ;$compteur<=6; $compteur++)
{

    if ($number[$compteur] %2 == 0)

    {
        echo $number[$compteur]. ' est pair <br/>';
    }

    else 
    {
        echo $number[$compteur]. ' est impair <br/>';
    }

}

?>
