<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*
*/
class GeneratorGalleryController extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('GeneratorDetailRegisterModel');
	}
	function index(){
    $g_r_id = $_GET['id'];
    $data=$this->GeneratorDetailRegisterModel->retrieveGeneratorWorkflowPhotosById($g_r_id);
    $this->load->view('include/header.inc.php');
		$this->load->view('GeneratorGalleryView',array('data'=>$data));
		$this->load->view('include/footer.inc.php');
	}
	function deletePhoto(){
		$id = $_GET['id'];
		$g_r_id = $_GET['g_r_id'];
		$url = $_GET['url'];
		// unlink(.$url);
		
		$file =  explode("'", $_GET['url']);
		unlink($file[1]);
	
		
		$this->GeneratorDetailRegisterModel->removeGeneratorWorkflowPhoto($id);
		redirect('GeneratorGalleryController?id='.$g_r_id);
	}


}

?>
