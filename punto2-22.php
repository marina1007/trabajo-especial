<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <title>Pruebas</title>
    </head>
    <body>

        <?php
        class Calculadora {
          public static function sumar($v1,$v2)
          {
            return $v1+$v2;
          }
          public static function restar($v1,$v2)
          {
            return $v1-$v2;
          }
          public static function multiplicar($v1,$v2)
          {
            return $v1*$v2;
          }
          public static function dividir($v1,$v2)
          {
            return $v1/$v2;
          }
        }

        $x1=25;
        $x2=8;
        echo "La suma de $x1 y $x2 es:".Calculadora::sumar($x1,$x2);
        echo '<br>';
        echo "La diferencia de $x1 y $x2 es:".Calculadora::restar($x1,$x2);
        echo '<br>';
        echo "La multiplicacion de $x1 y $x2 es:".Calculadora::multiplicar($x1,$x2);
        echo '<br>';
        echo "La division de $x1 y $x2 es:".Calculadora::dividir($x1,$x2);
        ?>

    </body>
</html>


