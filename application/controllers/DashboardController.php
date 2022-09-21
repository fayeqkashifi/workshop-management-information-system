<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*
*/
class DashboardController extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('GeneratorDetailRegisterModel');
		$this->load->model('DashboardModel');
	}
	function index(){
		
		$data = $this->GeneratorDetailRegisterModel->retrieveGeneratorDetailRegister();
		$CountProduct = $this->DashboardModel->retrieveCountProducts();
		$CountUsers = $this->DashboardModel->retrieveCountUsers();
		$CountGenerators = $this->DashboardModel->retrieveCountGenerators();
		$CountPhotos = $this->DashboardModel->retrieveCountPhotos();

		$this->load->view('include/header.inc.php');
		$this->load->view('DashboardView',array('data'=>$data,
				'CountProduct'=>$CountProduct,
				'CountUsers'=>$CountUsers,
				'CountGenerators'=>$CountGenerators,
				'CountPhotos'=>$CountPhotos));
		$this->load->view('include/footer.inc.php');
	}

}

?>
