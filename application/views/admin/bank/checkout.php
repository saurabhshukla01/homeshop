<!-- Begin Page Content -->
<div class="container-fluid">
   <h1 class="h3 mb-4 text-gray-800">Transaction Page</h1>
   <div class="container">
      <div class="row">
         <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
               <span class="text-muted">Your cart</span>
               <span class="badge badge-secondary badge-pill">3</span>
            </h4>
            <ul class="list-group mb-3">
               <li class="list-group-item d-flex justify-content-between lh-condensed">
                  <div>
                     <h6 class="my-0">Product name</h6>
                     <small class="text-muted">Brief description</small>
                  </div>
                  <span class="text-muted">$12</span>
               </li>
               <li class="list-group-item d-flex justify-content-between lh-condensed">
                  <div>
                     <h6 class="my-0">Second product</h6>
                     <small class="text-muted">Brief description</small>
                  </div>
                  <span class="text-muted">$8</span>
               </li>
               <li class="list-group-item d-flex justify-content-between lh-condensed">
                  <div>
                     <h6 class="my-0">Third item</h6>
                     <small class="text-muted">Brief description</small>
                  </div>
                  <span class="text-muted">$5</span>
               </li>
               <li class="list-group-item d-flex justify-content-between bg-light">
                  <div class="text-success">
                     <h6 class="my-0">Promo code</h6>
                     <small>EXAMPLECODE</small>
                  </div>
                  <span class="text-success">-$5</span>
               </li>
               <li class="list-group-item d-flex justify-content-between">
                  <span>Total (USD)</span>
                  <strong>$20</strong>
               </li>
            </ul>
            <form class="card p-2">
               <div class="input-group">
                  <input type="text" class="form-control" placeholder="Promo code">
                  <div class="input-group-append">
                     <button type="submit" class="btn btn-secondary">Redeem</button>
                  </div>
               </div>
            </form>
         </div>
         <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Billing address</h4>
            <?php echo form_open('bankaccount/checkout'); ?>
               <div class="row">
                  <div class="col-md-6 mb-3">
                     <label for="firstName">First name</label>
                     <input type="text" class="form-control" id="firstName" name="fname" placeholder="" value="" >
                     <label class="text-danger"><?php echo form_error('fname', '<td class="error">', '</td>'); ?></label>
                  </div>
                  <div class="col-md-6 mb-3">
                     <label for="lastName">Last name</label>
                     <input type="text" class="form-control" id="lastName" name="lname" placeholder="" value="">
                     <label class="text-danger"><?php echo form_error('lname', '<td class="error">', '</td>'); ?></label>
                  </div>
               </div>
               <div class="mb-3">
                  <label for="username">Username</label>
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                     </div>
                     <input type="text" class="form-control" id="username" name="username"placeholder="Username">
                  </div>
                  <label class="text-danger"><?php echo form_error('username', '<td class="error">', '</td>'); ?></label>
               </div>
               <div class="mb-3">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
                  <label class="text-danger"><?php echo form_error('email', '<td class="error">', '</td>'); ?></label>
               </div>
               <div class="mb-3">
                  <label for="address">Address</label>
                  <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St">
                  <label class="text-danger"><?php echo form_error('address', '<td class="error">', '</td>'); ?></label>
               </div>
               <div class="row">
                  <div class="col-md-5 mb-3">
                     <label for="country">Country</label>
                     <select class="custom-select d-block w-100" id="country" name="country">
                        <option disabled selected>Choose Country</option>
                        <option value="India">India</option>
                        <option value="Others">Others</option>
                     </select>
                     <label class="text-danger"><?php echo form_error('country', '<td class="error">', '</td>'); ?></label>
                  </div>
                  <div class="col-md-4 mb-3">
                     <label for="state">State</label>
                     <select class="custom-select d-block w-100" id="state" name="state">
                        <option disabled selected>Choose state</option>
                        <option value="Uttar pradesh">Uttar pradesh</option>
                        <option value="Dehli">Dehli</option>
                        <option value="Hariyana">Hariyana</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Noida">Noida</option>
                        <option value="Others">Others</option>
                     </select>
                     <label class="text-danger"><?php echo form_error('state', '<td class="error">', '</td>'); ?></label>
                  </div>
                  <div class="col-md-3 mb-3">
                     <label for="zipcode">ZipCode</label>
                     <input type="text" class="form-control" id="zip" name="zipcode" placeholder="">
                     <label class="text-danger"><?php echo form_error('zipcode', '<td class="error">', '</td>'); ?></label>
                  </div>
               </div>
               <hr class="mb-4">
               <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" name="address_status" id="same-address" value="Shipping address is the same as my billing address" >
                  <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
               </div>
               <label class="text-danger"><?php echo form_error('address_status', '<td class="error">', '</td>'); ?></label>
               <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" name="cookie" id="save-info" value="Save this information for next time">
                  <label class="custom-control-label" for="save-info">Remember me</label>
               </div>
               <label><small class="text-danger">Save Information For next time</small></label>
               <hr class="mb-4">
               <h4 class="mb-3">Payment</h4>
               <label for="fname">Accepted Cards</label>
                  <div class="icon-container">
                     <i class="fa fa-cc-visa" style="color:navy;"></i>
                     <i class="fa fa-cc-amex" style="color:blue;"></i>
                     <i class="fa fa-cc-mastercard" style="color:red;"></i>
                     <i class="fa fa-cc-discover" style="color:orange;"></i>
                  </div>
               <hr class="mb-4">
               <div class="d-block my-3">
                  <div class="custom-control custom-radio">
                     <input id="credit" name="payment_type" type="radio" class="custom-control-input" value="Credit card">
                     <label class="custom-control-label" for="credit">Credit card</label>
                  </div>
                  <div class="custom-control custom-radio">
                     <input id="debit" name="payment_type" type="radio" class="custom-control-input" value="Debit card">
                     <label class="custom-control-label" for="debit">Debit card</label>
                  </div>
                  <div class="custom-control custom-radio">
                     <input id="paypal" name="payment_type" type="radio" class="custom-control-input" value="Paypal">
                     <label class="custom-control-label" for="paypal">Paypal</label>
                  </div>
               </div>
               <label class="text-danger"><?php echo form_error('payment_type', '<td class="error">', '</td>'); ?></label>
               <div class="row">
                  <div class="col-md-6 mb-3">
                     <label for="cc-name">Name on card</label>
                     <input type="text" class="form-control" id="cc-name" placeholder="" name="card_name">
                     <small class="text-muted">Full name as displayed on card</small>
                     <label class="text-danger"><?php echo form_error('card_name', '<td class="error">', '</td>'); ?></label>
                  </div>
                  <div class="col-md-6 mb-3">
                     <label for="cc-number">Credit card number</label>
                     <input type="text" class="form-control" id="cc-number" placeholder="" name="card_number">
                     <label class="text-danger"><?php echo form_error('card_number', '<td class="error">', '</td>'); ?></label>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-3 mb-3">
                     <label for="cc-expiration">Expiration</label>
                     <input type="text" class="form-control" id="cc-expiration" placeholder="Ex- 2020-06-12" name="exp_date">
                     <label class="text-danger"><?php echo form_error('exp_date', '<td class="error">', '</td>'); ?></label>
                  </div>
                  <div class="col-md-3 mb-3">
                     <label for="cc-expiration">CVV</label>
                     <input type="text" class="form-control" id="cc-cvv" placeholder="" name="cvv">
                     <label class="text-danger"><?php echo form_error('cvv', '<td class="error">', '</td>'); ?></label>
                  </div>
               </div>
               <hr class="mb-4">
               <input class="btn btn-primary btn-lg btn-block mb-4" type="submit" value="Continue to checkout">
            </form>
         </div>
      </div>
   </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->