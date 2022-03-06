<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Authio {
	var $CI;
    
	public function __construct(){
		date_default_timezone_set('Asia/Jakarta');
        $CI =& get_instance();
    }
	
	public function login($data){
		 $CI =& get_instance();
		$username=$data["username"];
		$password=$data["password"];
		
        if (!$username && $password) {
            return false;
        }

        $user = $CI->db->query('SELECT * FROM users WHERE BINARY uname = "'.$username.'" and upass="'.$password.'"')->row(0);

        if (!$user) {
            return false;
        }

        $db_password = $user->password;
		
       // if (password_verify($password, $db_password)) {
			
            return  array(
                        'id'=>$user->uid,
                        'nama'=>$user->uname
						);
      //  }

        return false;
    }
	
	public function resetpassword($us){
        $CI =& get_instance();
		$reset=date('i');
		$chars = "AbCdEfGhIjKlMNOpQRSTUVWXYZ1234567890";
		for ($i = 0; $i < 4; $i++) {
				$reset .= $chars[mt_rand(0, strlen($chars)-1)];
			}
			$CI->load->library('sendmail'); 
			$subject="Reset Password BRIns".$reset.date('s');
			$html="Reset Password and adalah ";
            $data=array(
                    "subject"=>$subject,
                    "body"=>$html,
					"tomail"=>$us,
                    );
        
       $mail=$CI->sendmail->send_email($data);
            
		return $reset.date('s');
		
	}
	public Static function Asset_css(){
		$url=base_url();
        return array(
            '<link rel="stylesheet" href="'.$url.'public/plugins/bootstrap/css/bootstrap-select.min.css">',
            '<link rel="stylesheet" href="'.$url.'public/fonts/fontawesome/css/fontawesome-all.min.css">',
            '<link rel="stylesheet" href="'.$url.'public/plugins/animation/css/animate.min.css">',
            '<link rel="stylesheet" href="'.$url.'public/plugins/dataTables/dataTables.bootstrap4.css">',
            '<link rel="stylesheet" href="'.$url.'public/plugins/dataTables/responsive.bootstrap4.min.css">',
            '<link rel="stylesheet" href="'.$url.'public/plugins/dataTables.buttons/css/buttons.dataTables.min.css">',
            '<link rel="stylesheet" href="'.$url.'public/plugins/summernote/summernote.css">',
            '<link rel="stylesheet" href="'.$url.'public/css/style.css">'
        );
    }
	public Static function Asset_JS(){
	$CI =& get_instance();
	$url=base_url();
	$page=$CI->uri->segment(1);
	 return array(
			'<script src="'.$url.'public/js/vendor-all.min.js"></script>',
            '<script src="'.$url.'public/plugins/bootstrap/js/bootstrap.min.js"></script>',
            '<script src="'.$url.'public/plugins/bootstrap/js/bootstrap-select.min.js"></script>',
            '<script src="'.$url.'public/plugins/summernote/summernote.min.js"></script>',
            '<script src="'.$url.'public/js/pcoded.min.js"></script>',
            '<script src="'.$url.'public/plugins/dataTables/jquery.dataTables.js"></script>',
            '<script src="'.$url.'public/plugins/dataTables/dataTables.bootstrap4.js"></script>',
            '<script src="'.$url.'public/plugins/dataTables/dataTables.responsive.min.js"></script>',
            '<script src="'.$url.'public/plugins/dataTables/responsive.bootstrap4.min.js"></script>',
            '<script src="'.$url.'public/plugins/dataTables/tables-datatable.js"></script>',
            '<script src="'.$url.'public/plugins/dataTables/fnReloadAjax.js"></script>',
            '<script src="'.$url.'public/plugins/datatables.buttons/js/dataTables.buttons.min.js"></script>',
            '<script src="'.$url.'public/plugins/datatables.buttons/js/buttons.flash.min.js"></script>',
            '<script src="'.$url.'public/plugins/datatables.buttons/js/buttons.html5.min.js"></script>',
            '<script src="'.$url.'public/plugins/datatables.buttons/js/buttons.print.min.js"></script><script>var _base_url="'.str_replace("http","https",$url).'";</script>',
			'<script src="'.$url.'public/plugins/sweetalert2.all.js"></script>',
			'<script src="'.$url.'public/lib/'.$page.'.js?'.time().'"></script>'
        );
    }
    public Static function WebCss(){
		$url=base_url();
        return array(
            '<link rel="stylesheet" href="'.$url.'public/css/web/css/bootstrap.min.css">',
            '<link rel="stylesheet" href="'.$url.'public/css/web/css/style.css">',
            '<link rel="stylesheet" href="'.$url.'public/css/web/css/font-awesome.min.css">',
            '<link rel="stylesheet" href="'.$url.'public/css/web/css/fontello.css">',
            '<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">',
            '<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CMerriweather:300,300i,400,400i,700,700i">',
            '<link rel="stylesheet" href="'.$url.'public/css/web/css/custom.css">'
        );
    }
    public Static function WebJs(){
        $CI =& get_instance();
        $url=base_url();
         return array(
                '<script src="'.$url.'public/js/web/jquery.min.js"></script>',
                '<script src="'.$url.'public/js/web/jquery.sticky.js"></script>',
                '<script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>',
                '<script src="'.$url.'public/plugins/sweetalert2.all.js"></script>',
            );
        }
	function rupiah($angka){
        $hasil_rupiah = "Rp." . number_format($angka,0,',','.');
        return $hasil_rupiah;
     
    }
	
	public function RandomGeneredKey(){
		$pack_order = "ABCDEFGHIJKLMNOPQRSTUVWXYZ9876543210";
		$pack_unik = "9876543210";
			$res = "";$unik="";
			for ($i = 0; $i < 6; $i++) {
				$res .= $pack_order[mt_rand(0, strlen($pack_order)-1)];
			}
			
			for ($i = 0; $i < 3; $i++) {
				$unik .= $pack_unik[mt_rand(0, strlen($pack_unik)-1)];
			}
			
            $CI =& get_instance();
                $where=array('orderno'=>$res,'unik'=>$unik,'status >'=>'0');
			    $count=$CI->db->where($where)->get('paket_register')->num_rows();
				
				if($count>0){
					$this->RandomGeneredKey();
				}
					
		return array('unik'=>$unik,"orderno"=>$res);	
					
	}
	
}
	