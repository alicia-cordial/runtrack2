<?php

$str = "trois petits chats se premonent le long des Berges";




  echo leetspeak($str);

function leetspeak($str)
{

$result = "";

for($i=0 ; isset($str[$i]) ; $i++ )
{

    if ($str[$i] == 'a' OR $str[$i] == 'A'){
        $result[$i] = '4';
    }
    elseif ($str[$i] == 'b' OR $str[$i] == 'B'){
        $result[$i] = '8';
    }
    elseif ($str[$i] == 'e' OR $str[$i] == 'E'){
        $result[$i] = '3';
    }
    elseif ($str[$i] == 'g' OR $str[$i] == 'G'){
        $result[$i] = '6';
    }
    elseif ($str[$i] == 'l'  OR $str[$i] == 'L'){
        $result[$i] = '1';
    }
    elseif ($str[$i] == 's' OR $str[$i] == 'S'){
        $result[$i] = '5';
    }
    elseif ($str[$i] == 't' OR $str[$i] == 'T'){
        $result[$i] = '7';
    }
    else{
        $result[$i] = $str[$i];
    }
}

return ($result); 

}

echo leetspeak($str);


?>
