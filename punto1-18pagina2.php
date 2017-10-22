<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function verificPass($contras1,$contras2) {
    if ($contras1!=$contras2)
        echo "Las claves que ingreso son distintas";
}
verificPass($_REQUEST['contr1'], $_REQUEST['contr2']);
?>

