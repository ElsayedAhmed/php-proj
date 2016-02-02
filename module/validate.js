/*var email;
var emailerr;*/

$(function() {
	/*$('#name').on('blur', function(event) {
		event.preventDefault();
		check_name();});
	$('#email').on('blur', function(event) {check_email();});
	$('#password').on('blur', function(event) {check_pass();})
	$('#repassword').on('blur', function(event) {check_repass();})
	$('#tel').on('blur',function(event) {check_tel();})*/
	
	/*$('#submit').on('click', function(event) {
		
		check_all();
	});*/
/*$('#submit').click(function(event) {
	

	var add={};
			add.name = $('#name').val();
			add.email = $('#email').val();
			add.password = $('#password').val();
			add.credit = $('#credit').val();
			add.birthdate = $('#birthdate').val();
			add.tel = $('#tel').val();
			add.address = $('#address').val();
			add.job = $('#job').val();
			add.interests = $('#interests').val();
			add.image = $('#image').val();
		
		
		$.ajax({
			url: 'validat.php',
			type: 'POST',
			data: add,
			success: function (response) {
				console.log(response);
			},
			error: function (error) {
				console.log(error);
			}
		})
		
		
	});*/
//})
	
	emailerr = $('#emailerr');
	//name
	//function check_name(){
	$('#name').on('blur', function(event) {
		event.preventDefault();
		name=$('#name').val();
		if (name.length<6) {
			$('#namerr').html("<b>Name must be greater than 6  character</b>");
			$(this).addClass('.has-error .glyphicon .glyphicon-remove')
			console.log('error');
			//$('#name').focus();
			
			//$('#name').select();
			//return false;

		}
			var letters = /^[A-Za-z]{6,10}/;
			if( name.match(letters)){
					$('#namerr').className = "";
					name.className = "";
					document.getElementById("namerr").style.display = "none";
					return true;		
				}
			else{
					$('#namerr').className = "";
					$('#namerr').html("<b>Name must contain character</b>");
					name.className=" Error";
					
					//$('#name').focus();
					//$('#name').select();
					return false;
					
				}
		}
		});
//}
		
//___________________________________________________________________________//
	//email

	$('#email').on('blur', function(event) {

		event.preventDefault();
	//function check_email(){

		email=$('#email').val();
		var re = /\S+@\S+\.\S+/;
		//var mailformat = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z0-9]$/;
		if(email.match(re))
		{
			$('#emailerr').className = "";
			document.getElementById("emailerr").style.display = "none";
			//return true;
			
		}
		else
		{
			$('#emailerr').html("<b>please enter valid email</b>");
			email.className=" Error";
			//$('#email').focus();
			//$('#email').select();
			//return false;
		
		}			


		/*$.ajax({
			url: 'validat.php?email='+$(this).val(),
			type: 'POST',
			dataType: 'html',
			
			success: function (response) {
				 if(response=="match"){
				 	//email found in database
					emailerr.html("<b>Email Not Available</b>");
					//$('#email').focus();
					//$('#email').select();
					
				}else{

					var mailformat = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z0-9]$/;
					if(email.match(mailformat))
					{
						$('#emailerr').className = "";
						document.getElementById("emailerr").style.display = "none";
						return true;
						
					}
					else
					{
						$('#emailerr').html("<b>please enter valid email</b>");
						email.className=" Error";
						//$('#email').focus();
						$('#email').select();
						return false;
					
					}			
				}
			},
			error: function (error) {
				console.log(error);
			}
		});*/
	});
//}
	//__________________________________________________________//
	//password
	$('#password').on('blur', function(event) {

		event.preventDefault();
	//function check_pass(){	
		pass=$('#password').val();
		if (pass.length<6) {
			
			$('#passerr').html("<b>password is weak </b>");
			//$('#password').focus();
			//$('#password').select();
			//return false;

		}else{
			var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;
			if( pass.match(re)){
					$('#passerr').className = "";
					pass.className = "";
					document.getElementById("passerr").style.display = "none";
					$('#passerr').html("<b>password is strong </b>");
					return true;		
				}
			else{
					$('#passerr').className = "";
					$('#passerr').html("<b>password must contain number and character</b>");
					name.className=" Error";
					
					//$('#password').focus();
					//$('#password').select();
					//return false;
					
				}
		}
	});
//}
	//______________________________________________________________//
	//confirm password
	$('#repassword').on('blur', function(event) {

		event.preventDefault();
	//function check_repass(){	
		pass=$('#password').val();
		repass=$('#repassword').val();
		if(pass == repass)
				{
					$('#password').className = "";
					$('#repassword').className = "";
					document.getElementById("repasserr").style.display = "none";
					return true;
					
				}
				else
				{
					$('#repasserr').html("<b>two password different</b>");
					$('#password').className = " Error";
					$('#repassword').className = " Error";
					//$('#password').focus();
					$('#password').select();
					return false;
					
				}
	});			
//}
})
/*function check_tel(){
	if ($('#tel').val().length=0) {
		$('#telerr').html("<b>you must enter your phone</b>");
		
		$('#telerr').className = " Error";
		$('#telerr').select();
		return false;
	}else{
		return true;
	}
}
function check_all(){
	return (check_name() && check_email() && check_pass() &&check_repass() &&check_tel());
}*/
/*$('#signup').on('click', function(event) {
	event.preventDefault();
	console.log('asmaa');
	var add={};
			add.name = $('#name').val();
			add.email = $('#email').val();
			add.password = $('#password').val();
			add.credit = $('#credit').val();
			add.birthdate = $('#birthdate').val();
			add.tel = $('#tel').val();
			add.address = $('#address').val();
			add.job = $('#job').val();
			add.interests = $('#interests').val();
			add.image = $('#image').val();
		
		
		$.ajax({
			url: 'validat.php',
			type: 'POST',
			data: add,
			success: function (response) {
				console.log('inserted');
			},
			error: function (error) {
				console.log(error);
			}
		})
		
		
	});*/

//});
