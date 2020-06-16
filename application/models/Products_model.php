<?php
	class Products_model extends CI_Model{

		public function __construct(){
			$this->load->database();
		}

		public function get_products($limit = FALSE, $offset = FALSE){

			if($limit){
				
				$this->db->limit($limit, $offset);
			}

			$query = $this->db->get('products');

			//$query = $this->db->get_where('products');
			//print_r($this->db->last_query());
			//die();
			return $query->result_array();
			//return $query->row_array();
		}

		public function create($product_image , $product_uid){

			$data = array(
				'product_uid' => $product_uid,
				'product_name' => $this->input->post('product_name'),
				'product_stock' => $this->input->post('product_stock'),
				'product_price' => $this->input->post('product_price'),
				'product_category' => $this->input->post('product_category'),
				'product_status' => $this->input->post('product_status'),
				'product_text' => $this->input->post('product_text'),
	            'product_image' => $product_image,
			);

			// Insert user
			return $this->db->insert('products', $data);
		}

		public function delete_product($product_uid){

			$image_file_name = $this->db->select('product_image')->get_where('products', array('product_uid' => $product_uid))->row()->product_image;
			$cwd = getcwd(); // save the current working directory
			$image_file_path = $cwd."\\assets\\admin\\shop\\product";
			chdir($image_file_path);
			unlink($image_file_name);
			chdir($cwd); // Restore the previous working directory

			$this->db->where('product_uid',$product_uid);
			$this->db->delete('products');
			return true;

		}

		public function get_product_by_uid($product_uid){

			$query = $this->db->get_where('products',array('product_uid'=>$product_uid));
			//print_r($this->db->last_query());
			//die();
			return $query->result_array();
		}

		 public function update_product($product_uid, $product_image)
	    {
	        
	        $data = array(
	            'product_name' => $this->input->post('product_name'),
	            'product_category' => $this->input->post('product_category'),
	            'product_stock' => $this->input->post('product_stock'),
	            'product_price' => $this->input->post('product_price'),
	            'product_status' => $this->input->post('product_status'),
				'product_text' => $this->input->post('product_text'),
	            'product_image' => $product_image
	        );
	        //print_r($data);
	        //die();
	        $this->db->where('product_uid', $product_uid);
	        $query = $this->db->update('products', $data);
	        //print_r($this->db->update('products',$data));
	        //print_r($this->db->last_query());
	        //die();
	        return true;
	    }

	    public function filter_product_by_category_name($category_id){

	    	$query = $this->db->select('*');
	    	$query = $this->db->join('categories','products.product_category = categories.category_name');
	    	$query = $this->db->get_where('products', array('category_id'=>$category_id));

			//print_r($this->db->last_query());
			//die();
			return $query->result_array();

	    }

	    function fetch_single_details($product_uid)
	    {
	        $this->db->where('product_uid', $product_uid);
	        $data = $this->db->get('products');
	        //print_r($data->result());
	        $output = '<table width="100%" cellspacing="5" cellpadding="5">';
	        foreach($data->result() as $row)
	        {
	            $output .= '
	            <tr align="center"><td><b>'.$row->product_name.'</b></td></tr>
	            <tr>
	                <td width="25%"><img src="'.base_url().'assets/admin/shop/product/'.$row->product_image.'" style="width:300px;height:300px;"/></td>
	                <td width="75%">
	                    <p><b>Product ID : </b>'.$row->product_id.'</p>
	                    <p><b>Product Name : </b>'.$row->product_name.'</p>
	                    <p><b>Product Category : </b>'.$row->product_category.'</p>
	                    <p><b>Product Stock : </b>'.$row->product_stock.'</p>
	                    <p><b>Product Price : </b>'.$row->product_price.'</p>
	                    <p><b>Product Status : </b>'.$row->product_status.'</p>
	                    <p><b>Product Text : </b>'.$row->product_text.'</p>
	                    <p><b>Created At : </b>'.$row->created_at.'</p>
	                </td>
	            </tr>
	            ';
	        }
	        $output .= '
	        <tr>
	            <td colspan="2" align="center"><a href="'.base_url().'products" class="btn btn-primary">Back</a></td>
	        </tr>
	        ';
	        $output .= '</table>';
	        //print_r($output);die();
	        return $output;
	    }

	}