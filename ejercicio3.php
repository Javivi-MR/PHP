<?php
    if($_GET)
    {
        $nombre = $_GET['nombre'];  //$nombre = lo que valga nombre en html (Basicamente lo que introduzcamos)
        echo "Hola ".$nombre;   //printeo de Hola concatenandose el nombre
    }
?>