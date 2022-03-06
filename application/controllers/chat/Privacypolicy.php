<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Privacypolicy extends CI_Controller {
	public $contak="Chat";
	public $title="Lading Page Chat";
	
	public function __construct()
    {
        parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
        $this->load->library('Dbload');
    }

    public function index(){
		$data["content"]=$this->contak;
		$data["title"]=$this->title;


		
		$data["content"]= $this->dbload->resulSqlQuery("SELECT * FROM `content_status` where tipe='privacy-policy'")[0];
		// print_r()


		$this->load->view('web/newWeb/privacy-policy',$data);
	}
	public function detail(){
		$data["artikel_terkait"]=$this->dbload->resulSqlQuery("SELECT * FROM `content_status` where tipe='artikel' ORDER BY create_date DESC	LIMIT 2");
		$data["artikel"]=$this->dbload->resulSqlQuery("SELECT * FROM `content_status` where tipe='artikel' AND id = ".$this->uri->segment(3))[0];
		$this->load->view('web/newWeb/artikel_detail',$data);
	}
}   