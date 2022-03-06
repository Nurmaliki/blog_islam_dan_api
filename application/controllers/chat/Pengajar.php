<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajar extends CI_Controller {
	public $contak="Pengajar";
	public $title="Pengajar";
	
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
			

		$sql_total = $this->inc->count_all('fooddelivery_restaurant', false);
        
		$sql_data = $this->inc->filter($search, $limit, $start, $order_field, $order_ascdesc, 'fooddelivery_restaurant', false, array('(@row_number := @row_number +1)  AS no','name','email','gender','tempat_lahir','tanggal_lahir','pendidikan','pendidikan_pesantren','kitab','desc','city','location','address','rekening','shift'), array('name','email','gender','tempat_lahir','tanggal_lahir','pendidikan','pendidikan_pesantren','kitab','desc','city','location','address','rekening','shift'), false, false); 
        
		$sql_filter = $this->inc->count_filter($search, 'fooddelivery_restaurant', false, array('name','email','gender','tempat_lahir','tanggal_lahir','pendidikan','pendidikan_pesantren','kitab','desc','city','location','address','rekening','shift'), false, false); 
        $data=array();
		foreach($sql_data as $xr){

			$data[]=array($xr['no'],$xr['name'],
						"Shift ".$xr['shift'],
						$xr['email'],
						strtoupper($xr['gender']),
						$xr['tempat_lahir'],
						$xr['tanggal_lahir'],
						$xr['pendidikan'],
						$xr['pendidikan_pesantren'],
						$xr['kitab'],
						$xr['desc'],
						$xr['city'],
						$xr['location'],
						$xr['address'],
						$xr['rekening']
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
 
	function Created($tipe,$id=""){
		$html='<form id="Statusfrom" enctype="multipart/form-data"><div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<input type="hidden" value="Save" name="store">
						<input type="hidden" value="'.$tipe.'" name="tipe">
						<label for="exampleInputEmail1">Content '.$tipe.' Title</label>
						<input type="text" class="form-control" name="judul" id="exampleInputEmail1" placeholder="Content '.$tipe.'">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Upload Gambar background</label>
						<input type="file" name="file" class="form-control" id="exampleInputEmail1">
					</div>

					<div class="form-group">
						<label for="exampleInputEmail1">Content '.$tipe.'</label>
						<textarea name="blog" class="summernote"></textarea>
					</div>
				
				</div>
				</div>
				<input type="submit" name="submitdata" value="Save" class="btn btn-primary"></form><script type="text/javascript">
				$(function(){
					
					$(".summernote").summernote({height:300,tableClassName: "table table-bordered table-striped",dialogsInBody: true,dialogsFade: false,
					 });
				});</script>';
	header('Content-Type: application/json');
	echo json_encode($html); 													
	}

}
