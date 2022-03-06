<?php
class LevelModel extends CI_Model {

    function SelectOptionLevel($reg){
    
       $where=""; 
       if(!empty($reg)){
        $where="where id='".$reg."' ";
      }

    $sql="SELECT * FROM `level` $where ORDER BY `order` ASC";
		
		$opt=$this->db->query($sql)->result();	
		$return = '<option value="">-Select Level-</option>';
		
		foreach($opt as $row){
			$return .= "<option value='$row->id'>$row->nama</option>";
		}
        return $return;
    }    
}