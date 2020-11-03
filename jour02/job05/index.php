

<?php
$nombre = 0;



while ($nombre <= 1000)
{
    $nombre_verification = 1;
    $multiple= 0;
     
    while ($nombre_verification <= $nombre)
     {
        if($nombre % $nombre_verification == 0)
        {
        $multiple++;
        }

        $nombre_verification ++;
     }

      if ($multiple == 2)
      echo $nombre. '<br>';

    $nombre++;
}

?>