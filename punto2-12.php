<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<html>
    <head>
        <title>Ejercicio 12</title>
    </head>
    <body>
        <?php
        class Persona {
        protected $nombre;
        protected $edad;
        public function cargarDatosPersonales($nom,$ed)
            {
                $this->nombre=$nom;
                $this->edad=$ed;
            }
         public function imprimirDatosPersonales(){
            echo 'Nombre:'.$this->nombre.'<br>';
            echo 'Edad:'.$this->edad.'<br>';
            }
           }

        class Empleado extends Persona{
            protected $sueldo;
            public function cargarSueldo($su)
            {
            $this->sueldo=$su;
           }
        public function imprimirSueldo(){
            echo 'Sueldo:'.$this->sueldo.'<br>';
            }
            }
            $empleado1=New Empleado();
            $empleado1->edad=34;
            ?>
    </body>
</html>

