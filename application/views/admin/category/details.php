<?php 
   //print_r($categories);die();
   foreach ($categories as $category) {
    $category_id = $category['category_id'];
    $category_uid = $category['category_uid'];
    $category_name = $category['category_name'];
    $category_stock = $category['category_stock'];
    $category_image = $category['category_image'];
    $created_at = $category['created_at'];
   }
   ?>
<div class="container-fluid">
   <h3 align="center" class="font-weight-bold m-2">Single Category In View file</h3>
   <div class="m-auto">
      <table width="100%" cellspacing="5" cellpadding="5">
         <tr align="center" class="m-auto"><td><b><?php echo $category_name; ?></b></td></tr>
         <tr>
             <td width="25%"><img src="<?php echo base_url(); ?>assets/admin/shop/category/<?php echo $category_image?>" style="width:200px;height:200px;"/></td>
             <td width="75%">
                 <p><b>Category ID : </b> <?php echo $category_id; ?> </p>
                 <p><b>Category Name : </b><?php echo $category_name; ?></p>
                 <p><b>Category Stock : </b><?php echo $category_stock; ?></p> 
                 <p><b>Category Created Date : </b><?php echo $created_at; ?></p>
             </td>
         </tr>
         <tr>
            <td colspan="2" align="center"><a href="<?php echo base_url(); ?>category" class="btn btn-primary">Back</a></td>
         </tr>
      </table>
   </div>
</div>