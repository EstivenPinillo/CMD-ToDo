<?php
require_once("Controller/ToDoController.php");
class MsjPrint {

    public function msjBienvenidaUsuario(Usuario $usuario){
        print("[#######] ".$usuario->getNombre()."\n");
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

    public function msjMenu(){
        print("[#######] Menu Lista De Tareas [#######] \n");
        print("[#######] 1. Crear Lista \n");
        print("[#######] 2. Ver Lista \n");
        print("[#######] 2. Modificar Lista \n");
        print("[#######] 3. Eliminar lista \n");
        print("[#######] Inserte la opcion: ");
        return trim(fgets(STDIN));
    }

    public function msjFin() {
        print("[#######] Gracias [#######]\n");
    }
    
}

?>