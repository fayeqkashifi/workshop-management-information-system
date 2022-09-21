<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*
*/
class GeneratorController extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
        $this->load->model('GeneratorDetailRegisterModel');

	}
	function index(){
		//$data=$this->admin_model->getadmin();
		$this->load->view('include/header.inc.php');
		$this->load->view('GeneratorView');
		$this->load->view('include/footer.inc.php');
	}
	function insertForm(){
		$error_g_r_date = $error_g_r_code=$error_g_r_generator_location=$error_g_r_serial_number=$error_g_r_engine_model=$error_g_s_generator_type=$error_g_s_generator_capacity=$error_g_s_photo='';
        $error = false;
        if(isset($_POST['g_r_date'])){
        	if (empty($_POST['g_r_date'])) {
                $error_g_r_date = 'لطفاً اسم خود را وارد نماید';
                $error = true;
            }
            if (empty($_POST['g_r_code'])) {
                $error_g_r_code = 'لطفاً تخلص خود را وارد نماید';
                $error = true;
            }
            if (empty($_POST['g_r_generator_location'])) {
                $error_g_r_generator_location = 'لطفاً نام پدر خود را وارد نماید';
                $error = true;
            }
            if (empty($_POST['g_r_serial_number'])) {
                $error_g_r_serial_number = 'لطفاً ایمیل خود را وارد نماید';
                $error = true;
            }

            if (empty($_POST['g_r_engine_model'])) {
                $error_g_r_engine_model = 'لطفاً ولایت خود را وارد نماید';
                $error = true;
            }
            if (empty($_POST['g_s_generator_capacity'])) {
                $error_g_s_generator_capacity = 'لطفاً سن خود را وارد نماید';
                $error = true;
            }
             if (empty($_POST['g_s_generator_type'])) {
                $error_g_s_generator_type = 'لطفاً جنسیت خود را وارد نماید';
                $error = true;
            }
             // ------------------------ Image validation ---------------
            if (isset($_FILES["g_s_photo"]) and $_FILES["g_s_photo"]["error"] == UPLOAD_ERR_OK) {
                if ($_FILES["g_s_photo"]["type"] != "image/jpeg" && $_FILES["g_s_photo"]["type"] != "image/png") {
                    $error_g_s_photo = "Please select jpeg| jpg| png files";
                    $error = true;
                }
            } else {
                switch ($_FILES["g_s_photo"]["error"]) {
                    case UPLOAD_ERR_INI_SIZE:
                        $error_g_s_photo = "This photo has larger size";
                        $error = true;
                        break;
                    case UPLOAD_ERR_FORM_SIZE:
                        $error_g_s_photo = "The photo is larger than the script allows.";
                        $error = true;
                        break;
                    case UPLOAD_ERR_NO_FILE:
//                        $error_photo = "شما هیج عکس انتخاب نکرده اید";
//                        $error = true;
                        break;
                    default:
                        $error_g_s_photo = "Please contact to server manager !";
                        $error = true;
                }
            }
            // ---------------------------------------------------------
        }
         if(!$error){
			 $destination = "./Uploads/Generator/";
			if (!empty($_FILES["g_s_photo"]) and $_FILES["g_s_photo"]["error"] == UPLOAD_ERR_OK){
                move_uploaded_file($_FILES['g_s_photo']['tmp_name'], $destination . ($_FILES['g_s_photo']['name']) . date('his') . "." . substr($_FILES['g_s_photo']['type'], 6, 5));
				$image = "/Uploads/Generator/" . ($_FILES['g_s_photo']['name']) . date('his') . "." . substr($_FILES['g_s_photo']['type'], 6, 5);
            }if(empty($_FILES["g_s_photo"]["name"])){
                $image = "";
            }
                                            ////// photo resize //////
                                            $config['image_library'] = 'gd2';
                                            $config['source_image'] = $image;
                                            $config['create_thumb'] = false;
                                            $config['maintain_ratio'] = false;
                                            $config['rotation_angle'] = '90';
                                                                          
                                            $data = getimagesize($image);
                                            $width= $data[0];
                                            $height= $data[1];
                                            $config['height']       = 717;
                                            $config['width']         = 1209;
                                            $this->load->library('image_lib', $config);
                                            if($height > $width){
                                                $this->image_lib->rotate();
                                                
                                            }
                                            $this->image_lib->resize();
                                            ///// photo resize //////

                                						
            $failed_data=array(
                'g_r_date' => $_POST['g_r_date'],
                'g_r_code' => $_POST['g_r_code'],
                'g_r_generator_location' => $_POST['g_r_generator_location'],
                'g_r_serial_number' => $_POST['g_r_serial_number'],
                'g_r_engine_model' => $_POST['g_r_engine_model'],
                'g_s_generator_type' => $_POST['g_s_generator_type'],
				'g_s_generator_capacity'=>$_POST['g_s_generator_capacity'],
                'g_s_photo'=>$image,
                'create_at' => date('Y-m-d'),

            );
          $this->admin_model->insertadmin($failed_data);
          redirect('adminController/index');
           }else{
            $this->load->view('include/header.inc.php');
            $this->load->view('adminAdd', array(
                'error_g_r_date' => $error_g_r_date,
                'error_g_r_code' => $error_g_r_code,
                'error_g_r_generator_location'=>$error_g_r_generator_location,
                'error_g_r_serial_number' => $error_g_r_serial_number,
				'error_g_r_engine_model' => $error_g_r_engine_model,
				'error_g_s_photo'=>$error_g_s_photo,
                'error_g_s_generator_type'=>$error_g_s_generator_type,
                'error_g_s_generator_capacity'=>$error_g_s_generator_capacity,
            ));
            $this->load->view('include/footer.inc.php');
        }
	}
    function completed(){
        $id = $_GET['id'];
        $data = array('g_r_status' => 1 );
        $this->GeneratorDetailRegisterModel->updateGeneratorDetailRegister($id,$data);
        redirect('GeneratorDetailController');
    }

}

?>
