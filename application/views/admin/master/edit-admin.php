<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Ubah User
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url($this->uri->segment(1).'/dashboard/')?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo base_url($this->uri->segment(1).'/master/manage-admin')?>"><i class="fa fa-user"></i> Admin</a></li>
      <li class="active">Ubah Admin</li>
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
                    <a class="btn btn-primary " style="margin:10px 0 10px 10px" href="<?php echo base_url($this->uri->segment(1).'/master/manage-admin/')?>" role="button">
                        <i class="fa fa-list fa-fw" ></i> Atur Admin
                      </a>
                  </div>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <?php echo form_open(''); ?>
                <div class="col-md-8">
                  <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username" class="form-control" value="<?php echo $result['username']?>">
                  </div>
                  <div class="form-group">
                    <label for="">Password (Kosongkan jika tidak diubah)</label>
                    <input type="password" name="password" value="" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="">Konfirmasi Password</label>
                    <input type="password" name="confirm" value="" class="form-control">
                  </div>
                  <!-- <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" value="" class="form-control">
                  </div> -->
                  <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" name="full_name" class="form-control" value="<?php echo $result['full_name']?>">
                  </div>
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $result['email']?>">
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
