<?php 
// El controller es especificamente para realizar las acciones.
// En la carpeta views se crea subcarpeta usuarios, y dentro de esta un archivo por cada acción
class UsuarioController {
    public function mostrarTodos(){
        require_once 'models/usuario.php';

        $usuario = new Usuario();

        $todos_los_usuarios = $usuario->conseguirTodos();
        require_once 'views/usuarios/mostrar-todos.php';
    }

    public function crear(){
        require_once 'views/usuarios/crear.php';
    }
}