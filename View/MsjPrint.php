<?php
require_once("Controller/ToDoController.php");
class MsjPrint {

    public function msjBienvenidaUsuario(Usuario $usuario){
        print("#### Usuario: ".$usuario->getNombre()."\n");
    }

    public function msjBienvenida(){
        print("[#######] Bienvenido A Lista De Tareas [#######]\n");
        print("[#######] Ingresa Tu Nombre: ");
        $nombre = trim(fgets(STDIN));
        $ToDoController = new ToDoController();
        $ToDoController->index($nombre);
    }
    
    public function clearScreen(){
        system('clear');
    }

    public function msjFin() {
        print("#### Gracias \n");
    }
}

?>