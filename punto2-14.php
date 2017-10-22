<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <title>Ejercicio 14</title>
    </head>
    <body>
        <?php
        class Persona {
          protected $nombre;
          protected $edad;
          public function __construct($nom,$ed)
          {
            $this->nombre=$nom;
            $this->edad=$ed;
          }
          public function imprimirDatosPersonales()
          {
            echo 'Nombre:'.$this->nombre.'<br>';
            echo 'Edad:'.$this->edad.'<br>';
          }
    }

        class Empleado extends Persona{
          protected $sueldo;
          public function __construct($nom,$ed,$su)
          {
            parent::__construct($nom,$ed);
            $this->sueldo=$su;
          }
          public function imprimirSueldo()
          {
            echo 'Sueldo:'.$this->sueldo.'<br>';
          }
        }

        $persona1=new Persona('Quiroga Benjamin',24);
        echo 'Datos personales de la persona:<br>';
        $persona1->imprimirDatosPersonales();
        $empleado1=New Empleado('Toranzo Gabriela',30,2400);
        echo 'Datos personales y sueldo del empleado:<br>';
        $empleado1->imprimirDatosPersonales();
        $empleado1->imprimirSueldo();
        ?>
    </body>
</html>

