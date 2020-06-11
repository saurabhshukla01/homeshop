<?php
	class Admin extends CI_Controller{

		public function dashboard(){

			if($this->session->userdata('logged_in')){

				$this->load->view('common/admin/admin-header');
				$this->load->view('admin/index');
				$this->load->view('common/admin/admin-footer');
			}
			else{
				redirect('admin/login');
			}
		}


		public function register(){

			$data['title'] = 'Sign Up';

			$this->form_validation->set_rules('fname', 'First Name', 'required');
			$this->form_validation->set_rules('lname', 'Last Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

			if($this->form_validation->run() === FALSE){

				$this->load->view('admin/auth/register',$data);

			} else {

				$admin_uid = uniqid();
				// Encrypt password
				$enc_password = md5($this->input->post('password'));

				$this->Admin_model->register($enc_password , $admin_uid);

				// Set message
				//$this->session->set_flashdata('user_registered', 'You are now registered and can log in');

				redirect('admin/dashboard');
			}
		}

		public function login(){

			$data['title'] = 'User Login Page';

			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if($this->form_validation->run() === FALSE){

				$this->load->view('admin/auth/login',$data);
				
			} else {
				
				// Get email
				$email = $this->input->post('email');
				// Get and encrypt the password
				$password = md5($this->input->post('password'));

				// Login user
				$admin_uid = $this->Admin_model->login($email , $password);

				if($admin_uid){
					//echo $admin_uid;
					//die();
					// Create session
					$admin_data = array(
						'admin_uid' => $admin_uid,
						'email' => $email,
						'logged_in' => true
					);

					$this->session->set_userdata($admin_data);

					// Set message
					//$this->session->set_flashdata('user_loggedin', 'You are now logged in');

					redirect('admin/dashboard');

				} else {

					// Set message
					//$this->session->set_flashdata('login_failed', 'Login is invalid');

					redirect('admin/login');
				}		
			}
		}

		public function logout(){
			
			// Unset user data
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('admin_uid');
			$this->session->unset_userdata('email');
			echo "logout";

			// Set message
			//$this->session->set_flashdata('user_loggedout', 'You are now logged out');

			redirect('admin/login');
		}

		public function forgot()
		{
			$this->load->view('admin/auth/forgot');
		}

		public function table()
		{
			$this->load->view('common/admin/admin-header');
			$this->load->view('admin/table');
			$this->load->view('common/admin/admin-footer');
		} 

		public function blank()
		{
			$this->load->view('common/admin/admin-header');
			$this->load->view('admin/blank');
			$this->load->view('common/admin/admin-footer');
		}

		public function investment()
		{
			$this->load->view('common/admin/admin-header');
			$this->load->view('admin/investment');
			$this->load->view('common/admin/admin-footer');
		}

		public function transactions()
		{
			$this->load->view('common/admin/admin-header');
			$this->load->view('admin/transactions');
			$this->load->view('common/admin/admin-footer');
		}

		public function chart()
		{
			$this->load->view('common/admin/admin-header');
			$this->load->view('admin/chart');
			$this->load->view('common/admin/admin-footer');
		}
		

		public function reset_password()
		{
			$this->load->view('admin/auth/reset-password');
		}

		public function table1()
		{
			$this->load->view('admin/table1');
		}
	}


?>
