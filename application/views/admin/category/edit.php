<?php 
   //print_r($categories);die();
   foreach ($categories as $category) {
    $category_uid = $category['category_uid'];
    $category_name = $category['category_name'];
    $category_stock = $category['category_stock'];
    $category_image = $category['category_image'];
   }
   ?>
<!-- Begin Page Content -->
<div class="container-fluid">
   <!-- Page Heading -->
   <h3 class="h3 mb-2 text-gray-800">Edit Category Form</h3>
   <p class="mb-4">Only Admin All Category After Admin is Aunthintecation <br><br>            
      <a href="<?php echo base_url(); ?>category" title="Show All Category">
      <span class="btn btn-primary btn-sm btn-circle"><i class="fas fa-eye"></i></span><span class="m-2">Show All Category</span>
      </a>
   </p>
   <hr>
   <?php echo form_open_multipart("category/update/$category_uid") ?>
   <div class="col-sm-8">
      <div class="form-group d-flex">
         <label class="col-sm-4" for="category_name">Category Name: <span class="text-danger">*</span></label>
         <div class="col-sm-8">
            <input type="text" class="form-control" name="category_name" value="<?php echo $category_name; ?>" placeholder="Enter Category Name">
            <label class="text-danger"><?php echo form_error('category_name', '<td class="error">', '</td>'); ?></label>
         </div>
      </div>
      <div class="form-group d-flex">
         <label class="col-sm-4" for="category_stock">Category Stock: <span class="text-danger">*</span></label>
         <div class="col-sm-8">
            <input type="text" class="form-control" name="category_stock" value="<?php echo $category_stock; ?>" placeholder="Enter Category Stock In Counting Numbers">
            <label class="text-danger"><?php echo form_error('category_stock', '<td class="error">', '</td>'); ?></label>
         </div>
      </div>
      <div class="form-group d-flex">
         <label class="col-sm-4" for="category_image">Category Image: <span class="text-danger">*</span></label>
         <div class="col-sm-8">
            <input type="file" name="category_image" class="form-control btn btn-success">
            <img src="<?php echo base_url(); ?>assets/admin/shop/category/<?php echo $category_image; ?>" style="width:400px;height:300px;"/>
         </div>
      </div>
      <div class="form-group d-flex py-2">
         <div class="col-sm-offset-4 col-sm-12">
            <button type="submit" class="btn btn-info btn-lg btn-block btn-huge">Update Category</button>
         </div>
      </div>
   </div>
   </form>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->