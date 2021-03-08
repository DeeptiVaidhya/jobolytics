<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->rbac->check_user_authentication();	// checking user login session (rbac is a library function)
		$this->load->model('profile_model');
		$this->load->model('common_model');


		$this->load->helper(array('form', 'url'));
		
        $this->load->model('Cropper', 'cropper');
        $this->load->model('Site', 'site');
	}

	//-----------------------------------------------------------------------------------
	// Update User Profile Functionality
	public function index()
	{		
		$user_id = $this->session->userdata('user_id');

		if ($this->input->post('update'))
		{
			$this->form_validation->set_rules('firstname','firstname','trim|required|min_length[3]');
			$this->form_validation->set_rules('lastname','lastname','trim|required|min_length[3]');
			$this->form_validation->set_rules('email','email','trim|required|min_length[7]|valid_email');
			$this->form_validation->set_rules('dob','date of birth','trim|min_length[3]');
			$this->form_validation->set_rules('mobile_no','mobile no','trim|required|min_length[3]');
			$this->form_validation->set_rules('nationality','nationality','trim');
			$this->form_validation->set_rules('category','category','trim|min_length[1]');
			$this->form_validation->set_rules('job_title','job title','trim|min_length[3]');
			$this->form_validation->set_rules('description','description','trim|min_length[10]');
			// $this->form_validation->set_rules('country','country','trim');
			// $this->form_validation->set_rules('city','city','trim');
			$this->form_validation->set_rules('postcode','postcode','trim|min_length[3]');
			$this->form_validation->set_rules('location','Location','required');
			$this->form_validation->set_rules('experience','experience','trim');
			$this->form_validation->set_rules('skills','skills','trim');
			$this->form_validation->set_rules('age','age','trim');
			$this->form_validation->set_rules('current_salary','current salary','trim');
			$this->form_validation->set_rules('expected_salary','expected salary','trim');
			$this->form_validation->set_rules('education_level','education level','trim');
			
			if ($this->form_validation->run() == FALSE) 
			{
				$data = array(
					'errors' => validation_errors()
				);

				$this->session->set_flashdata('error_update', $data['errors']);
				redirect(base_url('profile'),'refresh');

			}
			else
			{
				$data = array(
					'firstname' => $this->input->post('firstname'),
					'lastname' => $this->input->post('lastname'),
					'email' => $this->input->post('email'),
					'dob' => $this->input->post('dob'),
					'mobile_no' => $this->input->post('mobile_no'),
					'nationality' => $this->input->post('nationality'),
					'category' => $this->input->post('category'),
					'job_title' => $this->input->post('job_title'),
					'description' => $this->input->post('description'),
					//'country' => $this->input->post('country'),
					//'city' => $this->input->post('city'),
					'postcode' => $this->input->post('postcode'),
					'location' => $this->input->post('location'),
					'experience' => $this->input->post('experience'),
					//'age' => $this->input->post('age'),
					'current_salary' => $this->input->post('current_salary'),
					'expected_salary' => $this->input->post('expected_salary'),
					'currency' => $this->input->post('currency'),
					'education_level' => $this->input->post('education_level'),
					'skills' => $this->input->post('skills'),
					'profile_completed' => 1,
					'updated_date' => date('Y-m-d : h:m:s')
				);


				 if (!empty($_FILES["userfile"]['name'])) {


	                $config['upload_path']          =  'uploads/resume';
	                $config['allowed_types']  =  "docx|doc|pdf";
	                //$config['max_size']             = 10000;
	                //$config['file_name']     =  time().rand(10000,99999).".jpg"

	                $this->load->library('upload', $config);
	                $this->upload->initialize($config);
	                if (!$this->upload->do_upload('userfile')) {
	                	echo "string";
	                    $error = array('error' => $this->upload->display_errors());
	                    $data['file_error'] = array('error' => $this->upload->display_errors());
						$this->session->set_flashdata('file_error','Error! Please select a valid file formate');
						redirect(base_url('profile'));
	                } else {
	                    $file_data = array('upload_data' => $this->upload->data());
	                    $data['resume'] =  'uploads/resume/'. $file_data['upload_data']['file_name'];
	                }
		        }

				else{
					$data['resume'] = $this->input->post('old_resume');
				}
				//end resume upload code

				$data = $this->security->xss_clean($data); // XSS Clean

				$result = $this->profile_model->update_user($data,$user_id);

				if ($result) 
				{	
					$data['user_info'] = $this->profile_model->get_user_by_id($user_id);

					// print_r();die;

					$this->htmlmail($data['user_info']['email']);

					// $this->sendOtpMail($data);

					$this->session->set_flashdata('update_success','Profile has been  updated successfully');
					redirect(base_url('profile'));
				}
			}
		}
		else
		{
			$data['categories'] = $this->common_model->get_categories_list(); 
			$data['countries'] = $this->common_model->get_countries_list(); 
			$data['cities'] = $this->common_model->get_cities_list(); 
			$data['salaries'] = $this->common_model->get_salary_list();  
			$data['educations'] = $this->common_model->get_education_list();
			$data['user_info'] = $this->profile_model->get_user_by_id($user_id);
			$data['currency'] = $this->common_model->get_currency_list();

			$data['user_sidebar'] = 'themes/jobseeker/user_sidebar'; // load sidebar for user
			$data['title'] = 'Profile';
			$data['layout'] = 'themes/jobseeker/profile/user_profile_page';
			$this->load->view('themes/layout', $data);

		}
	}


	public function htmlmail($data){

		$this->load->library('email');
		$config['mailpath']    = '/usr/sbin/sendmail';
		$config['protocol']    = 'sendmail';
		$config['smtp_host']    = '122.168.195.75';
		//$config['smtp_host']    = 'ssl://smtp.gmail.com';
		$config['smtp_port']    = '587';
		$config['smtp_timeout'] = '7';
		$config['smtp_user']    = 'info@jobolytics.com';
		$config['smtp_pass']    = 'Info@123#';
		$config['charset']    = 'utf-8';
		$config['newline']    = "\r\n";
		$config['mailtype'] = 'html'; // or html
		$config['validation'] = TRUE; // bool whether to validate email or not      

		$this->email->initialize($config);

		$this->email->from('noreply@jobolytics.com');
		$this->email->to($data); 
		 $this->email->subject('Update Profile - Jobolytics');

		 $body = $this->load->view('themes/email/upate_profile.php',$data,TRUE);
	    $this->email->message($body); 


		if($this->email->send())
        {
            echo "Mail send successfully with attachement!";
        }else{
            echo $this->email->print_debugger();
        }

	}



	 // crop avtar
    public function upload() {
        $json = array();
        $avatar_src = $this->input->post('avatar_src');
        $avatar_data = $this->input->post('avatar_data');
        $avatar_file = $_FILES['avatar_file'];
        $ussid = $this->input->post('ussid');
        $upltype = $this->input->post('upltype');
        
        $originalPath = "uploads/_thumb/"; 
        $thumbPath = "uploads/_thumb/"; 
        $urlPath = "uploads/_thumb/"; 
        
        $thumb = $this->cropper->setDst($thumbPath);

        //print_r($thumb);die;
        $this->cropper->setSrc($avatar_src);
        $data = $this->cropper->setData($avatar_data);
        // set file
        $avatar_path = $this->cropper->setFile($avatar_file, $originalPath); 
        // crop       
        $this->cropper->crop($avatar_path, $thumb, $data);
        // response       
        $json = array(
          'state'  => 200,
          'message' => $this->cropper->getMsg(),
          'result' => $this->cropper->getResult(),
          'thumb' => $this->cropper->getThumbResult(),
          'ussid' => $ussid,
          'upltype' => $upltype,
          'urlPath' => $urlPath,
        );
        echo json_encode($json);
    }
    
    // upload prifile avatar Crop Image
    public function uploadCropImg() {

    	//$user_id = $this->session->userdata('user_id');

        $json = array();
        $image_url = $this->input->post('image_url');        
        $user_id = base64_decode($this->input->post('member_id'));   
        $upltype = $this->input->post('upltype');            
        if (!empty($user_id) && !empty($upltype) && $upltype=='avatar') {
            $this->site->seturl($image_url);
            $this->site->setUserID($user_id);
            $this->site->setMemberProfilePicture();

            $json['success'] = 'success';
        }  else {
            $json['success'] = 'failed';
        }
        header('Content-Type: application/json');
        echo json_encode($json);
    }





// public function sendOtpMail($data=""){


//     $config['mailtype'] = "html";
// 	$this->load->library('email', $config);

// 	$from_email = 'noreply@jobolytics.com';
// 	$to_email   = 'deeptivaidhya02@gmail.com';
	


//    //  $data_result = array();
//    //  $to = 'kkarda77@gmail.com';//$email;

//     $subject = 'Update Profile  - Jobolytics';
//     $message='';
//     $message .= '<!DOCTYPE html>
//          <html>
//            <head></head>
//          <body style="font-family: sans-serif; background: beige;">
// 			<div class="container" style="margin: 0 auto; width: 90%;">
// 				<div style="display: flex;">
// 					<div style="width: 50%;">
// 						<img src="./images/logo.png" alt="logo" style="width: 260px;">

// 						<h1>Dear Kapil,</h1>
// 						<h2>
// 							We noticed that you have not logged<br> on Shine for more than 30 days.
// 						</h2>
// 						<h2>Increase your chance of getting<br>hired by 3x</h2>

// 						<button style="border: none; background: #be2025; color: #fff; padding: 11px 30px; font-size: 20px; border-radius: 7px;
// 						margin: 14px 0 0 0;cursor: pointer;">Login & Update</button>
// 					</div>
// 					<div style="width: 50%; text-align: center;">
// 						<img src="./images/profile.png" alt="profile" style="width: 450px; padding: 48px 0 0 0;">
// 					</div>
// 				</div>

// 				<div style="text-align: center;padding: 90px 0 0 0;">
// 					<p style="font-size: 14px; color: #a4a7a9;">Copyright@2019 | All rights reserved</p>
// 					<a href="https://www.facebook.com/Jobolytics-2051925195055407" class="fa fa-facebook" style=" padding: 12px; font-size: 30px; width: 40px; text-align: center; text-decoration: none; margin: 5px 2px;background: #3B5998; color: white; border-radius: 12%;"></a>
// 					<a href="#" class="fa fa-twitter" style=" padding: 12px; font-size: 30px; width: 40px; text-align: center; text-decoration: none; margin: 5px 2px;background: #55ACEE;color: white; border-radius: 12%;"></a>

// 					<a href="https://www.instagram.com/jobolytics" class="fa fa-instagram" style=" padding: 12px; font-size: 30px; width: 40px; text-align: center; text-decoration: none; margin: 5px 2px;background: #dd4b39;; color: white; border-radius: 12%;"></a>
					
// 					<a href="https://www.linkedin.com/company/jobolytics" class="fa fa-linkedin" style=" padding: 12px; font-size: 30px; width: 40px; text-align: center; text-decoration: none; margin: 5px 2px;background: #007bb5; color: white; border-radius: 12%;"></a>
// 				</div>
// 			</div>
// 			</body>
//          </html>';
//       	$this->email->set_newline("\r\n");
//       	$this->email->from($from_email, $subject);
// 	    $this->email->to($to_email);
// 	    $this->email->subject($subject);
// 	    $this->email->message($message);
// 	    //Send mail
// 	    if($this->email->send())
// 	       	echo "Success";
// 	    else
// 	        echo "false";
//     }



	


	


	// public function htmlmail1($data){
	//     $config=array(
	// 	    'mailpath' => '/usr/sbin/sendmail',
	// 	    'protocol'=>'smtp',
	// 	    'smtp_host'=>'ssl://smtp.gmail.com',
	// 	    'smtp_port'=>465,
	// 	    'smtp_user'=>'deeptivaidhya02@gmail.com',
 //            'smtp_pass'=>'deepti79877',
	// 	    // 'smtp_user'=>'deeptivaidhya.emaster@gmail.com',
	// 	    // 'smtp_pass'=>'deepti@123#',
	// 	    'mailtype' => 'html', 
	// 	    'charset' => 'iso-8859-1'
	//     );
	//     $this->load->library('email', $config);

	//      $this->email->set_newline("\r\n");
 //       $this->email->from('sensanjay42@gmail.com', 'Your Name');

	//     //$this->email->set_newline("\r\n");
	//     $this->email->set_mailtype("html");
	//     //$this->email->from('From Mail', 'From Jobolytics');
	//         $data = array(
	//            //'userName'=> 'Anil Kumar Panigrahi'
	//             'data' => $data,
	//             //'otp'  =>$otp 
	//         );
	//     $this->email->to('deeptivaidhya.emaster@gmail.com'); // replace it with receiver mail id
	//     $this->email->subject('Update Profile - Jobolytics'); // replace it with relevant subject

	//     $body = $this->load->view('themes/email/upate_profile.php',$data,TRUE);

	//     $this->email->message($body); 
	//      $this->email->send();

	//       if($this->email->send())
 //        {
 //            echo "Mail send successfully with attachement!";
 //        }else{
 //            show_error($this->email->print_debugger());
 //        }

	//     //echo json_encode($this->email->send());
	//  }



	

    



	// Update User Profile Functionality
	public function editPicture()
	{		
		$user_id = $this->session->userdata('user_id');

		if ($this->input->post('update'))
		{
			
			$this->form_validation->set_rules('userimg','user img','trim');
			
			if ($this->form_validation->run() == FALSE) 
			{
				$data = array(
					'errors' => validation_errors()
				);

				$this->session->set_flashdata('error_update', $data['errors']);
				redirect(base_url('profile'),'refresh');

			}
			else
			{
				$data = array(
					'updated_date' => date('Y-m-d : h:m:s')
				);

				if (!empty($_FILES["userimg"]['name'])) {

	                $config['upload_path']          =  'uploads/userimg';
	                $config['allowed_types']        = 'gif|jpg|png';
	                //$config['max_size']             = 10000;
	                //$config['file_name']     =  time().rand(10000,99999).".jpg"

	                $this->load->library('upload', $config);
	                $this->upload->initialize($config);
	                if (!$this->upload->do_upload('userimg')) {
	                    $error = array('error' => $this->upload->display_errors());
	                    $data['file_error'] = array('error' => $this->upload->display_errors());
						$this->session->set_flashdata('file_error','Error! Please select a valid file formate');
						redirect(base_url('profile'));
	                } else {
	                    $file_data = array('upload_data' => $this->upload->data());
	                    $data['userimg'] =  'uploads/userimg/'. $file_data['upload_data']['file_name'];
	                }
		        }

				else{
					$data['userimg'] = $this->input->post('userimg');
				}
				//end resume upload code

				$data = $this->security->xss_clean($data); // XSS Clean

				$result = $this->profile_model->update_user($data,$user_id);

				if ($result) 
				{
					$this->session->set_flashdata('update_success','User image has been  updated successfully');
					redirect(base_url('profile'));
				}
			}
		}
		else
		{
			$data['categories'] = $this->common_model->get_categories_list(); 
			$data['countries'] = $this->common_model->get_countries_list(); 
			$data['cities'] = $this->common_model->get_cities_list(); 
			$data['salaries'] = $this->common_model->get_salary_list();  
			$data['educations'] = $this->common_model->get_education_list();
			$data['user_info'] = $this->profile_model->get_user_by_id($user_id);

			$data['user_sidebar'] = 'themes/jobseeker/user_sidebar'; // load sidebar for user
			$data['title'] = 'Profile';
			$data['layout'] = 'themes/jobseeker/profile/user_profile_page';
			$this->load->view('themes/layout', $data);

		}
	}


	//-----------------------------------------------------------------------------------
	public function experience(){
		if ($this->input->post('update_experience')) {

			$user_id = $this->session->userdata('user_id');
			
			$this->form_validation->set_rules('job_title','job title','trim|required|min_length[3]');
			$this->form_validation->set_rules('company','company','trim|required|min_length[3]');
			$this->form_validation->set_rules('country','country','trim|required|min_length[3]');
			$this->form_validation->set_rules('city','city','trim|min_length[3]');
			$this->form_validation->set_rules('starting_month','starting month','trim|required|min_length[3]');
			$this->form_validation->set_rules('starting_year','starting_year','trim|required|min_length[3]');
			$this->form_validation->set_rules('ending_month','ending month','trim|min_length[3]');
			$this->form_validation->set_rules('ending_year','ending_year','trim|min_length[3]');
			$this->form_validation->set_rules('currently_working_here','currently_working_here','trim');
			$this->form_validation->set_rules('description','description','trim|min_length[50]');

			if ($this->form_validation->run() == FALSE) {

				$data = array(
					'errors' => validation_errors()
				);

				$this->session->set_flashdata('error_update_experience', $data['errors']);

				redirect(base_url('profile'),'refresh');
			}else{
				$data = array(
					'user_id' => $user_id,
					'job_title' => $this->input->post('job_title'),
					'company' => $this->input->post('company'),
					'country' => $this->input->post('country'),
					'city' => $this->input->post('city'),
					'starting_month' => $this->input->post('starting_month'),
					'starting_year' => $this->input->post('starting_year'),
					'ending_month' => $this->input->post('ending_month'),
					'ending_year' => $this->input->post('ending_year'),
					'currently_working_here' => $this->input->post('currently_working_here'),
					'description' => $this->input->post('description'),
					'updated_date' => date('Y-m-d : h:m:s')
				);

				$result = $this->profile_model->update_experience($data,$user_id);
				if ($result) {
					$this->session->set_flashdata('update_experience_success','user experience has been Successfully updated');
					redirect(base_url('profile'));
				}
			}

		}else{
			$user_id = $this->session->userdata('user_id');
			$data['user_info'] = $this->profile_model->get_user_by_id($user_id);
			$data['layout'] = 'themes/jobseeker/profile/user_profile_page';
			$this->load->view('themes/layout', $data);
		}
	}




	public function education(){
		if ($this->input->post('update_education')) {

			$user_id = $this->session->userdata('user_id');

			$this->form_validation->set_rules('degree','degree level','trim|required|min_length[3]');
			$this->form_validation->set_rules('degree_title','degree title','trim|required|min_length[3]');
			$this->form_validation->set_rules('major_subjects','major subjects','trim|required|min_length[3]');
			$this->form_validation->set_rules('country','country','trim|required|min_length[3]');
			$this->form_validation->set_rules('city','city','trim|required|min_length[3]');
			$this->form_validation->set_rules('institution','institution','trim|required|min_length[3]');
			$this->form_validation->set_rules('completion_year','completion year','trim|required|min_length[3]');
			$this->form_validation->set_rules('result_type','result type','trim|required|min_length[3]');

			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' =>validation_errors()
				);

				$this->session->set_flashdata('error_update_education', $data['errors']);
				redirect(base_url('profile'),'refresh');
			}else{
				$data = array(
					'user_id' => $user_id,
					'degree' => $this->input->post('degree'),
					'degree_title' => $this->input->post('degree_title'),
					'major_subjects' => $this->input->post('major_subjects'),
					'country' => $this->input->post('country'),
					'city' => $this->input->post('city'),
					'institution' => $this->input->post('institution'),
					'completion_year' => $this->input->post('completion_year'),
					'result_type' => $this->input->post('result_type'),
					'updated_date' => date('Y-m-d : h:m:s')
				);

				$result = $this->profile_model->update_education($data,$user_id);
				if ($result) {
					$this->session->set_flashdata('update_education_success','user education has been Successfully updated');
					redirect(base_url('profile'));
				}
			}
		}else{
			$user_id = $this->session->userdata('user_id');
			$data['user_info'] = $this->profile_model->get_user_by_id($user_id);
			$data['layout'] = 'themes/jobseeker/profile/user_profile_page';
			$this->load->view('themes/layout', $data);
		}
	}




	public function skill(){
		if ($this->input->post('update_skill')){
			$user_id = $this->session->userdata('user_id');
			$this->form_validation->set_rules('new_skill','new skill','trim|required|min_length[3]');
			$this->form_validation->set_rules('experience','experience','trim|required|min_length[3]');

			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' =>validation_errors()
				);

				$this->session->set_flashdata('error_update_skill', $data['errors']);
				redirect(base_url('profile'),'refresh');
			}else{
				$data = array(
					'user_id' => $user_id,
					'new_skill' => $this->input->post('new_skill'),
					'experience' => $this->input->post('experience'),
					'updated_date' => date('Y-m-d : h:m:s')
				);

				$result = $this->profile_model->update_skill($data,$user_id);

				if ($result) {
					$this->session->set_flashdata('update_skill_success','user skill has been Successfully updated');
					redirect(base_url('profile'));
				}
			}
		}else{
			$user_id = $this->session->userdata('user_id');
			$data['user_info'] = $this->profile_model->get_user_by_id($user_id);
			$data['layout'] = 'themes/jobseeker/profile/user_profile_page';
			$this->load->view('themes/layout', $data);
		}
	}



	public function summary(){
		if ($this->input->post('update_summary')){
			$user_id = $this->session->userdata('user_id');
			$this->form_validation->set_rules('summary','summary','trim|required|min_length[20]');

			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' =>validation_errors()
				);

				$this->session->set_flashdata('error_update_summary', $data['errors']);
				redirect(base_url('profile'),'refresh');
			}else{
				$data = array(
					'user_id' => $user_id,
					'summary' => $this->input->post('summary'),
					'updated_date' => date('Y-m-d : h:m:s')
				);

				$result = $this->profile_model->update_summary($data,$user_id);

				if ($result) {
					$this->session->set_flashdata('update_summary_success','user summary has been Successfully updated');
					redirect(base_url('profile'));
				}
			}
		}else{
			$user_id = $this->session->userdata('user_id');
			$data['user_info'] = $this->profile_model->get_user_by_id($user_id);
			$data['layout'] = 'themes/jobseeker/profile/user_profile_page';
			$this->load->view('themes/layout', $data);
		}
	}



	public function language(){
		if ($this->input->post('update_language')){

			$user_id = $this->session->userdata('user_id');

			$this->form_validation->set_rules('language','language','trim|required|min_length[3]');
			$this->form_validation->set_rules('proficiency_with_this_language','proficiency with this language','trim|required|min_length[3]');

			if ($this->form_validation->run() == FALSE) {

				$data = array(
					'errors' =>validation_errors()
				);

				$this->session->set_flashdata('error_update_language', $data['errors']);
				redirect(base_url('profile'),'refresh');

			}else{
				$data = array(
					'user_id' => $user_id,
					'language' => $this->input->post('language'),
					'proficiency' => $this->input->post('proficiency_with_this_language'),
					'updated_date' => date('Y-m-d : h:m:s')
				);

				$result = $this->profile_model->update_languages($data,$user_id);

				if ($result) {
					$this->session->set_flashdata('update_language_success','user language has been Successfully updated');
					redirect(base_url('profile'));
				}
			}
		}else{
			$user_id = $this->session->userdata('user_id');
			$data['user_info'] = $this->profile_model->get_user_by_id($user_id);
			$data['layout'] = 'themes/jobseeker/profile/user_profile_page';
			$this->load->view('themes/layout', $data);
		}
	}



	public function change_password(){

		if ($this->input->post('update_password')) {

			$user_id = $this->session->userdata('user_id');

			$this->form_validation->set_rules('old_password','old password','trim|required|min_length[3]');
			$this->form_validation->set_rules('new_password','new password','trim|required|min_length[3]');
			$this->form_validation->set_rules('confirm_password','confirm password','trim|required|min_length[3]|matches[new_password]');

			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' => validation_errors()
				);

				$this->session->set_flashdata('error_update_password', $data['errors']);
				redirect(base_url('profile'),'refresh');

			}else{

				$data = array(
					'id' => $user_id,
					'old_password' => $this->input->post('old_password'),
					'password' => $this->input->post('new_password'),
				);

				$result = $this->profile_model->update_password($data,$user_id);
				
				if($result) {
					$this->session->set_flashdata('update_password_success','user password has been Successfully updated');
					
					redirect(base_url('profile'));
				}else{
					$this->session->set_flashdata('update_password_failed','Old Password is incorrect');
					redirect(base_url('profile'));
				}
			}
		}else{
			$user_id = $this->session->userdata('user_id');
			$data['user_info'] = $this->profile_model->get_user_by_id($user_id);
			$data['layout'] = 'themes/jobseeker/change password';
			$this->load->view('themes/layout', $data);
		}
	}


	
}