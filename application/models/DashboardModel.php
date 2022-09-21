<?php

class DashboardModel extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function retrieveCountProducts(){
			$number_product=$this->db->select('product_id')->from('products')->get();

		return $number_product->num_rows();
	}
	function retrieveCountUsers(){
			$number_users=$this->db->select('user_id')->from('users')->get();

		return $number_users->num_rows();
	}
	function retrieveCountGenerators(){
			$number_generators=$this->db->select('g_r_id')->from('generator_registration_form')->get();
		return $number_generators->num_rows();
	}
	function retrieveCountPhotos(){
			$number_photos=$this->db->select('g_w_p_id')->from('generator_workflow_photos')->get();

		return $number_photos->num_rows();
	}


}
?>
