<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Inc {
	var $CI;
    
	public function __construct(){
		date_default_timezone_set('Asia/Jakarta');
        $CI =& get_instance();
        $CI->load->database();  
    }
    public static function generatPoNumber(){
        $datenow = date('ym');
        $pattern = "DA".$datenow;
        $key = '';
        
        $CI =& get_instance();
        $CI->db->like('orderno', $pattern);
        $counts=17;
        //$CI->db->get('transaksi')->num_rows();
        $str=strlen($counts+1);
            for($i=$str; $i<5; $i++){
                $key .=0;
            }
            
            $code = $pattern.$key.($counts+1).date("s");
        return $code;
    }
    
    public function VoucerCode($order,$nominal){
        $CI =& get_instance();
        $r=$CI->db->where(array("orderno"=>$order))->get('promo_diskon')->result();
        if(count($r)>0){
            if(!empty($r[0]->voucer_code)){
                return $r[0]->voucer_code.$r[0]->voucer_mid.'_exp_'.$r[0]->voucer_exp;
            }
        }

        $expr=date('Y-m-d', strtotime('+30 days', strtotime(date('Y-m-d'))));
		$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
			$res = "VA";
			for ($i = 0; $i < 8; $i++) {
				$res .= $chars[mt_rand(0, strlen($chars)-1)];
			}
			
            $where=array('voucer_code'=>$res);
            $count=$CI->db->where($where)->get('promo_diskon')->num_rows();
				if($count>0){
					$this->VoucerCode($order,$nominal);
                }else{
                    $_count=$CI->db->get('promo_diskon')->num_rows();
                    $mid=round($_count % 7);
                    $_mid=($mid>9?0:$mid);
                    $this->IncSave_Data('promo_diskon',
                            array("voucer_code"=>$res,
                                   "orderno"=>$order,
                                   "voucer_mid"=>$_mid,
                                   "voucer_exp"=>$expr,
                                   "voucer_nominal"=> $nominal
                                ) );
                }
                
		return $res.$_mid.'_exp_'.$expr;
					
    }
    
	public function RandomGeneredKey($telepon,$table){
		$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
			$res = "";
			for ($i = 0; $i < 3; $i++) {
				$res .= $chars[mt_rand(0, strlen($chars)-1)];
			}
			
            $CI =& get_instance();
                if($table=="produk"){
                    $where=array('code'=>$res.$telepon);
                }else{
                    $where=array('orderno'=>$res.$telepon,'payment_status'=>'W');
                }
			    $count=$CI->db->where($where)->get($table)->num_rows();
				
				if($count>0){
					$this->RandomGeneredKey($telepon,$table);
				}
					
		return $res.$telepon;	
					
	}
	// PDO Savae update delete where
	function DeleteDataALl($where,$table){
		$CI =& get_instance();
		return $CI->db->where($where)
					->delete($table);
	}
	
	function IncSave_Data($table,$data){
		$CI =& get_instance();
		return $CI->db->insert($table, $data);
	}
    
	function IncUpdate_Data($table,$where,$data){
		$CI =& get_instance();
        return $CI->db->where($where)->update($table, $data);
	}
	
	function IncReactive_data($where,$table,$data){
		$CI =& get_instance();
        return $CI->db->where($where)->update($table, $data);
    }
	
	function Select_Option($table,$where){
        $CI =& get_instance();
        if($where){
            $CI->db->where($where);
        }

		$opt= $CI->db->get($table)->result(); 
		$return = '<option value="">--Please Select--</option>';
		
		foreach($opt as $row){
			$return .= "<option value='$row->id'>$row->nama</option>";
		}
        return $return;
	}

    function GetResultData($table,$where,$sort=false,$group=false){
    $CI =& get_instance();
    if($where){
        $CI->db->where($where);
    }
    if($group){
        $CI->db->group_by($group);
    }
   if($sort){
        $CI->db->order_by($sort[0],$sort[1]);
    }
    return $CI->db->get($table)->result();
    }

    function GetArraytData($table,$where,$sort=false){
        $CI =& get_instance();
        if($where){
            $CI->db->where($where);
        }
        if($sort){
            $CI->db->order_by($sort[0],$sort[1]);
            }
        return $CI->db->get($table)->result_array();
        }

	function ResultAllby_ID($table,$where){
		$CI =& get_instance();
	    return $CI->db->get_where($table,$where)->result(); 
    }
	
	function ResultAllby_Order($table,$where,$filed,$order){
		$CI =& get_instance();
	    return $CI->db->order_by($filed,$order)
				->get_where($table,$where)
				->result(); 
		
	}
	
	function ResultAllby_OrderJOin($select,$join,$table,$where,$filed,$order){
	$CI =& get_instance();
		$CI->db->select($select);
        $CI->db->from($table);
		if($join){
            foreach ($join as $key=>$value){
                $CI->db->join($value[0], $value[1]);
            }
        }
        if($where){
            $CI->db->where($where);
        }
        if($filed){
            $CI->db->order_by($filed,$order);
        }
		 return $CI->db->get()->result();
		 
	
	}
    
    public function addcolomstore($colom){
    $CI =& get_instance();    
        $lead="SELECT COLUMN_NAME FROM information_schema.columns WHERE TABLE_NAME='daily_sale' AND COLUMN_NAME='lead_$colom' ";
        $lead=$this->resulSqlQuery($lead);
            if(sizeof($lead)==0){
                $sql="ALTER TABLE daily_sale ADD lead_$colom VARCHAR( 100 ) AFTER sales_name;";
                $CI->db->query($sql);
            }
    $closing="SELECT COLUMN_NAME FROM information_schema.columns WHERE TABLE_NAME='daily_sale' AND COLUMN_NAME='closing_$colom' ";
    $closing=$this->resulSqlQuery($closing);
            if(sizeof($closing)==0){
                $sql="ALTER TABLE daily_sale ADD closing_$colom VARCHAR( 100 ) AFTER sales_name;";
                $CI->db->query($sql);
            }
	return ;
    }
	public function resulSqlQuery($sql){
	$CI =& get_instance();
	return $CI->db->query($sql)->result();
	
	}
    
    public function resultSqlQueryArary($sql){
        $CI =& get_instance();
	return $CI->db->query($sql)->result_array();
    }

    function PaketOerder($data){
		$sql="SELECT b.brand,SUM(b.harga) AS omset,b.market,a.sales_name,a.sales_code,COUNT(b.code_item) as item
			   FROM transaksi AS a
			   INNER JOIN `transaksi_detailpakaet` AS b ON a.orderno=b.orderno
               WHERE DATE_FORMAT(a.create_date, '%Y-%m-%d')='".$data["date"]."' AND b.brand='".$data["sales"]."' AND b.market='".$data["market"]."'  GROUP BY b.market  ";
       $ex= $this->resulSqlQuery($sql);
       if(count($ex)>0){
            // foreach($ex as $mr){
            //     $data[]=array("omset"=>$mr->omset,"market"=>$mr->market,"sales_code"=>$mr->sales_code,"sales_name"=>$mr->sales_name);
            // }
           return $ex;
       }else{
           return ;
       }
      }
      
	// table data
	function filter($search, $limit, $start, $order_field, $order_ascdesc, $table, $join, $select, $colum, $filterby, $where, $notin=false){
		$CI =& get_instance();
        $CI->db->query("SET @row_number:=0");
        $CI->db->select($select);
        $CI->db->from($table);
        
        if($join){
            foreach ($join as $key=>$value){
                $CI->db->join($value[0], $value[1]);
            }
        }

         if($where){
            $CI->db->where($where);
         }

        if($filterby){ // custome filter
            
            $CI->db->like($filterby);
        }else{
            if($colum){
                $no=0;
                foreach($colum as $value){
                    if(empty($search)){ continue;}
                    if($no>0){
                        $CI->db->or_like($value, $search); 
                    }else{
                        $CI->db->like($value, $search); 
                    }
                    $no++;
                }
            }
        }

        if($notin){
            $CI->db->where_not_in($notin[0], $notin[1]);
        }

        $CI->db->order_by($order_field, $order_ascdesc); 
        $CI->db->limit($limit, $start); 

        return $CI->db->get()->result_array(); 
        // echo $CI->db->last_query();
    }

    function count_all($table,$where){
        $CI =& get_instance();
        if($where){
            $CI->db->where($where);
        }
        return $CI->db->get($table)->num_rows();
    }

    function count_Grupby($table,$where,$field){
    $CI =& get_instance();
    if($where){
        $CI->db->where($where);
    }
    return $CI->db->group_by($field)->get($table)->num_rows();

    }
	
	function count_all_Join($join,$table,$where,$wherein,$wherefild){
		$CI =& get_instance();
		
		if($join){
            foreach ($join as $key=>$value){
                $CI->db->join($value[0], $value[1]);
            }
        }
		if($wherein){
				$CI->db->where_in($wherefild,$wherein);
				if($where){
					$CI->db->where($where);
				}
			}else{
				$CI->db->where($where);
		}
		return $CI->db->get($table)->num_rows();
    }
	

    function count_filter($search, $table, $join, $colum, $filterby, $where){
		$CI =& get_instance();
		
        $CI->db->from($table);

        if($join){
            foreach ($join as $key=>$value){
                $CI->db->join($value[0], $value[1]);
            }
        }
        if($where){
            $CI->db->where($where);
        }

        if($filterby){ // custome filter
            $CI->db->like($filterby);
        }else{
            if($colum){
                $no=0;
                foreach($colum as $value){
                    if(empty($search)){ continue;}
                    if($no>0){
                        $CI->db->or_like($value, $search); 
                    }else{
                        $CI->db->like($value, $search); 
                    }
                    $no++;
                }
            }
        }

        // echo $CI->db->last_query();
        // exit();
        return $CI->db->get()->num_rows(); 
    }	
    
    function RFMstatistic($ar){

    $CI =& get_instance();
    $CI->db->select($ar['select']);
    $CI->db->from($ar['table']);
    
        if(!empty($ar['where'])){
            $CI->db->where($ar['where']);
        }

        if(!empty($ar['group'])){
            $CI->db->group_by($ar['group']);
        }
        if(!empty($ar['limit'])){
            $CI->db->limit($ar['limit']);
        }

     return $CI->db->get()->result();

    }    
    
	function upload_PhotoData_Image($FNama,$Finput,$Pacth,$doctipe,$oldphoto){
		$UP =& get_instance();
        $status="";$msg="";$namafileupload="";
        
        $config['upload_path'] =$Pacth;
        // $config['allowed_types'] = "*"; //'gif|jpg|png|doc|txt|png'; 
        // // $config['max_size'] = 9024 * 8; //1024
        // $config['encrypt_name'] = FALSE;
        $config['allowed_types'] = 'gif|jpg|png|exe|xls|doc|docx|xlsx|rar|zip';
        $config['max_size']      = '8192'; 
        $config['remove_spaces']=TRUE;  //it will remove all spaces
        $config['encrypt_name']=TRUE;   //it wil encrypte the original file name
        $config['file_name']  =$FNama; 
        
        $file_element_name =$Finput;
        // print_r($file_element_name);
        // die();
      $test =  $UP->load->library('upload', $config);

        // print_r($test);die();

        if($_FILES['file']['size'] !=0){
            if($oldphoto){
                @unlink($Pacth.$oldphoto);
            }
            // print_r($UP->upload->do_upload($file_element_name));
            // die();
            if (!$UP->upload->do_upload())	{
                $status = 0;
                $msg = $UP->upload->display_errors('', '');
            // $namafileupload=$data['file_name'];
                // print_r($msg);
                // die();
            }else{
                $data = $UP->upload->data();
                $image_path = $data['full_path'];
                
                if(file_exists($image_path)){
                    $status = 1;
                    $msg = "File successfully uploaded";
                }else{
                    $status = 0;
                    $msg = "Something went wrong when saving the file, please try again.";
                }
				
				$namafileupload=$data['file_name'];
            }
			
			
        }else{
			$status = 2; 
        }
		
		

		return  array("msg"=>$msg,"upname" =>$namafileupload,'status'=>$status ); 
	}
	function upload_PhotoData($FNama,$Finput,$Pacth,$doctipe,$oldphoto){
		$UP =& get_instance();
        $status="";$msg="";$namafileupload="";
        
        $config['upload_path'] =$Pacth;
        $config['allowed_types'] = "*"; //'gif|jpg|png|doc|txt|png'; 
        $config['max_size'] = 9024 * 8; //1024
        $config['encrypt_name'] = FALSE;
        $config['file_name']  =$FNama;
        
        $file_element_name =$Finput;

        $UP->load->library('upload', $config);
        if($_FILES['file']['size'] !=0){
            if($oldphoto){
                @unlink($Pacth.$oldphoto);
            }
            
            if (!$UP->upload->do_upload($file_element_name))	{
            $status = 0;
            $msg = $UP->upload->display_errors('', '');
            // $namafileupload=$data['file_name'];
            }else{
                $data = $UP->upload->data();
                $image_path = $data['full_path'];
                
                if(file_exists($image_path)){
                    $status = 1;
                    $msg = "File successfully uploaded";
                }else{
                    $status = 0;
                    $msg = "Something went wrong when saving the file, please try again.";
                }
				
				$namafileupload=$data['file_name'];
            }
			
			
        }else{
			$status = 2; 
        }
		
		

		return  array("msg"=>$msg,"upname" =>$namafileupload,'status'=>$status ); 
	}

	public Static function get_client_ip ()
    {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
            $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';

        return $ipaddress;
    }

    function rupiah($angka){
	
        $hasil_rupiah = "Rp." . number_format($angka,0,',','.');
        return $hasil_rupiah;
     
    }
	
    public Static function Style_CSS(){
		$url=base_url();
        return array(
            $url.'asset/lte/bower_components/bootstrap/dist/css/bootstrap.min.css',
            $url.'asset/lte/bower_components/font-awesome/css/font-awesome.min.css',
            $url.'asset/lte/bower_components/Ionicons/css/ionicons.min.css',
            $url.'asset/lte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css',
            $url.'asset/lte/bower_components/bootstrap-daterangepicker/daterangepicker.css',
            $url.'asset/lte/plugins/timepicker/bootstrap-timepicker.min.css',
            $url.'asset/lte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css',
            $url.'asset/lte/bower_components/select2/dist/css/select2.min.css',
            $url.'asset/lte/plugins/iCheck/all.css', 
            $url.'asset/lte/dist/css/AdminLTE.min.css',
            $url.'asset/lte/dist/css/skins/_all-skins.min.css',
            $url.'asset/lte/dist/css/custome.css',
        );
    }
    public Static function Style_JS(){
		$url=base_url(); 
		return array(
            $url.'asset/lte/bower_components/jquery/dist/jquery.min.js',
            $url.'asset/lte/bower_components/bootstrap/dist/js/bootstrap.min.js',
            $url.'asset/lte/plugins/input-mask/jquery.inputmask.js',
            $url.'asset/lte/plugins/input-mask/jquery.inputmask.date.extensions.js',
            $url.'asset/lte/plugins/input-mask/jquery.inputmask.extensions.js',
            $url.'asset/lte/bower_components/datatables.net/js/jquery.dataTables.min.js',
			$url.'asset/lte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js',
            $url.'asset/lte/bower_components/select2/dist/js/select2.full.min.js',
            $url.'asset/lte/bower_components/moment/min/moment.min.js',
            $url.'asset/lte/bower_components/bootstrap-daterangepicker/daterangepicker.js',
            $url.'asset/lte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
            $url.'asset/lte/plugins/timepicker/bootstrap-timepicker.min.js',
            $url.'asset/lte/plugins/iCheck/icheck.min.js',
            $url.'asset/lte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js',
            $url.'asset/lte/bower_components/fastclick/lib/fastclick.js',
            $url.'asset/lte/dist/js/adminlte.min.js',
            $url.'asset/lte/dist/js/demo.js',
            $url.'asset/lte/dist/js/sweetalert2.all.js',	
        );
    }
	
	function terbilang($var){

		$n 				= floor($var);
		$fix_terbilang 	= "";

		$satuan = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");

		if($n >= 0 && $n <= 11){

			$fix_terbilang = " ".$satuan[floor($n)];
		}
		elseif($n >= 12 && $n <= 19){

			$fix_terbilang = $this->terbilang($n%10)." Belas";
		}
		elseif($n >= 20 && $n <= 99){
		

			$fix_terbilang = $this->terbilang(floor($n / 10))." Puluh".$this->terbilang($n%10);
		}
		elseif($n >= 100 && $n <= 199){

			$fix_terbilang = " Seratus".$this->terbilang($n-100);
		}
        elseif($n >= 200 && $n <= 999){

			$fix_terbilang = $this->terbilang(floor($n/100))." Ratus".$this->terbilang($n%100);
		}
        elseif($n >= 1000 && $n <= 1999){

			$fix_terbilang = " Seribu".$this->terbilang($n-1000);
		}
		elseif($n >= 2000 && $n <= 999999){

			$fix_terbilang = $this->terbilang(floor($n/1000))." Ribu".$this->terbilang($n%1000);
		}
		elseif($n >= 1000000 && $n <= 999999999){

			$fix_terbilang = $this->terbilang(floor($n/1000000))." Juta".$this->terbilang($n%1000000);
		}
		else{

			$fix_terbilang = $this->terbilang(floor($n/1000000000))." Milyar".$this->terbilang($n%1000000000);
		}

		return $fix_terbilang;
    }
  
    function TanggalIndo($tanggal){
        if($tanggal=="0000-00-00" or empty($tanggal)){
            return "";
        }

        $bulan = array (
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $tanggal);

       
        
        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun
     
        return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }

    function navigationMenu(){
        $CI =& get_instance();

        $main_menu = $CI->db->order_by("sortby","asc")->get_where('menu', array('parent' => 0));
        foreach ($main_menu->result() as $main) {
            // Query untuk mencari data sub menu
            $sub_menu = $CI->db->get_where('menu', array('parent' => $main->id));
            // periksa apakah ada sub menu
            /*
            // <li class="<?php echo ($this->uri->segment(1)=='Home'?'active':''); ?>">
            // <a href="<?php echo base_url()."Home";?>"><i class="icon-home"></i>Home </a></li>
            */
            if ($sub_menu->num_rows() > 0) {
                // main menu dengan sub menu
                $active=($CI->uri->segment(1)==$main->title ?'active':'');

                echo "<li class='".$active."'>" . anchor($main->url, '<i class="' . $main->icon . '"></i>' . $main->title .
                        '<span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>');
                // sub menu nya disini
                echo "<ul class='treeview-menu'>";
                foreach ($sub_menu->result() as $sub) {
                    echo "<li>" . anchor($sub->url, '<i class="' . $sub->icon . '"></i>' . $sub->title) . "</li>";
                }
                echo"</ul></li>";
            } else {
                // main menu tanpa sub menu
                $active=($CI->uri->segment(1)==$main->url ?'active':'');
				
				if($main->url=="drive"){
					echo '</ul><span class="heading">'.$main->title.'</span><ul class="list-unstyled">';
				}else{
                    $role = $CI->db->get_where('role', array('user_id' => $CI->session->userdata('username'),'menu_code'=>$main->code))->result();
                    if(count($role)>0){
                        if($role[0]->menu_code==$main->code){
                            echo "<li class='".$active."'>" . anchor($main->url, '<i class="' . $main->icon . '"></i>' . $main->title) . "</li>";
                        }
                    }
                    
				}
            }
        }
       // $active=($CI->uri->segment(1)==$main->url ?'active':'');
       // echo "<li class='".$active."'>" . anchor($main->url, '<i class="' . $main->icon . '"></i>' . $main->title) . "</li>";
    }

    function PrivilageMenu($code){
        $CI =& get_instance();
        
        $role = $CI->db->get_where('role', array('user_id' => $CI->session->userdata('username'),'menu_code'=>$code))->result();

        if(count($role)<1){

            if($code=="M05" || $code=="M02"){
                return $AuthMenu=array('Roles'=>""); 
            }else{
                echo "<h1>Sory Anda dilarang akses menu ini , silahkan contak Admin..IT</h1>";
                exit();
            }
        }else{
            
            $roles=json_decode($role[0]->authrole);
            $roles=json_decode(json_encode($roles),true);
            return $AuthMenu=array(
                    'Roles'=>$roles
                    ); 
        }

    }

    function enskripData($a){
        $CI =& get_instance();
        $CI->load->library('encrypt');
        $ToSend = array('id' => $a);
        $json = json_encode($ToSend);
        $encrypted = $CI->encrypt->encode($json, '123');
        $base64 = base64_encode($encrypted);
        return $base64;
    }

    function logActvity($data){
        
       
        // $CI =& get_instance();
        // $ym=date("y-m-d H:i:s");
        // $_resultdata="";
        // // 0 query 1 add 2 update 3 delete 
        // if($data['log'] > "1" ){
        //    $_resultdata=$this->GetResultData($data['tabel'],$data['where']);    
        // }
        // $_insertLog=array(
        //     'table'=>$data['tabel'],
        //     'massage'=>$data['massage'],
        //     'data_old'=>$_resultdata,
        //     'data_new'=>$data['baru'],
        //     'username'=>$CI->session->userdata('username'),
        //     'ip'=>$this->get_client_ip(),
        //     'datetime'=>$ym,
        // );
        // $this->IncSave_Data("log",$_insertLog);
        return ;
    }
	
}