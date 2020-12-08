<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {
  function __construct(){
    parent::__construct();
    if($this->session->userdata('loginAdmin') == FALSE){
      redirect(base_url('adminpanel'));
    }
    $this->load->model('mfront');
  }
  function manage_article_category(){
    $data['path'] = 'admin/frontend/manage-article-category';
    $data['title'] = 'Atur Kategori Artikel';

    $this->form_validation->set_rules('search','Search','required');

		if(!$this->form_validation->run()){
	    // Ngeload data
	    $perpage = 20;
	    $this->load->library('pagination'); // load libraray pagination
	    $config['base_url'] = base_url($this->uri->segment(1).'/master/manage-article-category/'); // configurate link pagination
	    $config['total_rows'] = $this->mod->countData('category');// fetch total record in databae using load
	    $config['per_page'] = $perpage; // Total data in one page
	    $config['uri_segment'] = 4; // catch uri segment where locate in 4th posisition
	    $choice = $config['total_rows']/$config['per_page'] = $perpage; // Total record divided by total data in one page
	    $config['num_links'] = round($choice); // Rounding Choice Variable
	    $config['use_page_numbers'] = TRUE;
	    $this->pagination->initialize($config); // intialize var config
	    $page = ($this->uri->segment(4))? $this->uri->segment(4) : 0; // If uri segment in 4th = 0 so this program not catch the uri segment
	    $data['results'] = $this->mfront->fetchCategory($config['per_page'],$page,$this->uri->segment(4)); // fetch data using limit and pagination
	    $data['links'] = $this->pagination->create_links(); // Make a variable (array) link so the view can call the variable
	    $data['total_rows'] = $this->mod->countData('category'); // Make a variable (array) link so the view can call the variable
	    $this->parser->parse('admin/index',$data);
		}
		else{
			$data['results'] = $this->mfront->fetchCategorySearch($_POST); // fetch data using limit and pagination
			$data['links'] = false;
      $this->parser->parse('admin/index',$data);
		}
  }
  function manage_article(){
    $data['path'] = 'admin/frontend/manage-article';
    $data['title'] = 'Atur Artikel';

    $this->form_validation->set_rules('search','Search','required');

		if(!$this->form_validation->run()){
	    // Ngeload data
	    $perpage = 20;
	    $this->load->library('pagination'); // load libraray pagination
	    $config['base_url'] = base_url($this->uri->segment(1).'/master/manage-article/'); // configurate link pagination
	    $config['total_rows'] = $this->mod->countData('article');// fetch total record in databae using load
	    $config['per_page'] = $perpage; // Total data in one page
	    $config['uri_segment'] = 4; // catch uri segment where locate in 4th posisition
	    $choice = $config['total_rows']/$config['per_page'] = $perpage; // Total record divided by total data in one page
	    $config['num_links'] = round($choice); // Rounding Choice Variable
	    $config['use_page_numbers'] = TRUE;
	    $this->pagination->initialize($config); // intialize var config
	    $page = ($this->uri->segment(4))? $this->uri->segment(4) : 0; // If uri segment in 4th = 0 so this program not catch the uri segment
	    $data['results'] = $this->mfront->fetchArticle($config['per_page'],$page,$this->uri->segment(4)); // fetch data using limit and pagination
	    $data['links'] = $this->pagination->create_links(); // Make a variable (array) link so the view can call the variable
	    $data['total_rows'] = $this->mod->countData('article'); // Make a variable (array) link so the view can call the variable
	    $this->parser->parse('admin/index',$data);
		}
		else{
			$data['results'] = $this->mfront->fetchArticleSearch($_POST); // fetch data using limit and pagination
			$data['links'] = false;
      $this->parser->parse('admin/index',$data);
		}
  }
  function manage_menu(){
    $data['path'] = 'admin/frontend/manage-menu';
    $data['title'] = 'Atur Menu';

    $this->form_validation->set_rules('search','Search','required');

		if(!$this->form_validation->run()){
	    // Ngeload data
	    $perpage = 20;
	    $this->load->library('pagination'); // load libraray pagination
	    $config['base_url'] = base_url($this->uri->segment(1).'/master/manage-menu/'); // configurate link pagination
	    $config['total_rows'] = $this->mod->countData('menu');// fetch total record in databae using load
	    $config['per_page'] = $perpage; // Total data in one page
	    $config['uri_segment'] = 4; // catch uri segment where locate in 4th posisition
	    $choice = $config['total_rows']/$config['per_page'] = $perpage; // Total record divided by total data in one page
	    $config['num_links'] = round($choice); // Rounding Choice Variable
	    $config['use_page_numbers'] = TRUE;
	    $this->pagination->initialize($config); // intialize var config
	    $page = ($this->uri->segment(4))? $this->uri->segment(4) : 0; // If uri segment in 4th = 0 so this program not catch the uri segment
	    $data['results'] = $this->mfront->fetchMenu($config['per_page'],$page,$this->uri->segment(4)); // fetch data using limit and pagination
	    $data['links'] = $this->pagination->create_links(); // Make a variable (array) link so the view can call the variable
	    $data['total_rows'] = $this->mod->countData('menu'); // Make a variable (array) link so the view can call the variable
	    $this->parser->parse('admin/index',$data);
		}
		else{
			$data['results'] = $this->mfront->fetchMenuSearch($_POST); // fetch data using limit and pagination
			$data['links'] = false;
      $this->parser->parse('admin/index',$data);
		}
  }
  function manage_slider(){
    $data['path'] = 'admin/frontend/manage-slider';
    $data['title'] = 'Atur Slider';

    $this->form_validation->set_rules('search','Search','required');

		if(!$this->form_validation->run()){
	    // Ngeload data
	    $perpage = 20;
	    $this->load->library('pagination'); // load libraray pagination
	    $config['base_url'] = base_url($this->uri->segment(1).'/master/manage-slider/'); // configurate link pagination
	    $config['total_rows'] = $this->mod->countData('slider');// fetch total record in databae using load
	    $config['per_page'] = $perpage; // Total data in one page
	    $config['uri_segment'] = 4; // catch uri segment where locate in 4th posisition
	    $choice = $config['total_rows']/$config['per_page'] = $perpage; // Total record divided by total data in one page
	    $config['num_links'] = round($choice); // Rounding Choice Variable
	    $config['use_page_numbers'] = TRUE;
	    $this->pagination->initialize($config); // intialize var config
	    $page = ($this->uri->segment(4))? $this->uri->segment(4) : 0; // If uri segment in 4th = 0 so this program not catch the uri segment
	    $data['results'] = $this->mfront->fetchSlider($config['per_page'],$page,$this->uri->segment(4)); // fetch data using limit and pagination
	    $data['links'] = $this->pagination->create_links(); // Make a variable (array) link so the view can call the variable
	    $data['total_rows'] = $this->mod->countData('slider'); // Make a variable (array) link so the view can call the variable
	    $this->parser->parse('admin/index',$data);
		}
		else{
			$data['results'] = $this->mfront->fetchSliderSearch($_POST); // fetch data using limit and pagination
			$data['links'] = false;
      $this->parser->parse('admin/index',$data);
		}
  }
  // add function
  public function add_article_category(){
    $data['path'] = 'admin/frontend/add-article-category';
    $data['title'] = 'Tambah Kategori Artikel';

    $this->form_validation->set_rules('category','category','required');
    $this->form_validation->set_rules('alias_category','Alias URL','required');
    if(!$this->form_validation->run()){
      $this->parser->parse('admin/index',$data);
    }
    else{
      $array = array(
        'category' => $this->input->post('category'),
        'alias_category' => $this->input->post('alias_category'),
        'description' => $this->input->post('description'),
        'id_admin' => $this->session->userdata('idAdmin'),
        'date_category' => date('Y-m-d H:i:s')
      );
      $this->mod->saveData($array,'category');
      redirect(base_url($this->uri->segment(1).'/frontend/manage-article-category'));
    }
  }
  public function add_article(){
    $data['path'] = 'admin/frontend/add-article';
    $data['title'] = 'Tambah Artikel';
    $data['category'] = $this->mod->fetchAllData('category');

    $this->form_validation->set_rules('id_category','Category','required');
    $this->form_validation->set_rules('title_article','Judul Artikel','required');
    $this->form_validation->set_rules('alias_article','Alias URL','required');
    $this->form_validation->set_rules('contain_article','Isi Artikel','required');
    $this->form_validation->set_rules('status_article','Status Artikel','required');
    if(!$this->form_validation->run()){
      $this->parser->parse('admin/index',$data);
    }
    else{
      $post = $_POST;
      $config['upload_path'] = './asset/images/article/';
      $config['allowed_types'] = 'png|jpg|jpeg';
      $config['max_size'] = '2048';
      $config['file_name'] = 'artikel-'.$this->mod->urlFriendly($post['title_article']).'-'.date('Ymdhis');
      $this->load->library('upload',$config);

      if(!$this->upload->do_upload()){
        $array = array(
          'id_category' => $this->input->post('id_category'),
          'title_article' => $this->input->post('title_article'),
          'alias_article' => $this->input->post('alias_article'),
          'contain_article' => $this->input->post('contain_article'),
          'status_article' => $this->input->post('status_article'),
          'id_admin' => $this->session->userdata('idAdmin'),
          'date_article' => date('Y-m-d H:i:s')
        );
      }
      else{
        $upload_data = $this->upload->data();
        $array = array(
          'id_category' => $this->input->post('id_category'),
          'title_article' => $this->input->post('title_article'),
          'alias_article' => $this->input->post('alias_article'),
          'contain_article' => $this->input->post('contain_article'),
          'status_article' => $this->input->post('status_article'),
          'id_admin' => $this->session->userdata('idAdmin'),
          'image_article' => 'asset/images/article/'.$upload_data['file_name'],
          'date_article' => date('Y-m-d H:i:s')
        );
      }
      $this->mod->saveData($array,'article');
      redirect(base_url($this->uri->segment(1).'/frontend/manage-article'));
    }
  }
  public function add_menu(){
    $data['path'] = 'admin/frontend/add-menu';
    $data['title'] = 'Tambah Menu';

    $this->form_validation->set_rules('menu','Menu','required');
    $this->form_validation->set_rules('link','Link / URL','required');
    $this->form_validation->set_rules('link_type','Jenis Link','required');
    $this->form_validation->set_rules('sort_order','Urutan','required|numeric');
    if(!$this->form_validation->run()){
      $this->parser->parse('admin/index',$data);
    }
    else{
      $array = array(
        'menu' => $this->input->post('menu'),
        'link' => $this->input->post('link'),
        'link_type' => $this->input->post('link_type'),
        'sort_order' => $this->input->post('sort_order')
      );
      $this->mod->saveData($array,'menu');
      redirect(base_url($this->uri->segment(1).'/frontend/manage-menu'));
    }
  }
  public function add_slider(){
    $data['path'] = 'admin/frontend/add-slider';
    $data['title'] = 'Tambah Slider';
    $this->form_validation->set_rules('title_slider','Judul Slider','required');
    $this->form_validation->set_rules('url_slider','Link / URL','required');
    $this->form_validation->set_rules('sort_order','Urutan','required|numeric');
    if(!$this->form_validation->run()){
      $this->parser->parse('admin/index',$data);
    }
    else{
      $post = $_POST;
      $config['upload_path'] = './asset/images/slider/';
      $config['allowed_types'] = 'png|jpg|jpeg';
      $config['max_size'] = '2048';
      $config['file_name'] = 'slider-'.$this->mod->urlFriendly($post['title_slider']).'-'.date('Ymdhis');
      $this->load->library('upload',$config);

      if(!$this->upload->do_upload()){
        $data['error'] = $this->upload->display_errors();
        $this->parser->parse('admin/index',$data);
      }
      else{
        $upload_data = $this->upload->data();
        $array = array(
          'title_slider' => $this->input->post('title_slider'),
          'url_slider' => $this->input->post('url_slider'),
          'sort_order' => $this->input->post('sort_order'),
          'image_slider' => 'asset/images/slider/'.$upload_data['file_name'],
          'date_slider' => date('Y-m-d H:i:s')
        );
        $this->mod->saveData($array,'slider');
        redirect(base_url($this->uri->segment(1).'/frontend/manage-slider'));
      }
    }
  }
  // edit function
  public function edit_article_category(){
    $data['path'] = 'admin/frontend/edit-article-category';
    $data['title'] = 'Ubah Kategori Artikel';

    $id = $this->uri->segment(4);
    $data['result'] = $this->mod->getDataWhere('category','id_category',$id);
    if($data['result'] == false)
    redirect(base_url($this->uri->segment(1).'/frontend/manage-article-category'));

    $this->form_validation->set_rules('category','category','required');
    $this->form_validation->set_rules('alias_category','Alias URL','required');
    if(!$this->form_validation->run()){
      $this->load->view('admin/index',$data);
    }
    else{
      $array = array(
        'category' => $this->input->post('category'),
        'alias_category' => $this->input->post('alias_category'),
        'description' => $this->input->post('description')
      );
      $this->mod->editData($array,'category','id_category',$data['result']['id_category']);
      redirect(base_url($this->uri->segment(1).'/frontend/manage-article-category'));
    }
  }
  public function edit_article(){
    $data['path'] = 'admin/frontend/edit-article';
    $data['title'] = 'Ubah Artikel';
    $data['category'] = $this->mod->fetchAllData('category');

    $id = $this->uri->segment(4);
    $data['result'] = $this->mfront->getArticle($id);
    if($data['result'] == false)
    redirect(base_url($this->uri->segment(1).'/frontend/manage-article'));

    $this->form_validation->set_rules('id_category','Category','required');
    $this->form_validation->set_rules('title_article','Judul Artikel','required');
    $this->form_validation->set_rules('alias_article','Alias URL','required');
    $this->form_validation->set_rules('contain_article','Isi Artikel','required');
    $this->form_validation->set_rules('status_article','Status Artikel','required');
    if(!$this->form_validation->run()){
      $this->parser->parse('admin/index',$data);
    }
    else{
      $post = $_POST;
      $config['upload_path'] = './asset/images/article/';
      $config['allowed_types'] = 'png|jpg|jpeg';
      $config['max_size'] = '2048';
      $config['file_name'] = 'artikel-'.$this->mod->urlFriendly($post['title_article']).'-'.date('Ymdhis');
      $this->load->library('upload',$config);

      if(!$this->upload->do_upload()){
        $array = array(
          'id_category' => $this->input->post('id_category'),
          'title_article' => $this->input->post('title_article'),
          'alias_article' => $this->input->post('alias_article'),
          'contain_article' => $this->input->post('contain_article'),
          'status_article' => $this->input->post('status_article'),
          'id_admin' => $this->session->userdata('idAdmin'),
          'date_article' => date('Y-m-d H:i:s')
        );
      }
      else{
        $upload_data = $this->upload->data();
        $array = array(
          'id_category' => $this->input->post('id_category'),
          'title_article' => $this->input->post('title_article'),
          'alias_article' => $this->input->post('alias_article'),
          'contain_article' => $this->input->post('contain_article'),
          'status_article' => $this->input->post('status_article'),
          'id_admin' => $this->session->userdata('idAdmin'),
          'image_article' => 'asset/images/article/'.$upload_data['file_name'],
          'date_article' => date('Y-m-d H:i:s')
        );
      }
      $this->mod->editData($array,'article','id_article',$id);
      redirect(base_url($this->uri->segment(1).'/frontend/manage-article'));
    }
  }
  public function edit_menu(){
    $data['path'] = 'admin/frontend/edit-menu';
    $data['title'] = 'Ubah Menu';

    $id = $this->uri->segment(4);
    $data['result'] = $this->mod->getDataWhere('menu','id_menu',$id);
    if($data['result'] == false)
    redirect(base_url($this->uri->segment(1).'/frontend/manage-menu'));

    $this->form_validation->set_rules('menu','Menu','required');
    $this->form_validation->set_rules('link','Link / URL','required');
    $this->form_validation->set_rules('link_type','Jenis Link','required');
    $this->form_validation->set_rules('sort_order','Urutan','required|numeric');
    if(!$this->form_validation->run()){
      $this->parser->parse('admin/index',$data);
    }
    else{
      $array = array(
        'menu' => $this->input->post('menu'),
        'link' => $this->input->post('link'),
        'link_type' => $this->input->post('link_type'),
        'sort_order' => $this->input->post('sort_order')
      );
      $this->mod->editData($array,'menu','id_menu',$id);
      redirect(base_url($this->uri->segment(1).'/frontend/manage-menu'));
    }
  }
  public function edit_slider(){
    $data['path'] = 'admin/frontend/edit-slider';
    $data['title'] = 'Tambah Slider';

    $id = $this->uri->segment(4);
    $data['result'] = $this->mod->getDataWhere('slider','id_slider',$id);
    if($data['result'] == false)
    redirect(base_url($this->uri->segment(1).'/frontend/manage-slider'));

    $this->form_validation->set_rules('title_slider','Judul Slider','required');
    $this->form_validation->set_rules('url_slider','Link / URL','required');
    $this->form_validation->set_rules('sort_order','Urutan','required|numeric');
    if(!$this->form_validation->run()){
      $this->parser->parse('admin/index',$data);
    }
    else{
      $post = $_POST;
      $config['upload_path'] = './asset/images/slider/';
      $config['allowed_types'] = 'png|jpg|jpeg';
      $config['max_size'] = '2048';
      $config['file_name'] = 'slider-'.$this->mod->urlFriendly($post['title_slider']).'-'.date('Ymdhis');
      $this->load->library('upload',$config);

      if(!$this->upload->do_upload()){
        $array = array(
          'title_slider' => $this->input->post('title_slider'),
          'url_slider' => $this->input->post('url_slider'),
          'sort_order' => $this->input->post('sort_order')
        );
        $this->mod->editData($array,'slider','id_slider',$id);
        redirect(base_url($this->uri->segment(1).'/frontend/manage-slider'));
      }
      else{
        $upload_data = $this->upload->data();
        $array = array(
          'title_slider' => $this->input->post('title_slider'),
          'url_slider' => $this->input->post('url_slider'),
          'sort_order' => $this->input->post('sort_order'),
          'image_slider' => 'asset/images/slider/'.$upload_data['file_name'],
          'date_slider' => date('Y-m-d H:i:s')
        );
        $this->mod->editData($array,'slider','id_slider',$id);
        redirect(base_url($this->uri->segment(1).'/frontend/manage-slider'));
      }
    }
  }

  public function configuration(){
    $data['path'] = 'admin/frontend/configuration';
    $data['title'] = 'Konfigurasi Website';

    $id = 1;
    $data['result'] = $this->mod->getDataWhere('setting','id_setting',$id);
    if($data['result'] == false)
      show_404();

      $this->form_validation->set_rules('title_website','Nama Toko','required');
      $this->form_validation->set_rules('gmaps_link','Link Google Maps','required');
      $this->form_validation->set_rules('footer','Isi Footer','required');
      $this->form_validation->set_rules('copyright','Isi Copyright','required');
      $this->form_validation->set_rules('email_website','Email Toko','required|valid_email');
      $this->form_validation->set_rules('phone_number','Nomor Telepon','required|numeric');
      $this->form_validation->set_rules('whatsapp_number','Nomor Whatsapp','required');
      $this->form_validation->set_rules('facebook','Link Facebook','required');
      $this->form_validation->set_rules('twitter','Link Twitter','required');
    $this->form_validation->set_rules('instagram','Link Instagram','required');
    if(!$this->form_validation->run()){
      $this->parser->parse('admin/index',$data);
    }
    else{
      $post = $_POST;
      $config['upload_path'] = './asset/images/logo/';
      $config['allowed_types'] = 'png|jpg|jpeg';
      $config['max_size'] = '1024';
      $config['file_name'] = 'logo-'.$this->mod->urlFriendly($post['title_website']).'-'.date('Ymdhis');
      $this->load->library('upload',$config);

      if(!$this->upload->do_upload()){
        $array = array(
          'title_website' => $this->input->post('title_website'),
          'facebook' => $this->input->post('facebook'),
          'twitter' => $this->input->post('twitter'),
          'instagram' => $this->input->post('instagram'),
          'footer' => $this->input->post('footer'),
          'copyright' => $this->input->post('copyright'),
          'gmaps_link' => $this->input->post('gmaps_link'),
          'email_website' => $this->input->post('email_website'),
          'phone_number' => $this->input->post('phone_number'),
          'whatsapp_number' => $this->input->post('whatsapp_number')
        );
        $this->mod->editData($array,'setting','id_setting',$id);
        redirect(base_url($this->uri->segment(1).'/frontend/configuration'));
      }
      else{
        $upload_data = $this->upload->data();
        $array = array(
          'title_slider' => $this->input->post('title_slider'),
          'url_slider' => $this->input->post('url_slider'),
          'sort_order' => $this->input->post('sort_order'),
          'image_slider' => 'asset/images/slider/'.$upload_data['file_name'],
          'date_slider' => date('Y-m-d H:i:s')
        );
        $this->mod->editData($array,'slider','id_slider',$id);
        redirect(base_url($this->uri->segment(1).'/frontend/manage-slider'));
      }
    }
  }
  // delete function
  public function delete_article_category(){
    $id = $this->uri->segment(4);
    // delete category
    $this->db->where('id_category',$id);
    $this->db->delete('category');

    // delete article
    $this->db->where('id_category',$id);
    $this->db->delete('article');
    redirect(base_url($this->uri->segment(1).'/frontend/manage-article-category'));
  }
  public function delete_article(){
    $id = $this->uri->segment(4);
    $this->db->where('id_article',$id);
    $this->db->delete('article');
    redirect(base_url($this->uri->segment(1).'/frontend/manage-article'));
  }
  public function delete_menu(){
    $id = $this->uri->segment(4);
    $this->db->where('id_menu',$id);
    $this->db->delete('menu');
    redirect(base_url($this->uri->segment(1).'/frontend/manage-menu'));
  }
  public function delete_slider(){
    $id = $this->uri->segment(4);
    $this->db->where('id_slider',$id);
    $this->db->delete('slider');
    redirect(base_url($this->uri->segment(1).'/frontend/manage-slider'));
  }
}
