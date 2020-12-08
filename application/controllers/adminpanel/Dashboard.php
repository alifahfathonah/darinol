<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
  function __construct(){
    parent::__construct();
  }
  function index(){
    if($this->session->userdata('loginAdmin') == FALSE){
      redirect(base_url('adminpanel/dashboard/login'));
    }
    $data['path'] = "admin/module/dashboard";
    $data['title'] = "Adminpanel";

    $data['product'] = $this->mod->countData('product');
    $data['article'] = $this->mod->countData('article');
    $data['product_gallery'] = $this->mod->countData('product_gallery');
    $this->parser->parse('admin/index',$data);
  }
  function login(){
    $password = "asdasd";
    //  echo md5("ageiw234t94Fw".$password."013F3z2w");
    $data['title'] = "Login Dashboard";
    $this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required|callback_validLogin');
		if(!$this->form_validation->run())
			$this->parser->parse('admin/login',$data);
		else{
				redirect(base_url('adminpanel/dashboard'));
		}
  }
  function logout(){
    $array = array(
      'idAdmin' => null,
      'loginAdmin' => false,
      'username' => null
    );
    $this->session->set_userdata($array);
    redirect(base_url($this->uri->segment(1)));
  }
  public function validLogin(){
		$this->load->model('madmin');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$result = $this->madmin->validLogin($username,$password);
		if($username != "" && $password != ""){
		if($result != FALSE){
			$array = array(
				'idAdmin' => $result['id_admin'],
				'loginAdmin' => TRUE,
				'username' => $result['username']
			);
			$this->session->set_userdata($array);
			return true;
		}
		else{
				$this->form_validation->set_message('validLogin','Username atau Password Tidak ditemukan');
			 return false;
		 }
	 }
	 else{
		 return true;
	 }
	}
}
