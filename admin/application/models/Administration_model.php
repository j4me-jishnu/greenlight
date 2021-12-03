<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Administration_model extends CI_Model
{
	public function getCategoryTable($param)
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('category_status',1);
		$this->db->where('category_parent_id',0);
		$query = $this->db->get();

		$last_query=$this->db->last_query();
		$data['data'] = $query->result();
		$data['recordsTotal'] = $this->getCount($last_query);
		$data['recordsFiltered'] = $this->getCount($last_query);
		return $data;
	}
	public function getCount($last_query)
	{
		return $this->db->query($last_query)->num_rows();
	}
	public function getsubCategoryTable($param)
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('category_status',1);
		$this->db->where('category_parent_id !=',0);
		$query = $this->db->get();

		$last_query=$this->db->last_query();
		$data['data'] = $query->result();
		$data['recordsTotal'] = $this->getCount($last_query);
		$data['recordsFiltered'] = $this->getCount($last_query);
		return $data;
	}

	public function getDesignationTable($param)
	{
		$this->db->select('*');
		$this->db->from('emp_designation');
		$query = $this->db->get();

		$last_query=$this->db->last_query();
		$data['data'] = $query->result();
		$data['recordsTotal'] = $this->getCount($last_query);
		$data['recordsFiltered'] = $this->getCount($last_query);
		return $data;
	}

	public function getEmployeeTable($param)
	{
		$this->db->select('*');
		$this->db->from('employees');
		$query = $this->db->get();

		$last_query=$this->db->last_query();
		$data['data'] = $query->result();
		$data['recordsTotal'] = $this->getCount($last_query);
		$data['recordsFiltered'] = $this->getCount($last_query);
		return $data;
	}

	public function getEmployeeDesc($param){

		$this->db->select('employees.emp_id, employees.name, employees.phone, employees.address, employees.designation, emp_designation.id, emp_designation.designation, employees.status')
		->from('employees')
		->join('emp_designation', 'employees.designation = emp_designation.id');
		$query = $this->db->get();

		$last_query=$this->db->last_query();
		$data['data'] = $query->result();
		$data['recordsTotal'] = $this->getCount($last_query);
		$data['recordsFiltered'] = $this->getCount($last_query);
		return $data;
	}

	public function getEventDetails(){
		$query=$this->db->select('*')->order_by('created_at', 'ASC')->get('tbl_events');
		$records['data']=$query->result();
		return $records;
	}

	public function getOffersTable($param){
		$this->db->select('*');
		$this->db->from('offers');
		$query = $this->db->get();

		$last_query=$this->db->last_query();
		$data['data'] = $query->result();
		$data['recordsTotal'] = $this->getCount($last_query);
		$data['recordsFiltered'] = $this->getCount($last_query);
		return $data;
	}

	public function getReviewsTable($param){
		$this->db->select('tbl_review.*, users.first_name, tbl_seller.sell_name');
		$this->db->from('tbl_review');
		$this->db->join('users', 'users.id=tbl_review.review_user_id', 'left');
		$this->db->join('tbl_seller', 'tbl_seller.sell_id=tbl_review.review_seller_id', 'left');
		$query = $this->db->get();
		$data['data']=$query->result();
		return $data;
	}



	public function getLocationsTable($param)
	{
		$this->db->select('*');
		$this->db->from('locations');
		$query = $this->db->get();

		$last_query=$this->db->last_query();
		$data['data'] = $query->result();
		$data['recordsTotal'] = $this->getCount($last_query);
		$data['recordsFiltered'] = $this->getCount($last_query);
		return $data;
	}

	public function getSellersTable($param)
	{
		$this->db->select('*');
		$this->db->from('tbl_seller');
		$query = $this->db->get();

		$last_query=$this->db->last_query();
		$data['data'] = $query->result();
		$data['recordsTotal'] = $this->getCount($last_query);
		$data['recordsFiltered'] = $this->getCount($last_query);
		return $data;
	}

	public function getBuyersTable($param)
	{
		$this->db->select('*');
		$this->db->from('tbl_buyer');
		$query = $this->db->get();

		$last_query=$this->db->last_query();
		$data['data'] = $query->result();
		$data['recordsTotal'] = $this->getCount($last_query);
		$data['recordsFiltered'] = $this->getCount($last_query);
		return $data;
	}

	public function getProductCatTable($param)
	{
		$this->db->select('*');
		$this->db->from('product_category');
		$query = $this->db->get();

		$last_query=$this->db->last_query();
		$data['data'] = $query->result();
		$data['recordsTotal'] = $this->getCount($last_query);
		$data['recordsFiltered'] = $this->getCount($last_query);
		return $data;
	}

	public function getProductSubCatTable($param)
	{
		$this->db->select('product_sub_category.pro_sub_cat_id, product_sub_category.pro_sub_cat_name, product_sub_category.pro_sub_cat_img, product_sub_category.pro_sub_cat_status, product_category.prod_cat_name')
		->from('product_sub_category')
		->join('product_category', 'product_category.pro_cat_id = product_sub_category.pro_cat_id_fk');
		$query = $this->db->get();

		$last_query=$this->db->last_query();
		$data['data'] = $query->result();
		$data['recordsTotal'] = $this->getCount($last_query);
		$data['recordsFiltered'] = $this->getCount($last_query);
		return $data;
	}


	public function getProductListCatTable($param)
	{
		$this->db->select('product_list.pro_list_id, product_list.pro_list_name, product_list.pro_list_details, product_list.prod_list_price_original, product_list.pro_list_dicount_price, product_list.pro_list_stock, product_list.pro_list_status, product_list.pro_list_enter_date, product_list.pro_list_img , product_sub_category.pro_sub_cat_name, users.first_name')
		->from('product_list')
		->join('product_sub_category', 'product_sub_category.pro_sub_cat_id = product_list.pro_sub_cat_id')
		->join('users', 'users.id = product_list.user_id');
		$query = $this->db->get();

		$last_query=$this->db->last_query();
		$data['data'] = $query->result();
		$data['recordsTotal'] = $this->getCount($last_query);
		$data['recordsFiltered'] = $this->getCount($last_query);
		return $data;
	}


	public function getSubscriptionChargesTable($param)
	{
		$this->db->select('*');
		$this->db->from('subscription');
		$query = $this->db->get();

		$last_query=$this->db->last_query();
		$data['data'] = $query->result();
		$data['recordsTotal'] = $this->getCount($last_query);
		$data['recordsFiltered'] = $this->getCount($last_query);
		return $data;
	}

	public function approve_review_status($review_id){
		$data = array(
			'review_status' => 1,
			'updated_at' => date("Y-m-d H:i:s"),
		);
		$result=$this->db->where('review_id', $review_id)->update('tbl_review', $data);
		if($result){
			return true;
		}
		else{
			return false;
		}
	}

	public function reject_review_status($review_id){
		$data = array(
			'review_status' => 2,
			'updated_at' => date("Y-m-d H:i:s"),
		);
		$result=$this->db->where('review_id', $review_id)->update('tbl_review', $data);
		if($result){
			return true;
		}
		else{
			return false;
		}
	}

	public function get_all_subscribers(){
		$query=$this->db->select('*')->get('tbl_payment');
		$records=$query->result();
		if($records){ return $records; } else { false; }
	}

	public function get_all_event_participants($params){
		$this->db->select('*');
		$this->db->from('tbl_participants'); // this is first table name
		$this->db->join('tbl_events', 'tbl_events.event_id = tbl_participants.part_event_id'); // this is second table name with both table ids
		$query = $this->db->get();
		// return $query->result();
		$last_query=$this->db->last_query();
		$data['data'] = $query->result();
		// $data['recordsTotal'] = $this->getCount($last_query);
		// $data['recordsFiltered'] = $this->getCount($last_query);
		// echo "hi";
		return $data;
	}

}
