<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Facebook_model extends CI_Model
{

	public function checkUser1($addData)
	{
        if(!empty($addData['oauth_uid'])){
        $this->db->where('oauth_uid	',$addData['oauth_uid']);    
        }
        $this->db->select('*');
        $this->db->from('fb_users');
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

