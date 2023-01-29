<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ecommers extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Ecommers_model');
	}
	public function index()
	{
		$data['result'] = $this->Ecommers_model->getAllData();
		$data['result_ecomm'] = $this->Ecommers_model->getEcommData();
		$data['result_new_prd'] = $this->Ecommers_model->getnewProductionData();
		$data['news'] = $this->Ecommers_model->getNewsData();
		$view   =   "ecomm/home_page";
		$data['pvalue'] =   ["page_title"  => "Home", "view"   =>  $view];
		$this->loadecomView($data);
	}
	public function viewDetails(){
		if (!$this->input->is_ajax_request()) { exit('No direct script access allowed'); }
		$postArr = $this->input->post();
		$data['result_ecomm'] = $this->Ecommers_model->getbestSelling(["id"=>$postArr['id']]);
		$this->load->view('ecomm/model_view',$data);
	}
	public function addCart(){
		$postVal = $this->input->post();
		if(isset($postVal['submit'])){
			$postVal['ip'] = $_SERVER['REMOTE_ADDR'];
			$returnVal = $this->Ecommers_model->addCartProduct($postVal);
			$this->setSuccessFailMessage($returnVal);
			if($returnVal['status']==STATUS_SUCCESS){
				redirect(WEB_URL.'ecommers/cartDetails');
			}else{
				redirect(WEB_URL.'ecommers/index');
			}

		}
	}

	public function productDetails()
	{
		$data['id'] = $postVal['id'] = decrypt_url($this->uri->segment(3));
		$data['result_ecomm'] = $this->Ecommers_model->getbestSelling($postVal);
		$data['comment'] = $this->Ecommers_model->getComment($postVal);
		$postVal = $this->input->post();
		if(isset($postVal['submit']) && ($postVal['submit']=="Submit")){
			$postVal['ip'] = $_SERVER['REMOTE_ADDR'];
			$postVal['browser_name'] = $_SERVER['HTTP_USER_AGENT'];
			$postVal['host_name'] = $_SERVER['HTTP_ORIGIN'];
			$returnVal = $this->Ecommers_model->addProgramComment($postVal);
			$this->setSuccessFailMessage($returnVal);
			if($returnVal['status']==STATUS_SUCCESS){
				redirect(WEB_URL.'ecommers/productDetails/'.encrypt_url($data['id']));
			}else{
				redirect(WEB_URL.'ecommers/productDetails/'.encrypt_url($data['id']));
			}

		}
		$view   =   "ecomm/product_details";
		$data['pvalue'] =   ["page_title"  => "Home", "view"   =>  $view];
		$this->loadecomView($data);
	}

	public function cartDetails()
	{
		$postVal['ip_address'] = $_SERVER['REMOTE_ADDR'];
		$data['cart_data'] = $this->Ecommers_model->getCartData($postVal);
		$view   =   "ecomm/cart_details";
		$data['pvalue'] =   ["page_title"  => "Cart Details", "view"   =>  $view];
		$this->loadecomView($data);
	}

	function updateremoveCart(){
		$postVal = $this->input->post();
		if(isset($postVal['id_product']) && ($postVal['id_product'] > 0)){
			$postVal['ip_address'] = $_SERVER['REMOTE_ADDR'];
			$returnVal = $this->Ecommers_model->updateCart($postVal);
			$this->setSuccessFailMessage($returnVal);
			echo 1;exit;
		}else{
			echo 0;exit;
		}
	}

	public function productGrid(){

		$data['result'] = $this->Ecommers_model->getAllData();
		$data['result_ecomm'] = $this->Ecommers_model->getEcommData();
		$data['result_new_prd'] = $this->Ecommers_model->getnewProductionData();
		$data['news'] = $this->Ecommers_model->getNewsData();
		$view   =   "ecomm/product_grid";
		$data['pvalue'] =   ["page_title"  => "Home", "view"   =>  $view];
		$this->loadecomView($data);
	}
}
