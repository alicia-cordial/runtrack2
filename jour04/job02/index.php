
<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset= "utf-8">
        <title>TABLEAU</title>
    </head>


        <body>

            <main>
<section>

    <form method="get" action="index.php">


        <label for= "vorname">PRENOM</label> 
        <input type="text" name="vorname" id="vorname"><br />
    
        <label for= "name">NOM</label> 
        <input type="text" name="name" id="name"><br />
 
        <label for= "password">PASSWORD</label> 
        <input type="password" name="password" id="password"><br />
  
        <input type="submit" name="submit" value="submit"><br />

    </form>
</section>

<section>
            <table>

<thead>
    <tr>
        <th>Arguments</th>
        <th>Valeurs</th>
    </tr>
</thead>


<tbody>
    <tr>
       <td> 
            <?php foreach ($_GET as $element => $values)
            {
                if (!empty($_GET))
                {
                    echo $_GET[$element] . '<br>';
                }
             }

            ?>
       </td>

        <td>
            <?php foreach($_GET as $element => $values)
                {
                    if(!empty($element))
                    {
                        echo $element . '<br>';
                    }
                }
            ?>
        </td>
    </tr>

</tbody>


            </table>
</section>
        </main>

    </body>

</html>