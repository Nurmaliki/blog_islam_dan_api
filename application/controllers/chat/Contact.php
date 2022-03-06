<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
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


		

		$this->load->view('web/newWeb/contact',$data);
	}
	public function detail(){
		$data["artikel_terkait"]=$this->dbload->resulSqlQuery("SELECT * FROM `content_status` where tipe='artikel' ORDER BY create_date DESC	LIMIT 2");
		$data["artikel"]=$this->dbload->resulSqlQuery("SELECT * FROM `content_status` where tipe='artikel' AND id = ".$this->uri->segment(3))[0];
		$this->load->view('web/newWeb/artikel_detail',$data);
	}
	public function send_mail() {
		// print_r($this->input->post());
		// die();

        $to_email  = "syariaidofficial@gmail.com";
        $from_email= $this->input->post('email');
        $pesan= $this->input->post('pesan');
        $nama= $this->input->post('nama');

			$datas["from_email"]	=	$from_email;							
			$datas["pesan"]			=	$pesan;	
			$datas["nama"]			=	$nama;	
	
			$this->inc->IncSave_Data('contact_us',$datas);

        //Load email library
        $this->load->library('email');
		$config = array();
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'xxx';
		$config['smtp_user'] = 'xxx';
		$config['smtp_pass'] = 'xxx';
		$config['smtp_port'] = 25;
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");

        $this->email->from($from_email, $nama);
        $this->email->to($to_email);
        $this->email->subject('Masukan atau kritik');
        $this->email->message($pesan);
        //Send mail
        if($this->email->send()){
            $this->session->set_flashdata("email_sent","Congragulation Email Send Successfully.");
		}else{
            $this->session->set_flashdata("email_sent","You have encountered an error");
		}
        // $this->load->view('contact_email_form');
		// $this->load->view('web/newWeb/contact',$data);
		redirect('contact');
    }

	public function pesan(){
		$data["content"]='Contact_us_pesan';
		$data["contact_us_pesan"]=$this->contak;

		$data["title"]=$this->title;


		

		// $this->load->view('web/newWeb/contact',$data);
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
			

		$sql_total = $this->inc->count_all('contact_us',["id !="=>"NULL"]);
        
		$sql_data = $this->inc->filter($search, $limit, $start, $order_field, $order_ascdesc, 'contact_us', false,
										array('(@row_number := @row_number +1)  AS no','id','nama','from_email','pesan'), array('id,nama,from_email'), false,["id !="=>"NULL"], false); 
        
		$sql_filter = $this->inc->count_filter($search, 'contact_us', false, array('id,nama,from_email,pesan'), false,["id !="=>"NULL"]); 
        $data=array();
		foreach($sql_data as $xr){
			$urlink=base_url()."page-content-subfaq/".$xr['id'];
			$urlink_delete=base_url()."SubfaqDelete/".$xr['id']; 

		
			//	$page='<span type="button" id="'.$xr['id'].'" class="btn-sm btn-rounded btn-outline-info btn-sm" onclick="return EditPage(this.id)" >Edit</span>  &nbsp;<a href="'.$urlink_delete.'"  id="'.$xr['id'].'" class="btn-sm btn-rounded btn-outline-danger btn-sm" onclick="return confirm(`Are you sure you want to delete?`)" >Delete</a>';

			
			$data[]=array($xr['no'],$xr['nama'],$xr['from_email'],$xr['pesan']
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