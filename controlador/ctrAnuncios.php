<?php

Class Controlador_Anuncios{

    static public function ctrAnuncios(){
        $tabla="anuncios";

        $respuesta = mdlAnuncios::mdlGet_Anuncios($tabla);

        return $respuesta;
    }

}


?>