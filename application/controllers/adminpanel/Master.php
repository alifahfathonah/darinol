<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {
  function __construct(){
    parent::__construct();
    if($this->session->userdata('loginAdmin') == FALSE){
      redirect(base_url('adminpanel'));
    }
    $this->load->model('mmaster');
  }
  // manage function
  public function manage_admin(){
    $data['path'] = 'admin/master/manage-admin';
    $data['title'] = 'Atur Admin';

    $this->form_validation->set_rules('search','Search','required');

		if(!$this->form_validation->run()){
	    // Ngeload data
	    $perpage = 20;
	    $this->load->library('pagination'); // load libraray pagination
	    $config['base_url'] = base_url($this->uri->segment(1).'/master/manage-user/'); // configurate link pagination
	    $config['total_rows'] = $this->mod->countData('admin');// fetch total record in databae using load
	    $config['per_page'] = $perpage; // Total data in one page
	    $config['uri_segment'] = 4; // catch uri segment where locate in 4th posisition
	    $choice = $config['total_rows']/$config['per_page'] = $perpage; // Total record divided by total data in one page
	    $config['num_links'] = round($choice); // Rounding Choice Variable
	    $config['use_page_numbers'] = TRUE;
	    $this->pagination->initialize($config); // intialize var config
	    $page = ($this->uri->segment(4))? $this->uri->segment(4) : 0; // If uri segment in 4th = 0 so this program not catch the uri segment
	    $data['results'] = $this->mmaster->fetchAdmin($config['per_page'],$page,$this->uri->segment(4)); // fetch data using limit and pagination
	    $data['links'] = $this->pagination->create_links(); // Make a variable (array) link so the view can call the variable
	    $data['total_rows'] = $this->mod->countData('admin'); // Make a variable (array) link so the view can call the variable
	    $this->parser->parse('admin/index',$data);
		}
		else{
			$data['results'] = $this->mmaster->fetchAdminSearch($_POST); // fetch data using limit and pagination
			$data['links'] = false;
      $this->parser->parse('admin/index',$data);
		}
	}
  public function manage_product(){
    $data['path'] = 'admin/master/manage-product';
    $data['title'] = 'Atur Produk';

    $this->form_validation->set_rules('search','Search','required');

		if(!$this->form_validation->run()){
	    // Ngeload data
	    $perpage = 20;
	    $this->load->library('pagination'); // load libraray pagination
	    $config['base_url'] = base_url($this->uri->segment(1).'/master/manage-product/'); // configurate link pagination
	    $config['total_rows'] = $this->mod->countData('product');// fetch total record in databae using load
	    $config['per_page'] = $perpage; // Total data in one page
	    $config['uri_segment'] = 4; // catch uri segment where locate in 4th posisition
	    $choice = $config['total_rows']/$config['per_page'] = $perpage; // Total record divided by total data in one page
	    $config['num_links'] = round($choice); // Rounding Choice Variable
	    $config['use_page_numbers'] = TRUE;
	    $this->pagination->initialize($config); // intialize var config
	    $page = ($this->uri->segment(4))? $this->uri->segment(4) : 0; // If uri segment in 4th = 0 so this program not catch the uri segment
	    $data['results'] = $this->mmaster->fetchProduct($config['per_page'],$page,$this->uri->segment(4)); // fetch data using limit and pagination
	    $data['links'] = $this->pagination->create_links(); // Make a variable (array) link so the view can call the variable
	    $data['total_rows'] = $this->mod->countData('product'); // Make a variable (array) link so the view can call the variable
	    $this->parser->parse('admin/index',$data);
		}
		else{
			$data['results'] = $this->mmaster->fetchProductSearch($_POST); // fetch data using limit and pagination
			$data['links'] = false;
      $this->parser->parse('admin/index',$data);
		}
	}
  // add function
  public function add_admin(){
    $data['path'] = 'admin/master/add-admin';
    $data['title'] = 'Tambah Admin';

    $this->form_validation->set_rules('username','Username','required');
    $this->form_validation->set_rules('password','Password','required');
    $this->form_validation->set_rules('confirm','Confirm Password','required|matches[password]');
    $this->form_validation->set_rules('full_name','Nama','required');
    $this->form_validation->set_rules('email','Email','required|valid_email');
    if(!$this->form_validation->run()){
      $this->parser->parse('admin/index',$data);
    }
    else{
      $array = array(
        'username' => $this->input->post('username'),
        'full_name' => $this->input->post('full_name'),
        'password' => md5("ageiw234t94Fw".$this->input->post('password')."013F3z2w"),
        'email' => $this->input->post('email'),
        'date_admin' => date('Y-m-d H:i:s')
      );
      $this->mod->saveData($array,'admin');
      redirect(base_url($this->uri->segment(1).'/master/manage-admin'));
    }
  }
  public function add_product(){
    $data['path'] = 'admin/master/add-product';
    $data['title'] = 'Tambah Produk';

    $this->form_validation->set_rules('product_category','Kategori Produk','required');
    $this->form_validation->set_rules('alias_product','Alias URL','required');
    $this->form_validation->set_rules('name_product','Nama Produk','required');
    $this->form_validation->set_rules('short_description','Deskripsi Singkat','required');
    $this->form_validation->set_rules('status_stock','Status Stok','required');
    $this->form_validation->set_rules('product_featured','Produk Terlaris','required');
    if(!$this->form_validation->run()){
      $this->parser->parse('admin/index',$data);
    }
    else{
      $config['upload_path'] = './asset/images/product/';
      $config['allowed_types'] = 'png|jpg|jpeg';
      $config['max_size'] = '2048';
      $config['file_name'] = 'product-'.$this->mod->urlFriendly($post['name_product']).'-'.date('Ymdhis');
      $this->load->library('upload',$config);

      if(!$this->upload->do_upload()){
        $array = array(
          'product_category' => $this->input->post('product_category'),
          'alias_product' => $this->input->post('alias_product'),
          'name_product' => $this->input->post('name_product'),
          'short_description' => $this->input->post('short_description'),
          'description' => $this->input->post('description'),
          'status_stock' => $this->input->post('status_stock'),
          'product_featured' => $this->input->post('product_featured'),
          'date_product' => date('Y-m-d H:i:s')
        );
        $this->mod->saveData($array,'product');
        redirect(base_url($this->uri->segment(1).'/master/manage-product'));
      }
      else{
        $upload_data = $this->upload->data();
        $array = array(
          'product_category' => $this->input->post('product_category'),
          'alias_product' => $this->input->post('alias_product'),
          'name_product' => $this->input->post('name_product'),
          'short_description' => $this->input->post('short_description'),
          'description' => $this->input->post('description'),
          'status_stock' => $this->input->post('status_stock'),
          'product_featured' => $this->input->post('product_featured'),
          'image_featured' => 'asset/images/course/'.$upload_data['file_name'],
          'date_product' => date('Y-m-d H:i:s')
        );
        $this->mod->saveData($array,'product');
        redirect(base_url($this->uri->segment(1).'/master/manage-product'));
      }
    }
  }
  public function add_student_class(){
    $data['path'] = 'default/master/add-student-class';
    $data['title'] = 'Tambah Siswa di Kelas | Backoffice TPQ Assalaam';

    $id = $this->uri->segment(4);
    $data['result'] = $this->mod->getDataWhere('class','id_class',$id);
    if($data['result'] == false)
    redirect(base_url($this->uri->segment(1).'/master/manage-class'));

    $data['student'] = $this->mmaster->fetchStudentNotInput($data['result']['id_class']);
    $this->form_validation->set_rules('id_class','Nama Kelas','required');
    if(!$this->form_validation->run()){
      $this->load->view('default/index',$data);
    }
    else{
      for($i=0;$i<5;$i++){
        if($this->input->post('id_student['.$i.']')!=""){
          $array = array(
            'id_student' => $this->input->post('id_student['.$i.']'),
            'id_class' => $this->input->post('id_class'),
            'date_in' => date('Y-m-d',strtotime($this->input->post('date_in['.$i.']'))),
            'active' => 0
          );
          $this->mod->saveData($array,'student_class');
        }
        else{
          break;
        }
      }
      redirect(base_url($this->uri->segment(1).'/master/manage-class'));
    }
  }
  // edit function
  public function edit_admin(){
    $data['path'] = 'admin/master/edit-admin';
    $data['title'] = 'Ubah Admin';

    $id = $this->uri->segment(4);
    $data['result'] = $this->mod->getDataWhere('admin','id_admin',$id);
    if($data['result'] == false)
    redirect(base_url($this->uri->segment(1).'/master/manage-admin'));

    $this->form_validation->set_rules('username','Username','required');
    $this->form_validation->set_rules('full_name','Full Name','required');
    $this->form_validation->set_rules('email','Email','required|valid_email');
    if(!$this->form_validation->run()){
      $this->load->view('admin/index',$data);
    }
    else{
      $array = array(
        'username' => $this->input->post('username'),
        'full_name' => $this->input->post('full_name'),
        'email' => $this->input->post('email')
      );
      if($this->input->post('password') != ''){
        $password = "ageiw234t94Fw".$this->input->post('password')."013F3z2w";
        $array['password'] = md5($password);
      }
      $this->mod->editData($array,'admin','id_admin',$data['result']['id_admin']);
      redirect(base_url($this->uri->segment(1).'/master/manage-admin'));
    }
  }
  public function edit_product(){
    $data['path'] = 'admin/master/edit-product';
    $data['title'] = 'Ubah Produk';

    $id = $this->uri->segment(4);
    $data['result'] = $this->mod->getDataWhere('product','id_product',$id);
    $data['product_gallery'] = $this->mod->fetchDataWhere('product_gallery','id_product',$id);
    if($data['result'] == false)
    redirect(base_url($this->uri->segment(1).'/master/manage-product'));

    $this->form_validation->set_rules('product_category','Kategori Produk','required');
    $this->form_validation->set_rules('alias_product','Alias URL','required');
    $this->form_validation->set_rules('name_product','Nama Produk','required');
    $this->form_validation->set_rules('short_description','Deskripsi Singkat','required');
    $this->form_validation->set_rules('status_stock','Status Stok','required');
    $this->form_validation->set_rules('product_featured','Produk Terlaris','required');
    if(!$this->form_validation->run()){
      $this->parser->parse('admin/index',$data);
    }
    else{
      $config['upload_path'] = './asset/images/product/';
      $config['allowed_types'] = 'png|jpg|jpeg';
      $config['max_size'] = '2048';
      $config['file_name'] = 'course-'.$this->mod->urlFriendly($post['name_course']).'-'.date('Ymdhis');
      $this->load->library('upload',$config);

      if(!$this->upload->do_upload()){
        $array = array(
          'product_category' => $this->input->post('product_category'),
          'alias_product' => $this->input->post('alias_product'),
          'name_product' => $this->input->post('name_product'),
          'short_description' => $this->input->post('short_description'),
          'description' => $this->input->post('description'),
          'status_stock' => $this->input->post('status_stock'),
          'product_featured' => $this->input->post('product_featured'),
          'date_product' => date('Y-m-d H:i:s')
        );
        $this->mod->editData($array,'product','id_product',$id);
        redirect(base_url($this->uri->segment(1).'/master/manage-product'));
      }
      else{
        $array = array(
          'product_category' => $this->input->post('product_category'),
          'alias_product' => $this->input->post('alias_product'),
          'name_product' => $this->input->post('name_product'),
          'short_description' => $this->input->post('short_description'),
          'description' => $this->input->post('description'),
          'status_stock' => $this->input->post('status_stock'),
          'product_featured' => $this->input->post('product_featured'),
          'iamge_featured' => 'asset/images/course/'.$upload_data['file_name'],
          'date_product' => date('Y-m-d H:i:s')
        );
        $this->mod->editData($array,'product','id_product',$id);
        redirect(base_url($this->uri->segment(1).'/master/manage-product'));
      }
    }
  }
  public function save_gallery(){
    $post = $_POST;
    // Check form submit or not
    if(isset($post)){
      $countId = $this->mod->countWhereData('product_gallery','id_product',$this->uri->segment(4));
      if($countId > 0){
        for($i=0;$i<$countId;$i++){
          $array = array(
            'caption' => $post['caption_existing'][$i],
            'sort_order' => $post['sort_order_existing'][$i]
          );
          $this->db->where('id_product_gallery',$post['id_product_gallery'][$i]);
          $this->db->update('product_gallery',$array);
        } // end for $countId
      } // end if $countId

      $data = array();
      // Count total files
      $countfiles = count($_FILES['files']['name']);

      // Looping all files
      for($i=0;$i<$countfiles;$i++){

        if(!empty($_FILES['files']['name'][$i])){

          // Define new $_FILES array - $_FILES['file']
          $_FILES['file']['name'] = $_FILES['files']['name'][$i];
          $_FILES['file']['type'] = $_FILES['files']['type'][$i];
          $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
          $_FILES['file']['error'] = $_FILES['files']['error'][$i];
          $_FILES['file']['size'] = $_FILES['files']['size'][$i];

          // Set preference
          $config['upload_path'] = 'asset/images/product';
          $config['allowed_types'] = 'jpg|jpeg|png';
          $config['max_size'] = '2000'; // max_size in kb
          $config['file_name'] = 'product-'.$this->mod->urlFriendly($post['caption'][$i])."-".date('Ymdhis');

          //Load upload library
          $this->load->library('upload',$config);

          // File upload
          if($this->upload->do_upload('file')){
            // Get data about the file
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];

            $array = array(
              'id_product' => $this->uri->segment(4),
              'image_product_gallery' => 'asset/images/product/'.$filename,
              'caption' => $post['caption'][$i],
              'sort_order' => $post['sort_order'][$i],
              'date_product_gallery' => date('Y-m-d H:i:s')
            );
            $this->db->insert('product_gallery',$array);

            // Initialize array
            $data['filenames'][] = $filename;
          }
        }
      } // end for $countfiles

    } // end if post upload
    redirect(base_url($this->uri->segment(1).'/master/edit-product/'.$this->uri->segment(4)));
  }
  // delete function
  public function delete_admin(){
    $id = $this->uri->segment(4);
    $this->db->where('id_admin',$id);
    $this->db->delete('admin');
    redirect(base_url($this->uri->segment(1).'/master/manage-admin'));
  }
  public function delete_product(){
    $id = $this->uri->segment(4);
    $this->db->where('id_product',$id);
    $this->db->delete('product');
    redirect(base_url($this->uri->segment(1).'/master/manage-product'));
  }
  public function delete_product_gallery(){
    $id = $this->uri->segment(4);
    $data = $this->mod->getDataWhere('product_gallery','id_product_gallery',$id);
    $this->db->where('id_product_gallery',$id);
    $this->db->delete('product_gallery');

    unlink('./'.$data['image_product_gallery']);
    //echo $data['image_product_gallery'];
    redirect(base_url($this->uri->segment(1).'/master/edit-product/'.$data['id_product']));
  }
}
