<!-- Sidebar user panel -->
<div class="user-panel">
  <div class="pull-left image">
    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
  </div>
  <div class="pull-left info">
    <p>Admin</p>
    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
  </div>
</div>
<!-- search form -->
<form action="#" method="get" class="sidebar-form">
  <div class="input-group">
    <input type="text" name="q" class="form-control" placeholder="Search...">
    <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
  </div>
</form>
<!-- /.search form -->
<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
  <li class="header">MAIN NAVIGATION</li>
  <li class="active">
    <a href="<?php echo base_url($this->uri->segment(1).'/dashboard/') ?>">
      <i class="fa fa-dashboard"></i> <span>Dashboard</span>
    </a>
  </li>


  <li class="treeview">
    <a href="#">
      <i class="fa fa-database"></i>
      <span>Master Data</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo base_url($this->uri->segment(1).'/master/manage-admin') ?>"><i class="fa fa-circle-o"></i> Admin</a></li>
      <li><a href="<?php echo base_url($this->uri->segment(1).'/master/manage-product') ?>"><i class="fa fa-circle-o"></i> Produk</a></li>
    </ul>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-wpforms"></i>
      <span>Artikel & Tampilan</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo base_url($this->uri->segment(1).'/frontend/manage-slider') ?>"><i class="fa fa-circle-o"></i> Slider</a></li>
      <li><a href="<?php echo base_url($this->uri->segment(1).'/frontend/manage-menu') ?>"><i class="fa fa-circle-o"></i> Menu</a></li>
      <li><a href="<?php echo base_url($this->uri->segment(1).'/frontend/manage-article') ?>"><i class="fa fa-circle-o"></i> Artikel</a></li>
      <li><a href="<?php echo base_url($this->uri->segment(1).'/frontend/manage-article-category') ?>"><i class="fa fa-circle-o"></i> kategori Artikel</a></li>
    </ul>
  </li>
  <li>
    <a href="<?php echo base_url($this->uri->segment(1).'/frontend/configuration') ?>">
      <i class="fa fa-cog"></i>
      <span>Konfigurasi</span>
    </a>
  </li>
</ul>
