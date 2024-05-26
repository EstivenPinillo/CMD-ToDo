<?php
require_once("Controller/TareaController.php");
class MsjPrint {

    public function msjBienvenidaUsuario(Usuario $usuario){
        print("[+++++++]  ".$usuario->getNombre()."\n");
    }

    public function msjBienvenida(){
        print("[#######] Bienvenido A Lista De Tareas [#######]\n");
        print("[#######] Ingresa Tu Nombre: ");
        $nombre = trim(fgets(STDIN));
        $tareaController = new TareaController();
        $tareaController->index($nombre);
    }
    
    public function clearScreen(){
        system('clear');
    }

    public function msjMenu(){
        print("[#######] Opciones del Menu [#######] \n");
        print("[*******] 1. Crear tarea \n");
        print("[*******] 2. Ver listas \n");
        print("[*******] 2. Modificar Lista \n");
        print("[*******] 3. Eliminar lista \n");
        print("[*******] Seleccione una de las opcion: ");
        return trim(fgets(STDIN));
    }

    public function msjFin() {
        print("[#######] Gracias [#######]\n");
    }
    
    public function msjCrearTareaNombre() {
        print("[#######] Nombre de la tarea [#######] \n");
        print("[*******] ");
        $nombreTarea = trim(fgets(STDIN));
    }

    public function msjCrearTareaDescripcion() {
        print("[#######] Descripcion de la tarea [#######] \n");
        print("[*******] ");
        $descripcionTarea = trim(fgets(STDIN));
    }

}

?>