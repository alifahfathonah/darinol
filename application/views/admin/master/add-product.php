
<script type="text/javascript">
function charcountupdate(str) {
var lng = str.length;
if(lng<=280){
    document.getElementById("charcount").innerHTML = lng + '/300';
}
else if(lng > 280 && lng <= 300){
  document.getElementById("charcount").innerHTML = '<font style="color:#808000">' + lng + '</font>/300';
}
else if(lng > 300){
  document.getElementById("charcount").innerHTML = '<font style="color:#ff0000">' + lng + '</font>/300';
}
}
</script>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Tambah Produk
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url($this->uri->segment(1).'/dashboard/')?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo base_url($this->uri->segment(1).'/master/manage-product')?>"><i class="fa fa-user"></i> Produk</a></li>
      <li class="active">Tambah Produk</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
      <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <div class="row">
                  <div class="col-md-2">
                    <a class="btn btn-primary " style="margin:10px 0 10px 10px" href="<?php echo base_url($this->uri->segment(1).'/master/manage-product/')?>" role="button">
                        <i class="fa fa-list fa-fw" ></i> Atur Produk
                      </a>
                  </div>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <?php echo form_open_multipart(''); ?>
                <div class="col-md-8">
                  <div class="form-group">
                    <label for="">Nama Produk*</label>
                    <input type="text" name="name_product" value="<?php echo set_value('name_product') ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="">Kategori Produk* (pisahkan dengan koma)</label>
                    <input type="text" name="product_category" value="<?php echo set_value('product_category') ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="">Alias URL* (contoh: laptop-asus-murah)</label>
                    <input type="text" name="alias_product" value="<?php echo set_value('alias_product') ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="shortDescription">Keterangan Singkat* (max 300 karakter)</label>
                    <textarea name="short_description" onkeyup="charcountupdate(this.value)" id="shortDescription" class="form-control" placeholder="Deskripsikan secara singkat padat dan jelas tentang produk anda." style="min-height:100px"><?php echo set_value('short_description') ?></textarea>
                    <span id=charcount>0/300</span>
                  </div>
                  <div class="form-group">
                    <label for="textarea">Keterangan</label>
                    <textarea name="description" id="textarea" placeholder="Deskripsikan secara singkat padat dan jelas tentang apa yang kamu ajarkan dikelasmu."><?php echo set_value('description') ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="stock">Status Stok*</label>
                    <?php
                    $options = array(
                      '' => 'Status Stok',
                      0 => 'Tersedia',
                      1 => 'Tidak Tersedia'
                    );
                    echo form_dropdown('status_stock',$options,set_value('status_stock'),'class="form-control"');
                     ?>
                  </div>
                  <div class="form-group">
                    <label for="stock">Produk Terlaris?*</label>
                    <?php
                    $options = array(
                      '' => 'Pilih',
                      0 => 'Tidak',
                      1 => 'Terlaris'
                    );
                    echo form_dropdown('product_featured',$options,set_value('product_featured'),'class="form-control"');
                     ?>
                  </div>
                  <div class="form-grop" style="margin-bottom:25px;">
                    <label for="imageClass">Gambar Thumbnail Produk</label>
                    <input id="imageClass" type="file" name="userfile" value="" class="form-control" accept="image/x-png,image/jpg,image/jpeg">
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                    <?php echo form_close('');
                    echo validation_errors();
                     ?>
                </div>

              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
        </div>
      </section>
</div>
