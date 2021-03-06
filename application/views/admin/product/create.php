<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h3 class="h3 mb-2 text-gray-800">Create Product Form</h3>
          <p class="mb-4">Only Admin Create Product After Admin is Aunthintecation <br><br><a target="_blank" href="<?php echo base_url(); ?>products"><strong>Show All Products</strong></a>.</p>
          <hr>

              <?php echo form_open_multipart('products/create'); ?>
                <div class="col-sm-8">
                 <div class="form-group d-flex">
                    <label class="col-sm-4" for="product_name">Product Name: <span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                       <input type="text" class="form-control" name="product_name" placeholder="Enter Product Name">
                       <label class="text-danger"><?php echo form_error('product_name', '<td class="error">', '</td>'); ?></label>
                    </div>
                 </div>
                 <div class="form-group d-flex">
                    <label class="col-sm-4" for="product_stock">Product Stock: <span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                       <input type="text" class="form-control" name="product_stock" placeholder="Enter Product Stock In Counting Numbers">
                       <label class="text-danger"><?php echo form_error('product_stock', '<td class="error">', '</td>'); ?></label>
                    </div>
                 </div>
                 <div class="form-group d-flex">
                    <label class="col-sm-4" for="product_price">Product Price: <span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                       <input type="text" class="form-control" name="product_price" placeholder="Enter Product Price">
                       <label class="text-danger"><?php echo form_error('product_price', '<td class="error">', '</td>'); ?></label>
                    </div>
                 </div>
                 <div class="form-group d-flex">
                    <label class="col-sm-4" for="product_category">Product Category: <span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                       <select class="form-control" name="product_category">
                        <option disabled selected>Choose One Product Category</option>
                        <?php foreach($categories as $category) : ?>
                          <option value="<?php echo $category['category_name'] ?>"><?php echo $category['category_name'] ?></option>
                        <?php endforeach; ?>

                       </select>
                       <label class="text-danger"><?php echo form_error('product_category', '<td class="error">', '</td>'); ?></label>
                    </div>
                 </div>
                 <div class="form-group d-flex">
                    <label class="col-sm-4" for="product_status">Product Status: <span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                       <select class="form-control" name="product_status">
                        <option disabled selected>Choose One Product Status</option>
                        <option value="Unsold">Unsold</option>
                        <option value="sold">sold</option>
                        <option value="Not Available">Not Available</option>
                       </select>
                       <label class="text-danger"><?php echo form_error('product_status', '<td class="error">', '</td>'); ?></label>
                    </div>
                 </div>
                 <div class="form-group d-flex">
                    <label class="col-sm-4" for="product_text">Product Text: <span class="text-danger">*</span></label>
                    <div class="col-sm-8">  
                       <textarea type="text" class="form-control" name="product_text" placeholder="Enter Product Text"></textarea>
                       <label class="text-danger"><?php echo form_error('product_text', '<td class="error">', '</td>'); ?></label>
                    </div>
                 </div>
                 <div class="form-group d-flex">
                    <label class="col-sm-4" for="product_image">Product Image: <span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                       <input type="file" name="product_image" class="form-control btn btn-success">
                    </div>
                 </div>
                 <div class="form-group d-flex py-2">
                    <div class="col-sm-offset-4 col-sm-12">
                       <button type="submit" class="btn btn-info btn-lg btn-block btn-huge">Create Product</button>
                    </div>
                 </div>
               </div>
              </form>


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->