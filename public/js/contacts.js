$(document).ready(function(){
    
	var token = $('meta[name="csrf_token"]').attr('content');
    
    $('#add_contacts').on('click',function(e){
        // get all the values
        var add_name = $('#add_name').val();
        var add_company = $('#add_company').val();
        var add_phone = $('#add_phone').val();
        var add_email = $('#add_email').val();
        if(add_name==""){
            alert("Name is required.");
            e.preventDefault();
            return false;
        }
        var json_data = {

            name:add_name,
            company:add_company,
            phone:add_phone,
            email:add_email,
            _token: token,

        };

        $.ajax({
            type: 'get',
            url: '/create-contacts',
            data: json_data,
            success: function(data) {   
               location.href = '/contacts';
            },
            error: function(error) {
                //show error
                console.log('Error:'+error.responseText);
            }
        }); 
    });


    $('#edit_contacts').on('click',function(e){
        // get all the values
        var edit_name = $('#edit_name').val();
        var edit_company = $('#edit_company').val();
        var edit_phone = $('#edit_phone').val();
        var edit_email = $('#edit_email').val();        
        var contact_id = $('#contact_id').val();

        if(edit_name==""){
            alert("Name is required.");
            e.preventDefault();
            return false;
        }

        var json_data = {

            name:edit_name,
            company:edit_company,
            phone:edit_phone,
            email:edit_email,
            contact_id:contact_id,
            _token: token,

        };

        $.ajax({
            type: 'get',
            url: '/edit',
            data: json_data,
            success: function(data) {   
               location.href = '/contacts';
            },
            error: function(error) {
                //show error
                console.log('Error:'+error.responseText);
            }
        }); 
    });

    

    $(document).on('click', '.delete_contacts', function() {  
        // get rfs id no
        var contact_id=$(this).attr('contact_id');
        if(window.confirm("Are you sure you want to DELETE?")){
            $.ajax({
                type: 'get',
                url: '/delete',
                data: {_token:token, contact_id:contact_id},
                success: function(data) {   
                    location.reload();              
                },
                error: function(error) {
                    //show error
                    console.log('Error:'+error.responseText);
                }
            }); 
        }

    });
});