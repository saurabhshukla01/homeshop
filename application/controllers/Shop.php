<?php
	class Shop extends CI_Controller{

		public function index(){
			
			$data['categories'] = $this->Category_model->get_categories();
			$data['products'] = $this->Products_model->get_products();

			$this->load->view('common/header');
			$this->load->view('users/index',$data);
			$this->load->view('common/footer');
	
		}


		public function filter_product($category_id)
	    {
	        
	    	$data['categories'] = $this->Category_model->get_categories();
	        $data['filter_products'] = $this->Products_model->filter_product_by_category_name($category_id);
	        //echo "<pre>"; print_r($data['products1']);die();

            $this->load->view('common/header');
            $this->load->view('users/filter-product', $data);
            $this->load->view('common/footer');

	        
	    }

	    public function checkout(){

	    	$data['categories'] = $this->Category_model->get_categories();

			$this->load->view('common/header');
			$this->load->view('users/checkout',$data);
			$this->load->view('common/footer');
	
		}

		public function product_page(){

			$data['categories'] = $this->Category_model->get_categories();

			$this->load->view('common/header');
			$this->load->view('users/product-page',$data);
			$this->load->view('common/footer');
	
		}

		public function products(){

			$data['categories'] = $this->Category_model->get_categories();

			$this->load->view('common/header');
			$this->load->view('users/products',$data);
			$this->load->view('common/footer');
	
		}

	}

?>