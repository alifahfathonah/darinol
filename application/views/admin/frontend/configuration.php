<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Konfigurasi
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url($this->uri->segment(1).'/dashboard/')?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Konfigurasi</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
      <div class="row">
          <div class="col-xs-12">
            <div class="box">

              <!-- /.box-header -->
              <div class="box-body">
                <?php echo form_open_multipart(''); ?>
                <div class="col-md-8">
                  <div class="form-group">
                    <label for="">Nama Toko*</label>
                    <input type="text" name="title_website" value="<?php echo $result['title_website'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="">Email Toko</label>
                    <input type="email" name="email_website" value="<?php echo $result['email_website'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="">Link Facebook*</label>
                    <input type="text" name="facebook" value="<?php echo $result['facebook'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="">Link Twitter*</label>
                    <input type="text" name="twitter" value="<?php echo $result['twitter'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="">Link Instagram*</label>
                    <input type="text" name="instagram" value="<?php echo $result['instagram'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="">Google Maps Embed Link*</label>
                    <input type="text" name="gmaps_link" value="<?php echo $result['gmaps_link'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="">Nomor Telepon*</label>
                    <input type="text" name="phone_number" value="<?php echo $result['phone_number'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="">Nomor Whatsapp*</label>
                    <input type="text" name="whatsapp_number" value="<?php echo $result['whatsapp_number'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="">Isi Footer*</label>
                    <textarea name="footer" id="textarea" placeholder="Masukkan isi Footer"><?php echo $result['footer'] ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="">Isi Copyright*</label>
                    <input type="text" name="copyright" value="<?php echo $result['copyright'] ?>" class="form-control">
                  </div>
                  <div class="form-grop" style="margin-bottom:25px;">
                    <label for="imageClass">Logo Website (max: 1Mb)</label><br>
                    <img src="<?php echo base_url($result['logo_website']) ?>" alt="" style="height:150px;">
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
