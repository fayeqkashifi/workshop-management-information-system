<?php

class GeneratorDetailRegisterModel extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}
	function retrieveGeneratorDetailRegister(){
	 	if($_SESSION['zone_type']!='مدیر مرکز' AND $_SESSION['zone_type']!=''){
	 		$data= array('zone_type' => $_SESSION['zone_type'],'g_r_status'=>0);
	 		$this->db->where($data);
	 		
        	$this->db->from('generator_registration_form');
        	return $this->db->get()->result();	
	 	}elseif ($_SESSION['zone_type']=='مدیر مرکز'){
	 		$data= array('zone_type' => 'شمال',
	 					'zone_type' => 'شرق',
	 					'zone_type' => 'مرکز',
	 					'zone_type' => 'غرب',
	 					'g_r_status'=>0);
	 		$this->db->where($data);
		 	
	        $this->db->from('generator_registration_form');
	        return $this->db->get()->result();
        }elseif ($_SESSION['type']==1){
        	$data= array('g_r_status'=>0);
	 		$this->db->where($data);
        	$this->db->from('generator_registration_form');
	        return $this->db->get()->result();
        }
	}
	// ////////////////////// معلومات هر زودن به ترتیب start ////////////////
	// قول اردو
	function retrieveGeneratorDetailRegister201(){
			$data= array('zone_type' => 201,'g_r_status'=>0);
	 		$this->db->where($data);
        	$this->db->from('generator_registration_form');
        	return $this->db->get()->result();
	}
	function retrieveGeneratorDetailRegister203(){
			$data= array('zone_type' => 203,'g_r_status'=>0);
	 		$this->db->where($data);
	 		
        	$this->db->from('generator_registration_form');
        	return $this->db->get()->result();
	}
	function retrieveGeneratorDetailRegister205(){
			$data= array('zone_type' => 205,'g_r_status'=>0);
	 		$this->db->where($data);
	 		
        	$this->db->from('generator_registration_form');
        	return $this->db->get()->result();
	}
	function retrieveGeneratorDetailRegister207(){
			$data= array('zone_type' => 207,'g_r_status'=>0);
	 		$this->db->where($data);
	 		
        	$this->db->from('generator_registration_form');
        	return $this->db->get()->result();
	}
	function retrieveGeneratorDetailRegister209(){
			$data= array('zone_type' => 209,'g_r_status'=>0);
	 		$this->db->where($data);
	 		
        	$this->db->from('generator_registration_form');
        	return $this->db->get()->result();
	}
	function retrieveGeneratorDetailRegister215(){
			$data= array('zone_type' => 215,'g_r_status'=>0);
	 		$this->db->where($data);
	 		
        	$this->db->from('generator_registration_form');
        	return $this->db->get()->result();
	}
	// قول اردو
	// ------------------
	// مر کز
	function retrieveGeneratorDetailRegisterCenter(){
			$data= array('zone_type' => 'مرکز','g_r_status'=>0);
	 		$this->db->where($data);
	 		
        	$this->db->from('generator_registration_form');
        	return $this->db->get()->result();
	}
	function retrieveGeneratorDetailRegisterNorth(){
			$data= array('zone_type' => 'شمال','g_r_status'=>0);
	 		$this->db->where($data);
	 		
        	$this->db->from('generator_registration_form');
        	return $this->db->get()->result();
	}
	function retrieveGeneratorDetailRegisterEast(){
			$data= array('zone_type' => 'غرب','g_r_status'=>0);
	 		$this->db->where($data);
	 		
        	$this->db->from('generator_registration_form');
        	return $this->db->get()->result();
	}
	function retrieveGeneratorDetailRegisterWest(){
			$data= array('zone_type' => 'شرق','g_r_status'=>0);
	 		$this->db->where($data);
	 		
        	$this->db->from('generator_registration_form');
        	return $this->db->get()->result();
	}
	// مر کز
	// ///////////////////////// معلومات هر زودن به ترتیب end ////////////////

function retrieveCompletedGenerators(){
	 	if($_SESSION['zone_type']!='مدیر مرکز' AND $_SESSION['zone_type']!=''){
	 		$data= array('zone_type' => $_SESSION['zone_type'],'g_r_status'=>1);
	 		$this->db->where($data);
	 		
        	$this->db->from('generator_registration_form');
        	return $this->db->get()->result();	
	 	}elseif ($_SESSION['zone_type']=='مدیر مرکز'){
	 		$data= array('zone_type' => 'شمال',
	 					'zone_type' => 'شرق',
	 					'zone_type' => 'مرکز',
	 					'zone_type' => 'غرب',
	 					'g_r_status'=>1);
	 		$this->db->where($data);
		 	
	        $this->db->from('generator_registration_form');
	        return $this->db->get()->result();
        }elseif ($_SESSION['type']==1){
        	$data= array('g_r_status'=>1);
	 		$this->db->where($data);
        	$this->db->from('generator_registration_form');
	        return $this->db->get()->result();
        }
	}
	// ////////////////////// معلومات هر زودن به ترتیب start ////////////////
	// قول اردو
	function retrieveCompletedGenerators201(){
			$data= array('zone_type' => 201,'g_r_status'=>1);
	 		$this->db->where($data);
        	$this->db->from('generator_registration_form');
        	return $this->db->get()->result();
	}
	function retrieveCompletedGenerators203(){
			$data= array('zone_type' => 203,'g_r_status'=>1);
	 		$this->db->where($data);
	 		
        	$this->db->from('generator_registration_form');
        	return $this->db->get()->result();
	}
	function retrieveCompletedGenerators205(){
			$data= array('zone_type' => 205,'g_r_status'=>1);
	 		$this->db->where($data);
	 		
        	$this->db->from('generator_registration_form');
        	return $this->db->get()->result();
	}
	function retrieveCompletedGenerators207(){
			$data= array('zone_type' => 207,'g_r_status'=>1);
	 		$this->db->where($data);
	 		
        	$this->db->from('generator_registration_form');
        	return $this->db->get()->result();
	}
	function retrieveCompletedGenerators209(){
			$data= array('zone_type' => 209,'g_r_status'=>1);
	 		$this->db->where($data);
	 		
        	$this->db->from('generator_registration_form');
        	return $this->db->get()->result();
	}
	function retrieveCompletedGenerators215(){
			$data= array('zone_type' => 215,'g_r_status'=>1);
	 		$this->db->where($data);
	 		
        	$this->db->from('generator_registration_form');
        	return $this->db->get()->result();
	}
	// قول اردو
	// ------------------
	// مر کز
	function retrieveCompletedGeneratorsCenter(){
			$data= array('zone_type' => 'مرکز','g_r_status'=>1);
	 		$this->db->where($data);
	 		
        	$this->db->from('generator_registration_form');
        	return $this->db->get()->result();
	}
	function retrieveCompletedGeneratorsNorth(){
			$data= array('zone_type' => 'شمال','g_r_status'=>1);
	 		$this->db->where($data);
	 		
        	$this->db->from('generator_registration_form');
        	return $this->db->get()->result();
	}
	function retrieveCompletedGeneratorsEast(){
			$data= array('zone_type' => 'غرب','g_r_status'=>1);
	 		$this->db->where($data);
	 		
        	$this->db->from('generator_registration_form');
        	return $this->db->get()->result();
	}
	function retrieveCompletedGeneratorsWest(){
			$data= array('zone_type' => 'شرق','g_r_status'=>1);
	 		$this->db->where($data);
	 		
        	$this->db->from('generator_registration_form');
        	return $this->db->get()->result();
	}
	// مر کز
	// ///////////////////////// معلومات هر زودن به ترتیب end ////////////////


	function insertGeneratorRegisterForm($data){
		$this->db->insert('generator_registration_form',$data);
		return $this->db->insert_id();
	}
	function insertGeneratorWorkflowPhotosForm($data){
		$this->db->insert('generator_workflow_photos',$data);
		return $this->db->insert_id();
	}
	function retrieveGeneratorWorkflowPhotosById($id){
		$this->db->where('g_r_id',$id);
		$this->db->from('generator_workflow_photos');
        return $this->db->get()->result();
	}
	function removeGeneratorWorkflowPhoto($id){
		$this->db->where('g_w_p_id',$id);
		return $this->db->delete('generator_workflow_photos');
	}


	/////////
	function insertGeneratorRegisterForm_LOCK_FILE($data){
		$this->db->insert('lock_file_generator_registration_form',$data);
		return $this->db->insert_id();
	}
	////////
	function removeGeneratorDetailRegister($id){
		$this->db->where('g_r_id',$id);
		return $this->db->delete('generator_registration_form');
	}

	function retrieveGeneratorDetailRegisterById($id){
		$this->db->where('g_r_id',$id);
		$this->db->from('generator_registration_form');
        return $this->db->get()->result();
	}

	function updateGeneratorDetailRegister($id,$data){
		$this->db->where('g_r_id',$id);
		return $this->db->update('generator_registration_form',$data);
	}
}
?>
