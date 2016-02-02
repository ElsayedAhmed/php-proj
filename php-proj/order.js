
$(function()
{
	$('.order_count').click(function(event) {
		var id =$(this).prop('name');
		console.log(id);
		$.ajax({
            url: 'module/user-server.php?action=getorderdata&id='+id ,
            type: 'GET',
            dataType: 'html',
			success: function (response) 
            {
                //$(this).addClass('has-success has-feedback');
                var users= JSON.parse(response);
             
                HTMLTXT='<thead>';
				HTMLTXT+='<tr>';
				HTMLTXT+='<th>User Name</th>';
				HTMLTXT+='<th>Image</th>';
				HTMLTXT+='<th>Product</th>';
				HTMLTXT+='<th>Product Image</th>';
				HTMLTXT+='<th>Quentity</th>';
				HTMLTXT+='<th>Order Date</th>';
				HTMLTXT+='<th>Status</th>';
				HTMLTXT+='<th>Credit</th>';
				HTMLTXT+='</tr>';
				HTMLTXT+='</thead>';
             
                $.each(users,function(index, user) {
                	HTMLTXT+='<tr><th colspan="8">--- Listing orders Of<span style="color:red">  '+user.name+'</span> ---</th></tr>';

                	HTMLTXT+='<tbody><tr><td>'+user.name+'</td>';
                	HTMLTXT+='<td><img src="'+user.image+'" class="img-responsive img-rounded" width="50px" height="40px" align="center"/></td>';
                	HTMLTXT+='<td>'+user.Pname+'</td>';
                	HTMLTXT+='<td><img src="'+user.Pimage+'" class="img-responsive img-rounded" width="50px" height="40px" align="center"/></td>';
                	HTMLTXT+='<td>'+user.quantity+'</td>';
                	HTMLTXT+='<td>'+user.order_date+'</td>';
                	HTMLTXT+='<td>'+user.status+'</td>';
                	HTMLTXT+='<td style="color:red">'+user.c_limit+'</td></tr><tbody>';11111
                }); 
                $('#order').append(HTMLTXT);
               
                
            },
            error: function (error) 
            {
                console.log(error);
            }



		});//end of ajax
		


	});// end of click


});//end of loading functuion
/*	 
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
							*/