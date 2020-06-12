<!-- Begin Page Content -->
<div class="container-fluid">
   <!-- Page Heading -->
   <h3 class="h3 mb-2 text-gray-800">Show All Products</h3>
   <p class="mb-4">Only Show Admin After Create any Product In Homeshop Admin 18 panel <br><br><a href="<?php echo base_url(); ?>products/create" title="Add product">
      <span class="btn btn-primary btn-sm btn-circle"><i class="fas fa-plus"></i></span><span class="m-2">Create Product</span>
      </a>
   </p>
   <hr>
   <!-- DataTales Example -->
   <div class="card shadow mb-4">
      <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">All Products</h6>
      </div>
      <div class="card-body">
         <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead>
                  <tr>
                     <th>Sr.No.</th>
                     <th>Product Name</th>
                     <th>Product Category</th>
                     <th>Product Image</th>
                     <th>Product Stock</th>
                     <th>Product Price</th>
                     <th>Product Status</th>
                     <th>Product Text</th>
                     <th>Product Date</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tfoot>
                  <tr>
                     <th>Sr.No.</th>
                     <th>Product Name</th>
                     <th>Product Category</th>
                     <th>Product Image</th>
                     <th>Product Stock</th>
                     <th>Product Price</th>
                     <th>Product Status</th>
                     <th>Product Text</th>
                     <th>Product Date</th>
                     <th>Action</th>
                  </tr>
               </tfoot>
               <tbody>
                  <?php $sn=1; ?>
                  <?php foreach($products as $product) : ?>
                  <tr>
                     <td id="sn_<?php echo $product['product_uid']; ?>"><?php echo $sn; ?></td>
                     <td id="product_name_<?php echo $product['product_uid']; ?>"><?php echo $product['product_name']; ?></td>
                     <td id="product_category_<?php echo $product['product_uid']; ?>"><?php echo $product['product_category']; ?></td>
                     <td id="product_image_<?php echo $product['product_uid']; ?>"><img src="<?php echo base_url(); ?>assets/admin/shop/product/<?php echo $product['product_image']; ?>" style="width:50px;height:50px;"/></td>
                     <td id="product_stock_<?php echo $product['product_uid']; ?>"><?php echo $product['product_stock']; ?></td>
                     <td id="product_price_<?php echo $product['product_uid']; ?>"><?php echo $product['product_price']; ?></td>
                     <td id="product_status_<?php echo $product['product_uid']; ?>"><?php echo $product['product_status']; ?></td>
                     <td id="product_text_<?php echo $product['product_uid']; ?>"><?php echo $product['product_text']; ?></td>
                     <td id="product_created_at_<?php echo $product['product_uid']; ?>"><?php echo $product['created_at']; ?></td>
                     <td>
                        <a href="<?php echo base_url(); ?>products/edit/<?php echo $product['product_uid']; ?>" class="btn btn-primary btn-sm btn-circle m-1" title="Edit"><i class="fas fa-edit"></i></a>
                        <a href="<?php echo base_url(); ?>products/delete/<?php echo $product['product_uid']; ?>" class="btn btn-danger btn-sm btn-circle m-1" title="delete"><i class="fas fa-trash"></i></a>
                        <!--<a class="btn btn-info btn-sm btn-circle m-1" data-toggle="modal" data-target="#viewmodel" title="view"><span class="text-white"><i class="fas fa-mobile-alt"></i></span></a>-->
                        <a class="btn btn-info btn-sm btn-circle m-1" data-toggle="modal" data-target="#viewmodel" id="<?php echo $product['product_uid']; ?>" onclick="showdetils(this);" title="view"><span class="text-white"><i class="fas fa-mobile-alt"></i></span></a>
                        <a class="btn btn-dark btn-sm btn-circle m-1" href="<?php echo base_url(); ?>products/details/<?php echo $product['product_uid']; ?>" title="view_page"><span class="text-white"><i class="fas fa-eye"></i></span></a>
                        <a class="btn btn-success btn-sm btn-circle m-1" href="<?php echo base_url(); ?>products/pdfdetails/<?php echo $product['product_uid']; ?>" id="pdf" title="pdf"><span class="text-white"><i class="fas fa-download"></i></span></a>
                     </td>
                  </tr>
                  <?php $sn++; ?>
                  <?php endforeach; ?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
<!-- /.container-fluid -->
<!-- Modal -->
<div class="modal fade" id="viewmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog smartphone" role="document">
      <div class="modal-content smartphone-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Product Show Single Data</h5>
            <button type="button" class="close smartphone-close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="card-body">
               <div class="table-responsive">
                  <div>
                     <p>Product srno :<span class="ml-4 font-weight-bold" id="product_sn"></span></p>
                     <p class="mr-4">Product Name :<span class="ml-4 font-weight-bold" id="product_name"></span></p>
                     <p class="mr-4">Product Image :<span class="ml-4 font-weight-bold" id="product_image"></span></p>
                     <p>Product Category :<span class="ml-4 font-weight-bold" id="product_category"></span></p>
                     <p>Product Stock :<span class="ml-4 font-weight-bold" id="product_stock"></span></p>
                     <p>Product Price :<span class="ml-4 font-weight-bold" id="product_price"></span></p>
                     <p>Product Status :<span class="ml-4 font-weight-bold" id="product_status"></span></p>
                     <p>Product Text :<span class="ml-4 font-weight-bold" id="product_text"></span></p>
                     <p>Product Created At :<span class="ml-4 font-weight-bold" id="product_created_at"></span></p>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer m-auto">
            <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary">Save changes</button>-->
            <p>footer @2020 Category Table</p>
         </div>
      </div>
   </div>
</div>
<!-- end model -->
</div>
<!-- End of Main Content -->
<script type="text/javascript">
   function showdetils(a){
      var product_uid = a.id;
      $("#dataTable").getElementById;
      //alert(a.id);
      //alert(category_uid);
      var sn = document.getElementById("sn_"+product_uid).innerHTML;
      var product_name = document.getElementById("product_name_"+product_uid).innerHTML;
      var product_image= document.getElementById("product_image_"+product_uid).innerHTML;
      var product_category= document.getElementById("product_category_"+product_uid).innerHTML;
      var product_stock= document.getElementById("product_stock_"+product_uid).innerHTML;
      var product_price= document.getElementById("product_price_"+product_uid).innerHTML;
      var product_status= document.getElementById("product_status_"+product_uid).innerHTML;
      var product_text= document.getElementById("product_text_"+product_uid).innerHTML;
      var product_created_at= document.getElementById("product_created_at_"+product_uid).innerHTML;
   
      
      $("#product_sn").html(sn);
      $("#product_name").html(product_name);
      $("#product_image").html(product_image);
      $("#product_category").html(product_category);
      $("#product_stock").html(product_stock);
      $("#product_price").html(product_price);
      $("#product_status").html(product_status);
      $("#product_text").html(product_text);
      $("#product_created_at").html(product_created_at);
      
      
      $("#viewmodel").modal('show');
   }
   
</script>