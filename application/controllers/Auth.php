<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model','auth_model');
		$this->load->library('mailer'); // load custom mailer library
	}

	//-------------------------------------------------------------------
	// login functionality
	public function login()
	{
		if ($this->input->post('login')) 
		{
			$this->form_validation->set_rules('email','email','trim|required|min_length[3]|valid_email' );
			$this->form_validation->set_rules('password','password','trim|required|min_length[3]');

			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' => validation_errors()
				);

				$this->session->set_flashdata('error_login', $data['errors']);
				redirect(base_url('auth/login'),'refresh');
			}
			else
			{
				
			    $email = $this->input->post('email');

				$data = array(
					'email'    => $email,
					'password' => $this->input->post('password') 
				);

				$checkEmailPwdresult = $this->auth_model->checkEmailPassword($data);

				if ($checkEmailPwdresult) {

					$checkEmail = $this->db->query('SELECT * FROM xx_users WHERE email ="'.$email.'" AND email_verify = 1 '  )->row();

					if ($checkEmail) {

						$data = $this->security->xss_clean($data); 

						$result = $this->auth_model->login($data);	

						$login_data = array(
							'user_id' => $result['id'],
							'email' => $result['email'], 
							'password' => $result['password'],
							'username' => $result['firstname'],
							'is_user_login' => TRUE,
							'type' => 'user',
							'employer_id' => ''
						);

						$this->session->set_userdata($login_data);

						// redirected to last request page
						if(!empty($this->session->userdata('last_request_page')))
						{
							$back_to = $this->session->userdata('last_request_page');
							redirect($back_to);
						}
						else
						{
							redirect(base_url('profile'),'refresh');
						}

					}else
					{
						$this->session->set_flashdata('error_login','Verify  Your email first');
						redirect(base_url('auth/login'),'refresh');
					}
				}
				else
				{
					$this->session->set_flashdata('error_login','invalid email or password');
					 redirect(base_url('auth/login'),'refresh');
				}
				
			}
		}
		else
		{
			$data['title'] = 'Login';
			$data['layout'] = 'themes/auth/login_page';
			$this->load->view('themes/layout', $data);
		}
	}

	public function login_payment()
	{
		$this->form_validation->set_rules('email','email','trim|required|min_length[3]|valid_email' );
		$this->form_validation->set_rules('password','password','trim|required|min_length[3]');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'errors' => validation_errors()
			);

			$data['status'] = $data['errors'];
			echo json_encode($data);
		}
		else
		{
			$data = array(
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password') 
			);

			$data = $this->security->xss_clean($data); // XSS Clean

			$result = $this->auth_model->login($data);

			if ($result) {
				$login_data = array(
					'user_id' => $result['id'],
					'email' => $result['email'], 
					'password' => $result['password'],
					'username' => $result['firstname'],
					'is_user_login' => TRUE
				);

				$this->session->set_userdata($login_data);
				$data['status'] = 1;
				echo json_encode($data);
			}
			else
			{
				$data['status'] = "invalid email or password";
				echo json_encode($data);
			}
		}

	}

	//-------------------------------------------------------------------------------
	// Registration Functionality
	public function registration()
	{
		if ($this->input->post('submit')) 
		{
			$this->form_validation->set_rules('firstname','firstname','trim|required|min_length[3]');
			$this->form_validation->set_rules('lastname','lastname','trim|required|min_length[3]');
			//$this->form_validation->set_rules('email','email','trim|required|min_length[5]|valid_email|is_unique[xx_users.email]');
			$this->form_validation->set_rules('password','password','trim|required|min_length[3]');
			$this->form_validation->set_rules('confirmpassword','confirm password','trim|required|min_length[3]|matches[password]');
			$this->form_validation->set_rules('termsncondition','terms n condition','required');

			if ($this->form_validation->run() == FALSE) 
			{
				$data = array(
					'errors' => validation_errors(), 
				);
				$this->session->set_flashdata('validation_errors', $data['errors']);
				redirect(base_url('auth/registration'));
			}
			else
			{
				$data = array(
					'firstname' => $this->input->post('firstname'), 
					'lastname' => $this->input->post('lastname'),
					'email' => $this->input->post('email'),
					'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
					'created_date' => date('Y-m-d : h:m:s'),
					'updated_date' => date('Y-m-d : h:m:s')
				);

				$data = $this->security->xss_clean($data); // XSS Clean Data
				$email = $this->input->post('email');

				$checkEmail = $this->db->query('SELECT * FROM xx_employers WHERE email ="'.$email.'" '  )->row();

				if ($checkEmail) {

					$this->session->set_flashdata('registration_success','<p class="alert alert-success" style="color: #721c24c4;
    					background-color: #f8d7da91;border-color: #f5c6cb7d;">You Can use diffrent email address</p>');
						redirect(base_url('auth/registration'), 'refresh');
					
				}else{

					$email_user = $this->input->post('email');

					$checkEmailUser = $this->db->query('SELECT * FROM xx_users WHERE email ="'.$email_user.'" '  )->row();

					if ($checkEmailUser) {

						$this->session->set_flashdata('registration_success','<p class="alert alert-success" style="color: #721c24c4;
    					background-color: #f8d7da91;border-color: #f5c6cb7d;">This email already exists</p>');
						redirect(base_url('auth/registration'), 'refresh');
						
					}else{

						$result = $this->auth_model->insert($data,'xx_users');

						if ($result) 
						{

							$where = array('id' => $result);

							$user_info = $this->auth_model->singleRowdata($where,'xx_users');
							$user_email = $user_info->email;
							$user_id = $user_info->id;


							$firstname	 = $user_info->firstname;

							$this->htmlmail($user_email,$user_id,$firstname);

							$this->session->set_flashdata('registration_success','<p class="alert alert-success">Registration has been done successfully. Please verify your email first then login here.</p>');
							redirect(base_url('auth/login'), 'refresh');
						}

					}

				}

				
			}
		}
		else
		{
			$data['title'] = 'Registration';
			$data['layout'] = 'themes/auth/registration_page';
			$this->load->view('themes/layout', $data);
		}
	}

	public function htmlmail($user_email,$user_id,$firstname){

		$this->load->library('email');
		$config['mailpath']    = '/usr/sbin/sendmail';
		$config['protocol']    = 'sendmail';
		$config['smtp_host']    = 'ssl://smtp.gmail.com';
		$config['smtp_port']    = '465';
		$config['smtp_timeout'] = '7';
		$config['smtp_user']    = 'deeptivaidhya.emaster@gmail.com';
		$config['smtp_pass']    = 'deepti@123#';
		$config['charset']    = 'utf-8';
		$config['newline']    = "\r\n";
		$config['mailtype'] = 'html'; // or html
		$config['validation'] = TRUE; // bool whether to validate email or not  
		$data['user_email'] = $user_email; 
		$data['user_id'] = $user_id;

		$data['firstname'] = $firstname;

		$this->email->initialize($config);

		$this->email->from('noreply@jobolytics.com');
		$this->email->to($user_email); 
		 $this->email->subject('Email Verify - Jobolytics');

		$body = $this->load->view('themes/email/signup.php',$data,TRUE);
	    $this->email->message($body); 


		if($this->email->send())
        {
            return true;
        }else{
            echo $this->email->print_debugger();
        }

	}

	public function verify_email()
	{
		

		$user_id = $this->uri->segment(3);

	 	$where  = array('id' => $user_id);

	 	$data  = array('email_verify' => 1);

		$result = $this->auth_model->update('xx_users',$data,$where);

		if ($result) {

			$this->session->set_flashdata('registration_success','<p class="alert alert-success">Your email has been verified. Thank you for verifying your email.Please log in here now!</p>');

			redirect(base_url('auth/login'), 'refresh');
			
		}
		else
		{
			
			$this->session->set_flashdata('registration_success','<p class="alert alert-success"> Your Email not verify</p>');
			redirect(base_url('auth/login'), 'refresh');
		}

	}


	



	//--------------------------------------------------		
	public function forgot_password()
	{
		if($this->input->post('submit')){
			//checking server side validation
			$this->form_validation->set_rules('email', 'Email', 'valid_email|trim|required');
			if ($this->form_validation->run() == FALSE) 
			{
				$data = array(
					'errors' => validation_errors(), 
				);
				$this->session->set_flashdata('error', $data['errors']);
				redirect(base_url('auth/forgot_password'));
			}
			$email = $this->input->post('email');

			$response = $this->auth_model->check_user_mail($email); // check if email exist
			if($response){
				$rand_no = rand(0,1000);
				$pwd_reset_code = md5($rand_no.$response['id']);
				$this->auth_model->update_reset_code($pwd_reset_code, $response['id']);

				// --- sending email
				$name = $response['firstname'].' '.$response['lastname'];
				$email = $response['email'];
				$reset_link = base_url('auth/reset_password/'.$pwd_reset_code);
				$body = $this->mailer->pwd_reset_link($name,$reset_link);

				$this->load->helper('email_helper');
				$to = $email;
				$subject = 'Reset your password';
				$message =  $body ;
				$email = sendEmail($to, $subject, $message, $file = '' , $cc = '');
				if($email){
					$this->session->set_flashdata('success', 'We have sent instructions for resetting your password to your email');

					redirect(base_url('auth/forgot_password'));
				}
				else{
					$this->session->set_flashdata('error', 'There is the problem on your email');
					redirect(base_url('auth/forgot_password'));
				}
			}
			else{
				$this->session->set_flashdata('error', 'The Email that you provided are invalid');
				redirect(base_url('auth/forgot_password'));
			}
		}
		else{
			$data['title'] = 'Forget Password';
			$data['layout'] = 'themes/auth/forget_password_page';
			$this->load->view('themes/layout', $data);
		}
	}

	//----------------------------------------------------------------		
	public function reset_password($id=0)
	{
		// check the activation code in database
		if($this->input->post('submit')){
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
			$this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'trim|required|matches[password]');

			if ($this->form_validation->run() == FALSE) {
				$result = false;
				$data['reset_code'] = $id;
				$data['title'] = 'Reseat Password';
				$data['layout'] = 'themes/auth/reset_password_page';
				$this->load->view('themes/layout', $data);
			}   
			else{
				$new_password = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
				$this->auth_model->reset_password($id, $new_password);
				$this->session->set_flashdata('success','New password has been Updated successfully.Please login below');
				redirect(base_url('auth/login'));
			}
		}
		else{
			$result = $this->auth_model->check_password_reset_code($id);
			if($result){
				$data['reset_code'] = $id;
				$data['title'] = 'Reseat Password';
				$data['layout'] = 'themes/auth/reset_password_page';
				$this->load->view('themes/layout', $data);
			}
			else{
				$this->session->set_flashdata('error','Password Reset Code is either invalid or expired.');
				redirect(base_url('themes/auth/forgot_password'));
			}
		}
	}

	//----------------------------------------------------------------------------
	// Logout Function
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url(), 'refresh');
	}

}// endClass
