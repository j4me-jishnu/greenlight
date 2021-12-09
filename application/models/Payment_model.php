<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Payment_model extends CI_Model
{

	public function getSubscriptionDetailTable($id)
	{

		$this->db->select('*');
		$this->db->from('subscription');
		$this->db->where('subp_id',$id);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_user_subscriptions($user_id){
		$records=$this->db->select('*')->where('pay_user_fk',$user_id)
		->join('subscription', 'subscription.subp_id = tbl_payment.pay_sub_fk')
		->order_by("pay_enter_datetime", "desc")
		->get('tbl_payment');
		$response=$records->result_array();
		if($response){
			return $response[0];
		}else{
			return false;
		}
	}



}
