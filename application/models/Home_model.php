<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_Model extends CI_Model

{



	public function getBannerImage()

	{



		$this->db->select('*');

		$this->db->from('frnt_banner');

		$this->db->order_by('ban_seq','asc');

		$query = $this->db->get();

		return $query->result();

	}



	public function getProscroImage()

	{



		$this->db->select('*');

		$this->db->from('frnt_product_scroll');

		$this->db->join('product_sub_category','product_sub_category.pro_sub_cat_id = frnt_product_scroll.prosco_link_psc_fk');

		$this->db->order_by('proscro_display_ord','asc');

		$query = $this->db->get();

		return $query->result();

	}



	public function getLocationDetails()

	{



		$this->db->select('*');

		$this->db->from('locations');

		$this->db->order_by('loc_city_name','asc');

		$query = $this->db->get();

		return $query->result();

	}



	public function getMenuCategory()

	{



		$this->db->select('*');

		$this->db->from('frnt_menu_cat');

		$this->db->order_by('menu_cat_order','asc');

		$query = $this->db->get();

		return $query->result();

	}



	public function getMenuHome()

	{



		$this->db->select('*');

		$this->db->from('frnt_menu');

		$this->db->order_by('menu_display_order','asc');

		$query = $this->db->get();

		return $query->result();

	}



	public function getSubMenuHome()

	{



		$this->db->select('*');

		$this->db->from('frnt_sub_menu');

		// $this->db->order_by('menu_display_order','asc');

		$query = $this->db->get();

		return $query->result();

	}





	public function getHotDealsHome()

	{



		$this->db->select('*');

		$this->db->from('frnt_hot_deals');

		$this->db->join('product_sub_category','product_sub_category.pro_sub_cat_id = frnt_hot_deals.deal_psc_fk');

		$this->db->order_by('deal_disp_order','asc');

		$query = $this->db->get();

		return $query->result();

	}





	public function getSuperDealsHome()

	{



		$this->db->select('*');

		$this->db->from('frnt_super_deals');

		$query = $this->db->get();

		return $query->result();

	}





	public function getSpecialOffersHome()

	{



		$this->db->select('*');

		$this->db->from('frnt_special_offer');

		$this->db->join('product_sub_category','product_sub_category.pro_sub_cat_id = frnt_special_offer.spoff_psc_fk');

		$query = $this->db->get();

		return $query->result();

	}



	public function getDODHome()

	{



		$this->db->select('*');

		$this->db->from('frnt_deal_of_day');

		$this->db->limit(12);

		$query = $this->db->get();

		return $query->result();

	}



	public function getProductList()

	{



		$this->db->select('product_list.pro_list_id, product_list.pro_sub_cat_id, product_list.pro_list_name, product_list.pro_list_details, product_list.prod_list_price_original, product_list.pro_list_dicount_price, product_list.pro_list_stock, product_list.pro_list_status, product_list.pro_list_enter_date, product_list.pro_list_img, product_sub_category.pro_sub_cat_name');

		$this->db->from('product_list');

		$this->db->join('product_sub_category','product_sub_category.pro_sub_cat_id = product_list.pro_sub_cat_id');

		$query = $this->db->get();

		return $query->result();

	}



	public function getProductListFooter()

	{



		$this->db->select('product_list.pro_list_id, product_list.pro_sub_cat_id, product_list.pro_list_name, product_list.pro_list_details, product_list.prod_list_price_original, product_list.pro_list_dicount_price, product_list.pro_list_stock, product_list.pro_list_status, product_list.pro_list_enter_date, product_list.pro_list_img, product_sub_category.pro_sub_cat_name, product_category.prod_cat_name');

		$this->db->from('product_list');

		$this->db->join('product_sub_category','product_sub_category.pro_sub_cat_id = product_list.pro_sub_cat_id');

		$this->db->join('product_category','product_category.pro_cat_id = product_sub_category.pro_cat_id_fk');

		$query = $this->db->get();

		return $query->result();

	}



	public function getProductjsonFooter($id)

	{



		$this->db->select('product_list.pro_list_id, product_list.pro_sub_cat_id, product_list.pro_list_name, product_list.pro_list_details, product_list.prod_list_price_original, product_list.pro_list_dicount_price, product_list.pro_list_stock, product_list.pro_list_status, product_list.pro_list_enter_date, product_list.pro_list_img, product_sub_category.pro_sub_cat_name, product_category.prod_cat_name');

		$this->db->from('product_list');

		$this->db->where('pro_list_id ',$id);

		$this->db->join('product_sub_category','product_sub_category.pro_sub_cat_id = product_list.pro_sub_cat_id');

		$this->db->join('product_category','product_category.pro_cat_id = product_sub_category.pro_cat_id_fk');

		$query = $this->db->get();

		return $query->result();

	}





	public function getLatestProduct()

	{



		$this->db->select('product_list.pro_list_id, product_list.pro_sub_cat_id, product_list.pro_list_name, product_list.pro_list_details, product_list.prod_list_price_original, product_list.pro_list_dicount_price, product_list.pro_list_stock, product_list.pro_list_status, product_list.pro_list_enter_date, product_list.pro_list_img, product_sub_category.pro_sub_cat_name');

		$this->db->from('product_list');

		$this->db->join('product_sub_category','product_sub_category.pro_sub_cat_id = product_list.pro_sub_cat_id');

		$query = $this->db->get();

		return $query->result();

	}





	public function getLagestProdHome()

	{



		$this->db->select('*');

		$this->db->from('frnt_latest_product');

		$this->db->limit(8);

		$query = $this->db->get();

		return $query->result();

	}





	public function getVariousProdList(){



		$this->db->select('product_list.pro_list_id, product_list.pro_sub_cat_id, product_list.pro_list_name, product_list.pro_list_details, product_list.prod_list_price_original, product_list.pro_list_dicount_price, product_list.pro_list_stock, product_list.pro_list_status, product_list.pro_list_enter_date, product_list.pro_list_img, product_sub_category.pro_sub_cat_name');

		$this->db->from('product_list');

		$this->db->join('product_sub_category','product_sub_category.pro_sub_cat_id = product_list.pro_sub_cat_id');

		$query = $this->db->get();

		return $query->result();

	}





	public function getVariousProdHome()

	{



		$this->db->select('*');

		$this->db->from('frnt_various_product');

		$this->db->limit(8);

		$query = $this->db->get();

		return $query->result();

	}





	public function getsubmenutable($id)

	{



		$this->db->select('*');

		$this->db->from('frnt_sub_menu');

		$this->db->where('menu_parent_id',$id);

		$query = $this->db->get();

		return $query->result();

	}





	public function locationstable()

	{

		$this->db->select('*');

		$this->db->from('locations');

		$query = $this->db->get();

		return $query->result();

	}





	public function getUserImage($user_id)

	{

		$this->db->select('*');

		$this->db->from('user_profile_img');

		$this->db->where('user_id_fk', $user_id);

		$query = $this->db->get();



		$result=$query->result();

		if(empty($result)){

			$result[0]='admin/assets/uploads/user_profile/account.jpeg';

		}

		return $result;

	}



	public function getMenuCatTable()

	{

		$this->db->select('*');

		$this->db->from('product_category');

		$query = $this->db->get();

		return $query->result();

	}





	public function getFooterDetail()

	{

		$this->db->select('*');

		$this->db->from('frnt_footer_details');

		$this->db->where('footer_detail_status',1);

		$query = $this->db->get();

		return $query->result();

	}



	public function getAds($user_id)

	{

		$this->db->select('*');

		$this->db->from('product_list');

		$this->db->join('product_sub_category','product_sub_category.pro_sub_cat_id = product_list.pro_sub_cat_id');

		$this->db->where('user_id',$user_id);

		$query = $this->db->get();

		return $query->result();

	}



	public function getUserName($user_id)

	{

		$this->db->select('*');

		$this->db->from('users');

		$this->db->where('id',$user_id);

		$query = $this->db->get();

		// return $query->result();

		if($query->num_rows() > 0)

		{

			//return $query->row();
			return $query->result();

		}

		return false;

	}



	public function getLogo()

	{

		$this->db->select('*');

		$this->db->from('logo');

		$query = $this->db->get();

		return $query->result();

	}



	//Chat With seller and buyer



	public function getChat($user_id)

	{

		$this->db->select('*');

		$this->db->from('tbl_chat_box');

		$this->db->where('chat_to',$user_id);

		$this->db->where('chat_status',0);

		//$query = $this->db->get();

		//return $query->result();

		$query= $this->db->count_all_results();

		return $query;

	}



	public function getChatbox($user_id)

	{

		$this->db->select('*');

		$this->db->from('tbl_chat_box');

		$this->db->join('product_list','product_list.pro_list_id = tbl_chat_box.chat_product_id');

		$this->db->join('users','users.id = tbl_chat_box.chat_from');

		$this->db->where('chat_to',$user_id);

		$this->db->where('chat_status',0);

		$this->db->group_by('chat_product_id');

		$query = $this->db->get();

		return $query->result();

	}



	public function getChatboxs($user_id,$chat_product_id)

	{

		$this->db->select('*');

		$this->db->from('tbl_chat_box');

		$this->db->join('product_list','product_list.pro_list_id = tbl_chat_box.chat_product_id');

		$this->db->join('users','users.id = tbl_chat_box.chat_from');

		$this->db->where('chat_to',$user_id);

		$this->db->where('chat_product_id',$chat_product_id);

		$this->db->where('chat_status',1);

		$this->db->group_by('chat_from');

		$query = $this->db->get();

		return $query->result();

	}



	public function getChatbox1($user_id,$chat_product_id)

	{

		$this->db->select('*');

		$this->db->from('tbl_chat_box');

		$this->db->join('product_list','product_list.pro_list_id = tbl_chat_box.chat_product_id');

		$this->db->join('users','users.id = tbl_chat_box.chat_from');

		$this->db->where('chat_to',$user_id);

		$this->db->where('chat_product_id',$chat_product_id);

		$this->db->where('chat_status',1);

		// $this->db->group_by('chat_from');

		$query = $this->db->get();

		return $query->result();

	}



	public function getChatbox2($user_id,$chat_product_id)

	{

		$this->db->select('*');

		$this->db->from('tbl_chat_box');

		// $this->db->join('product_list','product_list.pro_list_id = tbl_chat_box.chat_product_id');

		$this->db->join('users','users.id = tbl_chat_box.chat_from');

		$this->db->where('chat_from',$user_id);

		$this->db->where('chat_product_id',$chat_product_id);

		$this->db->where('chat_status',1);

		// $this->db->group_by('chat_from');

		$query = $this->db->get();

		return $query->result();

	}



	public function getChatbox3($user_id,$chat_product_id)

	{

		$this->db->select('*');

		$this->db->from('tbl_chat_box');

		// $this->db->join('product_list','product_list.pro_list_id = tbl_chat_box.chat_product_id');

		$this->db->join('users','users.id = tbl_chat_box.chat_from');

		$this->db->where('chat_to',$user_id);

		$this->db->where('chat_product_id',$chat_product_id);

		$this->db->where('chat_status',1);

		// $this->db->group_by('chat_from');

		$query = $this->db->get();

		return $query->result();

	}





	public function getMychat($user_id)

	{

		$this->db->select('*');

		$this->db->from('tbl_chat_box');

		$this->db->join('product_list','product_list.pro_list_id = tbl_chat_box.chat_product_id');

		$this->db->join('users','users.id = tbl_chat_box.chat_to');

		$this->db->where('chat_from',$user_id);

		// $this->db->where('chat_status',1);

		// $this->db->group_by('chat_from');
		$this->db->group_by('chat_product_id');

		$query = $this->db->get();

		return $query->result();

	}

	// 8888888888888888888888888888888888

	public function getSellerPosts($id){
		$query=$this->db->select('*')->where('user_id',$id)->get('product_list');
		$result=$query->result();
		return $result;
	}

	public function getSellerDetails($id){
		$query=$this->db->select('*')->where('id',$id)->get('users');
		$result=$query->result();
		return $result[0];
	}


	public function check_follower_status($seller_id,$user_id){
		$query=$this->db->select('*')
		->where('f_seller_id_fk',$seller_id)
		->where('f_user_id_fk',$user_id)
		->get('tbl_followers');
		$result=$query->result();
		if(!empty(count($result))){
			$result['status']=true;  // already user following
			$result['message']='User already a follower of seller';
		}else{
			$result['status']=false;
			$result['message']='User not following seller';
		}
		return $result;
	}

	public function add_follower(){
		$data = array(
			'f_user_id_fk' => $this->input->post('user_id'),
			'f_seller_id_fk' => $this->input->post('seller_id'),
			'created_at'=>Date('Y-m-d H:i:s')
		);
		if($this->db->insert('tbl_followers', $data)){
			return true;
		}
	}
	public function unfollow_seller($user_id,$seller_id){
		$query=$this->db->delete('tbl_followers', array('f_user_id_fk' => $user_id, 'f_seller_id_fk'=>$seller_id));
		$query1=$this->db->select('*')->where('f_seller_id_fk',$seller_id)->get('tbl_followers');
		$count=$query1->num_rows();
		if($query){
			$result['status']=true;
			$result['message']="Unfollowed successfully";
			$result['count']=$count;
		}
		else{
			$result['status']=false;
			$result['message']="Failed to unfollow";
		}
		return $result;
	}

	public function follow_seller($user_id,$seller_id){
		$data = array(
			'f_user_id_fk' => $user_id,
			'f_seller_id_fk' => $seller_id
		);
		$query=$this->db->insert('tbl_followers', $data);
		$query1=$this->db->select('*')->where('f_seller_id_fk',$seller_id)->get('tbl_followers');
		$count=$query1->num_rows();
		if($query){
			$result['status']=true;
			$result['message']="Followed successfully";
			$result['count']=$count;
		}
		else{
			$result['status']=false;
			$result['message']="Failed to follow";
		}
		return $result;
	}

	public function getTotalFollowerCount($seller_id){
		$query=$this->db->select('*')->where('f_seller_id_fk',$seller_id)->get('tbl_followers');
		$records=$query->result();
		if($records){
			$result['status']=true;
			$result['followers_count']=count($records);
		}
		elseif(empty($records)){
			$result['status']=true;
			$result['followers_count']=0;
		}
		else{
			$result['status']=false;
			$result['message']="Failed to fetch followers";
		}
		return $result;
	}
	public function getTotalFollowingCount($seller_id){
		$query=$this->db->select('*')->where('f_user_id_fk',$seller_id)->get('tbl_followers');
		$records=$query->result();
		if($records){
			$result['status']=true;
			$result['following_count']=count($records);
		}
		elseif(empty($records)){
			$result['status']=true;
			$result['following_count']=0;
		}
		else{
			$result['status']=false;
			$result['message']="Failed to fetch Following";
		}
		return $result;
	}

	public function getSingleStarRating($product_id){
		$query=$this->db->select('*')->where('review_product_id',$product_id)->where('review_status',1)->get('tbl_review');
		$records=$query->result();

		if($records){
			$avg_rating_array=array();
			foreach ($records as $record) {
				array_push($avg_rating_array,$record->review_rating);
			}
			$result['status']=true;
			$result['total_rating']=ceil(array_sum($avg_rating_array)/count($records));
		}
		else{
			$result['status']=false;
			$result['message']="Failed to fetch Following";
		}
		return $result;
	}

	public function getChatData($user_id,$item_id){
		$query=$this->db->select('*')->where('chat_from',$user_id)->where('chat_product_id',$item_id)->get('tbl_chat_box');
		$records=$query->result();
		if($records){
			$result['status']=true;
			$result['records']=$records[0];
		}
		else{
			$result['status']=false;
			$result['message']="Failed to fetch data";
		}
		return $result;
	}

	public function Add_review($data){
		// echo"<pre>",print_r($data,1),"</pre>"; die;
		$query=$this->db->insert('tbl_review', $data);

		if($query){
			$result['status']=true;
			$result['message']="Requested added, your request is reviewing";
		}
		else{
			$result['status']=true;
			$result['message']="Failed to add review";
		}
		return $result;
	}

	public function getCategories(){
		$query=$this->db->select('pro_cat_id, prod_cat_name')
		->where_not_in('prod_cat_name',"Events")
		->where_not_in('prod_cat_name',"Plant Subscription")
		->where_not_in('prod_cat_name',"Offers")
		->get('product_category');
		$records=$query->result();
		if($records){
			return $records;
		}
	}

	public function get_sub_categories($cat_id){
		$query=$this->db->select('pro_sub_cat_id,pro_sub_cat_name')
		->where('pro_cat_id_fk',$cat_id)
		->get('product_sub_category');
		$records=$query->result();
		if($records){
			return $records;
		}
	}

	public function add_sellers_post($data){
		if($this->db->insert('product_list', $data)){
			return true;
		}
	}

	public function deduct_remaining_post($user_id){
		$records=$this->db->select('*')->where('pay_user_fk',$user_id)
		->join('subscription', 'subscription.subp_id = tbl_payment.pay_sub_fk')
		->order_by("pay_enter_datetime", "desc")
		->get('tbl_payment');
		$response=$records->result_array();
		$remaining_count = intval($response[0]['pay_remaining_posts']-1);
		$payment_id = intval($response[0]['pay_id']);
		$data = array(
			'pay_remaining_posts' => $remaining_count,
		);
		$this->db->where('pay_user_fk', $user_id);
		$this->db->where('pay_id', $payment_id);
		$this->db->where('pay_enter_datetime', $response[0]['pay_enter_datetime']);
		$query = $this->db->update('tbl_payment', $data);
		if($query){
			return true;
		}
		else{
			return false;
		}
	}

	public function get_latest_offers(){
		$query=$this->db->select('*')->where('is_offer',1)->get('product_list');
		$result=$query->result();
		return $result;
	}

}
