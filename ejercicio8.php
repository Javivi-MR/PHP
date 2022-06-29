<?php

    if($_POST)
    {
        $A = $_POST['A'];   //obtenemos el valor introducido en POST para A
        $B = $_POST['B'];   //obtenemos el valor introducido en POST para B
        $C = $A + $B;       //operador suma
        $D = $A - $B;       //operador resta
        $E = $A * $B;       //operador multiplicacion
        $F = $A / $B;       //operador division
        $G = $A % $B;       //operador modulo
        echo "La suma de A y B da ".$C."<br/>"."La resta de A y B da ".$D."<br/>"."La multiplicacion de A y B da ".$E."<br/>"."La Division de A y B da ".$F."<br/>"."El modulo de A y B da ".$G."<br/>";
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
    
    <form action="Ejercicio8.php" method="post">
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