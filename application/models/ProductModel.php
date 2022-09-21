<?php

class ProductModel extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function retrieveProducts(){
		$this->db->from('products');
		return $this->db->get()->result();
	}
	function retrieveLimitedProducts($g_r_id){

		$data=$this->db->query("SELECT * FROM products WHERE products.product_name not in (SELECT generator_fragement_internal_registration_form.g_f_r_porduct_name FROM generator_fragement_internal_registration_form WHERE generator_fragement_internal_registration_form.g_r_id = '$g_r_id') and products.product_name not in (SELECT generator_fragement_testing_registration_form.g_f_r_porduct_name FROM generator_fragement_testing_registration_form WHERE generator_fragement_testing_registration_form.g_r_id = '$g_r_id')  ");
		return $data->result();
	}
	function retrieveLimitedGeneratorInternalRegisterForm($g_r_id){
		$data=$this->db->query("SELECT * FROM products WHERE products.product_name not in (SELECT generator_fragement_external_registration_form.g_f_r_porduct_name FROM generator_fragement_external_registration_form WHERE generator_fragement_external_registration_form.g_r_id = '$g_r_id') order by products.product_name");
		return $data->result();
	}
	function retrieveLimitedGeneratorTestingRegisterForm($g_r_id){
		$data=$this->db->query("SELECT * FROM products WHERE products.product_name not in (SELECT generator_fragement_testing_registration_form.g_f_r_porduct_name FROM generator_fragement_testing_registration_form WHERE generator_fragement_testing_registration_form.g_r_id = '$g_r_id') order by products.product_name");
		return $data->result();
	}


	function insertProductsForm($data){
		return $this->db->insert('products',$data);
	}
	function retrieveProductsById($id){
		$this->db->where('product_id',$id);
		$this->db->from('products');
		return $this->db->get()->result();
	}
	function removeProducts($id){
		$this->db->where('product_id',$id);
		return $this->db->delete('products');
	}

	function updateProducts($id,$data){
		$this->db->where('product_id',$id);
		return $this->db->update('products',$data);
	}

}
?>
