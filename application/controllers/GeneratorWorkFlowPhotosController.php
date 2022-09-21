<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*
*/
class GeneratorWorkFlowPhotosController extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		// $this->load->mode.l('');
		$this->load->model('GeneratorDetailRegisterModel');
	}
	function index(){
		$g_r_id = $_GET['id'];
		$this->load->view('include/header.inc.php');
		$this->load->view('GeneratorWorkFlowPhotosView',array('g_r_id'=>$g_r_id ));
		$this->load->view('include/footer.inc.php');
	}



	function insertForm(){
		$error_g_r_date = $errorـg_w_p_comment=$error_g_s_photo='';
				$error = false;
				if(isset($_POST['add'])){
					if (empty($_POST['g_w_p_comment'])) {
								$error_g_w_p_comment = 'لطفاً اسم خود را وارد نماید';
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

				 	//////// فولدر بندی /////////

				 	$data = $this->GeneratorDetailRegisterModel->retrieveGeneratorDetailRegisterById($_POST['g_r_id']);
				 	$id = null;
				 	$enginModel = null;
				 	$capacity = null ;
				 	foreach ($data as $row) {
				 		$id = $row->g_r_id;
				 		$location = $row->g_r_generator_location;
				 		$enginModel = $row->g_r_engine_model;
				 		$capacity = $row->g_s_generator_capacity;
				 		//mkdir("./Uploads/GeneratorPhotos/'".$location."'");

				 		if(!(is_dir("./Uploads/GeneratorPhotos/Model_".$enginModel."_Capacity_".$capacity."_ID_".$row->g_r_id))){
				 			mkdir("./Uploads/GeneratorPhotos/Model_".$enginModel."_Capacity_".$capacity."_ID_".$row->g_r_id);
				 		}
				 	}
					$destination = "./Uploads/GeneratorPhotos/Model_".$enginModel."_Capacity_".$capacity."_ID_".$id;

					if (!empty($_FILES["g_s_photo"]) and $_FILES["g_s_photo"]["error"] == UPLOAD_ERR_OK){
						move_uploaded_file($_FILES['g_s_photo']['tmp_name'], $destination . "/Imge_".$enginModel."_Capacity_".$capacity."_ID_".$id."_Date_".date("Y-m-d").'_Time_'.time("h-m-s").".".substr($_FILES['g_s_photo']['type'], 6, 5));
						$image = "./Uploads/GeneratorPhotos/Model_".$enginModel."_Capacity_".$capacity."_ID_".$id."/Imge_".$enginModel."_Capacity_".$capacity."_ID_".$id."_Date_".date("Y-m-d").'_Time_'.time("h-m-s").".".substr($_FILES['g_s_photo']['type'], 6, 5);
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
								'g_w_p_comment'=>$_POST['g_w_p_comment'],
								'g_w_photo'=>$image,
								'g_r_id'=>$_POST['g_r_id'],
								'create_at' => date('Y-m-d'),
						);
						$g_r_id = $this->GeneratorDetailRegisterModel->insertGeneratorWorkflowPhotosForm($failed_data);
						$lock_data = array(
								'name' =>  $_SESSION['name'],
								'last_name' => $_SESSION['last_name'],
								'father_name' => $_SESSION['father_name'],
								'photo'=> $_SESSION['image'],
								'signature_photo'=> $_SESSION['signature_image'],
								'g_r_id' =>$_POST['g_r_id'],
								'create_at' => date('Y-m-d'),
						);
						$this->GeneratorDetailRegisterModel->insertGeneratorRegisterForm_LOCK_FILE($lock_data);
						redirect('GeneratorDetailInfoController/index');
					 }else{
						$this->load->view('include/header.inc.php');
						$this->load->view('GeneratorWorkFlowPhotosView', array(
							'$error_g_w_p_comment' => $error_g_w_p_comment,
							'$error_g_s_photo'=>$error_g_s_photo,

						));
						$this->load->view('include/footer.inc.php');
		}
	}


}

?>
