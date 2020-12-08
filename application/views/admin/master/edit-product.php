
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
      <li class="active">Ubah Produk</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
        <div class="nav-tabs-custom">
          <!-- Tabs within a box -->
          <ul class="nav nav-tabs pull-left">
            <li class="active"><a href="#detail-product" data-toggle="tab" aria-expanded="false">Detail Produk</a></li>
            <li class=""><a href="#image-product" data-toggle="tab" aria-expanded="true">Gambar Produk</a></li>
          </ul>
          <div class="tab-content no-padding">
            <!-- Morris chart - Sales -->
            <div class="chart tab-pane active" id="detail-product" style="position: relative; ">
              <div class="row">
                  <div class="col-xs-12">
                    <div class="">
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
                            <input type="text" name="name_product" value="<?php echo $result['name_product'] ?>" class="form-control">
                          </div>
                          <div class="form-group">
                            <label for="">Kategori Produk* (pisahkan dengan koma)</label>
                            <input type="text" name="product_category" value="<?php echo $result['product_category'] ?>" class="form-control">
                          </div>
                          <div class="form-group">
                            <label for="">Alias URL* (contoh: laptop-asus-murah)</label>
                            <input type="text" name="alias_product" value="<?php echo $result['alias_product'] ?>" class="form-control">
                          </div>
                          <div class="form-group">
                            <label for="shortDescription">Keterangan Singkat* (max 300 karakter)</label>
                            <textarea name="short_description" onkeyup="charcountupdate(this.value)" id="shortDescription" class="form-control" placeholder="Deskripsikan secara singkat padat dan jelas tentang produk anda." style="min-height:100px"><?php echo $result['short_description'] ?></textarea>
                            <span id=charcount>0/300</span>
                          </div>
                          <div class="form-group">
                            <label for="textarea">Keterangan</label>
                            <textarea name="description" id="textarea" placeholder="Deskripsikan secara singkat padat dan jelas tentang apa yang kamu ajarkan dikelasmu."><?php echo $result['description'] ?></textarea>
                          </div>
                          <div class="form-group">
                            <label for="stock">Status Stok*</label>
                            <?php
                            $options = array(
                              '' => 'Status Stok',
                              0 => 'Tersedia',
                              1 => 'Tidak Tersedia'
                            );
                            echo form_dropdown('status_stock',$options,$result['status_stock'],'class="form-control"');
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
                            echo form_dropdown('product_featured',$options,$result['product_featured'],'class="form-control"');
                             ?>
                          </div>
                          <div class="form-grop" style="margin-bottom:25px;">
                            <label for="imageClass">Gambar Thumbnail Produk</label><br>
                            <?php
                              if($result['image_featured'] != ""){
                                ?>
                                <img src="<?php echo base_url($result['image_featured']) ?>" alt="" style="height:150px;">
                                <?php
                              }
                              else{
                                ?>
                                <i class="fa fa-image fa-5x"></i>
                                <?php
                              }
                             ?>
                            <input id="imageClass" type="file" name="userfile" value="" class="form-control" accept="image/x-png,image/jpg,image/jpeg">
                          </div>
                          <div class="form-group">
                            <button type="submit" class="btn btn-primary" name="upload">Simpan</button>
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
            </div>
            <div class="chart tab-pane" id="image-product" style="position: relative;">
              <div class="row">
                <div class="col-xs-12">
                  <div class="box-header">
                    <div class="row">
                      <div class="col-md-2">
                        <a class="btn btn-primary " style="margin:10px 0 10px 10px" href="<?php echo base_url($this->uri->segment(1).'/master/manage-product/')?>" role="button">
                            <i class="fa fa-list fa-fw" ></i> Atur Produk
                          </a>
                      </div>
                    </div>
                  </div>
                  <div class="box-body">
                    <?php echo form_open_multipart(base_url($this->uri->segment(1).'/master/save-gallery/'.$this->uri->segment(4))); ?>
                    <table class="table" id="product-gallery">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Gambar</th>
                          <th>Keterangan</th>
                          <th>Urutan</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody id="tbody">
                        <?php
                          if($product_gallery != FALSE){
                            $i = 1;
                            foreach ($product_gallery as $rows) {
                              ?>
                              <tr>
                                <td><?php echo $i; ?>
                                  <input type="hidden" name="id_product_gallery[]" value="<?php echo $rows->id_product_gallery ?>">
                                </td>
                                <td><img src="<?php echo base_url($rows->image_product_gallery) ?>" alt="" style="height:50px;"> </td>
                                <td><input type="text" name="caption_existing[]" value="<?php echo $rows->caption ?>" style="width:200px"></td>
                                <td><input type="number" name="sort_order_existing[]" value="<?php echo $rows->sort_order ?>" style="width:50px;" min=1></td>
                                <td>
                                  <a href="<?php echo base_url($this->uri->segment(1).'/master/delete-product-gallery/'.$rows->id_product_gallery) ?>" onclick="return confirm('Apakah anda yakin ingin menghapus gambar ini?')"><i class="fa fa-trash"></i></a>
                                </td>
                              </tr>
                              <?php
                              $i++;
                            }
                          }
                        ?>
                      </tbody>
                      <tbody>
                        <tr>
                          <td colspan="5" class="text-right">
                            <button class="btn btn-md btn-primary" id="addBtn" type="button">
                                  <i class="fa fa-plus"></i>
                              </button>
                          </td>
                        </tr>
                      </tbody>
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Gambar</th>
                          <th>Keterangan</th>
                          <th>Urutan</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                    </table>
                    <button class="btn btn-md btn-primary" id="addBtn" type="submit">
                          Simpan
                      </button>
                    <?php echo form_close(); ?>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</div>
