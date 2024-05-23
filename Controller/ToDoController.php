<?php
require_once("View/MsjPrint.php");
require_once("Model/Usuario.php");

class ToDoController {

    public function __construct(){

    }

    public function index($nombre) {

        $mjsPrint = new MsjPrint();
        $usuario = new Usuario();

        if($nombre != null){
            $mjsPrint->clearScreen();
            $usuario->setNombre($nombre);
            $mjsPrint->msjBienvenidaUsuario($usuario);
        }else {
            $mjsPrint->msjFin();
        }

    }

}


?>