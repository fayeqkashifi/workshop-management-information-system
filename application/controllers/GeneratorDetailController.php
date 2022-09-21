<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*
*/
class GeneratorDetailController extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('GeneratorDetailRegisterModel');
	}
	function index(){
		$data = $this->GeneratorDetailRegisterModel->retrieveGeneratorDetailRegister();
		$this->load->view('include/header.inc.php');
		$this->load->view('GeneratorDetailView',array('data'=>$data,'tital'=>' '));
		$this->load->view('include/footer.inc.php');
	}

	////// قول ازدو ها
	function retrieveZone201(){
		$data = $this->GeneratorDetailRegisterModel->retrieveGeneratorDetailRegister201();
		$this->load->view('include/header.inc.php');
		$this->load->view('GeneratorDetailView',array('data'=>$data,'tital'=>' قول اردو 201 سیلاب '));
		$this->load->view('include/footer.inc.php');
	}

	function retrieveZone203(){
		$data = $this->GeneratorDetailRegisterModel->retrieveGeneratorDetailRegister203();
		$this->load->view('include/header.inc.php');
		$this->load->view('GeneratorDetailView',array('data'=>$data,'tital'=>' قول اردو 203 تندر پکتیا '));
		$this->load->view('include/footer.inc.php');
	}
	function retrieveZone205(){
		$data = $this->GeneratorDetailRegisterModel->retrieveGeneratorDetailRegister205();
		$this->load->view('include/header.inc.php');
		$this->load->view('GeneratorDetailView',array('data'=>$data,'tital'=>' قول اردو 205 اتل '));
		$this->load->view('include/footer.inc.php');
	}
	function retrieveZone207(){
		$data = $this->GeneratorDetailRegisterModel->retrieveGeneratorDetailRegister207();
		$this->load->view('include/header.inc.php');
		$this->load->view('GeneratorDetailView',array('data'=>$data,'tital'=>' قول اردو 207 ظفر '));
		$this->load->view('include/footer.inc.php');
	}
	function retrieveZone209(){
		$data = $this->GeneratorDetailRegisterModel->retrieveGeneratorDetailRegister209();
		$this->load->view('include/header.inc.php');
		$this->load->view('GeneratorDetailView',array('data'=>$data,'tital'=>' قول اردو 209 شاهین '));
		$this->load->view('include/footer.inc.php');
	}
	function retrieveZone215(){
		$data = $this->GeneratorDetailRegisterModel->retrieveGeneratorDetailRegister215();
		$this->load->view('include/header.inc.php');
		$this->load->view('GeneratorDetailView',array('data'=>$data,'tital'=>' قول اردو 215 میوند'));
		$this->load->view('include/footer.inc.php');
	}
	////// قول ازدو ها
	// ----------------------
	///// زون مرکز
	function retrieveZoneCenter(){
		$data = $this->GeneratorDetailRegisterModel->retrieveGeneratorDetailRegisterCenter();
		$this->load->view('include/header.inc.php');
		$this->load->view('GeneratorDetailView',array('data'=>$data,'tital'=>' زون مرکز '));
		$this->load->view('include/footer.inc.php');
	}
	function retrieveZoneNorth(){
		$data = $this->GeneratorDetailRegisterModel->retrieveGeneratorDetailRegisterNorth();
		$this->load->view('include/header.inc.php');
		$this->load->view('GeneratorDetailView',array('data'=>$data,'tital'=>' زون شمال '));
		$this->load->view('include/footer.inc.php');
	}
	function retrieveZoneEast(){
		$data = $this->GeneratorDetailRegisterModel->retrieveGeneratorDetailRegisterEast();
		$this->load->view('include/header.inc.php');
		$this->load->view('GeneratorDetailView',array('data'=>$data,'tital'=>' زون غرب '));
		$this->load->view('include/footer.inc.php');
	}
	function retrieveZoneWest(){
		$data = $this->GeneratorDetailRegisterModel->retrieveGeneratorDetailRegisterWest();
		$this->load->view('include/header.inc.php');
		$this->load->view('GeneratorDetailView',array('data'=>$data,'tital'=>' زون شرق'));
		$this->load->view('include/footer.inc.php');
	}
	///// زون مرکز


// زون مرکز لیست جنراتور های تکمیل شده-----///

	function retrieveCompletedGeneratorZone201(){

		$data = $this->GeneratorDetailRegisterModel->retrieveCompletedGenerators201();
		$this->load->view('include/header.inc.php');
		$this->load->view('CompletedGeneratorView',array('data'=>$data,'tital'=>' قول اردو 201 سیلاب '));
		$this->load->view('include/footer.inc.php');	
	}
	function retrieveCompletedGeneratorZone203(){

		$data = $this->GeneratorDetailRegisterModel->retrieveCompletedGenerators203();
		$this->load->view('include/header.inc.php');
		$this->load->view('CompletedGeneratorView',array('data'=>$data,'tital'=>' قول اردو 201 سیلاب '));
		$this->load->view('include/footer.inc.php');	
	}
	function retrieveCompletedGeneratorZone205(){

		$data = $this->GeneratorDetailRegisterModel->retrieveCompletedGenerators205();
		$this->load->view('include/header.inc.php');
		$this->load->view('CompletedGeneratorView',array('data'=>$data,'tital'=>' قول اردو 201 سیلاب '));
		$this->load->view('include/footer.inc.php');	
	}
	function retrieveCompletedGeneratorZone207(){

		$data = $this->GeneratorDetailRegisterModel->retrieveCompletedGenerators207();
		$this->load->view('include/header.inc.php');
		$this->load->view('CompletedGeneratorView',array('data'=>$data,'tital'=>' قول اردو 201 سیلاب '));
		$this->load->view('include/footer.inc.php');	
	}
	function retrieveCompletedGeneratorZone209(){

		$data = $this->GeneratorDetailRegisterModel->retrieveCompletedGenerators209();
		$this->load->view('include/header.inc.php');
		$this->load->view('CompletedGeneratorView',array('data'=>$data,'tital'=>' قول اردو 201 سیلاب '));
		$this->load->view('include/footer.inc.php');	
	}
	function retrieveCompletedGeneratorZone215(){

		$data = $this->GeneratorDetailRegisterModel->retrieveCompletedGenerators215();
		$this->load->view('include/header.inc.php');
		$this->load->view('CompletedGeneratorView',array('data'=>$data,'tital'=>' قول اردو 201 سیلاب '));
		$this->load->view('include/footer.inc.php');	
	}
//ختم
// زون مرکز لیست جنراتور های تکمیل شده --------//
	function retrieveCompletedGeneratorZoneCenter(){

		$data = $this->GeneratorDetailRegisterModel->retrieveCompletedGeneratorsCenter();
		$this->load->view('include/header.inc.php');
		$this->load->view('CompletedGeneratorView',array('data'=>$data,'tital'=>' قول اردو 201 سیلاب '));
		$this->load->view('include/footer.inc.php');	
	}
	function retrieveCompletedGeneratorZoneNorth(){

		$data = $this->GeneratorDetailRegisterModel->retrieveCompletedGeneratorsNorth();
		$this->load->view('include/header.inc.php');
		$this->load->view('CompletedGeneratorView',array('data'=>$data,'tital'=>' قول اردو 201 سیلاب '));
		$this->load->view('include/footer.inc.php');	
	}
	function retrieveCompletedGeneratorZoneEast(){

		$data = $this->GeneratorDetailRegisterModel->retrieveCompletedGeneratorsEast();
		$this->load->view('include/header.inc.php');
		$this->load->view('CompletedGeneratorView',array('data'=>$data,'tital'=>' قول اردو 201 سیلاب '));
		$this->load->view('include/footer.inc.php');	
	}
	function retrieveCompletedGeneratorZoneWest(){

		$data = $this->GeneratorDetailRegisterModel->retrieveCompletedGeneratorsWest();
		$this->load->view('include/header.inc.php');
		$this->load->view('CompletedGeneratorView',array('data'=>$data,'tital'=>' قول اردو 201 سیلاب '));
		$this->load->view('include/footer.inc.php');	
	}

// ختم 

function retrieveCompletedGenerators(){

		$data = $this->GeneratorDetailRegisterModel->retrieveCompletedGenerators();
		$this->load->view('include/header.inc.php');
		$this->load->view('CompletedGeneratorView',array('data'=>$data,'tital'=>''));
		$this->load->view('include/footer.inc.php');	
	}

}

?>
