<div id="tabs-6">
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
						<tr><th colspan="2">--- count of users orders ---</th></tr>
						<tr>
							<th>User Name</th>
							<th>Orders Count</th>
						</tr>
						</thead>
						<tbody>
							<?php	 
							//include 'user.php';
							$userObj= new User();
							$users= $userObj->getUsersOrdercount();
							foreach ($users as $key => $user)
							{
								$id=$user['name'];
								if ($id==null)
								{
									echo "<tr><td colspan='4'> No Data Found</td></tr> ";
								}
								else
								{
									echo "<tr><td> ".$user['name']."</td>";
									
									echo "<td> ".$user['counts']."</td>";
									
									echo "</tr>";
									
					
								}
							}								
							?>
						</tbody>
			    		<thead>
						<tr><th colspan="8">--- Listing of users orders ---</th></tr>
						<tr>
							<th>User Name</th>
							<th>Image</th>
							<th>Product</th>
							<th>Product Image</th>
							<th>Quentity</th>
							<th>Order Date</th>
							<th>Status</th>
							<th>Credit</th>
						</tr>

						</thead>
						<tbody>
							<?php	 
							$users= $userObj->getUsersOrder();
							foreach ($users as $key => $user)
							{
								$id=$user['id'];
								if ($id==null)
								{
									echo "<tr><td colspan='4'> No Data Found</td></tr> ";
								}
								else
								{
									echo "<tr><td> ".$user['name']."</td>";
									
									echo "<td><img src='".$user['image']."' class='img-responsive img-rounded' width='50px' height='40px' align='center'/></td>";
									echo "<td> ".$user['Pname']."</td>";
									echo "<td><img src='".$user['Pimage']."' class='img-responsive img-rounded' width='50px' height='40px' align='center'/></td>";
									echo "<td> ".$user['quantity']."</td>";
									echo "<td> ".$user['order_date']."</td>";
									echo "<td> ".$user['status']."</td>";
									echo "<td style='color:red'> ".$user['c_limit']."</td>";
									echo "</tr>";
									
					
								}
							}								
							?>
						</tbody>
					</table>
				</div>
			</div><!-- end of tab-->
