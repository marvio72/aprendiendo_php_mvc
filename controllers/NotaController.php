<?php 

class NotaController {
    
    public function listar(){
        //Modelo
        require_once 'models/nota.php';

        //Logica accion del controlador
        $nota = new Nota();
        $nota->setNombre('Hola');
        $nota->setContenido('Hola Mundo PHP MVC');

        //vista
        require_once 'views/nota/listar.phtml';
    }
    public function crear(){

    }
    public function borrar(){
        
    }
}