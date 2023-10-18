<?php
   
      Class Controladorwsp{

        static public function ctrGrupos(){
            $tabla = "grupo_wsp";
            $respuesta = whatsapp::get_GruposWsp($tabla);
            return $respuesta;
        }
    }
?>