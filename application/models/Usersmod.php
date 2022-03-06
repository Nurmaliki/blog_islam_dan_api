<?php
class Usersmod extends CI_Model {

    public function UploadCekData($id){
		$photo="";
        $this->db->where(['ID' => $id]);
        $user = $this->db->get('USERS')->row(0);
		if($user){
			$photo=$user->PHOTO;
		}

        return $photo;

    }
	public function getUsers($id=null)
    {
        return $this->db->get('masterjabatan')->result();
    }
	
	public function Setting($id){
	    return $this->db->get('setting')->result(); 
    }
	
	public function insert_toDBDInamis($data)
    {
         return $this->db->where(['id' => '1'])->update('setting', $data);
    }
	
	
    public function getUsersAll($id=null)
    {
        return $this->db
				->from('users')
				->join('masterjabatan','masterjabatan.id = users.MasterJabatan_id')
				->get()->result();
    }
	
    public function insert_toDB($data)
    {
        return $this->db->insert('users', $data);
    }
	
    public function TransAndReactiveData($id, $tans)
    {
        return $this->db->where(['id' => $id])->update('users', ['status'=>$tans]);
    }
	
	public function update_photoID($id, $data)
    {
        return $this->db->where(['no_member' => $id])->update('users', $data);
    }
	
    public function Update_DBdata($id, $data)
    {
        return $this->db->where(['id' => $id])->update('users', $data);
    }	
	
    public function filter($search, $limit, $start, $order_field, $order_ascdesc){
			$this->db->select('a.*,b.nama_jabatan');
            $this->db->from('users as a');
            $this->db->join('masterjabatan as b','b.id=a.masterjabatan_id');
			
			
			if(empty($search)){
				$this->db->where('hide','1');
				
			}else{
				
				$this->db->where('hide','1');
				$this->db->like('a.no_member', $search); 
				$this->db->or_like('a.nama_anggota', $search); 
				$this->db->or_like('a.tempat_lahir', $search); 
				$this->db->or_like('a.alamat', $search); 
				$this->db->or_like('b.nama_jabatan', $search); 
			}
				
				
			
			
			$this->db->order_by($order_field, $order_ascdesc); 
			$this->db->limit($limit, $start); 

        return $this->db->get()->result_array(); 
    }

    public function count_all(){
	    // return $this->db->count_all('users');
		return $this->db->where('hide','1')
						->get('users')->num_rows();
    }

    public function count_filter($search){
		
		if(empty($search)){
				$this->db->where('hide','1');
				
			}else{

            $this->db->like('no_member', $search); 
            $this->db->or_like('nama_anggota', $search); 
            $this->db->or_like('tempat_lahir', $search); 
            $this->db->or_like('alamat', $search); 
		}

        return $this->db->get('users')->num_rows(); 
    }	
	
	public function GetFilterByNomemeber($id){
	    return $this->db->get_where('users', ['no_member' => $id,'status'=>'1'])->result_array(); 
    }
	
    public function getFilterData($id){
	    return $this->db->get_where('users', ['id' => $id,'status'=>'1'])->result(); 
    }

    public function updatePassword($nik){
        $this->db->where(['nik' => $nik]);
        $user = $this->db->get('karyawan')->row(0);
        $tanggal_lahir = $user->tgl_lahir;

        $this->db->where(['nik' => $nik])->update('karyawan', ['password'=> password_hash(str_replace("-","",$tanggal_lahir), PASSWORD_BCRYPT, ['cost' => 10])]);
    }

    public function Validation($nik){
        $this->db->where('nik', $nik);
        return $this->db->get('karyawan')->num_rows();
    }

    public function login_user($username, $password)
    {
        if (!$username && $password) {
            return false;
        }

       // $this->db->where('BINARY nik = "'.$username.'"');
        // $this->db->where('BINARY nik =',$username);
        //$this->db->where(['flag' => 0]);
        //$query = $this->db->select('*')->from('admin')->where('BINARY user = '.$username.' and pass = '.$password.'')->get();

        $user = $this->db->query('SELECT * FROM karyawan WHERE BINARY nik = "'.$username.'" and flag="0" ')->row(0);

        if (!$user) {
            return false;
        }

        $db_password = $user->password;
		
        if (password_verify($password, $db_password)) {
			
            return  array(
                        'id'=>$user->id,
						'nik'=>$user->nik,	
                        'nama'=>$user->nama,
						'photo'=>$user->photo,	
						'devisi'=>$user->devisi,	
						'level'=>$user->id_level,	
						);
        }

        return false;
    }
}
?>