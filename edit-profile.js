$(function() 
{
    $("#editname").addClass('hide');
	$("#click_name").on('click', function(event) 
	{
    	
    	$('#name').addClass('hide');
    	$('#editname').removeClass('hide');
    	$('#edit_name').change(function(event) {
    		newname = $(this).val();
    		
    		console.log(newname);
    		$('#do_edit_name').on('click',function(event) {
	    		
	    		$.ajax
		        ({
		            url: 'module/user-server.php?action=editname&name='+newname ,
		            type: 'GET',
		            dataType: 'html',
		            success: function (response) 
		            {
		                //$('#editname').addClass('hide');
		        		//$("#name").removeClass('hide');
		                console.log(response);
		                location.reload();   
		            },
		            error: function (error) 
		            {
		                console.log(error);
		            }
		        });//end of ajax
		    });// end of button submit click
    	});// end of button change

	});// end of edit click
	$("#editemail").addClass('hide');
	$("#click_email").on('click', function(event) 
	{
    	
    	$('#email').addClass('hide');
    	$('#editemail').removeClass('hide');
    	$('#edit_email').change(function(event) {
    		newemail = $(this).val();
    		
    		console.log(newemail);
    		$('#do_edit_email').on('click',function(event) {
	    		
	    		$.ajax
		        ({
		            url: 'module/user-server.php?action=editemail&email='+newemail ,
		            type: 'GET',
		            dataType: 'html',
		            success: function (response) 
		            {
		                //$('#editemail').addClass('hide');
		        		//$("#email").removeClass('hide');
		                console.log(response);
		                location.reload();   
		            },
		            error: function (error) 
		            {
		                console.log(error);
		            }
		        });//end of ajax
		    });// end of button submit click
    	});// end of button change

	});// end of edit click
	$("#editpassword").addClass('hide');
	$("#click_password").on('click', function(event) 
	{
    	
    	$('#password').addClass('hide');
    	$('#editpassword').removeClass('hide');
    	$('#edit_password').change(function(event) {
    		newpassword = $(this).val();
    		
    		console.log(newpassword);
    		$('#do_edit_password').on('click',function(event) {
	    		
	    		$.ajax
		        ({
		            url: 'module/user-server.php?action=editpassword&password='+newpassword ,
		            type: 'GET',
		            dataType: 'html',
		            success: function (response) 
		            {
		                //$('#editpassword').addClass('hide');
		        		//$("#password").removeClass('hide');
		                console.log(response);
		                location.reload();   
		            },
		            error: function (error) 
		            {
		                console.log(error);
		            }
		        });//end of ajax
		    });// end of button submit click
    	});// end of button change

	});// end of edit click
	$("#editc_limit").addClass('hide');
	$("#click_c_limit").on('click', function(event) 
	{
    	
    	$('#c_limit').addClass('hide');
    	$('#editc_limit').removeClass('hide');
    	$('#edit_c_limit').change(function(event) {
    		newc_limit = $(this).val();
    		
    		console.log(newc_limit);
    		$('#do_edit_c_limit').on('click',function(event) {
	    		
	    		$.ajax
		        ({
		            url: 'module/user-server.php?action=editc_limit&c_limit='+newc_limit ,
		            type: 'GET',
		            dataType: 'html',
		            success: function (response) 
		            {
		                //$('#editc_limit').addClass('hide');
		        		//$("#c_limit").removeClass('hide');
		                console.log(response);
		                location.reload();   
		            },
		            error: function (error) 
		            {
		                console.log(error);
		            }
		        });//end of ajax
		    });// end of button submit click
    	});// end of button change

	});// end of edit click





});//end of onload function