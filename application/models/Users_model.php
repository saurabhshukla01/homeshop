<?php
	class Users_model extends CI_Model{

		public function __construct(){
			$this->load->database();
		}

		public function register($enc_password , $user_uid){
			// User data array
			$data = array(
				'fname' => $this->input->post('fname'),
				'lname' => $this->input->post('lname'),
				'email' => $this->input->post('email'),
				'user_uid' => $user_uid,
                'password' => $enc_password,
			);

			// Insert user
			return $this->db->insert('users', $data);
		}

		public function login($email , $password){

			// Validate
			$this->db->where('email', $email);
			$this->db->where('password', $password);


			$result = $this->db->get('users');

			if($result->num_rows() == 1){

				return $result->row(0)->user_uid;

			} else {

				return false;
			}
		}

	}

?>