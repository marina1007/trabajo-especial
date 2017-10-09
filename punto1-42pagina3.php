<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <title>Ejercicio 42 pagina3</title>
    </head>
    <body>
        <?php
        $ar=fopen("datos.txt","r") or
        die("No se logro abrir el archivo");
while (!feof($ar)){
    $linea= fgets($ar);
    $lineasalto= nl2br($linea);
    echo $lineasalto;
}
fclose($ar);
?>
    </body>
    
</html>

