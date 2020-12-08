<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Atur Kategori Artikel
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Atur Kategori Artikel</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <?php echo form_open(''); ?>
              <div class="row">
                <div class="col-md-2">
                  <a class="btn btn-primary " style="margin:10px 0 10px 10px" href="<?php echo base_url($this->uri->segment(1).'/frontend/add-article-category'); ?>" role="button">
                      <i class="fa fa-plus fa-fw" ></i> Tambah Kategori Artikel
                    </a>
                </div>
                <div class="col-md-3" style="padding-top:10px;">
                  <input type="text" name="search" class="form-control" placeholder="Cari" value="<?php echo set_value('search') ?>">
                </div>
                <div class="col-md-3" style="padding-top:10px;">
                  <?php
                    $options = array(
                      'category' => 'Kategori Artikel',
                      'alias_category' => 'Alias URL',
                      'description' => 'Deskripsi',
                    );
                    echo form_dropdown('by',$options,set_value('by'),'class="form-control"');
                   ?>
                </div>
                <div class="col-md-2">
                  <button class="btn btn-primary " style="margin:10px 0 10px 10px" href="#" type="submit">
                      <i class="fa fa-search fa-fw" ></i> Cari
                    </button>
                </div>
              </div>
              <?php echo form_close(''); ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <tr>
                      <th>#</th>
                      <th>Kategori</th>
                      <th>Alias URL</th>
                      <th>Input oleh</th>
                      <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php
                        if($results!=FALSE){
                          $i = 1;
                          foreach ($results as $rows) {
                            ?>
                            <tr>
                              <td><?php echo $i; ?></td>
                              <td><?php echo $rows->category ?></td>
                              <td><?php echo $rows->alias_category ?></td>
                              <td><?php echo $rows->full_name ?></td>
                              <td>
                                <a title="Edit Data" href="<?php echo base_url($this->uri->segment(1).'/frontend/edit-article-category/'.$rows->id_category)?>"><i class="fa fa-pencil fa-fw"></i></a></a>
                                <a title="Delete Data" href="<?php echo base_url($this->uri->segment(1).'/frontend/delete-article-category/'.$rows->id_category)?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini? *semua artikel yang ada di kategori ini akan ikut terhapus')"><i class="fa fa-trash fa-fw"></i></a></a>
                              </td>
                            </tr>
                            <?php
                            $i++;
                          }
                        }
                       ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Kategori</th>
                        <th>Alias URL</th>
                        <th>Input oleh</th>
                        <th>Aksi</th>
                    </tr>
                    </tfoot>
                  </table>
                  <?php echo $links; ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

    </section>
</div>
