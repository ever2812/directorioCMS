<?php
    require_once "conexion.php";

    Class Categorias{
        
        static public function get_categorias($tabla){

            //prepara la consulta
            $stmt = Conexion::conectar()->prepare("SELECT *FROM $tabla");
            //ejecuta la consulta
            $stmt -> execute();
            //retorna el array con  la informacion
            return $stmt -> fetchAll();

            $stmt -> close();
            $stmt = null;

        }

    }

?>