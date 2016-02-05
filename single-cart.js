

$(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
  $('#addItem').on('click', function() {
	/*var id = $(this).attr('value_id');
	var userid = $(this).attr('userid');
	var name = $(this).attr('name');
	var date = $(this).attr('date');
	var status = $(this).attr('status');
	var price = $(this).attr('price');
	var image = $(this).attr('image');*/
	
	var user = {};
		user.id=$(this).attr('value_id');
		user.user_id=$(this).attr('userid');
		user.name=$(this).attr('name');
		user.order_date=$(this).attr('date');
		user.status=$(this).attr('status');
		user.price=$(this).attr('price');
		user.image=$(this).attr('image');
		console.log(user);
	$.ajax({
		
		url: 'add_to_cart.php?method=addToCart',
		type: 'POST',
		dataType: 'json',
		data:user,
		success:function(response)
		{
			console.log('inserted id = '+response);

		},
		error:function(response)
		{
			console.log(response);
		}
	});
	
	
		// alert("inserted");
	});
});
