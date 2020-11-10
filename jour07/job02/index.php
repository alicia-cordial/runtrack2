<?php

setcookie('nbvisites'); 

if (isset($_POST["reset"]) AND $_POST["reset"] == 0)
{
    setCookie('nbvisites', 0 ); 
    $_POST["reset"] = 1;
    echo 'Vous avez visité 0 fois ce site'; 

}

 elseif(!isset($_COOKIE ['nbvisites'])) 

{
    setCookie('nbvisites', 0 ); 

}

else
{
setCookie('nbvisites', $_COOKIE['nbvisites'] + 1 ); 

echo 'Vous avez visité ' , $_COOKIE['nbvisites'] + 1 , ' fois ce site'; 

}


?>

<form method="post" action = "index.php"><button name="reset" value="0">RESET</button></form>