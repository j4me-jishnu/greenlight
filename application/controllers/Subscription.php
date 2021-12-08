<?php
ob_start();
defined('BASEPATH') or exit('No direct script access allowed');

class Subscription extends CI_Controller
{
  public function __Construct(){
    parent::__Construct();
    $this->load->helper('url');
    $this->load->model('Home_model');
    $this->load->model('Subscription_model');
  }

  public function getSubscription(){
    $data['banner'] = $this->Home_model->getBannerImage();
    $data['menu_cate'] = $this->Home_model->getMenuCategory();
    $data['menu'] = $this->Home_model->getMenuHome();
    $data['submenu'] = $this->Home_model->getSubMenuHome();
    $data['location'] = $this->Home_model->getLocationDetails();
    $data['menu_cat'] =$this->Home_model->getMenuCatTable();
    @$user_id = $this->session->userdata('user_id');
    $data['user_image_header'] = $this->Home_model->getUserImage($user_id);
    $data['user_name'] = $this->Home_model->getUsername($user_id);
    $data['footer_details'] = $this->Home_model->getFooterDetail();
    $data['subscription'] = $this->Subscription_model->getSubscriptionDetailTable();
    $data['logo'] =$this->Home_model->getLogo();
    $data['chat'] =$this->Home_model->getChat($user_id);
    $data['chat1'] =$this->Home_model->getChatbox($user_id);
    // var_dump($data['subscription']);
    $this->load->view('Headers/header_home',$data);
    $this->load->view('Subscription',$data);
    $this->load->view('Footers/footer_home',$data);
  }

  public function getUserSubscribedPlans(){
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
    $data['subscribed_plans']=$this->Subscription_model->getSubscribedPlans($user_id);
    $data['chat'] =$this->Home_model->getChat($user_id);
    $data['chat1'] =$this->Home_model->getChatbox($user_id);

    $this->load->view('Headers/header_home',$data);
    $this->load->view('Subscribed_plans',$data);
    $this->load->view('Footers/footer_home',$data);
  }

}
?>
