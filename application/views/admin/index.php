<!-- Begin Page Content -->
<div class="container-fluid m-auto">
	<!-- Page Heading -->
	<header class="container bg-primary text-center py-5 mb-4">
   		<h3 class="font-weight-light text-white text-center">Homeshop 18 Products Home Page</h3>
	</header>
  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <?php foreach($products as $product) : ?>
      <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-0 shadow">
          <img src="<?php echo base_url(); ?>assets/admin/shop/product/<?php echo $product['product_image']; ?>" style="width:auto;height:200px;" class="card-img-top m-2" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title mb-0 font-weight-bold"><?php echo $product['product_name']; ?></h5>
            <div class="card-text text-danger font-weight-bold">Product Price : <?php echo $product['product_price']; ?></div>
            <div class="card-text text-danger mb-0">User Likes : 
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </div>
            <div class="card-text text-center text-white mt-2">
              <a class="btn btn-md btn-primary ml-2"><span id="<?php echo $product['product_uid']; ?>" onclick="clickme(this)">&nbsp;Add Cart : 0</span></a>
              <a href="<?php echo base_url(); ?>products/details/<?php echo $product['product_uid']; ?>" class="btn btn-md btn-info ml-2">&nbsp;User View</a>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <p class="m-auto text-center text-danger">*********************  This is the members of my Homeshop 18 List with details   *********************</p>
    <div class="row pull-right">
      <div class="pagination-links page-list-pagination p-2">
        <p class="m-2"><?php echo $this->pagination->create_links(); ?></p>
      </div>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
	</div>
</div>

<script type="text/javascript">
  function clickme(span){
    var product_uid = span.id;
    var button = document.getElementById(product_uid),
      count = 0;
    button.onclick = function() {
      count += 1;
      button.innerHTML = "Add Cart : " + count;
      //button.innerHTML = "<span class='badge badge-danger badge-counter'>" + count +"</span>";
    };
  }
</script>