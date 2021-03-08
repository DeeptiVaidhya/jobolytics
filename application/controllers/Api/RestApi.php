<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RestApi extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->model('auth_model');
         $this->load->model('Api/Model');

         $this->load->library('mailer');
        header('Access-Control-Allow-Origin: *');

        header('Access-Control-Allow-Credentials: true');

        header('Access-Control-Allow-Methods: GET,HEAD,OPTIONS,POST,PUT,DELETE');

        header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Origin,Accept, X-Requested-With, Content-Type, Access-Control-Request-Method, Access-Control-Request-Headers, TOKEN , Authoriz');

        header('Content-Type: application/json; charset=UTF8');
        header('Content-Type: text/html; charset=UTF-8');

        $this->output->set_content_type('application/json');

        if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'OPTIONS'){
        header('HTTP/1.1 200 OK');
        die();
        }
    }

    public function genrate_token($tokenData){
        $str=implode(',', $tokenData);
        $token= base64_encode($str);
        return $token;
    }



    public function decode_token($str){

        $str_res   = base64_decode($str);
        $user_data = explode(',',$str_res);
        $id=$user_data[0];
        $email=$user_data[1];
        $token=$user_data[2]; 

        $where_data = array(
            'id'       => $id,
            'email'    => $email,
            'device_token'=> $token
        );
        
        $result   = $this->Model->singleRowdata($where_data,'xx_users');
        // print_r($result);
        if($result){
            return $result->id;

        }else{
            return false;
        }
    }

    public function genrate_emp_token($tokenData){
        $str=implode(',', $tokenData);
        $token= base64_encode($str);
        return $token;
    }

     public function decode_emp_token($str){

        $str_res   = base64_decode($str);
        $user_data = explode(',',$str_res);
        $id=$user_data[0];
        $email=$user_data[1];
        $token=$user_data[2]; 

        $where_data = array(
            'id'       => $id,
            'email'    => $email,
            'device_token'=> $token
        );
        
        $result   = $this->Model->singleRowdata($where_data,'xx_employers');
        // print_r($result);
        if($result){
            return $result->id;

        }else{
            return false;
        }
    }


    public function signup(){
        $post  = file_get_contents('php://input');
        $val   =json_decode($post);
        date_default_timezone_set('Asia/Calcutta'); 
        $datetime      = date('Y-m-d : h:m:s');
        $first_name   = $val->first_name;
        $last_name    = $val->last_name;
        $email        = $val->email;
        $password     = $val->password;
        $where_data = array(
            'email'    => $email,
        );
        $result  = $this->Model->singleRow($where_data,'xx_users');

        $checkEmail =  $this->Model->singleRow($where_data,'xx_employers');
        if ($checkEmail) {
            $data_result['result']   = 'false';
            $data_result['msg']      = "You Can use diffrent email address.";
        }else{

            if($result == 0 ){
                
                $registerData=array(
                     'email'        => $email,
                     'password'     => password_hash($password, PASSWORD_BCRYPT),//md5($password),
                     'firstname'    => $first_name,
                     'lastname'     => $last_name,
                     'created_date' => date('Y-m-d : h:m:s'),
                     'updated_date' => date('Y-m-d : h:m:s')
                );
                $res  = $this->Model->insert($registerData,'xx_users');
                if ($res) {
                    $userData  = array('id' => $res);
                    $user_info = $this->Model->singleRowdata($userData,'xx_users');

                    if ($user_info) {
                        $user_email = $user_info->email;
                        $user_id = $user_info->id;
                        $firstname   = $user_info->firstname;
                    }                   

                    $this->registrationMail($user_email,$user_id,$firstname);

                    $data_result['result']     = 'true';
                   // $data_result['data']       = $user_info;
                    $data_result['msg']        = 'User Register Successully!';        
                }else{
                    $data_result['result']   = 'false';
                    $data_result['msg']      = "User not Insert.";
                }  
            }else{
                $data_result['result']   = 'false';
                $data_result['msg']      = "Email already exists.";
            } 
        }

      
        echo json_encode($data_result);
    } 

    public function signIn(){
        $post           = file_get_contents('php://input');
        $val            = json_decode($post);
        $email          = $val->email;
        $password       = $val->password;
        $device_type    = $val->device_type;
        $device_token   = $val->device_token;
        date_default_timezone_set('Asia/Calcutta'); 
        $datetime      = date('Y-m-d');

        $wheredata=array(
            'email'    => $email
        );
        $checkEmail = $this->Model->singleRowdata($wheredata,'xx_users');
        if ($checkEmail) {
            // $wheredata=array(
            //     'email'    => $email,
            //     'password' => password_verify($password,$checkEmail->password)
            // );

            $validPassword = password_verify($password,$checkEmail->password);
            //$checkPwd = $this->Model->singleRowdata($wheredata,'xx_users');

            if ($validPassword) {

                $where_device = array(
                    'email'     => $checkEmail->email,
                    'email_verify' => 1
                );

                $checkVerifyEmail = $this->Model->singleRowdata($wheredata,'xx_users');
                if($checkVerifyEmail) {

                    $where_data = array(
                        'email'    => $email
                    );
                    $device_data = array(
                       'device_type'  => $device_type,
                       'device_token' => $device_token
                    );
                    $res  = $this->Model->update('xx_users',$device_data,$where_data);
                    if ($res) {                
                        $loginUser = $this->Model->singleRowdata($where_data,'xx_users');
                        if ($loginUser) {
                            $tokenData   = array();
                            $tokenData['id']   = $loginUser->id;
                             $tokenData['email']   = $loginUser->email; 
                            $tokenData['device_token']  = $device_token; 
                            $data_result['token']       = $this->genrate_token($tokenData);

                            $LoginData=array(
                                 'user_id'       => $loginUser->id,
                                 'email'        => $loginUser->email,
                                 'email_verify' => $loginUser->email_verify,
                                 'firstname'    => $loginUser->firstname,
                                 'lastname'     => $loginUser->lastname,
                                 'device_type'  => $loginUser->device_type,
                                 'device_token' => $loginUser->device_token
                            );
                        
                            $data_result['result']       = 'true';
                            $data_result['data']         = $LoginData;
                            $data_result['msg']          ='Login Successfully';
                        }else{
                            $data_result['result']       = 'false';
                            $data_result['msg']          = 'Data incorrect';
                        }
                    }else{
                        $data_result['result']       = 'false';
                        $data_result['msg']         = 'Login failed';
                    }
                }else{
                    $data_result['result']   = 'false';
                    $data_result['msg']      = 'Verify Your Email First';
                }     
            }else{
                $data_result['result']   = 'false';
                $data_result['msg']      = 'Password incorrect';
            }
        }else{
            $data_result['result']               = 'false';
            $data_result['msg']                  = 'Email incorrect';
        }
        echo json_encode($data_result);
    }

    public function changePassword(){
        $post = file_get_contents('php://input');
        $val=json_decode($post);
        $headers = $this->input->request_headers();
        
        if ((array_key_exists('Authoriz', $headers) && !empty($headers['Authoriz'])) || (array_key_exists('authoriz', $headers) && !empty($headers['authoriz']))) {
            
            if(isset($headers['Authoriz'])){
                $token=$headers['Authoriz'];
            }else{
                $token=$headers['authoriz'];
            }
            $decodedToken = $this->decode_token($token);
            if ($decodedToken != false) {
                $user_id =$decodedToken;
               
                $where_pwd = array(
                    'password' =>  md5($val->old_password),
                    'id'       =>   $user_id
                );
                $changeres = $this->Model->singleRowdata($where_pwd,'xx_users');
                if($changeres){
                    $where_newpwd = array(
                        'id' => $user_id
                        );
                    $new_data = array(
                        'password' => md5($val->new_password)
                    );

                    $Res = $this->Model->update('xx_users',$new_data, $where_newpwd);
                    if($Res){
                        $where_user_row = array(
                           'id'=>$user_id
                        );

                        $result   = $this->Model->singleRowdata($where_user_row,'xx_users');
                        if($result){
                            $tokenData = array();
                            $tokenData['email'] = $result->email; 
                            $tokenData['password'] = $result->password; 
                            $tokenData['device_token'] = $result->device_token; 
                            $data_result['token'] = $this->genrate_token($tokenData);

                            $data_result['result'] ='true';
                            $data_result['msg'] ='Your password has been succesfully changed.';
                        }else{

                            $data_result['result'] ='true';
                            $data_result['msg'] ='Data incorrect';
                        }
                    }    
                    else{
                        $data_result['result'] ='false';
                        $data_result['msg'] ='sometime went wrong.';
                    }

                }else{

                    $data_result['result'] ='false';
                    $data_result['msg'] ='Old password not matched.';
                }        

            }
            else{
                $data_result['result']='Invalid Decoded Token';
            }
        }else{
            $data_result['result']='Invalid Token';
        }    
    echo json_encode($data_result);
    }

   public function getProfileDetails(){
    $post = file_get_contents('php://input');
    $val=json_decode($post);
    //$user_id = $val->user_id;
    $headers = $this->input->request_headers();
    if ((array_key_exists('Authoriz', $headers) && !empty($headers['Authoriz'])) || (array_key_exists('authoriz', $headers) && !empty($headers['authoriz']))) {
        
        if(isset($headers['Authoriz'])){
            $token=$headers['Authoriz'];
        }else{
            $token=$headers['authoriz'];
        }
        $decodedToken = $this->decode_token($token);
        if ($decodedToken != false) {
            $user_id = $decodedToken;
            $where_data = array(
                'id'  => $user_id
            );
            
            $res_chk  = $this->Model->singleRowdata($where_data,'xx_users');
            if($res_chk){                     
                $data_result['result'] = 'true';
                $data_result['data']   = $res_chk;
                $data_result['msg']    = 'Get user details succesfully';
            }
            else{
                $data_result['result'] ='false';
                $data_result['msg'] ='Data incorrect';
            }
        }
        else{
            $data_result['result']='Invalid decode Token';
        }

    }else{
        $data_result['result']='Invalid Token';
    }            
    echo json_encode($data_result);
}

    //edit Profile
public function editProfileDetails() {
        $post = file_get_contents('php://input');
        $val  = json_decode($post);
        $headers = $this->input->request_headers();
        if ((array_key_exists('Authoriz', $headers) && !empty($headers['Authoriz'])) || (array_key_exists('authoriz', $headers) && !empty($headers['authoriz']))) {
            
            if(isset($headers['Authoriz'])){
                $token=$headers['Authoriz'];
            }else{
                $token=$headers['authoriz'];
            }
             $decodedToken = $this->decode_token($token);
            if ($decodedToken != false) {
                $userid = $decodedToken;
                $wheredata     = array(
                    'id'  => $userid
                );
                //print_r($wheredata);die;
                $data = array(
                    'firstname'       => $val->firstname,
                    'lastname'        => $val->lastname,
                    'dob'             => $val->dob,
                    'mobile_no'       => $val->mobile_no,
                    'category'        => $val->category,
                    'job_title'       => $val->job_title,
                    'description'     => $val->description,
                    'postcode'        => $val->postcode,
                    'location'        => $val->location,
                    'experience'      => $val->experience,
                    'current_salary'  => $val->current_salary,
                    'expected_salary' => $val->expected_salary,
                    'currency'        => $val->currency,
                    'education_level' => $val->education_level,
                    'skills'          => $val->skills,
                    'profile_completed'=> 1,
                    'updated_date' => date('Y-m-d : h:m:s')
                );
                $show_status = $this->Model->update('xx_users',$data,$wheredata);
                if ($show_status) {
                    $userResult = $this->Model->selectAllById('xx_users',$wheredata);
                    if ($userResult) {
                        $data_result['result']        = 'true';
                        $data_result['data']          = $userResult;
                        $data_result['msg']           = 'User profile has been succesfully update!';
                    }else{
                        $data_result['result']        = 'false';
                        $data_result['msg']           = 'Sorry no Data Found!';
                    }
                }else{
                    $data_result['result']            = 'false';
                    $data_result['result']            = 'User Profile not Update!';
                }
            }else{
                $data_result['result'] = 'false';
                $data_result['result'] = 'Invalid Token';
            }
        }else{
            $data_result['result']   = 'false';
            $data_result['msg']      = 'Invalid Token';
        }
        echo json_encode($data_result);
}

public function latestJobs(){
    $post = file_get_contents('php://input');
    $val=json_decode($post);
    $headers = $this->input->request_headers();
    if ((array_key_exists('Authoriz', $headers) && !empty($headers['Authoriz'])) || (array_key_exists('authoriz', $headers) && !empty($headers['authoriz']))) {
        
        if(isset($headers['Authoriz'])){
            $token=$headers['Authoriz'];
        }else{
            $token=$headers['authoriz'];
        }
        $decodedToken = $this->decode_token($token);
        if ($decodedToken != false) {
            $currdate = date('Y-m-d H:i:s');
            $week_last_day = date("Y-m-d H:i:s", strtotime("- 30 day"));
            $resultData = $this->db->query('SELECT * FROM xx_job_post as j  WHERE j.created_date BETWEEN "'.$week_last_day.'" AND "'.$currdate.'" AND j.is_status = "active" ' )->result_array();          
            if($resultData){                     
                $data_result['result'] = 'true';
                $data_result['data']   = $resultData;
                $data_result['msg']    = 'Get Latest job succesfully';
            }
            else{
                $data_result['result'] ='false';
                $data_result['msg'] ='Data incorrect';
            }
        }
        else{
            $data_result['result']='Invalid decode Token';
        }

    }else{
        $data_result['result']='Invalid Token';
    }            
    echo json_encode($data_result);
}

public function getJobDetails(){
    $post = file_get_contents('php://input');
    $val=json_decode($post);
    $job_id = $val->job_id;
    $headers = $this->input->request_headers();
    if ((array_key_exists('Authoriz', $headers) && !empty($headers['Authoriz'])) || (array_key_exists('authoriz', $headers) && !empty($headers['authoriz']))) {
        
        if(isset($headers['Authoriz'])){
            $token=$headers['Authoriz'];
        }else{
            $token=$headers['authoriz'];
        }
        $decodedToken = $this->decode_token($token);
        if ($decodedToken != false) {

            $where_data = array(
                'id'  => $job_id
            );
            
            $res_chk  = $this->AdminModel->singleRowdata($where_data,'xx_job_post');
            if($res_chk){                     
                $data_result['result'] = 'true';
                $data_result['data']   = $res_chk;
                $data_result['msg']    = 'Get job details succesfully';
            }
            else{
                $data_result['result'] ='false';
                $data_result['msg'] ='Data incorrect';
            }
        }
        else{
            $data_result['result']='Invalid decode Token';
        }

    }else{
        $data_result['result']='Invalid Token';
    }            
    echo json_encode($data_result);
}

public function comapnyList(){
    $post = file_get_contents('php://input');
    $val=json_decode($post);
    $headers = $this->input->request_headers();
    if ((array_key_exists('Authoriz', $headers) && !empty($headers['Authoriz'])) || (array_key_exists('authoriz', $headers) && !empty($headers['authoriz']))) {
        
        if(isset($headers['Authoriz'])){
            $token=$headers['Authoriz'];
        }else{
            $token=$headers['authoriz'];
        }
        $decodedToken = $this->decode_token($token);
        if ($decodedToken != false) {
            
            $res_chk  = $this->Model->select('xx_companies');
            if($res_chk){                     
                $data_result['result'] = 'true';
                $data_result['data']   = $res_chk;
                $data_result['msg']    = 'Get Company list succesfully';
            }
            else{
                $data_result['result'] ='false';
                $data_result['msg'] ='Data incorrect';
            }
        }
        else{
            $data_result['result']='Invalid decode Token';
        }

    }else{
        $data_result['result']='Invalid Token';
    }            
    echo json_encode($data_result);
}


public function job_search(){
    $post = file_get_contents('php://input');
    $val=json_decode($post);

    $category   = $val->category;
    $industry   = $val->industry;
    $skills     = $val->skills;
    $location   = $val->location;

    $headers = $this->input->request_headers();
    if ((array_key_exists('Authoriz', $headers) && !empty($headers['Authoriz'])) || (array_key_exists('authoriz', $headers) && !empty($headers['authoriz']))) {
        
        if(isset($headers['Authoriz'])){
            $token=$headers['Authoriz'];
        }else{
            $token=$headers['authoriz'];
        }
        $decodedToken = $this->decode_token($token);
        if ($decodedToken != false) {   

            if ($category){
                $resultData = $this->Model->get_categories_with_jobs();         
            } 

            if ($industry){
                $resultData = $this->Model->get_industries_with_jobs();        
            }

            if ($skills){
                 $resultData = $this->Model->count_all_search_result();         
            }

            if ($location){
                $resultData = $this->Model->get_cities_with_jobs($category,$industry,$skills,$location);    
            }

            if ($category && $industry && $skills && $location) {
                
            }
            if($resultData){                     
                $data_result['result'] = 'true';
                $data_result['data']   = $resultData;
                $data_result['msg']    = 'Get Job List';
            }
            else{
                $data_result['result'] ='false';
                $data_result['msg'] ='Data incorrect';
            }
        }
        else{
            $data_result['result']='Invalid decode Token';
        }

    }else{
        $data_result['result']='Invalid Token';
    }            
    echo json_encode($data_result);
}


public function jobApplied(){
    $post = file_get_contents('php://input');
    $val=json_decode($post);
    $company_id   = $val->company_id;
    $job_id       = $val->job_id;
    $cover_letter = $val->cover_letter;
    $headers = $this->input->request_headers();
    if ((array_key_exists('Authoriz', $headers) && !empty($headers['Authoriz'])) || (array_key_exists('authoriz', $headers) && !empty($headers['authoriz']))) {
        
        if(isset($headers['Authoriz'])){
            $token=$headers['Authoriz'];
        }else{
            $token=$headers['authoriz'];
        }
        $decodedToken = $this->decode_token($token);
        if ($decodedToken != false) {
            $user_id = $decodedToken;
            
            $insert_jobs  = $this->Model->insert_job_application($user_id, $company_id, $job_id, $cover_letter);
            if($insert_jobs){                     
                $data_result['result'] = 'true';
                $data_result['data']   = $res_chk;
                $data_result['msg']    = 'Your Job Application has been sent successfully.';
            }
            else{
                $data_result['result'] ='false';
                $data_result['msg'] ='Your Job Application not sent successfully.';
            }
        }
        else{
            $data_result['result']='Invalid decode Token';
        }

    }else{
        $data_result['result']='Invalid Token';
    }            
    echo json_encode($data_result);
}


public function appliedJobs(){
    $post = file_get_contents('php://input');
    $val=json_decode($post);
    $headers = $this->input->request_headers();
    if ((array_key_exists('Authoriz', $headers) && !empty($headers['Authoriz'])) || (array_key_exists('authoriz', $headers) && !empty($headers['authoriz']))) {
        
        if(isset($headers['Authoriz'])){
            $token=$headers['Authoriz'];
        }else{
            $token=$headers['authoriz'];
        }
        $decodedToken = $this->decode_token($token);
        if ($decodedToken != false) {
            $seeker_id = $decodedToken;
            
            $res_chk  = $this->Model->check_applied_application($seeker_id);
            if($res_chk){                     
                $data_result['result'] = 'true';
                $data_result['data']   = $res_chk;
                $data_result['msg']    = 'Job list succesfully';
            }
            else{
                $data_result['result'] ='false';
                $data_result['msg'] ='Data incorrect';
            }
        }
        else{
            $data_result['result']='Invalid decode Token';
        }

    }else{
        $data_result['result']='Invalid Token';
    }            
    echo json_encode($data_result);
}

public function upload_documents(){
    $type = $this->input->get('type');
    $myimg = $_FILES["file"]["name"];

    if($type == 'image') {
        $path1 = time().rand(10000,99999).".jpg";
        if (move_uploaded_file($_FILES["file"]["tmp_name"], "assets/uploads/userimg/".$path1)) {
             $path1;
        } else {
            exit;
        }
    $data_result['path'] = $path1;
    $data_result['data'] = 'https://'.$_SERVER['SERVER_NAME'].'/assets/uploads/userimg/'.$path1;
    }

    if($type == 'resume') {
        $path1 = time().rand(10000,99999).".jpg";
        if (move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/resume/".$path1)) {
             $path1;
        } else {
            exit;
        }
    $data_result['path'] = $path1;
    $data_result['data'] = 'https://'.$_SERVER['SERVER_NAME'].'/uploads/resume/'.$path1;
    }  
    echo json_encode($data_result);
}

public function resumeOrderTracking(){
    $post = file_get_contents('php://input');
    $val=json_decode($post);

    $user_id  = $val->user_id;
    $order_id  = $val->order_id;

    $where = array(
        'r_id'           => $order_id, 
        'user_id'        => $user_id,
        'payment_status' => '1' 
   );

    $headers = $this->input->request_headers();
    if ((array_key_exists('Authoriz', $headers) && !empty($headers['Authoriz'])) || (array_key_exists('authoriz', $headers) && !empty($headers['authoriz']))) {
        
        if(isset($headers['Authoriz'])){
            $token=$headers['Authoriz'];
        }else{
            $token=$headers['authoriz'];
        }
        $decodedToken = $this->decode_token($token);
        if ($decodedToken != false) {
            $where = array(
                'r_id'           => $order_id, 
                'user_id'        => $user_id,
                'payment_status' => '1' 
            );
            $result = $this->Model->selectAllById('xx_resume',$where);
            if ($result) {
               foreach ($result as $key) {
                    if ($key['status'] == '0') {
                        $tracking_status = 'PENDING';
                    }else if ($key['status'] == '1') {
                        $tracking_status = 'INPROGRESS';
                    }else if ($key['status'] == '1') {
                        $tracking_status = 'SUCCUES';
                    }else if ($key['status'] == '1') {
                        $tracking_status = 'REJECT';
                    }else{
                        $tracking_status = 'Error';
                    }
                    $arrayName = array(
                            'r_id'              => $key['r_id'], 
                            'user_id'           => $key['user_id'],
                            'first_name'        => $key['first_name'],
                            'last_name'         => $key['last_name'],
                            'mobile_number'     => $key['mobile_number'],
                            'email_id'          => $key['email_id'],
                            'resume_title'      => $key['resume_title'],
                            'resume_price'      => $key['resume_price'],
                            'permanent_address' => $key['permanent_address'],
                            'current_address'   => $key['current_address'],
                            'degree'            => $key['degree'],
                            'certificate'       => $key['certificate'],
                            'company'           => $key['company'],
                            'skills'            => $key['skills'],
                            'achivments'        => $key['achivments'],
                            'profile_photo'     => $key['profile_photo'],
                            'coupon_id'         => $key['coupon_id'],
                            'payment_status'    => $key['payment_status'],
                            'status'            => $key['status'],
                            'tracking_status'   => $tracking_status
                    );
                } 
           $data_result['result'] = 'true';
           $data_result['count']  = $arrayName;
           $data_result['msg']    = 'tracking information';
      }else{
           $data_result['result'] = 'false';
           $data_result['msg']    = 'Data Not Fount';
      }
        }
        else{
            $data_result['result']='Invalid decode Token';
        }

    }else{
        $data_result['result']='Invalid Token';
    }            
    echo json_encode($data_result);
}

public function employer_signup(){
        $post  = file_get_contents('php://input');
        $val   =json_decode($post);
        date_default_timezone_set('Asia/Calcutta'); 
        $datetime      = date('Y-m-d : h:m:s');
        $first_name   = $val->first_name;
        $last_name    = $val->last_name;
        $email        = $val->email;
        $password     = $val->password;

        $company_name   = $val->company_name;
        $company_slug    = $val->company_slug;
        $category        = $val->category;
        $org_type     = $val->org_type;
        $phone_no   = $val->phone_no;
        $website    = $val->website;
        $description        = $val->description;
        $location     = $val->location;
        $where_data = array(
            'email'    => $email,
        );
        $result  = $this->Model->singleRowdata($where_data,'xx_employers');

        $checkEmail =  $this->Model->singleRowdata($where_data,'xx_users');
        if ($checkEmail) {
            $data_result['result']   = 'false';
            $data_result['msg']      = "You Can use diffrent email address.";
        }else{

            if($result == 0 ){
                
                $registerData=array(
                     'email'        => $email,
                     'password'     => password_hash($password, PASSWORD_BCRYPT),
                     'firstname'    => $first_name,
                     'lastname'     => $last_name,
                     'created_date' => date('Y-m-d : h:m:s'),
                     'updated_date' => date('Y-m-d : h:m:s')
                );

                $res  = $this->Model->insert($registerData,'xx_employers');
                if ($res) {
                    $userData  = array('id' => $res);
                    $user_info = $this->Model->singleRowdata($userData,'xx_employers');

                    // if ($user_info) {
                    //     $user_email = $user_info->email;
                    //     $user_id = $user_info->id;
                    //     $firstname   = $user_info->firstname;
                    // }                   

                    //$this->registrationMail($user_email,$user_id,$firstname);

                     $company_info = array(
                        'company_name' => $company_name, 
                        'company_slug' => $company_slug,
                        'category' => $category,
                        'org_type' => $org_type,
                        'phone_no' => $phone_no,
                        'website' => $website,
                        'description' => $description,
                        'location' => $location,
                    );

                    $create_company = $this->Model->insert_company($company_info); 

                    $data_result['result']     = 'true';
                   // $data_result['data']       = $user_info;
                    $data_result['msg']        = 'Employer Register Successully!';        
                }else{
                    $data_result['result']   = 'false';
                    $data_result['msg']      = "Employer not Insert.";
                }  
            }else{
                $data_result['result']   = 'false';
                $data_result['msg']      = "Email already exists.";
            } 
        }

      
        echo json_encode($data_result);
} 

public function employer_signIn(){
        $post           = file_get_contents('php://input');
        $val            = json_decode($post);
        $email          = $val->email;
        $password       = $val->password;
        $device_type    = $val->device_type;
        $device_token   = $val->device_token;
        date_default_timezone_set('Asia/Calcutta'); 
        $datetime      = date('Y-m-d');

        $wheredata=array(
            'email'    => $email
        );
        $checkEmail = $this->Model->singleRowdata($wheredata,'xx_employers');
        if ($checkEmail) {

            $validPassword = password_verify($password,$checkEmail->password);

            // $wheredata=array(
            //     'email'    => $email,
            //     'password' => md5($password)
            // );
            // $checkPwd = $this->Model->singleRowdata($wheredata,'xx_employers');

            if ($validPassword) {

                $where_device = array(
                    'email'     => $checkEmail->email,
                    'email_verify' => 1
                );

                $checkVerifyEmail = $this->Model->singleRowdata($wheredata,'xx_employers');
                if($checkVerifyEmail) {

                    $where_data = array(
                        'email'    => $email,
                        //'password' => md5($password)
                    );
                    $device_data = array(
                       'device_type'  => $device_type,
                       'device_token' => $device_token
                    );
                    $res  = $this->Model->update('xx_employers',$device_data,$where_data);
                    if ($res) {                
                        $loginUser = $this->Model->singleRowdata($where_data,'xx_employers');
                        if ($loginUser) {
                            $tokenData   = array();
                            $tokenData['id']   = $loginUser->id;
                            $tokenData['email']   = $loginUser->email; 
                            $tokenData['device_token']  = $device_token; 
                            $data_result['token']       = $this->genrate_emp_token($tokenData);

                            $LoginData=array(
                                 'user_id'       => $loginUser->id,
                                 'email'        => $loginUser->email,
                                 'email_verify' => $loginUser->email_verify,
                                 'firstname'    => $loginUser->firstname,
                                 'lastname'     => $loginUser->lastname,
                                 'device_type'  => $loginUser->device_type,
                                 'device_token' => $loginUser->device_token
                            );
                        
                            $data_result['result']       = 'true';
                            $data_result['data']         = $LoginData;
                            $data_result['msg']          ='Login Successfully';
                        }else{
                            $data_result['result']       = 'false';
                            $data_result['msg']          = 'Data incorrect';
                        }
                    }else{
                        $data_result['result']       = 'false';
                        $data_result['msg']         = 'Login failed';
                    }
                }else{
                    $data_result['result']   = 'false';
                    $data_result['msg']      = 'Verify Your Email First';
                }     
            }else{
                $data_result['result']   = 'false';
                $data_result['msg']      = 'Password incorrect';
            }
        }else{
            $data_result['result']               = 'false';
            $data_result['msg']                  = 'Email incorrect';
        }
        echo json_encode($data_result);
}

public function empchangePassword(){
        $post = file_get_contents('php://input');
        $val=json_decode($post);
        $headers = $this->input->request_headers();
        
        if ((array_key_exists('Authoriz', $headers) && !empty($headers['Authoriz'])) || (array_key_exists('authoriz', $headers) && !empty($headers['authoriz']))) {
            
            if(isset($headers['Authoriz'])){
                $token=$headers['Authoriz'];
            }else{
                $token=$headers['authoriz'];
            }
            $decodedToken = $this->decode_emp_token($token);
            if ($decodedToken != false) {
                $user_id =$decodedToken;
               
                $where_pwd = array(
                    'password' =>  md5($val->old_password),
                    'id'       =>   $user_id
                );
                $changeres = $this->Model->singleRowdata($where_pwd,'xx_employers');
                if($changeres){
                    $where_newpwd = array(
                        'id' => $user_id
                        );
                    $new_data = array(
                        'password' => md5($val->new_password)
                    );

                    $Res = $this->Model->update('xx_employers',$new_data, $where_newpwd);
                    if($Res){
                        $where_user_row = array(
                           'id'=>$user_id
                        );

                        $result   = $this->Model->singleRowdata($where_user_row,'xx_employers');
                        if($result){
                            $tokenData = array();
                            $tokenData['email'] = $result->email; 
                            $tokenData['password'] = $result->password; 
                            $tokenData['device_token'] = $result->device_token; 
                            $data_result['token'] = $this->genrate_token($tokenData);

                            $data_result['result'] ='true';
                            $data_result['msg'] ='Your password has been succesfully changed.';
                        }else{

                            $data_result['result'] ='true';
                            $data_result['msg'] ='Data incorrect';
                        }
                    }    
                    else{
                        $data_result['result'] ='false';
                        $data_result['msg'] ='sometime went wrong.';
                    }

                }else{

                    $data_result['result'] ='false';
                    $data_result['msg'] ='Old password not matched.';
                }        

            }
            else{
                $data_result['result']='Invalid Decoded Token';
            }
        }else{
            $data_result['result']='Invalid Token';
        }    
    echo json_encode($data_result);
}

public function empEditProfile() {
    $post = file_get_contents('php://input');
    $val  = json_decode($post);
    $headers = $this->input->request_headers();
    if ((array_key_exists('Authoriz', $headers) && !empty($headers['Authoriz'])) || (array_key_exists('authoriz', $headers) && !empty($headers['authoriz']))) {
        
        if(isset($headers['Authoriz'])){
            $token=$headers['Authoriz'];
        }else{
            $token=$headers['authoriz'];
        }
         $decodedToken = $this->decode_emp_token($token);
        if ($decodedToken != false) {
            $emp_id = $decodedToken;
            $wheredata     = array(
                'id'  => $emp_id
            );
           
            $data = array(
                'firstname'       => $val->firstname,
                'lastname'        => $val->lastname,
                'dob'             => $val->dob,
                'mobile_no'       => $val->mobile_no,
                'designation'     => $val->designation,
                'dob'             => $val->dob,
                'address'         => $val->address,
                'description'     => $val->description,
                'updated_date' => date('Y-m-d : h:m:s')
            );
            $show_status = $this->Model->update('xx_employers',$data,$wheredata);
            if ($show_status) {
                $userResult = $this->Model->selectAllById('xx_employers',$wheredata);
                if ($userResult) {
                    $data_result['result']        = 'true';
                    $data_result['data']          = $userResult;
                    $data_result['msg']           = 'Employer profile has been succesfully update!';
                }else{
                    $data_result['result']        = 'false';
                    $data_result['msg']           = 'Sorry no Data Found!';
                }
            }else{
                $data_result['result']            = 'false';
                $data_result['result']            = 'Employer Profile not Update!';
            }
        }else{
            $data_result['result'] = 'false';
            $data_result['result'] = 'Invalid Token';
        }
    }else{
        $data_result['result']   = 'false';
        $data_result['msg']      = 'Invalid Token';
    }
    echo json_encode($data_result);
}

public function empPostJob() {
    $post = file_get_contents('php://input');
    $val  = json_decode($post);
    $headers = $this->input->request_headers();
    if ((array_key_exists('Authoriz', $headers) && !empty($headers['Authoriz'])) || (array_key_exists('authoriz', $headers) && !empty($headers['authoriz']))) {
        
        if(isset($headers['Authoriz'])){
            $token=$headers['Authoriz'];
        }else{
            $token=$headers['authoriz'];
        }
         $decodedToken = $this->decode_emp_token($token);
        if ($decodedToken != false) {
            $emp_id = $decodedToken;
           
            $data = array(
                'employer_id'        => $emp_id,
                'company_id'         => $val->company_id,
                'company_name'       => $val->company_name,
                'job_type'           => $val->job_type,
                'category'           => $val->category,
                'industry'           => $val->industry,
                'experience'         => $val->experience,
                'min_salary'         => $val->min_salary,
                'max_salary'         => $val->max_salary,
                'description'        => $val->description,
                'skills'             => $val->skills,
                'total_positions'    => $val->total_positions,
                'gender'             => $val->gender,
                'education'          => $val->education,
                'employment_type'    => $val->employment_type,
                'location'           => $val->location,
                'created_date'       => date('Y-m-d : h:m:s'),
                'updated_date'       => date('Y-m-d : h:m:s')
            );
            $job_id = $this->Model->insert($data,'xx_job_post');
            if ($job_id) {
                $job_slug = $this->make_job_slug($val->job_title, $val->city, $job_id);

                $data_result['result']        = 'true';
                $data_result['msg']           = 'Job Post Successfully';
            }else{
                $data_result['result']            = 'false';
                $data_result['result']            = 'Job post failed';
            }
        }else{
            $data_result['result'] = 'false';
            $data_result['result'] = 'Invalid Token';
        }
    }else{
        $data_result['result']   = 'false';
        $data_result['msg']      = 'Invalid Token';
    }
    echo json_encode($data_result);
}

private function make_job_slug($job_title, $city){
        $final_job_url ='';
        $job_title = trim($job_title);
        // $city = get_city_name($city);
        // $job_title_slug = make_slug($job_title). '-job-in-'.make_slug($city) ;  // make slug is a helper function
        $final_job_url = $job_title_slug;
        return $final_job_url;
}

public function cvShortlisted(){
      $post = file_get_contents('php://input');
      $val = json_decode($post);

      $headers = $this->input->request_headers();
      if ((array_key_exists('Authoriz', $headers) && !empty($headers['Authoriz'])) || (array_key_exists('authoriz', $headers) && !empty($headers['authoriz']))) {
            
            if(isset($headers['Authoriz'])){
                $token=$headers['Authoriz'];
            }else{
                $token=$headers['authoriz'];
            }

            $decodedToken = $this->decode_emp_token($token);
            if ($decodedToken != false) { 
                $emp_id = $decodedToken;  
                $cvShortlisted  = $this->Model->get_shortlisted_applicants($emp_id);
                if ($cvShortlisted) {
                    $data_result['result']     = 'true';
                    $data_result['data']       = $cvShortlisted;
                    $data_result['msg']        = 'Cv Shortlisted List';
                }else{
                    $data_result['result']     = 'false';
                    $data_result['msg']        = 'Failed to fatch list some issue accured';
                }
            }
            else{
                $data_result['result']='Invalid decode Token';
            }

        }else{
            $data_result['result']='Invalid Token';
        } 
     

     
      echo json_encode($data_result);

}

public function empCompanyDetails() {
    $post = file_get_contents('php://input');
    $val  = json_decode($post);
    $headers = $this->input->request_headers();
    if ((array_key_exists('Authoriz', $headers) && !empty($headers['Authoriz'])) || (array_key_exists('authoriz', $headers) && !empty($headers['authoriz']))) {
        
        if(isset($headers['Authoriz'])){
            $token=$headers['Authoriz'];
        }else{
            $token=$headers['authoriz'];
        }
         $decodedToken = $this->decode_emp_token($token);
        if ($decodedToken != false) {
            $emp_id = $decodedToken;

            $comp_id = $val->comp_id;
            $wheredata     = array(
                'id'  => $comp_id
            );
           
            $data = array(
                'company_name' => $company_name, 
                'company_slug' => $company_slug,
                'email' => $email,
                'phone_no' => $phone_no,
                'website' => $website,
                'category' => $category,
                'founded_date' => $founded_date,
                'org_type' => $org_type,
                'no_of_employers' => $no_of_employers,
                'description' => $description,
                'postcode' => $postcode,
                'description' => $description,
                'location' => $location,
                'facebook_link' => $facebook_link,
                'twitter_link' => $twitter_link,
                'youtube_link' => $youtube_link,
                'vimeo_link' => $vimeo_link,
                'google_link' => $google_link,
                'linkedin_link' => $linkedin_link,
                'updated_date' => date('Y-m-d : h:m:s')
            );
            $show_status = $this->company_model->update_company_info($data, $comp_id, $emp_id);
            if ($show_status) {
               
                $data_result['result']        = 'true';
                $data_result['msg']           = 'Company profile has been succesfully update!';
            }else{
                $data_result['result']            = 'false';
                $data_result['result']            = 'Company Profile not Update!';
            }
        }else{
            $data_result['result'] = 'false';
            $data_result['result'] = 'Invalid Token';
        }
    }else{
        $data_result['result']   = 'false';
        $data_result['msg']      = 'Invalid Token';
    }
    echo json_encode($data_result);
}

public function cv_search(){
    $post = file_get_contents('php://input');
    $val=json_decode($post);

    $job_title  = $val->job_title;
    $locaction  = $val->locaction;

    $headers = $this->input->request_headers();
    if ((array_key_exists('Authoriz', $headers) && !empty($headers['Authoriz'])) || (array_key_exists('authoriz', $headers) && !empty($headers['authoriz']))) {
        
        if(isset($headers['Authoriz'])){
            $token=$headers['Authoriz'];
        }else{
            $token=$headers['authoriz'];
        }
        $decodedToken = $this->decode_emp_token($token);
        if ($decodedToken != false) {   

            if ($job_title && $locaction ){
                $cv_search = $this->Model->get_Cv_Search($job_title,$locaction);       
                            
                $data_result['result'] = 'true';
                $data_result['data']   = $cv_search;
                $data_result['msg']    = 'Get Cv List';
            }
            else{
                $data_result['result'] ='false';
                $data_result['msg'] ='Data incorrect';
            }
        }
        else{
            $data_result['result']='Invalid decode Token';
        }

    }else{
        $data_result['result']='Invalid Token';
    }            
    echo json_encode($data_result);
}


    


    public function registrationMail($user_email,$user_id,$firstname){

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



}
