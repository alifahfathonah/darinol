<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mproduct extends CI_Model {
	// constrcutor
	function __construct(){
		parent::__construct();
	}
  function countProductStatus($status){
    $this->db->where('status_stock',$status);
    return $this->db->count_all_results('product');
  }
  function fetchProductStatus($limit,$start,$pagenumber,$status){
    if($pagenumber!="")
			$this->db->limit($limit,($pagenumber*$limit)-$limit);
		else
			$this->db->limit($limit,$start);

    $this->db->where('status_stock',$status);
		$this->db->order_by('date_product','desc');
		$query = $this->db->get('product');
		if($query->num_rows() > 0){
			return $query->result();
		}
		else return false;
  }
  function fetchFeaturedProductStatus($limit,$start,$pagenumber,$status){
    if($pagenumber!="")
			$this->db->limit($limit,($pagenumber*$limit)-$limit);
		else
			$this->db->limit($limit,$start);

		$this->db->where('status_stock',$status);
    $this->db->where('product_featured',1);
		$this->db->order_by('date_product','desc');
		$query = $this->db->get('product');
		if($query->num_rows() > 0){
			return $query->result();
		}
		else return false;
  }
	function fetchAnotherProductStatus($limit,$start,$pagenumber,$status,$id){
    if($pagenumber!="")
			$this->db->limit($limit,($pagenumber*$limit)-$limit);
		else
			$this->db->limit($limit,$start);

		$this->db->where('status_stock',$status);
    $this->db->where('id_product !=',$id);
		$this->db->order_by('date_product','desc');
		$query = $this->db->get('product');
		if($query->num_rows() > 0){
			return $query->result();
		}
		else return false;
  }
  function fetchProductSearchStatus($search,$status){
    $this->db->where('status_stock',$status);
		$this->db->like('name_product',$search);
		$this->db->or_like('short_description',$search);
		$this->db->or_like('description',$search);
		$this->db->or_like('product_category',$search);
		$this->db->order_by('date_product','desc');
		$query = $this->db->get('product');
		if($query->num_rows() > 0){
			return $query->result();
		}
		else return false;
  }
	function fetchAllProductGallery($id){
    $this->db->where('id_product',$id);
		$this->db->order_by('sort_order','asc');
		$query = $this->db->get('product_gallery');
		if($query->num_rows() > 0){
			return $query->result();
		}
		else return false;
  }
	// get functions
	function getProduct($id){
		$this->db->join('admin','product.id_admin = admin.id_admin');
		$this->db->where('id_product',$id);
    $this->db->where('status_stock',0);
		$query = $this->db->get('product');
		if($query->num_rows()>0){
			return $query->row_array();
		}
		else return false;
	}
}
