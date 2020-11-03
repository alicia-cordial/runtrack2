<?php

        $number= 1;

        while ($number <= 100)
        {
        
            if ($number %3 == 0 AND $number %5 == 0)
            {
                echo 'FizzBuzz <br>';
                $number++;
            }

            elseif ($number %3 == 0)
            {
                echo 'Fizz <br>';
                $number++;
            }

            elseif ($number %5 ==0)
            {
                echo  'Buzz <br>';
                $number++;
            }

           

            else
            {
                echo $number. '<br>';
                $number++;
            }

        }
      

?>