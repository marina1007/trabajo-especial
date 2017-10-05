<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$conexion=MYSQLI_connect("localhost","root","marina","base1") or
    die("Problemas con la conexión");
	
  MYSQLI_query($conexion,"insert into cursos(nombre_curso,codigo) values ('$_REQUEST[nombre_curso]','$_REQUEST[codigo]')") or
    die("Problemas en el select ".MYSQLI_ERROR($conexion));
  
  MYSQLI_close($conexion);

  echo "El curso fue dado de alta.";

?>
