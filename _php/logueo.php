<?php
        session_start();        
        include "../configuracion/configuracion.php";	
        include "conexion.php";
	include "Usuario.php";
        $comunicacion=new Usuario();
        extract($_POST);
	$usuario=$comunicacion->loguearse($usuario, $pass);
	if($usuario!=NULL){
		$_SESSION["tipo"]=$usuario;
		header("location:".RUTA."paginas/".$usuario.".php");

	}
	else{
                $_SESSION["mensajelogueo"]="Usuario y/o contraseña equivocada";
		header("location:".RUTA."index.php");
	}
         
         
?>
