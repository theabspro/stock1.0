$(document).ready(function(){
    var form_id = '#form';
    var v = jQuery(form_id).validate({
      ignore: "",
      rules: {
        name: {
          required: true,
        },
        company_id: {
          required: true,
        },
        image: {
          extension:"jpg|jpeg|png|gif"
        },
        
      },
      submitHandler: function (form) {

        let nwCC = new FormData($(form_id)[0]);

        $('#submit').button('loading');
        $.ajax({
            url: save_url,
            method: "POST",
            data:nwCC,
            processData: false,
            contentType: false,
        })
          .done(function(res) {
            if(!res.success) { 
                $('#submit').button('reset'); 
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
            $('#submit').button('reset'); 
            new Noty({
              type: 'error',
              layout: 'topRight',
              text: 'Something went wrong at server.'
          }).show();
             
          })

      }

    });     
});
