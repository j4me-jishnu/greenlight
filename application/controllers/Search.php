<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller
{
	function __construct() {
		parent::__construct();
		// $this->load->model('Loginmodel');
		$this->load->helper('url');
		$this->load->library('pagination');
		$this->load->model('Home_model');
		$this->load->model('Search_model');
		$this->load->library('session');

	}
	public function index()
	{
		if($this->input->get('search') != NULL){
			$newdata = array(
				'search'  => $this->input->get('search'),
			);
			$this->session->set_userdata($newdata);
		}
		$search_result = $this->session->userdata('search');
		// $search_result = 'plants';
		@$user_id = $this->session->userdata('user_id');
		$data['user_image_header'] = $this->Home_model->getUserImage($user_id);
		$data['user_name'] = $this->Home_model->getUsername($user_id);
		$data['super_deals'] = $this->Home_model->getSuperDealsHome();
		$data['menu_cate'] = $this->Home_model->getMenuCategory();
		$data['menu'] = $this->Home_model->getMenuHome();
		$data['submenu'] = $this->Home_model->getSubMenuHome();
		$data['location'] = $this->Home_model->getLocationDetails();
		// $data['search'] = $this->Search_model->searchResults($search_result,10,0,'',$this->uri->segment(3));
		$data['categories'] = $this->Search_model->getCategoryCount();
		$data['menu_cat'] =$this->Home_model->getMenuCatTable();
		$data['footer_details'] = $this->Home_model->getFooterDetail();
		$data['logo'] =$this->Home_model->getLogo();
		$data['chat'] =$this->Home_model->getChat($user_id);
		$data['chat1'] =$this->Home_model->getChatbox($user_id);
		$data['search'] =$this->input->get('search');
		// var_dump($data['search']); die();

		// var_dump($data['search']);die;
		$this->load->view('Headers/header_home',$data);
		$this->load->view('Search',$data);
		$this->load->view('Footers/footer_home',$data);
	}

	public function SearchFilter()
	{
		// @$search = $this->session->userdata('search');
		@$price_val = $this->input->post('price_val');
		@$category = $this->input->post('cats');
		$search = $this->input->post('search');
		$config = array();
		$config['total_rows'] = $this->Search_model->numRows($search);
		$config["per_page"] = 8;
		$config["uri_segment"] = 3;
		$config["use_page_numbers"] = TRUE;
		$config["full_tag_open"] = '<ul class="pagination">';
		$config["full_tag_close"] = '</ul>';
		$config["first_tag_open"] = '<li>';
		$config["first_tag_close"] = '</li>';
		$config["last_tag_open"] = '<li>';
		$config["last_tag_close"] = '</li>';
		$config['next_link'] = '&gt;';
		$config["next_tag_open"] = '<li>';
		$config["next_tag_close"] = '</li>';
		$config["prev_link"] = "&lt;";
		$config["prev_tag_open"] = "<li>";
		$config["prev_tag_close"] = "</li>";
		$config["cur_tag_open"] = "<li class='active'><a href='#'>";
		$config["cur_tag_close"] = "</a></li>";
		$config["num_tag_open"] = "<li>";
		$config["num_tag_close"] = "</li>";
		$config["num_links"] = 3;
		$this->pagination->initialize($config);
		@$page = $this->uri->segment('3');
		$start = ($page - 1) * $config["per_page"];


		$output = array(
			'pagination_link'		=>	$this->pagination->create_links(),
			'product_list'			=>	$this->Search_model->searchResults($search,$config["per_page"], $start, $price_val, $category)
		);
		echo json_encode($output);
	}
}
