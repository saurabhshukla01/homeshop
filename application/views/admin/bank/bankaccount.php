<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Bank Account Page</h1>
          <p class="mb-4">Bank Account Page details Show after User Doing Transaction then Show User Admin After login</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Bank Account Details</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Sr. No</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Address</th>
                      <th>Country</th>
                      <th>State</th>
                      <th>ZipCode</th>
                      <th>Address Status</th>
                      <th>Payment Type</th>
                      <th>Name On Card</th>
                      <th>Credit Number</th>
                      <th>Expire Date</th>
                      <th>CVV</th>
                      <th>Transaction Ammount</th>
                      <th>Created Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Sr. No</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Address</th>
                      <th>Country</th>
                      <th>State</th>
                      <th>ZipCode</th>
                      <th>Address Status</th>
                      <th>Payment Type</th>
                      <th>Name On Card</th>
                      <th>Credit Number</th>
                      <th>Expire Date</th>
                      <th>CVV</th>
                      <th>Transaction Ammount</th>
                      <th>Created Date</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php $sn=1; ?>
                  <?php foreach($accounts as $account) : ?>
                    <tr>
                      <td><?php echo $sn; ?></td>
                      <td><?php echo $account['fname']; ?></td>
                      <td><?php echo $account['lname']; ?></td>
                      <td><?php echo $account['username']; ?></td>
                      <td><?php echo $account['email']; ?></td>
                      <td><?php echo $account['address']; ?></td>
                      <td><?php echo $account['country']; ?></td>
                      <td><?php echo $account['state']; ?></td>
                      <td><?php echo $account['zipcode']; ?></td>
                      <td><?php echo $account['address_status']; ?></td>
                      <td><?php echo $account['payment_type']; ?></td>
                      <td><?php echo $account['card_name']; ?></td>
                      <td><?php echo $account['card_number']; ?></td>
                      <td><?php echo $account['exp_date']; ?></td>
                      <td><?php echo $account['cvv']; ?></td>
                      <td><?php echo $account['pay_ammount']; ?></td>
                      <td><?php echo $account['created_at']; ?></td>
                      <td>
                      	<a href="<?php echo base_url(); ?>bankaccount/details/<?php echo $account['bank_uid']; ?>" class="btn btn-primary btn-sm btn-circle m-1" title="view"><span class="text-white"><i class="fas fa-mobile-alt"></i></span></a>
                        <a href="<?php echo base_url(); ?>bankaccount/pdfdetails/<?php echo $account['bank_uid']; ?>" class="btn btn-success btn-sm btn-circle m-1" title="pdf"><span class="text-white"><i class="fas fa-download"></i></span></a>
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

      </div>
      <!-- End of Main Content -->