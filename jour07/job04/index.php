<?php

if(empty($_POST['Prenom']))
{
    echo '<form method="post" action="index.php">
        <label for= "Prenom">PRENOM</label> 
        <input type="text" name="Prenom"><br />
    
        <button type=submit name=button value= 0>connexion</button>

        </form>';
}

else
{

        $_COOKIE['Prenom']= $_POST['Prenom'];
        setcookie('Prenom',$_COOKIE['Prenom']);
    
        echo 'Bonjour' . $_COOKIE['Prenom'] . '!';
        echo '<form> <button type=submit name=button>deco</button> </form>';
}

?>
