<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*
*/
class UsersController extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
     	$this->load->model('userModel');
	}
	function index(){
		$data=$this->userModel->retrieveUsers();
		$this->load->view('include/header.inc.php');
		$this->load->view('UsersDetailView',array('data'=>$data));
		$this->load->view('include/footer.inc.php');
	}
	function insertFormView(){
		$this->load->view('include/header.inc.php');
		$this->load->view('UsersView');
		$this->load->view('include/footer.inc.php');
	}
	function insertForm(){
		$error_name=$error_last_name=$error_father_name=$error_photo=$error_signature_photo=$error_user_type='';
        $error = false;
        if(isset($_POST['addPerson'])){
        	if (empty($_POST['username'])) {
                $error_username = 'لطفاً اسم کاربری خود را درج نماید!';
                $error = true;
            }
            if (empty($_POST['user_type'])) {
                $error_privilege = 'لطفاً نوعیت شخص را وارد نماید!';
                $error = true;
            }
            if (empty($_POST['password'])) {
                $error_pass = 'لطفاً رمز عبور خود را وارد نماید!';
                $error = true;
            }
            if (empty($_POST['confirm_password'])) {
                $error_c_pass = 'لطفاً رمز عبور خود را تائید نماید!';
                $error = true;
            } else {
                if ($_POST['password'] != $_POST['confirm_password']) {
                    $error_c_pass = 'رمز عبور شما یکسان نیستند!';
                    $error = true;
                }
            }
			if (empty($_POST['person_id'])) {
                $error_personID = 'لطفاً هویت یا آی  خود را درج نماید!';
                $error = true;
            }
        	if (empty($_POST['name'])) {
                $error_name = 'لطفاً اسم خود را وارد نماید';
                $error = true;
            }
            if (empty($_POST['last_name'])) {
                $error_last_name = 'لطفاً تخلص خود را وارد نماید';
                $error = true;
            }
            if (empty($_POST['father_name'])) {
                $error_father_name = 'لطفاً نام پدر خود را وارد نماید';
                $error = true;
            }
            if (empty($_POST['photo'])) {
                $error_photo = 'لطفاً عکس خود را وارد نماید';
                $error = true;
            }

            if (empty($_POST['signature_photo'])) {
                $error_signature_photo = 'لطفاً عکس امضا خود را وارد نماید';
                $error = true;
            }
             // ------------------------ Image validation ---------------
            if (isset($_FILES["photo"]) and $_FILES["photo"]["error"] == UPLOAD_ERR_OK) {
                if ($_FILES["photo"]["type"] != "image/jpeg" && $_FILES["photo"]["type"] != "image/png") {
                    $error_photo = "Please select jpeg| jpg| png files";
                    $error = true;
                }
            } else {
                switch ($_FILES["photo"]["error"]) {
                    case UPLOAD_ERR_INI_SIZE:
                        $error_photo = "This photo has larger size";
                        $error = true;
                        break;
                    case UPLOAD_ERR_FORM_SIZE:
                        $error_photo = "The photo is larger than the script allows.";
                        $error = true;
                        break;
                    case UPLOAD_ERR_NO_FILE:
//                        $error_photo = "شما هیج عکس انتخاب نکرده اید";
//                        $error = true;
                        break;
                    default:
                        $error_photo = "Please contact to server manager !";
                        $error = true;
                }
            }
            // ---------------------------------------------------------
            // ------------------------ Image validation ---------------
            if (isset($_FILES["signature_photo"]) and $_FILES["signature_photo"]["error"] == UPLOAD_ERR_OK) {
                if ($_FILES["signature_photo"]["type"] != "image/jpeg" && $_FILES["signature_photo"]["type"] != "image/png") {
                    $error_signature_photo = "Please select jpeg| jpg| png files";
                    $error = true;
                }
            } else {
                switch ($_FILES["signature_photo"]["error"]) {
                    case UPLOAD_ERR_INI_SIZE:
                        $error_signature_photo = "This signature_photo has larger size";
                        $error = true;
                        break;
                    case UPLOAD_ERR_FORM_SIZE:
                        $error_signature_photo = "The signature_photo is larger than the script allows.";
                        $error = true;
                        break;
                    case UPLOAD_ERR_NO_FILE:
//                        $error_signature_photo = "شما هیج عکس انتخاب نکرده اید";
//                        $error = true;
                        break;
                    default:
                        $error_signature_photo = "Please contact to server manager !";
                        $error = true;
                }
            }
            // ---------------------------------------------------------
        }

         if(!$error){
            $destination = "./Uploads/Users/photo/";
			if (!empty($_FILES["photo"]) and $_FILES["photo"]["error"] == UPLOAD_ERR_OK){
                move_uploaded_file($_FILES['photo']['tmp_name'], $destination ."_USERNAME_".  $_POST['username']."_Date_".date("Y-m-d").'_Time_'.time("h-m-s").".".substr($_FILES['photo']['type'], 6, 5));
								$image = "/Uploads/Users/photo/_USERNAME_".  $_POST['username']."_Date_".date("Y-m-d").'_Time_'.time("h-m-s").".".substr($_FILES['photo']['type'], 6, 5);
            }if(empty($_FILES["photo"]["name"])){
                $image = "";
            }
                        ////// photo resize //////
						$config['image_library'] = 'gd2';
						$config['source_image'] = $image;
						$config['create_thumb'] = false;
						$config['maintain_ratio'] = false;
                         $config['rotation_angle'] = 'hor';
						$config['height']       = 720;
						$config['width']         = 1024;

						$this->load->library('image_lib', $config);
						$this->image_lib->resize();
						///// photo resize //////

            $destin = "./Uploads/Users/signature_photo/";
            if (!empty($_FILES["signature_photo"]) and $_FILES["signature_photo"]["error"] == UPLOAD_ERR_OK){
                move_uploaded_file($_FILES['signature_photo']['tmp_name'], $destin ."_USERNAME_".  $_POST['username']."_Date_".date("Y-m-d").'_Time_'.time("h-m-s").".".substr($_FILES['signature_photo']['type'], 6, 5));
                $signature_image = "/Uploads/Users/signature_photo/_USERNAME_".  $_POST['username']."_Date_".date("Y-m-d").'_Time_'.time("h-m-s").".".substr($_FILES['signature_photo']['type'], 6, 5);
            }if(empty($_FILES["signature_photo"]["name"])){
                $signature_image = "";
            }
						////// photo resize //////
						$config['image_library'] = 'gd2';
						$config['source_image'] = $signature_image;
						$config['create_thumb'] = false;
						$config['maintain_ratio'] = false;
						$config['height']       = 720;
						$config['width']         = 1024;

						$this->load->library('image_lib', $config);
						$this->image_lib->resize();
						///// photo resize //////

            $failed_data=array(
                'username'=> $_POST['username'],
                'password' => sha1($_POST['password']),
                'user_type'=> $_POST['user_type'],
                'name' => $_POST['name'],
                'last_name' => $_POST['last_name'],
                'father_name' => $_POST['father_name'],
                'signature_photo'=>$signature_image,
                'photo'=>$image,
                'zone_type'=>$_POST['zone_type'],
                'create_at' => date('Y-m-d'),

            );
          $this->userModel->insertUserForm($failed_data);
          redirect('UsersController/index');
           }else{
            $this->load->view('include/header.inc.php');
            $this->load->view('personAdd', array(
                'error_username' => $error_username,
                'error_pass' => $error_pass,
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

	function editUser(){
		$user_id = $_GET['id'];
		$data=$this->userModel->retrieveUsersById($user_id);
		$this->load->view('include/header.inc.php');
		$this->load->view('UsersEditView',  array('data' => $data ));
		$this->load->view('include/footer.inc.php');
	}
	function editUserForm(){
		$error_name=$error_last_name=$error_father_name=$error_photo=$error_signature_photo=$error_user_type='';
        $error = false;
        if(isset($_POST['addPerson'])){
        	if (empty($_POST['username'])) {
                $error_username = 'لطفاً اسم کاربری خود را درج نماید!';
                $error = true;
            }
            if (empty($_POST['user_type'])) {
                $error_privilege = 'لطفاً نوعیت شخص را وارد نماید!';
                $error = true;
            }
            if (empty($_POST['password'])) {
                $error_pass = 'لطفاً رمز عبور خود را وارد نماید!';
                $error = true;
            }
            if (empty($_POST['confirm_password'])) {
                $error_c_pass = 'لطفاً رمز عبور خود را تائید نماید!';
                $error = true;
            } else {
                if ($_POST['password'] != $_POST['confirm_password']) {
                    $error_c_pass = 'رمز عبور شما یکسان نیستند!';
                    $error = true;
                }
            }
			if (empty($_POST['person_id'])) {
                $error_personID = 'لطفاً هویت یا آی  خود را درج نماید!';
                $error = true;
            }
        	if (empty($_POST['name'])) {
                $error_name = 'لطفاً اسم خود را وارد نماید';
                $error = true;
            }
            if (empty($_POST['last_name'])) {
                $error_last_name = 'لطفاً تخلص خود را وارد نماید';
                $error = true;
            }
            if (empty($_POST['father_name'])) {
                $error_father_name = 'لطفاً نام پدر خود را وارد نماید';
                $error = true;
            }
            if (empty($_POST['photo'])) {
                $error_photo = 'لطفاً عکس خود را وارد نماید';
                $error = true;
            }

            if (empty($_POST['signature_photo'])) {
                $error_signature_photo = 'لطفاً عکس امضا خود را وارد نماید';
                $error = true;
            }
             // ------------------------ Image validation ---------------
            if (isset($_FILES["photo"]) and $_FILES["photo"]["error"] == UPLOAD_ERR_OK) {
                if ($_FILES["photo"]["type"] != "image/jpeg" && $_FILES["photo"]["type"] != "image/png") {
                    $error_photo = "Please select jpeg| jpg| png files";
                    $error = true;
                }
            } else {
                switch ($_FILES["photo"]["error"]) {
                    case UPLOAD_ERR_INI_SIZE:
                        $error_photo = "This photo has larger size";
                        $error = true;
                        break;
                    case UPLOAD_ERR_FORM_SIZE:
                        $error_photo = "The photo is larger than the script allows.";
                        $error = true;
                        break;
                    case UPLOAD_ERR_NO_FILE:
//                        $error_photo = "شما هیج عکس انتخاب نکرده اید";
//                        $error = true;
                        break;
                    default:
                        $error_photo = "Please contact to server manager !";
                        $error = true;
                }
            }
            // ---------------------------------------------------------
            // ------------------------ Image validation ---------------
            if (isset($_FILES["signature_photo"]) and $_FILES["signature_photo"]["error"] == UPLOAD_ERR_OK) {
                if ($_FILES["signature_photo"]["type"] != "image/jpeg" && $_FILES["signature_photo"]["type"] != "image/png") {
                    $error_signature_photo = "Please select jpeg| jpg| png files";
                    $error = true;
                }
            } else {
                switch ($_FILES["signature_photo"]["error"]) {
                    case UPLOAD_ERR_INI_SIZE:
                        $error_signature_photo = "This signature_photo has larger size";
                        $error = true;
                        break;
                    case UPLOAD_ERR_FORM_SIZE:
                        $error_signature_photo = "The signature_photo is larger than the script allows.";
                        $error = true;
                        break;
                    case UPLOAD_ERR_NO_FILE:
//                        $error_signature_photo = "شما هیج عکس انتخاب نکرده اید";
//                        $error = true;
                        break;
                    default:
                        $error_signature_photo = "Please contact to server manager !";
                        $error = true;
                }
            }
            // ---------------------------------------------------------
        }

         if(!$error){
					 $destination = "./Uploads/Users/photo/";
		             if (!empty($_FILES["photo"]) and $_FILES["photo"]["error"] == UPLOAD_ERR_OK){
    					move_uploaded_file($_FILES['photo']['tmp_name'], $destination ."_USERNAME_".  $_POST['username']."_Date_".date("Y-m-d").'_Time_'.time("h-m-s").".".substr($_FILES['photo']['type'], 6, 5));
    					$image = "./Uploads/Users/photo/_USERNAME_".  $_POST['username']."_Date_".date("Y-m-d").'_Time_'.time("h-m-s").".".substr($_FILES['photo']['type'], 6, 5);
					 }if(empty($_FILES["photo"]["name"])){
						 $image = "";
					 }
					 ////// photo resize //////
					 $config['image_library'] = 'gd2';
					 $config['source_image'] = $image;
					 $config['create_thumb'] = TRUE;
					 $config['maintain_ratio'] = TRUE;
					 $config['width']         = 1024;
					 $config['height']       = 720;

					 $this->load->library('image_lib', $config);
					 $this->image_lib->resize();
					 ///// photo resize //////

					 $destin = "./Uploads/Users/signature_photo/";
					 if (!empty($_FILES["signature_photo"]) and $_FILES["signature_photo"]["error"] == UPLOAD_ERR_OK){
							 move_uploaded_file($_FILES['signature_photo']['tmp_name'], $destin ."_USERNAME_".  $_POST['username']."_Date_".date("Y-m-d").'_Time_'.time("h-m-s").".".substr($_FILES['signature_photo']['type'], 6, 5));
							 $signature_image = "./Uploads/Users/signature_photo/_USERNAME_".  $_POST['username']."_Date_".date("Y-m-d").'_Time_'.time("h-m-s").".".substr($_FILES['signature_photo']['type'], 6, 5);
					}if(empty($_FILES["signature_photo"]["name"])){
						 $signature_image = "";
					}
        			////// photo resize //////
							$config['image_library'] = 'gd2';
							$config['source_image'] = $signature_image;
							$config['create_thumb'] = TRUE;
							$config['maintain_ratio'] = TRUE;
							$config['width']         = 1024;
							$config['height']       = 720;

							$this->load->library('image_lib', $config);
							$this->image_lib->resize();
        			 ///// photo resize //////
							       if($image=="" && $signature_image=="") {
                        $failed_data=array(
                        'username'=> $_POST['username'],
                        'password' => sha1($_POST['password']),
                        'user_type'=> $_POST['user_type'],
                        'name' => $_POST['name'],
                        'last_name' => $_POST['last_name'],
                        'father_name' => $_POST['father_name'],
                        'zone_type'=>$_POST['zone_type'],
                        'update_at' => date('Y-m-d'),
                        );
                        $user_id = $_POST['user_id'];
                        $this->userModel->updateUser($user_id,$failed_data);
                        redirect('UsersController/index');
                    }elseif($image=="") {
                        $failed_data=array(
                        'username'=> $_POST['username'],
                        'password' => sha1($_POST['password']),
                        'user_type'=> $_POST['user_type'],
                        'name' => $_POST['name'],
                        'last_name' => $_POST['last_name'],
                        'father_name' => $_POST['father_name'],
                        'signature_photo'=>$signature_image,
                        'zone_type'=>$_POST['zone_type'],
                        'update_at' => date('Y-m-d'),
                        );
												$file_signature =  explode("'", $_POST['previous_signature_photo']);
												unlink($file_signature[0]);
                        $user_id = $_POST['user_id'];
                        $this->userModel->updateUser($user_id,$failed_data);
                        redirect('UsersController/index');
                    }elseif($signature_image=="") {
                        $failed_data=array(
                        'username'=> $_POST['username'],
                        'password' => sha1($_POST['password']),
                        'user_type'=> $_POST['user_type'],
                        'name' => $_POST['name'],
                        'last_name' => $_POST['last_name'],
                        'father_name' => $_POST['father_name'],
                        'photo'=>$image,
                        'zone_type'=>$_POST['zone_type'],
                        'update_at' => date('Y-m-d'),
                        );
                        $file =  explode("'", $_POST['previous_photo']);
                        unlink($file[0]);
                        $user_id = $_POST['user_id'];
                        $this->userModel->updateUser($user_id,$failed_data);
                        redirect('UsersController/index');
                    };


                $failed_data=array(
                    'username'=> $_POST['username'],
                    'password' => sha1($_POST['password']),
                    'user_type'=> $_POST['user_type'],
                    'name' => $_POST['name'],
                    'last_name' => $_POST['last_name'],
                    'father_name' => $_POST['father_name'],
                    'signature_photo'=>$signature_image,
                    'photo'=>$image,
                    'zone_type'=>$_POST['zone_type'],
                    'update_at' => date('Y-m-d'),
                );
                $user_id = $_POST['user_id'];
                $this->userModel->updateUser($user_id,$failed_data);
                ///file delete ///
                $file =  explode("'", $_POST['previous_photo']);
                unlink($file[0]);
								$file_signature =  explode("'", $_POST['previous_signature_photo']);
								unlink($file_signature[0]);
                ///file delete ///
                redirect('UsersController/index');
           }else{
                $this->load->view('include/header.inc.php');
                $this->load->view('personAdd', array(
                    'error_username' => $error_username,
                    'error_pass' => $error_pass,
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
	function removeUser(){
	    $id=$_GET['id'];
	    $this->userModel->removeUser($id);
	    redirect('UsersController/index');
 	}
}

?>
