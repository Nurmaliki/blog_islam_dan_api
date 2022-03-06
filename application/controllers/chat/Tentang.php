<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {
	public $contak="Status";
	public $title="Flayer";
	
	public function __construct()
    {
        parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
        $this->load->library('Dbload');
        
    }

	public function index()
	{
		$data["content"]=$this->contak;
		$data["title"]='Tentang SYARIAID';

		$sql ="SELECT * FROM content_status  WHERE tipe = 'tentang'";
		$get_data=$this->dbload->resulSqlQuery($sql);
		$data["data"]=$get_data[0];
		// print_r($data);
		// die();

		// $this->load->view('index',$data);
		$this->load->view('web/newWeb/tentang',$data);
	}






}
