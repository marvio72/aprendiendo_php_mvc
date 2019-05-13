<?php 

require_once 'ModeloBase.php';

class Nota extends ModeloBase{
    public $nombre;
    public $contenido;

    public function __construct(){
        parent::__construct();
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }

    public function getContenido()
    {
        return $this->contenido;
    }

    public function setContenido($contenido)
    {
        $this->contenido = $contenido;
        return $this;
    }
    public function conseguirTodos()
    {
        return "Sacando todos los usuarios";
    }
}