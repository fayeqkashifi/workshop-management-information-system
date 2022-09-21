<?php

class GeneratorStabilizationProblemModel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	 function retrieveGeneratorRegisterProblem(){
        $this->db->from('generator_fragement_external_registration_form');
        return $this->db->get()->result();
	}
	function retrieveGeneratorRegisterProblemByg_r_id($id){
        $this->db->where('g_r_id',$id);
        $this->db->from('generator_fragement_external_registration_form');
        return $this->db->get()->result();
	}
	function insertGeneratorRegisterProblemForm($data){
		$this->db->insert('generator_fragement_external_registration_form',$data);
		return $this->db->insert_id();
	}
	/////////
	function insertGeneratorRegisterProblemForm_LOCK_FILE($data){
		$this->db->insert('lock_file_generator_fragement_external_registration_form',$data);
		return $this->db->insert_id();
	}
	////////
	function removeGeneratorRegisterProblem($id){
		$this->db->where('g_f_r_id',$id);
		return $this->db->delete('generator_fragement_external_registration_form');
	}
	function retrieveGeneratorRegisterProblemById($id){
		$this->db->where('g_f_r_id',$id);
		$this->db->from('generator_fragement_external_registration_form');
        return $this->db->get()->result();
	}
	function updateGeneratorRegisterProblem($id,$data){
		$this->db->where('g_f_r_id',$id);
		return $this->db->update('generator_fragement_external_registration_form',$data);
	}
}
?>