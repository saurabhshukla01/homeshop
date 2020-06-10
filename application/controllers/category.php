<?php
class Category extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    public function index()
    {
        
        if ($this->session->userdata('logged_in')) {
            
            $data['title'] = 'Show Categories Pages';
            
            $data['categories'] = $this->Category_model->get_categories();

            //print_r($data['categories']);die();
            
            $this->load->view('common/admin/admin-header');
            $this->load->view('admin/category/index', $data);
            $this->load->view('common/admin/admin-footer');
        } else {
            redirect('admin/login');
        }
        
    }
    
    public function Create()
    {
        
        if ($this->session->userdata('logged_in')) {
            $data['title'] = 'Create Category Pages';
            
            $this->form_validation->set_rules('category_name', 'Category Name', 'required');
            $this->form_validation->set_rules('category_stock', 'Category Stock', 'required');
            
            if ($this->form_validation->run() === FALSE) {
                
                $this->load->view('common/admin/admin-header');
                $this->load->view('admin/category/create');
                $this->load->view('common/admin/admin-footer');
                
            } else {
                // Upload Pdf or txt Resume
                $this->load->library('upload');
                $config['upload_path']   = './assets/admin/shop/category/';
                $config['allowed_types'] = 'jpeg|jpg|png';
                $config['max_size']      = '2048';
                $config['max_width']     = '2000';
                $config['max_height']    = '2000';
                
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('category_image')) {
                    
                    //echo $this->upload->display_errors();
                    
                    $this->session->set_flashdata('category_image', 'Only accepted Jpeg | Jpg | png files , not upload Category Image Try again');
                    redirect('category/create');
                } else {
                    $data           = array(
                        'upload_data' => $this->upload->data()
                    );
                    $category_image = $_FILES['category_image']['name'];
                    
                    //print_r($resume);die();
                    //echo "<pre>"; Print_r($this->upload->data()); echo "</pre>"; die();
                }
                
                $category_uid = uniqid();
                
                $this->Category_model->create($category_image, $category_uid);
                
                redirect('category/');
            }
            
            
        } else {
            
            redirect('admin/login');
            
        }
    }
    
    public function delete($category_uid)
    {
        
        // Check login
        if (!$this->session->userdata('logged_in')) {
            redirect('admin/login');
        }
        
        $this->Category_model->delete_category($category_uid);
        
        // Set message
        //$this->session->set_flashdata('category_deleted', 'Your category has been deleted');
        
        redirect('category');
    }
    
    public function edit($category_uid)
    {
        
        $data['categories'] = $this->Category_model->get_category_by_uid($category_uid);
        
        //print_r($data['categories']);die();
        // Check login
        if (!$this->session->userdata('logged_in')) {
            redirect('admin/login');
        }
        
        $this->load->view('common/admin/admin-header');
        $this->load->view('admin/category/edit', $data);
        $this->load->view('common/admin/admin-footer');
    }
    
    public function update($category_uid)
    {
        
        if ($this->session->userdata('logged_in')) {
            $data['title']      = 'Edit Category Pages';
            $data['categories'] = $this->Category_model->get_category_by_uid($category_uid);
            $old_image_name     = $data['categories'][0]['category_image'];
            //print_r($data['categories'][0]['category_image']);
            //die();
            
            $this->form_validation->set_rules('category_name', 'Category Name', 'required');
            $this->form_validation->set_rules('category_stock', 'Category Stock', 'required');
            
            if ($this->form_validation->run() === FALSE) {
                
                $this->load->view('common/admin/admin-header');
                $this->load->view('admin/category/edit', $data);
                $this->load->view('common/admin/admin-footer');
                
            } else {
                // Upload Pdf or txt Resume
                
                $this->load->library('upload');
                $config['upload_path']   = './assets/admin/shop/category/';
                $config['allowed_types'] = 'jpeg|jpg|png';
                $config['max_size']      = '2048';
                $config['max_width']     = '2000';
                $config['max_height']    = '2000';
                
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('category_image') && !$data['categories'][0]['category_image']) {
                    
                    //echo $this->upload->display_errors();

                    $this->session->set_flashdata('category_image', 'Only accepted Jpeg | Jpg | png files , not upload Category Image Try again');
                    redirect('category/edit/'.$category_uid);
                } else {
                    //$category_image = $data['categories'][0]['category_image'];
                    $data           = array(
                        'upload_data' => $this->upload->data()
                    );
                    $category_image = $_FILES['category_image']['name'];
                    
                    //print_r($resume);die();
                    //echo "<pre>"; Print_r($this->upload->data()); echo "</pre>"; die();
                }
                //print_r($category_uid);die();
                if (!$category_image) {
                    $category_image = $old_image_name;
                }
                
                $this->Category_model->update_category($category_uid, $category_image);
                
                redirect('category/');
            }
            
            
        } else {
            
            redirect('admin/login');
            
        }
    }

    public function details($category_uid)
    {
        
        if ($this->session->userdata('logged_in')) {
            
            $data['categories'] = $this->Category_model->get_category_by_uid($category_uid);

            $this->load->view('common/admin/admin-header');
            $this->load->view('admin/category/details', $data);
            $this->load->view('common/admin/admin-footer');


        }else{

            redirect('admin/login');
        }
        
    }

    public function pdfdetails($category_uid)
    {
        if ($this->session->userdata('logged_in')) {

            $html_content = '<h3 align="center">Single Category In pdf file</h3>';
            $html_content .= $this->Category_model->fetch_single_details($category_uid);
            //print_r($html_content);die();
            $this->pdf->loadHtml($html_content);
            $this->pdf->render();
            $this->pdf->stream("".$category_uid.".pdf", array("Attachment"=>0));
        } else {

            redirect('admin/login');
            
        }
    }
    
}