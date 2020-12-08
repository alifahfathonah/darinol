
<div class="vid-banner">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1>Artikel</h1>
      </div>
    </div>
  </div>
</div>
<div class="vid-article">
  <div class="container">
    <div class="row">
      <div class="col-12 text-left col-md-6">
        <h2>Cari Artikel: "{search}"</h2>
      </div>
      <div class="col-12 text-right col-md-3 offset-md-3">
        <form method="POST" action="">
          <div class="input-group margin-bottom-sm">
            <span class="input-group-addon"><i class="fa fa-search fa-fw"></i></span>
            <input class="form-control" type="text" placeholder="Cari Artikel" name="search" value="{search}">
          </div>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div style="border-top:2px solid #00C0FF;height:5px;width:80px;">&nbsp;</div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-9 col-12">
        <div class="row row-article">

          <div class="col-6">
            <h3>"{search}" Tidak ditemukan</h3>
          </div>
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
