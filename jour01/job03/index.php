
<!DOCTYPE html>
<html>
    <head> 
        <meta charset= "utf-8">
        <title>TABLEAU</title>
</head>


<body>

<main>

<?php

$bool=true;
$str= 'Hello ';
$int= 5;
$float= 4.6;

?>


<table>

<tr>
        <th>TYPE</th>
        <th>VALEUR</th>
        <th>NOM</th>
</tr>

<tr>    
    <td> <?php echo gettype($bool) ?> </td>
    <td> <?php echo $bool ?> </td>
    <td> <?php echo '$bool' ?> </td>

</tr>

<tr>    
    <td> <?php echo gettype($str) ?> </td>
    <td> <?php echo $str ?> </td>
    <td> <?php echo '$str' ?> </td>

</tr>

<tr>    
    <td> <?php echo gettype($int) ?> </td>
    <td> <?php echo $int ?> </td>
    <td> <?php echo '$int' ?> </td>

</tr>

<tr>    
    <td> <?php echo gettype($float) ?> </td>
    <td> <?php echo $float ?> </td>
    <td> <?php echo '$float' ?> </td>

</tr>

</table>

</main>

</body>

</html>