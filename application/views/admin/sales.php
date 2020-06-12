<!-- Begin Page Content -->
<div class="container-fluid m-auto">
  <!-- Page Heading -->
  <header class="container bg-primary text-center py-5 mb-4">
      <h3 class="font-weight-light text-white text-center">Homeshop 18 Products Sales Page</h3>
  </header>
<!-- Page Content -->
<div class="container">
  <div class="row">
    <?php foreach($products as $product) : ?>
    <div class="col-xl-4 col-md-6 p-2">
      <div class="card border-0 shadow">
        <img src="<?php echo base_url(); ?>assets/admin/shop/product/<?php echo $product['product_image']; ?>" style="width:auto;height:200px;" class="card-img-top m-2" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0 font-weight-bold"><?php echo $product['product_name']; ?></h5>
          <div class="card-text text-danger font-weight-bold">Product Price : <?php echo $product['product_price']; ?></div>
          <!--<p class="card-title text-primary mb-0">Category : <?php //echo $product['product_category']; ?></p>-->
          <!--<strong class="card-title text-info mb-0">Product Stock : <?php //echo $product['product_stock']; ?></strong>-->
          <!--<div class="card-text text-danger mb-0">Product Status : <?php //echo $product['product_status']; ?></div>-->
          <div class="card-text text-danger mb-0">User Likes : <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
          <!--<div class="card-text text-dark mb-0">Product Text : <?php //echo $product['product_text']; ?></div>-->
          <div class="card-text text-center text-white mt-2">
            <a class="btn btn-md btn-primary ml-2"><i class="fa fa-shopping-cart"></i>&nbsp;Add Cart</a>
            <a href="<?php echo base_url(); ?>products/details/<?php echo $product['product_uid']; ?>" class="btn btn-md btn-info ml-2"><i class="fa fa-search"></i>&nbsp;User View</a>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
  <!-- /.row -->
  <p class="m-auto text-center text-danger">*********************  This is the members of my Homeshop 18 List with details   *********************</p>

</div>
<!-- /.container -->
  </div>
</div>