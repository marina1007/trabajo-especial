<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<html>
    <head>
        <title>Ejercicio 11</title>
    </head>
    <body>
        <?php
        class Persona {
            protected $nombre;
            protected $edad;
            public function cargarDatosPersonales($nom,$ed){
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
                public function cargarSueldo($su){
            $this->sueldo=$su;
            }
        public function imprimirSueldo()
                                    {
            echo 'Sueldo:'.$this->sueldo.'<br>';
    }
}

$persona1=new Persona();
$persona1->cargarDatosPersonales('Viani Diego',33);
echo 'Datos personales:<br>';
$persona1->imprimirDatosPersonales();
$empleado1=New Empleado();
$empleado1->cargarDatosPersonales('Toranzo Marina',36);
$empleado1->cargarSueldo(2400);
echo 'Datos personales y sueldo del empleado:<br>';
$empleado1->imprimirDatosPersonales();
$empleado1->imprimirSueldo();
?>
    </body>
</html>
