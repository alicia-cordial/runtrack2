<?php
session_start();


if(isset($_POST['button']) && $_POST['button'] == 0)
{
    $_SESSION['nbvisites']=-1;
    $_POST['button'] = NULL;
} 

if (!(isset($_SESSION['nbvisites']))) 
{
    $_SESSION['nbvisites']=0;
}

else 
{
    $_SESSION['nbvisites']++;
}

echo $_SESSION['nbvisites'];


?> 

<!DOCTYPE html> 
<html> 

<form method=post>
<button type=submit name=button value=0 >BUTTON</button>
</form>

</html>



