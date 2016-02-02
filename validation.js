




/*var email;
var emailerr;*/

$(function() {
	
	$('#name').on('blur', function(event) {
		
		event.preventDefault();
		name=$('#name').val();
		if (name.length<6) {
			
			$('#namerr').html("<b>Name must be greater than 6  character</b>");
			$('#cname').addClass('has-error ');
			$('#name').focus();
			$('#name').select();
			

		}
			var letters = /^[A-Za-z]{6,10}/;
			if( name.match(letters)){
					$('#namerr').html("");

					$('#nameval').html(" <font color='green'>valid user name</font>");
					$('#cname').removeClass('has-error');
					$('#cname').addClass('has-success');
				
				}
			else{
					$('#cname').addClass('has-error ');
					$('#cname').removeClass('has-success');
				}
		
		});
//}
		
//___________________________________________________________________________//
	//email

	$('#email').on('blur', function(event) {

		event.preventDefault();
		email=$('#email').val();
		var re = /\S+@\S+\.\S+/;
		//var mailformat = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z0-9]$/;
		if(email.match(re))
		{
			$.ajax({
				url: 'validat.php?email='+$(this).val(),
				type: 'POST',
				dataType: 'html',
				
				success: function (response) {
					 if(response=="match"){
					 	console.log(response);
						$('#emailerr').html("<b>Email already exist</b>");
						$('#emailval').html("");
						$('#cemail').addClass('has-warning');
						$('#cemail').removeClass('has-error');
						$('#cemail').removeClass('has-success');
						$(this).focus();
						$(this).select();
						
					}else
					{
						console.log(response);
						$('#cemail').removeClass('has-warning');
						$('#cemail').removeClass('has-error');
						$('#cemail').addClass('has-success');
						$('#emailval').html("<b><font color='green'>valid email</font></b>");
						$('#emailerr').html("");		
					}
				},
				error: function (error) {
					console.log(error);
				}
			});
		}//not match regular expression
		else
		{
			$('#emailerr').html("<b>please enter valid email</b>");
			$('#emailval').addClass('has-error');
			$('#emailval').removeClass('has-success');
			// email.className=" Error";
			$('#email').focus();
			$('#email').select();

		}
})
//}
	//__________________________________________________________//
	//password
	$('#password').on('blur', function(event) {

		event.preventDefault();
		pass=$('#password').val();
		if (pass.length<6)
		 {
			$('#passerr').html("<b>password is weak </b>");
			$('#passval').html("");
			$('#cpass').addClass('has-error');
			$('#cpass').removeClass('has-success');
			$('#password').focus();
			$('#password').select();


		}
		else
		{
			var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;
			if( pass.match(re))
			{	
				
				$('#cpass').removeClass('has-error');
				$('#cpass').addClass('has-success');
				$('#passval').html("<b><font color='green'>password strong</font></b>");
				$('#passerr').html("");

			}
			else
			{

				$('#passerr').html("<b>password must contain character , number and special character </b>");
				$('#passval').html("");
				$('#cpass').addClass('has-error');
				$('#cpass').removeClass('has-success');
				$('#password').focus();
				$('#password').select();

			}
		}
	});

	//______________________________________________________________//
	//confirm password
	$('#repassword').on('blur', function(event) {

		event.preventDefault();
		pass=$('#password').val();
		repass=$('#repassword').val();
		if(pass == repass)
				{
					$('#crepass').removeClass('has-error');
					$('#crepass').addClass('has-success');
					$('#repassval').html("<b><font color='green'>two password matched</font><b>");
					$('#repasserr').html("");	
				}
				else
				{
					$('#crepass').removeClass('has-success');
					$('#crepass').addClass('has-error');
					$('#repasserr').html("<b>two password different<b>");
					$('#repassval').html("");
					$('#passval').html("");
					$('#cpass').removeClass('has-success');
					$('#cpass').addClass('has-error');

					$('#password').focus();
					$('#password').select();

				}
	});
				

})

