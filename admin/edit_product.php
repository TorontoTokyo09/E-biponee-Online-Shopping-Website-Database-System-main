<?php
	include 'edit_product_header.php';
		
	
	$ids = $_GET["ids"];
	$feature_type = array();
	$feature_value = array();
	$allImages = array();
	$imageId = array();
	$user_data = array();
	$feature_id = array();

	
	$sql = "SELECT * FROM product where product_id ='$ids' && status='1'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
                        echo "<div class=\"prodlist-i\">";
                        $id = $row["product_id"];
                        $user_data["title"] = $row["product_name"];
                        $user_data["price"] = $row["product_price"];
						$user_data["category"] = $row["product_category"];
						$user_data["disc"] = $row["product_description"];
						$user_data["video"] = $row["product_video"];
						$user_data["img"] = $row["product_primary_image"];
					
					
					$sql1 = "SELECT * FROM product_features where product_id='$id'";
					$result1 = $conn->query($sql1);
					if ($result1->num_rows > 0){
					$count=0;
                    while($row1 = $result1->fetch_assoc()) {
							$feature_type[$count] = $row1["feature_type"];
							$feature_value[$count] = $row1["feature_value"];
							$feature_id[$count] = $row1["feature_id"];
							$count++;
						}
					}

					$sql2 = "SELECT * FROM images where product_id='$id'";
					$result2 = $conn->query($sql2);
					if ($result2->num_rows > 0){
					$count=0;
                    while($row2 = $result2->fetch_assoc()) {
							$allImages[$count] = $row2["image_url"];
							$imageId[$count] = $row2["image_id"];
							$count++;
						}
					}					
				}
				}
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Product
      </h1>
		<div id="succ" class="succ">
		
		</div>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
			<table class="table table-bordered table-hover table-sortable">
			  <thead>
				<tr>
				  <th scope="col">#</th>
				  <th scope="col">Type</th>
				  <th scope="col">Value</th>
				</tr>
			  </thead>
			  
			  <form action="save_product.php" method="POST" enctype="multipart/form-data">
			  <tbody>
				<tr>
				  <th scope="row">1</th>
				  <td>Title</td>
				  <td>
				  <input type="text" class="form-control" name="title" id="title123" value="<?php echo $user_data["title"] ?>"/>
				  </td>
				</tr>
				<tr>
				  <th scope="row">2</th>
				  <td>Price</td>
				  <td>
				  <input type="text" class="form-control"  name="price" id="price123" value="<?php echo $user_data["price"] ?>"/>
				  </td>
				</tr>
				<tr>
				  <th scope="row">2</th>
				  <td>Category</td>
				  <td>
				  <input type="text" class="form-control"  name="category" id="category" value="<?php echo $user_data["category"] ?>"/>
				  </td>
				</tr>
				<tr>
				  <th scope="row">2</th>
				  <td>Description</td>
				  <td>
				  <input type="text" class="form-control"  name="disc" id="disc" value="<?php echo $user_data["disc"] ?>"/>
				  </td>
				</tr>
				
				<tr>
				  <th scope="row">3</th>
				  <td>Product Feature</td>
				  <td>
				  
				  <button type="button"style="margin-bottom:10px" class="btn btn-success" data-toggle="modal" data-target="#addfeature">Add Feature</button>
				  
				  <div id="addfeature" class="modal fade" role="dialog">
					  <div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Add Feature</h4>
						  </div>
						  <div class="modal-body">
							
							<form action="save_product.php" method="POST">
							
							<input type="hidden" name="ids" id="idsvalue" value="<?php echo $ids ?>"/>
								<div class="form-group">
									<label for="email">Feature Type</label>
									<input type="text" name="feature_type" class="form-control" id="feature_type">
								</div>
								
								<div class="form-group">
									<label for="email">Feature Value</label>
									<input type="text" name="feature_value" class="form-control" id="feature_value">
								</div>
								<button type="submit" name="save" value="save" class="btn btn-success">Save</button>
							</form>
							
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						  </div>
						</div>

					  </div>
					</div>
				  
				  
				  <?php
					for($i=0; $i<count($feature_type); $i++){
						?>
						<input type="text" style="width:45%" class="form-control" name="feature[]" id="" value="<?php echo $feature_type[$i] ?>"/>
						
						<input type="text" style="width:45%;margin-left: 46%; margin-top: -4.5%;" class="form-control" name="value[]" id="" value="<?php echo $feature_value[$i] ?>"/>
						<a href="delete_feature.php?feature_id=<?php echo $feature_id[$i] ?>"><button style="margin:-35px 20px 0 0; float:right" type="button" class="btn btn-danger">
							<span aria-hidden="true">&times;</span>
						</button></a>
						<br />
						<?php
					}
				  ?>
				  </td>
				</tr>
				<tr>
				  <th scope="row">2</th>
				  <td>
				  Images
				  <button type="button"style="margin-bottom:10px" class="btn btn-success" data-toggle="modal" data-target="#addfeature1">Add Images</button>
				  
				  <div id="addfeature1" class="modal fade" role="dialog">
					  <div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal1">&times;</button>
							<h4 class="modal-title">Add Images</h4>
						  </div>
						  <div class="modal-body">
							
							<form action="save_product.php" method="POST" enctype="multipart/form-data">
							
							<input type="hidden" name="ids" value="<?php echo $ids ?>"/>
								<div class="form-group">
									<label for="email">Feature Type</label>
									<input type="file" name="fileToUpload" class="form-control" id="feature_type">
								</div>
								<input type="hidden" name="ids" value="<?php echo $ids ?>"/>
								
								<button type="submit" name="imgsave" value="save" class="btn btn-success">Save</button>
							</form>
							
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						  </div>
						</div>

					  </div>
					</div>
					
				  </td>
				  <td>
				  
				  <input type="hidden" id="str_var" name="str_var" value="<?php print base64_encode(serialize($allImages)) ?>">
				  
				  <input type="hidden" id="str_var1" name="str_var1" value="<?php print base64_encode(serialize($feature_id)) ?>">
				  
				  <input type="hidden" name="ids" value="<?php echo $ids ?>" />
					<?php
						for($j=0; $j<count($allImages); $j++){
							?>
							<div class="imgs">
							<img class="cus-img" src="<?php echo "../admin/uploads/".$allImages[$j] ?>" alt=""/>
							<a href="delete_img.php?imageId=<?php echo $imageId[$j] ?>"><button style="margin-top: 35%;" type="button" class="cus-btn btn btn-danger">Delete</button></a>
							</div>
							<?php
						}
					?>
				  </td>
				  
				</tr>
				<tr>
				  <th scope="row">2</th>
				  <td>Video</td>
				  <td>
				  <input type="text" class="form-control"  name="video" id="video" value="<?php echo $user_data["video"] ?>"/>
				  </td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				  <td>
					<div class="save" style="float:right">
						<button type="submit" name="allsubmit" id="allsubmit" value="save" class="btn btn-success">Save</button>
					</div>
				  </td>
				</tr>
				</form>
			  </tbody>
			  
			</table>
			
		  </div>
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

  
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
<script type="text/javascript">
		
		$('#allsubmit').click(function(){
			var sub = $("#allsubmit").val();
			var ids1 = $("#idsvalue").val();
			var name1 = $("#title123").val();
			var price1 = $("#price123").val();
			var category = $("#category").val();
			var disc = $("#disc").val();
			var video = $("#video").val();
			
			$.ajax({
				type:'POST',
				data:{sub:sub,ids1:ids1,name1:name1,price1:price1, category:category, disc:disc, video:video},
				url:"save_product.php",
				success : function(result){
					document.getElementById("succ").innerHTML="<div class='alert alert-success'><strong>!success</strong> Successfully Updated</div>";
				}
			})
		});
</script>
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
