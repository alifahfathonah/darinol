<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Ubah Artikel
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url($this->uri->segment(1).'/dashboard/')?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo base_url($this->uri->segment(1).'/frontend/manage-article')?>"><i class="fa fa-user"></i> Artikel</a></li>
      <li class="active">Ubah Artikel</li>
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
                    <a class="btn btn-primary " style="margin:10px 0 10px 10px" href="<?php echo base_url($this->uri->segment(1).'/frontend/manage-article/')?>" role="button">
                        <i class="fa fa-list fa-fw" ></i> Atur Artikel
                      </a>
                  </div>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <?php echo form_open_multipart(''); ?>
                <div class="col-md-8">
                  <div class="form-group">
                    <label for="">Judul Artikel*</label>
                    <input type="text" name="title_article" value="<?php echo $result['title_article'] ?>" class="form-control">
                  </div>
                    <div class="form-group">
                      <label for="">Alias URL* (contoh: tips-mencari-laptop-murah)*</label>
                      <input type="text" name="alias_article" value="<?php echo $result['alias_article'] ?>" class="form-control">
                    </div>
                  <div class="form-group">
                    <label for="">Kategori*</label>
                    <?php
                      $options = array(''=>'Pilih Kategori');
                      if($category!=FALSE){
                        foreach ($category as $rows) {
                          $options[$rows->id_category] = $rows->category;
                        }
                      }
                      echo form_dropdown('id_category',$options,$result['id_category'],'class="form-control"');
                     ?>
                  </div>
                  <div class="form-group">
                    <label for="">Isi Artikel*</label>
                    <textarea name="contain_article" id="textarea" placeholder="Masukkan isi Artikel disini"><?php echo $result['contain_article'] ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="stock">Status Artikel*</label>
                    <?php
                    $options = array(
                      '' => 'Status Artikel',
                      0 => 'Tidak Dipublish',
                      1 => 'Dipublish'
                    );
                    echo form_dropdown('status_article',$options,$result['status_article'],'class="form-control"');
                     ?>
                  </div>
                  <div class="form-grop" style="margin-bottom:25px;">
                    <label for="imageClass">Gambar Thumbnail Artikel</label><br>
                    <?php
                      if($result['image_article'] != ""){
                        ?>
                        <img src="<?php echo base_url($result['image_article']) ?>" alt="" style="height:150px;">
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
