<div class="vid-banner">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1>Produk</h1>
      </div>
    </div>
  </div>
</div>
<div class="vid-article">
  <div class="container">
    <div class="row">
      <div class="col-12 text-left col-md-6">
        <h2>{name_product}</h2>
      </div>
      <div class="col-12 text-right col-md-3 offset-md-3">
        <form method="POST" action="{base_url}produk">
          <div class="input-group margin-bottom-sm">
            <span class="input-group-addon"><i class="fa fa-search fa-fw"></i></span>
            <input class="form-control" type="text" placeholder="Cari Produk" name="search">
          </div>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-12">
        <div style="border-top:2px solid #00C0FF;height:5px;width:80px;">&nbsp;</div>
        <span><small>Dipublish oleh {full_name} Ditulis pada {date_product} di {category}</small></span>
      </div>
      <div class="col-md-3 col-12">
        <div class="text-right d-none d-sm-block">
          <a href="{base_url}">Home</a> &raquo; <a href="{base_url}produk">Produk</a>
        </div>
        <div class="d-block d-sm-none">
          <a href="{base_url}">Home</a> &raquo; <a href="{base_url}produk">Produk</a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-9 col-12">
        <div class="row row-article" style="margin-bottom:25px;">
          <div class="col-12">
            <img src="{image_featured}" class="img-fluid" alt="{name_product}" style="margin-bottom:15px;">
            <div class="row image-product" style="margin-bottom:15px;">
              {gallery}
              <div class="col-6 col-md-2">
                <a href="<?php echo base_url('') ?>{image_product_gallery}" title="Detail: {caption}">
                <div style="background:url(<?php echo base_url('') ?>{image_product_gallery});background-size:cover;width:100%;height:100px;background-position:center;"></div>
                </a>
              </div>
              {/gallery}
            </div>
            {description}
          </div>
        </div><!-- ./row-article-->
        <div class="row">
          <div class="col-12 ">
            <h3>Produk Lainnya</h3>
          </div>
        </div>
        <div class="row row-product">
          {another_product}
          <div class="col-md-4 col-6">
            <a href="<?php echo base_url('produk/detail/') ?>{id_product}/{alias_product}" title="Lihat Detail Produk">
            <div style="background:url(<?php echo base_url() ?>{image_featured});width:100%;height:200px;background-size:cover;background-position:center;margin-bottom:15px;" class="img-product"></div>
            </a>
            <h3>{name_product}</h3>
          </div>
          {/another_product}
        </div><!-- ./row-article-->
      </div>
      <div class="col-md-3 col-12">
        <h3 style="margin-top:20px">Kategori</h3>
        <ul class="vid-sidebar">
          {category_list}
          <li><a href="<?php echo base_url('artikel/kategori/') ?>{id_category}/{alias_category}">{category}</a></li>
          {/category_list}
        </ul>
      </div>
    </div>
  </div>
</div><!-- ./ vid-article -->
