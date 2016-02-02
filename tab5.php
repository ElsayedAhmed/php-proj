<div id="tabs-5">
 <?php
        if(isset($_SESSION['Psuccess']))
        {
         	echo "<div class='form-group has-feedback col-md-12  has-success'><div class='col-md-10 col-md-offset-1 input-group'>";
        	echo "<span class='form-control-feedback glyphicon glyphicon-plus '></span>";
        	echo "<input style='color:green;font-size:22px;'disabled class='btn btn-lg form-control ' type='text' value='".$_SESSION['Psuccess']."'/>";
            echo "<span class='form-control-feedback glyphicon glyphicon-plus '></span>";
            echo "</div></div>";
            unset($_SESSION['Psuccess']);
        }
        ?>
				<div class='get_all_category col-md-12 table-responsive'>
					<table class="table table-hover  table-border">
			    		<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Category</th>
							<th>Sub-Cat</th>
							<th>Image</th>
							<th>Price</th>
							<th>Colors</th>
							<th>Sizes</th>
							<th>Quebtity</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
							<?php	 
							include 'module/product.php';
							$proObj= new Product();
							$prods= $proObj->products();
							foreach ($prods as $key => $prod)
							{
								$id=$prod['id'];
								if ($id==null)
								{
									echo "<tr><td colspan='4'> No Data Found</td></tr> ";
								}
								else
								{
									echo "<tr><td> ".$id."</td>";
									echo "<td> ".$prod['name']."</td>";
									echo "<td> ".$prod['cat']."</td>";
									echo "<td> ".$prod['sub']."</td>";
									echo "<td><img src='".$prod['image']."' class='img-responsive img-rounded' width='50px' height='40px' align='center'/></td>";
									echo "<td> ".$prod['price']."</td>";
									echo "<td> ".$prod['color']."</td>";
									echo "<td> ".$prod['size']."</td>";
									echo "<td> ".$prod['quantity']."</td>";
									if($prod['status']==1)
									{
										echo "<td><img src='images/a.png' class='img-responsive img-rounded' width='25px' height='20px' align='center'/></td>";
									}
									else
									{
										echo "<td><img src='images/n.png' class='img-responsive img-rounded' width='25px' height='20px' /></td>";
									}
									echo "<td><div class='btn-group btn-group-sm'>";
									echo "<a  class='btn btn-primary' href='controle-edit.php?action=edit&id=".$id;
									echo "#tabs-5'>Edit</a>";
									echo "<a  class='btn btn-danger' href='module/product-server.php?action=delete&id=".$id;
									echo "'>Delete</a>";
									if($prod['status']==1)
									{
										echo "<a class='btn btn-warning' href='module/product-server.php?action=editstatus&id=".$id;
										echo "&status=0'>Dective</a></div></td></tr>";
									}
									else
									{
										echo "<a class='btn btn-success' href='module/product-server.php?action=editstatus&id=".$id;
										echo "&status=1'>Active</a></div></td></tr>";
									}
					
								}
							}								
							?>
						</tbody>
					</table>
				</div>
			</div><!-- end of tab-->
