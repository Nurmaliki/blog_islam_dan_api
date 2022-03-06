<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
	public $contak="Chat";
	public $title="Lading Page Chat";
	
	public function __construct()
    {
        parent::__construct();
    }

    public function index(){
		$data["content"]=$this->contak;
		$data["title"]=$this->title;

		$this->load->view('web/web',$data);
	}
}   