<section id="section-text" class="no-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="style-2">Tags/Etiquetas </h2>            
            </div>
            <div class="col-lg-6 col-md-6 mb-sm-30">
                <div class="feature-box f-boxed style-3">

                    <?php foreach ($categorias as $key => $value) {      ?>     
                
                        <a href="<?php   echo $ruta; ?><?php echo $value["cat_nom"]; ?>" style="color:#fff;font-weight:500;padding:10px;margin:3px;background-color:green;border-radius:9px; float:left"> <?php  echo $value["cat_nom"]; ?>                    
                        </a>

                    <?php   }  ?>
                </div>
            </div>
        </div>
    </div>

</section>