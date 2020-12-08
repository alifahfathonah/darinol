<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marticle extends CI_Model {
	// constrcutor
	function __construct(){
		parent::__construct();
	}
  function countArticleStatus($status){
    $this->db->where('status_article',$status);
    return $this->db->count_all_results('article');
  }
  function countArticleCategoryStatus($status,$id){
		$this->db->where('status_article',$status);
    $this->db->where('id_category',$id);
    return $this->db->count_all_results('article');
  }
  function fetchArticleStatus($limit,$start,$pagenumber,$status){
    if($pagenumber!="")
			$this->db->limit($limit,($pagenumber*$limit)-$limit);
		else
			$this->db->limit($limit,$start);

    $this->db->join('category','article.id_category = category.id_category');
    $this->db->where('status_article',$status);
		$this->db->order_by('date_article','desc');
		$query = $this->db->get('article');
		if($query->num_rows() > 0){
			return $query->result();
		}
		else return false;
  }
  function fetchArticleCategoryStatus($limit,$start,$pagenumber,$status,$id){
    if($pagenumber!="")
			$this->db->limit($limit,($pagenumber*$limit)-$limit);
		else
			$this->db->limit($limit,$start);

    $this->db->join('category','article.id_category = category.id_category');
    $this->db->where('status_article',$status);
    $this->db->where('article.id_category',$id);
		$this->db->order_by('date_article','desc');
		$query = $this->db->get('article');
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return false;
		}
  }
  function fetchArticleSearchStatus($search,$status){
    $this->db->join('category','article.id_category = category.id_category');
    $this->db->where('status_article',$status);
		$this->db->like('title_article',$search);
		$this->db->or_like('contain_article',$search);

		$this->db->order_by('date_article','desc');
		$query = $this->db->get('article');
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

		$this->db->order_by('category','asc');
		$query = $this->db->get('category');
		if($query->num_rows() > 0){
			return $query->result();
		}
		else return false;
  }
  function fetchAllCategory(){
		$this->db->order_by('category','asc');
		$query = $this->db->get('category');
		if($query->num_rows() > 0){
			return $query->result();
		}
		else return false;
  }
	// get functions
	function getArticle($id){
		$this->db->join('admin','article.id_admin = article.id_admin');
    $this->db->join('category','article.id_category = category.id_category');
		$this->db->where('id_article',$id);
    $this->db->where('status_article',1);
		$query = $this->db->get('article');
		if($query->num_rows()>0){
			return $query->row_array();
		}
		else return false;
	}
	function getCategory($id){
		$this->db->where('id_category',$id);
		$query = $this->db->get('category');
		if($query->num_rows()>0){
			return $query->row_array();
		}
		else return false;
	}
}
