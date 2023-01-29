<?php
class Testcontroller extends CI_Controller
{
	function __construct()
	{
		parent::__construct(false);
		if(FALSE){/*Make it True after testing*/
			redirect(WEB_URL);
		}
		/*Default Session*/
		$this->session->set_userdata('default_precinct_id','all');
	}

	function checkInfo(){
		phpinfo(); exit();
	}

	function generatePDF()
	{
		$data = array();
		$this->load->library('Pdf');
		$data['contractResult'] = [
			'contract_number'=>'23432423432',
			'check_in'=>'07-05-2020',
			'unit_name'=>'23432423432',
			'erp_building_id'=>'123',
			'unit_key'=>'unit 134',
			'storage_name'=>'345',
			'o_first_name'=>'vinod',
			'o_last_name'=>'raju',
			't_first_name'=>'vinod',
			't_last_name'=>'raju',
			't_phone'=>'387468236423',
			'storage_booking_number'=>'123456789012',
			'description'=>'Test Storage Description',
			'duration'=>11,
			'check_out'=>'07-12-2020',
			'current_rent'=>'150000',
			'rent'=>'24500',
			'vat_amount'=>'2300',
			'deposit'=>'1200'

		];
		$this->load->view('test/pdf_generater', $data, true);exit;
		$html = $this->load->view('test/pdf_generater', $data, true);
		$filename = 'receipt_' .rand(1,100);
		$this->pdf->generate($html, $filename, '', 'A3');
	}

	public function testPDF(){
		$data = array();
		$this->load->library('Pdf');
		$html = $this->load->view('test/test_pdf', $data, true);
		$filename = 'receipt_' .rand(1,100);
		$this->pdf->generate($html, $filename, '', 'A4');
	}

	function testReceipt(){
		$data = array();
		$this->load->library('Pdfgenerator');
		$html = $this->load->view('test/test_pdf', $data, true);
		$filename = 'invoice_'.time();
		$this->pdfgenerator->generate($html, $filename, true, 'A4', 'portrait');
	}
}


?>
