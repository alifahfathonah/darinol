<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Msetting extends CI_Model {
  function __construct(){
    parent::__construct();
  }
  function footer($id){
    $mod = $this->mod->getDataWhere('setting','id_setting',$id);
    echo $mod['footer'];
  }
  function copy($id){
    $mod = $this->mod->getDataWhere('setting','id_setting',$id);
    echo $mod['copyright'];
  }
  function fb($id){
    $mod = $this->mod->getDataWhere('setting','id_setting',$id);
    echo $mod['facebook'];
  }
  function tw($id){
    $mod = $this->mod->getDataWhere('setting','id_setting',$id);
    echo $mod['twitter'];
  }
  function ig($id){
    $mod = $this->mod->getDataWhere('setting','id_setting',$id);
    echo $mod['instagram'];
  }
  function wa($id){
    $mod = $this->mod->getDataWhere('setting','id_setting',$id);
    echo $mod['whatsapp_number'];
  }
  function phone($id){
    $mod = $this->mod->getDataWhere('setting','id_setting',$id);
    echo $mod['phone_number'];
  }
  function email($id){
    $mod = $this->mod->getDataWhere('setting','id_setting',$id);
    echo $mod['email_website'];
  }
  function title($id){
    $mod = $this->mod->getDataWhere('setting','id_setting',$id);
    echo $mod['title_website'];
  }
  function logo($id){
    $mod = $this->mod->getDataWhere('setting','id_setting',$id);
    return $mod['logo_website'];
  }
  function maps($id){
    $mod = $this->mod->getDataWhere('setting','id_setting',$id);
    echo $mod['gmaps_link'];
  }
}
