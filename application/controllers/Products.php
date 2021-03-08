<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
	function  __construct() {
        parent::__construct();
        $this->load->library('paypal_lib');
    }
    
    function index(){
        $data = array();
        //get products data from database
        $data['products'] = $this->product->getRows();
        //pass the products data to view
        $this->load->view('products/index', $data);
    }

    function buy($r_id){

        
        if(!isset($_SESSION['user_id']))
        {
            redirect('auth/login');
        }
        else
        {
            $checkAmt = $this->db->query('SELECT * FROM xx_resume WHERE r_id ='.$r_id.' ')->row();

            if (!empty($checkAmt)) {

                $amt = $checkAmt->resume_price;
                // $checkCoupon = $this->db->query('SELECT * FROM xx_coupon WHERE coupon_id = '.$coupon_id.'  '  )->row();
                //     //print_r($checkCoupon);die;
                //    if (!empty($checkCoupon)) {
                       
                //    }   

                //$coupon_id = $checkAmt->coupon_id; 
                // if ($coupon_id > 1) {
                //     $amt = $checkAmt->resume_price;
                // }else{

                      
                    
                // }      
            }else{
                 $cancelURL = base_url().'paypal/cancel';
            }

            //print_r($checkAmt);die;
            $csrf_name = $this->security->get_csrf_token_name();
            $csrf_hash = $this->security->get_csrf_hash();
            //Set variables for paypal form
            $returnURL = base_url().'paypal/success'; //payment success url
            $cancelURL = base_url().'paypal/cancel'; //payment cancel url
            $notifyURL = base_url().'paypal/ipn'; //ipn url
            //get particular product data
            $userID = 1; //current user id
            $logo = base_url().'assets/codexworld-logo.png';

            
            $this->paypal_lib->add_field('return', $returnURL);
            $this->paypal_lib->add_field('cancel_return', $cancelURL);
            $this->paypal_lib->add_field('notify_url', $notifyURL);
            $this->paypal_lib->add_field('item_name', 'Resume');
            $this->paypal_lib->add_field('custom', $_SESSION['user_id']);
            $this->paypal_lib->add_field('item_number',  1);
            $this->paypal_lib->add_field('amount',  $amt); 
            $this->paypal_lib->add_field('csrf_test_name',   $csrf_hash);       
            $this->paypal_lib->image($logo);
            
            $this->paypal_lib->paypal_auto_form();
        }
        
    }
}
