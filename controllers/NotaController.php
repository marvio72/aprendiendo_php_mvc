<?php 

class NotaController {
    
    public function listar(){
        //Modelo
        require_once 'models/nota.php';

        //Logica accion del controlador
        $nota = new Nota();

        $notas = $nota->conseguirTodos('notas');
        
        //vista
        require_once 'views/nota/listar.phtml';
    }
    public function crear(){
        require_once 'models/nota.php';

        $nota = new Nota();
        $nota->setUsuario_id(1);
        $nota->setTitulo('Nota desde PHP MVC');
        $nota->setDescripcion('Descripción de mi nota');
        $guardar = $nota->guardar();

       //Como mostrar los errores en la base de datos.
        // echo $nota->db->error;
        // die();


        header("Location: index.php?controller=Nota&action=listar");
    }
    public function borrar(){
        
    }
}