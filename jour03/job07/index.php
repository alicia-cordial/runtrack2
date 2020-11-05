<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais";

$str_len = 0;
while (isset($str[$str_len])){
    $str_len++;
}

$c = $str[0];

for($i= 0 ; $i < $str_len ; $i++ )

{
    if($i <= $str_len -2){
        $str[$i] = $str[$i+1];
    }

    else{
        $str[$i] = $c;
}

}


?>