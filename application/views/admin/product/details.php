<?php 
   //print_r($products);die();
   foreach ($products as $product) {
     $product_id = $product['product_id'];
     $product_uid = $product['product_uid'];
     $product_name = $product['product_name'];
     $product_stock = $product['product_stock'];
     $product_price = $product['product_price'];
     $product_category = $product['product_category'];
     $product_status = $product['product_status'];
     $product_text = $product['product_text'];
     $product_image = $product['product_image'];
     $created_at = $product['created_at'];
   
   }
   ?>
<div class="container-fluid">
   <h3 align="center" class="font-weight-bold m-2">Single Product In View Page</h3>
   <div class="m-auto">
      <table width="100%" cellspacing="5" cellpadding="5">
         <tr>
            <td><a href="<?php echo base_url(); ?>admin" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Back To Home</a></td>
            <td align="right"><a href="<?php echo base_url(); ?>products" class="btn btn-primary">Back To Product &nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a></td>
         </tr>
         <tr align="center" class="m-auto"><td><b><?php echo $product_name; ?></b></td></tr>
         <tr>
             <td width="25%"><img src="<?php echo base_url(); ?>assets/admin/shop/product/<?php echo $product_image?>" style="width:300px;height:300px;"/></td>
             <td width="75%">
                 <p><b>Product ID : </b> <?php echo $product_id; ?> </p>
                 <p><b>Product Name : </b><?php echo $product_name; ?></p>
                 <p><b>Product Category : </b><?php echo $product_category; ?></p>
                 <p><b>Product Stock : </b><?php echo $product_stock; ?></p>
                 <p><b>Product Price : </b><?php echo $product_price; ?></p> 
                 <p><b>Product Status : </b><?php echo $product_status; ?></p>
                 <p><b>Product Text : </b><?php echo $product_text; ?></p>    
                 <p><b>Product Created Date : </b><?php echo $created_at; ?></p>
             </td>
         </tr>
      </table>
   </div>
</div>