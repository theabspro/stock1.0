$(document).ready(function(){

    $('body').on('change','.product_select',function(){
        var elem = $(this)
        if(!$(this).val()) return;
        jQuery.ajax({
          url : get_product_stock_details_url+'/'+$(this).val(),
          type : 'get',
          success : function( response ) {
            if(response.success){
                var list = '<option value="">Select SKU</option>';
                $.each(response.stocks, function(index,value){
                    list = list + '<option data-price="'+value.price+'" data-stock="'+value.qty+'" value="'+value.id+'">'+value.sku+'</option>';
                });
                elem.parents('.row').find('.sku').html(list)
            }
          }
        });     
    });

    $('body').on('change','.sku',function(){
        var elem = $(this)
        elem.parents('.row').find('.price').val($(this).find('option:selected').data('price'))
        elem.parents('.row').find('.stock').val($(this).find('option:selected').data('stock'))

    });    

    if(add_sale_detail){
        add_sale_detail_row();
    }

    function add_sale_detail_row(){
        var html = $('#dummy_sale_detail').html();
        html = html.replace(/XXXX/g, add_sale_detail++);
        $('#sale_details_wrp').append(html);
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
