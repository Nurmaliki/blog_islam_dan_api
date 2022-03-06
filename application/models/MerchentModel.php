<?php
class MerchentModel extends CI_Model {

    function SelectOptionMerchent($reg){
    
       $where=""; 
       if(!empty($reg)){
        $where="where id='".$reg."' ";
      }

    $sql="SELECT * FROM `merchant` $where ORDER BY nama ASC";
		
		$opt=$this->db->query($sql)->result();	
		$return = '<option value="">-Select Merchent-</option>';
		
		foreach($opt as $row){
			$return .= "<option value='$row->id'>$row->nama</option>";
		}
        return $return;
    }    
}