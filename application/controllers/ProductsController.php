<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*
*/
class ProductsController extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
     	$this->load->model('ProductModel');
	}
	function index(){
		$data=$this->ProductModel->retrieveProducts();
		$this->load->view('include/header.inc.php');
		$this->load->view('Products/ProdcutsDetailView',array('data'=>$data));
		$this->load->view('include/footer.inc.php');
	}
	function insertFormView(){
        
		$this->load->view('include/header.inc.php');
		$this->load->view('Products/ProdcutsView');
		$this->load->view('include/footer.inc.php');
	}
	function insertForm(){
		$error_product_name='';
        $error = false;
        if(isset($_POST['add'])){	
        	if (empty($_POST['product_name'])) {
                $error_product_name = 'لطفاً اسم جنس را وارد نماید';
                $error = true;
            }
        }
        if(!$error){
            $failed_data=array(
                'product_name' => $_POST['product_name'],
                'create_at' => date('Y-m-d'),
            );
            $this->ProductModel->insertProductsForm($failed_data);
            redirect('ProductsController/index');
        }else{
            $this->load->view('include/header.inc.php');
            $this->load->view('Products/ProdcutsView',array(
                'error_product_name' => $error_product_name, ));
            $this->load->view('include/footer.inc.php');
        }

	}

	function editProducts(){
		$user_id = $_GET['id'];
		$data=$this->ProductModel->retrieveProductsById($user_id);
		$this->load->view('include/header.inc.php');
		$this->load->view('Products/ProductsEditView',  array('data' => $data ));
		$this->load->view('include/footer.inc.php');
	}
	function editProductsForm(){
		$error_product_name='';
        $error = false;
        if(isset($_POST['add'])){   
            if (empty($_POST['product_name'])) {
                $error_product_name = 'لطفاً اسم جنس را وارد نماید';
                $error = true;
            }
        }
        if(!$error){
            $failed_data=array(
                'product_name' => $_POST['product_name'],
                'update_at' => date('Y-m-d'),
            );
            $product_id = $_POST['product_id'];
            $this->ProductModel->updateProducts($product_id,$failed_data);
            redirect('ProductsController/index');
        }else{
            $this->load->view('include/header.inc.php');
            $this->load->view('Products/ProdcutsView',array(
                'error_product_name' => $error_product_name, ));
            $this->load->view('include/footer.inc.php');
        }
	}
	function removeProducts(){
	    $id=$_GET['id'];
	    $this->ProductModel->removeProducts($id);
	    redirect('ProductsController/index');
 	}
}

?>
