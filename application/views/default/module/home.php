
<div id="carouselExampleIndicators" class="carousel slide vid-carousel" data-ride="carousel">
 <ol class="carousel-indicators">
   <?php if($slider_list != FALSE){
     $i = 0;
     foreach ($slider_list as $rows) {
       ?>
       <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>" <?php if($i == 0) echo "class='active'"; ?>></li>
       <?php
       $i++;
     }
   } ?>
 </ol>
 <div class="carousel-inner">
   <?php if($slider_list != FALSE){
     $i = 1;
     foreach ($slider_list as $rows) {
       ?>
       <div class="carousel-item <?php if($i == 1) echo "active"; ?>">
         <a href="<?php echo $rows->url_slider ?>">
         <div style="background:url(<?php echo base_url($rows->image_slider) ?>);width:100%;height:500px;background-size:cover;background-position:center;"></div>
        </a>
       </div>
       <?php
       $i++;
     }
   } ?>
 </div>
 <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
   <span class="sr-only">Sebelumnya</span>
 </a>
 <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
   <span class="carousel-control-next-icon" aria-hidden="true"></span>
   <span class="sr-only">Berikutnya</span>
 </a>
</div><!-- ./ carousel -->
<div class="vid-article">
 <div class="container">
   <div class="row">
     <div class="col-12 text-left">
       <h2>Artikel</h2>
     </div>
   </div>
   <div class="row">
     <div class="col-12">
       <div style="border-top:2px solid #00C0FF;height:5px;width:80px;">&nbsp;</div>
     </div>
   </div>
   <div class="row row-article">
     <div class="col-md-3 col-6">
       <a href="detail-article.html" title="Lihat Detail Artikel">
       <div style="background:url(<?php echo base_url('asset/images/slider1.jpg') ?>);width:100%;height:200px;background-size:cover;background-position:center;margin-bottom:15px;" class="img-product"></div>
       </a>
       <h3>Mengenal Laptop Ergonomis</h3>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
     </div>
     <div class="col-md-3 col-6">
       <a href="detail-article.html" title="Lihat Detail Artikel">
       <div style="background:url(<?php echo base_url('asset/images/slider2.jpg') ?>);width:100%;height:200px;background-size:cover;background-position:center;margin-bottom:15px;" class="img-product"></div>
       </a>
       <h3>Kemudahan belajar dengan Tablet Advan</h3>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
     </div>
     <div class="col-md-3 col-6">
       <a href="detail-article.html" title="Lihat Detail Artikel">
       <div style="background:url(<?php echo base_url('asset/images/slider3.jpg') ?>);width:100%;height:200px;background-size:cover;background-position:center;margin-bottom:15px;" class="img-product"></div>
       </a>
       <h3>Tips Mencari Tablet Murah</h3>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
     </div>
     <div class="col-md-3 col-6">
       <a href="detail-article.html" title="Lihat Detail Artikel">
       <div style="background:url(<?php echo base_url('asset/images/slider4.jpg') ?>);width:100%;height:200px;background-size:cover;background-position:center;margin-bottom:15px;" class="img-product"></div>
       </a>
       <h3>Tantangan E-learning di era pandemi</h3>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
     </div>
   </div>
 </div>
</div><!-- ./ vid-article -->
<div class="vid-product">
 <div class="container">
   <div class="row">
     <div class="col-md-4 col-12">
       <h2>Produk Baru</h2>
       <div class="row">
         <div class="col-12">
           <div style="border-top:2px solid #00C0FF;height:5px;width:80px;margin-bottom:25px;">&nbsp;</div>
         </div>
       </div>
       {product_list}
       <div class="row row-product">
         <div class="col-md-4 col-12">
           <a href="<?php echo base_url('produk/detail/') ?>{id_product}/{alias_product}" title="Lihat Detail Produk">
           <img src="<?php echo base_url() ?>{image_featured}" alt="laptop asus" class="img-fluid" alt="{name_product}">
           </a>
         </div>
         <div class="col-md-8 col-12">
           <h3>{name_product}</h3>
           <p>{short_description}</p>
         </div>
       </div><!-- ./row-product-->
       {/product_list}
     </div>
     <div class="col-md-8 col-12">
       <h2>Produk Terlaris</h2>
       <div class="row">
         <div class="col-12">
           <div style="border-top:2px solid #00C0FF;height:5px;width:80px;margin-bottom:25px;">&nbsp;</div>
         </div>
       </div>
       <div class="row row-featured-product">
         {product_featured}
         <div class="col-md-3 col-6">
           <a href="<?php echo base_url('produk/detail/') ?>{id_product}/{alias_product}" title="Lihat Detail Produk">
           <img src="<?php echo base_url() ?>{image_featured}" alt="" class="img-fluid" alt="{name_product}">
           <h3>{name_product}</h3>
           </a>
         </div>
         {/product_featured}
       </div>
     </div>
   </div>
 </div>
</div><!-- ./ vid-product -->
<?php
$input = "admin";
$enc = md5("ageiw234t94Fw".$input."013F3z2w");
//echo $enc;
 ?>
