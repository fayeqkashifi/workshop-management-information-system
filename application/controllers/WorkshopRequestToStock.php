<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*
*/
class WorkshopRequestToStockController extends MY_Controller
{
	function __construct()
	{
		parent::__construct();

	}
	function index(){
		//$data=$this->admin_model->getadmin();
		$this->load->view('include/header.inc.php');
		$this->load->view('WorkshopRequestToStockView');
		$this->load->view('include/footer.inc.php');
	}

}

?>
