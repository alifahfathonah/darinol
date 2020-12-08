<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="<?php echo base_url() ?>">
      <?php
        if($this->set->logo(1) != ""){
          ?>
          <img src="<?php echo base_url($this->set->logo(1)); ?>" alt="<?php echo $this->set->title(1) ?>" style="height:60px;">
          <?php
        }
        else {
          ?>
          <h1><?php echo $this->set->title(1) ?></h1>
          <?php
        }
      ?>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      </ul>
      <ul class="nav navbar-nav">
          <?php
            $menu = $this->mod->fetchMenuActive();
            if($menu!=FALSE){
              foreach ($menu as $rows) {
                ?>
                <li class="nav-item <?php if($this->uri->segment(1) == strtolower($rows->menu) || $this->uri->segment(2) == strtolower($rows->menu)) echo "active" ?>">
                    <a class="nav-link" href="<?php if($rows->link_type == 0) echo $rows->link; else echo base_url($rows->link) ?>"><?php echo $rows->menu ?></a>
                </li>
                <?php
              }
            }
          ?>
        </ul>
    </div>
  </div>
</nav>
