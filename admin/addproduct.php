<?php
	include 'admin_header.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php
			if(isset($_GET["st"])){
		?>
		<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Success!</h4>
                Product Added
              </div>
		<?php
	}
		?>
      <div class="addproduct">
		<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add Product</h3>
            </div>
			<h2><span id="success"/></h2>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="add.php" enctype="multipart/form-data" name="add_product" id="add_product" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Product Title</label>

                  <div class="col-sm-7">
                    <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="Title">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Description</label>
				  
				 <div class="form-group">
				  <div class="col-sm-7">
                  <textarea class="form-control" name="desc" rows="3" placeholder="Enter ..."></textarea>
				  </div>
                </div>
				</div>
				<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Add Feature</label>
				  
				  <div class="bb" style="margin-left: 17.5%;">
					<table class=" tab table table-bordered" id="dynamic_field">  
                                    <tr>  
                                         <td><input type="text" name="type[]" placeholder="Type" class="form-control name_list" /></td>  
										 
										 <td><input type="text" name="value[]" placeholder="Value" class="form-control name_list" /></td>  
										 
                                         <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                                    </tr>  
                               </table>
						</div>
                </div>
				<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Video</label>

                  <div class="col-sm-7">
                    <input type="text" name="video" class="form-control" id="inputEmail3" placeholder="Video Youtube Link">
                  </div>
                </div>
			
			<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Price</label>

                  <div class="col-sm-7">
                    <input type="text" name="price" class="form-control" id="inputEmail3" placeholder="Price in TK">
                  </div>
                </div>
				
				<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Image</label>

                  <div class="col-sm-7">
                    <input type="file" name="fileToUpload[]" multiple="multiple" class="form-control" id="inputEmail3" enctype="multipart/form-data" placeholder="Video Youtube Link">
                  </div>
                </div>
				
				<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Category</label>

                  <div class="col-md-7">
				<div class="form-group">
                <select name="category" class="form-control select2" style="width: 100%;">
                  <option selected="selected">NO Category</option>
                  <option>Tshirt</option>
                  <option>Electronics</option>
                  <option>One</option>
                  <option>Men</option>
                  <option>Women</option>
                  <option>Knitwear</option>
                  <option>Dresses</option>
                  <option>GDresses</option>
                  <option>Bags</option>
                  <option>GBags</option>
                  <option>Jacket</option>
                  <option>Gacket</option>
                  <option>pants </option>
                  <option>Gpants </option>
                  <option>Sunglass</option>
                  <option>Watch</option>
                  <option>Jewelry</option>
                </select>
              </div>
            </div>
                </div>
				
				
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" id="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          <!-- /.box -->
        </div>
	  </div>
	  
    

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2017 <a href="index.php">biponee</a>.</strong> All rights
    reserved.

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
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

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>

<script>  
  $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="type[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><input type="text" name="value[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });
 });  
 </script>
</html>