<div id="tabs-1">
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
							<th>Email</th>
							<th>Password</th>
							<th>Image</th>
							<th>BirthDate</th>
							<th>Job</th>
							<th>Tel.</th>
							<th>Address</th>
							<th>Credit</th>
							<th>Interstes</th>
							<th>Admin</th>
							<th>Status</th>
							<th>Name</th>
							<th>ID</th>
						</tr>
						</thead>
						<tbody>
							<?php	 
							//include 'user.php';
							$userObj= new User();
							$users= $userObj->users();
							foreach ($users as $key => $user)
							{
								$id=$user['id'];
								if ($id==null)
								{
									echo "<tr><td colspan='4'> No Data Found</td></tr> ";
								}
								else
								{
									echo "<tr><td> ".$user['email']."</td>";
									echo "<td> ".$user['password']."</td>";
									echo "<td><img src='".$user['image']."' class='img-responsive img-rounded' width='50px' height='40px' align='center'/></td>";
									echo "<td> ".$user['birthdate']."</td>";
									echo "<td> ".$user['job']."</td>";
									echo "<td> ".$user['tel']."</td>";
									echo "<td> ".$user['address']."</td>";
									echo "<td style='color:red'> ".$user['c_limit']."</td>";
									echo "<td> ".$user['interest']."</td>";
									if($user['admin']==1)
									{
										if($user['id']==1)
										{
											echo "<td><img src='images/admin.png' class='img-responsive img-rounded' width='25px' height='20px' align='center'/></td>";
										}
										else
										{
											echo "<td><a class='btn btn-warning' href='module/user-server.php?action=updateadmin&id=".$id;
											echo "&admin=0'><img src='images/admin.png' class='img-responsive img-rounded' width='25px' height='20px' align='center'/></a></td>";
										}
									}
									else
									{
										echo "<td><a class='btn btn-primary' href='module/user-server.php?action=updateadmin&id=".$id;
										echo "&admin=1'><img src='images/setadmin.png' class='img-responsive img-rounded' width='25px' height='20px' align='center'/></a></td>";
									}
									
									echo "<td><div class='btn-group btn-group-sm'>";
									if($user['active']==1)
									{
										if($user['id']==1)
										{
											echo "<a class='btn btn-danger' href='module/user-server.php?action=updatestaus&id=".$id;
										echo "&active=0' disabled='true'>Dectivate</a></div></td>";
										}
										else
										{
										echo "<a class='btn btn-danger' href='module/user-server.php?action=updatestaus&id=".$id;
										echo "&active=0'>Dectivate</a></div></td>";
										}
									}
									else
									{
										
										echo "<a class='btn btn-success' href='module/user-server.php?action=updatestaus&id=".$id;
										echo "&active=1'>Activate</a></div></td>";
										
									}
									echo "<td> ".$user['name']."</td>";
									echo "<td> ".$id."</td></tr>";
									
					
								}
							}								
							?>
						</tbody>
					</table>
				</div>
			</div><!-- end of tab-->
