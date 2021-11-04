<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Settings_model extends CI_Model
{
  /*Get all user details against a user id*/
	public function fetchUserData($user_id,$user_firstname){
    $query=$this->db->select('*')->where('id',$user_id)->where('first_name',$user_firstname)->get('users');
    $result=$query->result();
    return $result[0];
  }

}
