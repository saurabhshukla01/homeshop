<?php
	class Bank_model extends CI_Model{

		public function __construct(){
			$this->load->database();
		}

		public function get_accounts(){

			$query = $this->db->get('bankdetails');

			//$query = $this->db->get_where('bankdetails');
			//print_r($this->db->last_query());
			//die();
			return $query->result_array();
			//return $query->row_array();
		}

		public function get_bank_details($bank_uid){

			$data = array(
	            'bank_uid' => $bank_uid,
	            'fname' => $this->input->post('fname'),
	            'lname' => $this->input->post('lname'),
	            'username' => $this->input->post('username'),
	            'email' => $this->input->post('email'),
	            'address' => $this->input->post('address'),
	            'country' => $this->input->post('country'),
	            'state' => $this->input->post('state'),
	            'zipcode' => $this->input->post('zipcode'),
	            'address_status' => $this->input->post('address_status'),
	            'payment_type' => $this->input->post('payment_type'),
	            'card_name' => $this->input->post('card_name'),
	            'card_number' => $this->input->post('card_number'),
	            'exp_date' => $this->input->post('exp_date'),
	            'cvv' => $this->input->post('cvv'),
	            'pay_ammount' => '1000',
        	);
        
        // Insert user
        return $this->db->insert('bankdetails', $data);
		}

		public function get_account_by_uid($bank_uid){

			$query = $this->db->get_where('bankdetails',array('bank_uid'=>$bank_uid));
			//print_r($this->db->last_query());
			//die();
			return $query->result_array();
		}

		function fetch_single_details($bank_uid)
	    {
	        $this->db->where('bank_uid', $bank_uid);
	        $data = $this->db->get('bankdetails');
	        //print_r($data->result());
	        $output = '<table width="100%" cellspacing="5" cellpadding="5">';
	        foreach($data->result() as $row)
	        {
	            $output .= '
	            <tr align="center"><td><b>'.$row->username.' Account Details</b></td></tr>
	            <tr>
	                <td width="80%">
	                    <p><b>Bank ID : </b>'.$row->bank_id.'</p>
	                    <p><b>First Name : </b>'.$row->fname.'</p>
	                    <p><b>Last Name : </b>'.$row->lname.'</p>
	                    <p><b>Username : </b>'.$row->username.'</p>
	                    <p><b>Email : </b>'.$row->email.'</p>
	                    <p><b>Address : </b>'.$row->address.'</p>
	                    <p><b>Country : </b>'.$row->country.'</p>
	                    <p><b>State : </b>'.$row->state.'</p>
	                    <p><b>Zipcode : </b>'.$row->zipcode.'</p>
	                    <p><b>Address Status : </b>'.$row->address_status.'</p>
	                    <p><b>Payment Type : </b>'.$row->payment_type.'</p>
	                    <p><b>Card Holder Name : </b>'.$row->card_name.'</p>
	                    <p><b>PCard Number : </b>'.$row->card_number.'</p>
	                    <p><b>Card Exp Date : </b>'.$row->exp_date.'</p>
	                    <p><b>Card CVV : </b>'.$row->cvv.'</p>
	                    <p><b>Transaction Pay Ammount : </b>'.$row->pay_ammount.'</p>
	                    <p><b>Transaction Created Date : </b>'.$row->created_at.'</p>
	                </td>
	            </tr>
	            ';
	        }
	        $output .= '
	        <tr>
	            <td colspan="2" align="center"><a href="'.base_url().'bankaccount" class="btn btn-primary">Back</a></td>
	        </tr>
	        ';
	        $output .= '</table>';
	        //print_r($output);die();
	        return $output;
	    }


	}
?>