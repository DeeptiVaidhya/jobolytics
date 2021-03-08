<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * @package Crop :  CodeIgniter Crop *
 * @author TechArise Team
 *
 * @email  info@techarise.com
 *   
 * Description of Crop Controller
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Crop extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //$this->load->library('upload');
        $this->load->helper(array('form', 'url'));
        $this->load->model('Site', 'site');
        $this->load->model('Cropper', 'cropper');
    }
     // index page
    public function index() {
        $data['title'] = 'Image Crop | TechArise'; 
        $this->site->setUserID(1);  
        $data['userInfo'] = $this->site->getUserDetails();           
        $this->load->view('crop/index', $data);
    }
    // crop avtar
    public function upload() {

        $json = array();
        $avatar_src = $this->input->post('avatar_src');
        $avatar_data = $this->input->post('avatar_data');
        $avatar_file = $_FILES['avatar_file'];
        $ussid = $this->input->post('ussid');
        $upltype = $this->input->post('upltype');
       // print_r($upltype);die;

        $company_type = $this->input->post('company_logo');

        if ($upltype == 'company_logo' ) {
            $originalPath = "uploads/company_logos/"; 
            $thumbPath = "uploads/company_logos/"; 
            $urlPath = "uploads/company_logos/"; 
            
            $thumb = $this->cropper->setDst($thumbPath);

            //print_r($thumb);die;
            $this->cropper->setSrc($avatar_src);
            $data = $this->cropper->setData($avatar_data);
            // set file
            $avatar_path = $this->cropper->setFile($avatar_file, $originalPath); 
            // crop       
            $this->cropper->crop($avatar_path, $thumb, $data);

            $thumbPath = $this->cropper->getThumbResult();
            // response       
            $json = array(
              'state'  => 200,
              'message' => $this->cropper->getMsg(),
              'result' => $this->cropper->getResult(),
              'thumb' => $this->cropper->getThumbResult(),
              'ussid' => $ussid,//$_SESSION['user_id'], //$ussid,
              'upltype' => $upltype,
              'urlPath' => $urlPath,
            );
            if(json_encode($json)){  

                $company_logo = array('company_logo' => 'uploads/company_logos/'.$thumbPath);

                $update_com = $this->site->setCompanyLogo($company_logo,$ussid);

                if($update_com){
                    $this->session->set_flashdata('update_success','Company  Image updated successfully');
                    redirect(base_url('employers/company')); 
                }else{
                    $this->session->set_flashdata('error_update','Company Image updated not updated');
                    redirect(base_url('employers/company')); 
                }


                $json['success'] = 'success';
            }else{
                $json['success'] = 'failed';
            }
               
        }

        $ses_type  = $_SESSION['type'];

        if ($_SESSION['employer_id'] !='' && $ses_type == 'employer' && $upltype == 'avatar') {
            

            $originalPath = "assets/uploads/_thumb/"; 
            $thumbPath = "assets/uploads/_thumb/"; 
            $urlPath = "assets/uploads/_thumb/"; 
            
            $thumb = $this->cropper->setDst($thumbPath);

            //print_r($thumb);die;
            $this->cropper->setSrc($avatar_src);
            $data = $this->cropper->setData($avatar_data);
            // set file
            $avatar_path = $this->cropper->setFile($avatar_file, $originalPath); 
            // crop       
            $this->cropper->crop($avatar_path, $thumb, $data);

            $thumbPath = $this->cropper->getThumbResult();
            // response       
            $json = array(
              'state'  => 200,
              'message' => $this->cropper->getMsg(),
              'result' => $this->cropper->getResult(),
              'thumb' => $this->cropper->getThumbResult(),
              'ussid' => $ussid,//$_SESSION['user_id'], //$ussid,
              'upltype' => $upltype,
              'urlPath' => $urlPath,
            );
            if(json_encode($json)){  

                if ($_SESSION['employer_id'] !='') {
                    $employer_id = $this->session->userdata('employer_id');

                    $emp_img = array('emp_img' => 'assets/uploads/_thumb/'.$thumbPath);

                    $update_com = $this->site->setEmployProfile($emp_img,$employer_id);
                    //$update_com = $this->site->setEmpPic($thumbPath,$employer_id,$type);

                    if($update_com){
                         $this->session->set_flashdata('update_success','Employer Image upload successfully');
                        redirect(base_url('employers/profile')); 
                    }else{
                        $this->session->set_flashdata('error_update','Employer Image not updated');
                        redirect(base_url('employers/profile')); 
                    }
                   
                    $json['success'] = 'success';
                }
                
            }else{
                $json['success'] = 'failed';
            }
        }

        if ($_SESSION['user_id'] != '' && $ses_type == 'user') { 

            $originalPath = "assets/uploads/userimg/"; 
            $thumbPath = "assets/uploads/userimg/"; 
            $urlPath = "assets/uploads/userimg/"; 
            
            $thumb = $this->cropper->setDst($thumbPath);

            //print_r($thumb);die;
            $this->cropper->setSrc($avatar_src);
            $data = $this->cropper->setData($avatar_data);
            // set file
            $avatar_path = $this->cropper->setFile($avatar_file, $originalPath); 
            // crop       
            $this->cropper->crop($avatar_path, $thumb, $data);

            $thumbPath = $this->cropper->getThumbResult();
            // response       
            $json = array(
              'state'  => 200,
              'message' => $this->cropper->getMsg(),
              'result' => $this->cropper->getResult(),
              'thumb' => $this->cropper->getThumbResult(),
              'ussid' => $ussid,//$_SESSION['user_id'], //$ussid,
              'upltype' => $upltype,
              'urlPath' => $urlPath,
            );
            if(json_encode($json)){ 

                    $user_id = $this->session->userdata('user_id');

                    $type = 'user';

                    $userimg = array('userimg' => 'assets/uploads/userimg/'.$thumbPath);

                    $update_user = $this->site->setUserProfile($userimg,$user_id);

                    if($update_user){                        

                        $this->session->set_flashdata('update_success','User Image updated successfully');
                        redirect(base_url('profile')); 

                    }else{
                        $this->session->set_flashdata('error_update','User Image not updated');
                         redirect(base_url('profile')); 
                    }
                    $json['success'] = 'success';

                
            }else{
                $json['success'] = 'failed';
            }
        }

        
        // $originalPath = "assets/uploads/_thumb/"; 
        // $thumbPath = "assets/uploads/_thumb/"; 
        // $urlPath = "assets/uploads/_thumb/"; 
        
        // $thumb = $this->cropper->setDst($thumbPath);

        // //print_r($thumb);die;
        // $this->cropper->setSrc($avatar_src);
        // $data = $this->cropper->setData($avatar_data);
        // // set file
        // $avatar_path = $this->cropper->setFile($avatar_file, $originalPath); 
        // // crop       
        // $this->cropper->crop($avatar_path, $thumb, $data);

        // $thumbPath = $this->cropper->getThumbResult();
        // // response       
        // $json = array(
        //   'state'  => 200,
        //   'message' => $this->cropper->getMsg(),
        //   'result' => $this->cropper->getResult(),
        //   'thumb' => $this->cropper->getThumbResult(),
        //   'ussid' => $ussid,//$_SESSION['user_id'], //$ussid,
        //   'upltype' => $upltype,
        //   'urlPath' => $urlPath,
        // );
        // if(json_encode($json)){  

        //     if ($_SESSION['employer_id'] !='') {
        //         $employer_id = $this->session->userdata('employer_id');

        //         $type = 'emp';

        //         $this->site->setMemberProfilePicture1($thumbPath,$employer_id,$type);
        //         $json['success'] = 'success';

        //         $this->session->set_flashdata('update_success','Image updated successfully');
        //         redirect(base_url('employers/profile')); 
        //     }

        //     if ($_SESSION['user_id'] != '') { 

        //         $user_id = $this->session->userdata('user_id');

        //         $type = 'user';

        //         $this->site->setMemberProfilePicture1($thumbPath,$user_id,$type);
        //         $json['success'] = 'success';

        //         $this->session->set_flashdata('update_success','User Image updated successfully');
        //         redirect(base_url('profile')); 
        //     }

            
        // }else{
        //     $json['success'] = 'failed';
        // }

    }
    
    // upload prifile avatar Crop Image
    public function uploadCropImg() {
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
            $this->site->seturl($image_url);
            $this->site->setUserID($user_id);
            $this->site->setMemberProfilePicture();
            $json['success'] = 'failed';
        }
        header('Content-Type: application/json');
        echo json_encode($json);
    }

}