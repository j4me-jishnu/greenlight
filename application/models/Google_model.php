<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Google_model extends CI_Model
{

	public function checkUser1($userData)
	{
        if(!empty($userData['oauth_uid'])){
        $this->db->where('oauth_uid	',$userData['oauth_uid']);    
        }
        $this->db->select('*');
        $this->db->from('google_users');
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return 1;
        }
        else
        {
            return 0;
        }
    }   


}

