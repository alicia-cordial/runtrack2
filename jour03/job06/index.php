<?php

$str = "Les choses que l'on possede finissent par nous posseder.";

for($i = 0; isset($str[$i]); $i++)
{
    $str[$i];
}


for($i = $i-1; $i>= 0; $i--) 
{
   echo $str[$i];
}


?>