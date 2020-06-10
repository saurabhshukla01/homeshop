<?php
class Category_model extends CI_Model
{
    
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_categories()
    {
        
        $query = $this->db->get('categories');
        
        //$query = $this->db->get_where('categories');
        //print_r($this->db->last_query());
        //die();
        return $query->result_array();
        //return $query->row_array();
    }
    
    public function create($category_image, $category_uid)
    {
        
        $data = array(
            'category_uid' => $category_uid,
            'category_name' => $this->input->post('category_name'),
            'category_stock' => $this->input->post('category_stock'),
            'category_image' => $category_image
        );
        
        // Insert user
        return $this->db->insert('categories', $data);
    }
    
    public function delete_category($category_uid)
    {
        
        $image_file_name = $this->db->select('category_image')->get_where('categories', array(
            'category_uid' => $category_uid
        ))->row()->category_image;
        $cwd             = getcwd(); // save the current working directory
        $image_file_path = $cwd . "\\assets\\admin\\shop\\category";
        chdir($image_file_path);
        unlink($image_file_name);
        chdir($cwd); // Restore the previous working directory
        
        $this->db->where('category_uid', $category_uid);
        $this->db->delete('categories');
        return true;
    }
    
    public function get_category_by_uid($category_uid)
    {
        
        $query = $this->db->get_where('categories', array(
            'category_uid' => $category_uid
        ));
        //print_r($this->db->last_query());
        //die();
        return $query->result_array();
    }
    
    public function update_category($category_uid, $category_image)
    {
        
        $data = array(
            'category_name' => $this->input->post('category_name'),
            'category_stock' => $this->input->post('category_stock'),
            'category_image' => $category_image
        );
        //print_r($data);
        //die();
        $this->db->where('category_uid', $category_uid);
        $query = $this->db->update('categories', $data);
        //print_r($this->db->update('categories',$data));
        //print_r($this->db->last_query());
        //die();
        return true;
    }

    function fetch_single_details($category_uid)
    {
        $this->db->where('category_uid', $category_uid);
        $data = $this->db->get('categories');
        //print_r($data->result());
        $output = '<table width="100%" cellspacing="5" cellpadding="5">';
        foreach($data->result() as $row)
        {
            $output .= '
            <tr align="center"><td><b>'.$row->category_name.'</b></td></tr>
            <tr>
                <td width="25%"><img src="'.base_url().'assets/admin/shop/category/'.$row->category_image.'" style="width:200px;height:200px;"/></td>
                <td width="75%">
                    <p><b>Category ID : </b>'.$row->category_id.'</p>
                    <p><b>Category Name : </b>'.$row->category_name.'</p>
                    <p><b>Category Stock : </b>'.$row->category_stock.'</p>
                    <p><b>Created At : </b>'.$row->created_at.'</p>
                </td>
            </tr>
            ';
        }
        $output .= '
        <tr>
            <td colspan="2" align="center"><a href="'.base_url().'category" class="btn btn-primary">Back</a></td>
        </tr>
        ';
        $output .= '</table>';
        //print_r($output);die();
        return $output;
    }
}