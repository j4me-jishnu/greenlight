<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller
{
  function __construct() {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('Home_model');
    $this->load->model('General_model');
    $this->load->model('Settings_model');
  }
/*To get the details of user to change password*/
  public function changePassword(){
    // print_r($this->input->post()); die;
    if(isset($_SESSION['user_id'])){
      $user_id=$_SESSION['user_id'];
      $user_firstname=$_SESSION['name'];
      $user_email=$this->input->post('user_email');
      $confirm_password=$this->input->post('confirm_password');
      $new_password=$this->input->post('new_password');
      $current_password=$this->input->post('current_password');
      $records=$this->Settings_model->fetchUserData($user_id,$user_firstname);
      if($new_password!=$confirm_password){
        $result=false;
        $response_text="New password not matching with confirmed password";
        echo "<script>alert('.$response_text.')</script>";
      }
      elseif($current_password!=$records->password || $user_email!=$records->email){
        $result=false;
        $response_text="Password or email not matching";
        echo "<script>alert('.$response_text.')</script>";
      }
      else{
        $update_array=["password"=>$new_password];
        if($this->General_model->update('users',$update_array,'id',$user_id)){
          $result=true;
          $response_text="Password changed successfully";
          echo "<script>alert('.$response_text.')</script>";
        }
      }


      if($result){
				$this->session->set_flashdata('response', "{&quot;text&quot;:&quot;$response_text&quot;,&quot;layout&quot;:&quot;topRight&quot;,&quot;type&quot;:&quot;success&quot;}");
			}
			else{
				$this->session->set_flashdata('response', '{&quot;text&quot;:&quot;Something went wrong,please try again later&quot;,&quot;layout&quot;:&quot;bottomRight&quot;,&quot;type&quot;:&quot;error&quot;}');
			}
			redirect('/Settings/settingsView', 'refresh');
    }
    else{
      echo "<script>
      alert('Kindly login to view personal settings');
      window.location.href='http://localhost:8080/greenlight/Home';
      </script>";
    }
  }

  public function settingsView() {
    // echo "hi"; die;
		@$user_id = $this->session->userdata('user_id');
		$data['user_image_header'] = $this->Home_model->getUserImage($user_id);
		$data['user_name'] = $this->Home_model->getUsername($user_id);
		$data['menu_cate'] = $this->Home_model->getMenuCategory();
		$data['menu'] = $this->Home_model->getMenuHome();
		$data['submenu'] = $this->Home_model->getSubMenuHome();
		// $data['location'] = $this->Home_model->getLocationDetails();
		$data['menu_cat'] = $this->Home_model->getMenuCatTable();
		// $data['subcategory_id']=$subcategory_id;
		// $data['category_page'] = $this->Category_model->getCategoryPageTable($id);
		$data['footer_details'] = $this->Home_model->getFooterDetail();
		$data['logo'] =$this->Home_model->getLogo();
		$data['menu_cat'] = $this->Home_model->getMenuCatTable();
		// $data['event_details'] = $this->Category_model->fetch_all_events();
		// $data['event_details']=$this->
      // $this->load->view('Events', $subcategory_id);

    $data['chat'] =$this->Home_model->getChat($user_id);
        $data['chat1'] =$this->Home_model->getChatbox($user_id);  
			$this->load->view('Headers/header_home',$data);
			$this->load->view('Settings', $data);
			$this->load->view('Footers/footer_home',$data);
   }

}
