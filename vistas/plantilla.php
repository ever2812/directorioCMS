<?php
    $ruta = Ruta::ctrRuta();  

    $grupos = Controladorwsp::ctrGrupos();

    $categorias = Controlador_cat::ctrCategorias();


    $anuncios = Controlador_Anuncios::ctrAnuncios();
    var_dump($anuncios);
?>

<!DOCTYPE html>
<html lang="es">



            <!-- se incluye el modulo de categorias de grupos -->
            <?php  include "modulos/cabecera.php"; ?>
          


<body class="dark-scheme de-grey">
    <div id="wrapper">


        <!-- Seccion del contenido principal -->
        <?php
            include "modulos/inicio.php";
        ?>
    

        <a href="#" id="back-to-top"></a>
        
        <!-- Seccion footer -->
        <?php
                include "modulos/footer.php";
        ?>
     
        
    </div>
    
    <!-- Javascript Files
    ================================================== -->
    <script src="<?php echo $ruta; ?>js/jquery.min.js"></script>
    <script src="<?php echo $ruta; ?>js/bootstrap.min.js"></script>
    <script src="<?php echo $ruta; ?>js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo $ruta; ?>js/wow.min.js"></script>
    <script src="<?php echo $ruta; ?>js/jquery.isotope.min.js"></script>
    <script src="<?php echo $ruta; ?>js/easing.js"></script>
    <script src="<?php echo $ruta; ?>js/owl.carousel.js"></script>
    <script src="<?php echo $ruta; ?>js/validation.js"></script>
    <script src="<?php echo $ruta; ?>js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo $ruta; ?>js/enquire.min.js"></script>
    <script src="<?php echo $ruta; ?>js/jquery.plugin.js"></script>
    <script src="<?php echo $ruta; ?>js/jquery.countTo.js"></script>
    <script src="<?php echo $ruta; ?>js/jquery.countdown.js"></script>
    <script src="<?php echo $ruta; ?>js/jquery.lazy.min.js"></script>
    <script src="<?php echo $ruta; ?>js/jquery.lazy.plugins.min.js"></script>
    <script src="<?php echo $ruta; ?>js/designesia.js"></script>


</body>


<!-- Mirrored from gigaland.io/03_grey-index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Oct 2021 00:17:29 GMT -->
</html>