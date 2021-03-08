<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->rbac->check_emp_authentiction();	// checking user login session
		$this->load->model('employers/company_model','company_model');
		$this->load->model('common_model');
	}

	//--------------------------------------------------------------------------------------
	public function index(){



		$data['categories'] = $this->common_model->get_categories_list(); 
		//$data['countries'] = $this->common_model->get_countries_list(); 
		//$data['cities'] = $this->common_model->get_cities_list(); 

		if ($this->input->post('update')) {


			$emp_id = $this->session->userdata('employer_id');

			$this->form_validation->set_rules('company_name','company name','trim|required|min_length[3]');
			$this->form_validation->set_rules('email','email','trim|required|min_length[3]');
			$this->form_validation->set_rules('phone_no','phone number','trim|required|min_length[3]');
			$this->form_validation->set_rules('website','website','trim');
			$this->form_validation->set_rules('category','category','trim|required');
			$this->form_validation->set_rules('founded_date','founded date','trim');
			$this->form_validation->set_rules('org_type','organization type','trim|required');
			$this->form_validation->set_rules('no_of_employers','no of employers','trim|required');
			$this->form_validation->set_rules('description','description','trim|required|min_length[3]');
			//$this->form_validation->set_rules('country','country','trim|required');
			//$this->form_validation->set_rules('city','city','trim|required');
			$this->form_validation->set_rules('postcode','postcode','trim');
			$this->form_validation->set_rules('location','Location','required');
			$this->form_validation->set_rules('facebook_link','facebook link','trim');
			$this->form_validation->set_rules('twitter_link','twitter link','trim');
			$this->form_validation->set_rules('youtube_link','youtube link','trim');
			$this->form_validation->set_rules('vimeo_link','vimeo link','trim');
			$this->form_validation->set_rules('google_link','google plus','trim');
			$this->form_validation->set_rules('linkedin_link','linkedin_link','trim');

			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' => validation_errors()
				);
				$this->session->set_flashdata('error_update', $data['errors']);
				redirect(base_url('employers/company'),'refresh');
			}
			else{
				$comp_id = $this->input->post('company_id');
				//print_r($this->input->post()); die;

				$data = array(
					'company_name' => $this->input->post('company_name'),
					'company_slug' => make_slug($this->input->post('company_name')),
					'email' => $this->input->post('email'),
					'phone_no' => $this->input->post('phone_no'),
					'website' => $this->input->post('website'),
					'category' => $this->input->post('category'),
					'founded_date' => $this->input->post('founded_date'),
					'org_type' => $this->input->post('org_type'),
					'no_of_employers' => $this->input->post('no_of_employers'),
					'description' => $this->input->post('description'),
					//'country' => $this->input->post('country'),
					//'city' => $this->input->post('city'),
					'postcode' => $this->input->post('postcode'),
					'location' => $this->input->post('location'),
					'facebook_link' => $this->input->post('facebook_link'),
					'twitter_link' => $this->input->post('twitter_link'),
					'youtube_link' => $this->input->post('youtube_link'),
					'vimeo_link' => $this->input->post('vimeo_link'),
					'google_link' => $this->input->post('google_link'),
					'linkedin_link' => $this->input->post('linkedin_link'),
					'updated_date' => date('Y-m-d : h:m:s')
				);

				// $new_logo = $_FILES['userfile']['name'];

				// if (!empty($_FILES['userfile']['name'] )) {
	   //              if ($_FILES['userfile']['name'] ) {
		  //               $config['upload_path']     =  'uploads/company_logos';
		  //               $config['allowed_types']   = 'gif|jpeg|png|jpg';
		  //               $config['file_name']       = time().rand(100,999);
		  //               $this->load->library('upload', $config);
		  //               $this->upload->initialize($config);
		  //               if (!$this->upload->do_upload('userfile')) {
		  //                   $error = array('error' => $this->upload->display_errors());
		  //                   $data['file_error'] = array('error' => $this->upload->display_errors());

				// 			$this->session->set_flashdata('file_error','Error! Please select a valid file formate');
				// 			redirect(base_url('employers/company'));
		  //               } else {
		  //               	$file_data = array('upload_data' => $this->upload->data());
				// 			$data['company_logo'] = 'uploads/company_logos/'. $file_data['upload_data']['file_name'];
		  //               }
	   //              }
    //         	}else{
				// 	$data['company_logo'] = $this->input->post('old_logo');
				// }

				

				$data = $this->security->xss_clean($data); // filter data through the XSS filter
				$result = $this->company_model->update_company_info($data, $comp_id, $emp_id);

				if ($result) {
					$this->session->set_flashdata('update_success','Company Info has been updated successfully');
					redirect(base_url('employers/company'));
				}

			 }
		}
		else{

			$emp_id = $this->session->userdata('employer_id');
			$data['company_info'] = $this->company_model->get_company_info_by_id($emp_id);
			$data['emp_sidebar'] = 'themes/employers/emp_sidebar'; // load sidebar for employer

			//print_r($data['company_info']);die;
			
			$data['title'] = 'Company';
			$data['layout'] = 'themes/employers/company/company_page';
			$this->load->view('themes/layout', $data);
		}
	}

}

?> 