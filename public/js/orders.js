$(function () {
    $(document).on('keyup', '#search-order', function () {
        var search = $(this).val();
        var activeId = $('.foodorder-box-list-item.active').attr('data-id')

        // console.log(activeId)

        $.ajax({
            url: baseURL + '/orders/searchOrder',
            type: 'POST',
            data: {
                search,
                activeId
            },
            datatype: 'json',
            success: function (response) {
                $('#order-list-data-div1').html(response)
                $('.foodorder-box-details ').html('')
            },
            error: function (response) {
                var errorMessage = JSON.parse(response.responseText).message
                alert(errorMessage);
            }
        })
    })
})

function orderDetail(id) {
    $.ajax({
        url: baseURL + '/orders/order-detail/' + id,
        type: 'GET',
        success: function (response) {
            $('.foodorder-box-details').html(response);

            $(".foodorder-box-list div").removeClass("active");
            $('.foodorder-box-list .time img').attr('src', baseURL + '/images/clock-gray.svg');
            $('.order-' + id).addClass('active');
            $('.foodorder-box-list .active .time img').attr('src', baseURL + '/images/clock-black.svg');
        },
        error: function (response) {
            var errorMessage = JSON.parse(response.responseText).message
            alert(errorMessage);
        }
    })
}


var start = moment().subtract(10, 'days');
var end = moment();

var dateRange =''
$('#expiry_date').daterangepicker({
    startDate: start,
    endDate: end,
    maxDate: moment(),
    ranges: {
       'Today': [moment(), moment()],
       'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
       'Last 7 Days': [moment().subtract(6, 'days'), moment()],
       'Last 30 Days': [moment().subtract(29, 'days'), moment()],
       'This Month': [moment().startOf('month'), moment().endOf('month')],
       'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    }
});

$('#expiry_date').val('')
$('#expiry_date').attr('placeholder','Select Date Range')

$('#expiry_date').on('apply.daterangepicker', function(ev, picker) {

    dateRange = $(this).val(picker.startDate.format('DD-MM-YYYY') + ' - ' + picker.endDate.format('DD-MM-YYYY'));

    var start_date = picker.startDate.format('DD-MM-YYYY');
    var end_date = picker.endDate.format('DD-MM-YYYY');

    value = "start_date="+ start_date + "&end_date=" + end_date;

    window.location.href = `${baseURL}/orders?${value}`;
});

$('#expiry_date').on('cancel.daterangepicker', function(ev, picker) {
    $(this).val('');
});

$('#clear').on("click",function()
{
    window.location.href = `${baseURL}/orders`;
});

 // Get start and end dates from URL parameters
 var startDate = getUrlParameter('start_date');
 var endDate = getUrlParameter('end_date');

if (startDate && endDate) {
    $('#expiry_date').data('daterangepicker').setStartDate(moment(startDate, 'DD-MM-YYYY'));
    $('#expiry_date').data('daterangepicker').setEndDate(moment(endDate, 'DD-MM-YYYY'));
    $('#expiry_date').val(startDate + ' - ' + endDate);
}


function getUrlParameter(name) {
    name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
    var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
    var results = regex.exec(location.search);
    return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
}


$(document).on('click', '#toggleOrderList', function () {
    const orderList = document.getElementById('orderList');
    const upArrow = this.querySelector('.uparrowOrderList');
    const downArrow = this.querySelector('.downarrowOrderList');

    // Toggle the visibility of the images
    if (upArrow.style.display === 'none') {
        upArrow.style.display = 'block';
        downArrow.style.display = 'none';
        $('.footer-box-main-orderlist-header').css({'border-bottom':'1px solid var(--theme-gray2)','padding':'0 0 15px'})
    } else {
        $('.footer-box-main-orderlist-header').css({'border-bottom':'0','padding':'0'})
        upArrow.style.display = 'none';
        downArrow.style.display = 'block';
    }

    orderList.classList.toggle('collapsed');
})

$(document).on('click', '#toggleTotal', function () {
    const orderList = document.getElementById('totalList');
    const upArrow = this.querySelector('.uparrowTotal');
    const downArrow = this.querySelector('.downarrowTotal');

    // Toggle the visibility of the images
    if (upArrow.style.display === 'none') {
        upArrow.style.display = 'block';
        downArrow.style.display = 'none';
        $('.footer-main-total-header').css({'border-bottom':'1px solid var(--theme-gray2)','padding':'0 0 15px'})
        $('.footer-main-total-footer').css({'display':'block'})

    } else {
        $('.footer-main-total-header').css({'border-bottom':'0','padding':'0'})
        $('.footer-main-total-footer').css({'display':'none'})
        upArrow.style.display = 'none';
        downArrow.style.display = 'block';
    }

    orderList.classList.toggle('collapsed');
})

$('#order-tabs-dropdown').on('change', function () {

    var target = $(this).val(); // Get selected value (target id)
    if (target == "#open-orders") {
        $('.order-filters-search').addClass('disable-order-filters');
    } else {
        $('.order-filters-search').removeClass('disable-order-filters');
    }
    $('.tab-pane').removeClass('show active'); // Hide all content
    $(target).addClass('show active'); // Show the selected content
});

// $(document).on('click','#all-orders-tab', function() {
//     $('#order-dilters').removeClass('disable-order-filters');
// })
// $(document).on('click','#open-orders-tab', function() {
//     $('#order-dilters').addClass('disable-order-filters');
// })

// notification popup click event code.
$(document).on('click','.order_details_button', function() {
    var urlLastElement = document.location.pathname
    if (urlLastElement == '/orders') {
        let id = $(this).attr("data-id");
        $('.order-' + id).addClass('active');
        $('.order-notification-popup').modal('hide')
    } else {
        $('.order-notification-popup').modal('hide')
    }

})

var page = 2;
var isLoading = false;
var endOfData = false;
var lastPage = parseInt($('.last_page').html().trim()); // Adjust according to the last page number
$(".all-orders-new").scroll(function () {
    if (endOfData || isLoading) return;

    var scrollTop = $(this).scrollTop();
    var containerHeight = $(this).height();
    var contentHeight = $(this).get(0).scrollHeight;


    if (scrollTop + containerHeight >= contentHeight - 10 && page <= lastPage) {
        isLoading = true; // Prevent further calls until current is processed
        loadMoreData(page, `${baseURL}/orders`);
    }
});

function loadMoreData(currentPage, url) {
    $.ajax({
        url: url + '?page=' + currentPage,
        type: "GET",
        beforeSend: function() {
            $('#loader').show();
        }
    })
        .done(function(data) {
            if (!data || data.trim().length === 0) {
                $('#loader').hide();
                $('#end-of-data').show();
                endOfData = true; // No more data to load
                return;
            }

            $(".all-orders-new").append(data);

            page++; // Increment page number after successful append
            isLoading = false; // Reset loading state
            $('#loader').hide();
        })
        .fail(function(jqXHR, textStatus) {
            console.error('Failed to load data:', textStatus);
            isLoading = false;
            $('#loader').hide();
        });
}
