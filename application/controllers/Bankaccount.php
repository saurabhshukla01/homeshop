<?php
	class Bankaccount extends CI_Controller{

		public function __construct()
	    {
	        parent::__construct();
	        $this->load->library('pdf');
	    }

		public function index(){

			if($this->session->userdata('logged_in')){

				$data['title'] = 'Show Products Pages';

				$data['accounts'] = $this->Bank_model->get_accounts();

				$this->load->view('common/admin/admin-header');
				$this->load->view('admin/bank/bankaccount', $data);
				$this->load->view('common/admin/admin-footer');

			}else{

				redirect('admin/login');

			}

		}

		public function checkout(){

			if($this->session->userdata('logged_in')){

				$this->form_validation->set_rules('fname', 'First Name', 'required');
				$this->form_validation->set_rules('lname', 'Last Name', 'required');
				$this->form_validation->set_rules('username', 'Username', 'required');
				$this->form_validation->set_rules('email', 'Email', 'required');
				$this->form_validation->set_rules('address', 'Address', 'required');
				$this->form_validation->set_rules('country', 'Country', 'required');
				$this->form_validation->set_rules('state', 'State', 'required');
				$this->form_validation->set_rules('zipcode', 'Zipcode', 'required');
				$this->form_validation->set_rules('address_status', 'Address Status', 'required');
				$this->form_validation->set_rules('payment_type', 'Payment Type', 'required');
				$this->form_validation->set_rules('card_name', 'Card Holder Name ', 'required');
				$this->form_validation->set_rules('card_number', 'Card Number', 'required');
				$this->form_validation->set_rules('exp_date', 'Bank Card Expaire date', 'required');
				$this->form_validation->set_rules('cvv', 'Bank CVV', 'required');

				if($this->form_validation->run() === FALSE){

					$this->load->view('common/admin/admin-header');
					$this->load->view('admin/bank/checkout');
					$this->load->view('common/admin/admin-footer');

				}else{

				    $bank_uid = uniqid();

					$this->Bank_model->get_bank_details($bank_uid);

					redirect('bankaccount/');
				}

			}else{

				redirect('admin/login');
				
			}

		}

		public function details($bank_uid)
	    {
	        
	        if ($this->session->userdata('logged_in')) {
	            
	            $data['accounts'] = $this->Bank_model->get_account_by_uid($bank_uid);

	            $this->load->view('common/admin/admin-header');
	            $this->load->view('admin/bank/details', $data);
	            $this->load->view('common/admin/admin-footer');


	        }else{

	            redirect('admin/login');
	        }
	        
	    }

		public function pdfdetails($bank_uid)
	    {
	    	if ($this->session->userdata('logged_in')) {

		        $html_content = '<h3 align="center">Single Account Details In pdf file</h3>';
		        $html_content .= $this->Bank_model->fetch_single_details($bank_uid);
		        //print_r($html_content);die();
		        $this->pdf->loadHtml($html_content);
		        $this->pdf->render();
		        $this->pdf->stream("".$bank_uid.".pdf", array("Attachment"=>0));

		    } else {

		    	redirect('admin/login');
		    	
		    }
	    }
	
	}
?>