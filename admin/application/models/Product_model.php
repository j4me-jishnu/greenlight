<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Product_model extends CI_Model{

	public function __construct()
    {
        parent::__construct();
    }

	
	public function checkIfExist($barcode)
	{
		$this->db->select('*');
		$this->db->where('barcode',$barcode);
		return $this->db->get('tbl_events')->num_rows();
	}
}
?>