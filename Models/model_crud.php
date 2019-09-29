<?php
class model_crud extends CI_Model {

public function __construct(){
parent::__construct();
$this->load->database();
}

	public function findstr($param1){
		$this->db->where('id',$param1);
		$query=$this->db->get("datas_komik");
		return $query;
	}
	
	public function findstr1($limit,$start){
		//$this->db->where('id',$param1);
		$query=$this->db->get("datas_komik",$limit,$start);
		return $query;
	}

	public function findstr2(){
		//$this->db->where('id',$param1);
		$query=$this->db->get("datas_komik");
		return $query;
	}
	public function jumlah_baris(){
		//$this->db->where('id',$param1);
		$query=$this->db->get("datas_komik")->num_rows();
		return $query;
	}		
}

?>