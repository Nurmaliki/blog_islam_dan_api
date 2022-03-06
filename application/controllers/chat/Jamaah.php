<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jamaah extends CI_Controller {
	public $contak="Jamaah";
	public $title="Jamaah";
	
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
			$order_field="id";
			$order_ascdesc="desc";
		}

		$sql_total = $this->inc->count_all('fooddelivery_users', false);
        
		$sql_data = $this->inc->filter($search, $limit, $start, $order_field, $order_ascdesc, 'fooddelivery_users', false, array('(@row_number := @row_number +1)  AS no','fullname','phone_no','email'), array('fullname','phone_no','email','phone_no'), false, false); 
        
		$sql_filter = $this->inc->count_filter($search, 'fooddelivery_users', false, array('fullname','phone_no','email'), false, false); 
        $data=array();
		foreach($sql_data as $xr){

			$data[]=array($xr['no'],$xr['fullname'],$xr['phone_no'],
						$xr['email']
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
