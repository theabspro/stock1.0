$(document).ready(function(){

    if(add_new_feature){
        add_feature();
    }

    $('#add-feature').click(add_feature);

    function add_feature(){
        var html = $('#dummy_feature').html()
        $('#features_wrp #feature_inner').append(html);
    }

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
        category_id: {
          required: true,
        },
        brand_id: {
          required: true,
        },
        hsn_code: {
          required: true,
        },
        sku: {
          required: true,
        },
        price: {
          required: true,
          number: true          
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
