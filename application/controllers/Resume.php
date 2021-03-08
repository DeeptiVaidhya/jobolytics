<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resume extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
		$this->load->model('common_model');
		$this->load->model('myjob_model');

		$this->load->model('profile_model');
	}

	public function builder()
	{
		// $data['title'] = 'Home';
		// $data['layout'] = 'themes/home';
		// $this->load->view('themes/layout', $data);
		$this->load->database();

		$data['res'] = $this->db->get('xx_resume_price')->result_array();

		//print_r($data); die;

		$this->load->view('resume_writing', $data);
		//$this->load->view('themes/footer');
	}

	public function fill_detail()
	{
		if(!isset($_SESSION['verify_sign']) && empty($_SESSION['verify_sign']))
		{
			echo '<script>
					alert("Verify Token Expired......!")
					window.location.href="'.site_url('resume/builder').'"
				  </script>';
		}
		else
		{
			if(isset($_SESSION['user_id']))
			{
				$data['title'] = 'Home';
				$data['layout'] = 'themes/fill_detail';
				$this->load->view('themes/layout', $data);
			}
			else
			{
				redirect('resume/builder');
			}
		}
		
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



	public function term_conditions($id)
	{

		$this->load->database();
		$where = array('id'=>$id);

		$this->db->where($where);
		$data['result'] = $this->db->get('xx_resume_price')->result();

		
		$data['title'] = 'Terms And Condition';
		$data['layout'] = 'themes/term_conditions';
		$this->load->view('themes/layout',$data);
	}

	public function submit()
	{
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$mobile_number = $this->input->post('mobile');
		$email_id = $this->input->post('email_id');
		$permanent_address = $this->input->post('paddress');
		$current_address = $this->input->post('caddress');
		$degree = $this->input->post('degree');
		$certificate = $this->input->post('certificate');
		$company = $this->input->post('company');
		$skills = $this->input->post('skills');
		$achivments = $this->input->post('achivments');
		$profile_photo = $this->input->post('profile_image');

		$data = array(
			'user_id' => $_SESSION['user_id'],
			'first_name' => $first_name,
			'last_name' => $last_name,
			'mobile_number' => $mobile_number,
			'email_id' => $email_id,
			'permanent_address' => $permanent_address,
			'current_address' => $current_address,
			'degree' => json_encode($degree),
			'certificate' => json_encode($certificate),
			'company' => json_encode($company),
			'skills' => json_encode($skills),
			'achivments' => $achivments,
			'profile_photo' => $profile_photo
		);

		$this->load->database();
		$this->db->insert('xx_resume',$data);
		$this->session->unset_userdata('verify_sign');

		
		echo "<script>
				alert('Resume request sent successfully');
				window.location.href='".site_url('resume/resume_writing')."';
			</script>";
	}

	public function get_price()
	{
		$academic_level = $this->input->post('academic_level');
		$deadline = $this->input->post('deadline');

		$this->load->database();
		$data = array(
			'time' => $deadline,
			'service_id' => $academic_level
		);
		$value = $this->db->get_where('xx_urgency',$data)->result();
		echo json_encode($value[0]);

	}

	public function request_resume($price,$id)
	{
		
		if ($this->session->userdata('username')) {
			$user_id = $this->session->userdata('user_id');

			if(isset($_SESSION['main_price'])){
				$price = $_SESSION['main_price'];
				$this->session->unset_userdata('main_price');
			}


			$data = array(
					'resume_price' => $price,
					'user_id'      => $user_id,
					'coupon_id' => 0,
					'payment_status' => 0,
					'created_date' => date('Y-m-d : h:m:s')
			);       

			$data = $this->security->xss_clean($data); // XSS Clean Data

			$req_id = $this->home_model->request_cv($data);

			if ($req_id) 
			{
				//$session = $this->session->set_userdata($coupon_data);

				$this->session->set_flashdata('success','<p class="alert alert-success">We’re always here to help you!
				  Your resume request send successfully ! Thank you for visiting Jobolytics</p>');
				redirect(base_url('Products/buy/'.$req_id), 'refresh');
			}
			else
			{
				$this->session->set_flashdata('file_error','Error! Unable to send request Please try again');
				redirect(base_url('resume/term_conditions/'.$id), 'refresh');
			}
			
		}else{

				$this->session->set_flashdata('validation_errors','Error! Please Login First');
			    redirect(base_url(''));
		}
	}



	// public function request_resume($price,$id)
	// {
		
	// 	if ($this->session->userdata('username')) {
	// 		$user_id = $this->session->userdata('user_id');

	// 		$where = array(
	// 			'resume_price'   => $price,
	// 			'user_id'        => $user_id
	// 		);
	// 		$checkPrice = $this->home_model->singleRowdata($where, 'xx_resume');
	// 		if ($checkPrice) {

	// 		    $this->session->set_flashdata('file_error','Yor are already requested.');
	// 		    redirect(base_url('resume/term_conditions/'.$id), 'refresh');
				
	// 		}else{

	// 			$data = array(
	// 				'resume_price' => $price,
	// 				'user_id'      => $user_id,
	// 				'coupon_id' => 0,
	// 				'payment_status' => 0,
	// 				'created_date' => date('Y-m-d : h:m:s')
	// 			);
		       

	// 			$data = $this->security->xss_clean($data); // XSS Clean Data

	// 			$req_id = $this->home_model->request_cv($data);

	// 			if ($req_id) 
	// 			{
	// 				//$session = $this->session->set_userdata($coupon_data);

	// 				$this->session->set_flashdata('success','<p class="alert alert-success">We’re always here to help you!

	// 				  Your resume request send successfully ! Thank you for visiting Jobolytics</p>');
	// 				redirect(base_url('Products/buy/'.$req_id), 'refresh');
	// 			}
	// 			else
	// 			{
	// 				$this->session->set_flashdata('file_error','Error! Unable to send request Please try again');
	// 				redirect(base_url('resume/term_conditions/'.$id), 'refresh');
	// 			}
	// 	}
			
	// 	}else{

	// 			$this->session->set_flashdata('validation_errors','Error! Please Login First');
	// 		    redirect(base_url(''));
	// 	}
	// }


	public function coupon_apply()
	{
		$amount      = trim($_POST['price']);
		$coupon_field = trim($_POST['coupon_field']);

		$where = array(
            'coupon_code' => $coupon_field
        );
        $results = $this ->common_model-> singleRowdata($where, 'xx_coupon');
        if ($results) {

            $currentDate = date('Y-m-d');

            if ($results->start_date <= $currentDate && $results ->end_date>= $currentDate) {

                if ($results->discount_type == 'Flat') {
                    $flat = $results->discount;
                    $totalAmount = $amount;
                    $new_amount = $amount - $flat;

                }
                if($results ->discount_type == 'Percent') {

                    $percentage = $results ->discount;
                    $totalAmount = $amount;
                    $percent = $percentage / 100 * $totalAmount;
                    $new_amount = $totalAmount - $percent;

                }

                $coupon_data = array(
	                'price' => $amount,
	                'discount' => $new_amount,
	                'coupon_id' => $results->coupon_id,
	                //'user_id' => $user_id
	            );

	            $_SESSION['main_price'] = $new_amount;

	           // $session = $this->session->set_userdata($coupon_data);


	            $ress = array(
	            	'message' 		=> 'Your coupon code is applied <span style="font-weight:bold;color:black;">'.$coupon_field.'</span>, <a>Do you want to remove coupon code ? </a> <a href="#" class="btn btn-basic" onClick="refreshPage()" style="    padding: 0;font-size: 12px;font-weight: 700;color: #ce3434;">
          <span class="glyphicon glyphicon-remove"></span> Remove 
        </a>',
	            	'coupon_data'   => $coupon_data
	            );

	            echo json_encode($ress);
	            // echo "Your coupon code is applied ";
            } 
            else 
            {
            	$ress = array(
	            	'message' 		=> 'Coupon Offer is either invalid or expired',
	            	'coupon_data'   => []
	            );
            	echo json_encode($ress);
            	// echo "Coupon Offer is either invalid or expired";
            }
			//$this->session->set_userdata($coupon_data);

        } else {
        	$ress = array(
	        	'message' => 'Sorry! This offer is only applicable on Jobolytics',
	        	'coupon_data'   => []
	        );
            echo json_encode($ress);
        	// echo "Sorry! This offer is only applicable on Jobolytics";
        }

	}




	public function feedback()
	{
		$data['title'] = 'Feedback';
		$data['layout'] = 'themes/feedback';
		$this->load->view('themes/layout', $data);
	}


	public function resume_builder_strategy()
	{
		$data['title'] = 'Resume  Builder Strategy';
		$data['layout'] = 'themes/resume_builder_strategy';
		$this->load->view('themes/layout', $data);
	}

	

	public function resume_tracking()
	{
		$this->load->database();
		if ($this->session->userdata('username')) {
			$user_id = $this->session->userdata('user_id');

			$where = array('user_id'=>$user_id);

			$this->db->where($where);
			$data['result'] = $this->db->get('xx_resume')->result_array();
			$skills = get_user_skills($user_id); // helper function

			$data['user_info'] = $this->profile_model->get_user_by_id($user_id);

			$data['jobs'] = $this->myjob_model->get_matching_jobs($skills);

			$data['user_sidebar'] = 'themes/jobseeker/user_sidebar';

			
			$data['title'] = 'Resume Tracking ';
			$data['layout'] = 'themes/resume_tracking';
		$this->load->view('themes/layout',$data);
		}else{

		}
	}


}