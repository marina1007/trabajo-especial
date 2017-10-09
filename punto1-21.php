<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$conexion= mysqli_connect("localhost","root","marina","base1")or
die("Problemas con la conexion a la base de datos");

$registro= mysqli_query($conexion, "select nombre_curso,codigo from cursos")or
     die("problemas en el select: ".mysqli_error($conexion));

while ($reg= mysqli_fetch_array($registro))
{
    echo "Codigo: ".$reg['codigo']."<br>";
    echo "Nombre del curso: ".$reg['nombre_curso']."<br>";
    echo "<hr>";
}
mysqli_close($conexion);
        
