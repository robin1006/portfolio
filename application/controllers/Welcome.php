<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Welcome_model');
	}
	public function index()
	{
		$view   =   "welcome/welcome_view";
		$data['pvalue'] =   ["page_title"  => "Home", "view"   =>  $view];
		$this->loadView($data);
	}

	public function contactUs()
	{
		$postVal = $this->input->post();
		if(isset($postVal['submit']) && ($postVal['submit']=="Send Message")){
		$postVal['ip'] = $_SERVER['REMOTE_ADDR'];
		$postVal['browser_name'] = $_SERVER['HTTP_USER_AGENT'];
		$postVal['host_name'] = $_SERVER['HTTP_ORIGIN'];
		$returnVal = $this->Welcome_model->addProgramComment($postVal);
			$this->setSuccessFailMessage($returnVal);
			if($returnVal['status']==STATUS_SUCCESS){
				redirect(WEB_URL.'welcome/contactUs');
			}else{
				redirect(WEB_URL.'welcome/contactUs');
			}

		}
		$view   =   "contact_us";
		$data['pvalue'] =   ["page_title"  => "Contact Us", "view"   =>  $view];
		$this->loadView($data);
	}
}
