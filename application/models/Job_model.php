<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Job_Model extends CI_Model{

	//---------------------------------------------------
	// Count total users
	public function count_all_jobs()
	{
		$this->db->where('is_status', 'active');
		return $this->db->count_all('xx_job_post');
	}

	//---------------------------------------------------
	// Count total users
	public function count_all_search_result($search=null)
	{
		// search URI parameters
		unset($search['p']); //unset pagination parameter form search
		if(!empty($search))
			$this->db->where($search);

		if(!empty($search['job_title'])){
			$search_text = explode('-', $search['job_title']);
			foreach($search_text as $search){
				$this->db->or_like('job_title', $search);
				$this->db->or_like('skills', $search);
			}
		}
		$this->db->where('is_status', 'active');
		$this->db->order_by('created_date','desc');
		$this->db->group_by('job_title');

		$this->db->from('xx_job_post');
		return $this->db->count_all_results();
		//return $this->db->result_array();
	}


	//---------------------------------------------------------------------------	
	// Get All Jobs
	public function get_all_jobs($limit, $offset, $search)
	{
		$this->db->select('id, job_title, company_id,company_name, job_slug, job_type, description, location, created_date, industry');
		$this->db->from('xx_job_post');
		
		// search URI parameters
		unset($search['p']); //unset pagination parameter form search
		if(!empty($search))
			$this->db->where($search);

		if(!empty($search['job_title'])){
			$search_text = explode('-', $search['job_title']);
			foreach($search_text as $search){
				$this->db->or_like('job_title', $search);
				$this->db->or_like('skills', $search);
			}
		}
		$this->db->where('is_status', 'active');
		$this->db->order_by('created_date','desc');
		$this->db->group_by('job_title');
		$this->db->limit($limit, $offset);
		$query = $this->db->get();
		//echo $this->db->last_query();
		return $query->result_array();
	}

	//---------------------------------------------------------------------------	
	// Get Job detail by ID
	public function get_job_by_id($id)
	{
		$query = $this->db->get_where('xx_job_post', array('id' => $id));
		return $result = $query->row_array();
	}

	//---------------------------------------------------------------------------	
	// Get User Detail by ID
	public function get_user_by_id($id)
	{
		$query = $this->db->get_where('xx_users', array('id' => $id));
		return $result = $query->row_array();
	}

	//------------------------------------------------------------------
	// Check the already applied job application
	public function check_applied_application($seeker_id, $job_id)
	{
		$data = array(
			'seeker_id'=> $seeker_id,
			'job_id'=> $job_id
		);
		$query = $this->db->get_where('xx_seeker_applied_job', $data);
		if($query->num_rows() > 0){
			return true;
		}
		else{
			return false;
		}
	}

	//------------------------------------------------------------------
	// insert job application
	public function insert_job_application($user_id, $emp_id, $job_id, $cover_letter)
	{
		$data = array(
			'seeker_id'=> $user_id,
			'job_id'=> $job_id,
			'employer_id'=> $emp_id,
			'cover_letter'=> $cover_letter,
			'applied_date' => date('Y-m-d : h:m:s')
		);
		$this->db->insert('xx_seeker_applied_job', $data);
		return true;
	}

	//----------------------------------------------------
	// Get those citites who have jobs
	public function get_cities_with_jobs()
	{
		$this->db->select('location as id, COUNT(location) as total_jobs');
		$this->db->from('xx_job_post');
		$this->db->group_by('location');
		$query = $this->db->get();
		return $query->result_array();
	}

	//----------------------------------------------------
	// Get those categories who have jobs
	public function get_categories_with_jobs()
	{
		$this->db->select('category as category_id, COUNT(category) as total_jobs');
		$this->db->from('xx_job_post');
		$this->db->where('is_status', 'active');
		$this->db->group_by('category');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_static_categories_with_jobs()
	{
		$this->db->select('*');
		$this->db->from('xx_job_category');
		$query = $this->db->get();
		return $query->result_array();
	}

	//----------------------------------------------------
	// Get those industries who have jobs
	public function get_industries_with_jobs()
	{
		$this->db->select('industry as industry_id, COUNT(industry) as total_jobs');
		$this->db->from('xx_job_post');
		$this->db->where('is_status', 'active');
		$this->db->group_by('industry');
		$query = $this->db->get();
		return $query->result_array();
	}


} // endClass

?>