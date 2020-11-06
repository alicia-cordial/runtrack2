<?php


    if (isset($_POST["login"]) == 'John' AND isset($_POST["password"]) == 'Rambo')
        {
        echo 'C\'est pas ma guerre';
        }

    else
    {
    echo 'Votre pire cauchemar';
    }




?>

<form method="post" action="index.php">


        <label for= "login">USERNAME</label> 
        <input type="text" name="login" id="login"><br />
 
        <label for= "password">PASSWORD</label> 
        <input type="password" name="password" id="password"><br />

        <input type="submit" name="submit" value="submit"><br />

    </form>

