<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dbload {
	var $CI;
    
	public function __construct(){
		date_default_timezone_set('Asia/Jakarta');
        $CI =& get_instance();
        $CI->load->database();  
    }
    
	function GetResultData($data){
		$CI =& get_instance();
	    return $CI->db->get_where($data['table'],$data['where'])->result(); 
    }
	function SaveData($data){
		$CI =& get_instance();
		return $CI->db->insert($data['table'], $data['datas']);
	}
	
	function UpdateData($data){
		$CI =& get_instance();
        return $CI->db->where($data['where'])->update($data['table'], $data['datas']);
	}
	
	public function resulSqlQuery($sql){
	$CI =& get_instance();
	return $CI->db->query($sql)->result();
	
	}

	public function CountRow($sql){
		$CI =& get_instance();
		return $CI->db->query($sql)->num_rows();
		
		}
	
	
}