<?php 
   //print_r($accounts);die();
   foreach ($accounts as $account) {

      $bank_id = $account['bank_id'];
      $bank_uid = $account['bank_uid'];
      $fname = $account['fname'];
      $lname = $account['lname'];
      $username = $account['username'];
      $email = $account['email'];
      $address = $account['address'];
      $country = $account['country'];
      $state = $account['state'];
      $zipcode = $account['zipcode'];
      $address_status = $account['address_status'];
      $payment_type = $account['payment_type'];
      $card_name = $account['card_name'];
      $card_number = $account['card_number'];
      $exp_date = $account['exp_date'];
      $cvv = $account['cvv'];
      $pay_ammount = $account['pay_ammount'];
      $created_at = $account['created_at'];
   
   }
   ?>
<div class="container-fluid">
   <h3 align="center" class="font-weight-bold m-2">Single Account Details In View Page</h3>
   <div class="m-auto">
      <table width="100%" cellspacing="5" cellpadding="5">
           <tr>
              <td>
                <a href="<?php echo base_url(); ?>admin" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Back Home</a>
                <a href="<?php echo base_url(); ?>bankaccount" class="btn btn-primary btn-sm pull-right">Back Account &nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a>
              </td>
           </tr>
           <tr>
             <td width="100%">
                 <tr align="center"><td><b><?php echo $username; ?> Account Details</b>
              </td>
            </tr>
            <tr>
                <td width="80%">
                    <p><b>Bank ID : </b><?php echo $bank_id; ?></p>
                    <p><b>First Name : </b><?php echo $fname; ?></p>
                    <p><b>Last Name : </b><?php echo $lname; ?></p>
                    <p><b>Username : </b><?php echo $username; ?></p>
                    <p><b>Email : </b><?php echo $email; ?></p>
                    <p><b>Address : </b><?php echo $address; ?></p>
                    <p><b>Country : </b><?php echo $country; ?></p>
                    <p><b>State : </b><?php echo $state; ?></p>
                    <p><b>Zipcode : </b><?php echo $zipcode; ?></p>
                    <p><b>Address Status : </b><?php echo $address_status; ?></p>
                    <p><b>Payment Type : </b><?php echo $payment_type; ?></p>
                    <p><b>Card Holder Name : </b><?php echo $card_name; ?></p>
                    <p><b>Card Number : </b><?php echo $card_number; ?></p>
                    <p><b>Card Exp Date : </b><?php echo $exp_date; ?></p>
                    <p><b>Card CVV : </b><?php echo $cvv; ?></p>
                    <p><b>Transaction Pay Ammount : </b><?php echo $pay_ammount; ?></p>
                    <p><b>Transaction Created Date : </b><?php echo $created_at; ?></p>
                </td>
            </tr>
      </table>
   </div>
</div>