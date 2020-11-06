<?php


    if ($_GET["number"] %2 == 0)

    {
        echo $_GET["number"]. ' est pair <br/>';
    }

    else 
    {
        echo $_GET["number"]. ' est impair <br/>';
    }

?>

<form method="get" action="index.php">


        <label for= "number">NUMBER</label> 
        <input type="text" name="number" id="number"><br />
 

        <input type="submit" name="submit" value="submit"><br />

    </form>
