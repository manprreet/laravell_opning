@extends('layouts.user-app') 

<?php
$zipcode = session('zipcode');
$house_no = session('house_no');
$cartAmount = 0.00;
$deliveryCharges = 0.00;

if ($zipcode) {
    $deliveryCharges = getDeliveryCharges($zipcode)->delivery_charge;
}
$serviceCharge = getRestaurantDetail()->service_charge;

$address = session('address');
$phone_no = session('phone_no');

if ($address) {
    $addressData = getAddressDetails($address);
}
$restaurantOpen = getRestaurantOpenTime();

$couponDiscount = isset($user->cart->coupon) ? ($user->cart->coupon->percentage_off / 100) * getCartTotalAmount() : 0;

?> 
@section('content') 
<div class="main">
  <div class="main-view">
    <div class="container-fluid bd-gutter bd-layout"> 
      @include('layouts.user.side_nav_bar') 
      <main class="bd-main order-1">
        <div class="main-content pb-5">
          <div class="section-page-title main-page-title mb-0">
            <div class="col-12">
              <div class="d-flex align-items-center justify-content-between">
                <h1 class="page-title">{{ trans('user.checkout.title') }}</h1>
                <button class="navbar-toggler cart-navbar-toggler  p-2 d-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#bdSidebarCart" aria-controls="bdSidebarCart" aria-label="Toggle docs navigation">
                  <img src="{{ asset('images/toggle-icon.svg') }}" class="svg" width="18" height="18">
                </button>
              </div>
            </div>
          </div>
          <section class="custom-section checkout-section pb-0">
            <form id="final-checkout-form">
              <input type="hidden" name="is_address_elected" value="{{ $address ?? 0 }}" id="address_selected">
              <div class="row checkout-form-steps">
                <div class="checkout-form-item">
                  <div class="form-step-icon">
                    <div class="icon-form">
                      <img src="{{ asset('images/user-white-icon.svg') }}" alt="" class="svg" height="28" width="27">
                    </div>
                  </div>
                  <div class="cart-form-card-body cursor-initial d-block">
                    <div class="card custom-card h-100 custom-card-mobile-toggle">
                      <div class="card-body pb-0 checkout-form">
                        <div class="mobileStaticToggle">
                          <div class="innerCon">
                            <div class="icon">
                              <img src="{{ asset('images/user-cart.svg') }}" alt="" />
                            </div>
                            <div class="textCon">
                              <h3>{{ trans('user.checkout.delivery_address') }}</h3>
                              <p class="mb-0">Tochtstraat 40, 3036 SK</p>
                            </div>
                            <span class="toggleIco ms-auto">
                              <i class="fa-solid fa-angle-right"></i>
                              <span>
                          </div>
                        </div> 
                        @if(session('zipcode')) 
                        <div class="mobilecheckoutContent">
                          <div class="delivery-details">
                            <h4 class="custom-card-title-1 form-group">{{ trans('user.checkout.delivery_address') }}</h4>
                            <div class="row">
                              <div class="col-xxl-6 col-xl-6 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="form-group">
                                  <label for="streetname" class="form-label">{{ trans('user.checkout.delivery_address') }}</label>
                                  <input type="text" name="street_name" id="street_name" class="form-control" required value="{{ $addressData->street_name ?? '' }}" />
                                </div>
                              </div>
                              <div class="col-xxl-6 col-xl-6 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="form-group">
                                  <label for="housenumber" class="form-label">{{ trans('user.checkout.house_no') }}</label>
                                  <input type="number" maxlength="9" min="0" name="house_no" id="house_no" class="form-control" value="{{ $addressData->house_no ?? $house_no }}" required />
                                </div>
                              </div>
                              <div class="col-xxl-6 col-xl-6 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="form-group">
                                  <label for="zipcode" class="form-label">{{ trans('user.checkout.zip_code') }}</label>
                                  <input type="text" name="zipcode" id="zipcode" class="form-control" value="{{ $addressData->zipcode ?? $zipcode }}" readonly />
                                </div>
                              </div>
                              <div class="col-xxl-6 col-xl-6 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="form-group">
                                  <label for="city" class="form-label">{{ trans('user.checkout.city') }}</label>
                                  <input type="text" maxlength="25" required name="city" id="city" class="form-control" value="{{ $addressData->city ?? '' }}" />
                                </div>
                              </div>
                              <div class="col-xxl-6 col-xl-6 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="form-group">
                                  <label for="companyname" class="form-label">{{ trans('user.checkout.company_name') }}</label>
                                  <input type="text" maxlength="30" class="form-control" name="company_name" value="{{ $addressData->company_name ?? '' }}" />
                                </div>
                              </div>
                              <div class="col-xxl-6 col-xl-6 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="form-group">
                                  <label for="companyname" class="form-label">{{ trans('user.checkout.instruction') }}</label>
                                  <input type="text" class="form-control" name="instructions" maxlength="50" value="{{ $user->cart->delivery_note }}" />
                                </div>
                              </div>
                            </div>
                          </div>
                        </div> 
                        @endif 
                        <div class="mobilecheckoutContent">
                          <h4 class="custom-card-title-1 form-group">{{ trans('user.checkout.personal_detail') }} 
                            <span class="text-muted-lead-2">{{ trans('user.checkout.personal_detail_note') }} </span>
                          </h4>
                          <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-4 col-md-6 col-sm-12 col-12">
                              <div class="form-group">
                                <label for="firstname" class="form-label">{{ trans('user.checkout.first_name') }}</label>
                                <input type="text" class="form-control" name="first_name" required value="{{ $user->first_name }}" />
                              </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-4 col-md-6 col-sm-12 col-12">
                              <div class="form-group">
                                <label for="lastname" class="form-label">{{ trans('user.checkout.last_name') }}</label>
                                <input type="text" class="form-control" name="last_name" value="{{ $user->last_name }}" />
                              </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-4 col-md-6 col-sm-12 col-12">
                              <div class="form-group">
                                <label for="restaurantpermit" class="form-label">{{ trans('user.checkout.phone') }}</label>
                                <div class="input-group countrycode-phone-control">
                                  <button class="dropdown-toggle no-arrow" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('images/netherlands-flag.svg') }}" alt="netherlands Flag" class="img-fluid">
                                  </button>
                                  <input type="text" class="form-control countrycode-input" readonly value="+31">
                                  <input type="number" class="form-control" minlength="10" maxlength="10" required name="phone_no" min="0" value="{{ $user->phone_no == '' ? $phone_no : $user->phone_no }}">
                                </div>
                              </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-4 col-md-6 col-sm-12 col-12">
                              <div class="form-group">
                                <label for="email" class="form-label">{{ trans('user.checkout.email') }}</label>
                                <input type="email" required name="email" class="form-control" value="{{ $user->email }}" />
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="checkout-form-item">
                  <div class="form-step-icon">
                    <div class="icon-form">
                      <img src="{{ asset('images/delivery-time-icon.svg') }}" alt="" class="svg" height="28" width="28">
                    </div>
                  </div>
                  <div class="cart-form-card-body cursor-initial d-block">
                    <div class="card custom-card h-100 custom-card-mobile-toggle">
                      <div class="card-body pb-4 checkout-form">
                        <div class="mobileStaticToggle">
                          <div class="innerCon">
                            <div class="icon">
                              <img src="{{ asset('images/checkout-clock.svg') }}" alt="" />
                            </div>
                            <div class="textCon">
                              <h3>{{ trans('user.checkout.delivery_time') }}</h3>
                              <p class="mb-0">{{ trans('user.checkout.asap') }}</p>
                            </div>
                            <span class="toggleIco ms-auto">
                              <i class="fa-solid fa-angle-right"></i>
                              <span>
                          </div>
                        </div>
                        <div class="mobilecheckoutContent">
                          <h4 class="custom-card-title-1 form-group">{{ trans('user.checkout.delivery_time') }}</h4>
                          <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-4 col-md-12 col-sm-12 col-12 my-auto">
                              <div class="custom-radio custom-checkbox-group mb-2 flex-wrap" style="margin-bottom: 30px">
                                <div class="radio">
                                  <input id="radio-1" name="del_radio" type="radio" class="radio-del-time" checked value="asap">
                                  <label for="radio-1" class="radio-label radio-del-time" id="asap">{{ trans('user.checkout.asap') }}</label>
                                </div>
                                <div class="radio">
                                  <input id="radio-2" name="del_radio" type="radio" class="radio-del-time" value="customize-time">
                                  <label for="radio-2" id="customize-time" class="radio-label radio-del-time">{{ trans('user.checkout.customize_time') }} </label>
                                </div>
                              </div>
                            </div>
                            <div class="col-xxl-3 col-xl-6 col-lg-4 col-md-6 col-sm-12 col-12 customize-time-div" style="display: none">
                              <div class="form-group">
                                <label for="selecttime" class="form-label">{{ trans('user.checkout.select_time') }}</label>
                                <input type="text" class="timepicker form-control time-form-control" name="custom-delivery-time" id="custom-delivery-time" style="max-height: fit-content">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="checkout-form-item">
                  <div class="form-step-icon">
                    <div class="icon-form">
                      <img src="{{ asset('images/timer.svg') }}" alt="" class="svg" height="26" width="26">
                    </div>
                  </div>
                  <div class="cart-form-card-body cursor-initial cart-form-card-body-last d-block pb-0">
                    <div class="card custom-card h-100 mb-4 custom-card-mobile-toggle">
                      <div class="card-body pb-0 checkout-form">
                        <div class="mobileStaticToggle">
                          <div class="innerCon">
                            <div class="icon">
                              <img src="{{ asset('images/checkout-wlt.svg') }}" alt="" />
                            </div>
                            <div class="textCon">
                              <h3>{{ trans('user.checkout.payment') }}</h3>
                              <p class="mb-0">iDEAL</p>
                            </div>
                            <span class="toggleIco ms-auto">
                              <i class="fa-solid fa-angle-right"></i>
                              <span>
                          </div>
                        </div>
                        <div class="mobilecheckoutContent">
                          <div class=" payment-nav">
                            <div class="payment-navigation">
                              <h4 class="custom-card-title-1 form-group">{{ trans('user.checkout.payment') }}</h4>
                              <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <button class="nav-link active payment-type-tab" id="v-pills-ideal-tab" data-type="3" data-bs-toggle="pill" data-bs-target="#v-pills-ideal" type="button" role="tab" aria-controls="v-pills-ideal" aria-selected="true">
                                  <img src="{{ asset('images/ideal.svg') }}" alt="" height="22" width="25" class="svg"> iDEAL </button>
                                <button class="nav-link payment-type-tab" data-type="1" id="v-pills-creditanddebitcard-tab" data-bs-toggle="pill" data-bs-target="#v-pills-creditanddebitcard" type="button" role="tab" aria-controls="v-pills-creditanddebitcard" aria-selected="false">
                                  <img src="{{ asset('images/stripe.svg') }}" alt="" height="20" width="27" class="svg"> {{ trans('user.checkout.cc_card') }} </button>
                                <button class="nav-link payment-type-tab" id="v-pills-cashondelivery-tab" data-type="2" data-bs-toggle="pill" data-bs-target="#v-pills-cashondelivery" type="button" role="tab" aria-controls="v-pills-cashondelivery" aria-selected="false">
                                  <img src="{{ asset('images/cod.svg') }}" alt="" height="30" width="31" class="svg"> {{ trans('user.checkout.cod') }} </button>
                              </div>
                            </div>
                            <div class="w-100">
                              <div class="tab-content w-100" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-ideal" role="tabpanel" aria-labelledby="v-pills-ideal-tab" tabindex="0">
                                  <main class="bd-main order-1">
                                    <div class="main-content d-flex flex-column px-2">
                                      <div class="section-page-title main-page-title row justify-content-between d-none d-sm-block">
                                        <div class="col-12">
                                          <h1 class="page-title">{{ trans('user.checkout.order_payment') }}</h1>
                                        </div>
                                      </div>
                                      <form id="payment-form">
                                        <label for="ideal-bank-element" class="mb-2">
                                          <strong>{{ trans('user.checkout.banks') }}</strong>
                                        </label>
                                        <div id="ideal-bank-element" class="custom_select">
                                          <!-- A Stripe Element will be inserted here. -->
                                        </div>
                                        {{-- <button type="submit">Pay</button>--}}
                                        <!-- Used to display form errors. -->
                                        <div id="error-message" role="alert"></div>
                                      </form>
                                      <div id="messages" role="alert" style="display: none;"></div>
                                    </div>
                                  </main>
                                </div>
                                <div class="tab-pane fade" id="v-pills-creditanddebitcard" role="tabpanel" aria-labelledby="v-pills-creditanddebitcard-tab" tabindex="0">
                                  <h4 class="custom-card-title-1 form-group">{{ trans('user.checkout.add_card') }}</h4>
                                  <div class="payment-form-card">
                                    <input type="text" class="form-control cardNumber" name="card_number" required placeholder="{{ trans('user.checkout.card_no') }}">
                                    <div class="row g-0">
                                      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <input type="text" name="exp_date" required class="form-control expireYear" placeholder="{{ trans('user.checkout.valid_till') }} (MM/YY)">
                                      </div>
                                      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <input type="number" name="cvv" required class="form-control form-control-br-left" placeholder="CVV" minlength="3" maxlength="3">
                                      </div>
                                    </div>
                                    <input type="text" class="form-control border-0" name="card_name" required placeholder="{{ trans('user.checkout.card_name') }}">
                                  </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-cashondelivery" role="tabpanel" aria-labelledby="v-pills-cashondelivery-tab" tabindex="0"></div>
                              </div>
                            </div>
                            <input type="hidden" value="3" id="payment_type" name="payment_type">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-check form-group custom-checkbox">
                      <input class="form-check-input check-input-secondary" type="checkbox" name="receive_mail" id="receiveemail" value="1">
                      <label class="form-check-label text-capitalize align-middle" for="receiveemail"> {{ trans('user.checkout.receive_update_emails') }} </label>
                    </div>
                    <div class="row">
                      <div class="col-xxl-6 col-xl-6 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="form-group">
                          <button type="submit" class="align-middle btn btn-custom-yellow btn-default d-block w-100">{{ trans('user.checkout.pay') }} €{{ orderTotalPayAmount() }} {{ trans('user.checkout.with') }} <span id="total-amt-pay-btn">iDEAL</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </section>
        </div>
        <aside class="cart-sidebar position-relative">
          <div class="offcanvas-xxl offcanvas-end h-100" tabindex="-1" id="bdSidebarCart" aria-labelledby="bdSidebarCartOffcanvasLabel">
            <div class="offcanvas-header p-0" style="display: block;"></div>
            <div class="offcanvas-body pt-3 h-100">
              <div class="d-flex justify-content-end mb-2">
                <button type="button" class="btn-close d-block d-xxl-none" data-bs-dismiss="offcanvas" aria-label="Close" data-bs-target="#bdSidebarCart"></button>
              </div>
              <div class="navbar navbar-expand-lg pt-0 h-100">
                <div class="cart-sidebar-content position-relative h-100">
                  <div class="navbar-collapse cartbox-collapse">
                    <div class="cart-section cart-checkout-section">
                      <h6 class="cart-title">{{ trans('user.my_orders.order_details') }}</h6> 
                      @foreach($user->cart->dishDetails as $dishDetails) <div class="cart-items">
                        <div class="row">
                          <div class="col-12">
                            <div class="d-flex cart-item-row">
                              <div class="cart-custom-w-col-img">
                                <span class="order-total-item">x{{ $dishDetails->qty}}</span>
                                <img src="{{ $dishDetails->dish->image}}" alt="{{ $dishDetails->dish->name }}" class="img-fluid" width="86" height="74px" />
                              </div>
                              <div class="cart-custom-w-col-detail">
                                <div class="cart-item-detail">
                                  <div class="d-flex align-items-center justify-content-between">
                                    <p class="d-inline-block item-name mb-0"> {{ $dishDetails->dish->name }}</p>
                                    <span class="cart-item-price">+€{{ $dishDetails->dish->price }}</span>
                                  </div>
                                  <div class="d-flex">
                                    <div class="text line-clamp-2" id="order-ingredient-{{ $dishDetails->id}}">
                                      <p class="mb-0 item-options mb-0"> {{ $dishDetails->dishOption->name ?? ''}} </p>
                                      {{ getOrderDishIngredients($dishDetails) }}
                                    </div>
                                    
                                    <div class="text">
                                      <a class="item-customize" href="javascript:void(0)" id="read-more-{{ $dishDetails->id}}" onclick="readMore({{ $dishDetails->id}})">
                                      {{ trans('user.my_orders.read_more') }}</a>
                                      <a class="item-customize" href="javascript:void(0)" style="display:none;" id="close-{{ $dishDetails->id}}" onclick="hideReadMore({{ $dishDetails->id}})">
                                      Close</a>
                                    </div>
                                  </div>
                                  <div class="from-group addnote-from-group mb-0">
                                    <div class="form-group">
                                      <label for="dishnameenglish" class="form-label">{{ trans('user.my_orders.add_notes') }}</label>
                                      <input type="text" class="form-control dish-notes" maxlength="50" value="{{ $dishDetails->notes }}" data-id="{{ $dishDetails->id }}" placeholder="{{ trans('user.my_orders.type_here') }}">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div> 
                      @endforeach
                      <div class="bill-detail-invoice">
                        <h6 class="cart-title d-none d-md-block">{{ trans('user.my_orders.bill_details') }}</h6>
                        <div class="table-responsive">
                          <table class="table table-borderless">
                            <tbody>
                              <tr>
                                <td class="text-start">
                                  <span class="text-muted-1 bill-count-name">{{ trans('user.my_orders.item_total') }}</span>
                                </td>
                                <td class="text-end">
                                  <span class="bill-count">€{{ number_format(getCartTotalAmount(),2) }}</span>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-start">
                                  <span class="text-muted-1 bill-count-name">{{ trans('user.my_orders.service_charge') }}</span>
                                </td>
                                <td class="text-end">
                                  <span class="bill-count">€{{ number_format($serviceCharge,2) }}</span>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-start">
                                  <span class="text-muted-1 bill-count-name">{{ trans('user.my_orders.delivery_charge') }}</span>
                                </td>
                                <td class="text-end">
                                  <span class="bill-count">€{{ number_format($deliveryCharges,2) }}</span>
                                </td>
                              </tr>
                              <tr {{ isset($user->cart->coupon) ? '' : 'style=display:none' }}>
                                <td class="text-start">
                                  <span class="text-custom-light-green bill-count-name">Coupon Discount({{ $user->cart->coupon_code }})</span>
                                </td>
                                <td class="text-end">
                                  <span class="text-custom-light-green bill-count">-€{{ number_format($couponDiscount,2) }}</span>
                                </td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr>
                                <td class="text-start">{{ trans('user.my_orders.total') }}</td>
                                <td class="text-end">
                                  <span class="bill-total-count" id="total-payment-text">€{{ orderTotalPayAmount() }}</span>
                                </td>
                              </tr>
                            </tfoot>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </aside>
      </main>
    </div>
  </div>
  <!-- start footer --> 
  @include('layouts.user.footer_design')
  <!-- end footer -->
</div> 
@endsection 

@section('script')
    <script type="text/javascript" async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgn-yE-BywHdBacEmRH9IWEFbuaM4PWGw&loading=async"></script>
    <script type="text/javascript" src="https://js.stripe.com/v3/"></script>
    <script type="text/javascript" src="{{ asset('js/user/check-out.js') }}"></script>
    <script>
        var public_key = '{{ config('params.stripe.sandbox.public_key') }}';
        const stripe = Stripe(public_key, {
            apiVersion: '2020-08-27'
        });

        const elements = stripe.elements();
        const idealBank = elements.create('idealBank');
        idealBank.mount('#ideal-bank-element');
        var selectedBank = false

        $(function () {
            var startTime = '<?= date('H:i', strtotime('+30 mins')) ?>';
            var endTime = '<?= $restaurantOpen->end_time ?>';
            $('.timepicker').timepicker({
                timeFormat: 'HH:mm',
                interval: 30,
                dynamic: true,
                dropdown: true,
                scrollbar: true,
                minTime: startTime,
                maxTime: endTime,
            });
            idealBank.on('change', function (event) {
                selectedBank = true
            });
        })

        async function addOrder() {
            var deliveryType = $('input[name=del_radio]:checked').val()
            var paymentType = $('#payment_type').val()

            var zipcode = $('#zipcode').val()
            console.log('zipcode', zipcode)

            if (deliveryType == 'customize-time' && $('#custom-delivery-time').val() == '') {
                alert('Please select time')
                return false
            }

            var checkoutData = new FormData(document.getElementById('final-checkout-form'))
            var latitude = ''
            var longitude = ''

            if (paymentType == '3' && selectedBank == false) {
                alert('Please select bank to continue')
                return false
            }

            if (zipcode != undefined) {
                var streetName = $('#street_name').val()
                var houseNo = $('#house_no').val()
                var city = $('#city').val()
                var address = houseNo + ' ' + streetName + ' ' + city

                try {
                    var geocoder = new google.maps.Geocoder();

                    await geocoder.geocode({'address': address}, function (results, status) {

                        if (status == google.maps.GeocoderStatus.OK) {
                            latitude = results[0].geometry.location.lat();
                            longitude = results[0].geometry.location.lng();
                        }
                    });

                } catch (err) {
                    //alert(err)
                }
            }

            checkoutData.append('longitude', longitude)
            checkoutData.append('latitude', latitude)

            await $.ajax({
                url: baseURL + '/user/place-order',
                type: 'POST',
                processData: false,
                contentType: false,
                data: checkoutData,
                async success(response) {
                    if (response.status == 200) {
                        if (paymentType == '2') {
                            toastr.success(response.message.data)

                            setTimeout(function(){ window.location.replace(baseURL + '/user/orders') }, 2000);

                        } else if (paymentType == '3') {
                            const {error, paymentIntent} = await stripe.confirmIdealPayment(
                                response.message.paymentIntent.client_secret, {
                                    payment_method: {
                                        ideal: idealBank,
                                    },
                                    return_url: baseURL + '/user/redirect-online-payment',
                                },
                            );
                            if (error) {
                                alert(error.message);
                                return;
                            }
                        } else {
                            if (response.message.cardPayment == 200) {
                                toastr.success(response.message.data)
                                setTimeout(function(){ window.location.replace(baseURL + '/user/orders') }, 2000);
                            } else if (response.message.cardPayment == 402) {
                                window.location.replace(response.message.redirectionUrl)
                            }
                        }
                    } else {
                        alert(response.message)
                    }
                },
                error(response) {

                }
            })

        }
    </script>
@endsection