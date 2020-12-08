<div class="vid-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-12">
        <?php
          $this->set->footer(1);
         ?>
        <p class="copyright">&copy;<?php $this->set->copy(1); ?></p>
      </div>
      <div class="col-md-6 col-12 text-right">
        <a href="<?php $this->set->fb(1);?>" title="Facebook">
          <span class="fa-stack fa-lg">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
          </span></i></a>
        <a href="<?php $this->set->ig(1);?>" title="Instagram">
          <span class="fa-stack fa-lg">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
          </span></i></a>
        <a href="<?php $this->set->tw(1);?>" title="Twitter">
          <span class="fa-stack fa-lg">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
          </span></i></a>
      </div>
    </div>
  </div>
</div>
<div class="vid-sticky">
  <a href="https://api.whatsapp.com/send?phone=<?php $this->set->wa(1);?>" title="Whatsapp">
    Whatsapp
    <span class="fa-stack fa-lg">
    <i class="fa fa-circle fa-stack-2x"></i>
    <i class="fa fa-whatsapp fa-stack-1x fa-inverse"></i>
    </span></i></a>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<script src="<?php echo base_url('asset/jquery.magnific-popup.js') ?>"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('.image-product').magnificPopup({
  delegate: 'a', // child items selector, by clicking on it popup will open
  type: 'image',
  gallery:{
    enabled:true
  }
  // other options
  });
});
</script>
