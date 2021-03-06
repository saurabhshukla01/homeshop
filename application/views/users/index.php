<section id="home">
   <!-- NAVIGATION -->
   <div id="navigation">
      <!-- container -->
      <div class="container">
         <div id="responsive-nav">
            <!-- category nav -->
            <div class="category-nav">
               <span class="category-header">Categories <i class="fa fa-list"></i></span>
               <ul class="category-list">
                  <?php foreach($categories as $category) : ?>
                  <li><a href="<?php echo base_url(); ?>shop/filter_product/<?php echo $category['category_id']; ?>"><?php echo $category['category_name']; ?></a></li>
                  <?php endforeach; ?>
               </ul>
            </div>
            <!-- /category nav -->
            <!-- menu nav -->
            <div class="menu-nav">
               <span class="menu-header">Menu <i class="fa fa-bars"></i></span>
               <ul class="menu-list">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Shop</a></li>
                  <li class="dropdown mega-dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Women <i class="fa fa-caret-down"></i></a>
                     <div class="custom-menu">
                        <div class="row">
                           <div class="col-md-4">
                              <ul class="list-links">
                                 <li>
                                    <h3 class="list-links-title">Categories</h3>
                                 </li>
                                 <li><a href="#">Women’s Clothing</a></li>
                                 <li><a href="#">Men’s Clothing</a></li>
                                 <li><a href="#">Phones & Accessories</a></li>
                                 <li><a href="#">Jewelry & Watches</a></li>
                                 <li><a href="#">Bags & Shoes</a></li>
                              </ul>
                              <hr class="hidden-md hidden-lg">
                           </div>
                           <div class="col-md-4">
                              <ul class="list-links">
                                 <li>
                                    <h3 class="list-links-title">Categories</h3>
                                 </li>
                                 <li><a href="#">Women’s Clothing</a></li>
                                 <li><a href="#">Men’s Clothing</a></li>
                                 <li><a href="#">Phones & Accessories</a></li>
                                 <li><a href="#">Jewelry & Watches</a></li>
                                 <li><a href="#">Bags & Shoes</a></li>
                              </ul>
                              <hr class="hidden-md hidden-lg">
                           </div>
                           <div class="col-md-4">
                              <ul class="list-links">
                                 <li>
                                    <h3 class="list-links-title">Categories</h3>
                                 </li>
                                 <li><a href="#">Women’s Clothing</a></li>
                                 <li><a href="#">Men’s Clothing</a></li>
                                 <li><a href="#">Phones & Accessories</a></li>
                                 <li><a href="#">Jewelry & Watches</a></li>
                                 <li><a href="#">Bags & Shoes</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="row hidden-sm hidden-xs">
                           <div class="col-md-12">
                              <hr>
                              <a class="banner banner-1" href="#">
                                 <img src="<?php echo base_url(); ?>/assets//img/banner05.jpg" alt="">
                                 <div class="banner-caption text-center">
                                    <h2 class="white-color">NEW COLLECTION</h2>
                                    <h3 class="white-color font-weak">HOT DEAL</h3>
                                 </div>
                              </a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="dropdown mega-dropdown full-width">
                     <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Men <i class="fa fa-caret-down"></i></a>
                     <div class="custom-menu">
                        <div class="row">
                           <div class="col-md-3">
                              <div class="hidden-sm hidden-xs">
                                 <a class="banner banner-1" href="#">
                                    <img src="<?php echo base_url(); ?>/assets/img/banner06.jpg" alt="">
                                    <div class="banner-caption text-center">
                                       <h3 class="white-color text-uppercase">Women’s</h3>
                                    </div>
                                 </a>
                                 <hr>
                              </div>
                              <ul class="list-links">
                                 <li>
                                    <h3 class="list-links-title">Categories</h3>
                                 </li>
                                 <li><a href="#">Women’s Clothing</a></li>
                                 <li><a href="#">Men’s Clothing</a></li>
                                 <li><a href="#">Phones & Accessories</a></li>
                                 <li><a href="#">Jewelry & Watches</a></li>
                                 <li><a href="#">Bags & Shoes</a></li>
                              </ul>
                           </div>
                           <div class="col-md-3">
                              <div class="hidden-sm hidden-xs">
                                 <a class="banner banner-1" href="#">
                                    <img src="<?php echo base_url(); ?>/assets/img/banner07.jpg" alt="">
                                    <div class="banner-caption text-center">
                                       <h3 class="white-color text-uppercase">Men’s</h3>
                                    </div>
                                 </a>
                              </div>
                              <hr>
                              <ul class="list-links">
                                 <li>
                                    <h3 class="list-links-title">Categories</h3>
                                 </li>
                                 <li><a href="#">Women’s Clothing</a></li>
                                 <li><a href="#">Men’s Clothing</a></li>
                                 <li><a href="#">Phones & Accessories</a></li>
                                 <li><a href="#">Jewelry & Watches</a></li>
                                 <li><a href="#">Bags & Shoes</a></li>
                              </ul>
                           </div>
                           <div class="col-md-3">
                              <div class="hidden-sm hidden-xs">
                                 <a class="banner banner-1" href="#">
                                    <img src="<?php echo base_url(); ?>/assets/img/banner08.jpg" alt="">
                                    <div class="banner-caption text-center">
                                       <h3 class="white-color text-uppercase">Accessories</h3>
                                    </div>
                                 </a>
                              </div>
                              <hr>
                              <ul class="list-links">
                                 <li>
                                    <h3 class="list-links-title">Categories</h3>
                                 </li>
                                 <li><a href="#">Women’s Clothing</a></li>
                                 <li><a href="#">Men’s Clothing</a></li>
                                 <li><a href="#">Phones & Accessories</a></li>
                                 <li><a href="#">Jewelry & Watches</a></li>
                                 <li><a href="#">Bags & Shoes</a></li>
                              </ul>
                           </div>
                           <div class="col-md-3">
                              <div class="hidden-sm hidden-xs">
                                 <a class="banner banner-1" href="#">
                                    <img src="<?php echo base_url(); ?>/assets/img/banner09.jpg" alt="">
                                    <div class="banner-caption text-center">
                                       <h3 class="white-color text-uppercase">Bags</h3>
                                    </div>
                                 </a>
                              </div>
                              <hr>
                              <ul class="list-links">
                                 <li>
                                    <h3 class="list-links-title">Categories</h3>
                                 </li>
                                 <li><a href="#">Women’s Clothing</a></li>
                                 <li><a href="#">Men’s Clothing</a></li>
                                 <li><a href="#">Phones & Accessories</a></li>
                                 <li><a href="#">Jewelry & Watches</a></li>
                                 <li><a href="#">Bags & Shoes</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li><a href="#">Sales</a></li>
                  <li class="dropdown default-dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Pages <i class="fa fa-caret-down"></i></a>
                     <ul class="custom-menu">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li><a href="<?php echo base_url(); ?>shop/products">Products</a></li>
                        <li><a href="<?php echo base_url(); ?>shop/product_page">Product Details</a></li>
                        <li><a href="<?php echo base_url(); ?>shop/checkout">Checkout</a></li>
                     </ul>
                  </li>
               </ul>
            </div>
            <!-- menu nav -->
         </div>
      </div>
      <!-- /container -->
   </div>
   <!-- /NAVIGATION -->
   <!-- HOME -->
   <div id="home">
      <!-- container -->
      <div class="container">
         <!-- home wrap -->
         <div class="home-wrap">
            <!-- home slick -->
            <div id="home-slick">
               <!-- banner -->
               <?php $i=0; ?>
               <?php foreach($products as $product) : ?>
               <div class="banner banner-1">
                  <img align="center" src="<?php echo base_url(); ?>assets/admin/shop/product/<?php echo $product['product_image']; ?>" style="opacity: 0.8;width:500px;height:500px;" alt="">
                  <div class="banner-caption text-center">
                     <h1>Bags sale</h1>
                     <h3 class="white-color font-weak">Up to 50% Discount</h3>
                     <button class="primary-btn">Shop Now</button>
                  </div>
               </div>
               <?php $i++; 
                  if($i==3){break;}
                  ?>
               <?php endforeach; ?>
               <!-- /banner -->
            </div>
            <!-- /home slick -->
         </div>
         <!-- /home wrap -->
      </div>
      <!-- /container -->
   </div>
   <!-- /HOME -->
   <!-- section -->
   <div class="section">
      <!-- container -->
      <div class="container">
         <!-- row -->
         <div class="row">
            <!-- banner -->
            <?php $i=4; ?>
            <?php foreach($products as $product) : ?>
            <div class="col-md-4 col-sm-6">
               <a class="banner banner-1" href="#">
                  <img src="<?php echo base_url(); ?>assets/admin/shop/product/<?php echo $product['product_image']; ?>" style="width:300px;height:300px;" alt="">
                  <div class="banner-caption text-center">
                     <h2 class="white-color" title="<?php echo $product['product_name']; ?>"><?php echo $product['product_name']; ?></h2>
                  </div>
               </a>
            </div>
            <?php $i++; 
               if($i==10){break;}
               ?>
            <?php endforeach; ?>
            <!-- /banner -->
            <!-- banner -->
            <!--<div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3">
               <a class="banner banner-1" href="#">
               	<img src="<?php echo base_url(); ?>/assets/img/banner12.jpg" alt="">
               	<div class="banner-caption text-center">
               		<h2 class="white-color">NEW COLLECTION</h2>
               	</div>
               </a>
               </div>-->
            <!-- /banner -->
         </div>
         <!-- /row -->
      </div>
      <!-- /container -->
   </div>
   <!-- /section -->
   <!-- section -->
   <div class="section">
      <!-- container -->
      <div class="container">
         <!-- row -->
         <div class="row">
            <!-- section-title -->
            <div class="col-md-12">
               <div class="section-title">
                  <h2 class="title">Deals Of The Day</h2>
                  <div class="pull-right">
                     <div class="product-slick-dots-1 custom-dots"></div>
                  </div>
               </div>
            </div>
            <!-- /section-title -->
            <!-- banner -->
            <div class="col-md-3 col-sm-6 col-xs-6">
               <div class="banner banner-2">
                  <img src="<?php echo base_url(); ?>/assets/img/banner14.jpg" alt="">
                  <div class="banner-caption">
                     <h2 class="white-color">NEW<br>COLLECTION</h2>
                     <button class="primary-btn">Shop Now</button>
                  </div>
               </div>
            </div>
            <!-- /banner -->
            <!-- Product Single -->
            <?php $i=3; ?>
            <?php foreach($products as $product) : ?>
            <div class="col-md-3 col-sm-6 col-xs-6">
               <div class="product product-single">
                  <div class="product-thumb">
                     <div class="product-label">
                        <span>New</span>
                        <span class="sale">-20%</span>
                     </div>
                     <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
                     <img src="<?php echo base_url(); ?>assets/admin/shop/product/<?php echo $product['product_image']; ?>"  style="width:255px;height:250px;" alt="">
                  </div>
                  <div class="product-body">
                     <h3 class="product-price"><?php echo $product['product_price']; ?> <del class="product-old-price">$45.00</del></h3>
                     <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o empty"></i>
                     </div>
                     <h2 class="product-name"><a href="#"><?php echo $product['product_name']; ?></a></h2>
                     <div class="product-btns">
                        <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                        <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                        <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                     </div>
                  </div>
               </div>
            </div>
            <?php $i++; 
               if($i==6){break;}
               ?>
            <?php endforeach; ?>
            <!-- /Product Single -->
         </div>
         <!-- /row -->
         <!-- row -->
         <div class="row">
            <!-- section title -->
            <div class="col-md-12">
               <div class="section-title">
                  <h2 class="title">Deals Of The Day</h2>
                  <div class="pull-right">
                     <div class="product-slick-dots-2 custom-dots">
                     </div>
                  </div>
               </div>
            </div>
            <!-- section title -->
            <!-- Product Single -->
            <?php $i=0; ?>
            <?php foreach($products as $product) : ?>
            <div class="col-md-3 col-sm-6 col-xs-6">
               <div class="product product-single product-hot">
                  <div class="product-thumb">
                     <div class="product-label">
                        <span class="sale">-20%</span>
                     </div>
                     <ul class="product-countdown">
                        <li><span>00 H</span></li>
                        <li><span>00 M</span></li>
                        <li><span>00 S</span></li>
                     </ul>
                     <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
                     <img src="<?php echo base_url(); ?>assets/admin/shop/product/<?php echo $product['product_image']; ?>" style="width:255px;height:250px;" alt="">
                  </div>
                  <div class="product-body">
                     <h3 class="product-price"><?php echo $product['product_price']; ?><del class="product-old-price">4500.00</del></h3>
                     <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o empty"></i>
                     </div>
                     <h2 class="product-name"><a href="#"><?php echo $product['product_name']; ?></a></h2>
                     <div class="product-btns">
                        <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                        <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                        <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                     </div>
                  </div>
               </div>
            </div>
            <?php $i++; 
               if($i==4){break;}
               ?>
            <?php endforeach; ?>
            <!-- /Product Single -->
         </div>
         <!-- /row -->
      </div>
      <!-- /container -->
   </div>
   <!-- /section -->
   <!-- section -->
   <div class="section section-grey">
      <!-- container -->
      <div class="container">
         <!-- row -->
         <div class="row">
            <!-- banner -->
            <div class="col-md-8">
               <div class="banner banner-1">
                  <img src="<?php echo base_url(); ?>/assets/img/banner13.jpg" alt="">
                  <div class="banner-caption text-center">
                     <h1 class="primary-color">HOT DEAL<br><span class="white-color font-weak">Up to 50% OFF</span></h1>
                     <button class="primary-btn">Shop Now</button>
                  </div>
               </div>
            </div>
            <!-- /banner -->
            <!-- banner -->
            <div class="col-md-4 col-sm-6">
               <a class="banner banner-1" href="#">
                  <img src="<?php echo base_url(); ?>/assets/img/banner11.jpg" alt="">
                  <div class="banner-caption text-center">
                     <h2 class="white-color">NEW COLLECTION</h2>
                  </div>
               </a>
            </div>
            <!-- /banner -->
            <!-- banner -->
            <div class="col-md-4 col-sm-6">
               <a class="banner banner-1" href="#">
                  <img src="<?php echo base_url(); ?>/assets/img/banner12.jpg" alt="">
                  <div class="banner-caption text-center">
                     <h2 class="white-color">NEW COLLECTION</h2>
                  </div>
               </a>
            </div>
            <!-- /banner -->
         </div>
         <!-- /row -->
      </div>
      <!-- /container -->
   </div>
   <!-- /section -->
   <!-- section -->
   <div class="section">
      <!-- container -->
      <div class="container">
         <!-- row -->
         <div class="row">
            <!-- section title -->
            <div class="col-md-12">
               <div class="section-title">
                  <h2 class="title">Latest Products</h2>
               </div>
            </div>
            <!-- section title -->
            <!-- Product Single -->
            <?php $i=20; ?>
            <?php foreach($products as $product) : ?>
            <div class="col-md-3 col-sm-6 col-xs-6">
               <div class="product product-single">
                  <div class="product-thumb">
                     <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
                     <img src="<?php echo base_url(); ?>assets/admin/shop/product/<?php echo $product['product_image']; ?>"  style="width:255px;height:250px;" alt="">
                  </div>
                  <div class="product-body">
                     <h3 class="product-price"><?php echo $product['product_price']; ?></h3>
                     <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o empty"></i>
                     </div>
                     <h2 class="product-name"><a href="#"><?php echo $product['product_name']; ?></a></h2>
                     <div class="product-btns">
                        <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                        <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                        <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                     </div>
                  </div>
               </div>
            </div>
            <?php $i--; 
               if($i==12){break;}
               ?>
            <?php endforeach; ?>
            <!-- /Product Single -->
         </div>
         <!-- /row -->
         <!-- row -->
         <div class="row">
            <!-- banner -->
            <div class="col-md-3 col-sm-6 col-xs-6">
               <div class="banner banner-2">
                  <img src="<?php echo base_url(); ?>/assets/img/banner15.jpg" alt="">
                  <div class="banner-caption">
                     <h2 class="white-color">NEW<br>COLLECTION</h2>
                     <button class="primary-btn">Shop Now</button>
                  </div>
               </div>
            </div>
            <!-- /banner -->
            <!-- Product Single -->
            <?php $i=3; ?>
            <?php foreach($products as $product) : ?>
            <div class="col-md-3 col-sm-6 col-xs-6">
               <div class="product product-single">
                  <div class="product-thumb">
                     <div class="product-label">
                        <span>New</span>
                        <span class="sale">-20%</span>
                     </div>
                     <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
                     <img src="<?php echo base_url(); ?>assets/admin/shop/product/<?php echo $product['product_image']; ?>"  style="width:255px;height:250px;" alt="">
                  </div>
                  <div class="product-body">
                     <h3 class="product-price"><?php echo $product['product_price']; ?> <del class="product-old-price">$45.00</del></h3>
                     <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o empty"></i>
                     </div>
                     <h2 class="product-name"><a href="#"><?php echo $product['product_name']; ?></a></h2>
                     <div class="product-btns">
                        <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                        <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                        <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                     </div>
                  </div>
               </div>
            </div>
            <?php $i++; 
               if($i==6){break;}
               ?>
            <?php endforeach; ?>
            <!-- /Product Single -->
         </div>
         <!-- /row -->
         <!-- row -->
         <div class="row">
            <!-- section title -->
            <div class="col-md-12">
               <div class="section-title">
                  <h2 class="title">Picked For You</h2>
               </div>
            </div>
            <!-- section title -->
            <!-- Product Single -->
            <div class="col-md-3 col-sm-6 col-xs-6">
               <div class="product product-single">
                  <div class="product-thumb">
                     <div class="product-label">
                        <span>New</span>
                        <span class="sale">-20%</span>
                     </div>
                     <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
                     <img src="<?php echo base_url(); ?>/assets/img/product01.jpg" alt="">
                  </div>
                  <div class="product-body">
                     <h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del></h3>
                     <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o empty"></i>
                     </div>
                     <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                     <div class="product-btns">
                        <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                        <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                        <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                     </div>
                  </div>
               </div>
            </div>
            <!-- /Product Single -->
         </div>
         <!-- /row -->
      </div>
      <!-- /container -->
   </div>
   <!-- /section -->
</section>