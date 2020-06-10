<?php
	class Admin_model extends CI_Model{

		public function __construct(){
			$this->load->database();
		}

		public function register($enc_password , $admin_uid){
			// User data array
			$data = array(
				'fname' => $this->input->post('fname'),
				'lname' => $this->input->post('lname'),
				'email' => $this->input->post('email'),
				'admin_uid' => $admin_uid,
                'password' => $enc_password,
			);

			// Insert user
			return $this->db->insert('admins', $data);
		}

		public function login($email , $password){

			// Validate
			$this->db->where('email', $email);
			$this->db->where('password', $password);


			$result = $this->db->get('admins');

			if($result->num_rows() == 1){

				return $result->row(0)->admin_uid;

			} else {

				return false;
			}
		}

	}