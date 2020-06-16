<?php
	class Users extends CI_Controller{

		public function register(){

			$data['title'] = 'Sign Up';

			$this->form_validation->set_rules('fname', 'First Name', 'required');
			$this->form_validation->set_rules('lname', 'Last Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

			if($this->form_validation->run() === FALSE){

				$this->load->view('users/auth/register',$data);

			} else {

				$user_uid = uniqid();
				// Encrypt password
				$enc_password = md5($this->input->post('password'));

				$this->Users_model->register($enc_password , $user_uid);

				// Set message
				//$this->session->set_flashdata('user_registered', 'You are now registered and can log in');

				redirect('/');
			}
		}

		public function login(){

			$data['title'] = 'User Login Page';

			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if($this->form_validation->run() === FALSE){

				$this->load->view('users/auth/login',$data);
				
			} else {
				
				// Get email
				$email = $this->input->post('email');
				// Get and encrypt the password
				$password = md5($this->input->post('password'));

				// Login user
				$user_uid = $this->Users_model->login($email , $password);

				if($user_uid){
					//echo $admin_uid;
					//die();
					// Create session
					$user_data = array(
						'user_uid' => $user_uid,
						'email' => $email,
						'logged_in' => true
					);

					$this->session->set_userdata($user_data);

					// Set message
					//$this->session->set_flashdata('user_loggedin', 'You are now logged in');

					redirect('/');

				} else {

					// Set message
					//$this->session->set_flashdata('login_failed', 'Login is invalid');

					redirect('users/login');
				}		
			}
		}


		public function logout(){

			// Unset user data
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('user_uid');
			$this->session->unset_userdata('email');
			//echo "logout";

			// Set message
			//$this->session->set_flashdata('user_loggedout', 'You are now logged out');

			redirect('users/login');;

		}

		public function forgot()
		{
			$this->load->view('users/auth/forgot');
		}

		public function reset_password(){

			$this->load->view('users/auth/reset-password');

		}

	}

?>