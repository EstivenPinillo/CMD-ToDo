<?php
require_once("View/MsjPrint.php");
require_once("Model/Usuario.php");

class ToDoController {

    public function __construct(){

    }

    public function index($nombre) {

        $mjsPrint = new MsjPrint();
        $usuario = new Usuario();

        if($nombre){
            $mjsPrint->clearScreen();
            $usuario->setNombre($nombre);
            $mjsPrint->msjBienvenidaUsuario($usuario);
            $this->menu();
        }else {
            $mjsPrint->msjFin();
        }

    }

    public function menu(){
        $mjsPrint = new MsjPrint();
        $opcion = $mjsPrint->msjMenu();
        
        switch ($opcion) {

            case 1:
                print("Opcion 1");
                break;

            case 2:
                print("Opcion 2");
                break;
            
            case 3:
                print("Opcion 3");
                break;

            case 4:
                print("Opcion 4");
                break;

            default:
                print("No exite esa opcion.");
                break;
        }

    }

}


?>