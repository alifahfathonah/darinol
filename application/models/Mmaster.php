<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmaster extends CI_Model {
	// constrcutor
	function __construct(){
		parent::__construct();
	}
	function fetchAdmin($limit,$start,$pagenumber) {
	    if($pagenumber!="")
	      $this->db->limit($limit,($pagenumber*$limit)-$limit);
	    else
	      $this->db->limit($limit,$start);
	    $this->db->order_by('id_admin','DESC');

	    $query = $this->db->get('admin');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;
	}
	function fetchAdminSearch($data) {
			$this->db->like($data['by'],$data['search']);
	    $this->db->order_by('id_admin','DESC');

	    $query = $this->db->get('admin');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;
	}
	function fetchProduct($limit,$start,$pagenumber) {
	    if($pagenumber!="")
	      $this->db->limit($limit,($pagenumber*$limit)-$limit);
	    else
	      $this->db->limit($limit,$start);
	    $this->db->order_by('id_product','DESC');

	    $query = $this->db->get('product');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;
	}
	function fetchProductSearch($data) {
			$this->db->like($data['by'],$data['search']);
	    $this->db->order_by('id_product','DESC');

	    $query = $this->db->get('product');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;
	}
	function fetchStudent($limit,$start,$pagenumber) {
	    if($pagenumber!="")
	      $this->db->limit($limit,($pagenumber*$limit)-$limit);
	    else
	      $this->db->limit($limit,$start);

	    $this->db->order_by('name_student','ASC');
	    $query = $this->db->get('student');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;
	}
	function fetchStudentSearch($data) {
			$this->db->like($data['by'],$data['search']);
			$this->db->order_by('name_student','ASC');
	    $query = $this->db->get('student');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;
	}
	function fetchStudentClass($limit,$start,$pagenumber,$id) {
	    if($pagenumber!="")
	      $this->db->limit($limit,($pagenumber*$limit)-$limit);
	    else
	      $this->db->limit($limit,$start);

	  	$this->db->where('id_kelas',$id);
	  	$this->db->join('siswa','siswa.id_siswa = siswa_kelas.id_siswa');
		$this->db->join('user','siswa.id_wali = user.id_user');
	    $this->db->order_by('nama_siswa','DESC');
	    $query = $this->db->get('siswa_kelas');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;
	}
	// function fetchAllStudentClass($id) {
	//     $this->db->where('id_kelas',$id);
	//   	$this->db->join('siswa','siswa.id_siswa = siswa_kelas.id_siswa');
	// 	$this->db->join('user','siswa.id_wali = user.id_user');
	//     $this->db->order_by('nama_siswa','DESC');
	//     $query = $this->db->get('siswa_kelas');
	//     if($query->num_rows()>0){
	//       return $query->result();
	//     }
	//     else return FALSE;
	// }
	function fetchClassNotInput($id_student_class) {
	    $data = $this->mod->getDataWhere('student_class','id_student_class',$id_student_class);
			$this->db->where_not_in('id_class',$data['id_class']);
	    $this->db->order_by('name_class','ASC');

	    $query = $this->db->get('class');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;
	}
	function fetchMasterInvoice($limit,$start,$pagenumber) {
	    if($pagenumber!="")
	      $this->db->limit($limit,($pagenumber*$limit)-$limit);
	    else
	      $this->db->limit($limit,$start);

	    $this->db->order_by('id_ms_tagihan','ASC');
	    $query = $this->db->get('ms_tagihan');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;
	}
	function fetchBank($limit,$start,$pagenumber) {
	    if($pagenumber!="")
	      $this->db->limit($limit,($pagenumber*$limit)-$limit);
	    else
	      $this->db->limit($limit,$start);

	    $this->db->order_by('nama_bank','ASC');
	    $query = $this->db->get('bank');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;
	}
	function fetchStudentNotInput($id) {
		/*
		$sql = "
			SELECT as_pegawai.*
			FROM as_pegawai
			WHERE as_pegawai.id_pegawai NOT IN (SELECT as_keluarga.id_pegawai from as_keluarga)
			Order BY nama_lengkap ASC
		";
		$query = $this->db->query($sql);
		if($query->num_rows()>0){
			return $query->result();
		}
		else return FALSE;
		*/
		$this->db->where('tp_student.id_student NOT IN (SELECT tp_student_class.id_student from tp_student_class where id_class = \''.$id.'\')');
		$this->db->where('tp_student.id_student NOT IN (SELECT tp_student_class.id_student from tp_student_class where id_class != \''.$id.'\' and active = 0)');
	    $this->db->order_by('nis_student','ASC');
	    $query = $this->db->get('student');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;

	}
	function fetchStudentNotInputBackup($id) {
		/*
		$sql = "
			SELECT as_pegawai.*
			FROM as_pegawai
			WHERE as_pegawai.id_pegawai NOT IN (SELECT as_keluarga.id_pegawai from as_keluarga)
			Order BY nama_lengkap ASC
		";
		$query = $this->db->query($sql);
		if($query->num_rows()>0){
			return $query->result();
		}
		else return FALSE;
		*/
		$this->db->where('siswa.id_siswa NOT IN (SELECT sip_siswa_kelas.id_siswa from sip_siswa_kelas where id_kelas = \''.$id.'\')');
	    $this->db->order_by('nis','ASC');
	    $query = $this->db->get('siswa');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;

	}
	function fetchTransaction($limit,$start,$pagenumber) {
	    if($pagenumber!="")
	      $this->db->limit($limit,($pagenumber*$limit)-$limit);
	    else
	      $this->db->limit($limit,$start);
	    $this->db->order_by('id_transaction_code','DESC');
	    $query = $this->db->get('transaction_code');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;
	}
}
