<!-- Begin Page Content -->
<div class="container-fluid">
   <!-- Page Heading -->
   <h3 class="h3 mb-2 text-gray-800">Show All Categories</h3>
   <p class="mb-4">Only Show Admin After Create any Category In Homeshop Admin 18 panel <br><br>
      <a href="<?php echo base_url(); ?>category/create" title="Add category">
      <span class="btn btn-primary btn-sm btn-circle"><i class="fas fa-plus"></i></span><span class="m-2">Create Category</span>
      </a>
   </p>
   <hr>
   <!-- DataTales Example -->
   <div class="card shadow mb-4">
      <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">All Categories</h6>
      </div>
      <div class="card-body">
         <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead>
                  <tr>
                     <th>Sr.No.</th>
                     <th>Category Name</th>
                     <th>Category Image</th>
                     <th>Category Stock</th>
                     <th>Category Date</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tfoot>
                  <tr>
                     <th>Sr.No.</th>
                     <th>Category Name</th>
                     <th>Category Image</th>
                     <th>Category Date</th>
                     <th>Category Stock</th>
                     <th>Action</th>
                  </tr>
               </tfoot>
               <tbody>
                  <?php $sn=1; ?>
                  <?php foreach($categories as $category) : ?>
                  <tr >
                     <td id="sn_<?php echo $category['category_uid']; ?>"><?php echo $sn; ?></td>
                     <td id="category_name_<?php echo $category['category_uid']; ?>"><?php echo $category['category_name']; ?></td>
                     <td id="category_image_<?php echo $category['category_uid']; ?>"><img src="<?php echo base_url(); ?>assets/admin/shop/category/<?php echo $category['category_image']; ?>" style="width:50px;height:50px;"/></td>
                     <td id="category_stock_<?php echo $category['category_uid']; ?>"><?php echo $category['category_stock']; ?></td>
                     <td id="category_created_at_<?php echo $category['category_uid']; ?>"><?php echo $category['created_at']; ?></td>
                     <td>
                        <a href="<?php echo base_url(); ?>category/edit/<?php echo $category['category_uid']; ?>" class="btn btn-primary btn-sm btn-circle m-1" title="Edit"><i class="fas fa-edit"></i></a>
                        <a href="<?php echo base_url(); ?>category/delete/<?php echo $category['category_uid']; ?>" class="btn btn-danger btn-sm btn-circle m-1" title="delete"><i class="fas fa-trash"></i></a>
                        <!--<a class="btn btn-info btn-sm btn-circle m-1" name="category_uid" href="<?php //echo base_url(); ?>category?$category_uid=<?php //echo $category['category_uid']; ?>"  title="view"><span class="text-white"><i class="fas fa-mobile-alt"></i></span></a>-->
                        <a class="btn btn-info btn-sm btn-circle m-1" data-toggle="modal" data-target="#viewmodel" id="<?php echo $category['category_uid']; ?>" onclick="showdetils(this);" title="view"><span class="text-white"><i class="fas fa-mobile-alt"></i></span></a>
                        <a class="btn btn-dark btn-sm btn-circle m-1" href="<?php echo base_url(); ?>category/details/<?php echo $category['category_uid']; ?>" title="view_page"><span class="text-white"><i class="fas fa-eye"></i></span></a>
                        <a class="btn btn-success btn-sm btn-circle m-1" href="<?php echo base_url(); ?>category/pdfdetails/<?php echo $category['category_uid']; ?>" id="pdf" title="pdf"><span class="text-white"><i class="fas fa-download"></i></span></a>
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
            <h5 class="modal-title" id="exampleModalLabel">Category Show Single Data</h5>
            <button type="button" class="close smartphone-close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="card-body">
               <div class="table-responsive">
                  <div class="font-weight-bold">
                     <p>Category srno :<span class="ml-4" id="category_sn"></span></p>
                     <p>Category Name :<span class="ml-4" id="category_name"></span></p>
                     <p>Category Image :<span class="ml-4" id="category_image"></span></p>
                     <p>Category stock :<span class="ml-4" id="category_stock"></span></p>
                     <p>Created at :<span class="ml-4" id="category_created_at"></span></p>
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
      var category_uid = a.id;
      $("#dataTable").getElementById;
      //alert(a.id);
      //alert(category_uid);
      var sn = document.getElementById("sn_"+category_uid).innerHTML;
      var category_name = document.getElementById("category_name_"+category_uid).innerHTML;
      var category_image= document.getElementById("category_image_"+category_uid).innerHTML;
      var category_stock= document.getElementById("category_stock_"+category_uid).innerHTML;
      var category_created_at= document.getElementById("category_created_at_"+category_uid).innerHTML;
      $("#category_sn").html(sn);
      $("#category_name").html(category_name);
      $("#category_image").html(category_image);
      $("#category_stock").html(category_stock);
      $("#category_created_at").html(category_created_at);
      $("#viewmodel").modal('show');
   }
   
</script>