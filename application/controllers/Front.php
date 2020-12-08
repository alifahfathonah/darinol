<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('mproduct');
		$this->load->model('mfront');
	}
	public function index(){
    $data['path'] = 'module/home';
    $data['title'] = "Beranda";

		$data['product_list'] = $this->mproduct->fetchProductStatus(3,0,'',0);
		$data['product_featured'] = $this->mproduct->fetchFeaturedProductStatus(4,0,'',0);
		$data['slider_list'] = $this->mfront->fetchAllSlider();
		$this->parser->parse('default/index',$data);
	}
}
