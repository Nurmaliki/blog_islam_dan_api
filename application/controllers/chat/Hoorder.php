<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hoorder extends CI_Controller {
	public $contak="Ho_Order";
	public $title="Order List";
	
	public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            $this->session->set_flashdata('flash_danger', 'Please login to view this page');
            redirect('Login');
		}
    }

	public function index()
	{
		$data["content"]=$this->contak;
		$data["title"]=$this->title;

		$this->load->view('index',$data);
	}

	public function  datapage(){
		$search = $_POST['search']['value'];
		$limit = $_POST['length']; 
		$start = $_POST['start']; 
		$order_index = $_POST['order'][0]['column']; 
		$order_field = $_POST['columns'][$order_index]['data']; 
		$order_ascdesc = $_POST['order'][0]['dir'];
		if($order_index<1){
			$order_field="tgl_register";
			$order_ascdesc="desc";
		}
			

		$sql_total = $this->inc->count_all('paket_register', false);
        
		$sql_data = $this->inc->filter($search, $limit, $start, $order_field, $order_ascdesc, 'paket_register', false, array('(@row_number := @row_number +1)  AS no','nama','email', 'tlp','tgl_register','orderno','produk','batas_akhir','infaq','infaq_sukarela','payment_type','bank','va_number','status'), array('nama','email', 'tlp','tgl_register','orderno','produk','batas_akhir','infaq','infaq_sukarela','payment_type','bank','va_number','status'), false, false); 
        
		$sql_filter = $this->inc->count_filter($search, 'paket_register', false, array('nama','email', 'tlp','tgl_register','orderno','produk','batas_akhir','infaq','infaq_sukarela','payment_type','bank','va_number','status'), false, false); 
        $data=array();
		foreach($sql_data as $xr){
		$stausorder="";

		$stausorder='<button style="padding: revert;" id="'.$xr['orderno'].'" onclick="return activestatus(this.id)" type="button" class="btn btn-outline-success" title="" data-toggle="tooltip" data-original-title="btn btn-outline-success">No Status Manual Cek</button>';
		
		if($xr['status']=="200"){
			$stausorder='<button style="padding: revert;" type="button" class="btn btn-outline-success" title="" data-toggle="tooltip" data-original-title="btn btn-outline-success">SETTLEMENT</button>';
		}elseif($xr['status']=="201"){
			$stausorder='<button style="padding: revert;" type="button" class="btn btn-outline-warning" title="" data-toggle="tooltip" data-original-title="btn btn-outline-warning" aria-describedby="tooltip447450">PENDING</button>
			<button style="padding: revert;" id="'.$xr['orderno'].'" onclick="return activestatus(this.id)" type="button" class="btn btn-outline-success" title="" data-toggle="tooltip" data-original-title="btn btn-outline-success">Active</button>
			';
		}elseif($xr['status']=="202"){
			$stausorder='<button style="padding: revert;" type="button" class="btn btn-danger" title="" data-toggle="tooltip" data-original-title="btn btn-danger">FAILURE</button>';
		}
			$data[]=array($xr['no'],$xr['orderno'],$xr['tgl_register'],
						strtoupper($xr['payment_type']),
						strtoupper($xr['bank']),
						$xr['va_number'],$this->inc->rupiah($xr['infaq']+$xr['infaq_sukarela']),
						$stausorder,
						$xr['produk'],
						$xr['batas_akhir'],
						$this->inc->rupiah($xr['infaq']),
						$this->inc->rupiah($xr['infaq_sukarela']),
						$xr['nama'],$xr['email'],$xr['tlp']
			);
		}
		$callback = array(
			'role'=>1,
			'draw'=>$_POST['draw'], 
			'recordsTotal'=>$sql_total,
			'recordsFiltered'=>$sql_filter,
			'data'=>$data
		);

		header('Content-Type: application/json');
		echo json_encode($callback); 

	}

}
