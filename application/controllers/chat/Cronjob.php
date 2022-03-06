<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin:*');
header('set X-Frame-Options "allow-from *" ');


class Cronjob extends CI_Controller {

	public $contak="Chat";
	public $title="Lading Page Chat";
	
	public function __construct()
    {
        parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->library('Dbload');
		$this->load->library('Sendmail');

		$params = array('server_key' => 'Mid-server-Dn9C4S6x5kZUG5qDUE1X5HGU', 'production' => true);
		$this->load->library('midtrans');
		$this->midtrans->config($params);
		$this->load->library('veritrans');
		$this->veritrans->config($params);
		$this->load->helper('url');	
	}
	
	function ActiveStat(){
		// ini_set('display_errors', 0);
		// error_reporting(0);

		$_date=date('Y-m-d'); // strtotime(date('Y-m-d'). ' -1 days'));
		$sql="SELECT * FROM paket_register WHERE `status` = '201' and DATE_FORMAT(cratedtime, '%Y-%m-%d') = '$_date'  AND ar_result IS NOT NULL ";
		$result=$this->dbload->resulSqlQuery($sql);

		foreach($result as $paket){

			$pro_DI=$paket->produk_id;
			$sql="SELECT * FROM produk WHERE id='$pro_DI' ";
			$_limit=$this->dbload->resulSqlQuery($sql);
			$limit=$_limit[0]->limit;

			$dateIN=date("Y-m-d");
			$cekgo=$this->inc->ResultAllby_ID("paket_register",array(
				"user_id"=>$paket->user_id,
				"produk_id"=>$paket->produk_id,
				"status"=>'200',
				"batas_akhir BETWEEN DATE_FORMAT('$dateIN', '%Y-%m-%d') AND batas_akhir ORDER BY id DESC limit 1"=>null
				)); 

				if(sizeof($cekgo)>0){
					$batas_awal=$cekgo[0]->batas_akhir;
					$batas_akhir=date("Y-m-d h:i:s",strtotime($batas_awal) + ((3600 *24)*$limit) ); // batas akhir aktif awalnya 30 hari
	
				}else{
					$batas_awal= date("Y-m-d h:i:s");
					$batas_akhir=date("Y-m-d h:i:s", time() + ((3600 *24)*$limit) );
				}

			$this->db->update('paket_register',["cronjob"=>0],array('orderno'=>$paket->orderno));	

			$js=$this->veritrans->status($paket->orderno);


				$ar=array(
					'error'=>$js->status_code,
					'msg'=>$js->transaction_status,
					);

					if($js->status_code=="200"){
						$data=array("status"=>"200",'start_awal'=>$batas_awal,'batas_akhir'=>$batas_akhir);
						$this->db->update('paket_register',$data,array('orderno'=>$paket->orderno));
					}


		}
		$this->Setordererror();

	}

	function Setordererror(){
		$_date=date('Y-m-d'); // strtotime(date('Y-m-d'). ' -1 days'));
		$sql="SELECT * FROM paket_register WHERE `status` = '201' and DATE_FORMAT(cratedtime, '%Y-%m-%d') = '$_date'  AND cronjob < '3'  and ar_result IS NULL ";
		$result=$this->dbload->resulSqlQuery($sql);

		foreach($result as $paket){

			$pro_DI=$paket->produk_id;
			$sql="SELECT * FROM produk WHERE id='$pro_DI' ";
			$_limit=$this->dbload->resulSqlQuery($sql);
			$limit=$_limit[0]->limit;

			$dateIN=date("Y-m-d");
			$cekgo=$this->inc->ResultAllby_ID("paket_register",array(
				"user_id"=>$paket->user_id,
				"produk_id"=>$paket->produk_id,
				"status"=>'200',
				"batas_akhir BETWEEN DATE_FORMAT('$dateIN', '%Y-%m-%d') AND batas_akhir ORDER BY id DESC limit 1"=>null
				)); 

				if(sizeof($cekgo)>0){
					$batas_awal=$cekgo[0]->batas_akhir;
					$batas_akhir=date("Y-m-d h:i:s",strtotime($batas_awal) + ((3600 *24)*$limit) ); // batas akhir aktif awalnya 30 hari
	
				}else{
					$batas_awal= date("Y-m-d h:i:s");
					$batas_akhir=date("Y-m-d h:i:s", time() + ((3600 *24)*$limit) );
				}

				$_statusJob=0;
				if($paket->cronjob < 3 ){
					$_statusJob=$paket->cronjob +1;
				}	
			$this->db->update('paket_register',["cronjob"=>$_statusJob],array('orderno'=>$paket->orderno));	

			$js=$this->veritrans->status($paket->orderno);

				$ar=array(
					'error'=>$js->status_code,
					'msg'=>$js->transaction_status,
					);

					if($js->status_code=="200"){
						$data=array("status"=>"200",'start_awal'=>$batas_awal,'batas_akhir'=>$batas_akhir);
						$this->db->update('paket_register',$data,array('orderno'=>$paket->orderno));
					}

					echo $paket->orderno."-".date("Y-m-d h:i:s")."status".$js->status_code;

		}
		echo "All-done";
	}

	
}   