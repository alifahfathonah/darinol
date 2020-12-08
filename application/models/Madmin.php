<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Madmin extends CI_Model {
  function __construct(){
    parent::__construct();
  }
  public function validLogin($username,$password){
    $this->db->where('username',$username);
    $this->db->where('password',md5("ageiw234t94Fw".$password."013F3z2w"));
    $query = $this->db->get('admin');
    $data = $query->row_array();
    if($query->num_rows()>0){
      $array = array(
        'last_login' => date('Y-m-d H:i:s')
      );
      $this->mod->editData($array,'admin','id_admin',$data['id_admin']);
      return $query->row_array();
    }
    else return false;
  }
}
