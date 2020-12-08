<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('marticle');
  }
	public function index(){
    $data['title'] = "Artikel";

    $data['category_list'] = $this->marticle->fetchAllCategory();
    $this->form_validation->set_rules('search','Search','required');
    if(!$this->form_validation->run()){
      $perpage = 8;
	    $this->load->library('pagination'); // load libraray pagination
	    $config['base_url'] = base_url('artikel/semua-artikel/'); // configurate link pagination
	    $config['total_rows'] = $this->marticle->countArticleStatus(1);// fetch total record in databae using load
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
	    $results = $this->marticle->fetchArticleStatus($config['per_page'],$page,$this->uri->segment(3),1); // fetch data using limit and pagination
      $data['article_list'] = $results;
      $data['links'] = $this->pagination->create_links(); // Make a variable (array) link so the view can call the variable
	    $data['total_rows'] = $this->marticle->countArticleStatus(0); // Make a variable (array) link so the view can call the variable

      // validation if there's data or no
      if($results != FALSE) $data['path'] = 'module/article';
      else $data['path'] = 'module/article-notfound';
      $this->parser->parse('default/index',$data);
    }
		else{
      $data['article_list'] = $this->marticle->fetchArticleSearchStatus($this->input->post('search'),1); // fetch data using limit and pagination
      $data['search'] = set_value('search');
      if($data['article_list'] != false)
        $data['path'] = 'module/article-search';
      else
        $data['path'] = 'module/article-search-notfound';
      $this->parser->parse('default/index',$data);
    }
	}
  public function semua_artikel(){
    $data['title'] = "Artikel";

    $data['category_list'] = $this->marticle->fetchAllCategory();
    $this->form_validation->set_rules('search','Search','required');
    if(!$this->form_validation->run()){
      $perpage = 8;
	    $this->load->library('pagination'); // load libraray pagination
	    $config['base_url'] = base_url('artikel/semua-artikel/'); // configurate link pagination
	    $config['total_rows'] = $this->marticle->countArticleStatus(1);// fetch total record in databae using load
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
	    $results = $this->marticle->fetchArticleStatus($config['per_page'],$page,$this->uri->segment(3),1); // fetch data using limit and pagination
      $data['article_list'] = $results;
      $data['links'] = $this->pagination->create_links(); // Make a variable (array) link so the view can call the variable
	    $data['total_rows'] = $this->marticle->countArticleStatus(0); // Make a variable (array) link so the view can call the variable

      // validation if there's data or no
      if($results != FALSE) $data['path'] = 'module/article';
      else $data['path'] = 'module/article-notfound';
      $this->parser->parse('default/index',$data);
    }
		else{
      $data['article_list'] = $this->marticle->fetchArticleSearchStatus($this->input->post('search'),1); // fetch data using limit and pagination
      $data['search'] = set_value('search');
      if($data['article_list'] != false)
        $data['path'] = 'module/article-search';
      else
        $data['path'] = 'module/article-search-notfound';
      $this->parser->parse('default/index',$data);
    }
	}
  public function kategori(){
    $data['title'] = "Artikel";
    $data['base_url'] = base_url();

    $id = $this->uri->segment(3);
    $result = $this->marticle->getCategory($id);
    if($result == false || $this->uri->segment(4) != $result['alias_category'])
      show_404();

    $data['category'] = $result['category'];
    $data['category_list'] = $this->marticle->fetchAllCategory();
    $this->form_validation->set_rules('search','Search','required');
    if(!$this->form_validation->run()){
      $perpage = 8;
	    $this->load->library('pagination'); // load libraray pagination
	    $config['base_url'] = base_url('artikel/kategori/'.$result['id_category'].'/'.$result['alias_category']); // configurate link pagination
	    $config['total_rows'] = $this->marticle->countArticleCategoryStatus(1,$id);// fetch total record in databae using load
	    $config['per_page'] = $perpage; // Total data in one page
	    $config['uri_segment'] = 5; // catch uri segment where locate in 4th posisition
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
	    $page = ($this->uri->segment(5))? $this->uri->segment(5) : 0; // If uri segment in 4th = 0 so this program not catch the uri segment
	    $results = $this->marticle->fetchArticleCategoryStatus($config['per_page'],$page,$this->uri->segment(5),1,$id); // fetch data using limit and pagination
      $data['article_list'] = $results;
      $data['links'] = $this->pagination->create_links(); // Make a variable (array) link so the view can call the variable
	    $data['total_rows'] = $this->marticle->countArticleCategoryStatus(1,$id); // Make a variable (array) link so the view can call the variable

      // validation if there's data or no
      if($results != FALSE) $data['path'] = 'module/article-category';
      else $data['path'] = 'module/article-category-notfound';
      $this->parser->parse('default/index',$data);
    }
		else{
      $this->parser->parse('default/index',$data);
    }
	}
  public function baca(){
      $data['path'] = 'module/read-article';
      $id = $this->uri->segment(3);
      $result = $this->marticle->getArticle($id);
      if($result == false || $this->uri->segment(4) != $result['alias_article'])
        show_404();

      $data['base_url'] = base_url();
      $data['title'] = $result['title_article'];
      $data['category_list'] = $this->marticle->fetchAllCategory();
      // parse detail product to view template
      $data['title_article'] = $result['title_article'];
      $data['full_name'] = $result['full_name'];
      $data['date_article'] = date('d M Y',strtotime($result['date_article']));
      $data['image_article'] = base_url($result['image_article']);
      $data['contain_article'] = $result['contain_article'];
      $data['category'] = $result['category'];
      $data['id_category'] = $result['id_category'];
      $data['alias_category'] = $result['alias_category'];

      $this->parser->parse('default/index',$data);
  }
}
