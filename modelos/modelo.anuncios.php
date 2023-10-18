<?php

Class mdlAnuncios{  

    static public function mdlGet_Anuncios($tabla){
        
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