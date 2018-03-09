$(document).ready(function(){

    $('.calculate_total').keyup(function(){
        var qty = $('#qty').val();
        qty = parseFloat(qty);
        qty = $.isNumeric(qty) ? qty : 0;
        var price = $('#price').val();
        price = parseFloat(price);
        price = $.isNumeric(price) ? price : 0;
        var total = qty * price; 
        $('#total').val(total.toFixed(2));
    });

    var form_id = '#form';
    var v = jQuery(form_id).validate({
      ignore: "",
      rules: {
        product_id: {
          required: true,
        },
        company_id: {
          required: true,
        },
        qty: {
          required: true,
          number: true,
        },
        price: {
          required: true,
          number: true,
        },
        sku: {
          required: true,
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
