<?php

class Bienvenido {

    public function msjBienvenidaUsuario(Usuario $usuario){
        print("#### Usuario: ".$usuario->getNombre()."\n");
    }

    public function msjBienvenida(){
        print("#### Bienvenido a Listas De Tareas \n");
        print("#### Ingresa tu nombre: ");
    }

    public function clearScreen(){
        system('clear');
    }

}

?>