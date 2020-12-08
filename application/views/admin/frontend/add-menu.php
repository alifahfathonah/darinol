<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Tambah Menu
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url($this->uri->segment(1).'/dashboard/')?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo base_url($this->uri->segment(1).'/frontend/manage-menu')?>"><i class="fa fa-list"></i> Menu</a></li>
      <li class="active">Tambah Menu</li>
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
                    <a class="btn btn-primary " style="margin:10px 0 10px 10px" href="<?php echo base_url($this->uri->segment(1).'/frontend/manage-menu/')?>" role="button">
                        <i class="fa fa-list fa-fw" ></i> Atur Menu
                      </a>
                  </div>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <?php echo form_open(''); ?>
                <div class="col-md-8">
                  <div class="form-group">
                    <label for="">Menu*</label>
                    <input type="text" name="menu" value="<?php echo set_value('menu') ?>" class="form-control">
                  </div>
                    <div class="form-group">
                      <label for="">Link / URL*</label>
                      <input type="text" name="link" value="<?php echo set_value('link') ?>" class="form-control">
                    </div>
                  <div class="form-group">
                    <label for="stock">Jenis Link*</label>
                    <?php
                    $options = array(
                      '' => 'Jenis Link',
                      0 => 'Direct Link',
                      1 => 'Link Internal'
                    );
                    echo form_dropdown('link_type',$options,set_value('link_type'),'class="form-control"');
                     ?>
                  </div>
                    <div class="form-group">
                      <label for="">Urutan*</label>
                      <input type="number" name="sort_order" value="<?php echo set_value('sort_order') ?>" class="form-control"  min=1>
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
