<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notification extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct()
    {
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
        $params = array('server_key' => 'Mid-server-Dn9C4S6x5kZUG5qDUE1X5HGU', 'production' => true);
		$this->load->library('veritrans');
		$this->load->library('Dbload');
		$this->load->library('Sendmail');
		$this->veritrans->config($params);
		$this->load->helper('url');
		
    }
	public function Dom()
	{
		 echo 'test notification handler';
		$batas_akhir=date("Y-m-d h:i:s", time() + ((3600 *24)*30) );

		// $json_result = file_get_contents('php://input');
		// $result = json_decode($json_result,"true");
		$data=array('status'=>"2020",'batas_akhir'=>$batas_akhir);

		$orderno="1228336723";

			//Update Data
			$this->db->update('paket_register',$data,array('orderno'=>$orderno));
			//$notif = $this->veritrans->status($result->order_id);

	//	error_log(print_r($result,TRUE));

	}

	public function index()
	{
		 echo 'test notification handler';

		$json_result = file_get_contents('php://input');
		$back = json_decode($json_result,"true");
		
		$orderno=$back['order_id'];

		

		$sql="SELECT * FROM paket_register WHERE orderno='$orderno' ";
		$result=$this->dbload->resulSqlQuery($sql);
		
		$pro_DI=$result[0]->produk_id;
		$sql="SELECT * FROM produk WHERE id='$pro_DI' ";
		$_limit=$this->dbload->resulSqlQuery($sql);
		$limit=$_limit[0]->limit;

		$dateIN=date("Y-m-d");
		$cekgo=$this->inc->ResultAllby_ID("paket_register",array(
			"user_id"=>$result[0]->user_id,
			"produk_id"=>$result[0]->produk_id,
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
			
		$data=array('status'=>$back['status_code'],'start_awal'=>$batas_awal,'batas_akhir'=>$batas_akhir);	



		if($back['status_code']==200){
			//Update Data
			$this->db->update('paket_register',$data,array('orderno'=>$orderno));
			//$notif = $this->veritrans->status($result->order_id);
			$this->MailTo($orderno);
		}

		error_log(print_r($back,TRUE));

	}

	function MailTo($po){
		$order=$po;
		$data=$this->dbload->GetResultData(array(
											'where'=>array('orderno'=>$order),
											'table'=>'paket_register',
											))[0];
															
		$html='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
		<title>Syariaid, Modern Email Template + Builder Access</title>
		<link href="http://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
		<style type="text/css"> 
		.Syariaid html
		{
			width: 100%;
		}
		
		::-moz-selection{background:#fefac7;color:#4a4a4a;}
		::selection{background:#fefac7;color:#4a4a4a;}
		
		.Syariaid body { 
		   margin: 0; 
		   padding: 0; 
		}
		
		.Syariaid .ReadMsgBody
		{
			width: 100%;
			background-color: #e1e1e1;
		}
		.Syariaid .ExternalClass
		{
			width: 100%;
			background-color: #e1e1e1;
		}
		
		.Syariaid a {
			color:#ffc740; text-decoration: none; font-weight: 600; font-style: normal;
		}
		
		.Syariaid p,
		.Syariaid div {
			margin: 0 !important;
		}
		.Syariaid table {
			border-collapse: collapse;
		}
		
		
		@media only screen and (max-width: 640px)  {
			body { width: auto !important;}
			body table table{width:100% !important; }
			body table[class="table-wrapper"] {width: auto !important; margin: 0px 20px !important;}
			body table[class="table-inner"] {width: 100% !important; margin: 0 auto !important;}
			body table[class="full"] {width: 100% !important; margin: 0 auto !important;}
			body td[class="center"] {text-align: center !important;}
			body td[class="rewrite_padding"] {padding:0px !important; border-left: none !important;}body td[class="rewrite_padding_one"] {padding:6px 30px !important; border-left: none !important;}
			body td[class="rewrite_padding_one"] {padding:6px 30px 0px 30px!important; border-left: none !important; text-align: center !important;}
			
			body td[class="blocked"] {width: 100%;display: block !important; border: 0 !important;}
			body img[class="img_scale"] {width: 100% !important; height: auto !Important;}
			
			
		}
		
		
		@media only screen and (max-width: 479px)  {
			body { width: auto !important;}
			body table table{width:100% !important; }
			body table[class="table-wrapper"] {width: auto !important; margin: 0px 20px !important;}
			body table[class="table-inner"] {width: 100% !important; margin: 0 auto !important;}
			body table[class="full"] {width: 100% !important; margin: 0 auto !important;}
			body td[class="center"] {text-align: center !important;}
			body td[class="rewrite_padding"] {padding:0px !important; border-left: none !important;}
			body td[class="rewrite_padding_one"] {padding:6px 30px 0px 30px!important; border-left: none !important; text-align: center !important;}
			
			body td[class="blocked"] {width: 100%;display: block !important; border: 0 !important;}
			body img[class="img_scale"] {width: 100% !important; height: auto !Important;}
			
			
		}
		</style>
		
		<!--[if lt mso 14]>
			<style type="text/css">
			td span {
			font-family: Arial, sans-serif;
			}
			
			td a {
			font-family: Arial, sans-serif;
			}
			body {font-family: Arial, sans-serif !important;}
			</style>
		<![endif]-->
		
		<!--[if mso 15]>
			<style type="text/css">
			td span {
			font-family: Arial, sans-serif;
			}
			
			 td a {
			font-family: Arial, sans-serif;
			}
			body {font-family: Arial, sans-serif !important;}
			</style>
		<![endif]-->
		
		
		</head>
		<body  style="margin:0 ; padding:0;"> 
		<!-- START spacer -->
		<table  width="100%" bgcolor="#e1e1e1" class="ds-bg-module" border="0" align="center" cellpadding="0" cellspacing="0">
			<tbody><tr>
				<td height="40" style="padding:0; line-height: 0;">
				&nbsp;
				</td>
			</tr>
		</tbody></table>
		<!-- END spacer -->
		
		<!-- START section separator -->
		<table  width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#e1e1e1" class="ds-bg-module" style="padding: 0; margin: 0; ">
			<tbody><tr>
				<td valign="top" align="center">
					<table class="table-wrapper" width="640" bgcolor="#ffc740" border="0" align="center" cellpadding="0" cellspacing="0" style="background-color: rgb(21, 180, 111);">
						<tbody><tr class="ds-bg-element">
							<td width="640" style="padding: 40px 30px;">
								<table class="table-inner" width="580" border="0" align="center" cellpadding="0" cellspacing="0">
									<tbody><tr>
										<td valign="top">
											<table class="full" width="580" border="0" align="center" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
												<!-- START OF HEADING-->
												<tbody><tr>
													<td align="center" valign="middle" style="margin: 0; padding-bottom: 10px; text-transform: uppercase; font-size:22px ; font-weight: normal; color:#ffffff; font-family: "Raleway", Arial, sans-serif; line-height: 32px;  mso-line-height-rule: exactly;">
														<span>
															<a href="#" style="color:#ffffff; font-weight: normal; text-decoration: none;"  class="tea14-content-editable"><p>Pembayaran <br/>'.$data->produk.'</p></a>
														</span>
													</td>
												</tr>
												<!-- END OF HEADING-->
											</tbody></table>
										</td>
									</tr>
								</tbody></table>
							</td>
						</tr>
					</tbody></table>
				</td>
			</tr>
		</tbody></table>
		<!-- END section separator -->
		
		<!-- START 1/2 column highlighted left image -->
		<table  width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#e1e1e1" class="ds-bg-module" style="padding: 0; margin: 0; ">
			<tbody><tr>
				<td valign="top" align="center">
					<table class="table-wrapper" width="640" bgcolor="#f1f1f1" border="0" align="center" cellpadding="0" cellspacing="0">
						<tbody><tr class="ds-bg-element ele-active">
							<td width="640" style="padding: 50px 30px 0px 30px;">
								<table class="table-inner" width="580" border="0" align="center" cellpadding="0" cellspacing="0">
									<tbody><tr>
										<td valign="top">
											<!-- START OF LEFT COLUMN-->
											<table class="full" width="240" border="0" align="left" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
												<tbody><tr>
													<td  class="center" align="left" style="padding: 0px; margin: 0; font-weight: normal; font-size:13px ; color:#a0a0a0; font-family: "Raleway", sans-serif; line-height: 100%;">
														<span>
														<a href="#" style="color: rgb(21, 180, 111); border-color: rgb(21, 180, 111);"  class="tea14-content-editable">
															<img class="img_scale" src="https://syaria.id/public/images/web/lp/hp.png" editable="true" alt="img-240-312" width="240" height="312" border="0" style="display: block; border-color: rgb(21, 180, 111); color: rgb(21, 180, 111);">
														</a>
														</span>
													</td>
												</tr>
											</tbody></table>
											<!-- END OF LEFT COLUMN-->
											
											<!-- START OF SPACER-->
											<table width="1" border="0" align="left" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
												<tbody><tr>
													<td width="100%" height="20" style="line-height:0;">									
													&nbsp;
													</td>
												</tr>
											</tbody></table>
											<!-- START OF SPACER-->
											
											<!-- START OF RIGHT COLUMN-->
											<table class="full" width="310" border="0" align="right" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
												<!-- START OF BORDER-->
												<tbody>
												<!-- END OF BORDER-->
												
												<!-- START OF HEADING-->
												
												<!-- END OF HEADING-->
												
												<!-- START OF TEXT-->
												<tr class="ds-remove" >
													<td  align="left" valign="middle" style="margin: 0; padding: 0; font-size:16px ; font-weight: normal; color:#a0a0a0; font-family: "Raleway", Arial, sans-serif; line-height: 24px;  mso-line-height-rule: exactly;">
		<span  class="tea14-content-editable">
		<p>Assalamualaikum warohmatullahi wabarokatuh</p>
		<p>Alhamdulillah</p>';
		
		if($data->status=="201"){
			$html.='<p>Sebentar lagi kaka '.$data->nama.' dapat menikmati layanan dalam Aplikasi SYARIAID. 
			Mohon selesaikan pembayaran sedekah kaka:</p>
			Nomor Invoice :&nbsp;<strong>'.$data->orderno.'</strong><br> 
			Tipe Bayar :&nbsp;<strong>'.$data->payment_type.' - Va Nomor :'.$data->va_number.'</strong><br> 
			Produk Yg Dibeli : <strong>'.$data->produk.'</strong><br> 
			Total sedekah : <strong><strong>'.$this->inc->rupiah($data->infaq + $data->infaq_sukarela).'<br><br>
			</strong></strong>
			<p>Syukron katsiron</p>';
		}
			if($data->status=="200"){
			$html.='<p>Syukron katsiron kaka '.$data->nama.' <br/> Telah melakukan pembayaran untuk produk <br/><b>'.$data->produk.'</b><br/>';

			// if($data->produk_id=="4" or $data->produk_id="5"){
			// 	$html.='<h3>Paket yang didapat</h3>
			// 	<ol>
			// 	<li>Konsultasi Selama '.($data->produk_id=="4"?"7":"30").' hari <b> dengan seluruh Ustadz/Ustadzah SYARIAID</b></li>
			// 	<li>Tergabung dalam Channel Dakwah Selama '.($data->produk_id=="4"?"1 Minggu":"1 Bulan").'</li>
			// 	<li>Jam layanan konsultasi 07:00 – 22:00 WIB setiap hari</li>
			// 	</ol>';
			// 	$html.='Selanjutnya kaka <strong>'.$data->nama.'</strong> langsung konsultasi dengan Ustadz/Ustadzah di menu</p>
			// 	“Chat Ustadz”<br>'; 
			// }
			
			$html.='<p>Jazakumullah Khoiron Katsiron</p>
			<strong>Untuk bantuan silahkan WA ke no 085716204599</strong><br/><br/><br/><br/>';
		}
		
		$html .='</span>
													</td>
												</tr>
												<!-- END OF TEXT-->
												
												<!-- START OF BUTTONS-->
												
												<!-- END OF BUTTONS-->
												
												<!-- START OF VERTICAL SPACER-->
												<tr>
													<td height="50" style="padding:0; line-height: 0;">
													&nbsp;
													</td>
												</tr>
												<!-- END OF VERTICAL SPACER-->
											</tbody></table>
											<!-- END OF RIGHT COLUMN-->
										</td>
									</tr>
								</tbody></table>
							</td>
						</tr>
					</tbody></table>
				</td>
			</tr>
		</tbody></table>
		<!-- END 1/2 column highlighted left image -->
		
		<!-- START footer -->
		<table  width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#e1e1e1" class="ds-bg-module" style="padding: 0; margin: 0; ">
			<tbody><tr>
				<td valign="top" align="center">
					<table class="table-wrapper" width="640" bgcolor="#ffffff" border="0" align="center" cellpadding="0" cellspacing="0">
						<tbody><tr class="ds-bg-element">
							<td width="640" style="padding: 50px 30px;">
								<table class="table-inner" width="580" border="0" align="center" cellpadding="0" cellspacing="0">
									<tbody><tr>
										<td valign="top">
											<table class="full" width="580" border="0" align="center" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
												<tbody>
												
												<!-- START OF TEXT-->
												<tr class="ds-remove" >
													<td align="center" style="padding: 0px; margin: 0; font-weight: normal; font-size:16px ; color:#a0a0a0; font-family: "Raleway", sans-serif; line-height: 24px;mso-line-height-rule: exactly;">
														<span  class="tea14-content-editable">';
														
														if($data->status=="201"){
														$html .='
														<p>Lakukan pembayaran sedekah sebelum '.$this->inc->TanggalIndo(substr($data->expired_bayar,0,10)).'-'.substr($data->expired_bayar,-10).' WIB&nbsp; <br/>&nbsp; <a href="'.$data->pdf_url.'" target="_blank" >Panduan bayar</a> &nbsp;Abaikan jika sudah bayar</p>';
														}
														if($data->status=="200"){
															$html .='
														<p>Jam layanan konsultasi : 07:00 – 22:00 WIB setiap hari</p>';
															
														}
														
														$html .='</span>
													</td>
												</tr>
												<!-- END OF TEXT-->
											</tbody></table>
										</td>
									</tr>
								</tbody></table>
							</td>
						</tr>
					</tbody></table>
				</td>
			</tr>
		</tbody></table>
		<!-- END footer -->
		
		<!-- START call to action -->
		<table  width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#e1e1e1" class="ds-bg-module" style="padding: 0; margin: 0; ">
			<tbody><tr>
				<td valign="top" align="center">
					<table class="table-wrapper" width="640" bgcolor="#f4b183" border="0" align="center" cellpadding="0" cellspacing="0" style="">
						<tbody><tr class="ds-bg-element">
							<td width="640" style="padding: 50px 30px;">
								<table class="table-inner" width="580" border="0" align="center" cellpadding="0" cellspacing="0">
									<tbody><tr>
										<td valign="top" style="padding: 0px;">
											<table class="full" width="580" border="0" align="center" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
												<!-- START OF HEADING-->
												<tbody><tr class="ds-remove" >
													<td  align="center" valign="middle" style="margin: 0; padding: 0; text-transform: uppercase; font-size:22px ; font-weight: normal; color:#ffffff; font-family: "Raleway", Arial, sans-serif; line-height: 32px;  mso-line-height-rule: exactly;">
														<span  class="tea14-content-editable"><p style="color:#ffffff; font-weight: normal; text-decoration: none;">Sempurnakan Hijrahmu Dengan SYARIAID</p></span>
														<table class="table-inner" width="580" border="0" align="center" cellpadding="0" cellspacing="0">
														<tr>
														<td valign="top" style="padding: 0px;"><img class="img_scale" src="https://syaria.id/public/images/web/lp/syaria1.png" editable="true" alt="img-240-312" width="120" height="64" border="0" style="display: block; border-color: rgb(21, 180, 111); color: rgb(21, 180, 111);"></td>
														<td valign="top" style="padding: 0px;"><img class="img_scale" src="https://syaria.id/public/images/gplay.png" editable="true" alt="img-240-312" width="120" height="64" border="0" style="display: block; border-color: rgb(21, 180, 111); color: rgb(21, 180, 111);"></td>
														</tr>
														</table>
													</td>
												</tr>
												<!-- END OF HEADING-->
												
												<!-- START OF BUTTON-->
												
												<!-- END OF BUTTON-->
											</tbody></table>
										</td>
									</tr>
								</tbody></table>
							</td>
						</tr>
					</tbody></table>
				</td>
			</tr>
		</tbody></table>
		<!-- END call to action -->
		 </body>
		</html>';
		
		$param=array(
			"tomail"=>$data->email, 
			"subject"=>"Pembayaran ".$data->produk." ".$data->orderno,
			"body"=>$html
		);
		$this->sendmail->send($param);
	}
}
