<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <title>Ejercicio 16</title>
    </head>
    <body>
        <?php

        abstract class Trabajador {
          protected $nombre;
          protected $sueldo;
          public function __construct($nom)
          {
            $this->nombre=$nom;
          }
          public function imprimir()
          {
            echo 'Nombre:'.$this->nombre.'<br>';
            echo 'Sueldo:'.$this->sueldo.'<br>';
          }
          public abstract function calcularSueldo();
        }  

        class Empleado extends Trabajador {
          protected $horasTrabajadas;
          protected $valorHora;
          public function __construct($nom,$horas,$valor)
          {
            parent::__construct($nom);
            $this->horasTrabajadas=$horas;
            $this->valorHora=$valor;
          }
          public function calcularSueldo()
          {
            $this->sueldo=$this->horasTrabajadas*$this->valorHora;
          }
        }

        class Gerente extends Trabajador {
          protected $utilidades;
          public function __construct($nom,$uti)
          {
            parent::__construct($nom);
            $this->utilidades=$uti;
          }
          public function calcularSueldo()
          {
            $this->sueldo=$this->utilidades*0.10;
          }
        }

        $empleado1=new Empleado('Juan Carlos Toranzo',150,3.50);
        $empleado1->calcularSueldo();
        echo 'El sueldo del empleado<br>';
        $empleado1->imprimir();

        $gerente1=new Gerente('Diego Viani',1000000);
        $gerente1->calcularSueldo();
        echo 'El sueldo del gerente<br>';
        $gerente1->imprimir();
        ?>
    </body>
</html>

