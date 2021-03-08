<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model{

  public function singleRow($where_data,$table){  
    $this->db->select('*');
    $this->db->where($where_data);
    $query = $this->db->get($table);
    return $query->num_rows();
  }

  public function singleRowdata($where_data,$table){  
    $this->db->where($where_data);
    $query = $this->db->get($table);
    return $query->row();
  }

  public function select($table,$order=""){    
     $this->db->select('*');
     $this->db->order_by($order);
     $this->db->from($table);
     $query = $this->db->get();
     return $query->result_array();
  }

  public function selectdata($table,$wheredata,$order=""){ 
     $this->db->select('*');
     $this->db->order_by($order);
     $this->db->from($table);
     $this->db->where($wheredata);
     $query = $this->db->get();
     return $query->result_array();
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

  public function count($table){
    $this->db->select('*');
    $this->db->from($table);
    return $this->db->count_all_results();
  }

  public function countWhere($table,$where){
    $this->db->select('*');
    $this->db->from($table);
    $this->db->where($where);
    return $this->db->count_all_results();
  }

  public function record_count($table,$data){
    if(!empty($data))
    {
      $this->db->where($data);
    }
    $this->db->from($table);
    return $this->db->count_all_results();
  }

  public function insert($data,$table){      
      $this->db->set($data);
      $insertData = $this->db->insert($table);
      if($insertData){
        return $this->db->insert_id();;
      }else{
        return FALSE;
      }
  }

  public function selectAllById($tbl,$wheredata="")
  {
     $this ->db-> select('*');
     $this ->db-> from($tbl);
     $this ->db-> where($wheredata);
     $query = $this ->db-> get();
     return $query->result_array();
  }
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

  public function job_search_by_all($category,$industry,$skills,$location)
  {
    // search URI parameters
   // unset($search['p']); //unset pagination parameter form search
    // if(!empty($search))
      

    if(!empty($category) && !empty($industry) && !empty($skills) && !empty($location) ){
      $search_text = explode('-', $industry);
      foreach($search_text as $search){
        $this->db->or_like('job_title', $industry);
        $this->db->or_like('skills', $skills);

        $this->db->or_like('location', $location);
      }
    }
    $this->db->where('is_status', 'active');
    $this->db->order_by('created_date','desc');
    $this->db->group_by('job_title');

    $this->db->from('xx_job_post');
    return $this->db->count_all_results();
    //return $this->db->result_array();
  }

  public function insert_company($data)
  {
    $this->db->insert('xx_companies',$data);
    $last_id = $this->db->insert_id();
    return  $last_id;
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
    );
    $query = $this->db->get_where('xx_seeker_applied_job', $data);
    if($query->num_rows() > 0){
      return $result = $query->row_array();
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
    $this->db->select('*');
    $this->db->from('xx_job_post');
    $this->db->group_by('location');
    $query = $this->db->get();
    return $query->result_array();
  }

  //----------------------------------------------------
  // Get those categories who have jobs
  public function get_categories_with_jobs()
  {
    $this->db->select('*');
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
    $this->db->select('*');
    $this->db->from('xx_job_post');
    $this->db->where('is_status', 'active');
    $this->db->group_by('industry');
    $query = $this->db->get();
    return $query->result_array();
  }

  public function get_shortlisted_applicants($emp_id)
  {
    $this->db->select('xx_cv_shortlisted.id, 
      xx_cv_shortlisted.user_id,
      xx_cv_shortlisted.employer_id,
      xx_users.firstname, 
      xx_users.lastname,
      xx_users.email,
      xx_users.location,
      xx_users.job_title,
      xx_users.current_salary,
      xx_users.resume');
    $this->db->from('xx_cv_shortlisted');
    $this->db->join('xx_users','xx_users.id = xx_cv_shortlisted.user_id','left');
    $this->db->where('xx_cv_shortlisted.employer_id', $emp_id);
    $this->db->order_by("xx_cv_shortlisted.created_date", "DESC");
    $query = $this->db->get();
    $module = array();
    if ($query->num_rows() > 0) 
    {
      $module = $query->result_array();
    }
    return $module;
  }

  public function update_company_info($data, $comp_id, $emp_id)
  {
    $this->db->where('id',$comp_id);
    $this->db->where('employer_id',$emp_id);
    $this->db->update('xx_companies',$data);
    // echo $this->db->last_query();
    return true;
  }

  public function get_Cv_Search($job_title,$locaction)
  {
    $this->db->select('*');
    $this->db->from('xx_users');
    
    // search URI parameters
    if(!empty($locaction))
      $this->db->where('location', $locaction);

    if(!empty($job_title)){
      $search_text = explode('-', $job_title);
      foreach($search_text as $job_title){
        $this->db->like('job_title', $job_title);
        $this->db->or_like('skills', $job_title);
      }
    }
    $this->db->where('is_active', '1');
    $this->db->where('profile_completed', '1');
    $this->db->order_by('created_date','desc');
    $this->db->group_by('job_title');
    //$this->db->limit($limit, $offset);
    $query = $this->db->get();
    return $query->result_array();
  }

}