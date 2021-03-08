<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home_Model extends CI_Model{

	//-------------------------------------------------------------------
    // contant us 
	public function contact($data)
	{
		$this->db->insert('xx_contact_us',$data);
		return true;
	}

	//-------------------------------------------------------------------
	// Get jobs for home page
	public function get_jobs($limit, $offset)
	{
		$this->db->select('*');
		$this->db->from('xx_job_post');
		$this->db->where('is_status', 'active');
		$this->db->order_by('created_date','desc');
		$this->db->limit($limit, $offset);
		$query = $this->db->get();
		return $query->result_array();
	}

	//----------------------------------------------------
	// Get those citites who have jobs
	public function get_cities_with_jobs()
	{
		$this->db->select('location as name, COUNT(location) as total_jobs');
		$this->db->from('xx_job_post');
		$this->db->group_by('location');
		$query = $this->db->get();
		return $query->result_array();
	}

	//----------------------------------------------------
	// Get companies logos for home page
	public function get_companies_logo()
	{
		$this->db->select('company_slug, company_logo');
		$this->db->from('xx_companies');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function subscribe($data)
	{		 
		$insertData = $this->db->insert('xx_subscribe',$data);
	    if($insertData){
	        return $this->db->insert_id();;
	    }else{
	        return FALSE;
	    }
	}


	public function request_cv($data)
	{		 
		$insertData = $this->db->insert('xx_resume',$data);
	    if($insertData){
	        return $this->db->insert_id();;
	    }else{
	        return FALSE;
	    }
	}


	public function feedback($data)
	{		 
		$insertData = $this->db->insert('xx_feedback',$data);
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

}

?>