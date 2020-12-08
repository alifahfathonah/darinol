<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('marticle');
  }
  public function kontak(){
    $data['path'] = 'module/contact';
    $data['title'] = "Kontak";

    $data['category_list'] = $this->marticle->fetchAllCategory();
    $data['base_url'] = base_url();
		$this->parser->parse('default/index',$data);
  }
}
