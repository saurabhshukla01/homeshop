<?php 
   //print_r($products);die();
   foreach ($products as $product) {
     $product_uid = $product['product_uid'];
     $product_name = $product['product_name'];
     $product_stock = $product['product_stock'];
     $product_price = $product['product_price'];
     $product_category = $product['product_category'];
     $product_image = $product['product_image'];
   
   
   }
   ?>
<!-- Begin Page Content -->
<div class="container-fluid">
   <!-- Page Heading -->
   <h3 class="h3 mb-2 text-gray-800">Edit Product Form</h3>
   <p class="mb-4">Only Admin Create Product After Admin is Aunthintecation <br><br>            
      <a href="<?php echo base_url(); ?>products" title="Show All Products">
      <span class="btn btn-primary btn-sm btn-circle"><i class="fas fa-eye"></i></span><span class="m-2">Show All Category</span>
      </a>
   </p>
   <hr>
   <?php echo form_open_multipart("products/update/$product_uid"); ?>
   <div class="col-sm-8">
      <div class="form-group d-flex">
         <label class="col-sm-4" for="product_name">Product Name: <span class="text-danger">*</span></label>
         <div class="col-sm-8">
            <input type="text" class="form-control" name="product_name" value="<?php echo $product_name; ?>" placeholder="Enter Product Name">
            <label class="text-danger"><?php echo form_error('product_name', '<td class="error">', '</td>'); ?></label>
         </div>
      </div>
      <div class="form-group d-flex">
         <label class="col-sm-4" for="product_stock">Product Stock: <span class="text-danger">*</span></label>
         <div class="col-sm-8">
            <input type="text" class="form-control" name="product_stock" value="<?php echo $product_stock; ?>" placeholder="Enter Product Stock In Counting Numbers">
            <label class="text-danger"><?php echo form_error('product_stock', '<td class="error">', '</td>'); ?></label>
         </div>
      </div>
      <div class="form-group d-flex">
         <label class="col-sm-4" for="product_price">Product Price: <span class="text-danger">*</span></label>
         <div class="col-sm-8">
            <input type="text" class="form-control" name="product_price" value="<?php echo $product_price; ?>" placeholder="Enter Product Price">
            <label class="text-danger"><?php echo form_error('product_price', '<td class="error">', '</td>'); ?></label>
         </div>
      </div>
      <div class="form-group d-flex">
         <label class="col-sm-4" for="product_category">Product Category: <span class="text-danger">*</span></label>
         <div class="col-sm-8">
            <select class="form-control" name="product_category">
               <?php foreach($categories as $category) : ?>
               <option value="<?php echo $category['category_name'] ?>"><?php echo $category['category_name'] ?></option>
               <?php if($category['category_name']==$product_category){ ?>
               <option value="<?php echo $category['category_name'] ?>" selected="selected"><?php echo $category['category_name'] ?></option>
               <?php }?>
               <?php endforeach; ?>
            </select>
            <label class="text-danger"><?php echo form_error('product_category', '<td class="error">', '</td>'); ?></label>
         </div>
      </div>
      <div class="form-group d-flex">
         <label class="col-sm-4" for="product_image">Product Image: <span class="text-danger">*</span></label>
         <div class="col-sm-8">
            <input type="file" name="product_image" class="form-control btn btn-success">
            <img src="<?php echo base_url(); ?>assets/admin/shop/product/<?php echo $product_image; ?>" style="width:400px;height:300px;"/>
         </div>
      </div>
      <div class="form-group d-flex py-2">
         <div class="col-sm-offset-4 col-sm-12">
            <button type="submit" class="btn btn-info btn-lg btn-block btn-huge">Update Product</button>
         </div>
      </div>
   </div>
   </form>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->