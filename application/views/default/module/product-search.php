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
        <h2>Cari Produk : "{search}"</h2>
      </div>
      <div class="col-12 text-right col-md-3 offset-md-3">
        <form method="POST" action="">
          <div class="input-group margin-bottom-sm">
            <span class="input-group-addon"><i class="fa fa-search fa-fw"></i></span>
            <input class="form-control" type="text" placeholder="Cari Produk" name="search" value="{search}">
          </div>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div style="border-top:2px solid #00C0FF;height:5px;width:80px;">&nbsp;</div>
      </div>
    </div>
    <div class="row row-article">
    {product_list}
      <div class="col-md-3 col-6" style="margin-top:10px">
        <a href="<?php echo base_url('produk/detail/') ?>{id_product}/{alias_product}" title="Lihat Detail Produk">
        <div style="background:url(<?php echo base_url() ?>{image_featured});width:100%;height:200px;background-size:cover;background-position:center;margin-bottom:15px;" class="img-product"></div>
        </a>
        <h3>{name_product}</h3>
      </div>
    {/product_list}
    </div>
  </div>
</div><!-- ./ vid-article -->
