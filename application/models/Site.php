<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * @package Site :  CodeIgniter Site
 *
 * @author TechArise Team
 *
 * @email  info@techarise.com
 *   
 * Description of Site Controller
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Site extends CI_Model {
    private $_userID;
    private $_url;
    public function setUserID($userID) {
        $this->_userID = $userID;
    }
    public function seturl($url) {
        $this->_url = $url;
    }
    // get user details
    public function getUserDetails() {
        $this->db->select(array('m.id as user_id', 'CONCAT(m.firstname, " ", m.lastname) as full_name', 'm.firstname', 'm.lastname', 'm.email', 'm.mobile_no',  'm.dob', 'up.url'));
        $this->db->from('xx_users as m');
        $this->db->join('xx_users_profile_picture as up', 'm.id=up.user_id');
        $this->db->where('m.id', $this->_userID);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return FALSE;
        }
    }

    public function setUserProfile($data,$where_data){
        $this->db->where('id',$where_data);
        $insertData=$this->db->update('xx_users',$data);
        if($insertData){
          return TRUE;
        }else{
          return FALSE;
        }
    }


    public function setEmployProfile($data,$where_data){
        $this->db->where('id',$where_data);
        $insertData=$this->db->update('xx_employers',$data);
        if($insertData){
          return TRUE;
        }else{
          return FALSE;
        }
    }


    public function setMemberProfilePicture($url,$userID,$type) {
        $tableName = 'xx_users_profile_picture';
        $this->db->select(array('lpp.id', 'lpp.url', 'lpp.user_id'));
        $this->db->from($tableName . ' as lpp');
        $this->db->where('lpp.user_id', $this->_userID);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = array(
                'url' => $this->_url,
                'type' => $type,

            );
            $this->db->where('user_id', $this->_userID);
           $updateData = $this->db->update($tableName, $data);
            if($updateData){
              return TRUE;
            }else{
              return FALSE;
            }
        } else {
            $data = array(
                'url' => $url,
                'user_id' => $userID,
                'type' => $type
            );
            $insertData = $this->db->insert($tableName, $data);
            if($insertData){
              return TRUE;
            }else{
              return FALSE;
            }
        }
    }

    public function setEmpPic($url,$userID,$type) {
        $tableName = 'xx_users_profile_picture';
        $this->db->select(array('lpp.id', 'lpp.url', 'lpp.user_id'));
        $this->db->from($tableName . ' as lpp');
        $this->db->where('lpp.user_id', $userID);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = array(
                'url' => $url,
                'type' => $type
            );
            $this->db->where('user_id', $userID);
            $updateData = $this->db->update($tableName, $data);
            if($updateData){
              return TRUE;
            }else{
              return FALSE;
            }

        } else {
            $data = array(
                'url' => $url,
                'user_id' => $userID,
                'type' => $type
            );
            $insertData = $this->db->insert($tableName, $data);
            if($insertData){
              return TRUE;
            }else{
              return FALSE;
            }
        }
    }

   

    public function setCompanyLogo($data,$where_data){
    $this->db->where('id',$where_data);
    $insertData=$this->db->update('xx_companies',$data);
    if($insertData){
      return TRUE;
    }else{
      return FALSE;
    }
  }

}
