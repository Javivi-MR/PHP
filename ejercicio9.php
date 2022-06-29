<?php

    if($_POST)
    {
        $A = $_POST['A'];   //obtenemos el valor introducido en POST para A
        $B = $_POST['B'];   //obtenemos el valor introducido en POST para B

        if ($A > $B)
        {
            echo "A es mayor que B";
        }
        if ($A < $B)
        {
            echo "A es menor que B";
        }
        if ($A == $B)
        {
            echo "A es igual que B";
        }
        //Distinto
        /*
        if ($A != $B)
        {
            echo "A es mayor que B";
        }
        */
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritmeticos</title>   <!-- Ponemos el titulo -->
</head>
<body>
    
    <form action="ejercicio9.php" method="post">
        Valor A:
        <input type="text" name="A" id="">  <!-- Introducir valor para A -->
        <br/>
        Valor B:
        <input type="text" name="B" id="">  <!-- Introducir valor para B -->
        <br/>
        <input type="submit" value="Calcular">  <!-- Boton para enviar los datos -->

    </form>

</body>
</html>