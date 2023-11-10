@extends('layouts.app')

@section('content')
    <div class="main">
        <div class="main-view">
            <div class="container-fluid bd-gutter bd-layout">
                @include('layouts.admin.side_nav_bar')

                <main class=" order-1 w-100">
                    <div class="main-content">
                        <div class="section-page-title mb-0">
                            <h1 class="page-title">Coupons</h1>
                            <div class="col text-end">
                                <div class="form-group mb-0">
                                    <a class="btn btn-outline-secondary border-light btn-default me-4 btn-box-shadow"
                                       href="{{ route('claimHistoryLog') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                             viewBox="0 0 20 20" fill="none">
                                            <g clip-path="url(#clip0_2603_29799)">
                                                <path
                                                    d="M19.9068 5.07776C19.9162 5.24262 19.9279 5.35747 19.9279 5.47233C19.9287 9.66408 19.9302 13.8558 19.9271 18.0476C19.9263 19.0555 19.4489 19.718 18.5778 19.9462C18.4535 19.979 18.3223 19.9977 18.1941 19.9977C15.2134 20.0009 12.2319 20.0001 9.25122 19.9993C9.20278 19.9993 9.15434 19.9899 9.03089 19.9766C10.588 18.7765 11.4764 17.2499 11.6999 15.3138C11.8514 15.3138 11.9921 15.3138 12.1319 15.3138C13.5641 15.3138 14.9954 15.3145 16.4276 15.3138C16.9128 15.3138 17.1855 15.0966 17.1823 14.7231C17.1792 14.3512 16.9081 14.1434 16.4174 14.1426C14.9986 14.141 13.5797 14.1426 12.1608 14.1426C12.0194 14.1426 11.8772 14.1426 11.7717 14.1426C11.5475 13.355 11.3334 12.6003 11.1107 11.8174C11.2061 11.8127 11.3412 11.8002 11.4756 11.8002C13.1422 11.7986 14.8079 11.7963 16.4745 11.8018C16.7917 11.8025 17.0433 11.7111 17.1503 11.3923C17.2902 10.9782 16.9901 10.6306 16.4878 10.629C14.8736 10.6251 13.2578 10.5868 11.6459 10.6431C10.7623 10.6743 10.0857 10.5024 9.41217 9.83909C8.29802 8.74213 6.84711 8.29834 5.27902 8.28428C5.09853 8.28271 4.91727 8.28428 4.68834 8.28428C4.68834 8.12332 4.68834 7.98347 4.68834 7.8444C4.68834 5.90439 4.686 3.96517 4.68913 2.02517C4.69069 0.682087 5.37199 0 6.69945 0C9.25122 0 11.8022 0 14.354 0H14.8243C14.8321 0.155482 14.8446 0.292212 14.8446 0.428942C14.8462 1.67826 14.8446 2.92837 14.8454 4.17769C14.8454 4.92072 14.9993 5.07698 15.7283 5.07698C17.1073 5.07698 18.4864 5.07698 19.9068 5.07698V5.07776ZM12.3085 8.28115C13.7008 8.28115 15.0923 8.28349 16.4846 8.27959C16.9769 8.27802 17.2652 7.96862 17.1597 7.55765C17.0706 7.20997 16.8136 7.10605 16.4792 7.10683C14.5931 7.11074 12.707 7.1084 10.8201 7.1084C9.90987 7.1084 8.99886 7.10371 8.08862 7.11074C7.62687 7.11465 7.3495 7.43264 7.45263 7.83111C7.54249 8.17802 7.79876 8.28349 8.13394 8.28193C9.52546 8.27724 10.9178 8.28037 12.3101 8.28037L12.3085 8.28115Z"
                                                    fill="black" />
                                                <path
                                                    d="M10.5462 14.72C10.5524 17.6171 8.18897 19.9954 5.30202 19.9993C2.3799 20.0032 0.0078324 17.6468 1.92588e-05 14.7333C-0.00779388 11.844 2.36271 9.46018 5.24967 9.45393C8.17491 9.44768 10.5399 11.7994 10.5462 14.72ZM5.86144 15.7318C5.86144 15.1857 5.86613 14.6403 5.85988 14.0942C5.85519 13.6293 5.64345 13.3675 5.28483 13.3613C4.92386 13.355 4.69494 13.6183 4.69259 14.0754C4.68634 15.1544 4.68712 16.2326 4.69259 17.3116C4.69494 17.7757 4.90902 18.0382 5.26686 18.0445C5.63642 18.0507 5.85597 17.7781 5.86066 17.2913C5.86535 16.7717 5.86144 16.2514 5.86144 15.7318ZM5.2903 12.5753C5.61298 12.5667 5.87081 12.2831 5.85206 11.9573C5.83409 11.6463 5.56923 11.3994 5.26139 11.4072C4.93871 11.4158 4.68087 11.6994 4.69963 12.0245C4.7176 12.3354 4.98324 12.5823 5.2903 12.5745V12.5753Z"
                                                    fill="black" />
                                                <path
                                                    d="M16.0508 0.453857C17.1931 1.59458 18.3299 2.73139 19.4768 3.8768H16.0508V0.453857Z"
                                                    fill="black" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_2603_29799">
                                                    <rect width="19.9309" height="20" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <span class="align-middle ms-3">Claim History</span>
                                    </a>
                                    <a class="btn btn-custom-yellow btn-default btn-box-shadow"
                                       href="javascript:void(0);" data-bs-toggle="modal"
                                       data-bs-target="#addCouponModal">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                             viewBox="0 0 20 20" fill="none">
                                            <circle cx="10" cy="10" r="10" fill="#292929"></circle>
                                            <path
                                                d="M11.0475 9.48672H14.7416V11.1306H11.0475V14.8616H9.4036V11.1306H5.71875V9.48672H9.4036V5.71875H11.0475V9.48672Z"
                                                fill="#FFC00B"></path>
                                        </svg>
                                        <span class="align-middle ms-3">Add Coupon</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- start coupons card section -->
                        <section class="custom-section">
                            <div class="coupon-card-grid">
                                @foreach($coupons as $key => $coupon)
                                <input type="hidden" id="id" value="{{ $coupon->id }}">
                                <div class="card editdish-card coupons-card">
                                    <div class="card-body pb-0">
                                        <div
                                            class="card-custom-header d-flex align-items-center justify-content-between">
                                            <div class="form-check form-switch custom-switch justify-content-center ps-0">
                                                <input class="form-check-input" type="checkbox" role="switch" {{ $coupon->status ? 'checked':'' }}>
                                            </div>
                                            <div>
                                                <a class="btn btn-custom-yellow btn-icon me-2" tabindex="0" href="javascript:void(0);" id="coupon-edit-btn">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a class="btn btn-custom-yellow btn-icon" data-bs-toggle="modal" data-bs-target="#deleteCouponModal">
                                                    <i class="fa-regular fa-trash-can"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                                <h3>{{ $coupon->percentage_off }}<sup>%</sup><sub>off</sub></h3>
                                                <h6>Percentage Off</h6>
                                                <div class="dotted-divider"></div>
                                                <p class="valid-date mb-0">Valid Until {{ $coupon->expiry_date }}</p>
                                            </div>
                                            <div class="promocode-box">
                                                <p class="mb-0 d-inline-block">Promo code</p>
                                                <span class="badge text-bg-white d-inline-block">{{ $coupon->promo_code }}</span>
                                            </div>
                                            <div class="circle1"></div>
                                            <div class="circle2"></div>
                                        </div>

                                    </div>
                                    <div class="card-footer bg-white border-0">
                                        <p class="mb-0 text-center coupons-card-footer-text">{{ $coupon->description }}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </section>
                        <!-- start coupons card section -->
                    </div>
                </main>
            </div>
        </div>

        <!-- start footer -->
        <script src="js/footer.js"></script>
        <!-- end footer -->
    </div>


    <!-- start add coupon Modal -->
    <div class="modal fade custom-modal" id="addCouponModal" tabindex="-1" aria-labelledby="addCouponModal" aria-hidden="true">
        <div class="modal-dialog custom-w-441px modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h1 class="modal-title mb-0">Add Coupon</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" id="coupon-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="points" class="form-label">Points</label>
                                    <input type="number" class="form-control" id="points" name="points" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="price" class="form-label">minimum order price</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">€</span>
                                        <input type="text" class="form-control" id="price" name="price" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="promocode" class="form-label">Promo Code</label>
                                    <input type="text" class="form-control" id="promo_code" name="promo_code" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="percentageofoff" class="form-label">Percentage Off</label>
                                    <input type="number" class="form-control" id="percentage_off" name="percentage_off" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="percentageofoff" class="form-label">Validity date</label>
                                    <div class="input-group dateselect-group date">
                                        <span class="input-group-text" id="basic-addon1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <mask id="path-1-outside-1_3165_3021" maskUnits="userSpaceOnUse" x="0" y="0" width="20" height="20" fill="black">
                                                  <rect fill="white" width="20" height="20"/>
                                                  <path d="M1 17.5204V4.0367C1.01312 4.00804 1.02446 3.97848 1.03393 3.9482C1.20743 3.20165 1.64119 2.72373 2.34538 2.59462C2.70402 2.52851 3.07962 2.56599 3.44795 2.5587C3.60836 2.55558 3.76878 2.5587 3.93889 2.5587C3.93889 2.23332 3.93889 1.93397 3.93889 1.63723C3.93889 1.25667 4.15844 1.00053 4.48073 1.00001C4.80302 0.999486 5.02402 1.25562 5.02547 1.63515C5.02547 1.93814 5.02547 2.24113 5.02547 2.54516H9.74301C9.74301 2.2328 9.74301 1.93606 9.74301 1.63827C9.74301 1.25719 9.96207 1.00105 10.2844 1.00001C10.6067 0.998966 10.8286 1.2551 10.8296 1.6341C10.8296 1.9371 10.8296 2.24009 10.8296 2.54569H15.5466C15.5466 2.23332 15.5466 1.93762 15.5466 1.63983C15.5466 1.25823 15.7647 1.00157 16.0865 1.00001C16.4084 0.998445 16.6318 1.25458 16.6332 1.63254C16.6332 1.93554 16.6332 2.23853 16.6332 2.5587C17.0806 2.5587 17.5085 2.5587 17.9364 2.5587C18.1515 2.55655 18.3647 2.60042 18.5638 2.68774C18.7629 2.77506 18.9438 2.90409 19.096 3.06731C19.2481 3.23052 19.3685 3.42465 19.4501 3.63837C19.5317 3.85209 19.5728 4.08112 19.5711 4.3121C19.5711 8.62376 19.5711 12.9354 19.5711 17.2471C19.5729 17.4777 19.5319 17.7064 19.4506 17.9198C19.3692 18.1333 19.2492 18.3272 19.0974 18.4903C18.9457 18.6535 18.7652 18.7825 18.5665 18.87C18.3679 18.9575 18.155 19.0017 17.9403 19C12.8386 19 7.73658 19 2.63423 19C2.1554 19 1.75702 18.8011 1.42794 18.4273C1.19725 18.1717 1.09063 17.851 1 17.5204ZM2.08755 7.78506V7.9527C2.08755 11.0239 2.08755 14.0955 2.08755 17.1674C2.08755 17.6042 2.31436 17.8343 2.73988 17.8343H17.8264C18.2781 17.8343 18.486 17.6079 18.486 17.1164C18.486 14.0778 18.486 11.0392 18.486 8.00059V7.78662L2.08755 7.78506ZM18.4836 6.60068C18.4836 5.81457 18.4938 5.04251 18.4792 4.27097C18.4729 3.95236 18.2267 3.73319 17.9204 3.72642C17.6544 3.72017 17.3873 3.72642 17.1222 3.72642H16.6347V4.12364C16.6347 4.32512 16.6395 4.52659 16.6347 4.72754C16.628 4.87766 16.5675 5.01917 16.4659 5.12252C16.3643 5.22586 16.2295 5.28304 16.0896 5.28209C15.9497 5.28115 15.8155 5.22217 15.7152 5.11747C15.6148 5.01277 15.556 4.87045 15.551 4.72026C15.5447 4.39227 15.551 4.06325 15.551 3.73943H10.8306V4.12364C10.8306 4.3246 10.8354 4.52607 10.8306 4.72754C10.8237 4.87767 10.763 5.01913 10.6613 5.12236C10.5596 5.22558 10.4247 5.28258 10.2848 5.28144C10.1448 5.2803 10.0108 5.2211 9.91051 5.11623C9.81027 5.01135 9.75165 4.86892 9.74689 4.71869C9.74108 4.39019 9.74689 4.06169 9.74689 3.73891H5.02595V4.16321C5.02595 4.3449 5.02935 4.52763 5.02595 4.7088C5.02711 4.86331 4.97108 5.01198 4.8702 5.12211C4.76931 5.23224 4.63183 5.2948 4.488 5.29605C4.34417 5.29729 4.20577 5.2371 4.10324 5.12873C4.00072 5.02036 3.94247 4.87268 3.94132 4.71817C3.9355 4.38967 3.94132 4.06117 3.94132 3.7233C3.51047 3.7233 3.10627 3.7233 2.70159 3.7233C2.31824 3.7233 2.09142 3.9659 2.08997 4.37509C2.08997 4.92069 2.08997 5.46837 2.08997 6.01136V6.5986L18.4836 6.60068Z"/>
                                                </mask>
                                                <path d="M1 17.5204V4.0367C1.01312 4.00804 1.02446 3.97848 1.03393 3.9482C1.20743 3.20165 1.64119 2.72373 2.34538 2.59462C2.70402 2.52851 3.07962 2.56599 3.44795 2.5587C3.60836 2.55558 3.76878 2.5587 3.93889 2.5587C3.93889 2.23332 3.93889 1.93397 3.93889 1.63723C3.93889 1.25667 4.15844 1.00053 4.48073 1.00001C4.80302 0.999486 5.02402 1.25562 5.02547 1.63515C5.02547 1.93814 5.02547 2.24113 5.02547 2.54516H9.74301C9.74301 2.2328 9.74301 1.93606 9.74301 1.63827C9.74301 1.25719 9.96207 1.00105 10.2844 1.00001C10.6067 0.998966 10.8286 1.2551 10.8296 1.6341C10.8296 1.9371 10.8296 2.24009 10.8296 2.54569H15.5466C15.5466 2.23332 15.5466 1.93762 15.5466 1.63983C15.5466 1.25823 15.7647 1.00157 16.0865 1.00001C16.4084 0.998445 16.6318 1.25458 16.6332 1.63254C16.6332 1.93554 16.6332 2.23853 16.6332 2.5587C17.0806 2.5587 17.5085 2.5587 17.9364 2.5587C18.1515 2.55655 18.3647 2.60042 18.5638 2.68774C18.7629 2.77506 18.9438 2.90409 19.096 3.06731C19.2481 3.23052 19.3685 3.42465 19.4501 3.63837C19.5317 3.85209 19.5728 4.08112 19.5711 4.3121C19.5711 8.62376 19.5711 12.9354 19.5711 17.2471C19.5729 17.4777 19.5319 17.7064 19.4506 17.9198C19.3692 18.1333 19.2492 18.3272 19.0974 18.4903C18.9457 18.6535 18.7652 18.7825 18.5665 18.87C18.3679 18.9575 18.155 19.0017 17.9403 19C12.8386 19 7.73658 19 2.63423 19C2.1554 19 1.75702 18.8011 1.42794 18.4273C1.19725 18.1717 1.09063 17.851 1 17.5204ZM2.08755 7.78506V7.9527C2.08755 11.0239 2.08755 14.0955 2.08755 17.1674C2.08755 17.6042 2.31436 17.8343 2.73988 17.8343H17.8264C18.2781 17.8343 18.486 17.6079 18.486 17.1164C18.486 14.0778 18.486 11.0392 18.486 8.00059V7.78662L2.08755 7.78506ZM18.4836 6.60068C18.4836 5.81457 18.4938 5.04251 18.4792 4.27097C18.4729 3.95236 18.2267 3.73319 17.9204 3.72642C17.6544 3.72017 17.3873 3.72642 17.1222 3.72642H16.6347V4.12364C16.6347 4.32512 16.6395 4.52659 16.6347 4.72754C16.628 4.87766 16.5675 5.01917 16.4659 5.12252C16.3643 5.22586 16.2295 5.28304 16.0896 5.28209C15.9497 5.28115 15.8155 5.22217 15.7152 5.11747C15.6148 5.01277 15.556 4.87045 15.551 4.72026C15.5447 4.39227 15.551 4.06325 15.551 3.73943H10.8306V4.12364C10.8306 4.3246 10.8354 4.52607 10.8306 4.72754C10.8237 4.87767 10.763 5.01913 10.6613 5.12236C10.5596 5.22558 10.4247 5.28258 10.2848 5.28144C10.1448 5.2803 10.0108 5.2211 9.91051 5.11623C9.81027 5.01135 9.75165 4.86892 9.74689 4.71869C9.74108 4.39019 9.74689 4.06169 9.74689 3.73891H5.02595V4.16321C5.02595 4.3449 5.02935 4.52763 5.02595 4.7088C5.02711 4.86331 4.97108 5.01198 4.8702 5.12211C4.76931 5.23224 4.63183 5.2948 4.488 5.29605C4.34417 5.29729 4.20577 5.2371 4.10324 5.12873C4.00072 5.02036 3.94247 4.87268 3.94132 4.71817C3.9355 4.38967 3.94132 4.06117 3.94132 3.7233C3.51047 3.7233 3.10627 3.7233 2.70159 3.7233C2.31824 3.7233 2.09142 3.9659 2.08997 4.37509C2.08997 4.92069 2.08997 5.46837 2.08997 6.01136V6.5986L18.4836 6.60068Z" fill="#FFC00B"/>
                                                <path d="M5.04633 10.9948L5.04633 10.9948L5.04709 10.9948C5.17585 10.998 5.30728 10.9969 5.4372 10.9959C5.50141 10.9954 5.56524 10.9949 5.62821 10.9949C5.69489 10.9949 5.76238 10.9954 5.83033 10.9959C5.96799 10.9969 6.10752 10.998 6.24599 10.9948L6.24599 10.9948L6.24692 10.9948C6.4162 10.9894 6.57523 10.9133 6.69087 10.7853C6.8063 10.6576 6.86982 10.4879 6.86982 10.3126C6.86982 10.1372 6.8063 9.96755 6.69087 9.83979C6.57523 9.7118 6.4162 9.63574 6.24692 9.63031L6.24692 9.63029L6.24519 9.63027C5.84583 9.62435 5.44678 9.62435 5.04806 9.63027L5.04806 9.63025L5.04633 9.63031C4.87706 9.63574 4.71803 9.7118 4.60239 9.83979C4.48695 9.96755 4.42344 10.1372 4.42344 10.3126C4.42344 10.4879 4.48695 10.6576 4.60239 10.7853C4.71803 10.9133 4.87706 10.9894 5.04633 10.9948Z" fill="#FFC00B" stroke="#FFC00B" stroke-width="0.2"/>
                                                <path d="M9.45632 10.9474C9.53636 10.9807 9.62204 10.9968 9.70828 10.9944C9.83564 10.9961 9.96501 10.9955 10.0938 10.9949C10.1581 10.9946 10.2224 10.9943 10.2861 10.9943C10.3486 10.9943 10.4118 10.9946 10.4756 10.9949C10.604 10.9955 10.7345 10.9961 10.8644 10.9944C10.9507 10.9968 11.0364 10.9807 11.1164 10.9474C11.1972 10.9137 11.2703 10.8632 11.3317 10.7991C11.3931 10.7352 11.4415 10.659 11.4745 10.5753C11.5074 10.4916 11.5243 10.402 11.5243 10.3115C11.5243 10.2211 11.5074 10.1314 11.4745 10.0477C11.4415 9.96405 11.3931 9.88787 11.3317 9.82388C11.2703 9.75987 11.1972 9.70933 11.1164 9.67566C11.0363 9.64225 10.9506 9.62622 10.8643 9.62868C10.4808 9.62488 10.0955 9.62488 9.70848 9.62868C9.62217 9.62622 9.53642 9.64225 9.45632 9.67566C9.37556 9.70933 9.30242 9.75987 9.24103 9.82388C9.17965 9.88787 9.13122 9.96405 9.09827 10.0477C9.06533 10.1314 9.04844 10.2211 9.04844 10.3115C9.04844 10.402 9.06533 10.4916 9.09827 10.5753C9.13122 10.659 9.17965 10.7352 9.24103 10.7991C9.30242 10.8632 9.37557 10.9137 9.45632 10.9474Z" fill="#FFC00B" stroke="#FFC00B" stroke-width="0.2"/>
                                                <path d="M14.3315 10.9948L14.3315 10.9948L14.3324 10.9948C14.4666 10.998 14.602 10.9969 14.7356 10.9959C14.8016 10.9954 14.8671 10.9949 14.9318 10.9949C14.9961 10.9949 15.0614 10.9954 15.1272 10.9959C15.2609 10.9969 15.3967 10.998 15.5307 10.9948L15.5316 10.9948C15.7009 10.9894 15.8599 10.9133 15.9755 10.7853C16.091 10.6576 16.1545 10.4879 16.1545 10.3126C16.1545 10.1372 16.091 9.96755 15.9755 9.83979C15.8599 9.7118 15.7009 9.63574 15.5316 9.63031L15.5316 9.63029L15.5299 9.63027C15.1308 9.62435 14.7319 9.62435 14.3332 9.63027L14.3332 9.63025L14.3315 9.63031C14.1622 9.63574 14.0032 9.7118 13.8875 9.83979C13.7721 9.96755 13.7086 10.1372 13.7086 10.3126C13.7086 10.4879 13.7721 10.6576 13.8875 10.7853C14.0032 10.9133 14.1622 10.9894 14.3315 10.9948ZM13.9617 9.90683C14.06 9.79812 14.1937 9.73478 14.3347 9.73026C14.7324 9.72436 15.1303 9.72436 15.5284 9.73026C15.6693 9.73478 15.8031 9.79812 15.9013 9.90683C15.9996 10.0155 16.0545 10.1611 16.0545 10.3126C16.0545 10.464 15.9996 10.6096 15.9013 10.7183C15.8031 10.827 15.6693 10.8903 15.5284 10.8949C15.3958 10.898 15.2629 10.8969 15.1302 10.8959C15.064 10.8954 14.9978 10.8949 14.9318 10.8949C14.8654 10.8949 14.799 10.8954 14.7327 10.8959C14.6 10.8969 14.4675 10.898 14.3347 10.8949C14.1937 10.8903 14.06 10.827 13.9617 10.7183C13.8635 10.6096 13.8086 10.464 13.8086 10.3126C13.8086 10.1611 13.8635 10.0155 13.9617 9.90683Z" fill="#FFC00B" stroke="#FFC00B" stroke-width="0.2"/>
                                                <path d="M5.05463 13.4872L5.05463 13.4872L5.05593 13.4873C5.18468 13.4897 5.31557 13.4889 5.44533 13.4881C5.50962 13.4877 5.57364 13.4873 5.63699 13.4873H5.63815H5.63932H5.64048H5.64165H5.64281H5.64397H5.64514H5.6463H5.64747H5.64863H5.6498H5.65096H5.65213H5.65329H5.65445H5.65562H5.65678H5.65795H5.65911H5.66028H5.66144H5.66261H5.66377H5.66493H5.6661H5.66726H5.66843H5.66959H5.67076H5.67192H5.67309H5.67425H5.67542H5.67658H5.67774H5.67891H5.68007H5.68124H5.6824H5.68357H5.68473H5.6859H5.68706H5.68823H5.68939H5.69056H5.69172H5.69289H5.69405H5.69522H5.69638H5.69755H5.69871H5.69987H5.70104H5.7022H5.70337H5.70453H5.7057H5.70686H5.70803H5.70919H5.71036H5.71152H5.71269H5.71385H5.71502H5.71618H5.71735H5.71851H5.71968H5.72084H5.72201H5.72317H5.72434H5.7255H5.72667H5.72783H5.729H5.73016H5.73133H5.73249H5.73366H5.73482H5.73599H5.73715H5.73832H5.73948H5.74065H5.74181H5.74298H5.74414H5.74531H5.74647H5.74764H5.7488H5.74997H5.75113H5.7523H5.75347H5.75463H5.7558H5.75696H5.75813H5.75929H5.76046H5.76162H5.76279H5.76395H5.76512H5.76628H5.76745H5.76861H5.76978H5.77094H5.77211H5.77327H5.77444H5.7756H5.77677H5.77794H5.7791H5.78027H5.78143H5.7826H5.78376H5.78493H5.78609H5.78726H5.78842H5.78959H5.79075H5.79192H5.79308H5.79425H5.79542H5.79658H5.79775H5.79891H5.80008H5.80124H5.80241H5.80357H5.80474H5.8059H5.80707H5.80824H5.8094H5.81057H5.81173H5.8129H5.81406H5.81523H5.81639H5.81756H5.81872H5.81989H5.82106H5.82222H5.82339H5.82455H5.82572H5.82688H5.82805H5.82921H5.83038H5.83155H5.83271H5.83388H5.83504H5.83621H5.83737H5.83854H5.8397H5.84087H5.84204H5.8432H5.84437H5.84553H5.8467H5.84786H5.84903H5.85019H5.85136H5.85253H5.85369H5.85486H5.85602H5.85719H5.85835H5.85952H5.86068H5.86185H5.86302H5.86418H5.86535H5.86651H5.86768H5.86884H5.87001H5.87118H5.87234H5.87351H5.87467H5.87584H5.877H5.87817H5.87933H5.8805H5.88167H5.88283H5.884H5.88516H5.88633H5.88749H5.88866H5.88983H5.89099H5.89216H5.89332H5.89449H5.89565H5.89682H5.89799H5.89915H5.90032H5.90148H5.90265H5.90381H5.90498H5.90615H5.90731H5.90848H5.90964H5.91081H5.91197H5.91314H5.91431H5.91547H5.91664H5.9178H5.91897H5.92013H5.9213H5.92247H5.92363H5.9248H5.92596H5.92713H5.92829H5.92946H5.93063H5.93179H5.93296H5.93412H5.93529H5.93645H5.93762H5.93879H5.93995H5.94112H5.94228H5.94345H5.94461H5.94578H5.94694H5.94811H5.94928H5.95044H5.95161H5.95277H5.95394H5.9551H5.95627H5.95744H5.9586H5.95977H5.96093H5.9621H5.96326H5.96443H5.9656H5.96676H5.96793H5.96909H5.97026H5.97142H5.97259H5.97376H5.97492H5.97609H5.97725H5.97842H5.97958H5.98075H5.98192H5.98308H5.98425H5.98541H5.98658H5.98774H5.98891H5.99008H5.99124H5.99241H5.99357H5.99474H5.9959H5.99707H5.99823H5.9994H6.00057H6.00173H6.0029H6.00406H6.00523H6.00639H6.00756H6.00873H6.00989H6.01106H6.01222H6.01339H6.01455H6.01572H6.01688H6.01805H6.01922H6.02038H6.02155H6.02271H6.02388H6.02504H6.02621H6.02738H6.02854H6.02971H6.03087H6.03204H6.0332H6.03437H6.03553H6.0367H6.03787H6.03903H6.0402H6.04136H6.04253H6.04369H6.04486H6.04602H6.04719H6.04835H6.04952H6.05069H6.05185H6.05302H6.05418H6.05535H6.05651H6.05768H6.05884H6.06001H6.06118H6.06234H6.06351H6.06467H6.06584H6.067H6.06817H6.06933H6.0705H6.07166H6.07283H6.07399H6.07516H6.07633H6.07749H6.07866H6.07982H6.08099H6.08215H6.08332H6.08448H6.08565H6.08681H6.08798H6.08914H6.09031H6.09148H6.09264H6.09381H6.09497H6.09614H6.0973H6.09847H6.09963H6.1008H6.10196H6.10313H6.10429H6.10546H6.10662H6.10779H6.10895H6.11012H6.11128H6.11245H6.11362H6.11478H6.11595H6.11711H6.11828H6.11944H6.12061H6.12177H6.12294H6.1241H6.12527H6.12643H6.1276H6.12876H6.12993H6.13109H6.13226H6.13342H6.13459H6.13575H6.13692H6.13808H6.13925H6.14041H6.14158H6.14274H6.14391H6.14507H6.14624H6.1474H6.14857H6.14973H6.1509H6.15206H6.15323H6.15439H6.15556H6.15672H6.15789H6.15905H6.16022H6.16138H6.16255H6.16371H6.16488H6.16604H6.16721H6.16837H6.16954H6.1707H6.17187H6.17303H6.1742H6.17536H6.17652H6.17769H6.17885H6.18002H6.18118H6.18235H6.18351H6.18468H6.18584H6.18701H6.18817H6.18934H6.1905H6.19167H6.19283H6.194H6.19516H6.19632H6.19749H6.19865H6.19982H6.20098H6.20215H6.20331H6.20448H6.20564H6.20681H6.20797H6.20914H6.2103H6.21146H6.21263H6.21379H6.21496H6.21612H6.21729H6.21845H6.21962H6.22078H6.22194H6.22311H6.22427H6.22544H6.2266H6.22777H6.22893H6.23009H6.23126H6.23242H6.23359V13.4873L6.2368 13.4872C6.4062 13.4818 6.56536 13.4057 6.68108 13.2776C6.79661 13.1497 6.86017 12.9799 6.86017 12.8045C6.86017 12.629 6.79661 12.4592 6.68108 12.3313C6.56536 12.2032 6.4062 12.1271 6.2368 12.1217L6.2368 12.1217L6.23474 12.1217C5.84238 12.1171 5.44969 12.1171 5.05669 12.1217L5.05669 12.1216L5.05463 12.1217C4.88523 12.1271 4.72607 12.2032 4.61034 12.3313C4.49482 12.4592 4.43125 12.629 4.43125 12.8045C4.43125 12.9799 4.49482 13.1497 4.61034 13.2776C4.72607 13.4057 4.88523 13.4818 5.05463 13.4872Z" fill="#FFC00B" stroke="#FFC00B" stroke-width="0.2"/>
                                                <path d="M9.68696 13.487L9.68696 13.487L9.68808 13.487C9.82225 13.4898 9.95759 13.4889 10.0911 13.4879C10.1571 13.4875 10.2226 13.487 10.2873 13.487C10.3525 13.487 10.4184 13.4874 10.4845 13.4877C10.6179 13.4884 10.7525 13.4891 10.8859 13.487L10.8859 13.487L10.8875 13.487C11.0568 13.4815 11.2159 13.4055 11.3315 13.2775C11.4469 13.1497 11.5104 12.9801 11.5104 12.8047C11.5104 12.6294 11.4469 12.4597 11.3315 12.332C11.2159 12.204 11.0568 12.1279 10.8875 12.1225L10.8875 12.1225L10.8857 12.1224C10.4864 12.1169 10.0874 12.1169 9.68877 12.1224L9.68877 12.1224L9.68696 12.1225C9.51769 12.1279 9.35865 12.204 9.24301 12.332C9.12758 12.4597 9.06406 12.6294 9.06406 12.8047C9.06406 12.9801 9.12758 13.1497 9.24301 13.2775C9.35865 13.4055 9.51769 13.4815 9.68696 13.487Z" fill="#FFC00B" stroke="#FFC00B" stroke-width="0.2"/>
                                                <path d="M15.529 12.1201L15.529 12.1201L15.5284 12.1201C15.3946 12.1173 15.2594 12.1183 15.1259 12.1192C15.06 12.1197 14.9945 12.1201 14.9298 12.1201C14.8648 12.1201 14.7992 12.1197 14.7332 12.1192C14.5995 12.1183 14.4644 12.1173 14.3306 12.1201L14.3306 12.1201L14.3291 12.1202C14.1598 12.1263 14.001 12.203 13.8858 12.3315C13.7708 12.4597 13.7079 12.6297 13.7086 12.8051C13.7093 12.9804 13.7734 13.1499 13.8894 13.2772C14.0056 13.4047 14.165 13.48 14.3343 13.4847L14.3343 13.4847L14.3355 13.4847C14.7349 13.491 15.134 13.491 15.5328 13.4847L15.5328 13.4847L15.5349 13.4846C15.7041 13.4785 15.8629 13.4017 15.978 13.2731C16.093 13.1448 16.1558 12.9748 16.1551 12.7995C16.1543 12.6241 16.0901 12.4547 15.974 12.3274C15.8578 12.2 15.6984 12.1247 15.529 12.1201Z" fill="#FFC00B" stroke="#FFC00B" stroke-width="0.2"/>
                                                <path d="M5.05557 15.9834C4.88321 15.9838 4.71925 15.9108 4.59919 15.7828C4.4791 15.6549 4.41239 15.4823 4.41172 15.3035C4.41105 15.1247 4.47646 14.9517 4.59556 14.8227C4.71476 14.6936 4.87838 14.6191 5.05096 14.6183M5.05557 15.9834L5.05143 14.6183C5.05127 14.6183 5.05112 14.6183 5.05096 14.6183M5.05557 15.9834C5.18349 15.9855 5.3136 15.9848 5.44286 15.9841C5.5072 15.9837 5.57134 15.9834 5.63489 15.9834C5.69905 15.9834 5.76432 15.9841 5.83018 15.9847C5.96378 15.9861 6.09979 15.9875 6.23385 15.9834C6.23427 15.9834 6.23469 15.9833 6.23512 15.9833L6.23197 15.8834L5.05557 15.9834ZM5.05096 14.6183C5.44366 14.6131 5.83604 14.6131 6.2281 14.6183C6.22838 14.6183 6.22866 14.6183 6.22894 14.6183L5.05096 14.6183Z" fill="#FFC00B" stroke="#FFC00B" stroke-width="0.2"/>
                                                <path d="M9.70616 15.9834C9.53353 15.9832 9.36959 15.9094 9.24985 15.7807C9.13017 15.6522 9.06406 15.4792 9.06406 15.3003C9.06406 15.1214 9.13017 14.9484 9.24985 14.8199C9.36964 14.6912 9.53365 14.6174 9.70635 14.6172C9.70652 14.6172 9.70669 14.6172 9.70687 14.6172L9.70616 15.9834ZM9.70616 15.9834C9.83401 15.9851 9.9639 15.9845 10.0932 15.984C10.1575 15.9837 10.2218 15.9834 10.2855 15.9834C10.348 15.9834 10.4112 15.9837 10.475 15.9839L9.70616 15.9834Z" fill="#FFC00B" stroke="#FFC00B" stroke-width="0.2"/>
                                                <path d="M14.3446 14.618C14.1721 14.6176 14.0081 14.6907 13.888 14.8188C13.768 14.9468 13.7014 15.1193 13.7008 15.2981C13.7002 15.4769 13.7657 15.65 13.8848 15.7789C14.004 15.9078 14.1675 15.9822 14.34 15.9831L14.3446 14.618ZM14.3446 14.618C14.3449 14.618 14.3451 14.618 14.3454 14.618L14.345 14.718L14.3438 14.618C14.3441 14.618 14.3443 14.618 14.3446 14.618ZM15.5181 15.9831C15.6905 15.9834 15.8544 15.9102 15.9744 15.7821C16.0943 15.6541 16.1609 15.4815 16.1614 15.3027C16.1619 15.1239 16.0964 14.9509 15.9772 14.822C15.8579 14.693 15.6942 14.6187 15.5216 14.618L14.7287 15.9839C14.793 15.9835 14.857 15.9831 14.9203 15.9831C14.9856 15.9831 15.0514 15.9835 15.1175 15.9838C15.2504 15.9845 15.3846 15.9852 15.5181 15.9831ZM15.5181 15.9831C15.5177 15.9831 15.5174 15.9831 15.5171 15.9831L15.5174 15.8831L15.519 15.9831C15.5187 15.9831 15.5184 15.9831 15.5181 15.9831Z" fill="#FFC00B" stroke="#FFC00B" stroke-width="0.2"/>
                                              </svg>
                                        </span>
                                        <input type="text" class="form-control" id="expiry_date" value="" aria-label="dateofbirth" aria-describedby="basic-addon1" name="expiry_date" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-0">
                                    <label for="newpassword" class="form-label">Description</label>
                                    <textarea class="form-control" rows="3" id="description" name="description" required></textarea>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="id" value="">
                        <button type="submit" class="btn btn-custom-yellow fw-400 text-uppercase font-sebibold w-100 mt-30px" id="coupon-save-btn">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end add coupon  Modal -->

    <div class="modal fade custom-modal" id="deleteCouponModal" tabindex="-1" aria-labelledby="dleteAlertModal" aria-hidden="true">
        <div class="modal-dialog custom-w-441px modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="alert-text-1 mb-40px">Are you sure you want to delete this coupon?</h4>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="button"
                            class="btn btn-outline-secondary fw-400 text-uppercase font-sebibold w-160px" data-bs-dismiss="modal">Cancel</button>
                        <button type="button"
                            class="btn btn-custom-yellow fw-400 text-uppercase font-sebibold w-160px" id="coupon-delete-btn">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection