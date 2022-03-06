<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller {
	public $contak="Faq";
	public $title="Flayer";
	
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

	public function  datapage($tipe){

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
			

		$sql_total = $this->inc->count_all('content_faq', ["tipe"=>$tipe,"id_parent"=>0]);
        
		$sql_data = $this->inc->filter($search, $limit, $start, $order_field, $order_ascdesc, 'content_faq', false,
										array('(@row_number := @row_number +1)  AS no','id','judul','content','like','unlike'), array('id,judul,content'), false, ["tipe"=>$tipe,"id_parent"=>0],false); 
        
		$sql_filter = $this->inc->count_filter($search, 'content_faq', false, array('id,judul,content'), false,  ["tipe"=>$tipe,"id_parent"=>0]); 
        $data=array();
		foreach($sql_data as $xr){
			$urlink=base_url()."page-content-faq/".$xr['id'];
			$urlink_delete=base_url()."FaqDelete/".$xr['id']; 

			// if ($tipe == 'artikel' || $tipe == 'diliput-oleh' ||  $tipe == 'inspirasi' ||  $tipe == 'fitur') {
				$page='<a href="'.$urlink.'"  class="btn-sm btn-rounded btn-outline-success btn-sm" >Detail<a/> &nbsp;<span type="button" id="'.$xr['id'].'" class="btn-sm btn-rounded btn-outline-info btn-sm" onclick="return EditPage(this.id)" >Edit</span>  &nbsp;<a href="'.$urlink_delete.'"  id="'.$xr['id'].'" class="btn-sm btn-rounded btn-outline-danger btn-sm" onclick="return confirm(`Are you sure you want to delete?`)" >Delete</a>';

			// } else {
			// 	$page='<a href="'.$urlink.'"  class="btn-sm btn-rounded btn-outline-success btn-sm" target="_blank">Detail <a/> &nbsp;<span type="button" id="'.$xr['id'].'" class="btn-sm btn-rounded btn-outline-info btn-sm" onclick="return EditPage(this.id)" >Edit</span> ';

			// }
			
			$data[]=array($xr['no'],$xr['judul'],$xr['like'],$xr['unlike'],$page,$xr['content']
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
		if ($tipe == 'taaruf' || $tipe == 'konsultasi-ustadz' || $tipe == 'tutorial-pranikah' || $tipe == 'undang-ustadz') {
			$html='<form id="Faqfrom" enctype="multipart/form-data"><div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<input type="hidden" value="Save" name="store">
						<input type="hidden" value="'.$tipe.'" name="tipe">
						<label for="exampleInputEmail1">Content '.$tipe.' Title</label>
						<input type="text" class="form-control" name="judul" id="exampleInputEmail1" placeholder="Content '.$tipe.'">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Upload Icon</label>
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
		} else {
			$html='<form id="Faqfrom" enctype="multipart/form-data"><div class="row">
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
		}
		
		
	header('Content-Type: application/json');
	echo json_encode($html); 													
	}


	function EditData($id){
		$result=$this->inc->ResultAllby_ID("content_faq",["id"=>$id]);
		if(count($result)>0){
			$result=$result[0];

			if ($result->tipe == 'taaruf' || $result->tipe == 'konsultasi-ustadz' || $result->tipe == 'tutorial-pranikah' || $result->tipe == 'undang-ustadz' ) {
			$html='<form id="Faqfrom" enctype="multipart/form-data"><div class="row">
				<div class="col-md-12">
					<div class="form-group">
					<input type="hidden" value="Edit" name="store">
						<input type="hidden" value="'.$result->id.'" name="id">
						<input type="hidden" value="'.$result->tipe.'" name="tipe">
						<label for="exampleInputEmail1">Content '.$result->tipe.' Title</label>
						<input type="text" class="form-control" name="judul" id="exampleInputEmail1" placeholder="Content '.$result->tipe.'" value="'.$result->judul.'">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Upload Icon</label>
						<input type="file" name="file" class="form-control" id="exampleInputEmail1">
					</div>

					<div class="form-group">
						<label for="exampleInputEmail1">Content '.$result->tipe.'</label>
						<textarea name="blog" class="summernote">'.$result->content.'</textarea>
					</div>
				
				</div>
				</div>
				<input type="submit" name="submit" value="Edit" class="btn btn-primary"></form><script type="text/javascript">
				$(function(){
					
					$(".summernote").summernote({height:300,tableClassName: "table table-bordered table-striped",dialogsInBody: true,dialogsFade: false,
					 });
				});</script>';
			} else {
				$html='<form id="Faqfrom" enctype="multipart/form-data"><div class="row">
				<div class="col-md-12">
					<div class="form-group">
					<input type="hidden" value="Edit" name="store">
						<input type="hidden" value="'.$result->id.'" name="id">
						<input type="hidden" value="'.$result->tipe.'" name="tipe">
						<label for="exampleInputEmail1">Content '.$result->tipe.' Title</label>
						<input type="text" class="form-control" name="judul" id="exampleInputEmail1" placeholder="Content '.$result->tipe.'" value="'.$result->judul.'">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Upload Gambar background</label>
						<input type="file" name="file" class="form-control" id="exampleInputEmail1">
					</div>

					<div class="form-group">
						<label for="exampleInputEmail1">Content '.$result->tipe.'</label>
						<textarea name="blog" class="summernote">'.$result->content.'</textarea>
					</div>
				
				</div>
				</div>
				<input type="submit" name="submit" value="Edit" class="btn btn-primary"></form><script type="text/javascript">
				$(function(){
					
					$(".summernote").summernote({height:300,tableClassName: "table table-bordered table-striped",dialogsInBody: true,dialogsFade: false,
					 });
				});</script>';
			}
	header('Content-Type: application/json');
	echo json_encode($html); 
		}

	}

	function DeleteData($id){
		$result=$this->inc->ResultAllby_ID("content_faq",["id"=>$id]);
		if(count($result)>0){
			$result=$result[0];
			$delete=$this->inc->DeleteDataALl(["id"=>$id],'content_faq'); 	
			redirect('content-'.$result->tipe);
		}

	}

	function Store(){
		// print_r((object) @$_FILES['file'] );
		// die();
		// $photolama=isset($this->);
		$photolama=false;
		$submit=$this->input->post('store');

		if($submit=="Edit"){
			$id=$this->input->post('id');
			$page=$this->inc->ResultAllby_ID("content_faq",["id"=>$id]);
			if(count($page)>0){
				if(!empty($this->input->post('file'))){
					$photolama=$page[0]->image;
				}
			}
		}

		if($submit=="Save"){
		$photo=$this->inc->upload_PhotoData($this->input->post('judul'),
											'file',
											'./asset/faq/',
											'png|gif|jpg',
											$photolama
											);
		}

		if($submit=="Edit" && isset($_FILES["file"]["name"]) && $_FILES["file"]["name"]!= ''){
											$created_at=time();						
											$profile=$created_at;
								
											$fileFoto = (object) @$_FILES['file'];										
											
						
											$target_dir = "./asset/faq/";
											
											$namaSementara = $_FILES['file']['tmp_name'];
											$target_file= $target_dir . basename($_FILES["file"]["name"]);
											$type = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
											$namaFile =$profile.'.'.$type;
											// tentukan lokasi file akan dipindahkan
											$dirUpload = $target_dir;						
											// pindahkan file
											$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
		}

		if(isset($_FILES["file"]["name"]) && $_FILES["file"]["name"] != ''){	

			if(isset($photo['status']) && $photo['status']==0){
				header('Content-Type: application/json');
				echo json_encode(array('errcode'=>201,'errmsg'=>'Data Upload File Not Valid'));
				exit();
				
			}else{
				if (isset($photo['upname'])) {
					$images=$photo['upname'];	

				} else {
					$images=$namaFile;	
				}
				
			}			
		}			
			$datas["judul"]=$this->input->post('judul');
			if(isset($_FILES["file"]["name"]) && $_FILES["file"]["name"] != ''){									
				$datas["image"]=$images;					
			}
			$datas["content"]=$this->input->post('blog');							
			$datas["tipe"]=$this->input->post('tipe');	

		if($submit=="Save"){
			$save=$this->inc->IncSave_Data('content_faq',$datas); 	
		}else{
		
			$save=$this->inc->IncUpdate_Data('content_faq',["id"=>$id],$datas); 	
		}

		if($save){
			$err=array(
				'errcode'=>'200',
				'errmsg'=>'Data Berhasil Disimpan'
			);
		}
		header('Content-Type: application/json');		
		echo json_encode($err);								

	}

	function page($id){
		$page=$this->inc->ResultAllby_ID("content_faq",["id"=>$id]);
		$data["content"]='page-faq-detail';
		$data["title"]=$this->title;
		$data["result"]=$page;

		// $data["content"]=$this->contak;
		// $data["title"]=$this->title;

		$this->load->view('index',$data);
		// $this->load->view('content/page-faq',$data);
		
	}

}
