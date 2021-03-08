<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model{

	public function insert($data,$table){      
      $this->db->set($data);
      $insertData = $this->db->insert($table);
      if($insertData){
        return $this->db->insert_id();;
      }else{
        return FALSE;
      }
  }


   public function singleRowdata($where_data,$table){  
    $this->db->where($where_data);
    $query = $this->db->get($table);
    return $query->row();
  }



	// registraion
	public function insert_into_users($data)
	{
		$this->db->insert('xx_users',$data);
		return true;
	}

	// login function
	public function login($data)
	{
		$query = $this->db->get_where('xx_users', array('email' => $data['email'],'email_verify'=>1));
		if ($query->num_rows() == 0){
			return false;
		}
		else{
			//Compare the password attempt with the password we have stored.
			$result = $query->row_array();
		    $validPassword = password_verify($data['password'], $result['password']);
		    if($validPassword){
		        return $result = $query->row_array();
		    }
			
		}
	}

	public function checkEmailPassword($data)
	{
		$query = $this->db->get_where('xx_users', array('email' => $data['email']));
		if ($query->num_rows() == 0){
			return false;
		}
		else{
			//Compare the password attempt with the password we have stored.
			$result = $query->row_array();
		    $validPassword = password_verify($data['password'], $result['password']);
		    if($validPassword){
		        return $result = $query->row_array();
		    }
			
		}
	}

	//--------------------------------------------------------------------
	public function email_verification($code)
	{
		$this->db->select('email, token, is_active');
		$this->db->from('xx_users');
		$this->db->where('token', $code);
		$query = $this->db->get();
		$result= $query->result_array();
		$match = count($result);
		if($match > 0){
			$this->db->where('token', $code);
			$this->db->update('xx_users', array('is_verify' => 1, 'token'=> ''));
			return true;
		}
		else{
			return false;
			}
	}

	//============ Check User Email ============
    function check_user_mail($email)
    {
    	$result = $this->db->get_where('xx_users', array('email' => $email));

    	if($result->num_rows() > 0){
    		$result = $result->row_array();
    		return $result;
    	}
    	else {
    		return false;
    	}
    }

    //============ Update Reset Code Function ===================
    public function update_reset_code($reset_code, $user_id)
    {
    	$data = array('password_reset_code' => $reset_code);
    	$this->db->where('id', $user_id);
    	$this->db->update('xx_users', $data);
    }

    //============ Activation code for Password Reset Function ===================
    public function check_password_reset_code($code)
    {

    	$result = $this->db->get_where('xx_users',  array('password_reset_code' => $code ));
    	if($result->num_rows() > 0){
    		return true;
    	}
    	else{
    		return false;
    	}
    }
    
    //============ Reset Password ===================
    public function reset_password($id, $new_password){
	    $data = array(
			'password_reset_code' => '',
			'password' => $new_password
	    );
		$this->db->where('password_reset_code', $id);
		$this->db->update('xx_users', $data);
		return true;
    }

    public function update($table,$data,$where_data){
    $this->db->where($where_data);
    $insertData=$this->db->update($table,$data);
    if($insertData){
      return TRUE;
    }else{
      return FALSE;
    }
  }
}

?>