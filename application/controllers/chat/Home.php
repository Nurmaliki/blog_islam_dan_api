<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public $title="Dashboard";
	public $MenuCode="M01";
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
		$data["content"]="Home";
		$data["title"]=$this->title;
		$this->load->view('index',$data);
	}

	function RFMStaticOrder($req,$ym1,$ym2){
	$ymm1=!empty($this->input->post('periode') ) ? $this->input->post('periode') :  $ym1;
	$ymm2=!empty($this->input->post('periode') ) ? $this->input->post('periode') :  $ym2;
	$group=!empty($req ) ? $req :  "telepon";	
	$limit=5;
	
	$param["select"]="$req as code,DATEDIFF(CURRENT_DATE(), DATE_FORMAT(create_date, '%Y-%m-%d')) AS recency,COUNT(telepon)AS frequency,SUM(totalbayar) AS monetary,sales_name as sales, nama as customer";
	$param["table"]="transaksi";
	$param["where"]=array("DATE_FORMAT(create_date, '%Y-%m-%d')>="=>$ym1,"DATE_FORMAT(create_date, '%Y-%m-%d')<="=>$ym2);	
	$param["group"]=$group;
	$param["limit"]=$limit;	

	$rfm=$this->inc->RFMstatistic($param);	
	return $rfm;					
	}

	function ChartLine($ym1,$ym2){
	// Page order 
	// new customer	
	// $ym2=date("Y-m-d");
	// $ym1=date('Y-m-d', strtotime('-30 days', strtotime($ym2)));

	$ar=$this->chartlineOn($ym1,$ym2);
	

	 $script='<canvas id="chartdash"></canvas>
	 <script> $(function () {
	 var legendState = true;
	 if ($(window).outerWidth() < 576) {
		 legendState = false;
	 }
 
	 var LINECHART = $("#chartdash");
	 var myLineChart = new Chart(LINECHART, {
		 type: "line",
		 options: {
			 scales: {
				 xAxes: [{
					 display: true,
					 gridLines: {
						 display: false
					 }
				 }],
				 yAxes: [{
					 display: true,
					 gridLines: {
						 display: false
					 }
				 }]
			 },
			 legend: {
				 display: legendState
			 }
		 },
		 data: {
			 labels: '.json_encode($ar['day']).',
			 datasets: [
				 {
					 label: "Total Order",
					 fill: true,
					 lineTension: 0,
					 backgroundColor: "transparent",
					 borderColor: "#f15765",
					 pointBorderColor: "#da4c59",
					 pointHoverBackgroundColor: "#da4c59",
					 borderCapStyle: "butt",
					 borderDash: [],
					 borderDashOffset: 0.0,
					 borderJoinStyle: "miter",
					 borderWidth: 1,
					 pointBackgroundColor: "#fff",
					 pointBorderWidth: 1,
					 pointHoverRadius: 5,
					 pointHoverBorderColor: "#fff",
					 pointHoverBorderWidth: 2,
					 pointRadius: 1,
					 pointHitRadius: 0,
					 data: '.json_encode($ar['order']).',
					 spanGaps: false
				 },
				 {
					 label: "New Customers",
					 fill: true,
					 lineTension: 0,
					 backgroundColor: "transparent",
					 borderColor: "#54e69d",
					 pointHoverBackgroundColor: "#44c384",
					 borderCapStyle: "butt",
					 borderDash: [],
					 borderDashOffset: 0.0,
					 borderJoinStyle: "miter",
					 borderWidth: 1,
					 pointBorderColor: "#44c384",
					 pointBackgroundColor: "#fff",
					 pointBorderWidth: 1,
					 pointHoverRadius: 5,
					 pointHoverBorderColor: "#fff",
					 pointHoverBorderWidth: 2,
					 pointRadius: 1,
					 pointHitRadius: 10,
					 data: '.json_encode($ar['client']).',
					 spanGaps: false
				 }
			 ]
		 }
	 }); })</script>';	

	 return $script;
	}

	function chartlineOn($ym1,$ym2){

		$datetime1 = new DateTime($ym1);
		$datetime2 = new DateTime($ym2);
		
		$difference = $datetime1->diff($datetime2);
		$tanggal= $difference->days+1;

		for ($i=1; $i <= $tanggal; $i++) { 
			$tgl=strlen($i)==1 ?'0'.$i:$i;

			$dm=$tanggal-$i;
			$ctgl=date('Y-m-d', strtotime('-'.$dm.'days', strtotime($ym2)));//date("Y-m-").($tanggal-$tgl);
			// $ctgl=date("Y-m-").($tanggal-$tgl);
			$dx['day'][]=date('M-d',strtotime($ctgl));
			$dx['order'][]=$this->OrderCount($ctgl);
			$dx['client'][]=$this->NewClient($ctgl);
		}
		if($tanggal <1){
			$dx=array("day"=>0,"order"=>0,"client"=>0);
		}
		return $dx;
	}

	function OrderCount($i){
	return $this->inc->count_Grupby("transaksi",array("DATE_FORMAT(create_date, '%Y-%m-%d')="=>$i),"orderno" );
	}

	function NewClient($i){
		return $this->inc->count_Grupby("transaksi",array("cus_status"=>"N","DATE_FORMAT(create_date, '%Y-%m-%d')="=>$i),"telepon" );
	}

	function chartJs(){
	$rank=$this->input->post("rank");
	$toolbarheader=$this->toolbarhead($rank);
	$topitem=$this->topItem($rank);
	$rfmCustomer=$this->RFM_tableCustomer($rank);
	$rfmSales=$this->RFM_tableSales($rank);
	
	

	$ar=array("header"=>$toolbarheader,
				"content1"=>$topitem,
				"rfmCustomer"=>$rfmCustomer,
				"rfmSales"=>$rfmSales,
			);
	header('Content-Type: application/json');
		echo json_encode($ar);	
	}

	function RFM_tableSales($e){
		$rank=explode("to",$e);
		$rfm=$this->RFMStaticOrder('sales_code',$rank[0],$rank[1]);
		$html='';
		$html .='<div class="checklist card">
        <div class="card-header d-flex align-items-center">           
          <h2 class="h3">RFM Analysis Sales </h2>
        </div>
        <div class="card-body no-padding">
        <div class="table-responsive">  
            <table class="table table-striped table-sm table-hover">
            <thead>
                <tr>
                  <th  width="70%">CUSTOMER CODE</th>
                  <th  width="5%">RECENCY [DAY]</th>
                  <th  width="5%">FREQUENCY [NUMBER]</th>
                  <th  width="20%">MONETARY [TOTAL]</th>
                </tr>
              </thead>
              <tbody>';
                  foreach($rfm as $rfm){
                    $html .='<tr>
                    <td>'.$rfm->code.'<br/>'.$rfm->sales.'</td>
                    <td style="text-align:center">'.$rfm->recency.'</td>
                    <td style="text-align:center">'.$rfm->frequency.'</td>
                    <td>'.$this->inc->rupiah($rfm->monetary).'</td>
                    </tr>';

                  }
             $html .='</tbody>
              </tbody>
            </table>
          </div>
        </div>
	  </div>';
	  
	  return $html;

	}
	function RFM_tableCustomer($e){
		$rank=explode("to",$e);
		$customer=$this->RFMStaticOrder('telepon',$rank[0],$rank[1]);
		// $data["rfmsales"]=$this->RFMStaticOrder('sales_code',$ym1,$ym2);
		$html="";
		$html .='<div class="articles card">
        <div class="card-header d-flex align-items-center">
          <h2 class="h3">RFM Analysis Customer   </h2>
        </div>
        <div class="card-body no-padding">
        <div class="table-responsive">                       
            <table class="table table-striped table-sm table-hover">
              <thead>
                <tr>
                  <th width="70%">CUSTOMER CODE</th>
                  <th width="5%">RECENCY [DAY]</th>
                  <th width="5%">FREQUENCY [NUMBER]</th>
                  <th width="20%">MONETARY [TOTAL]</th>
                </tr>
              </thead>
			  <tbody>';
                  foreach($customer as $rfm){
                    $html .='<tr>
                    <td>'.$rfm->code.'<br/>'.$rfm->customer.'</td>
                    <td style="text-align:center">'.$rfm->recency.'</td>
                    <td style="text-align:center">'.$rfm->frequency.'</td>
                    <td>'.$this->inc->rupiah($rfm->monetary).'</td>
                    </tr>';
                  }
            $html .='</tbody>
            </table>
          </div>
        </div>
	  </div>';
	  
	  return $html;
	}

	function topitem($e){
		$rank=explode("to",$e);
		$sql="SELECT SUM(totalbayar) as bayar FROM transaksi WHERE DATE_FORMAT(create_date, '%Y-%m-%d')>='$rank[0]'  AND DATE_FORMAT(create_date, '%Y-%m-%d')<='$rank[1]'";
		$allpenjualan=$this->inc->rupiah($this->inc->resulSqlQuery($sql)[0]->bayar);

		$sql="SELECT SUM(b.total_price) AS price,b.code_item,b.nama_item FROM transaksi AS a
				JOIN transkasi_detail AS b ON a.orderno=b.orderno
				WHERE DATE_FORMAT(a.create_date, '%Y-%m-%d')>='$rank[0]' AND DATE_FORMAT(a.create_date, '%Y-%m-%d')<='$rank[1]'
				GROUP BY b.code_item  ORDER BY price DESC LIMIT 5";
		$top=$this->inc->resulSqlQuery($sql);
		$html='';

		$html .='<div class="statistics col-lg-4 col-12">
				<div class="statistic d-flex align-items-center bg-white has-shadow">
				<div class="icon bg-red"><i class="fa fa-tasks"></i></div>
				<div class="text"><strong>'.$allpenjualan.'</strong><br><small>Total Penjualan</small></div>
				</div>';

		foreach($top as $ax){
			$html .='<div class="statistic d-flex align-items-center bg-white has-shadow">
					<div class="icon bg-orange"><i class="fa fa-paper-plane-o"></i></div>
					<div class="text"><strong>'. $this->inc->rupiah($ax->price).'</strong><br><small>'.$ax->nama_item.'-'.$ax->code_item.'</small></div>
				</div>';
		}
		$html .='</div>';

		$chart=$this->ChartLine($rank[0],$rank[1]);

		$html .='<div class="chart col-lg-8 col-12">
					<div class="line-chart bg-white d-flex align-items-center justify-content-center has-shadow">
					'.$chart.'
					</div>
				</div>';
		
		return $html;		
	}
	function toolbarhead($e){
	$rank=explode("to",$e);

	// $data["Newclient"]=$this->inc->count_Grupby("transaksi",array("cus_status"=>"N","DATE_FORMAT(create_date, '%Y-%m-%d')>="=>$ym1,"DATE_FORMAT(create_date, '%Y-%m-%d')<="=>$ym2),'telepon' );
	// $data["workOrder"]=$this->inc->count_Grupby("transaksi",array("DATE_FORMAT(create_date, '%Y-%m-%d')>="=>$ym1,"DATE_FORMAT(create_date, '%Y-%m-%d')<="=>$ym2),'orderno' );
	// $data["NewInvoice"]=$this->inc->count_Grupby("transaksi",array("status_packing"=>"4","DATE_FORMAT(create_date, '%Y-%m-%d')>="=>$ym1,"DATE_FORMAT(create_date, '%Y-%m-%d')<="=>$ym2),'orderno' );
	// $data["cancel"]=$this->inc->count_Grupby("transaksi",array("payment_status"=>"B","DATE_FORMAT(create_date, '%Y-%m-%d')>="=>$ym1,"DATE_FORMAT(create_date, '%Y-%m-%d')<="=>$ym2),'orderno' );



	$newcustomer=$this->inc->count_Grupby("transaksi",array("cus_status"=>"N","DATE_FORMAT(create_date, '%Y-%m-%d')>="=>$rank[0],"DATE_FORMAT(create_date, '%Y-%m-%d')<="=>$rank[1]),'telepon' );
	$sumOrder=$this->inc->count_Grupby("transaksi",array("DATE_FORMAT(create_date, '%Y-%m-%d')>="=>$rank[0],"DATE_FORMAT(create_date, '%Y-%m-%d')<="=>$rank[1]),'orderno' );
	$finishorder=$this->inc->count_Grupby("transaksi",array("status_packing"=>"6","DATE_FORMAT(create_date, '%Y-%m-%d')>="=>$rank[0],"DATE_FORMAT(create_date, '%Y-%m-%d')<="=>$rank[1]),'orderno' );
	$cancelorder=$this->inc->count_Grupby("transaksi",array("status_packing"=>"CL","DATE_FORMAT(create_date, '%Y-%m-%d')>="=>$rank[0],"DATE_FORMAT(create_date, '%Y-%m-%d')<="=>$rank[1]),'orderno' );

	/*** New Customer */
	$htm='<div class="col-xl-3 col-sm-6"><div class="item d-flex align-items-center">
			<div class="icon bg-violet"><i class="icon-user"></i></div>
			<div class="title"><span>New<br>Customers</span>
				<div class="progress">
				<div role="progressbar" style="width:'.$newcustomer.'%; height: 4px;" aria-valuenow="'.$newcustomer.'" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
				</div>
			</div>
			<div class="number"><strong>'.$newcustomer.'</strong></div>
			</div></div>';
	
	$htm .='<div class="col-xl-3 col-sm-6"><div class="item d-flex align-items-center">
			<div class="icon bg-red"><i class="icon-padnote"></i></div>
			<div class="title"><span>Work<br>Orders</span>
				<div class="progress">
				<div role="progressbar" style="width:'.$sumOrder.'%; height: 4px;" aria-valuenow="'.$sumOrder.'" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
				</div>
			</div>
			<div class="number"><strong>'.$sumOrder.'</strong></div>
			</div></div>';

	$htm .='<div class="col-xl-3 col-sm-6"><div class="item d-flex align-items-center">
			<div class="icon bg-green"><i class="icon-bill"></i></div>
			<div class="title"><span>Finish<br>Packing</span>
				<div class="progress">
				<div role="progressbar" style="width: '.$finishorder.'%; height: 4px;" aria-valuenow="'.$finishorder.'" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
				</div>
			</div>
			<div class="number"><strong>'.$finishorder.'</strong></div>
			</div></div>';

	$htm .='<div class="col-xl-3 col-sm-6"><div class="item d-flex align-items-center">
			<div class="icon bg-orange"><i class="icon-check"></i></div>
			<div class="title"><span>Cancel<br>Orders</span>
				<div class="progress">
				<div role="progressbar" style="width: '.$cancelorder.'%; height: 4px;" aria-valuenow="'.$cancelorder.'" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-orange"></div>
				</div>
			</div>
			<div class="number"><strong>'.$cancelorder.'</strong></div>
			</div></div>';	
	return $htm;					

	}

}
