<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myjobs extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->rbac->check_user_authentication();	// checking user login session (rbac is a library function)
		$this->load->model('myjob_model');
		$this->load->model('common_model');
		$this->load->model('profile_model');
	}

	//-------------------------------------------------------------------------------
	// Applied Jobs
	public function index()
	{
		$user_id = $this->session->userdata('user_id');
		$data['user_info'] = $this->profile_model->get_user_by_id($user_id);
		$data['jobs'] = $this->myjob_model->get_applied_jobs(); // Fetching Applied jobs

		$data['user_sidebar'] = 'themes/jobseeker/user_sidebar';// load sidebar for user
		$data['title'] = 'Applied Jobs';
		$data['layout'] = 'themes/jobseeker/my_jobs/applied_job_page';
		$this->load->view('themes/layout', $data);
	}

	//-------------------------------------------------------------------------------
	// Matching Jobs
	public function matching()
	{
		$user_id = $this->session->userdata('user_id');
		$skills = get_user_skills($user_id); // helper function

		$data['user_info'] = $this->profile_model->get_user_by_id($user_id);

		$data['jobs'] = $this->myjob_model->get_matching_jobs($skills);

		$data['user_sidebar'] = 'themes/jobseeker/user_sidebar'; // load sidebar for user
		$data['title'] = 'Matching Jobs';
		$data['layout'] = 'themes/jobseeker/my_jobs/matching_jobs_page';
		$this->load->view('themes/layout', $data);
	}

	public function deleteMyaplication($id)
    {
        //if ($this->session->userdata('user_id')) {
    	   $user_id = $this->session->userdata('user_id');
            $wheredata    = array(
                'id' => $id,
                'seeker_id' => $user_id 
            );
            $updateResult = $this->myjob_model->delete($wheredata, 'xx_seeker_applied_job');
            if ($updateResult) {
               $this->session->set_flashdata('update_success','Aplication delete successfully');
             redirect(base_url('myjobs'), 'refresh');
           
            } else {
               $this->session->set_flashdata('error_update', $data['errors']);
                redirect(base_url('myjobs'), 'refresh');
            }
        // }else
        // {
        //      redirect('Login');
        // }
    }





}// endClass
