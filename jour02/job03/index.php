<?php

        $number= 0;

        while ($number <= 100)
        {
        
            if ($number >= 0 AND $number <= 20)
            {
                echo '<i> '.$number.' </i> <br>';
                $number++;
            }

            elseif ($number == 42)
            {
                echo 'La Plateforme_ <br>';
                $number++;
            }

            elseif ($number >= 25 AND $number <= 50)
            {
                echo  '<u> '.$number.' </u> <br>';
                $number++;
            }

           

            else
            {
                echo $number. '<br>';
                $number++;
            }

        }
      

?>