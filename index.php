<?php

    #se agrega el require para que pueda usarse el archivo y sus clases
    require("controlador/ctrplantilla.php");
    require("controlador/ctrRuta.php");

    require("controlador/ctrgruposwsp.php");
    require("modelos/modelo.gruposwsp.php");

    require("controlador/ctrCategorias.php");
    require("modelos/modelo.categorias.php");


    require("controlador/ctrAnuncios.php");
    require("modelos/modelo.anuncios.php");

    #se instancia la clase plantilla
    $plantilla = new Plantilla();
    
    #se ejecuta el metodo ctrplantilla, que manda a llamar
    $plantilla -> ctrPlantilla();

?>