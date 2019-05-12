<?php 
require_once 'parametros.php';
class database{
    public static function conectar(){
        $conexion = new mysqli(SERVIDOR, USUARIO, PASS, BDATOS);
        $conexion->query("SET NAMES 'utf8'");

        return $conexion;
    }
}