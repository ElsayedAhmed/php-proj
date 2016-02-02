
$(function()
{
    $( "#tabs" ).tabs();
    $("#hidden").addClass('hide');
    $("#show_add").on('click', function(event)
     {
    	event.preventDefault();
    	$("#show_add").addClass('hide');
    	$("#hidden").removeClass('hide');
    	$("#hidden").addClass('show');
    });

    $("#hidden_sub").addClass('hide');
    $("#show_add_sub").on('click', function(event) 
    {
    	event.preventDefault();
    	$("#show_add_sub").addClass('hide');
    	$("#hidden_sub").removeClass('hide');
    	$("#hidden_sub").addClass('show');
    });

    $(".edit_cat").attr('disabled', true);
    $(".do_edit").addClass('hide');
    $(".close").addClass('hide');
	$(".edit").on('click', function(event) 
	{
    	
    	$(this).find('.edit_cat').attr("disabled", false);
    	$(this).find('.do_edit').removeClass('hide');
    	//$(this).find('.close').removeClass('hide');

	});
	
	$(".edit_sub_cat").addClass('hide');
    $(".do_edit_id").addClass('hide');
	$(".current_cat").on('click', function(event) 
	{
    	console.log('here');
    	$(this).parent().addClass('hide');
    	$(this).parent().parent().find('.edit_sub_cat').removeClass('hide');
    	$(this).parent().parent().find('.do_edit_id').removeClass('hide');
    	//$(this).find('.close').removeClass('hide');
	});
    
    /*ajax*/
    //$( "#choose_cat option:selected" ).change(function() $('#choose_cat')
    $('select#choose_proCat').change(function(event) {
        var cat_id = $(this).prop('value');
        //
        console.log(cat_id);
        $.ajax
        ({
            url: 'module/product-server.php?action=selectsub&id='+cat_id ,
            type: 'GET',
            dataType: 'html',
            success: function (response) 
            {
                $(this).addClass('has-success has-feedback');
                var sub= JSON.parse(response);
                console.log(sub);
                if(sub.length>0)
                {
                    $('#caterror').html("");
                    $('#select_sub').removeClass('hidden');
                    HTMltext ="<label class='col-md-2' aria-label='Left Align'>Choose Sub</label>";
                    HTMltext +="<select class='form-group-sm col-md-6 btn-danger btn-lg' name='sub_id' id='choose_sub'>";
                    HTMltext +="<option disabled='true' selected>choose Field</option>";
                    $.each(sub, function(index, value) 
                    {
                       
                        HTMltext +="<option class='col-md-4 btn-info btn-lg' value='"+value.id+"'>"+value.name+"</option>";
                    });
                     HTMltext +="</select>";
                     $('#select_sub').html(HTMltext);
                }
                else
                {
                    $('select#choose_proCat').focus();
                    $('#select_sub').addClass('hidden');
                    $('#caterror').html("<b style='color:red;font-size:14px;padding:5px;margin:5px;'>Sorry this category have no sub-category yet ,, please add sub first to can add products.</b>");
                    
                    $('#ok').prop('disabled',true);
                }
               

               
                
            },
            error: function (error) 
            {
                console.log(error);
            }
        });
        

    });//end of check for sub and category
$('select#edit_choose_proCat').change(function(event) {
        var cat_id = $(this).prop('value');
        //
        console.log(cat_id);
        $.ajax
        ({
            url: 'module/product-server.php?action=selectsub&id='+cat_id ,
            type: 'GET',
            dataType: 'html',
            success: function (response) 
            {
                $(this).addClass('has-success has-feedback');
                var sub= JSON.parse(response);
                console.log(sub);
                if(sub.length>0)
                {
                    $('#caterror').html("");
                    $('#select_sub').removeClass('hidden');
                    HTMltext ="<label class='col-md-2' aria-label='Left Align'>Choose Sub</label>";
                    HTMltext +="<select class='form-group-sm col-md-6 btn-danger btn-lg' name='sub_id' id='choose_sub'>";
                    HTMltext +="<option disabled='true' selected>choose Field</option>";
                    $.each(sub, function(index, value) 
                    {
                       
                        HTMltext +="<option class='col-md-4 btn-info btn-lg' value='"+value.id+"'>"+value.name+"</option>";
                    });
                     HTMltext +="</select>";
                     $('#select_sub').html(HTMltext);
                }
                else
                {
                    $('select#choose_proCat').focus();
                    $('#select_sub').addClass('hidden');
                    $('#caterror').html("<b style='color:red;font-size:14px;padding:5px;margin:5px;'>Sorry this category have no sub-category yet ,, please add sub first to can add products.</b>");
                    
                    $('#ok').prop('disabled',true);
                }
               

               
                
            },
            error: function (error) 
            {
                console.log(error);
            }
        });
        

    });//end of check for sub and category
    var sub_id=0;
    var pat = /[a-zA-Z]{2,25}$/;
    $('#name').on('blur', function(event) 
        {
            var name = $(this).val();
            sub_id = $('select#choose_sub').prop('value');
            
            if (name.length<2)
            {
                
                $('#namerr').html("<b style='color:red;font-size:14px'>Name must be greater than 2  character</b>");
                 $('#namediv').addClass('has-error');
                 $('#nameerror').removeClass('glyphicon-pencil');
                 $('#nameerror').addClass('glyphicon-remove');
                $(this).focus();
                $('#ok').prop('disabled',true);
            }
            else if (sub_id==0)
            {
                $('select#choose_proCat').focus();
                $('#caterror').html("<b style='color:red;font-size:14px'>you must choose category and sub first</b>");
                $('#ok').prop('disabled',true);
            }
            else
            {
                if ( name.match(pat))
                {
                console.log(name);
                $.ajax
                ({
                    url: 'module/product-server.php?action=selectProduct&name='+name+'&id='+sub_id ,
                    type: 'GET',
                    dataType: 'html',
                    success: function (response) 
                    {
                        console.log('module/product-server.php?action=selectProduct&name='+name+'&id='+sub_id);
                        $(this).addClass('has-success has-feedback');
                        var sub= JSON.parse(response);
                        var valid=sub.result
                        if(valid=='true')
                        {
                            $('#namediv').removeClass('has-error');
                            $('#namediv').addClass('has-success');
                            $('#nameerror').removeClass('glyphicon-pencil');
                            $('#nameerror').addClass('glyphicon-ok');
                            $('#namerr').html("<b style='color:green;font-size:14px'>Valid Name</b>");
                            $('#ok').prop('disabled',false);
                        }
                        else
                        {
                            $('#namediv').addClass('has-error');
                            $('#nameerror').removeClass('glyphicon-pencil');
                            $('#nameerror').addClass('glyphicon-remove');
                            $('#namerr').html("<b style='color:red;font-size:14px'>This product aleady exsist.</b>");
                            $('#name').focus();
                            $('#ok').prop('disabled',true);
                        }
                        console.log(valid);
                    },
                    error: function (error) 
                    {
                        console.log(error);
                        console.log('error on ajax');
                    }
                });
                }
                else //check for validation of pattern reg exp
                {
                    $('#namerr').html("<b style='color:red;font-size:14px'>Name with characters only min 2 letters max 25 letter</b>");
                     $('#namediv').addClass('has-error');
                     $('#nameerror').removeClass('glyphicon-pencil');
                     $('#nameerror').addClass('glyphicon-remove');
                    $('#name').focus();
                    $('#ok').prop('disabled',true);
                }
            }


        });//end of check for insert name
$('#edit_name').on('cahnge', function(event) 
        {
            var name = $(this).val();
            sub_id = $('select#choose_sub').prop('value');
            
            if (name.length<2)
            {
                
                $('#namerr').html("<b style='color:red;font-size:14px'>Name must be greater than 2  character</b>");
                 $('#namediv').addClass('has-error');
                 $('#nameerror').removeClass('glyphicon-pencil');
                 $('#nameerror').addClass('glyphicon-remove');
                $(this).focus();
                $('#ok').prop('disabled',true);
            }
            else if (sub_id==0)
            {
                $('select#choose_proCat').focus();
                $('#caterror').html("<b style='color:red;font-size:14px'>you must choose category and sub first</b>");
                $('#ok').prop('disabled',true);
            }
            else
            {
                if ( name.match(pat))
                {
                console.log(name);
                $.ajax
                ({
                    url: 'module/product-server.php?action=selectProduct&name='+name+'&id='+sub_id ,
                    type: 'GET',
                    dataType: 'html',
                    success: function (response) 
                    {
                        console.log('module/product-server.php?action=selectProduct&name='+name+'&id='+sub_id);
                        $(this).addClass('has-success has-feedback');
                        var sub= JSON.parse(response);
                        var valid=sub.result
                        if(valid=='true')
                        {
                            $('#namediv').removeClass('has-error');
                            $('#namediv').addClass('has-success');
                            $('#nameerror').removeClass('glyphicon-pencil');
                            $('#nameerror').addClass('glyphicon-ok');
                            $('#namerr').html("<b style='color:green;font-size:14px'>Valid Name</b>");
                            $('#ok').prop('disabled',false);
                        }
                        else
                        {
                            $('#namediv').addClass('has-error');
                            $('#nameerror').removeClass('glyphicon-pencil');
                            $('#nameerror').addClass('glyphicon-remove');
                            $('#namerr').html("<b style='color:red;font-size:14px'>This product aleady exsist.</b>");
                            $('#name').focus();
                            $('#ok').prop('disabled',true);
                        }
                        console.log(valid);
                    },
                    error: function (error) 
                    {
                        console.log(error);
                        console.log('error on ajax');
                    }
                });
                }
                else //check for validation of pattern reg exp
                {
                    $('#namerr').html("<b style='color:red;font-size:14px'>Name with characters only min 2 letters max 25 letter</b>");
                     $('#namediv').addClass('has-error');
                     $('#nameerror').removeClass('glyphicon-pencil');
                     $('#nameerror').addClass('glyphicon-remove');
                    $('#name').focus();
                    $('#ok').prop('disabled',true);
                }
            }


        });//end of check for edit name
    
   
});

  


