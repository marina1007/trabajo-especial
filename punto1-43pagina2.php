<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (checkdate($_REQUEST['dia'],$_REQUEST['mes'], $_REQUEST['anio']))
    echo "La fecha que ingreso es correcta ";
else 
    echo "La fecha que ingreso no es correcta";
?>

