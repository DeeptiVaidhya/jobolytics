<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Resume_request extends MY_Controller
{
	function __construct(){
		parent ::__construct();
		$this->load->model('admin/user_model', 'user_model');

	}

	//-----------------------------------------------------
	public function index()
	{
		$data['title'] = 'Resume List';
		$data['view'] = 'admin/resume/resume_list';

		$data['Resume_request'] = $this->db->query('SELECT r.*,u.*  FROM xx_resume as r JOIN xx_users as u  ON r.user_id = u.id  WHERE status = 0' )->result_array();

		$this->load->view('admin/layout', $data);
	}

	public function editCvDetails($id)
	{
		$data['title'] = 'Edit Resume Details';
		$data['view'] = 'admin/resume/edit_cv';

		$data['cv_details'] = $this->db->query('SELECT r.*,u.*  FROM xx_resume as r JOIN xx_users as u  ON r.user_id = u.id  WHERE status = 0' )->row();

		$this->load->view('admin/layout', $data);
	}

	public function editResumeDetails($r_id)
	{
		if($this->input->post('submit')){
			$this->form_validation->set_rules('firstname', 'Username', 'trim|required');
			$this->form_validation->set_rules('lastname', 'Lastname', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|valid_email|required');
			$this->form_validation->set_rules('mobile_no', 'Number', 'trim|required');
			$this->form_validation->set_rules('resume_title', 'Resume Title', 'trim|required');
			$this->form_validation->set_rules('permanent_address', 'Permanent address', 'trim|required');
			$this->form_validation->set_rules('current_address', 'Current address', 'trim|required');
			$this->form_validation->set_rules('degree', 'Degree', 'trim|required');
			$this->form_validation->set_rules('certificate', 'Certificate', 'trim|required');
			$this->form_validation->set_rules('company', 'Company', 'trim|required');
			$this->form_validation->set_rules('skills', 'Skills', 'trim|required');


			if ($this->form_validation->run() == FALSE) {
				//$data['user'] = $this->user_model->get_user_by_id($id);
				$data['cv_details'] = $this->db->query('SELECT r.*,u.*  FROM xx_resume as r JOIN xx_users as u  ON r.user_id = u.id  WHERE status = 0' )->row();
				$data['view'] = 'admin/resume/edit_cv';
				$this->load->view('admin/layout', $data);
			}
			else{
				$whereId  = array('r_id' => $r_id, );
				$data = array(
					'first_name' => $this->input->post('firstname'),
					'last_name' => $this->input->post('lastname'),
					'email_id' => $this->input->post('email'),
					'mobile_number' => $this->input->post('mobile_no'),
					'resume_title' => $this->input->post('resume_title'),
					'permanent_address' => $this->input->post('permanent_address'),
					'current_address' => $this->input->post('current_address'),
					'degree' => $this->input->post('degree'),
					'certificate' => $this->input->post('certificate'),
					'company' => $this->input->post('company'),
					'skills' => $this->input->post('skills'),
					'status' => $this->input->post('status'),
					'updated_date' => date('Y-m-d : h:m:s'),
				);
				$data = $this->security->xss_clean($data);
				$result = $this->user_model->update('xx_resume',$data, $whereId);
				if($result){
					
					$this->session->set_flashdata('msg', 'Resume Details has been updated successfully!');
					 redirect('admin/Resume_request/inprogress');
				}
			}
		}
		else{
			//$data['user'] = $this->user_model->get_user_by_id($id);
			$data['cv_details'] = $this->db->query('SELECT r.*,u.*  FROM xx_resume as r JOIN xx_users as u  ON r.user_id = u.id  WHERE status = 0' )->row();
			$data['view'] = 'admin/resume/edit_cv';
			$this->load->view('admin/layout', $data);
		}
	}

	public function Process($req_id) 
	{
        if ($this->session->userdata('is_admin_login')) {

            $WHERE  = array('r_id' => $req_id);
			$data = array(
				'status'       => 1,
				'updated_date' => date('Y-m-d : h:m:s'),
			);
			$data = $this->security->xss_clean($data);
			$result = $this->user_model->update('xx_resume',$data,$WHERE);
			if($result){
				$this->session->set_flashdata('success', 'Resume moved to inprocess');
				$data['view'] = 'admin/resume/resume_list';
				 redirect('admin/Resume_request');

			}else{
				$this->session->set_flashdata('error', 'Resume failed to moved!');
				$data['view'] = 'admin/resume/resume_list';
				redirect('admin/Resume_request');
			}
        }else{
                redirect('admin');
        }
           
    }

    public function inprogress()
	{
		$data['title'] = 'Resume List';
		$data['view'] = 'admin/resume/inprogress';

		$data['Resume_request'] = $this->db->query('SELECT r.*,u.*  FROM xx_resume as r JOIN xx_users as u  ON r.user_id = u.id  WHERE status = 1' )->result_array();

		$this->load->view('admin/layout', $data);
	}

	public function move_complete($req_id) 
	{
        if ($this->session->userdata('is_admin_login')) {
        	
            $WHERE  = array('r_id' => $req_id);
			$data = array(
				'status'       => 2,
				'updated_date' => date('Y-m-d : h:m:s'),
			);
			$data = $this->security->xss_clean($data);
			$result = $this->user_model->update('xx_resume',$data,$WHERE);
			if($result){
				$this->session->set_flashdata('success', 'Resume moved to Complete');
				$data['view'] = 'admin/resume/resume_list';
				 redirect('admin/Resume_request');

			}else{
				$this->session->set_flashdata('error', 'Resume failed to moved!!');
				$data['view'] = 'admin/resume/resume_list';
				redirect('admin/Resume_request');
			}
        }else{
                redirect('admin');
        }
           
    }


    public function complete()
	{
		$data['title'] = 'Resume List';
		$data['view'] = 'admin/resume/complete';

		$data['Resume_request'] = $this->db->query('SELECT r.*,u.*  FROM xx_resume as r JOIN xx_users as u  ON r.user_id = u.id  WHERE status = 2' )->result_array();

		$this->load->view('admin/layout', $data);
	}


	public function move_cancel($req_id) 
	{
        if ($this->session->userdata('is_admin_login')) {
        	
            $WHERE  = array('r_id' => $req_id);
			$data = array(
				'status'       => 3,
				'updated_date' => date('Y-m-d : h:m:s'),
			);
			$data = $this->security->xss_clean($data);
			$result = $this->user_model->update('xx_resume',$data,$WHERE);
			if($result){
				$this->session->set_flashdata('success', 'Resume moved to cancel');
				$data['view'] = 'admin/resume/resume_list';
				 redirect('admin/Resume_request');

			}else{
				$this->session->set_flashdata('error', 'Resume failed to moved!!');
				$data['view'] = 'admin/resume/resume_list';
				redirect('admin/Resume_request');
			}
        }else{
                redirect('admin');
        }
           
    }


	

	public function cancel()
	{
		$data['title'] = 'Resume List';
		$data['view'] = 'admin/resume/cancel';

		$data['Resume_request'] = $this->db->query('SELECT r.*,u.*  FROM xx_resume as r JOIN xx_users as u  ON r.user_id = u.id  WHERE status = 3' )->result_array();

		$this->load->view('admin/layout', $data);
	}

	public function delete_request($id)
    {
        if ($this->session->userdata('is_admin_login')) {
            $wheredata    = array(
                'r_id' => $id
            );
            $updateResult = $this->user_model->delete($wheredata, 'xx_resume');
            if($updateResult){
				$this->session->set_flashdata('success', 'Request Delete successfully');
				$data['view'] = 'admin/resume/resume_list';
				 redirect('admin/Resume_request');

			}else{
				$this->session->set_flashdata('error', 'Resume failed to Delete!!');
				$data['view'] = 'admin/resume/resume_list';
				redirect('admin/Resume_request');
			}
        }else
        {
             redirect('admin');
        }
    }

	



	// public function Process($id)
	// {
	// 	$data['title'] = 'Resume Status';
	// 	$data['view'] = 'admin/resume/resume_status';
	// 	$WHERE  = array('r_id' =>$id);

	// 	$data['request'] = $this->user_model->singleRowdata($WHERE,'xx_resume');

	// 	$this->load->view('admin/layout', $data);
	// }



	




}

?>