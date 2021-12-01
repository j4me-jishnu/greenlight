<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller
{
	function __construct() {
		parent::__construct();
		$this->load->model('Register_Model');
		$this->load->helper('url');
		$this->load->model('Home_model');
		$this->load->library('facebook');
	}
	public function index(){
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
		$this->load->view('Headers/header_home',$data);
		$this->load->view('Register',$data);
		$this->load->view('Footers/footer_home',$data);
	}
	public function reg(){
		$reference_id=strtoupper(substr($this->input->post('first'), 0, 3)).''.$this->generate_reference_id();
		$data = array(
			'first_name' => $this->input->post('first'),
			'last_name' => $this->input->post('last'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
			'user_type' => 'U',
			'status' => '1',
			'created_date' => date('y-m-d'),
			'user_reference_id'=>$reference_id
		);
		$this->Register_Model->insert_user($data);
		redirect('/Home/', 'refresh');
	}
	public function check_email(){
		$email = $this->input->post('email');
		if($this->Register_Model->check_email($email)==TRUE){
			echo 0;
		}
		else{

			echo 1;
		}
	}
	public function LoginCheck(){
		$data=array();
		$username = $this->input->get_post('email');
		$password=$this->input->get_post('pass');
		$this->load->model('Register_Model');
		$login['log']=$this->Register_Model->CheckUser($username);
		if($login['log'])
		{
			foreach ($login['log']->result() as $key) {
				if($password == $key->password)
				{

					$name=   $key->first_name;
					$user_id=   $key->id;
					$this->session->set_userdata('user_id', $user_id);
					$this->session->set_userdata('name', $name);
					// $this->session->set_userdata('branch', $branch);
					// $this->session->set_userdata('role', $role);
					?>  <?php
					redirect('/Home', 'refresh');
				}
				else
				{
					?> <script type="text/javascript">
					alert('Incorrect Username or Password');
					</script> <?php
					redirect('Register/login', 'refresh');
				}
			}
		}else
		{
			?> <script type="text/javascript">
			alert('Incorrect Username');
			</script> <?php
			$this->index();
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('fbData');

		redirect('Home', 'refresh');

	}
	public function login(){
		@$user_id = $this->session->userdata('user_id');
		$data['user_image_header'] = $this->Home_model->getUserImage($user_id);
		$data['menu_cate'] = $this->Home_model->getMenuCategory();
		$data['menu'] = $this->Home_model->getMenuHome();
		$data['submenu'] = $this->Home_model->getSubMenuHome();
		$data['location'] = $this->Home_model->getLocationDetails();
		$data['menu_cat'] =$this->Home_model->getMenuCatTable();
		$data['footer_details'] = $this->Home_model->getFooterDetail();
		$data['logo'] =$this->Home_model->getLogo();
		$data['chat'] =$this->Home_model->getChat($user_id);
		$data['chat1'] =$this->Home_model->getChatbox($user_id);
		$addData = array();
		if($this->facebook->is_authenticated()){
			$fbUserData = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,link,gender,picture');
			$addData['oauth_provider'] = 'facebook';
			$addData['oauth_uid']    = !empty($fbUserData['id'])?$fbUserData['id']:'';;
			$addData['first_name']    = !empty($fbUserData['first_name'])?$fbUserData['first_name']:'';
			$addData['last_name']    = !empty($fbUserData['last_name'])?$fbUserData['last_name']:'';
			$addData['email']        = !empty($fbUserData['email'])?$fbUserData['email']:'';
			$addData['gender']        = !empty($fbUserData['gender'])?$fbUserData['gender']:'';
			$addData['picture_url']    = !empty($fbUserData['picture']['data']['url'])?$fbUserData['picture']['data']['url']:'';
			$addData['link_url']        = !empty($fbUserData['link'])?$fbUserData['link']:'https://www.facebook.com/';
			$userID = $this->facebook_model->checkUser1($addData);
			if(!empty($userID)){
				$data['fbData'] = $addData;
				$this->session->set_userdata('fbData', $addData);
			}else{
				$data['fbData'] = array();
			}
			$data['logoutURL'] = $this->facebook->logout_url();
		}else{
			$data['authURL'] =  $this->facebook->login_url();
		}

		$this->load->view('Headers/header_home',$data);
		$this->load->view('login',$data);
		$this->load->view('Footers/footer_home',$data);
	}
	public function reset_pass()
	{
		@$user_id = $this->session->userdata('user_id');
		$data['user_image_header'] = $this->Home_model->getUserImage($user_id);
		$data['menu_cate'] = $this->Home_model->getMenuCategory();
		$data['menu'] = $this->Home_model->getMenuHome();
		$data['submenu'] = $this->Home_model->getSubMenuHome();
		$data['location'] = $this->Home_model->getLocationDetails();
		$data['menu_cat'] =$this->Home_model->getMenuCatTable();
		$data['footer_details'] = $this->Home_model->getFooterDetail();
		$data['logo'] =$this->Home_model->getLogo();
		$data['chat'] =$this->Home_model->getChat($user_id);
		$data['chat1'] =$this->Home_model->getChatbox($user_id);

		$this->load->view('Headers/header_home',$data);
		$this->load->view('reset_pass',$data);
		$this->load->view('Footers/footer_home',$data);
	}
	public function forgot_pass(){
		$email = $this->input->post('email');
		$d = $this->Register_Model->get_forgot($email);
		if(!$d==NULL){
			$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
			$pass = array();
			$alphaLength = strlen($alphabet) - 1;
			for ($i = 0; $i < 8; $i++) {
				$n = rand(0, $alphaLength);
				$pass[] = $alphabet[$n];
			}
			$re_pass = implode($pass);
			$id = $d[0]->id;
			$data = array(
				"password" =>$re_pass
			);
			echo "Check Your Email For Password ";
			echo $re_pass;
			$this->Register_Model->update_user_pass($data,$id);
			redirect('Register/login', 'refresh');
		}else{
			?> <script type="text/javascript">
			alert('Incorrect Email Id');
			</script> <?php
			redirect('Register/login', 'refresh');
		}
	}

	public function generate_reference_id(){
		$length=5;
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}














}
