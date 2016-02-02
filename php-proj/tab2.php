<div id="tabs-2">
				<form role='form' class='form-horizontal col-md-12' action='module/cat-server.php' method='post'>
				<a class='col-md-2 btn btn-primary btn-lg ' value='Add new Category' id="show_add">Add new Category</a><br/>
				<div id="hidden">	
					<div class='form-group has-warning'>
						<label class='col-md-3'>insert new Category :</label>
						<div class='col-md-5 input-group'>
							<span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
							<input placeholder='Add Category' class='form-control col-md-2' name='add_cat' />
							<span>
							<?php if (isset($_SESSION['error'])){echo $_SESSION['error'];}?>	
							</span>
						</div>
					</div>	
					<span class='col-md-3'></span>
					<input  name="method" value="insert" type="hidden" >
					<input type='submit' class='col-md-2 btn btn-primary btn-lg' name='ok' value='Add Category' id="add"/>
				</div>
				</form>	
				<div class='get_all_category col-md-12 table-responsive'>
					<table class="table table-hover table-border">
			    		<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Number of products</th>
							<th>Action</th>
						</tr>
						<tr><th colspan="4">Categories With Products</th></tr>
						</thead>
						<tbody>
							<?php	 
							$cats= $cat->category();
							foreach ($cats as $key => $category)
							{
									
								$id=$category['id'];
								if ($id==null)
								{
									echo "<tr><td colspan='4'> No Data Found</td></tr> ";
								}
								else
								{
									echo "<tr><td> ".$id;
									echo "</td><td class='edit'>";
									
									echo "<form  role='form' class='form-horizontal col-md-5' action='module/cat-server.php?id=".$id."' method='post'>";
									echo "<input id='edit_cat' placeholder='".$category['name']."' name='edit_cat' class='edit_cat form-control' />";
									echo "<input id='do_edit' type='submit' class='do_edit btn btn-primary btn-lg' name='ok' value='submit edit' />";
									echo "<input  name='method' value='edit' type='hidden' ><img class='close' src='images/close_1.png'></form>";
										
									
									echo "<span id='error'>";
									echo "</span></td>";
									echo "<td>".$category['Products'] ."</td>";
									echo "<td><div class='btn-group btn-group-sm'>";

									echo "<a  class='btn btn-danger' href='module/cat-server.php?method=delete&id=".$id;
									echo "'>Delete</a></div></td></tr>";
								}
							}
							?>
						</tbody>
							<thead>
							<tr><th colspan="4">Empty Categories</th></tr>
							</thead>
						<tbody>
							<?php	 
							$cats= $cat->emptyCategory();
							foreach ($cats as $key => $category)
							{
								$id=$category['id'];
								if ($id==null)
								{
									echo "<tr><td colspan='4'> No Data Found</td></tr> ";
								}
								else
								{
									echo "<tr><td> ".$id;
									echo "</td><td class='edit'>";
									
									echo "<form  role='form' class='form-horizontal col-md-5' action='module/cat-server.php?id=".$id."' method='post'>";
									echo "<input id='edit_cat' placeholder='".$category['name']."' name='edit_cat' class='edit_cat form-control' />";
									echo "<input id='do_edit' type='submit' class='do_edit btn btn-primary btn-lg' name='ok' value='submit edit' />";
									echo "<input  name='method' value='edit' type='hidden' ></form>";
										
									
									echo "<span id='error'>";
									echo "</span></td>";
									echo "<td>----------------</td>";
									echo "<td><div class='btn-group btn-group-sm'>";

									echo "<a  class='btn btn-danger' href='module/cat-server.php?method=delete&id=".$id;
									echo "'>Delete</a></div></td></tr>";
								}
							}								
							?>
						</tbody>
					</table>
				</div>
				<form role='form' class='form-horizontal col-md-12' action='module/cat-server.php' method='post'>
				<div id="edit" class="hide">	
					<div class='form-group has-warning'>
						<label class='col-md-3'>Edit Category Name:</label>
						<div class='col-md-5 input-group'>
							<span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
							<input placeholder='<?php echo $edit_name ?>' class='form-control col-md-2' name='add_cat' />
							<span>
							<?php if (isset($_SESSION['error'])){echo $_SESSION['error'];}?>	
							</span>
						</div>
					</div>	
					<span class='col-md-3'></span>
					<input  name="method" value="edit" type="hidden" >
					<input type='submit' class='col-md-2 btn btn-primary btn-lg' name='ok' value='Update Name' id="add"/>
				</div>
				</form>	
			</div><!-- end of tab-->
