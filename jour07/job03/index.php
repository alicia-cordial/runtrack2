<?php

session_start();


if(isset($_POST['reset']) && $_POST['reset'] == 0)
{
    $_SESSION['Prenom']='';
    $_POST['reset'] = NULL;
} 

if(!isset($_SESSION['Prenom']))
{
    $_SESSION['Prenom'] = '';
}

if(!empty($_POST))
{
    $_SESSION['Prenom'] =  $_SESSION['Prenom']. $_POST['Prenom'] . '<br/>'; 
}

echo $_SESSION['Prenom'];
?>


<html>

<body>

<form method="post" action="index.php">


    <label for= "Prenom">PRENOM</label> 
    <input type="text" name="Prenom" id="Prenom"><br />
    
    <button type=submit name=button >ajout</button>
    <button type=submit name=reset >reset</button>

</form>

</body>

</html>