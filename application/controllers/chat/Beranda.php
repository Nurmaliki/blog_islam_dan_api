<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
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


		$data["artikel"]=$this->dbload->resulSqlQuery("SELECT * FROM `content_status` where tipe='artikel' LIMIT 4");
		$data["inspirasi"]=$this->dbload->resulSqlQuery("SELECT * FROM `content_status` where tipe='inspirasi' order by create_date asc");
		$data["who_benefit_des"]=$this->dbload->resulSqlQuery("SELECT * FROM `content_status` where tipe='who-benefit-des' ")[0];
		$data["who_benefit"]=$this->dbload->resulSqlQuery("SELECT * FROM `content_status` where tipe='who-benefit' order by create_date DESC");
		$data["diliput_oleh"]=$this->dbload->resulSqlQuery("SELECT * FROM `content_status` where tipe='diliput-oleh' order by create_date DESC");
		$data["fitur"]=$this->dbload->resulSqlQuery("SELECT * FROM `content_status` where tipe='fitur' ");
		$data["desfitur"]=$this->dbload->resulSqlQuery("SELECT * FROM `content_status` where tipe='desfitur' ")[0];
		$data["tentang"]=$this->dbload->resulSqlQuery("SELECT * FROM `content_status` where tipe='tentang' ")[0];
		$data["taaruf"]=$this->dbload->resulSqlQuery("SELECT * FROM `content_status` where tipe='taaruf' ")[0];
		$data["services"]=$this->dbload->resulSqlQuery("SELECT * FROM `content_status` where tipe='services' ")[0];
		$data["konsultasi_ustadz"]=$this->dbload->resulSqlQuery("SELECT * FROM `content_status` where tipe='konsultasi-ustadz' ")[0];
		$data["tutorial_pranikah"]=$this->dbload->resulSqlQuery("SELECT * FROM `content_status` where tipe='tutorial-pranikah' ")[0];
		$data["undang_ustadz"]=$this->dbload->resulSqlQuery("SELECT * FROM `content_status` where tipe='undang-ustadz' ")[0];
		
		// print_r($data);

		$this->load->view('web/newWeb/index',$data);
	}
}   