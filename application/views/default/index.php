<!doctype html>
<html lang="en">
  <head>
    <?php $this->load->view('default/common/header') ?>
  </head>
  <body>
    <?php
      $this->load->view('default/common/nav');
      $this->load->view('default/'.$path);
      $this->load->view('default/common/footer');
     ?>
  </body>
</html>
