<?php
require_once("Model/Usuario.php");
require_once("View/Bienvenido.php");

$usuario = new Usuario();
$bienvenido = new Bienvenido();
$bienvenido->msjBienvenida();
$nombre = trim(fgets(STDIN));

if($nombre != null){
    $bienvenido->clearScreen();
    $usuario->setNombre($nombre);
    $bienvenido->msjBienvenidaUsuario($usuario);
}




?>