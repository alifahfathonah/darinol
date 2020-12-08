<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('mproduct');
    $this->load->model('marticle');
  }
	public function index(){
    $data['title'] = "Produk";

    $data['search'] = "";
    $this->form_validation->set_rules('search','Search','required');
    if(!$this->form_validation->run()){
      $perpage = 12;
	    $this->load->library('pagination'); // load libraray pagination
	    $config['base_url'] = base_url('produk/semua-produk/'); // configurate link pagination
	    $config['total_rows'] = $this->mproduct->countProductStatus(0);// fetch total record in databae using load
	    $config['per_page'] = $perpage; // Total data in one page
	    $config['uri_segment'] = 3; // catch uri segment where locate in 4th posisition
	    $choice = $config['total_rows']/$config['per_page'] = $perpage; // Total record divided by total data in one page
	    $config['num_links'] = round($choice); // Rounding Choice Variable
	    $config['use_page_numbers'] = TRUE;

      // pagination style
      $config['full_tag_open'] = '<ul class="pagination justify-content-center">';
      $config['full_tag_close'] = '</ul>';
      $config['prev_tag_open'] = '<li class="page-item">';
      $config['prev_tag_close'] = '</li>';
      $config['next_tag_open'] = '<li class="page-item">';
      $config['next_tag_close'] = '</li>';
      $config['cur_tag_open'] = '<li class="page-item disabled active"><a class="page-link" href="#">';
      $config['cur_tag_close'] = '</a></li>';
      $config['attributes'] = array('class' => 'page-link');
      $config['num_tag_open'] = '<li class="page-item">';
      $config['num_tag_close'] = '</li>';
      $config['prev_link'] = '<span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span>';
      $config['next_link'] = '<span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span>';
	    $this->pagination->initialize($config); // intialize var config
	    $page = ($this->uri->segment(3))? $this->uri->segment(3) : 0; // If uri segment in 4th = 0 so this program not catch the uri segment
	    $results = $this->mproduct->fetchProductStatus($config['per_page'],$page,$this->uri->segment(3),0); // fetch data using limit and pagination
      $data['product_list'] = $results;
      $data['links'] = $this->pagination->create_links(); // Make a variable (array) link so the view can call the variable
	    $data['total_rows'] = $this->mproduct->countProductStatus(0); // Make a variable (array) link so the view can call the variable

      // validation if there's data or no
      if($results != FALSE) $data['path'] = 'module/product';
      else $data['path'] = 'module/product-notfound';
      $this->parser->parse('default/index',$data);
    }
		else{
      $data['product_list'] = $this->mproduct->fetchProductSearchStatus($this->input->post('search'),0); // fetch data using limit and pagination
      $data['search'] = set_value('search');
      if($data['product_list'] != false)
        $data['path'] = 'module/product-search';
      else
        $data['path'] = 'module/product-search-notfound';
      $this->parser->parse('default/index',$data);
    }
	}
  public function semua_produk(){
    $data['path'] = 'module/product';
    $data['title'] = "Produk";

    $data['search'] = "";
    $this->form_validation->set_rules('search','Search','required');
    if(!$this->form_validation->run()){
      $perpage = 12;
	    $this->load->library('pagination'); // load libraray pagination
	    $config['base_url'] = base_url('produk/semua-produk/'); // configurate link pagination
	    $config['total_rows'] = $this->mproduct->countProductStatus(0);// fetch total record in databae using load
	    $config['per_page'] = $perpage; // Total data in one page
	    $config['uri_segment'] = 3; // catch uri segment where locate in 4th posisition
	    $choice = $config['total_rows']/$config['per_page'] = $perpage; // Total record divided by total data in one page
	    $config['num_links'] = round($choice); // Rounding Choice Variable
	    $config['use_page_numbers'] = TRUE;

      // pagination style
      $config['full_tag_open'] = '<ul class="pagination justify-content-center">';
      $config['full_tag_close'] = '</ul>';
      $config['prev_tag_open'] = '<li class="page-item">';
      $config['prev_tag_close'] = '</li>';
      $config['next_tag_open'] = '<li class="page-item">';
      $config['next_tag_close'] = '</li>';
      $config['cur_tag_open'] = '<li class="page-item disabled active"><a class="page-link" href="#">';
      $config['cur_tag_close'] = '</a></li>';
      $config['attributes'] = array('class' => 'page-link');
      $config['num_tag_open'] = '<li class="page-item">';
      $config['num_tag_close'] = '</li>';
      $config['prev_link'] = '<span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span>';
      $config['next_link'] = '<span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span>';
	    $this->pagination->initialize($config); // intialize var config
	    $page = ($this->uri->segment(3))? $this->uri->segment(3) : 0; // If uri segment in 4th = 0 so this program not catch the uri segment
	    $results = $this->mproduct->fetchProductStatus($config['per_page'],$page,$this->uri->segment(3),0); // fetch data using limit and pagination
      $data['product_list'] = $results;
      $data['links'] = $this->pagination->create_links(); // Make a variable (array) link so the view can call the variable
	    $data['total_rows'] = $this->mproduct->countProductStatus(0); // Make a variable (array) link so the view can call the variable
      $this->parser->parse('default/index',$data);
    }
		else{
      $data['product_list'] = $this->mproduct->fetchProductSearchStatus($this->input->post('search'),0); // fetch data using limit and pagination
      $data['search'] = set_value('search');
      if($data['product_list'] != false)
        $data['path'] = 'module/product-search';
      else
        $data['path'] = 'module/product-search-notfound';
      $this->parser->parse('default/index',$data);
    }
	}
  public function detail(){
      $id = $this->uri->segment(3);
      $result = $this->mproduct->getProduct($id);
      if($result == false || $this->uri->segment(4) != $result['alias_product'])
        show_404();

      $data['base_url'] = base_url();
      $data['title'] = "Detail Produk ".$result['name_product'];
      $data['category_list'] = $this->marticle->fetchAllCategory();
      // parse detail product to view template
      $data['name_product'] = $result['name_product'];
      $data['full_name'] = $result['full_name'];
      $data['date_product'] = date('d M Y',strtotime($result['date_product']));
      $data['image_featured'] = base_url($result['image_featured']);
      $data['description'] = $result['description'];
      $data['category'] = $result['product_category'];

      $data['another_product'] = $this->mproduct->fetchAnotherProductStatus(3,0,'',0,$id);
      $data['gallery'] = $this->mproduct->fetchAllProductGallery($id);

      if($data['gallery'] != false) $data['path'] = 'module/detail-product';
      else if($data['gallery'] == false) $data['path'] = 'module/detail-product-nogallery';

      $this->parser->parse('default/index',$data);
  }
}
