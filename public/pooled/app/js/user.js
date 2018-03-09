$(document).ready(function(){
    var form_id = '#form';
    var v = jQuery(form_id).validate({
      ignore: "",
      rules: {
        name: {
          required: true,
        },
        username: {
          required: true,
        },
        password: {
          required: true,
          // PasswordChange: true,
        },
        email: {
          required: true,
          email:true
        },
        company_id: {
          required: true,
        },
        role_id: {
          required: true,
        },
        profile_image: {
          extension:"jpg|jpeg|png|gif"
        },
        
      },
      submitHandler: function (form) {

        let nwCC = new FormData($(form_id)[0]);

        $('#user_submit').button('loading');
        $.ajax({
            url: save_url,
            method: "POST",
            data:nwCC,
            processData: false,
            contentType: false,
        })
          .done(function(res) {
            let type ='success', mess='New User added successfully';
            if(!res.success) { 
                $('#user_submit').button('reset'); 
                var errors = '';
                for(var i in res.errors){
                    errors += '<li>'+res.errors[i]+'</li>';
                }

                console.log(errors)
                new Noty({
                  type: 'error',
                  layout: 'topRight',
                  text: errors
                }).show();
            }else{
                window.location = list_url;
            }

          })
         
          .fail(function(xhr) {
            $('#user_submit').button('reset'); 
            new Noty({
              type: 'error',
              layout: 'topRight',
              text: 'Something went wrong at server.'
          }).show();
             
          })

      }

    });     
});
