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
        $('#tinh_thanh_pho').on('change', function(){
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
        }else{
            html += '<option value="">Quận huyện</option>';
        }
    }
    $('#quan_huyen').html(html);
}
