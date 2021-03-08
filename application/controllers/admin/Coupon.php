<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coupon extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Model', 'Model');
        $this->load->library('datatable'); // loaded my custom serverside datatable library
    }

	public function coupon_managment()
    {
        if($this->session->userdata('is_admin_login')){
            // $this->load->view('admin/include/header');
            // $this->load->view('admin/include/sidebar');
            //$data['view'] = 'admin/coupon/coupon_list';
          
            $data['coupon'] = $this->Model->select('xx_coupon');
            $data['view'] = 'admin/coupon/coupon_list';
              //$this->load->view('admin/coupon/coupon_list', $data);
              $this->load->view('admin/layout', $data);
            // $this->load->view('admin/include/footer');
        }else{
            redirect('https://www.jobolytics.com/admin');
        } 
    }

    public function couponAdd()
    {
        if($this->session->userdata('is_admin_login')){
            
             $data['view'] = 'admin/coupon/coupon_add';
            $this->load->view('admin/layout', $data);
        }else{
            redirect('htts://www.jobolytics.com/admin');
        } 
    }


    public function insertCoupon()
    {
        if($this->session->userdata('is_admin_login')){
            $coupon_code   =  $this->input->post('coupon_code');
            $coupon_name   =  $this->input->post('coupon_name');
            $description   =  $this->input->post('description');
            $discount      =  $this->input->post('discount');
            $discount_type  =  $this->input->post('discount_type');
            $start_date      =  $this->input->post('start_date');
            $end_date      =  $this->input->post('end_date');

            $where = array(
                'coupon_code'           => $coupon_code
            );
            $checkCoupon = $this->Model->singleRowdata($where, 'xx_coupon');
            if ($checkCoupon) {
                $this->session->set_flashdata('alert', '<div class="alert alert-warning alert-dismissable" style="margin:0px;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong> Error ! </strong> Coupon not Already exists</div>');
                    redirect('admin/Coupon/couponAdd');
            }else{
                $data = array(
                'coupon_code'   => $coupon_code,
                'coupon_name'   => $coupon_name,
                'description'   => $description,
                'discount'      => $discount,
                'discount_type' => $discount_type,
                'start_date'    => $start_date,
                'end_date'      => $end_date,
                );
                
                $result = $this->Model->insert($data,'xx_coupon');
                if ($result) {   
                   

                    $this->session->set_flashdata('success', '<div class="alert alert-success alert-dismissable" style="margin:0px;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong> Success ! </strong> Coupon add successfully</div>');
                    redirect('admin/Coupon/coupon_managment');
                }else{
                    $this->session->set_flashdata('alert', '<div class="alert alert-warning alert-dismissable" style="margin:0px;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong> Error ! </strong> Coupon not add</div>');
                    redirect('admin/Coupon/couponAdd');
                }
            }

            
        
        }
    }

    public function editCoupon($id)
    {
        if($this->session->userdata('is_admin_login')){
           
        	$where = array(
                'coupon_id'           => $id
            );
            $data['coupon_details'] = $this->Model->singleRowdata($where, 'xx_coupon');
             $data['view'] = 'admin/coupon/coupon_edit';
              //$this->load->view('admin/coupon/coupon_list', $data);
              $this->load->view('admin/layout', $data);
        }else{
            redirect('htts://www.jobolytics.com/admin');
        } 
    }

    public function editCouponDetails() {
        if ($this->session->userdata('is_admin_login')) {

            $coupon_id     =  $this->input->post('coupon_id');
             $coupon_code   =  $this->input->post('coupon_code');
            $coupon_name   =  $this->input->post('coupon_name');
            $description   =  $this->input->post('description');
            $discount      =  $this->input->post('discount');
            $discount_type  =  $this->input->post('discount_type');
            $start_date      =  $this->input->post('start_date');
            $end_date      =  $this->input->post('end_date');
            $wheredata = array(
                'coupon_id' => $coupon_id
            );

            $data = array(
                'coupon_code'   => $coupon_code,
                'coupon_name'   => $coupon_name,
                'description'   => $description,
                'discount'      => $discount,
                'discount_type'      => $discount_type,
                'start_date'      => $start_date,
                'end_date'      => $end_date,
            );

            $updateResult = $this->Model->update('xx_coupon',  $data, $wheredata);
            if ($updateResult) {
              $this->session->set_flashdata('success', '<div class="alert alert-success alert-dismissable">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Record Updated Sucessfully!!</strong>.
              </div>');
              redirect('admin/Coupon/coupon_managment');
            }else{
              $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissable">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Error!!</strong>.
              </div>');
              redirect('admin/Coupon/editCoupon');
            }
        }else{
            redirect('htts://www.jobolytics.com/admin');
        }
           
    }


    public function deleteCoupon($id)
    {
        if ($this->session->userdata('is_admin_login')) {
            $wheredata    = array(
                'coupon_id' => $id
            );
            $updateResult = $this->Model->delete($wheredata, 'xx_coupon');
            if ($updateResult) {
                $this->session->set_flashdata('success', '<div class="alert alert-success alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Record Delete Sucessfully!!</strong>.
                </div>');
            redirect('admin/Coupon/coupon_managment'); 
           
            } else {
                $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Record Not Delete!!</strong>.
                </div>');
                redirect('admin/Coupon/coupon_managment');
            }
        }else
        {
             redirect('htts://www.jobolytics.com/admin');
        }
    }

    

    public function Notification($coupon_id, $student_id, $type, $message) {
        $data = array(
            'coupon_id' => $coupon_id,
            'student_id' => $student_id,
            'message'    => $message,
            'status'     => '1',
            'date'       => date('d-m-Y H:i:s'),
        );
        
        $notification = $this->Model->insert($data,'coupon_notification');
        if ($notification) {
           return $notification;
        }else{
            return 0;
        }        
    }



}
