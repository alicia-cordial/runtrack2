<form action="index.php" method="post">

        <input type="text" name="largeur" /><br>
        <input type="text" name="hauteur" /><br>

        <button type="submit" class="button">Valider</button>

</form>


<table>

        <tbody>

                <?php

                $hauteur=5; 
                $largeur=10;

                        for ($line=1; $line <= $hauteur ; $line++){
                                echo "<tr>";
                                for ($cell=1; $cell <= $largeur ; $cell++){
                                        if ($cell + $line <= $largeur/2 || $cell - $line > $largeur/2){
                                                echo "<td>&nbsp</td>";
                                        }

                                        elseif ($cell + $line == $largeur/2 +1){
                                                echo "<td>/</td>";
                                        }

                                        elseif ($cell - $line == $largeur/2){
                                                echo "<td>\</td>";
                                        }

                                        else{
                                                echo "<td>_</td>";
                                        }
                                }
                                echo "</tr>";
                        }

                        for ($line=1; $line <=$hauteur; $line++){
                                echo"<tr>";
                                for ($cell=1; $cell <= $largeur ; $cell++){
                                        if ($cell ==1 || $cell == $largeur){
                                                echo "<td>|</td>";
                                        }
                                        elseif ($line == $hauteur){
                                                echo "<td>_</td>";
                                        }
                                        else{
                                                echo "<td>&nbsp</td>";
                                        }
                                }
                        }


                ?>
        
        
        
        
        </tbody>




</table>
