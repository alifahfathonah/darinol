<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mfront extends CI_Model {
	// constrcutor
	function __construct(){
		parent::__construct();
	}
	// get function
	function getArticle($id){
		$this->db->select('category.category,admin.full_name,article.*');
		$this->db->join('category','article.id_category = category.id_category');
		$this->db->join('admin','admin.id_admin = article.id_admin');
		$this->db->order_by('date_article','DESC');

		$this->db->where('id_article',$id);
		$query = $this->db->get('article');
		if($query->num_rows()>0){
			return $query->row_array();
		}
		else return FALSE;
	}
	// fetch function
  function fetchAllSlider(){
		$this->db->order_by('sort_order','asc');
		$query = $this->db->get('slider');
		if($query->num_rows() > 0){
			return $query->result();
		}
		else return false;
  }
  function fetchCategory($limit,$start,$pagenumber){
		if($pagenumber!="")
			$this->db->limit($limit,($pagenumber*$limit)-$limit);
		else
			$this->db->limit($limit,$start);

		$this->db->join('admin','admin.id_admin = category.id_admin');
		$this->db->order_by('date_category','desc');
		$query = $this->db->get('category');
		if($query->num_rows() > 0){
			return $query->result();
		}
		else return false;
  }
	function fetchCategorySearch($data) {
			$this->db->join('admin','admin.id_admin = category.id_admin');
			$this->db->like($data['by'],$data['search']);
	    $this->db->order_by('date_category','DESC');

	    $query = $this->db->get('category');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;
	}
  function fetchArticle($limit,$start,$pagenumber){
		if($pagenumber!="")
			$this->db->limit($limit,($pagenumber*$limit)-$limit);
		else
			$this->db->limit($limit,$start);

		$this->db->select('category.category,admin.full_name,article.*');
		$this->db->join('category','article.id_category = category.id_category');
		$this->db->join('admin','admin.id_admin = article.id_admin');
		$this->db->order_by('date_article','DESC');

		$query = $this->db->get('article');
		if($query->num_rows()>0){
			return $query->result();
		}
		else return FALSE;
  }
	function fetchArticleSearch($data) {
			$this->db->like($data['by'],$data['search']);
			$this->db->select('category.category,admin.full_name,article.*');
			$this->db->join('category','article.id_category = category.id_category');
			$this->db->join('admin','admin.id_admin = article.id_admin');
			$this->db->order_by('date_article','DESC');

	    $query = $this->db->get('article');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;
	}
  function fetchMenu($limit,$start,$pagenumber){
		if($pagenumber!="")
			$this->db->limit($limit,($pagenumber*$limit)-$limit);
		else
			$this->db->limit($limit,$start);

		$this->db->order_by('sort_order','ASC');

		$query = $this->db->get('menu');
		if($query->num_rows()>0){
			return $query->result();
		}
		else return FALSE;
  }
	function fetchMenuSearch($data) {
			$this->db->like($data['by'],$data['search']);
			$this->db->order_by('sort_order','ASC');
	    $query = $this->db->get('menu');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;
	}
  function fetchSlider($limit,$start,$pagenumber){
		if($pagenumber!="")
			$this->db->limit($limit,($pagenumber*$limit)-$limit);
		else
			$this->db->limit($limit,$start);

		$this->db->order_by('sort_order','ASC');

		$query = $this->db->get('slider');
		if($query->num_rows()>0){
			return $query->result();
		}
		else return FALSE;
  }
	function fetchSliderSearch($data) {
			$this->db->like($data['by'],$data['search']);
			$this->db->order_by('sort_order','ASC');
	    $query = $this->db->get('slider');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;
	}
}
