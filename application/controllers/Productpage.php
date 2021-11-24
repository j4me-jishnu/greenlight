<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');



class Productpage extends CI_Controller

{

	function __construct() {

		parent::__construct();

		$this->load->helper('url');
		$this->load->helper(array('form', 'url'));
		$this->load->model('Home_model');
		$this->load->model('General_model');
		$this->load->model('SingleProduct_model');
		$this->load->model('Comment_Model');

	}

	public function singleProduct($pro_list_id){

		//getting User Id from session data

		@$user_id = $this->session->userdata('user_id');

		$data['menu_cate'] = $this->Home_model->getMenuCategory();

		$data['menu'] = $this->Home_model->getMenuHome();

		$data['submenu'] = $this->Home_model->getSubMenuHome();

		$data['location'] = $this->Home_model->getLocationDetails();

		$data['users'] = $this->SingleProduct_model->getUsersList();
		// .....................
		$data['product_page'] = $this->SingleProduct_model->getProductPageList($pro_list_id);

		$data['pro_cat'] = $this->SingleProduct_model->getProductCategory();

		$data['pro_subcat'] = $this->SingleProduct_model->getProSubCategory();

		$data['review'] = $this->SingleProduct_model->getReview();

		$data['reply'] = $this->SingleProduct_model->getReply();

		$data['mult_img'] = $this->SingleProduct_model->getMultImage();

		$data['related_pro'] = $this->SingleProduct_model->getRelatedProducts();

		$data['star'] = $this->SingleProduct_model->getStarRating($pro_list_id);

		$data['menu_cat'] =$this->Home_model->getMenuCatTable();

		$data['user_image_header'] = $this->Home_model->getUserImage($user_id);

		$data['user_name'] = $this->Home_model->getUsername($user_id);

		$data['footer_details'] = $this->Home_model->getFooterDetail();

		$data['logo'] =$this->Home_model->getLogo();

		$data['current_url'] = current_url();

		/**/

		$data['product_details']=$this->SingleProduct_model->getProductDetails($pro_list_id);

		$data['pro_list_id']=$pro_list_id;

		$data['single_item_comments']=$this->Comment_Model->getSingleItemComments($pro_list_id);

		// print_r($data['product_details']); die();

		// $data['selected_image'] =$this->SingleProduct_model->get_selected_image($pro_list_id);



		$data['chat'] =$this->Home_model->getChat($user_id);

		$data['chat1'] =$this->Home_model->getChatbox($user_id);



		$this->load->view('Headers/header_home',$data);

		$this->load->view('Productpage',$data);

		$this->load->view('Footers/footer_home',$data);

	}



	public function insertStarData(){

		$rating = $this->input->post('rating');

		$user_id = $this->input->post('sess_u_id');

		$prod_id = $this->input->post('pro_id');

		$validate = $this->SingleProduct_model->getValidRating($user_id,$prod_id);



		$data=array(

			'prod_list_fk' => $prod_id,

			'user_fk' => $user_id,

			'prod_list_star_rating' =>$rating,

			'prod_list_star_enter_date' =>date("Y-m-d"));



			if($validate != 0){

				$result = $this->General_model->updat('pro_list_star_rating',$data,'user_fk',$user_id,'prod_list_fk',$prod_id);

				$response_text = 'Star Ratings updated';

			}

			else{



				$result = $this->General_model->add_returnID('pro_list_star_rating',$data);

				$response_text = 'Star Ratings Added';

			}

		}





		public function chat_insert()

		{

			$product_id = $this->input->post('product_id');

			$from_id = $this->input->post('from_id');

			$to_id = $this->input->post('to_id');

			//  $to_msg = $this->input->post('to_msg');

			$msg = $this->input->post('message');

			//  $validate = $this->SingleProduct_model->getValidRating($user_id,$prod_id);



			$data  = array(

				'chat_from_msg' => $msg,

				'chat_from' => $from_id,

				'chat_to' =>$to_id,

				// 'chat_to_msg' =>$to_msg,

				'chat_product_id' =>$product_id,

				'chat_date' =>date("Y-m-d"));

				$data1  = array(



					'enq_user_id_fk' => $from_id,

					'enq_seller_id_fk' =>$to_id,

					// 'chat_to_msg' =>$to_msg,

					'enq_product_id_fk' =>$product_id,

					'enq_status' =>1,

					'enq_created_at' =>date("Y-m-d"));





					$result = $this->General_model->add_returnID('tbl_chat_box',$data);

					$result = $this->General_model->add_returnID('tbl_enquiry',$data1);

					$response_text = 'Message Sent';

					if($result)

					{

						// $this->session->set_flashdata('response', "{&quot;text&quot;:&quot;$response_text&quot;,&quot;layout&quot;:&quot;topRight&quot;,&quot;type&quot;:&quot;success&quot;}");?>

						<script type="text/javascript">

						alert('Success:Message Sent');

						</script> <?php

						redirect('/Home', 'refresh');

					}



					else

					{

						?> <script type="text/javascript">

						alert('Something went wrong,please try again');

						</script> <?php

						redirect('/singleProduct/'.$product_id, 'refresh');

					}

				}



				public function chatmsg($chat_id,$chat_product_id)

				{

					//

					$data=array('chat_status'=>1);

					$result=$this->General_model->update('tbl_chat_box',$data,'chat_id',$chat_id);

					//$result=$this->Home_model->update($data,$user_id,$pro_list_id);



					//echo $chat_product_id;exit;

					@$user_id = $this->session->userdata('user_id');

					$data['user_image_header'] = $this->Home_model->getUserImage($user_id);

					$data['user_name'] = $this->Home_model->getUsername($user_id);

					$data['menu_cate'] = $this->Home_model->getMenuCategory();

					$data['menu'] = $this->Home_model->getMenuHome();

					$data['submenu'] = $this->Home_model->getSubMenuHome();

					$data['location'] = $this->Home_model->getLocationDetails();

					$data['menu_cat'] =$this->Home_model->getMenuCatTable();

					$data['footer_details'] = $this->Home_model->getFooterDetail();

					$data['logo'] =$this->Home_model->getLogo();

					$data['chat'] =$this->Home_model->getChat($user_id);

					$data['chat1'] =$this->Home_model->getChatbox($user_id);

					$data['chat_msg'] =$this->Home_model->getChatbox1($user_id,$chat_product_id);

					$data['chat_msgs'] =$this->Home_model->getChatboxs($user_id,$chat_product_id);

					// $data['chats'] =$this->Home_model->chats($user_id,$pro_list_id);

					$data['chat2'] =$this->Home_model->getChatbox2($user_id,$chat_product_id);

					$data['chat3'] =$this->Home_model->getChatbox3($user_id,$chat_product_id);



					$this->load->view('Headers/header_home',$data);

					$this->load->view('Chat',$data);

					$this->load->view('Footers/footer_home',$data);



				}



				public function mychat()

				{

					@$user_id = $this->session->userdata('user_id');

					$data['user_image_header'] = $this->Home_model->getUserImage($user_id);

					$data['user_name'] = $this->Home_model->getUsername($user_id);

					$data['menu_cate'] = $this->Home_model->getMenuCategory();

					$data['menu'] = $this->Home_model->getMenuHome();

					$data['submenu'] = $this->Home_model->getSubMenuHome();

					$data['location'] = $this->Home_model->getLocationDetails();

					$data['menu_cat'] = $this->Home_model->getMenuCatTable();

					$data['footer_details'] = $this->Home_model->getFooterDetail();

					$data['logo'] =$this->Home_model->getLogo();

					$data['chat'] =$this->Home_model->getChat($user_id);

					$data['chat1'] =$this->Home_model->getChatbox($user_id);



					$data['mychat'] =$this->Home_model->getMychat($user_id);





					$this->load->view('Headers/header_home',$data);

					$this->load->view('Mychat',$data);

					$this->load->view('Footers/footer_home',$data);

				}





				public function viewchat($chat_id,$chat_product_id)

				{



					@$user_id = $this->session->userdata('user_id');

					$data['user_image_header'] = $this->Home_model->getUserImage($user_id);

					$data['user_name'] = $this->Home_model->getUsername($user_id);

					$data['menu_cate'] = $this->Home_model->getMenuCategory();

					$data['menu'] = $this->Home_model->getMenuHome();

					$data['submenu'] = $this->Home_model->getSubMenuHome();

					$data['location'] = $this->Home_model->getLocationDetails();

					$data['menu_cat'] =$this->Home_model->getMenuCatTable();

					$data['footer_details'] = $this->Home_model->getFooterDetail();

					$data['logo'] =$this->Home_model->getLogo();

					$data['chat'] =$this->Home_model->getChat($user_id);

					$data['chat1'] =$this->Home_model->getChatbox($user_id);

					$data['chat_msg'] =$this->Home_model->getChatbox1($user_id,$chat_product_id);

					$data['chat_msgs'] =$this->Home_model->getChatboxs($user_id,$chat_product_id);

					// $data['chats'] =$this->Home_model->chats($user_id,$pro_list_id);

					$data['chat2'] =$this->Home_model->getChatbox2($user_id,$chat_product_id);

					$data['chat3'] =$this->Home_model->getChatbox3($user_id,$chat_product_id);



					$this->load->view('Headers/header_home',$data);

					$this->load->view('Viewchat',$data);

					$this->load->view('Footers/footer_home',$data);



				}

				public function getAllPostsOfSeller($seller_id){
					if(empty($this->session->userdata('user_id'))){
						redirect('/Register/Login');
					}
					@$user_id = $this->session->userdata('user_id');
					$data['user_image_header'] = $this->Home_model->getUserImage($user_id);
					$data['user_name'] = $this->Home_model->getUsername($user_id);
					$data['menu_cate'] = $this->Home_model->getMenuCategory();
					$data['menu'] = $this->Home_model->getMenuHome();
					$data['submenu'] = $this->Home_model->getSubMenuHome();
					$data['location'] = $this->Home_model->getLocationDetails();
					$data['menu_cat'] = $this->Home_model->getMenuCatTable();
					$data['all_seller_posts']=$this->Home_model->getSellerPosts($seller_id);
					$data['seller_details']=$this->Home_model->getSellerDetails($seller_id);
					$data['footer_details'] = $this->Home_model->getFooterDetail();
					$data['logo'] =$this->Home_model->getLogo();
					$data['chat'] =$this->Home_model->getChat($user_id);
					$data['chat1'] =$this->Home_model->getChatbox($user_id);

					$this->load->view('Headers/header_home',$data);
					$this->load->view('Sellers_details',$data);
					$this->load->view('Footers/footer_home',$data);

				}

				public function checkFollowerStatus(){
					$user_id=$this->input->post("user_id");
					$seller_id=$this->input->post("seller_id");
					$result=$this->Home_model->check_follower_status($seller_id,$user_id);
					$json_data = json_encode($result);
					echo $json_data;
				}

				public function unfollow(){
					$user_id=$this->input->post("user_id");
					$seller_id=$this->input->post("seller_id");
					$result=$this->Home_model->unfollow_seller($user_id,$seller_id);
					$json_data = json_encode($result);
					echo $json_data;
				}

				public function follow(){
					$user_id=$this->input->post("user_id");
					$seller_id=$this->input->post("seller_id");
					$result=$this->Home_model->follow_seller($user_id,$seller_id);
					$json_data = json_encode($result);
					echo $json_data;
				}

				public function getTotalFollowers(){
					$seller_id=$this->input->post("seller_id");
					$result=$this->Home_model->getTotalFollowerCount($seller_id);
					$json_data = json_encode($result);
					echo $json_data;
				}

				public function getTotalFollowing(){
					$seller_id=$this->input->post("seller_id");
					$result=$this->Home_model->getTotalFollowingCount($seller_id);
					$json_data = json_encode($result);
					echo $json_data;
				}

				public function getStarRating(){
					$product_id=$this->input->post("product_id");
					$result=$this->Home_model->getSingleStarRating($product_id);
					$json_data = json_encode($result);
					echo $json_data;
				}

				public function myqueries(){
					@$user_id = $this->session->userdata('user_id');
					$data['user_image_header'] = $this->Home_model->getUserImage($user_id);
					$data['user_name'] = $this->Home_model->getUsername($user_id);
					$data['menu_cate'] = $this->Home_model->getMenuCategory();
					$data['menu'] = $this->Home_model->getMenuHome();
					$data['submenu'] = $this->Home_model->getSubMenuHome();
					$data['location'] = $this->Home_model->getLocationDetails();
					$data['menu_cat'] = $this->Home_model->getMenuCatTable();
					$data['footer_details'] = $this->Home_model->getFooterDetail();
					$data['logo'] =$this->Home_model->getLogo();
					$data['chat'] =$this->Home_model->getChat($user_id);
					$data['chat1'] =$this->Home_model->getChatbox($user_id);
					$data['mychat'] =$this->Home_model->getMychat($user_id);
					$this->load->view('Headers/header_home',$data);
					$this->load->view('My_enquiries',$data);
					$this->load->view('Footers/footer_home',$data);
				}

				public function addReviewandRatings($pro_list_id){
					$pro_list_id=$pro_list_id;
					@$user_id = $this->session->userdata('user_id');

					$data['chat_data']=$this->Home_model->getChatData($user_id,$pro_list_id);
					$data['user_image_header'] = $this->Home_model->getUserImage($user_id);
					$data['user_name'] = $this->Home_model->getUsername($user_id);
					$data['menu_cate'] = $this->Home_model->getMenuCategory();
					$data['menu'] = $this->Home_model->getMenuHome();
					$data['submenu'] = $this->Home_model->getSubMenuHome();
					$data['location'] = $this->Home_model->getLocationDetails();
					$data['menu_cat'] = $this->Home_model->getMenuCatTable();
					$data['footer_details'] = $this->Home_model->getFooterDetail();
					$data['logo'] =$this->Home_model->getLogo();
					$data['chat'] =$this->Home_model->getChat($user_id);
					$data['chat1'] =$this->Home_model->getChatbox($user_id);
					$data['mychat'] =$this->Home_model->getMychat($user_id);

					$this->load->view('Headers/header_home',$data);
					$this->load->view('Add_review',$data);
					$this->load->view('Footers/footer_home',$data);

				}

				public function addRatingandReview(){
					$config['upload_path']='./admin/assets/uploads/review_images/';
					$config['allowed_types']='gif|jpg|png|jpeg|JPG|JPEG';
					$config['file_name']=str_replace('_', '', str_replace(' ','',strtolower($_FILES['upload_image']['name'])));
					$file_name=$config['file_name'];
					if($this->load->library('upload', $config)){
						if($this->upload->do_upload('upload_image')){
							$data = array(
								'review_product_id' => $_POST['product_id'],
								'review_seller_id' => $_POST['seller_id'],
								'review_user_id' => $_POST['user_id'],
								'review_rating' => $_POST['rating_count'],
								'review_comments' => $_POST['review_comments'],
								'review_image' => $file_name,
								'review_status' => 0,
								'created_at' => Date('Y-m-d H:i:s')
							);

							$result=$this->Home_model->Add_review($data);
							if($result['status']){

								$response_text = $result['message'];
								$this->session->set_flashdata('response', '<div class="alert alert-success" role="alert">'.$response_text.'</div>');
								redirect('/Productpage/myqueries/', 'refresh');
							}
							else{
								$this->session->set_flashdata('response', '<div class="alert alert-danger" role="alert">'.$response_text.'</div>');
								redirect('/Productpage/myqueries/', 'refresh');
							}
						}
						else{
							$result['status']=false;
							$result['message']=$this->upload->display_errors();
						}
					}
					else{
						$result['status']=false;
						$result['message']=$this->upload->display_errors();
					}
					// var_dump($_POST); die;
				}


}
