<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*
*/
class GeneratorDetailInfoController extends MY_Controller
{
	function __construct()
	{
				parent::__construct();
				$this->load->model('GeneratorDetailRegisterModel');
        $this->load->model('GeneratorRegisterProblemModel');
				$this->load->model('GeneratorStabilizationProblemModel');
				$this->load->model('GeneratorTestingModel');
				$this->load->model('ProductModel');


	}
	function index(){
		if (!isset($_GET['id'])) {
            redirect('GeneratorDetailController/index');
        }
				$g_r_id = $_GET['id'];
				$data=$this->GeneratorDetailRegisterModel->retrieveGeneratorDetailRegisterById($g_r_id);
        $internal=$this->GeneratorRegisterProblemModel->retrieveGeneratorRegisterProblemByg_r_id($g_r_id);
        $external=$this->GeneratorStabilizationProblemModel->retrieveGeneratorRegisterProblemByg_r_id($g_r_id);
				$testing=$this->GeneratorTestingModel->retrieveGeneratorRegisterProblemByg_r_id($g_r_id);

				$this->load->view('include/header.inc.php');
				$this->load->view('GeneratorDetailInfoView',array('data'=>$data,
													'internal'=>$internal,'external'=>$external,
																'testing'=>$testing));
				$this->load->view('include/footer.inc.php');
	}
	function print(){
			if (!isset($_GET['id'])) {
	            redirect('GeneratorDetailController/index');
	        }
			$g_r_id = $_GET['id'];
			$photos=$this->GeneratorDetailRegisterModel->retrieveGeneratorWorkflowPhotosById($g_r_id);
			$data=$this->GeneratorDetailRegisterModel->retrieveGeneratorDetailRegisterById($g_r_id);
			$R_products=$this->ProductModel->retrieveLimitedProducts($g_r_id);
			$internal=$this->GeneratorRegisterProblemModel->retrieveGeneratorRegisterProblemByg_r_id($g_r_id);
	    // $external=$this->GeneratorStabilizationProblemModel->retrieveGeneratorRegisterProblemByg_r_id($g_r_id);
			$testing=$this->GeneratorTestingModel->retrieveGeneratorRegisterProblemByg_r_id($g_r_id);


			$this->load->view('GeneratorDetailInfoPrint',array('data'=>$data,'internal'=>$internal,'photos'=>$photos,'R_products'=>$testing,'R_product'=>$R_products));
		}
		function printProducist(){
				if (!isset($_GET['id'])) {
		            redirect('GeneratorDetailController/index');
		        }
				$g_r_id = $_GET['id'];
				//$photos=$this->GeneratorDetailRegisterModel->retrieveGeneratorWorkflowPhotosById($g_r_id);
				$data=$this->GeneratorDetailRegisterModel->retrieveGeneratorDetailRegisterById($g_r_id);
				//$R_products=$this->ProductModel->retrieveLimitedProducts($g_r_id);
				$internal=$this->GeneratorRegisterProblemModel->retrieveGeneratorRegisterProblemByg_r_id($g_r_id);
		    // $external=$this->GeneratorStabilizationProblemModel->retrieveGeneratorRegisterProblemByg_r_id($g_r_id);
				//$testing=$this->GeneratorTestingModel->retrieveGeneratorRegisterProblemByg_r_id($g_r_id);


				$this->load->view('GeneratorDetailInfoPrintProductList',array('data'=>$data,'internal'=>$internal));
			}

			function submit_act(){
			if (!isset($_GET['id'])) {
	            redirect('GeneratorDetailController/index');
	        }
			$g_r_id = $_GET['id'];
			$photos=$this->GeneratorDetailRegisterModel->retrieveGeneratorWorkflowPhotosById($g_r_id);
			$data=$this->GeneratorDetailRegisterModel->retrieveGeneratorDetailRegisterById($g_r_id);
			$R_products=$this->ProductModel->retrieveLimitedProducts($g_r_id);
			$internal=$this->GeneratorRegisterProblemModel->retrieveGeneratorRegisterProblemByg_r_id($g_r_id);
	    // $external=$this->GeneratorStabilizationProblemModel->retrieveGeneratorRegisterProblemByg_r_id($g_r_id);
			$testing=$this->GeneratorTestingModel->retrieveGeneratorRegisterProblemByg_r_id($g_r_id);


			$this->load->view('forms/submit_act',array('data'=>$data,'internal'=>$internal,'photos'=>$photos,'R_products'=>$testing,'R_product'=>$R_products));
		}
		function weekly_stabilization(){
			if (!isset($_GET['id'])) {
	            redirect('GeneratorDetailController/index');
	        }
			$g_r_id = $_GET['id'];
			
			$data=$this->GeneratorDetailRegisterModel->retrieveGeneratorDetailRegisterById($g_r_id);
		
			$internal=$this->GeneratorRegisterProblemModel->retrieveGeneratorinternalforPrintById($g_r_id);
			$num_rows=$this->GeneratorRegisterProblemModel->internalnumberofRows($g_r_id);



			$this->load->view('forms/weekly_stabilization',array('data'=>$data,'internal'=>$internal,'num_rows'=>$num_rows));
		}
		function PrintBarawardSani(){
			if (!isset($_GET['id'])) {
	            redirect('GeneratorDetailController/index');
	        }
			$g_r_id = $_GET['id'];
			
			$data=$this->GeneratorDetailRegisterModel->retrieveGeneratorDetailRegisterById($g_r_id);
		
			$internal=$this->GeneratorRegisterProblemModel->retrieveGeneratorinternalforPrintById($g_r_id);
			$num_rows=$this->GeneratorRegisterProblemModel->internalnumberofRows($g_r_id);



			$this->load->view('forms/baraward_sani',array('data'=>$data,'internal'=>$internal,'num_rows'=>$num_rows));
		}
		function PrintWorkProgression(){
			if (!isset($_GET['id'])) {
	            redirect('GeneratorDetailController/index');
	        }
			$g_r_id = $_GET['id'];
			
			$data=$this->GeneratorDetailRegisterModel->retrieveGeneratorDetailRegisterById($g_r_id);
		
			$internal=$this->GeneratorRegisterProblemModel->retrieveGeneratorinternalforPrintById($g_r_id);
			$num_rows=$this->GeneratorRegisterProblemModel->internalnumberofRows($g_r_id);



			$this->load->view('forms/work_progression',array('data'=>$data,'internal'=>$internal,'num_rows'=>$num_rows));
		}
		function form_63(){
			if (!isset($_GET['id'])) {
	            redirect('GeneratorDetailController/index');
	        }
			$g_r_id = $_GET['id'];
			
			$data=$this->GeneratorDetailRegisterModel->retrieveGeneratorDetailRegisterById($g_r_id);
		
			$internal=$this->GeneratorRegisterProblemModel->retrieveGeneratorinternalforPrintById($g_r_id);
			$num_rows=$this->GeneratorRegisterProblemModel->internalnumberofRows($g_r_id);



			$this->load->view('forms/form_63',array('data'=>$data,'internal'=>$internal,'num_rows'=>$num_rows));
		}
		function jadwal_4(){
			if (!isset($_GET['id'])) {
	            redirect('GeneratorDetailController/index');
	        }
			$g_r_id = $_GET['id'];
			
			$data=$this->GeneratorDetailRegisterModel->retrieveGeneratorDetailRegisterById($g_r_id);
		
			$internal=$this->GeneratorRegisterProblemModel->retrieveGeneratorinternalforPrintById($g_r_id);
			$num_rows=$this->GeneratorRegisterProblemModel->internalnumberofRows($g_r_id);



			$this->load->view('forms/jadwal_4',array('data'=>$data,'internal'=>$internal,'num_rows'=>$num_rows));
		}
		function peshraft_kar(){
			if (!isset($_GET['id'])) {
	            redirect('GeneratorDetailController/index');
	        }
			$g_r_id = $_GET['id'];
			
			$data=$this->GeneratorDetailRegisterModel->retrieveGeneratorDetailRegisterById($g_r_id);
		
			$internal=$this->GeneratorRegisterProblemModel->retrieveGeneratorinternalforPrintById($g_r_id);
			$num_rows=$this->GeneratorRegisterProblemModel->internalnumberofRows($g_r_id);



			$this->load->view('forms/peshraft_kar',array('data'=>$data,'internal'=>$internal,'num_rows'=>$num_rows));
		}

}
?>
