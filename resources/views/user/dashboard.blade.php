@extends('layouts.user-app')
@section('content')

<?php
$zipcode = session('zipcode');
$house_no = session('house_no');

$showModal = 0;

if (!session('showLoginModal')) {
    $showModal = 1;
    Session::put('showLoginModal', '1', '1440');
}

$cartValue = 0;
?>
<div class="main">
    <div class="main-view">
        <div class="container-fluid bd-gutter bd-layout">
            @include('layouts.user.side_nav_bar')
            <main class="bd-main content-main-part">
                <div class="main-content">
                    <div class="section-page-title main-page-title row justify-content-between">
                        <div class="col-xxl-6 col-xl-6 col-lg-5 col-md-6 col-sm-6 col-12">
                            <h1 class="page-title">{{ trans('user.dashboard.title') }}</h1>
                        </div>
                        <div class="searcheaderBox d-none d-md-flex align-items-center form-group mb-0 has-search position-relative searcheatbox col-xxl-4 col-xl-4 col-lg-7 col-md-6 col-sm-12 col-12 text-end">
                            <button type="button" class="btn-close d-block position-absolute d-md-none top-0 mt-2 end-0 me-2" id="closeSearch"></button>
                            <div class="position-relative w-100">
                                <span class="form-control-feedback">
                                    <img class="svg" src="{{ asset('images/search.svg') }}" alt="" height="32" width="32">
                                </span>
                                <input type="text" class="form-control text-transform-none form-control-icon ps-5" placeholder="{{ trans('user.dashboard.search') }}" id="search-dish" />
                            </div>
                            <button class="navbar-toggler bag-count d-flex  dashboard-cart-navbar-toggler cart-navbar-toggler ms-2 p-0 d-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#bdSidebarCart" aria-controls="bdSidebarCart" aria-label="Toggle docs navigation">
                                <span class="count" id="cart-item-count">{{ isset(Auth::user()->cart) ? Auth::user()->cart->dishDetails->count() : 0 }}</span>
                                <svg width="26px" height="26px" viewBox="-4 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                                  <defs></defs>
                                  <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                                    <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-572.000000, -723.000000)" fill="#FFC00B">
                                      <path d="M594,747 L574,747 L574,731 C574,729.896 574.896,729 576,729 L578,729 L578,735 L580,735 L580,729 L588,729 L588,735 L590,735 L590,729 L592,729 C593.104,729 594,729.896 594,731 L594,747 L594,747 Z M594,751 C594,752.104 593.104,753 592,753 L576,753 C574.896,753 574,752.104 574,751 L574,749 L594,749 L594,751 L594,751 Z M584,725 C586.209,725 588,725.619 588,727 L580,727 C580,725.619 581.791,725 584,725 L584,725 Z M592,727 L590,727 C590,724.791 587.313,723 584,723 C580.687,723 578,724.791 578,727 L576,727 C573.791,727 572,728.791 572,731 L572,751 C572,753.209 573.791,755 576,755 L592,755 C594.209,755 596,753.209 596,751 L596,731 C596,728.791 594.209,727 592,727 L592,727 Z" id="bag" sketch:type="MSShapeGroup"></path>
                                    </g>
                                  </g>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="offer-card-banner offercard-slider">
                      <div class="card position-relative">
                        <div class="bg-offercard-circle-1">
                          <img class="svg" src="{{ asset('images/ban-grade1.svg') }}" alt="" width="175" height="102">
                        </div>
                        <div class="bg-offercard-circle-2">
                          <img class="svg" src="{{ asset('images/ban-grade2.svg') }}" alt="" width="285" height="114">
                        </div>
                        <div class="bg-offercard-circle-3">
                          <img class="svg" src="{{ asset('images/ban-grade3.svg') }}" alt="" width="175" height="144">
                        </div>
                        <div class="card-body">
                          <h2>{{ trans('user.dashboard.banner_content_1') }}</h2>
                          <p class="mb-0">{{ trans('user.dashboard.banner_content_2') }}</p>
                        </div>
                      </div>
                    </div>
                    <!-- start category section -->
                    <section class="custom-section category-section pb-0">
                        <div class="section-page-title">
                            <h1 class="section-title">{{ trans('user.dashboard.category') }}</h1>
                        </div>
                        <div class="swiper-container">
                            <div class="category-slider-navigation">
                                <!-- Add Arrows -->
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                            <div class="swiper category-swiper-slider">
                                <div class="category-slider swiper-wrapper">
                                    @foreach ($categories as $cat)
                                        <?php
                                            $selected = '';

                                        if(!isset($_GET['all']) && $cat_id == ''){
                                            if($cat->sort_order == '1')
                                                $selected = 'selected-cart-active';
                                        }
                                        else{
                                            if($cat_id == $cat->id)
                                                $selected = 'selected-cart-active';
                                        }
                                            ?>
                                        <div class="category-element swiper-slide {{ $selected }}">
                                          <div class="card">
                                            <span class="dish-item-icon">
                                              <img src="{{ $cat->image }}" class="img-fluid" alt="bakery" width="56" height="56" />
                                            </span>
                                            <p class="mb-0 text-truncate text-muted" title="{{ $cat->name }}">
                                              {{ $cat->name }}
                                            </p>
                                            <a href="{{ route('user.dashboard', ['cat_id' => $cat->id]) }}" class="stretched-link"></a>
                                          </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- end category section -->
                    <!-- start category list section -->
                    <section class="custom-section category-list-section pb-0">
                        <div class="section-page-title">
                            <h1 class="section-title">{{ $category ? $category->name : '' }}</h1>
                            <a href="{{ route('user.dashboard') }}?all=1" type="button" class="viewall-btn">{{ trans('user.button.view_all') }}
                                <span>
                                    <img src="{{ asset('images/view.svg') }}" alt="" class="svg" height="24" width="24">
                                </span>
                            </a>
                        </div>
                        <div class="dish-details-div">
                            <div class="category-list-item-grid">
                                @if (count($dishes) > 0)
                                    @foreach ($dishes as $dish)
                                        <?php
                                        $disableBtn = '';
                                        $customizeBtn = false;

                                        if ($dish->qty == 0 || $dish->out_of_stock == '1') {
                                            $disableBtn = 'disabled';
                                            $customizeBtn = true;
                                        }
                                        if(count($dish->ingredients) == 0){
                                            $customizeBtn = true;
                                        }

                                        ?>
                                        <div class="card food-detail-card">
                                            @if ($dish->percentage_off > 0)
                                                <p class="mb-0 offer-percantage">
                                                    {{ $dish->percentage_off }}%
                                                </p>
                                            @endif
                                            <p class="mb-0 food-favorite-icon {{ isset($dish->favorite) ? 'd-none' : ''}}" onclick="favorite({{ $dish->id }})" id="unfavorite-icon-{{ $dish->id }}">
                                                <img src="{{ asset('images/favorite-before-icon.svg') }}" alt="" class="svg" height="20" width="22">
                                            </p>
                                            <p class="mb-0 food-favorite-icon {{ isset($dish->favorite) ? '' : 'd-none'}}" onclick="unFavorite({{ $dish->id }})" id="favorite-icon-{{ $dish->id }}">
                                                <img src="{{ asset('images/favorite-after-icon.svg') }}" alt="" class="svg" height="20" width="22">
                                            </p>

                                            <div class="food-image">
                                                <img src="{{ $dish->image }}" alt="burger imag" class="img-fluid" width="100" height="100" />
                                            </div>
                                            <h4 class="food-name-text">{{ $dish->name }}</h4>
                                            <p class="food-price">€{{ number_format($dish->price, 2) }}</p>

                                            <button type="button" class="btn btn-xs-sm btn-custom-yellow" onclick="customizeDish({{ $dish->id }})" {{ $disableBtn }} id="dish-cart-lbl-{{ $dish->id }}">
                                                @if ($dish->qty == 0 || $dish->out_of_stock == '1')
                                                    {{ trans('user.dashboard.out_of_stock') }}
                                                @else
                                                    {{ trans('user.dashboard.add') }}
                                                    <img src="{{ asset('images/plus.svg') }}" class="svg" height="9" width="9">
                                                @endif
                                            </button>

                                            @if (!$customizeBtn)
                                                <label class="customize-foodlink">
                                                    {{ trans('user.dashboard.customizable') }}
                                                </label>
                                            @endif
                                        </div>
                                    @endforeach
                                @else
                                    {{ trans('user.dashboard.no_dish_found') }}
                                @endif
                            </div>
                        </div>
                    </section>
                    <!-- end category list section -->
                </div>
            </main>
            <aside class="cart-sidebar sticky-top h-lg-100vh cartSidebarCustom">
                <div class="offcanvas-xxl offcanvas-end h-100 overflow-auto cartoffCanvas" tabindex="-1" id="bdSidebarCart" aria-labelledby="bdSidebarCartOffcanvasLabel">
                    <div class="offcanvas-header p-0" style="display: block"></div>
                    <div class="offcanvas-body position-relative space-for-close pb-xxl-3">
                        <h4 class="d-block position-absolute d-xxl-none start-0 top-0 pt-2 d-xxl-none text-center end-0 mx-auto head-title">{{ trans('user.cart.title') }} </h4>
                        <button type="button" class="btn-close d-block position-absolute d-xxl-none top-0 mt-1 me-md-2 mt-md-2 end-0 ms-2 bg-arrow-mobile"
                            data-bs-dismiss="offcanvas" aria-label="Close" data-bs-target="#bdSidebarCart">
                            <i class="fa-solid fa-angle-left d-none"></i>
                        </button>
                        <div class="navbar navbar-expand-lg pt-3 pt-xxl-0 h-lg-100">
                            <div class="cart-sidebar-content position-relative h-100">
                                <div class="navbar-collapse cartbox-collapse h-100">
                                    <div class="cart-custom-tab cart-tab custom-tabs d-flex flex-column h-100">
                                        <ul class="nav nav-fill nav-fillMobile" id="pills-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                              <button class="nav-link {{ $zipcode ? 'active' : '' }} pills-delivery-tab" id="pills-home-tab" data-bs-toggle="pill" data-type="{{ \App\Enums\OrderType::Delivery }}" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                                <img src="{{ asset('images/scoter1.svg') }}" alt="" class="svg" height="23" width="26"> {{ trans('user.cart.delivery') }}</button>
                                              <input type="hidden" value="{{ $house_no }}" id="del-house-no">
                                              <input type="hidden" value="{{ $zipcode }}" id="del-zipcode">
                                            </li>
                                            <li class="nav-item" role="presentation">
                                              <button class="nav-link {{ !$zipcode ? 'active' : '' }} pills-delivery-tab" id="pills-profile-tab" data-bs-toggle="pill" data-type="{{ \App\Enums\OrderType::TakeAway }}" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                                                <img src="{{ asset('images/takeaway-icon.svg') }}" alt="" class="svg" height="23" width="23"> {{ trans('user.cart.take_away') }}</button>
                                            </li>
                                        </ul>
                                        <div class="d-flex flex-column flex-fill tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade {{ $zipcode ? 'show active' : '' }}"
                                                id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                                                tabindex="0">
                                                <div class="form-group addressMobile">
                                                    <label class="form-label">{{ trans('user.cart.delivery_address') }}</label>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center delivery-address-span address-field">
                                                           <img src="{{ asset('images/delivery-address.svg') }}" alt="" class="svg" height="23" width="32">
                                                           <p class="mb-0 d-inline-block ms-1 text-bold-1 mt-1"> <?= $house_no ? $house_no . ', ' . $zipcode : '' ?> </p>
                                                        </div>
                                                        @if ($user && $user->id)
                                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#addressChangeModal" class="btn btn-xs-sm btn-custom-yellow text-capitalize address-change-btn">
                                                              <span class="d-none d-md-block">{{ trans('user.cart.change') }}</span>
                                                              <i class="fa-solid fa-angle-down d-block d-md-none"></i>
                                                            </a>
                                                        @else
                                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#signInModal" class="btn btn-xs-sm btn-custom-yellow text-capitalize address-change-btn">
                                                              <span class="d-none d-md-block">{{ trans('user.cart.change') }}</span>
                                                              <i class="fa-solid fa-angle-down d-block d-md-none"></i>
                                                            </a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade {{ !$zipcode ? 'show active' : '' }}" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                                                <div class="form-group addressMobile">
                                                    <label class="form-label">{{ trans('user.cart.rest_address') }}</label>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-start address-field">
                                                            <img src="{{ asset('images/rest-address.svg') }}" alt="" class="svg" height="29" width="29">
                                                            <p class="mb-0 d-inline-block ms-1 text-bold-1 mt-1">{{ getRestaurantDetail()->rest_address }} </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @if ($user && $user->id)
                                                <!-- End address section & start cart section -->
                                                <div class="cart-section">
                                                    <h6 class="cart-title d-none d-md-block">{{ trans('user.cart.title') }}</h6>
                                                    <div class="cart-items">
                                                        @if (count($cart) > 0)
                                                            @foreach ($cart as $key => $dish)
                                                                <?php
                                                                $cartValue += $dish->qty * $dish->dish->price;
                                                                $paidIngredient = $dish->orderDishPaidIngredients()->select(DB::raw('sum(quantity * price) as total'))->get()->sum('total');
                                                                $cartValue += $dish->qty * $paidIngredient;
                                                                $outOfStock = '';
                                                                $outOfStockDisplay = 'd-none';
                                                                if ($dish->dish->qty == 0 || $dish->dish->out_of_stock == '1') {
                                                                    $outOfStock = 'nostock-card';
                                                                    $outOfStockDisplay = '';
                                                                }
                                                                ?>
                                                                <div class="row stock-card mb-0 {{ $outOfStock }}" id="cart-{{ $dish->id }}">
                                                                    <div class="col-12 text-end d-flex align-items-center gap-2 mb-3 justify-content-end outof-stock-text {{ $outOfStockDisplay }}">
                                                                        <strong>{{ trans('user.cart.out_of_stock') }}</strong>
                                                                        <a class="remove-cart-dish" data-id="{{ $dish->id }}" data-dish-id="{{ $dish->dish->id }}" href="javascript:void(0)">
                                                                          <svg xmlns="http://www.w3.org/2000/svg" fill="#ff0000" viewBox="0 0 24 24" width="20px" height="20px">
                                                                            <path d="M 10 2 L 9 3 L 4 3 L 4 5 L 5 5 L 5 20 C 5 20.522222 5.1913289 21.05461 5.5683594 21.431641 C 5.9453899 21.808671 6.4777778 22 7 22 L 17 22 C 17.522222 22 18.05461 21.808671 18.431641 21.431641 C 18.808671 21.05461 19 20.522222 19 20 L 19 5 L 20 5 L 20 3 L 15 3 L 14 2 L 10 2 z M 7 5 L 17 5 L 17 20 L 7 20 L 7 5 z M 9 7 L 9 18 L 11 18 L 11 7 L 9 7 z M 13 7 L 13 18 L 15 18 L 15 7 L 13 7 z" />
                                                                          </svg>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-12">
                                                                      <div class="d-flex cart-item-row">
                                                                        <div class="cart-custom-w-col-img">
                                                                          <img src="{{ $dish->dish->image }}" alt="{{ $dish->dish->name }}" class="img-fluid" width="86" height="74px" />
                                                                          <div class="foodqty mt-4">
                                                                            <span class="minus">
                                                                              <i class="fas fa-minus align-middle" onclick="updateDishQty('-',{{ $dish->dish->qty }},{{ $dish->id }})"></i>
                                                                            </span>
                                                                            <input type="number" readonly class="count cart-amt" id="qty-{{ $dish->id }}" name="qty-{{ $dish->id }}" value="{{ $dish->qty }}" data-ing="{{ $paidIngredient }}" data-id="{{ $dish->id }}" />
                                                                            <input type="hidden" id="dish-price-{{ $dish->id }}" value="{{ $dish->dish->price }}" />
                                                                            <span class="plus">
                                                                              <i class="fas fa-plus align-middle" onclick="updateDishQty('+',{{ $dish->dish->qty }},{{ $dish->id }})"></i>
                                                                            </span>
                                                                          </div>
                                                                        </div>
                                                                        <div class="cart-custom-w-col-detail">
                                                                          <div class="cart-item-detail">
                                                                            <div class="d-flex align-items-center justify-content-between">
                                                                              <p class="d-inline-block item-name mb-0">
                                                                                {{ $dish->dish->name }}
                                                                              </p>
                                                                              <span class="cart-item-price" id="cart-item-price{{ $dish->id }}">+€{{ number_format((float) ($dish->qty * $dish->dish->price), 2) }}</span>
                                                                            </div>
                                                                            <div class="d-flex align-items-center">
                                                                              <p class="mb-0 item-options mb-0">
                                                                                {{ $dish->dishOption->name ?? '' }}
                                                                              </p>
                                                                              <span class="item-desc" id="item-ing-desc{{ $dish->id }}">{{ getOrderDishIngredients($dish) }}</span>
                                                                              <p class="item-customize mb-0 ms-auto justify-content-end">
                                                                                <a href="javascript:void(0);" onclick="customizeDish({{ $dish->dish->id }}, {{ $dish->id }});">
                                                                                  <img src="{{ asset('images/custom-dish.svg') }}" alt="" class="svg"  style="height: 13px;width: 14px;" />
                                                                                </a> {{ trans('user.cart.edit') }}
                                                                              </p>
                                                                              <p class="price-opt mb-0 text-nowrap" id="paid-ing-price{{ $dish->id }}">
                                                                                +€{{ number_format($paidIngredient * $dish->qty, 2) }}
                                                                              </p>
                                                                            </div>
                                                                            <div class="from-group addnote-from-group mb-0">
                                                                              <div class="form-group">
                                                                                <label for="dishnameenglish" class="form-label">{{ trans('user.cart.add_notes') }}</label>
                                                                                <input type="text" data-id="{{ $dish->id }}" maxlength="50" class="form-control dish-notes" value="{{ $dish->notes }}" placeholder="{{ trans('user.cart.type_here') }}" />
                                                                              </div>
                                                                            </div>
                                                                          </div>
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                    <div class="cart-amount-cal-data" id="cart-amount-cal-data" {{ count($cart) > 0 ? '' : 'style=display:none' }}>
                                                      <div class="form-group prev-input-group custom-icon-input-group">
                                                        <span class="input-group-icon">
                                                          <img src="{{ asset('images/scoter-yellow.svg') }}" alt="" class="svg img-fluid" height="22" width="25">
                                                        </span>
                                                        <input type="text" class="form-control bg-gray custom-control-with-icon ps-5" id="delivery_instruction" maxlength="50" value="{{ $user->cart ? $user->cart->delivery_note : '' }}" placeholder="{{ trans('user.cart.instruction') }}" />
                                                      </div>
                                                      <div class="mb-4 pb-1">
                                                        <div class="form-group prev-input-group position-relative d-flex align-items-center mb-0">
                                                          <span class="input-group-icon">
                                                            <img src="{{ asset('images/coupon-code.svg') }}" alt="" class="svg img-fluid" height="18" width="29">
                                                          </span>
                                                          <input type="text" class="form-control bg-gray custom-control-with-icon ps-5 dashed-border" style="padding-right: 95px" placeholder="Coupon Code" value="{{ $couponCode }}" {{ !empty($couponCode) ? 'readonly' : '' }} id="coupon_code">
                                                          <div class="coupon-apply-btn">
                                                            <button class="btn btn-xs-sm btn-custom-yellow" onclick="applyCoupon()" id="coupon_code_apply_btn" {{ !empty($couponCode) ? 'style=display:none' : '' }}> {{ trans('user.cart.apply') }} </button>
                                                            <button class="btn btn-xs-sm btn-custom-yellow" onclick="removeCoupon()" id="coupon_code_remove_btn" {{ !empty($couponCode) ? '' : 'style=display:none' }}> {{ trans('user.cart.remove') }} </button>
                                                          </div>
                                                        </div>
                                                        <label id="coupon-code-error" class="error d-none"></label>
                                                      </div>
                                                    </div>
                                                </div>
                                                <div class="empty-card-div w-100 mt-lg-5 pt-lg-5" id="empty-cart-div" {{ count($cart) > 0 ? 'style=display:none' : '' }}>
                                                    <p class="empty-card-text text-muted-1 mb-2">{{ trans('user.cart.empty') }}
                                                    </p>
                                                    <span>
                                                        <img src="{{ asset('images/empty-card.svg') }}" alt="" class="svg" height="128" width="132">
                                                    </span>
                                                </div>
                                                <!-- End cart section -->
                                            @else
                                                <!-- start empty cart section -->
                                                <div class="empty-card-div w-100 mt-lg-5 pt-lg-5">
                                                    <p class="empty-card-text text-muted-1 mb-2">{{ trans('user.cart.empty') }}
                                                    </p>
                                                    <span>
                                                        <img src="{{ asset('images/empty-card.svg') }}" alt="" class="svg" height="128" width="132">
                                                    </span>
                                                </div>
                                                <!--end empty cart section -->
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bill-detail-invoice {{ count($cart) == 0 ? 'd-none' : '' }}" id="cart-bill-div">
                        <h6 class="cart-title mb-1 d-none d-xxl-block">{{ trans('user.cart.bill_details') }}</h6>
                        <div class="table-responsive">
                            <table class="table table-borderless mb-2">
                                <tbody></tbody>
                                <tbody>
                                    <tr>
                                        <td class="text-start">
                                            <span class="text-muted-1 bill-count-name">{{ trans('user.cart.item_total') }}</span>
                                        </td>
                                        <td class="text-end">
                                            <span class="bill-count" id="total-cart-bill">€{{ number_format($cartValue, 2) }}</span>
                                            <input type="hidden" id="total-cart-bill-amount" value="{{ $cartValue }}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-start">
                                            <span class="text-muted-1 bill-count-name">{{ trans('user.cart.service_charge') }}</span>
                                        </td>
                                        <td class="text-end">
                                            <span class="bill-count">€{{ number_format($serviceCharge, 2) }}</span>
                                            <input type="hidden" id="service-charge" value="{{ $serviceCharge }}">
                                        </td>
                                    </tr>
                                    <tr class="item-discount" id="item-discount" {{ !empty($couponCode) ? '' : 'style=display:none' }}>
                                        <td class="text-start">
                                            <span class="text-custom-light-green bill-count-name">{{ trans('user.cart.discount') }}</span>
                                            <input type="hidden" id="coupon-discount" value="{{ $couponDiscount }}">
                                        </td>
                                        <td class="text-end">
                                            <span class="text-custom-light-green bill-count" id="coupon-discount-text">-€{{ number_format((float) ($cartValue * $couponDiscountPercent), 2) }}
                                            </span>
                                            <input type="hidden" id="coupon-discount-percent" value="{{ $couponDiscountPercent }}">
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td class="text-start">{{ trans('user.cart.total') }}</td>
                                        <td class="text-end">
                                            <span class="bill-total-count" id="gross-total-bill">€{{ number_format((float) ($cartValue + $serviceCharge - $cartValue * $couponDiscountPercent), 2) }}</span>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <a class="btn btn-custom-yellow btn-default d-block checkout-sticky-btn {{ count($cart) == 0 ? 'd-none' : '' }}"
                            id="checkout-cart" href="javascript:void(0)">
                            <span class="align-middle">
                                <span class="count_cart">
                                    <span class="count_num" id="cart-count-sticky">{{ isset(Auth::user()->cart) ? Auth::user()->cart->dishDetails->count() : 0 }}</span>
                                    <svg width="22px" height="22px" viewBox="-4 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                                        <defs></defs>
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                                            <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-572.000000, -723.000000)" fill="#333333">
                                                <path
                                                    d="M594,747 L574,747 L574,731 C574,729.896 574.896,729 576,729 L578,729 L578,735 L580,735 L580,729 L588,729 L588,735 L590,735 L590,729 L592,729 C593.104,729 594,729.896 594,731 L594,747 L594,747 Z M594,751 C594,752.104 593.104,753 592,753 L576,753 C574.896,753 574,752.104 574,751 L574,749 L594,749 L594,751 L594,751 Z M584,725 C586.209,725 588,725.619 588,727 L580,727 C580,725.619 581.791,725 584,725 L584,725 Z M592,727 L590,727 C590,724.791 587.313,723 584,723 C580.687,723 578,724.791 578,727 L576,727 C573.791,727 572,728.791 572,731 L572,751 C572,753.209 573.791,755 576,755 L592,755 C594.209,755 596,753.209 596,751 L596,731 C596,728.791 594.209,727 592,727 L592,727 Z"
                                                    id="bag" sketch:type="MSShapeGroup"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                                {{ trans('user.cart.checkout') }}
                            </span>
                        </a>
                    </div>
                </div>
            </aside>
        </div>
    </div>
    <!-- start footer -->
    @include('layouts.user.footer_design')
    <!-- end footer -->
</div>

@include('user.modals.address')
@include('user.modals.customize-dish')
@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('js/user/dashboard.js') }}"></script>
@endsection
