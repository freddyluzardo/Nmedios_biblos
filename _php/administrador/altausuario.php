<?php
        session_start();
        include "../../configuracion/configuracion.php";	
        include "../conexion.php";
        include "Administrador.php";
        $admin=new Administrador();
        extract($_POST);
        $admin->agregarUsuario($documento, $nombre, $apellido, $ciudad,$direccion,$nro_apto,$nro_puerta,$mail);
        header("Location: ../../paginas/administrador.php?pag=a_s")
        
?>

