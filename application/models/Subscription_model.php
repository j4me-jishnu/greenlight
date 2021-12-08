<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Subscription_model extends CI_Model
{

	public function getSubscriptionDetailTable(){
		$this->db->select('*');
		$this->db->from('subscription');
		$this->db->where('subscription_status',1);
		$query = $this->db->get();
		return $query->result();
	}

	public function getSubscribedPlans($user_id){
		$query=$this->db->select('*')->where('pay_user_fk',$user_id)->get('tbl_payment');
		$result=$query->result();
		return $result;
	}

}
