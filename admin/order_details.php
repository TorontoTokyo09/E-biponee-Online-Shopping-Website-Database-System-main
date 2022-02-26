<?php
include 'header.php';
?>
<?php
$st ="";
	$rId = $_GET["order_id"];
	$data = array();
                $sql = "SELECT * FROM product_order where order_id='$rId'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
                        echo "<div class=\"prodlist-i\">";
                        $data["order_id"] = $row["receipt_id"];
                        $data["user_name"] = $row["user_name"];
                        $data["email"] = $row["email"];
                        $data["total"] = "$".$row["total"];
						$data["address"] = $row["address"];
						$data["phone_no"] = $row["phone_no"];
						$data["zipcode"] = $row["zipcode"];
						$data["status"] = $row["status"];
						$st = $row["status"];
						$data["payment"] = $row["payment"];
						$data["order_date"] = $row["order_date"];
				}
				}
						

?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="customContent">
      <div class="pad row">
        <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Pending List</h3>
            </div>
            <div class="panel panel-default">
                    <div class="panel-body">

                        <table class="table">
                            <tbody>
                            <tr>
                                <td width="30%" style="text-align: right;"><strong>Order ID#</strong></td>
                                <td><?php echo $data["order_id"]; ?></td>
                            </tr>
                            <tr>
                                <td width="30%" style="text-align: right;"><strong>Customer Name:</strong></td>
                                <td><?php echo $data["user_name"]; ?></td>
                            </tr>
                            <tr>
                                <td width="30%" style="text-align: right;"><strong>Customer Email:</strong></td>
                                <td><?php echo $data["email"]; ?></td>
                            </tr>
                            <tr>
                                <td width="30%" style="text-align: right;"><strong>Customer Phone:</strong></td>
                                <td><?php echo $data["phone_no"]; ?></td>
                            </tr>
                            <tr>
                                <td width="30%" style="text-align: right;"><strong>Customer Address:</strong></td>
                                <td><?php echo $data["address"]; ?></td>
                            </tr>
                            <tr>
                                <td width="30%" style="text-align: right;"><strong>Customer Postal Code:</strong></td>
                                <td><?php echo $data["zipcode"]; ?></td>
                            </tr>
                            
                            <tr>
                                <td width="30%" style="text-align: right;"><strong>Total Product:</strong></td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td width="30%" style="text-align: right;"><strong>Total Cost:</strong></td>
                                <td><?php echo $data["total"]; ?></td>
                            </tr>
                            <tr>
                                <td width="30%" style="text-align: right;"><strong>Ordered Date:</strong></td>
                                <td><?php echo $data["order_date"]; ?></td>
                            </tr>
                            <tr>
                                <td width="30%" style="text-align: right;"><strong>Payment Method:</strong></td>
                                <td><?php echo $data["payment"]; ?></td>
                            </tr>
                        
                            </tbody></table>
							
							<h4 class="text-center">Products Ordered</h4><hr>
							<table class="table table-striped">
                                
                                <thead>
                                <tr>
                                    <th width="10%">Product ID#</th>
                                    <th>Product Title</th>
                                    <th width="5%">Quantity</th>
                                    <th width="20%">Owner</th>
                                    <th width="10%">Status</th>
                                </tr>
                                </thead>
                                <tbody>
								<?php
									$data = array();
									$sql1 = "SELECT * FROM ordered_product_list INNER JOIN product ON product.product_id = ordered_product_list.product_id WHERE order_id='$rId'";
									
									$result1 = $conn->query($sql1);
									if ($result1->num_rows > 0){
										while($row1 = $result1->fetch_assoc()) {
								?>
                                     <tr>
                                         <td><?php echo $row1["product_id"]; ?></td>
                                            <td><?php echo $row1["title"]; ?></td>
                                            <td><?php echo $row1["quantity"]; ?></td>
                                            
                                            <td>
                                                                                                    <a href="" target="_blank"><?php echo $row1["owner"]; ?></a>
                                                                                            </td>
                                            <td class="o-processing"><?php echo $st; ?></td>
                                        </tr>
										
										<?php
									}
									}
										?>
                                             

                                </tbody>
                            </table>

                    </div>
                </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
