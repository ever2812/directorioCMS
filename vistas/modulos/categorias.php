<div id="item-carousel-big" class="owl-carousel wow fadeIn">

<?php 
     # code...
    foreach ($categorias as $key => $value) {         
?>

    <div class="nft_pic">                            
        <a href="03_grey-item-details.html">
            <span class="nft_pic_info">
                <span class="nft_pic_title"><?php echo $value["cat_nom"]; ?></span>
                    <span class="nft_pic_by"><?php echo $value["cat_desc"]; ?></span>
            </span>
        </a>
        <div class="nft_pic_wrap">
            <img src="<?php echo $value["cat_foto"]; ?>" class="lazy img-fluid" alt="<?php echo $value["cat_desc"]; ?>">
        </div>
    </div>   
<?php    }  ?>
</div>