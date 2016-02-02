<div id="tabs-3">
				
				<form role='form' class='form-horizontal col-md-12' action='module/sub-cat-server.php' method='post'>
				<a class='col-md-2 btn btn-primary btn-lg ' value='Add new Sub Category' id="show_add_sub">Add new Category</a><br/>
				<div id="hidden_sub">	
					<div class='form-group has-warning'>
						<label class='col-md-3'>insert new Sub Category :</label>
						<div class='col-md-5 input-group'>
						<select class='.form-group-sm col-md-10 btn-warning btn-lg' name='cat_id' id="choose_cat"/>
						<option disabled="true" selected>choose category</option>
							<?php	 
								$subs= $cat->allCategory();
								foreach ($subs as $key => $sub)
								{	
									echo "<option class='col-md-4 btn-warning btn-lg' value='".$sub['id']."'>".$sub['name']."</option>";
								}
							?>
							</select>
							<br/>
							<input placeholder='Add Sub Category' class='form-control col-md-3' name='add_sub_cat' id="sub_cat_lable"/>
							<span>
							<?php if (isset($_SESSION['error'])){echo $_SESSION['error'];}?>	
							</span>
						</div>
					</div>	
					<span class='col-md-3'></span>
					<input  name="method" value="insert" type="hidden" >
					<input type='submit' class='col-md-2 btn btn-primary btn-lg' name='ok' value='Add Sub-Category' id="add"/>
				</div>
				</form>	
				<div class='get_all_category col-md-12 table-responsive'>
					<table class="table table-hover  table-border">
			    		<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Category Name</th>
							<th>Number of products</th>
							<th>Action</th>
						</tr>
						<tr><th colspan="5">Sub-Categories With Products</th></tr>
						</thead>
						<tbody>
							<?php	 
							$subs= $subObj->sub_category();
							foreach ($subs as $key => $sub)
							{
									
								$id=$sub['id'];
								if ($id==null)
								{
									echo "<tr><td colspan='4'> No Data Found</td></tr> ";
								}
								else
								{
									
									echo "<tr><td> ".$id;

									echo "</td><td class='edit'>";
									echo "<form  role='form' class='form-horizontal col-md-5' action='module/sub-cat-server.php?id=".$id."' method='post'>";
									echo "<input id='edit_cat' placeholder='".$sub['name']."' name='edit_sub_cat' class='edit_cat form-control' />";
									echo "<input id='do_edit' type='submit' class='do_edit btn btn-primary btn-lg' name='ok' value='submit edit' />";
									echo "<input  name='method' value='editname' type='hidden' ></form>";
										
									
									echo "</td><td class='edit_sub_cat'>";
									echo "<form  role='form' class='form-horizontal col-md-5 e' action='module/sub-cat-server.php?id=".$id."' method='post'>";
									echo "<select class=' btn-warning btn-lg edit_cat_id' name='sub_cat_id' id='choose_cat'/>";
									echo "<option disabled='true' selected>".$sub['category']."</option>";

									$subs2= $cat->allCategory();
									foreach ($subs2 as $key => $subcat)
									{	
										echo "<option class='col-md-4 btn-warning btn-lg' value='".$subcat['id']."'>".$subcat['name']."</option>";
									}
									echo "</select>";
									echo "<input id='do_edit' type='submit' class='do_edit_id btn btn-primary btn-lg' name='ok' value='submit edit' />";
									echo "<input  name='method' value='editcatid' type='hidden' ></form></td>";

									echo "<td> <a class='current_cat'>".$sub['category']."</a></td>";
									echo "<td>".$sub['Products'] ."</td>";
									echo "<td><div class='btn-group btn-group-sm'>";
									echo "<a  class='btn btn-danger' href='module/sub-cat-server.php?method=delete&id=".$id;
									echo "'>Delete</a></div></td></tr>";

								}
							}
							?>
						</tbody>
							<thead>
							<tr><th colspan="5">Empty Sub-Categories</th></tr>
							</thead>
						<tbody>
							<?php	 
							$subss= $subObj->emptysub_category();
							foreach ($subss as $key => $sub)
							{
								$id=$sub['id'];
								if ($id==null)
								{
									echo "<tr><td colspan='4'> No Data Found</td></tr> ";
								}
								else
								{
									echo "<tr><td> ".$id;

									echo "</td><td class='edit'>";
									echo "<form  role='form' class='form-horizontal col-md-5' action='module/sub-cat-server.php?id=".$id."' method='post'>";
									echo "<input id='edit_cat' placeholder='".$sub['name']."' name='edit_sub_cat' class='edit_cat form-control' />";
									echo "<input id='do_edit' type='submit' class='do_edit btn btn-primary btn-lg' name='ok' value='submit edit' />";
									echo "<input  name='method' value='editname' type='hidden' ></form>";
										
									
									echo "</td><td class='edit_sub_cat'>";
									echo "<form  role='form' class='form-horizontal col-md-5 e' action='module/sub-cat-server.php?id=".$id."' method='post'>";
									echo "<select class=' btn-warning btn-lg edit_cat_id' name='sub_cat_id' id='choose_cat'/>";
									echo "<option disabled='true' selected>".$sub['category']."</option>";

									$subs2= $cat->allCategory();
									foreach ($subs2 as $key => $subcat)
									{	
										echo "<option class='col-md-4 btn-warning btn-lg' value='".$subcat['id']."'>".$subcat['name']."</option>";
									}
									echo "</select>";
									echo "<input id='do_edit' type='submit' class='do_edit_id btn btn-primary btn-lg' name='ok' value='submit edit' />";
									echo "<input  name='method' value='editcatid' type='hidden' ></form></td>";

									echo "<td> <a class='current_cat'>".$sub['category']."</a></td>";
									echo "<td>----------------</td>";
									echo "<td><div class='btn-group btn-group-sm'>";
									echo "<a  class='btn btn-danger' href='module/sub-cat-server.php?method=delete&id=".$id;
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
