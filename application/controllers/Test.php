<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require 'vendor/autoload.php';
use CodeItNow\BarcodeBundle\Utils\QrCode;

class Test extends CI_Controller{
  public $table1 = 'tbl_participants';
  function __construct(){
    parent::__construct();
    // $this->load->model('Loginmodel');
    $this->load->helper('url');
    $this->load->model('General_model');
    $this->load->model('Home_model');
    $this->load->model('Category_model');
    $this->load->library('pagination');
    $this->load->library('session');
    $this->load->library('session');
  }

  public function runQR(){
    $qrCode = new QrCode();
    $qrCode
    ->setText('QR code by codeitnow.in')
    ->setSize(300)
    ->setPadding(10)
    ->setErrorCorrection('high')
    ->setForegroundColor(array('r' => 0, 'g' => 0, 'b' => 0, 'a' => 0))
    ->setBackgroundColor(array('r' => 255, 'g' => 255, 'b' => 255, 'a' => 0))
    ->setLabel('Scan Qr Code')
    ->setLabelFontSize(16)
    ->setImageType(QrCode::IMAGE_TYPE_PNG)
    ;
    echo '<img src="data:'.$qrCode->getContentType().';base64,'.$qrCode->generate().'" />';
  }






}
