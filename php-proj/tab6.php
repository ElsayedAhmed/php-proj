<script src="order.js" type="text/javascript" charset="utf-8" async defer></script>
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
					<table class="table table-hover  table-border" id="order">
			    		<thead>
						<tr><th colspan="4">--- count of users orders ---</th></tr>
						<tr>
							<th colspan='2'>User Name</th>
							<th colspan='2'>Orders Count</th>
						</tr>
						</thead>
						<tbody>
							<?php	 
							//include 'user.php';
							$userObj= new User();
							$users= $userObj->getUsersOrdercount();
							foreach ($users as $key => $user)
							{
								$id=$user['uid'];
								if ($id==null)
								{
									echo "<tr><td colspan='4'> No Data Found</td></tr> ";
								}
								else
								{
									echo "<tr colspan='2'><td> ".$user['name']."</td>";
									
									echo "<td  colspan='2'><a href='#' class='order_count btn btn-primary' name='".$user['uid']."'>orders <span class='badge'>".$user['counts']."</span></a></td>";
									
									echo "</tr>";
									
					
								}
							}								
							?>
						</tbody>
					</table>
				</div>
			</div><!-- end of tab-->
