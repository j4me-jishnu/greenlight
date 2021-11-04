<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Category_model extends CI_Model
{
/* Get collection of items based on sub category -jishnu*/
	public function getCategoryPageTable($id){
		if(!empty($id)){
			$this->db->select('*');
			$this->db->from('product_list');
			$this->db->join('product_sub_category','product_sub_category.pro_sub_cat_id = product_list.pro_sub_cat_id');
			$this->db->where('pro_cat_id_fk',$id);
			$query=$this->db->get();
			$result=$query->result();
			return $result;
		}
		else{
			return false;
		}
	}

	public function numRows($id){
		//get number of row for pagination
		$this->db->select('*');
		$this->db->from('product_list');
		$this->db->join('product_sub_category','product_sub_category.pro_sub_cat_id = product_list.pro_sub_cat_id');
		$this->db->where('pro_cat_id_fk',$id);
		$query = $this->db->get();
		return $query->num_rows();
	}

/*Get all data under index menu category*/
	public function fetch_subcategory_wise_data($category_id){
			$query=$this->db->select('*')
			->join('product_sub_category','product_sub_category.pro_sub_cat_id=product_list.pro_sub_cat_id')
			->where('pro_cat_id_fk',$category_id)
			->get('product_list');
			$records=$query->result();
			return $records;
	}

	public function fetch_all_offers(){
		$query=$this->db->select('*')->get('offers');
		$records=$query->result();
		return $records;
	}

	public function fetch_all_events(){
		$query=$this->db->select('*')->get('tbl_events');
		$records=$query->result();
		return $records;
	}
	public function getSingleEvent($event_id){
		$query=$this->db->select('*')
		->where('event_id',$event_id)
		->get('tbl_events');
		$records=$query->result();
		return $records[0];
	}
	public function checkAlreadyJoined($user_id,$event_id){
		$query=$this->db->select('*')
		->where('part_user_id_fk',$user_id)
		->where('part_event_id',$event_id)
		->get('tbl_participants');
		$records=$query->result();
		return $records;
	}
	public function getCategoryWithLocationPageTable($id,$latitude,$longitude){
		if(!empty($id)){
			$this->db->select('*,(3959 * acos( cos( radians("'.$latitude.'") ) * cos( radians( prod_list_loc_lat ) ) * cos( radians( prod_list_loc_lon ) - radians("'.$longitude.'") ) + sin( radians("'.$latitude.'") ) * sin( radians( prod_list_loc_lat ) ) ) ) AS distance');
			$this->db->from('product_list');
			$this->db->join('product_sub_category','product_sub_category.pro_sub_cat_id = product_list.pro_sub_cat_id');
			$this->db->join('productlist_list_location','productlist_list_location.prod_list_fk = product_list.pro_list_id ');
			$this->db->where('pro_cat_id_fk',$id);
			$this->db->order_by("distance", "ASC");
			$query=$this->db->get();
			$result=$query->result();
			return $result;
		}
		else{
			return false;
		}
	}
	// public function insertNewEventParticipant($user_id, $event_id, $user_email, $user_mobile){
	// 	$insert_array=(
	// 		'part_user_id_fk'=>$user_id,
	// 		'part_event_fk'=>$event_id,
	// 		'part_email'=>$user_email,
	// 		'part_mobile'=>$user_mobile,
	// 		'created_at'=>Date('Y-m-d H:i:s'),
	// 	);
	// 	$query=$this->db->insert('tbl_participants',$insert_array);
	// 	return ($query==true) ? true : false;
	// }

}
