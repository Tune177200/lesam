// FILLTER DAI LY
var HUYEN;

var json_file_path = frontendajax.jsonURL;

fetch(json_file_path)
    .then(response => response.json())
    .then(data => {
        HUYEN = data;
        setupProvinceChangeEvent();
    })
    .catch(error => {
        console.error('Fetch error:', error);
    });

function setupProvinceChangeEvent() {
    jQuery(document).ready(function ($) {
        $('#tinh_thanh_pho').on('change', function () {
            var province = $(this).val();
            if (province in HUYEN) {
                var districts = HUYEN[province];
                renderDistricts(districts);
            } else {
                $('#quan_huyen').html('<option value="" selected="">Quận huyện</option>');
            }
        })


    });
}

function renderDistricts(districts) {
    var html = '';
    for (var key in districts) {
        if (districts.hasOwnProperty(key)) {
            html += '<option value="' + districts[key].slug + '">' + districts[key].name + '</option>';
        } else {
            html += '<option value="">Quận huyện</option>';
        }
    }
    $('#quan_huyen').html(html);
}

// ajax add to cart
jQuery(document).on('click', '.single_add_to_cart_button', function (e) {
    e.preventDefault();

    var $thisButton = jQuery(this),
        $form = $thisButton.closest('form.cart'),
        product_id = $thisButton.data('product_id'),
        product_qty = $form.find('input[name=quantity]').val() || 1,
        variation_id = $form.find('input[name=variation_id]').val() || 0;

    var data = {
        action: 'woocommerce_ajax_add_to_cart',
        product_id: product_id,
        quantity: product_qty,
        variation_id: variation_id,
    };

    jQuery(document.body).trigger('adding_to_cart', [$thisButton, data]);

    jQuery.ajax({
        type: 'post',
        url: wc_add_to_cart_params.ajax_url,
        data: data,
        beforeSend: function (response) {
            $thisButton.removeClass('added').addClass('loading');
        },
        complete: function (response) {
            $thisButton.addClass('added').removeClass('loading');
        },
        success: function (response) {
            if (response.error && response.product_url) {
                window.location = response.product_url;
                return;
            } else {
                if (!response.error) {
                    toastr.options.closeButton = true;
                    toastr.success(response.fragments['div.widget_shopping_cart_content'], 'Thêm vào giỏ hàng thành công', { timeOut: 3000000, fragments: true });
                    jQuery(document.body).trigger('added_to_cart', [response.fragments, response.cart_hash, $thisButton]);
                }
            }
        },
    });

    return false;
});


jQuery(document).ready(function ($) {

    jQuery(".group-amount .arrow").on("click",function(event){
        event.preventDefault();
        var countAmount = jQuery(this).parent().find("input").val();
        if(jQuery(this).hasClass("arrow-minus")){
            countAmount--;
            if(countAmount < 1){
                countAmount = 1;
            }
        }else{
            countAmount++;
        }
        jQuery(this).parent().find("input").val(countAmount);

    });

    var woocommerce_form = $('.woocommerce-cart-form');
    woocommerce_form.on('change', '.qty', function () {
        form = $(this).closest('form');

        // emulates button Update cart click
        $("<input type='hidden' name='update_cart' id='update_cart' value='1'>").appendTo(form);
        var newQuantity = $(this).val();
        // get the form data before disable button...
        formData = form.serialize();

        // disable update cart and proceed to checkout buttons before send ajax request
        $("input[name='update_cart']").val('Updating…').prop('disabled', true);
        $("a.checkout-button.wc-forward").addClass('disabled').html('Updating…');

        // update cart via ajax
        $.post(form.attr('action'), formData, function (resp) {
            // get updated data on response cart
            var shop_table = $('table.shop_table.cart', resp).html();
            var cart_totals = $('.cart_totals', resp).html();

            // replace current data by updated data
            $('.woocommerce-cart-form table.shop_table.cart')
                .html(shop_table)
                .find('.qty')
                .before('<input type="button" value="-" class="minus">')
                .after('<input type="button" value="+" class="plus">');
            $('.cart_totals').html(cart_totals);
        });
    }).on('click', '.quantity input.minus', function () {
        var current = $(this).next('.qty').val();
        current--;
        $(this).next('.qty').val(current).trigger('change');
    }).on('click', '.quantity input.plus', function () {
        var current = $(this).prev('.qty').val();
        current++;
        $(this).prev('.qty').val(current).trigger('change');
    })

    $('.woocommerce-cart').on('click', "a.checkout-button.wc-forward.disabled", function (e) {
        e.preventDefault();
    });
});

jQuery(document).on('click', '.btn-variant-item', function (e) {
    e.preventDefault();
    var jQuerythisbutton = jQuery(this);
    var variantPrice  = parseInt(this.dataset.price);
    var variantId  = parseInt(this.dataset.variant_id);
    var formatter = new Intl.NumberFormat('vi-VN', {
        style: 'currency',
        currency: 'VND',
      });
    jQuery('.btn-variant-item').removeClass('active');
    jQuery(this).addClass('active');
    jQuery('.product-intro div.price').html(this.dataset.price);
    jQuery('input[name=variation_id]').val(variantId);
    return false;
});