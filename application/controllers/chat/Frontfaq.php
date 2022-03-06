<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontfaq extends CI_Controller {
	public $contak="Faq";
	public $title="Flayer";
	
	public function __construct()
    {
        parent::__construct();
        // if (!$this->session->userdata('logged_in')) {
        //     $this->session->set_flashdata('flash_danger', 'Please login to view this page');
        //     redirect('Login');
		// }
		$this->load->library('Dbload');
    } 

	public function index()
	{
		$data["content"]=$this->contak;
		$data["title"]=$this->title;

		$this->load->view('index',$data);
	}

	public function data($id_parent='')
	{
		$data["faq_all"]=$this->dbload->resulSqlQuery("SELECT * FROM `content_faq` where id_parent= 0 ORDER BY create_date ASC");

		//print_r($id_parent);
		if( $id_parent != ''  ){
			$id_parent = $id_parent;
		}else{
			$id_parent = $data["faq_all"][0]->id;
		}
		// print_r($id_parent);
		// print_r($data["faq_all"][0]);
		//die();
		$data["content"]=$this->contak;
		$data["title"]=$this->title;

		// $faq_active=$this->inc->ResultAllby_ID("content_faq",["id"=>$id_parent]);
		
		$data["faq_active"]=$this->dbload->resulSqlQuery("SELECT * FROM `content_faq` where id='".$id_parent."' ORDER BY create_date DESC");
		
		$data["subfaq"]=$this->dbload->resulSqlQuery("SELECT * FROM `content_faq` where id_parent='".$id_parent."' ORDER BY create_date ASC");

		// $faq_all=$this->inc->ResultAllby_ID("content_faq",["id_parent"=>0]);
		// $subfaq=$this->inc->ResultAllby_ID("content_faq",["id_parent"=>$id_parent]);
		// $data["faq_active"]=$faq_active;
		// $data["faq_all"]=$faq_all;
		// $data["subfaq"]=$subfaq;
		

		// $this->load->view('index',$data);
		$this->load->view('web/newWeb/faq',$data);
	}

	public function datano($id_parent='')
	{
		$data["faq_all"]=$this->dbload->resulSqlQuery("SELECT * FROM `content_faq` where id_parent= 0 ORDER BY create_date ASC");

		// print_r($id_parent);
		// if( $id_parent != ''  ){
		// 	$id_parent = $id_parent;
		// }else{
			$id_parent = $data["faq_all"][0]->id;
		// }
		// print_r($id_parent);
		// print_r($data["faq_all"][0]);
		// die();
		$data["content"]=$this->contak;
		$data["title"]=$this->title;

		// $faq_active=$this->inc->ResultAllby_ID("content_faq",["id"=>$id_parent]);
		
		$data["faq_active"]=$this->dbload->resulSqlQuery("SELECT * FROM `content_faq` where id='".$id_parent."' ORDER BY create_date DESC");
		
		$data["subfaq"]=$this->dbload->resulSqlQuery("SELECT * FROM `content_faq` where id_parent='".$id_parent."' ORDER BY create_date ASC");

		// $faq_all=$this->inc->ResultAllby_ID("content_faq",["id_parent"=>0]);
		// $subfaq=$this->inc->ResultAllby_ID("content_faq",["id_parent"=>$id_parent]);
		// $data["faq_active"]=$faq_active;
		// $data["faq_all"]=$faq_all;
		// $data["subfaq"]=$subfaq;
		

		// $this->load->view('index',$data);
		$this->load->view('web/newWeb/faq',$data);
	}

	public function detail($id)
	{
		// $data["faq_all"]=$this->dbload->resulSqlQuery("SELECT * FROM `content_faq` where id_parent= 0 ORDER BY create_date ASC");

		$data["content"]=$this->contak;
		$data["title"]=$this->title;

				
		$data["faq_active"]=$this->dbload->resulSqlQuery("SELECT * FROM `content_faq` where id='".$id."' ORDER BY create_date DESC");
		
		$this->load->view('web/newWeb/faq_detail',$data);
	}

}
