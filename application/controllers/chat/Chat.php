<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {
	public $contak="Chat";
	public $title="Lading Page Chat";
	
	public function __construct()
    {
        parent::__construct();
    }

    public function index(){
		$data["content"]=$this->contak;
		$data["title"]=$this->title;

		$this->load->view('web/lp_lama',$data);
	}
	public function manual(){
		$data["content"]=$this->contak;
		$data["title"]=$this->title;

		$this->load->view('web/chat1',$data);
	}

	public function home(){
		$data["content"]=$this->contak;
		$data["title"]=$this->title;

		$this->load->view('web/newWeb/index',$data);
	}


	public function konsultasiustadz(){
		$data["content"]=$this->contak;
		$data["title"]=$this->title;

		$this->load->view('web/chat1',$data);
	}
	public function tutorialpranikah(){
		$data["content"]=$this->contak;
		$data["title"]=$this->title;

		$this->load->view('web/chat1',$data);
	}
	public function undangustadz(){

		print_r($this->db->get('produk'));
		$data["content"]=$this->contak;
		$data["title"]=$this->title;

		$this->load->view('web/chat1',$data);
	}
}   