<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$conexion=MYSQLI_connect("localhost","root","marina","base1") or
    die("Problemas con la conexión");


MYSQLI_query($conexion,"select codigo_curso,nombre_alumno,codigo_alumno from cursos where nombre_alumno='$_REQUEST[nombre_alumno]'") or
    die("Problemas en el select ".MYSQLI_ERROR($conexion));


$cant=0;
while ($reg= mysqli_fetch_array($registros)){
    
    echo "Nombre: ".$reg['nombre_alumno']."<br>";
    echo "Curso: ";
    switch ($reg['codigo_curso']) {
        case 1: echo "java";
            break;
        case 2: echo "php";
            break;
        case 3: echo "JavaScript";
            break;
        
    }
    $cant++;
    echo "<br>";
}
{
    echo "No hay alumnos con ese nombre";
}
mysqli_close($conexion);
        
