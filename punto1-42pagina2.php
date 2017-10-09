<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <title> Ejercicio 42 pagina 2</title>
    </head>
    <body>
        <?php
        $ar= fopen("datos.txt","a")or
        die("Hay probemas en la creacion");
fputs($ar,$_REQUEST['nombre']);
fputs($ar,"\n");
fputs($ar,$_REQUEST['queja']);
fputs($ar,"\n");
fputs($ar,"Fecha y hora: ");
$fecha=date("d/m/y");
fputs($ar, $fecha);
fputs($ar, " ");
$hora=date("H:i:s");
fputs($ar, $hora);
fputs($ar, "\n");
fputs($ar,"--------------\n");
fclose($ar);
echo "Los datos se cargaron. ";

    ?>
    </body>
</html>
