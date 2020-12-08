<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Tambah Slider
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url($this->uri->segment(1).'/dashboard/')?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo base_url($this->uri->segment(1).'/frontend/manage-slider')?>"><i class="fa fa-list"></i> Slider</a></li>
      <li class="active">Tambah Slider</li>
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
                    <a class="btn btn-primary " style="margin:10px 0 10px 10px" href="<?php echo base_url($this->uri->segment(1).'/frontend/manage-slider/')?>" role="button">
                        <i class="fa fa-list fa-fw" ></i> Atur Slider
                      </a>
                  </div>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <?php echo form_open_multipart(''); ?>
                <div class="col-md-8">
                  <div class="form-group">
                    <label for="">Judul Slider*</label>
                    <input type="text" name="title_slider" value="<?php echo set_value('title_slider') ?>" class="form-control">
                  </div>
                    <div class="form-group">
                      <label for="">Link / URL*</label>
                      <input type="text" name="url_slider" value="<?php echo set_value('url_slider') ?>" class="form-control">
                    </div>
                  <div class="form-group">
                    <label for="">Urutan*</label>
                    <input type="number" name="sort_order" value="<?php echo set_value('sort_order') ?>" class="form-control" min=1>
                  </div>
                  <div class="form-grop" style="margin-bottom:25px;">
                    <label for="imageClass">Gambar Slider* (max: 2Mb)</label>
                    <input id="imageClass" type="file" name="userfile" value="" class="form-control" accept="image/x-png,image/jpg,image/jpeg">
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                    <?php echo form_close('');
                    echo validation_errors();
                    if(isset($error)){
                      echo $error;
                    }
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
