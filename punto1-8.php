<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo " Esta es la tabla del dos con un bucle for";
echo "<br>";

for($f=0;$f<=20;$f=$f+2)
{
    echo "$f";
    echo "~";
    
}
echo "<br>";

echo " Esta es la tabla del dos con un bucle while ";
echo "<br>";
$f=0;

while ($f<=20){
    echo "$f";
    echo "~";
        $f=$f+2;
}
echo "<br>";

echo " Esta es la tabla del dos con un bucle do/while ";
echo "<br>";

$f=0;
do{
    echo "$f";
    echo "~";
    $f=$f+2; 
    
}while($f<=20);