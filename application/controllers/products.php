<?php
	class Products extends CI_Controller{

		public function __construct()
	    {
	        parent::__construct();
	        $this->load->library('pdf');
	    }

		public function index(){

			if($this->session->userdata('logged_in')){

				$data['title'] = 'Show Products Pages';

				$data['products'] = $this->Products_model->get_products();

				//print_r($data['products']);die();

				$this->load->view('common/admin/admin-header');
				$this->load->view('admin/product/index',$data);
				$this->load->view('common/admin/admin-footer');
			}
			else{
				redirect('admin/login');
			}

		}

		public function Create(){

			if($this->session->userdata('logged_in')){

				$data['title'] = 'Create Product Pages';
				$data['categories'] = $this->Category_model->get_categories();

				$this->form_validation->set_rules('product_name', 'Product Name', 'required');
				$this->form_validation->set_rules('product_stock', 'Product Stock', 'required');
				$this->form_validation->set_rules('product_price', 'Product Price', 'required');
				$this->form_validation->set_rules('product_category', 'Product Category', 'required');

				if($this->form_validation->run() === FALSE){

					$this->load->view('common/admin/admin-header');
					$this->load->view('admin/product/create',$data);
					$this->load->view('common/admin/admin-footer');

				}else{
					// Upload Pdf or txt Resume
						$this->load->library('upload');
						$config['upload_path'] = './assets/admin/shop/product/';
						$config['allowed_types'] = 'jpeg|jpg|png';
						$config['max_size']    = '2048';
						$config['max_width'] = '2000';
						$config['max_height'] = '2000';

						$this->upload->initialize($config);
						if (!$this->upload->do_upload('product_image')){

							//echo $this->upload->display_errors();

							$this->session->set_flashdata('product_image', 'Only accepted Jpeg | Jpg | png files , not upload Product Image Try again');
							redirect('products/create');
						}
						else{

							$data = array('upload_data' => $this->upload->data());
							$product_image = $_FILES['product_image']['name'];

						}

						$product_uid = uniqid();

						$this->Products_model->create($product_image , $product_uid);

						redirect('products/');
				}

			}else{

				redirect('admin/login');

			}
			
		}

		public function delete($product_uid){

			// Check login
			if(!$this->session->userdata('logged_in')){
				redirect('admin/login');
			}

			//echo "<script> alert('Your Category Deleted') </script>";
			$this->Products_model->delete_product($product_uid);

			// Set message
			//$this->session->set_flashdata('product_deleted', 'Your Product has been deleted');

			redirect('products');
		}

		public function edit($product_uid){

			$data['products'] = $this->Products_model->get_product_by_uid($product_uid);
			$data['categories'] = $this->Category_model->get_categories();

			//print_r($data['products']);die();
			// Check login
			if(!$this->session->userdata('logged_in')){
				redirect('admin/login');
			}

			$this->load->view('common/admin/admin-header');
			$this->load->view('admin/product/edit' , $data);
			$this->load->view('common/admin/admin-footer');
		}

		public function update($product_uid)
	    {
	        
	        if ($this->session->userdata('logged_in')) {
	            $data['title']      = 'Edit Product Pages';
	            $data['products'] = $this->Products_model->get_product_by_uid($product_uid);
	            $data['categories'] = $this->Category_model->get_categories();
	            $old_image_name     = $data['products'][0]['product_image'];
	            //print_r($data['products'][0]['product_image']);
	            //die();
	            
				$this->form_validation->set_rules('product_name', 'Product Name', 'required');
				$this->form_validation->set_rules('product_stock', 'Product Stock', 'required');
				$this->form_validation->set_rules('product_price', 'Product Price', 'required');
				$this->form_validation->set_rules('product_category', 'Product Category', 'required');
	            
	            if ($this->form_validation->run() === FALSE) {
	                
	                $this->load->view('common/admin/admin-header');
	                $this->load->view('admin/product/edit', $data);
	                $this->load->view('common/admin/admin-footer');
	                
	            } else {
	                // Upload Pdf or txt Resume
	                
	                $this->load->library('upload');
	                $config['upload_path']   = './assets/admin/shop/product/';
	                $config['allowed_types'] = 'jpeg|jpg|png';
	                $config['max_size']      = '2048';
	                $config['max_width']     = '2000';
	                $config['max_height']    = '2000';
	                
	                $this->upload->initialize($config);
	                if (!$this->upload->do_upload('product_image') && !$data['products'][0]['product_image']) {
	                    
	                    //echo $this->upload->display_errors();

	                    $this->session->set_flashdata('product_image', 'Only accepted Jpeg | Jpg | png files , not upload Product Image Try again');
	                    redirect('products/edit/'.$product_uid);
	                } else {
	                    //$category_image = $data['categories'][0]['category_image'];
	                    $data           = array(
	                        'upload_data' => $this->upload->data()
	                    );
	                    $product_image = $_FILES['product_image']['name'];
	                    
	                    //print_r($product_image);die();
	                    //echo "<pre>"; Print_r($this->upload->data()); echo "</pre>"; die();
	                }
	                //print_r($category_uid);die();
	                if (!$product_image) {
	                    $product_image = $old_image_name;
	                }
	                
	                $this->Products_model->update_product($product_uid, $product_image);
	                
	                redirect('products/');
	            }
	            
	            
	        } else {
	            
	            redirect('admin/login');
	            
	        }
	    }

	    public function details($product_uid)
	    {
	        
	        if ($this->session->userdata('logged_in')) {
	            
	            $data['products'] = $this->Products_model->get_product_by_uid($product_uid);

	            $this->load->view('common/admin/admin-header');
	            $this->load->view('admin/product/details', $data);
	            $this->load->view('common/admin/admin-footer');


	        }else{

	            redirect('admin/login');
	        }
	        
	    }

	    public function pdfdetails($product_uid)
	    {
	    	if ($this->session->userdata('logged_in')) {

		        $html_content = '<h3 align="center">Single Product In pdf file</h3>';
		        $html_content .= $this->Products_model->fetch_single_details($product_uid);
		        //print_r($html_content);die();
		        $this->pdf->loadHtml($html_content);
		        $this->pdf->render();
		        $this->pdf->stream("".$product_uid.".pdf", array("Attachment"=>0));
		    } else {

		    	redirect('admin/login');
		    	
		    }
	    }


	}