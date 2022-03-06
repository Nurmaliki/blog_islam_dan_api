<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inspirasi extends CI_Controller
{
	public $contak = "Chat";
	public $title = "Lading Page Chat";

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->library('Dbload');
	}

	public function index()
	{
		$data["content"] = $this->contak;
		$data["title"] = $this->title;



		$jumlah_data = count($this->dbload->resulSqlQuery("SELECT * FROM `content_status` where tipe='inspirasi' "));


		$this->load->database();
		// $jumlah_data = $this->m_data->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url() . 'inspirasi/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 5;
		// $config["uri_segment"] = 2;
		$config["uri_segment"] = 2;  // uri parameter
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);

		// Membuat Style pagination untuk BootStrap v4
		$config['first_link']       = 'First';
		$config['last_link']        = 'Last';
		$config['next_link']        = 'Next';
		$config['prev_link']        = 'Prev';
		$config['full_tag_open']    = '<nav class="pagination m-t-4 custom-pagination"> <ul class="pagination" role="navigation">';
		$config['full_tag_close']   = '</ul></nav>';

		$config['num_tag_open']     = '<li class="page-item">';
		$config['num_tag_close']    = '</li>';

		$config['cur_tag_open']     = '<li class="page-item active" aria-current="page"><span class="page-link">';
		$config['cur_tag_close']    = '</span></li>  ';

		$config['next_tag_open']    = '<li class="page-item">';
		$config['next_tagl_close']  = '</li>';

		$config['prev_tag_open']    = '<li class="page-item disabled" aria-disabled="true" aria-label="« Previous">';
		$config['prev_tagl_close']  = ' <span class="page-link" aria-hidden="true">‹</span></li>';

		$config['first_tag_open']   = '<li class="page-item">';
		$config['first_tagl_close'] = '</li>';

		$config['last_tag_open']    = '<li class="page-item">';
		$config['last_tagl_close']  = '</li>';

		$from = $this->uri->segment(2) != null ? $this->uri->segment(2) : 0;
		$this->pagination->initialize($config);
		// $data['artikel'] = $this->db->get('user',$number,$offset)->result();
		// $data['user'] = $this->m_data->data($config['per_page'],$from);
		$data["inspirasi"] = $this->dbload->resulSqlQuery("SELECT * FROM `content_status` where tipe='inspirasi' ORDER BY create_date DESC	LIMIT " . $config['per_page'] . " OFFSET " . $from);
		$data["links"] = $this->pagination->create_links();


		// print_r($data);

		$this->load->view('web/newWeb/inspirasi', $data);
	}
	public function detail()
	{
		$data["inspirasi_terkait"] = $this->dbload->resulSqlQuery("SELECT * FROM `content_status` where tipe='inspirasi'AND id != " . $this->uri->segment(3) . " ORDER BY create_date DESC	LIMIT 2");
		$data["inspirasi"] = $this->dbload->resulSqlQuery("SELECT * FROM `content_status` where tipe='inspirasi' AND id = " . $this->uri->segment(3))[0];
		$this->load->view('web/newWeb/inspirasi_detail', $data);
	}

	public function detail_by_title($url)
	{
		$url = str_replace("-", " ", $url);
		$data["inspirasi_terkait"] = $this->dbload->resulSqlQuery("SELECT * FROM `content_status` where tipe='inspirasi'AND judul != '$url'  ORDER BY create_date DESC	LIMIT 2");
		$data["inspirasi"] = $this->dbload->resulSqlQuery("SELECT * FROM `content_status` where tipe='inspirasi' AND judul ='$url'")[0];
		$this->load->view('web/newWeb/inspirasi_detail', $data);
	}
}
