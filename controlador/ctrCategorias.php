<?php
    Class Controlador_cat{

        static public function ctrCategorias(){
            $tabla="categorias";
            $respuesta = Categorias::get_Categorias($tabla);
            return $respuesta;
        }

    }

?>

