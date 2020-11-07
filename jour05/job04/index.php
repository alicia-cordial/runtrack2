<?php 

    $operation = "+";
    $a=20;
    $b=3;

function calcule($a, $operation, $b)
{
    if ($operation == '+')
    {
        return ($a + $b);
    }

    elseif ($operation == '-')
    {
        return ($a - $b);
    }

    elseif ($operation == '*')
    {
        return ($a * $b);
    }

    elseif ($operation == '/')
    {
        return ($a / $b);
    }

     /*else($operation == '%')
    {
         return ($a % $b);
     }*/

}


echo calcule($a, $operation, $b);


?>