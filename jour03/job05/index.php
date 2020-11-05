<?php

 $str = 'On n est pas le meilleur quand on le croit mais quand on le sait.' ;
 $str = str_replace(CHR(32),"",$str);
 $dic = array
 (
     'voyelles' => 0,
    'consonnes' => 0
 );
 $lettre = array ('a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y');


 for ($compteur = 0 ; $compteur < strlen($str) ; $compteur ++)

    {
        if (in_array($str[$compteur], $lettre))

        {
             $dic ['voyelles']++;
        }

        else

        {
             $dic ['consonnes']++;
        }
    }
 
    echo $dic ['voyelles']. '<br/>';
    echo $dic ['consonnes'] ;
 
 ?>


 <table>
 
    <tr>
        <th>VOYELLES</th>
        <th>CONSONNES</th>
    </tr>

    <tr>
        <td>
            <?php echo $dic ['voyelles']. '<br/>';?>
        </td>

        <td>
            <?php echo $dic ['consonnes'] ;?>
        </td>

        
    
    </tr>
 
 
 
 </table>