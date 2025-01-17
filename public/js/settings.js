var selectedTime = ''
$(function () {
    $('.timepicker').timepicker({
        timeFormat: 'HH:mm',
        interval: 30,
        dynamic: true,
        dropdown: true,
        scrollbar: true,
        // change: changeTime
    });

    var editor_config = {
        skin: 'moono',
        height: '40vh',
        enterMode: CKEDITOR.ENTER_BR,
        shiftEnterMode: CKEDITOR.ENTER_P,
        toolbar: [{
            name: 'basicstyles',
            groups: ['basicstyles'],
            items: ['Bold', 'Italic', 'Underline', "-", 'TextColor', 'BGColor']
        },
            {name: 'styles', items: ['Format', 'Font', 'FontSize']},
            {name: 'scripts', items: ['Subscript', 'Superscript']},
            {
                name: 'justify',
                groups: ['blocks', 'align'],
                items: ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock']
            },
            {
                name: 'paragraph',
                groups: ['list', 'indent'],
                items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent']
            },
            {name: 'links', items: ['Link', 'Unlink']},
            {name: 'insert', items: ['Image']},
            {name: 'spell', items: ['jQuerySpellChecker']},
            {name: 'table', items: ['Table']}
        ],
    };

    CKEDITOR.replace('privacy-en', editor_config);
    CKEDITOR.replace('terms-en', editor_config);
    CKEDITOR.replace('privacy-nl', editor_config);
    CKEDITOR.replace('terms-nl', editor_config);

    $(document).on('click', '#zipcode-delete-btn', function () {

        //$('#zipcode-delete-btn').prop('disabled',true);

        var id = $('#id').val();

        $.ajax({
            url: 'settings/delete-zipcode?id=' + id,
            type: 'GET',
            success: function (response) {
                $('#deleteZipcodeModal').modal('toggle');
                $('.zipcode-row-' + id).remove();
                toastr.success(response.message)
            },
            error: function (response) {
                var errorMessage = JSON.parse(response.responseText).message
                alert(errorMessage);
            }
        })
    })

    $(document).on('click', '.timepicker', function () {
        selectedTime = $(this).val()
    })

    $(document).on('change', '#per_page_dropdown', function () {
        var url = this.value;
        window.open(url, '_parent');
    })

    $('.zipcode-text').on('keyup', function (event) {
        this.value = this.value.replace(/[^a-zA-Z0-9 ]/g, '');

    });
});

function saveZipcode(id) {
    $('#zipcode-save-btn').prop('disabled', true);

    var zipcode = $('#zipcode_' + id).val();
    var min_order_price = $('#min_order_price_' + id).val();
    var delivery_charge = $('#delivery_charge_' + id).val();
    var status = $('#status_' + id).is(':checked') == true ? '1' : '0';

    if (zipcode == '') {
        $('#zipcode_' + id).focus();
        return false;
    }

    if (min_order_price == '' || min_order_price < 0)
    {
        $('#min_order_price_' + id).focus();
        return false;
    }

    if (delivery_charge == '' || delivery_charge < 0)
    {
        $('#delivery_charge_' + id).focus();
        return false;
    }

    $.ajax({
        url: 'settings/save-zipcode',
        type: 'POST',
        data: {
            id, zipcode, min_order_price, delivery_charge, status
        },
        success: function (response) {
            if (id != 0 || id != '') {
                $('.zipcode-row-' + id).find('input').attr('readonly', true);
                $("#zipcode-remove-btn-" + id).show();
                $("#zipcode-edit-btn-" + id).show();
                $("#zipcode-save-btn-" + id).css("display", "none");
                toastr.success(response.message)
            } else {
                $('#min_order_price_0').val('');
                $('#zipcode_0').val('');
                $('#delivery_charge_0').val('');

                $('.zipcode-row-0').after(response.data);

                toastr.success(response.message)
            }
        },
        error: function (response) {
            var errorMessage = JSON.parse(response.responseText).message
            alert(errorMessage);
        }
    })
}

function editZipcode(id) {
    $('.zipcode-row-' + id).find('input').removeAttr('readonly');
    $('#id').val(id);

    $("#zipcode-remove-btn-" + id).hide();
    $("#zipcode-edit-btn-" + id).hide();
    $("#zipcode-save-btn-" + id).css("display", "block");
}

function deleteZipcode(id) {
    $('#id').val(id);
    $('#deleteZipcodeModal').modal('show');
}

function changeStatus(id) {
    var status = $("#status_" + id).prop('checked') == true ? 1 : 0;

    $.ajax({
        url: 'settings/change-status',
        type: 'POST',
        data: {
            id, status
        },
        success: function (response) {
            toastr.success(response.message)
        },
        error: function (response) {
            var errorMessage = JSON.parse(response.responseText).message
            alert(errorMessage);
        }
    })
}

function changeContent(type) {
    if (type == 'privacy-en') {
        $("#privacy_box_en").css("display", "block");
        $("#terms_box_en").css("display", "none");

        $("#type").val('privacy');
        $("#lang").val('en');
    } else if (type == 'terms-en') {
        $("#terms_box_en").css("display", "block");
        $("#privacy_box_en").css("display", "none");

        $("#type").val('terms');
        $("#lang").val('en');
    }

    if (type == 'privacy-nl') {
        $("#privacy_box_nl").css("display", "block");
        $("#terms_box_nl").css("display", "none");

        $("#type").val('privacy');
        $("#lang").val('nl');
    } else if (type == 'terms-nl') {
        $("#terms_box_nl").css("display", "block");
        $("#privacy_box_nl").css("display", "none");

        $("#type").val('terms');
        $("#lang").val('nl');
    }
}

function saveContent(lang) {
    var type = $('#type').val();
    var content = CKEDITOR.instances[type + '-' + lang].getData();

    //alert(type+'-'+lang)

    $.ajax({
        url: 'settings/save-content',
        type: 'POST',
        data: {
            type, lang, content
        },
        success: function (response) {
            $('#CMSCouponModal').modal('show');
        },
        error: function (response) {
            var errorMessage = JSON.parse(response.responseText).message
            alert(errorMessage);
        }
    })
}

$('#cmsPagesen-tab').click(function () {
    $('#btnradio1').prop('checked', true);
    $("#type").val('privacy');
});

$('#cmsPagesdutch-tab').click(function () {
    $('#btnradio3').prop('checked', true);
    $("#type").val('privacy');
});


function changeTime() {

    var id = $(this).attr('data-id')
    var startTime = $('#start_time' + id).val()
    var endTime = $('#end_time' + id).val()

    if (startTime > endTime) {
        alert($('#time_error').text())
        $(this).val(selectedTime)
        selectedTime = ''
        return false
    }
}

// Tab active management code
$(document).ready(function() {
    $('button[data-bs-toggle="tab"]').on('show.bs.tab', function(e) {
        localStorage.setItem('activeTab', jQuery(e.target).attr('data-bs-target'));
    });

    // Here, save the index to which the tab corresponds. You can see it in the chrome dev tool.
    var activeTab = localStorage.getItem('activeTab');
    if (activeTab) {
        $('button[data-bs-target="' + activeTab + '"]').tab('show');
    }else{
        $('button[data-bs-target="#restaurantProfile-tab-pane"]').tab('show');
    }
});


function readMore(id) {
    $('#close-' + id).show()
    $('#read-more-' + id).hide()

    $("#order-ingredient-" + id).removeClass('line-clamp-2');
}

function hideReadMore(id) {
    $('#close-' + id).hide()
    $('#read-more-' + id).show()

    $("#order-ingredient-" + id).addClass('line-clamp-2');
}

function changePaymentSetting(paymentType) {
    var value = $('input[name="' + paymentType + '"]').is(':checked') ? 1 : 0;

    $.ajax({
        url: '/settings/update-checkout-setting', // Adjust URL as needed
        type: 'POST',
        data: {
            type: paymentType,
            value: value,
        },
        success: function(response) {
            if (response.status == 'error') {
                toastr.error(response.message)
                $('input[name="' + paymentType + '"]').prop('checked', true);
            } else {
                toastr.success(response.message)
            }
        },
        error: function(xhr) {
            console.log('Error:', xhr.responseText);
        }
    });
}
//
$(document).ready(function() {
    $('#domainSetting-tab').on('click', function () {
        $.ajax({
            url: "/domain-setting", // The route to load content
            method: 'GET',
            success: function (response) {
                // Inject the content into the tab pane
                $('#domainSetting-tab-pane').html(response);
            },
            error: function (xhr) {
                console.error('Error loading domain settings:', xhr);
                $('#domainSetting-tab-pane').html('<p>Error loading content.</p>');
            }
        });
    });
});
