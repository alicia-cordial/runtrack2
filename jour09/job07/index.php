<?php

$bdd = mysqli_connect("localhost", "root", "root", "jour08");
$requete = "SELECT SUM(superficie) FROM `etage` WHERE 1;";

$query = mysqli_query($bdd, $requete);

$i=0;

echo "<table>" ;
while ($result = mysqli_fetch_assoc($query)){
  if ($i == 0){
    foreach ($result as $key => $value){
      echo "<th>$key</th>";
    }
    $i++;
  }
  echo "<tr>";
  foreach ($result as $key => $value) {
    echo "<td>$value</td>";
  }
  echo "</tr>";
}

echo "</table>";

 ?>
 