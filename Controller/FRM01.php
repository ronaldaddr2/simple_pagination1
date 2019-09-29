<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class FRM01 extends CI_Controller {
//constructor
public function __construct(){
parent::__construct();
$this->load->model('model_crud');
}

public function index()
{
	$this->load->library('pagination');
	$idstart = $this->input->get('start');
	$jumlah_data = $this->model_crud->jumlah_baris();
	$config['base_url'] = base_url().'index.php/FRM01/index';
	

	$config['per_page']=3;
	$config['total_rows']=$jumlah_data;
	$from = $this->uri->segment(3);
	
	$this->pagination->initialize($config);
	$strquery["links"]=$this->pagination->create_links();
	$strquery['listbook']=$this->model_crud->findstr1($config['per_page'],$from);
	$this->load->view('trx01',$strquery);

}


public function findme()
{
	$this->load->library('pagination');
	$idstart = $this->input->get('start');
	$jumlah_data = $this->model_crud->jumlah_baris();
	$config['base_url'] = base_url().'index.php/FRM01/findme';
	$config['per_page']=1;
	$config['page_query_string']=TRUE;
	$config['enable_query_strings']=TRUE;
	
	$config['first_tag_open']='<div>';
	$config['first_tag_close']='<div>';
	$config['next_tag_open']='<div>';
	$config['next_tag_close']='</div>';
	$config['last_link']='Akhir';
	$config['query_string_segment']='HALAMAN';
	$config['total_rows']=$jumlah_data;
	$from = $this->uri->segment(3);
	
	$this->pagination->initialize($config);
	$strquery['listbook']=$this->model_crud->findstr1($config['per_page'],$from);
	$this->load->view('trx01',$strquery);
	
}

public function issue()
{
	$id_book = $this->input->get('id');
	$strquery['issue_number']=$this->model_crud->findstr($id_book);
	$this->load->view('trx_issue',$strquery);
	
}

}