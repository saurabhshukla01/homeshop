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
                  <tr>
                     <td><?php echo $sn; ?></td>
                     <td><?php echo $category['category_name']; ?></td>
                     <td><img src="<?php echo base_url(); ?>assets/admin/shop/category/<?php echo $category['category_image']; ?>" style="width:50px;height:50px;"/></td>
                     <td><?php echo $category['category_stock']; ?></td>
                     <td><?php echo $category['created_at']; ?></td>
                     <td>
                        <a href="<?php echo base_url(); ?>category/edit/<?php echo $category['category_uid']; ?>" class="btn btn-primary btn-sm btn-circle m-1" title="Edit"><i class="fas fa-edit"></i></a>
                        <a href="<?php echo base_url(); ?>category/delete/<?php echo $category['category_uid']; ?>" class="btn btn-danger btn-sm btn-circle m-1" title="delete"><i class="fas fa-trash"></i></a>
                        <!--<a class="btn btn-info btn-sm btn-circle m-1" name="category_uid" href="<?php //echo base_url(); ?>category?$category_uid=<?php //echo $category['category_uid']; ?>"  title="view"><span class="text-white"><i class="fas fa-mobile-alt"></i></span></a>-->
                        <a class="btn btn-info btn-sm btn-circle m-1" data-toggle="modal" data-target="#viewmodel" id="<?php echo $category['category_uid']; ?>" onclick="showdetils(this);" title="view"><span class="text-white"><i class="fas fa-mobile-alt"></i></span></a>
                        <a class="btn btn-info btn-sm btn-circle m-1" id="pdf" onclick="pdfdownload(this);" title="pdf"><span class="text-white"><i class="fas fa-download"></i></span></a>
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
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Category Header</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="card-body">
               <div class="table-responsive">
                  <p>Category Name <span id="category_name"></span></p>
                  <p>Category stock <span id="category_stock"></span></p>
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
   //alert(a.id);
   alert(category_uid);
}

function pdfdownload(a){
   alert('Pdf downloaded please check mail');
}
</script>

