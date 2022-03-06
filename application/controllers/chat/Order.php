<?php
defined('BASEPATH') or exit('No direct script access allowed');
header('Access-Control-Allow-Origin:*');
header('set X-Frame-Options "allow-from *" ');


class Order extends CI_Controller
{
	public $contak = "Chat";
	public $title = "Lading Page Chat";

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
	function MailTo($po)
	{
		$order = $po;
		$data = $this->dbload->GetResultData(array(
			'where' => array('orderno' => $order),
			'table' => 'paket_register',
		))[0];

		$html = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
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
															<a href="#" style="color:#ffffff; font-weight: normal; text-decoration: none;"  class="tea14-content-editable"><p>Menunggu Sedekah <br/>' . $data->produk . '</p></a>
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

		// if($data->status=="201"){
		$html .= '<p>Sebentar lagi kaka <strong>' . $data->nama . ' </strong> dapat menikmati layanan dalam Aplikasi SYARIAID. 
			Mohon selesaikan pembayaran kaka:</p>
			Nomor Invoice :&nbsp;<strong>' . strtoupper($data->orderno) . '</strong><br> 
			Tipe Bayar :&nbsp;<strong>' . strtoupper($data->payment_type) . ' - VANomor/No Rekening :' . strtoupper($data->va_number) . '</strong><br> 
			Produk Yg Dibeli : <strong>' . $data->produk . '</strong><br> 
			Total sedekah : <strong><strong>' . $this->inc->rupiah($data->infaq + $data->infaq_sukarela) . '<br><br>
			</strong></strong>
			<p>Syukron katsiron</p>';
		// }
		// 	if($data->status=="200"){
		// 	$html.='<p>Syukron katsiro kaka <strong>'.$data->nama.'</strong> <br/> Telah melakukan pembayaran infaq untuk produk <b>'.$data->produk.'</b><br/>
		// 	Selanjutnya kaka '.$data->nama.' langsung konsultasi dengan Ustadz/Ustadzah di menu</p>
		// 	“Tanya Ustadz”<br> 
		// 	<strong>Untuk bantuan silahkan hubungi no 085716204599 via Whatsapp</strong><br/><br/><br/><br/>
		// 	<p>Jazakumullah Khoiron Katsiron</p>';
		// }


		$html .= '</span>
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

		if ($data->status == "201") {
			$html .= '
														<p>Lakukan pembayaran sebelum ' . $this->inc->TanggalIndo(substr($data->expired_bayar, 0, 10)) . '-' . substr($data->expired_bayar, -10) . ' WIB&nbsp; <br/>&nbsp; <a href="' . $data->pdf_url . '" target="_blank" >Panduan bayar</a> &nbsp;Abaikan jika sudah bayar</p>';
		}
		if ($data->status == "200") {
			$html .= '
														<p>Jam layanan konsultasi : 07:00 – 22:00 WIB setiap hari</p>';
		}

		$html .= '</span>
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
		//redirect($data->pdf_url);
		$param = array(
			"tomail" => $data->email, //"syariaidofficial@gmail.com",
			"subject" => $data->produk . " " . $data->orderno,
			"body" => $html
		);
		$this->sendmail->send($param);
	}
	function produk($d)
	{
		$this->session->unset_userdata('orderno');
		$pages = explode("&&", decrypt_url($d));
		$data["content"] = $this->contak;
		$page = $pages[0];
		$personid = $pages[1];


		$data['resultprodak'] = $this->dbload->GetResultData(array(
			'table' => 'produk',
			'where' => array('id_categori' => $page)
		));
		$data['resultperson'] = $this->dbload->GetResultData(array(
			'table' => 'fooddelivery_users',
			'where' => array('id' => $personid)
		))[0];

		$data["title"] = $this->title;

		if ($page == "1") { /* Konsultasi Online*/
			// $this->load->view('web/order/konsultasi',$data);
			$this->load->view('web/order/konsultasi_paket', $data);
		} elseif ($page == "2") {
			$this->load->view('web/order/pranikah', $data);
		} elseif ($page == "3") {
			// $this->load->view('web/order_new/konsultasi_paket', $data);
			$this->load->view('web/order/taaruf', $data);
		} else {
			echo "Sory page yang anda cari tidak ditemukan";
			exit();
		}
	}

	function produk_new($d)
	{
		$this->session->unset_userdata('orderno');
		$pages = explode("&&", decrypt_url($d));
		$data["content"] = $this->contak;
		$page = $pages[0];
		$personid = $pages[1];


		$data['resultprodak'] = $this->dbload->GetResultData(array(
			'table' => 'produk',
			// 'where' => array('id' => $page)
			'where' => array('id_categori' => 3)
		));
		$data['resultperson'] = $this->dbload->GetResultData(array(
			'table' => 'fooddelivery_users',
			'where' => array('id' => $personid)
		))[0];

		$data["title"] = $this->title;

		// if ($page == "1") { /* Konsultasi Online*/
		// $this->load->view('web/order/konsultasi',$data);
		$this->load->view('web/order_new/konsultasi_paket', $data);
		// } elseif ($page == "2") {
		// 	$this->load->view('web/order_new/pranikah', $data);
		// } else {
		// 	echo "Sory page yang anda cari tidak ditemukan";
		// 	exit();
		// }
	}

	public function bugorder()
	{
		$page = 1;
		$personid = 1;

		$data['resultprodak'] = $this->dbload->GetResultData(array(
			'table' => 'produk',
			'where' => array('id' => $page)
		))[0];
		$data['resultperson'] = $this->dbload->GetResultData(array(
			'table' => 'fooddelivery_users',
			'where' => array('id' => $personid)
		))[0];

		$data["title"] = $this->title;

		$this->load->view('web/order/konsultasi_paket.php', $data);
	}


	public function index()
	{
		$this->session->unset_userdata('orderno');
		$data["content"] = $this->contak;
		$page = $this->input->get('page');
		$personid = $this->input->get('personid');


		$data['resultprodak'] = $this->dbload->GetResultData(array(
			'table' => 'produk',
			'where' => array('id' => $page)
		))[0];
		$data['resultperson'] = $this->dbload->GetResultData(array(
			'table' => 'fooddelivery_users',
			'where' => array('id' => $personid)
		))[0];

		$data["title"] = $this->title;

		if ($page == "1") { /* Konsultasi Online*/
			$this->load->view('web/order/konsultasi', $data);
		} elseif ($page == "2") {
			$this->load->view('web/order/pranikah', $data);
		} else {
			echo "Sory page yang anda cari tidak ditemukan";
			exit();
		}
	}

	function paymentProgress()
	{
		// Required
		$PostIN = explode(':', $this->input->post('data'));

		$infaqTambahan = str_replace(".", "", $this->input->post('infaq'));
		$key = $this->authio->RandomGeneredKey();
		//$this->session->set_userdata('orderno',$key['orderno']);

		$resultprodak = $this->dbload->GetResultData(array(
			'table' => 'produk',
			'where' => array('id' => $PostIN[1])
		))[0];
		$resultperson = $this->dbload->GetResultData(array(
			'table' => 'fooddelivery_users',
			'where' => array('id' => $PostIN[0])
		))[0];
		if ($PostIN[1] == "2") {
			$allPrice =	$resultprodak->infaq;
		} else {
			$allPrice =	$resultprodak->infaq + $infaqTambahan;
		}



		$transaction_details = array(
			'order_id' => $key['orderno'],
			'gross_amount' => $allPrice, // no decimal allowed for creditcard
		);

		if ($PostIN[1] == "1" or $PostIN[1] > 2) {
			$item1_details = array(
				'id' => $resultprodak->id,
				'price' => $resultprodak->infaq,
				'quantity' => 1,
				'name' => $resultprodak->nama
			);
			$item1_details_tambahan = array(
				'id' => 'SKI',
				'price' => $infaqTambahan,
				'quantity' => 1,
				'name' => "Infaq Sukarela"
			);

			$item_details = array($item1_details, $item1_details_tambahan);
		}

		if ($PostIN[1] == "2") {
			$item1_details = array(
				'id' => $resultprodak->id,
				'price' => $resultprodak->infaq,
				'quantity' => 1,
				'name' => $resultprodak->nama
			);
			$item_details = array($item1_details);
		}


		// Optional
		$customer_details = array(
			'first_name'    => "",
			'last_name'     => $resultperson->fullname,
			'email'         => $resultperson->email,
			'phone'         => $resultperson->phone_no,
			//   'billing_address'  => $billing_address,
			//   'shipping_address' => $shipping_address
		);

		// Data yang akan dikirim untuk request redirect_url.
		$credit_card['secure'] = true;
		//ser save_card true to enable oneclick or 2click
		//$credit_card['save_card'] = true;
		// minute day
		$time = time();
		$custom_expiry = array(
			'start_time' => date("Y-m-d H:i:s O", $time),
			'unit' => 'day',
			'duration'  => 1
		);

		$transaction_data = array(
			'transaction_details' => $transaction_details,
			'item_details'       => $item_details,
			'customer_details'   => $customer_details,
			'credit_card'        => $credit_card,
			'expiry'             => $custom_expiry
		);
		$batas_bayar = date("Y-m-d h:i:s", time() + (3600 * 24));

		$_data = array(
			"user_id" => $resultperson->id,
			"nama" => $resultperson->fullname,
			"email" => $resultperson->email,
			"tlp" => $resultperson->phone_no,
			"tgl_register" => date("Y-m-d H:i:s"),
			"orderno" => $key['orderno'],
			"categori" => $resultprodak->id_categori,
			"produk_id" => $resultprodak->id,
			"produk" => $resultprodak->nama,
			"infaq" => $resultprodak->infaq,
			"infaq_sukarela" => $infaqTambahan,
			"expired_bayar" => $batas_bayar,
			"created" => "B2C",
			"ip" => $this->inc->get_client_ip()
		);
		$this->dbload->SaveData(array("table" => "paket_register", "datas" => $_data));

		error_log(json_encode($transaction_data));
		$snapToken = $this->midtrans->getSnapToken($transaction_data);
		error_log($snapToken);
		echo $snapToken;
	}

	function paymentProgress_new()
	{
		// Required
		$PostIN = explode(':', $this->input->post('data'));

		$infaqTambahan = str_replace(".", "", $this->input->post('infaq'));
		$key = $this->authio->RandomGeneredKey();
		//$this->session->set_userdata('orderno',$key['orderno']);

		$resultprodak = $this->dbload->GetResultData(array(
			'table' => 'produk',
			'where' => array('id' => $PostIN[1])
		))[0];
		$resultperson = $this->dbload->GetResultData(array(
			'table' => 'fooddelivery_users',
			'where' => array('id' => $PostIN[0])
		))[0];
		if ($PostIN[1] == "2") {
			$allPrice =	$resultprodak->infaq;
		} else {
			$allPrice =	$resultprodak->infaq + $infaqTambahan;
		}



		$transaction_details = array(
			'order_id' => $key['orderno'],
			'gross_amount' => $allPrice, // no decimal allowed for creditcard
		);

		if ($PostIN[1] == "1" or $PostIN[1] > 2) {
			$item1_details = array(
				'id' => $resultprodak->id,
				'price' => $resultprodak->infaq,
				'quantity' => 1,
				'name' => $resultprodak->nama
			);
			$item1_details_tambahan = array(
				'id' => 'SKI',
				'price' => $infaqTambahan,
				'quantity' => 1,
				'name' => "Infaq Sukarela"
			);

			if ($infaqTambahan == 0) {
				$item_details = array($item1_details);
			} else {
				$item_details = array($item1_details, $item1_details_tambahan);
			}
		}

		if ($PostIN[1] == "2") {
			$item1_details = array(
				'id' => $resultprodak->id,
				'price' => $resultprodak->infaq,
				'quantity' => 1,
				'name' => $resultprodak->nama
			);
			$item_details = array($item1_details);
		}


		// Optional
		$customer_details = array(
			'first_name'    => "",
			'last_name'     => $resultperson->fullname,
			'email'         => $resultperson->email,
			'phone'         => $resultperson->phone_no,
			//   'billing_address'  => $billing_address,
			//   'shipping_address' => $shipping_address
		);

		// Data yang akan dikirim untuk request redirect_url.
		$credit_card['secure'] = true;
		//ser save_card true to enable oneclick or 2click
		//$credit_card['save_card'] = true;
		// minute day
		$time = time();
		$custom_expiry = array(
			'start_time' => date("Y-m-d H:i:s O", $time),
			'unit' => 'day',
			'duration'  => 1
		);

		$transaction_data = array(
			'transaction_details' => $transaction_details,
			'item_details'       => $item_details,
			'customer_details'   => $customer_details,
			'credit_card'        => $credit_card,
			'expiry'             => $custom_expiry
		);
		$batas_bayar = date("Y-m-d h:i:s", time() + (3600 * 24));

		$_data = array(
			"user_id" => $resultperson->id,
			"nama" => $resultperson->fullname,
			"email" => $resultperson->email,
			"tlp" => $resultperson->phone_no,
			"tgl_register" => date("Y-m-d H:i:s"),
			"orderno" => $key['orderno'],
			"categori" => $resultprodak->id_categori,
			"produk_id" => $resultprodak->id,
			"produk" => $resultprodak->nama,
			"infaq" => $resultprodak->infaq,
			"infaq_sukarela" => $infaqTambahan,
			"expired_bayar" => $batas_bayar,
			"created" => "B2C",
			"ip" => $this->inc->get_client_ip()
		);
		$this->dbload->SaveData(array("table" => "paket_register", "datas" => $_data));

		error_log(json_encode($transaction_data));
		$snapToken = $this->midtrans->getSnapToken($transaction_data);
		error_log($snapToken);
		echo $snapToken;
	}

	function PaymentFinish()
	{
		$PostIN = explode(':', $this->input->post('valdata'));
		//$key=$this->authio->RandomGeneredKey();

		$resultprodak = $this->dbload->GetResultData(array(
			'table' => 'produk',
			'where' => array('id' => $PostIN[1])
		))[0];
		$resultperson = $this->dbload->GetResultData(array(
			'table' => 'fooddelivery_users',
			'where' => array('id' => $PostIN[0])
		))[0];
		$Mids = $this->input->post('result_data');

		$result = json_decode($Mids, "true");
		$batas_bayar = date("Y-m-d h:i:s", time() + (3600 * 24));
		$_vaNumber = "";
		$_bankVA = "";
		if ($result['payment_type'] != "echannel" and $result['payment_type'] != "gopay" and $result['payment_type'] != "bank_transfer") {

			$_vaNumber = $result['va_numbers'][0]['va_number'];
			$_bankVA = $result['va_numbers'][0]['bank'];
			$pdf = $result['pdf_url'];
		}

		if ($result['payment_type'] == "echannel") {
			$_vaNumber = "Bill Key :" . $result['bill_key'] . "Bill Code :" . $result['biller_code'];
			$_bankVA = $result['payment_type'];
			$pdf = $result['pdf_url'];
		}


		if ($result['payment_type'] == "gopay") {
			$_vaNumber = $result['order_id'];
			$_bankVA = $result['payment_type'];
			$pdf = "";
		}

		if ($result['payment_type'] == "bank_transfer") {

			if (isset($result['permata_va_number'])) {

				$_vaNumber = $result['permata_va_number'];
				$_bankVA = "Permata";
				$pdf = $result['pdf_url'];
			} else {
				$_vaNumber = $result['va_numbers'][0]['va_number'];
				$_bankVA = $result['va_numbers'][0]['bank'];
				$pdf = $result['pdf_url'];
			}
		}


		$_data = array(
			"user_id" => $resultperson->id,
			"nama" => $resultperson->fullname,
			"email" => $resultperson->email,
			"tlp" => $resultperson->phone_no,
			"tgl_register" => date("Y-m-d H:i:s"),
			"orderno" => $result['order_id'],
			"categori" => $resultprodak->id_categori,
			"produk_id" => $resultprodak->id,
			"produk" => $resultprodak->nama,
			"infaq" => $resultprodak->infaq,
			"infaq_sukarela" => $result['gross_amount'] - $resultprodak->infaq,
			"expired_bayar" => $batas_bayar,
			"payment_type" => $result['payment_type'],
			"bank" => $_bankVA,
			"va_number" => $_vaNumber,
			"pdf_url" => $pdf,
			"status" => $result['status_code'],
			"created" => "B2C",
			"ar_result" => $Mids
		);
		$this->dbload->UpdateData(
			array(
				"table" => "paket_register",
				"datas" => $_data,
				"where" => array('orderno' => $result['order_id'])
			)
		);

		$data = array(
			'nama' => $resultperson->fullname,
			'email' => $resultperson->email,
			'tlp' => $resultperson->phone_no,
			'produk' => $resultprodak->nama,
			'infaq' => $resultprodak->infaq,
			'infaq_sukarela' => $result['gross_amount'] - $resultprodak->infaq,
			"payment_type" => $result['payment_type'],
			"bank" => $_bankVA,
			"VA" => $_vaNumber
		);

		if ($result['payment_type'] != "payment_type") {
			$this->MailTo($result['order_id']);
			$this->load->view('web/order/invoice', $data);
		}
	}

	function invoic()
	{
		$data = '{"status_code":"201","status_message":"Transaksi sedang diproses","transaction_id":"abded3c7-5b23-4e0a-b077-b1d2c67a30c3","order_id":"1306932638","gross_amount":"50000.00","payment_type":"bank_transfer","transaction_time":"2021-01-26 00:32:31","transaction_status":"pending","va_numbers":[{"bank":"bni","va_number":"9889057618810300"}],"fraud_status":"accept","pdf_url":"https://app.sandbox.midtrans.com/snap/v1/transactions/03d2ce88-89d5-4444-a050-97bdaa14ad21/pdf","finish_redirect_url":"http://example.com?order_id=1306932638&status_code=201&transaction_status=pending"}';
		$result = json_decode($data, "true");
		// print_r($result);
		print_r($result['va_numbers'][0]['bank']);
		print_r($result['va_numbers'][0]['va_number']);
		// $this->load->view('web/order/invoice',$data);
	}

	function PostOrder()
	{
		$produk = $this->input->post('produk');
		$person = $this->input->post('person');

		$key = $this->authio->RandomGeneredKey();
		$resultprodak = $this->dbload->GetResultData(array(
			'table' => 'produk',
			'where' => array('id' => $produk)
		))[0];
		$resultperson = $this->dbload->GetResultData(array(
			'table' => 'fooddelivery_users',
			'where' => array('id' => $person)
		))[0];
		$batas_bayar = date("Y-m-d h:i:s", time() + (3600 * 24));
		$_data = array(
			"user_id" => $resultperson->id,
			"nama" => $resultperson->fullname,
			"email" => $resultperson->email,
			"tlp" => $resultperson->phone_no,
			"tgl_register" => date("Y-m-d H:i:s"),
			"orderno" => $key['orderno'],
			"categori" => $resultprodak->id_categori,
			"produk_id" => $resultprodak->id,
			"produk" => $resultprodak->nama,
			"infaq" => $resultprodak->infaq,
			"unik" => $key['unik'],
			"expired_bayar" => $batas_bayar,
			"created" => "B2C"
		);
		$totalbayar = $resultprodak->infaq + $key['unik'];
		$this->dbload->SaveData(array("table" => "paket_register", "datas" => $_data));

		$batas_bayar = date("Y-m-d G:i:s", strtotime($batas_bayar));
		$_url = base_url();
		$htm = '<div class="top-container">
        <div class="container" style="padding-top:30px">
	<div class="row">
	<div class="col-lg-6 col-md-12 col-12 text-center">
                    <img   style="margin-top:-30px;margin-bottom: 20px;" src="' . $_url . 'public/images/web/lp/hp.png">
	</div>
	<div class="col-lg-6 col-md-6 col-12">
	<div class="card" style="background: #edf3d8;border:3px solid #0f3e74;" id="content-left">
	<div class="card-center" style="padding:0px !important;">
	<label style="font-size: 16px;text-align: center;line-height: 150%;display: block;padding-top: 20px;">Mohon Segera Selesaikan Pembayaran</label>
	<label style="font-size: 14px;text-align: center;line-height: 150%;display: block;">Lakukan pembayaran dana anda sebelum <span style="background: violet;">tanggal ' . $batas_bayar . ' WIB</span></label>
	<label style="font-size: 14px;text-align: center;line-height: 150%;display: block;">Sisa waktu pembayaran</label>
	<div id="expireddate" class="col-md-12 col-sm-12 col-12" style="padding: 5px !important;text-align: center;line-height: 150%;display: none;font-size: 30px;font-weight: bold;background-color: #2c2a24;color: #fff;">EXPIRED PAYMENT</div>
		<div id="menitatas" class="row" style="padding-left: 30%;">
				<div id="jamdate" class="col-md-2 col-sm-4 col-4" style="padding:5px !important;">23 :</div>
				<div id="menitdate" class="col-md-2 col-sm-4 col-4" style="padding:5px !important;">53 :</div>
				<div id="detikdate" class="col-md-2 col-sm-4 col-4" style="padding:5px !important;">38</div>
		</div>
	<div id="menitbawah" class="row" style="padding-left: 30%;">
		<div class="col-md-2 col-sm-4 col-4" style="padding:5px !important;">Jam</div>
		<div class="col-md-2 col-sm-4 col-4" style="padding:5px !important;">Menit</div>
		<div class="col-md-2 col-sm-4 col-4" style="padding:5px !important;">Detik</div>
	</div>
	</div>
	</div>
	<script>
		var countDownDate = new Date("' . $batas_bayar . '").getTime();
		var x = setInterval(function() {
		var now = new Date().getTime();
		var distance = countDownDate - now;
		var days = Math.floor(distance / (1000 * 60 * 60 * 24));
		var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		var seconds = Math.floor((distance % (1000 * 60)) / 1000);
			$("#jamdate").html(hours+" :");
			$("#menitdate").html(minutes+" :");
			$("#detikdate").html(seconds+" :");
		if (distance < 0) {
			$("#expireddate").css("display","block");
			$("#menitbawah").remove();
			$("#menitatas").remove();
			$("#acorpayment").remove();
		}
		}, 1000);
		</script>';

		$htm .= '<div class="col-lg-12"><div class="table-responsive" style="background-color: #24843a;padding: 2px;">
			<table class="table" style="margin-bottom: 0px">
			<thead style="background: #3c4d6b;">
				<tr style="color: #fff;">
				<th style="text-align: left;padding: 12px;">Account Number</th>
				<td style="text-align: left;padding: 12px;">' . $key['orderno'] . '</td>
				</tr>
				<tr style="color: #fff;">
				<th style="text-align: left;padding: 12px;">Nama Bank</th>
				<td style="text-align: left;padding: 12px;">Permata
				</td>
				</tr>
				<tr style="color: #fff;">
				<th style="text-align: left;padding: 12px;">Nomor Rekening</th>
				<td style="text-align: left;padding: 12px;">4124836196
				</td>
				</tr>
				<tr style="color: #fff;">
				<th style="text-align: left;padding: 12px;">Atas Nama</th>
				<td style="text-align: left;padding: 12px;">Cariban
				</td>
				</tr>

				<tr style="color: #fff;">
				<th style="text-align: left;padding: 12px;">Code Bank</th>
				<td style="text-align: left;padding: 12px;">013 (Permata)
				</td>
				</tr>
				<tr style="color: #fff;">
				<th style="text-align: left;padding: 12px;">Total Pembayara
				</th>
				<td style="text-align: left;padding: 12px;">' . $this->authio->rupiah($totalbayar) . '</td>
				</tr>
			</thead>
			</table>
			</div></div></div>
			</div></div>';
		header('Content-Type: application/json');
		echo json_encode($htm);
	}

	function ActiveStat()
	{

		$order = $this->input->post('id');

		$sql = "SELECT * FROM paket_register WHERE orderno='$order' ";
		$result = $this->dbload->resulSqlQuery($sql);

		$pro_DI = $result[0]->produk_id;
		$sql = "SELECT * FROM produk WHERE id='$pro_DI' ";
		$_limit = $this->dbload->resulSqlQuery($sql);
		$limit = $_limit[0]->limit;


		// $limit=$result[0]->limit;

		$dateIN = date("Y-m-d");
		$cekgo = $this->inc->ResultAllby_ID("paket_register", array(
			"user_id" => $result[0]->user_id,
			"produk_id" => $result[0]->produk_id,
			"status" => '200',
			"batas_akhir BETWEEN DATE_FORMAT('$dateIN', '%Y-%m-%d') AND batas_akhir ORDER BY id DESC limit 1" => null
		));
		if (sizeof($cekgo) > 0) {
			$batas_awal = $cekgo[0]->batas_akhir;
			$batas_akhir = date("Y-m-d h:i:s", strtotime($batas_awal) + ((3600 * 24) * $limit)); // batas akhir aktif awalnya 30 hari

		} else {
			$batas_awal = date("Y-m-d h:i:s");
			$batas_akhir = date("Y-m-d h:i:s", time() + ((3600 * 24) * $limit));
		}


		// $sql="SELECT * FROM paket_register WHERE orderno='$order' ";
		// $result=$this->dbload->resulSqlQuery($sql);
		// if(sizeof($result)>0){
		// 	//$result[0]->batas_akhir;


		// }else{}

		$js = $this->veritrans->status($order);
		$ar = array(
			'error' => $js->status_code,
			'msg' => $js->transaction_status,
		);
		if ($js->status_code == "200") {
			$data = array("status" => "200", 'start_awal' => $batas_awal, 'batas_akhir' => $batas_akhir);
			$this->db->update('paket_register', $data, array('orderno' => $order));
		}
		header('Content-Type: application/json');
		echo json_encode($ar);
	}
}
