<?php
	class Adminpage extends CI_Controller{


		public function index(){


				$this->load->view('common/admin/admin-header');
				$this->load->view('admin/pages/index');
				$this->load->view('common/admin/admin-footer');

		}

		public function sales(){


				$this->load->view('common/admin/admin-header');
				$this->load->view('admin/pages/sales');
				$this->load->view('common/admin/admin-footer');

		}

		public function register(){

			echo "Its is Users Register page After some time Its is pending";

		}


		public function feedback(){

			echo "Its is feedback for homeshop 18";

		}


		public function members(){


			$this->load->view('common/admin/admin-header');
			$this->load->view('admin/pages/members');
			$this->load->view('common/admin/admin-footer');

		}

		public function bankaccount(){


			$this->load->view('common/admin/admin-header');
			$this->load->view('admin/pages/bankaccount');
			$this->load->view('common/admin/admin-footer');

		}

		public function report(){


			$this->load->view('common/admin/admin-header');
			$this->load->view('admin/pages/report');
			$this->load->view('common/admin/admin-footer');

		}

		public function analysis(){


			$this->load->view('common/admin/admin-header');
			$this->load->view('admin/pages/analysis');
			$this->load->view('common/admin/admin-footer');

		}
	}

?>