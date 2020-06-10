<?php 
   //print_r($products);die();
   foreach ($products as $product) {
     $product_id = $product['product_id'];
     $product_uid = $product['product_uid'];
     $product_name = $product['product_name'];
     $product_stock = $product['product_stock'];
     $product_price = $product['product_price'];
     $product_category = $product['product_category'];
     $product_image = $product['product_image'];
     $created_at = $product['created_at'];
   
   }
   ?>
<div class="container-fluid">
   <h3 align="center" class="font-weight-bold m-2">Single Product In View Page</h3>
   <div class="m-auto">
      <table width="100%" cellspacing="5" cellpadding="5">
         <tr align="center" class="m-auto"><td><b><?php echo $product_name; ?></b></td></tr>
         <tr>
             <td width="25%"><img src="<?php echo base_url(); ?>assets/admin/shop/product/<?php echo $product_image?>" style="width:200px;height:200px;"/></td>
             <td width="75%">
                 <p><b>Product ID : </b> <?php echo $product_id; ?> </p>
                 <p><b>Product Name : </b><?php echo $product_name; ?></p>
                 <p><b>Product Category : </b><?php echo $product_category; ?></p>
                 <p><b>Product Stock : </b><?php echo $product_stock; ?></p>
                 <p><b>Product Price : </b><?php echo $product_price; ?></p>    
                 <p><b>Product Created Date : </b><?php echo $created_at; ?></p>
             </td>
         </tr>
         <tr>
            <td colspan="2" align="center"><a href="<?php echo base_url(); ?>products" class="btn btn-primary">Back</a></td>
         </tr>
      </table>
   </div>
</div>