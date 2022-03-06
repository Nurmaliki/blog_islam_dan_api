<?php
class GroupModel extends CI_Model {

    function SelectOptionGroup($reg){
    
       $where=""; 
       if(!empty($reg)){
        $where="where id='".$reg."' ";
      }

    $sql="SELECT * FROM `group` $where ORDER BY nama ASC";
		
		$opt=$this->db->query($sql)->result();	
		$return = '<option value="">-Select Group-</option>';
		
		foreach($opt as $row){
			$return .= "<option value='$row->id'>$row->nama</option>";
		}
        return $return;
    }    
}