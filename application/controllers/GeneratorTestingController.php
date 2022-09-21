<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*
*/
class GeneratorTestingController extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
    $this->load->model('GeneratorTestingModel');
		$this->load->model('ProductModel');
	}
	function index(){

	}
	function insertForm(){
        $error = false;
         if(!$error){
            $failed_data=array(
                'g_f_r_porduct_name'=> $_POST['g_f_r_porduct_name'],
                'g_f_r_remark' => $_POST['g_f_r_remark'],
                'g_f_r_quantity' => $_POST['g_f_r_quantity'],
								'g_f_r_status' => $_POST['g_f_r_state'],
                'g_r_id' => $_POST['g_r_id'],
                'create_at' => date('Y-m-d'),
            );
          	$g_f_r_id = $this->GeneratorTestingModel->insertGeneratorRegisterProblemForm($failed_data);
            // $lock_data = array(
            //     'name' => $_SESSION['name'],
            //     'last_name' => $_SESSION['last_name'],
            //     'father_name' => $_SESSION['father_name'],
            //     'photo'=> $_SESSION['image'],
            //     'signature_photo'=> $_SESSION['signature_image'],
            //     'g_f_r_id' => $g_f_r_id,
            //     'create_at' => date('Y-m-d'),
            // );
            // $this->GeneratorTestingModel->insertGeneratorRegisterProblemForm_LOCK_FILE($lock_data);
          	redirect('GeneratorRegisterProblemController/index?id='.$_POST['g_r_id']);
           }else{
            $this->load->view('include/header.inc.php');
            $this->load->view('personAdd', array(
                'error_g_f_r_porduct_name' => $error_g_f_r_porduct_name,
                'error_g_f_r_remark' => $error_g_f_r_remark,
                'error_c_pass' => $error_c_pass,
                'error_name' => $error_name,
                'error_last_name' => $error_last_name,
                'error_father_name'=>$error_father_name,
				        'error_photo'=>$error_photo,
                'error_signature_photo'=>$error_signature_photo,
            ));
            $this->load->view('include/footer.inc.php');
        }
	}
	function editGeneratorTestingView(){
				$g_f_r_id = $_GET['id'];
				$g_r_id = $_GET['g_r_id'];

				$data = $this->GeneratorTestingModel->retrieveGeneratorRegisterProblemById($g_f_r_id);
				$productsTesting = $this->ProductModel->retrieveLimitedGeneratorTestingRegisterForm($g_r_id);
				$this->load->view('include/header.inc.php');
				$this->load->view('GeneratorTestingEditView',array('data'=>$data,'productsTesting'=>$productsTesting));
				$this->load->view('include/footer.inc.php');
		}
	function editGeneratorTesting(){
        $error = false;
         if(!$error){
            $failed_data=array(
                'g_f_r_porduct_name'=> $_POST['g_f_r_porduct_name'],
                'g_f_r_remark' => $_POST['g_f_r_remark'],
                'g_f_r_quantity' => $_POST['g_f_r_quantity'],
                'g_f_r_status' => $_POST['g_f_r_state'],
                'g_r_id'=>$_POST['g_r_id'],
                'update_at' => date('Y-m-d'),
            );
            $g_f_r_id = $_POST['g_f_r_id'];
          $this->GeneratorTestingModel->updateGeneratorRegisterProblem($g_f_r_id,$failed_data);
          redirect('GeneratorRegisterProblemController/index?id='.$_POST['g_r_id']);
           }else{
            $this->load->view('include/header.inc.php');
            $this->load->view('personAdd', array(
                'error_g_f_r_porduct_name' => $error_g_f_r_porduct_name,
                'error_g_f_r_remark' => $error_g_f_r_remark,
                'error_c_pass' => $error_c_pass,
                'error_name' => $error_name,
                'error_last_name' => $error_last_name,
                'error_father_name'=>$error_father_name,
                'error_photo'=>$error_photo,
                'error_signature_photo'=>$error_signature_photo,
            ));
            $this->load->view('include/footer.inc.php');
        }
    }
    function removeTesting(){
        $id=$_GET['id'];
        $this->GeneratorTestingModel->removeGeneratorRegisterProblem($id);
        redirect('GeneratorRegisterProblemController/index?id='.$_GET['g_r_id']);
    }
}

?>
