<?php

class GeneratorRegisterProblemModel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function retrieveGeneratorRegisterProblem(){
        $this->db->from('generator_fragement_internal_registration_form');
        return $this->db->get()->result();
	}
	function retrieveGeneratorRegisterProblemByg_r_id($id){
        $this->db->where('g_r_id',$id);
        $this->db->order_by('g_f_r_status');
        $this->db->from('generator_fragement_internal_registration_form');
        return $this->db->get()->result();
	}
	function insertGeneratorRegisterProblemForm($data){
		$this->db->insert('generator_fragement_internal_registration_form',$data);
		return $this->db->insert_id();
	}
	/////////
	function insertGeneratorRegisterProblemForm_LOCK_FILE($data){
		$this->db->insert('lock_file_generator_fragement_internal_registration_form',$data);
		return $this->db->insert_id();
	}
	////////
	function removeGeneratorRegisterProblem($id){
		$this->db->where('g_f_r_id',$id);
		return $this->db->delete('generator_fragement_internal_registration_form');
	}
	function retrieveGeneratorRegisterProblemById($id){
		$this->db->where('g_f_r_id',$id);
		$this->db->from('generator_fragement_internal_registration_form');
        return $this->db->get()->result();
	}
	function retrieveGeneratorinternalforPrintById($id){
		$this->db->where('g_r_id',$id);
		$this->db->where_not_in('g_f_r_status',1);

		$this->db->from("generator_fragement_internal_registration_form");
        return $this->db->get()->result();
	}
	function internalnumberofRows($id){
		$this->db->where('g_r_id',$id);
		$this->db->where_not_in('g_f_r_status',1);
		$this->db->from("generator_fragement_internal_registration_form");
        return $this->db->get()->num_rows();
	}
	function updateGeneratorRegisterProblem($id,$data){
		$this->db->where('g_f_r_id',$id);
		return $this->db->update('generator_fragement_internal_registration_form',$data);
	}
}
?>
