<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
		$this->load->model('common_model');
	}

	//-----------------------------------------------------------------------------
	// Index funciton will call bydefault
	public function index()
	{	

		// if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {

		// }else{ 
		// 	redirect(base_url(), 'refresh');
		// 	exit;
		// }
	
		//$data['cities'] = $this->common_model->get_cities_list(); // get citities for dropdown
		$data['cities_job'] = $this->home_model->get_cities_with_jobs(); //get those cities who have jobs
		
		$data['jobs'] = $this->home_model->get_jobs(8,0);

		//echo '<pre>';print_r($data['jobs']);



		$data['companies'] =  $this->home_model->get_companies_logo(8,0);

		$data['title'] = 'Home';
		$data['layout'] = 'themes/home';
		$this->load->view('themes/layout', $data);
	}
	//-----------------------------------------------------------------------------
	// About Us Page
	public function about_us()
	{
		$data['title'] = 'About';
		$data['layout'] = 'themes/about_us';
		$this->load->view('themes/layout', $data);
	}

	//-----------------------------------------------------------------------------
	// Contact Us Functionality
	public function contact()
	{
		if ($this->input->post('submit'))
		{
			$this->form_validation->set_rules('username','first name','trim|required|min_length[3]');
			$this->form_validation->set_rules('email','email','trim|required|min_length[3]');
			$this->form_validation->set_rules('subject','last name','trim|required|min_length[3]');
			$this->form_validation->set_rules('message','message','trim|required|min_length[3]');

			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' => validation_errors()
				);

				$this->session->set_flashdata('error_send', $data['errors']);

				redirect(base_url('contact'),'refresh');
			}
			else
			{
				$data = array(
					'username' => $this->input->post('first_name'),
					'email' => $this->input->post('email'),
					'subject' => $this->input->post('subject'),
					'message' => $this->input->post('message'),
					'created_date' => date('Y-m-d : h:m:s'),
					'updated_date' => date('Y-m-d : h:m:s')
				);

				$data = $this->security->xss_clean($data); // XSS Clean Data

				$result = $this->home_model->contact($data);

				if ($result) 
				{
					$this->session->set_flashdata('success','<p class="alert alert-success">We’re always here to help you!

					We will try to revert at the earliest!Thank you for visiting Jobolytics!</p>');
					redirect(base_url('contact'), 'refresh');
				}
				else
				{
					redirect(base_url('contact'), 'refresh');
				}
			}
		}
		else
		{
			$data['title'] = 'Contact';
			$data['layout'] = 'themes/contact_us';
			$this->load->view('themes/layout', $data);
		}
	}


	public function privacy_policy()
	{
		$data['title'] = 'Privacy Policy';
		$data['layout'] = 'themes/privacy';
		$this->load->view('themes/layout', $data);
	}


	public function terms_of_use()
	{
		$data['title'] = 'Terms of use';
		$data['layout'] = 'themes/terms_of_use';
		$this->load->view('themes/layout', $data);
	}

	public function besafe()
	{
		$data['title'] = 'Smart Job Search is Safe Job Search ? More Jobs for Indians, Joblytics';
		$data['layout'] = 'themes/besafe';
		$this->load->view('themes/layout', $data);
	}

	public function security_center()
	{
		$data['title'] = 'Security Center';
		$data['layout'] = 'themes/security_center';
		$this->load->view('themes/layout', $data);
	}

	public function career()
	{
		$data['title'] = 'Career';
		$data['layout'] = 'themes/career';
		$this->load->view('themes/layout', $data);
	}

	public function feedback()
	{
		$data['title'] = 'Feedback';
		$data['layout'] = 'themes/feedback';
		$this->load->view('themes/layout', $data);
	}


	public function subscribe_email()
	{
		$email = trim($_POST['email']);

		//print_r($email);die;
		$where = array('email' => $email);
		$checkEmail = $this->home_model->singleRowdata($where, 'xx_subscribe');
		if ($checkEmail) {
			echo 'You are already subscribed';
		}else{

		    $data = array(
				'email' => $email,
				'created_date' => date('Y-m-d : h:m:s')
			);

			$data = $this->security->xss_clean($data); // XSS Clean Data

			$result = $this->home_model->subscribe($data);
			if ($result) {
				echo 'Subscribe successfully';
			}else{
				echo 'Can not Subscribe';
			}
		}
		
	}


	public function send_feedback()
	{
		$data = array(
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'subject' => $this->input->post('subject'),
			'message' => $this->input->post('message'),
			'phone' => $this->input->post('phone'),
		);

		//print_r($data);die;

		$data = $this->security->xss_clean($data); // XSS Clean Data

		$result = $this->home_model->feedback($data);

		if ($result) 
		{
			$this->session->set_flashdata('success','<p class="alert alert-success"><strong>Success! </strong>your message has been sent successfully!</p>');
			redirect(base_url('feedback'), 'refresh');
		}
		else
		{
			redirect(base_url('feedback'), 'refresh');
		}
		// //print_r($_POST);die;
		// if (!empty($this->input->post('submit')))
		// {
		// 	$this->form_validation->set_rules('username','first name','trim|required|min_length[3]');
		// 	$this->form_validation->set_rules('email','email','trim|required|min_length[3]');
		// 	$this->form_validation->set_rules('subject','last name','trim|required|min_length[3]');
		// 	$this->form_validation->set_rules('phone','phone','trim|required|min_length[16]');
		// 	$this->form_validation->set_rules('message','message','trim|required|min_length[500]');

		// 	if ($this->form_validation->run() == FALSE) {
		// 		$data = array(
		// 			'errors' => validation_errors()
		// 		);

		// 		$this->session->set_flashdata('error_send', $data['errors']);

		// 		redirect(base_url('feedback'),'refresh');
		// 	}
		// 	else
		// 	{
		// 		$data = array(
		// 			'username' => $this->input->post('username'),
		// 			'email' => $this->input->post('email'),
		// 			'subject' => $this->input->post('subject'),
		// 			'message' => $this->input->post('message'),
		// 			'phone' => $this->input->post('phone'),
		// 		);

		// 		print_r($data);die;

		// 		$data = $this->security->xss_clean($data); // XSS Clean Data

		// 		$result = $this->home_model->feedback($data);

		// 		if ($result) 
		// 		{
		// 			$this->session->set_flashdata('success','<p class="alert alert-success"><strong>Success! </strong>your message has been sent successfully!</p>');
		// 			redirect(base_url('feedback'), 'refresh');
		// 		}
		// 		else
		// 		{
		// 			redirect(base_url('feedback'), 'refresh');
		// 		}
		// 	}
		// }
		// else
		// {
		// 	$data['title'] = 'Feedback';
		// 	$data['layout'] = 'themes/feedback';
		// 	$this->load->view('themes/layout', $data);
		// }
	}




}// endClass
