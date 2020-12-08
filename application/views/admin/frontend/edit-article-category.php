<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Ubah Kategori Artikel
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url($this->uri->segment(1).'/dashboard/')?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo base_url($this->uri->segment(1).'/frontend/manage-article-category')?>"><i class="fa fa-user"></i> Kategori Artikel</a></li>
      <li class="active">Ubah Kategori Artikel</li>
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
                    <a class="btn btn-primary " style="margin:10px 0 10px 10px" href="<?php echo base_url($this->uri->segment(1).'/frontend/manage-article-category/')?>" role="button">
                        <i class="fa fa-list fa-fw" ></i> Atur Kategori Artikel
                      </a>
                  </div>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <?php echo form_open(''); ?>
                <div class="col-md-8">
                  <div class="form-group">
                    <label for="">Kategori*</label>
                    <input type="text" name="category" value="<?php echo $result['category'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="">Alias URL Kategori*</label>
                    <input type="text" name="alias_category" value="<?php echo $result['alias_category'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="textarea" placeholder="Deskripsikan tentang kategori"><?php echo $result['description'] ?></textarea>
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
