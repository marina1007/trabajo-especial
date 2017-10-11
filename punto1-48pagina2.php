<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <title>Alta rubro</title>
    </head>
    <body>
        <?php
        $mysql=new mysqli("localhost","root","marina","base3");
        if ($mysql->connect_error)
            die ('Problemas con la conexion a la base de datos');
        $mysql->query("insert into rubro(description) values ('$_REQUEST[description]')") or
        die($mysql->error);
        
        $mysql->close();
        
        echo "El nuevo rubro fue guardado";
        ?>
    </body>
</html>

