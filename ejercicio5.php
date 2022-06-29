<?php

    if($_POST)
    {
            $txtnombre = $_POST['txtnombre'];
            $txtapellido = $_POST['txtapellido'];
            echo "Hola ".$txtnombre." ".$txtapellido;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio5.php" method="post"> <!-- Realizar un metodo post en ejercicio 2  -->
        Nombre:
        <input type="text" name="txtnombre" id="">  <!-- Va a recibir una entrada de tipo texto y debe guardarlo en txtnombre  -->
        <br/>   <!-- Salto de Linea   -->
        Apellido:
        <input type="text" name="txtapellido" id="">  <!-- Va a recibir una entrada de tipo texto y debe guardarlo en txtnombre  -->
        <br/>   <!-- Salto de Linea   -->
        <input type="submit" name="submit" value="Enviar">  <!-- Metodo para poder enviar los datos || tipo "submit" name "submit" valor "Enviar"  -->
</body>
</html>