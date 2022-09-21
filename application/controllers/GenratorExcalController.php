<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*
*/
class GenratorExcalController extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('GeneratorDetailRegisterModel');
        $this->load->model('GeneratorRegisterProblemModel');
		$this->load->model('GeneratorTestingModel');
		$this->load->model('GeneratorStabilizationProblemModel');
		$this->load->model('ProductModel');
	}
	function index(){
		
			$g_r_id = $_GET['id'];
			$photos=$this->GeneratorDetailRegisterModel->retrieveGeneratorWorkflowPhotosById($g_r_id);
			$data=$this->GeneratorDetailRegisterModel->retrieveGeneratorDetailRegisterById($g_r_id);
			$R_products=$this->ProductModel->retrieveLimitedProducts($g_r_id);
			$internal=$this->GeneratorRegisterProblemModel->retrieveGeneratorRegisterProblemByg_r_id($g_r_id);
	    // $external=$this->GeneratorStabilizationProblemModel->retrieveGeneratorRegisterProblemByg_r_id($g_r_id);
			$testing=$this->GeneratorTestingModel->retrieveGeneratorRegisterProblemByg_r_id($g_r_id);

			$this->load->view('include/header.inc.php');
			$this->load->view('GenratorExcalView',array('data'=>$data,'internal'=>$internal,'photos'=>$photos,'R_products'=>$testing,'R_product'=>$R_products));
			$this->load->view('include/footer.inc.php');
	}

}

?>
