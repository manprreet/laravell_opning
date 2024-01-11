<aside class="menu-sidebar">
    <div class="bd-navbar-toggle">
        <button class="navbar-toggler p-2" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#bdSidebar" aria-controls="bdSidebar" aria-label="Toggle docs navigation">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="bi"
                 fill="currentColor" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                      d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z">
                </path>
            </svg>

            <span class="d-none fs-6 pe-1">Browse</span>
        </button>
    </div>

    <div class="siderbarmenu-brand">
        <a href="{{ route('home') }}" class="navbar-brand sidebar-logo">
            <p class="mb-0">Gomeal<span class="text-yellow-1">.</span></p>
        </a>
    </div>

    <div class="offcanvas-lg offcanvas-start position-relative" tabindex="-1" id="bdSidebar"
         aria-labelledby="bdSidebarOffcanvasLabel">
        <div class="offcanvas-body">
            <nav class="">
                <div
                    class="menu-sidebar-content d-flex flex-column align-items-center align-items-sm-start">
                    <div class="navbar-collapse menunavbar-collapse w-100 d-block"
                         id="navbarSupportedContent">
                        <ul class="nav nav-pills side-bar-menu flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <li class="nav-item">
                                <a href="{{ route('home') }}" class="nav-link {{ activeMenu('menu') }} align-middle">
                                    <img class="svg" src="{{ asset('images/menu-menu.svg') }}" alt="" height="40" width="40">
                                    <span class="ms-1 d-sm-inline align-middle">Menu</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('orders') }}" class="nav-link {{ activeMenu('orders') }} align-middle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                         viewBox="0 0 40 40" fill="none">
                                        <path
                                            d="M23.6992 5.04796C25.47 4.76179 26.9191 5.84531 26.9265 7.49749C26.9521 13.3052 26.9326 19.1129 26.9289 24.9206C26.9289 25.0196 26.9106 25.1187 26.891 25.3107C26.1193 24.698 25.3073 24.4045 24.3681 24.6197C24.2862 24.6381 24.1773 24.5769 24.0905 24.5341C23.5512 24.2761 23.0155 24.0132 22.4175 23.7233V22.5787C23.0131 22.5787 23.583 22.6227 24.1419 22.5603C24.4207 22.5285 24.79 22.3659 24.9172 22.1457C25.1092 21.8143 24.9172 21.5013 24.5418 21.3117C24.4305 21.2555 24.3571 21.028 24.351 20.8763C24.2128 17.5121 22.5264 15.5113 19.1816 14.7825C18.9811 14.3373 19.3736 13.4874 18.4626 13.4972C17.5992 13.507 17.9416 14.2994 17.7863 14.747C17.2641 14.9036 16.7468 15.0161 16.2613 15.2105C14.0392 16.102 12.6292 18.2177 12.6035 20.6538C12.5998 20.9644 12.6757 21.2787 12.2415 21.445C12.0948 21.5013 11.9443 21.9574 12.0251 22.1066C12.1425 22.3231 12.4629 22.5481 12.705 22.5567C13.9463 22.6019 15.19 22.5787 16.4337 22.5787C16.6526 22.5787 16.8703 22.5787 17.1247 22.5787V28.5661C15.5324 27.9706 13.9744 27.7773 13.0927 29.5604C12.1571 31.4522 13.4828 32.5468 14.8231 33.5655C14.8072 33.6205 14.7913 33.6755 14.7754 33.7306C13.7812 33.6694 12.7662 33.7122 11.7988 33.519C10.7532 33.3099 10.0598 32.3046 10.0182 31.2223C9.98766 30.4287 10.0048 29.6325 10.0048 28.8388C10.0048 21.829 10.0011 14.8179 10.0072 7.80811C10.0072 5.91134 11.3365 4.75445 13.2468 5.04429C13.2468 5.40872 13.2382 5.78905 13.248 6.16938C13.2883 7.813 14.3486 8.86717 15.9947 8.8794C17.6456 8.89163 19.2966 8.89163 20.9463 8.8794C22.5924 8.86717 23.6539 7.81545 23.6967 6.17305C23.7065 5.79272 23.6979 5.41117 23.6979 5.04673L23.6992 5.04796Z"
                                            fill="#FFC00B" />
                                        <path
                                            d="M18.466 30.4073C18.466 28.7306 18.4647 27.1249 18.466 25.5204C18.466 24.421 18.4611 23.3216 18.4794 22.2222C18.4965 21.2108 18.9808 20.6397 19.7818 20.6422C20.578 20.6446 21.0696 21.2438 21.0733 22.2307C21.0781 23.4525 21.0733 24.6729 21.0733 26.0707C21.516 25.4385 21.9905 25.0961 22.6594 25.2404C23.3601 25.392 23.6341 25.9118 23.7368 26.6455C24.1734 26.0487 24.6674 25.7002 25.3657 25.9154C26.0298 26.1197 26.2842 26.6419 26.3355 27.3634C26.7428 26.7152 27.2356 26.3753 27.951 26.5746C28.4634 26.7177 28.8523 27.0466 28.8572 27.597C28.8804 30.0367 28.867 32.4765 28.867 34.9981H28.2519C25.1774 34.9981 22.103 35.0079 19.0285 34.9835C18.7179 34.981 18.3473 34.8489 18.1076 34.6521C16.974 33.7226 15.8758 32.7516 14.7678 31.7916C14.16 31.2645 14.0047 30.6898 14.3043 30.1272C14.626 29.5243 15.1983 29.3421 15.9932 29.5977C16.8003 29.8582 17.605 30.126 18.4635 30.4073H18.466Z"
                                            fill="#FFD258" />
                                        <path
                                            d="M22.9499 21.247C22.5402 21.3938 22.3164 21.2727 22.1208 20.8496C21.6744 19.881 20.8795 19.3649 19.7984 19.3576C18.6917 19.349 17.8882 19.8761 17.4198 20.8618C17.267 21.1847 17.1141 21.3192 16.7509 21.3094C15.8398 21.2837 14.9275 21.3008 14.0299 21.3008C13.63 19.8407 14.3723 17.9977 15.7334 16.9839C17.2719 15.8368 19.3362 15.7634 20.9419 16.798C22.4595 17.7751 23.2826 19.5961 22.9499 21.2495V21.247Z"
                                            fill="#FFD258" />
                                        <path
                                            d="M22.3735 5.00607C22.3735 5.51848 22.4138 6.00521 22.3637 6.48215C22.2976 7.11318 21.7864 7.57667 21.1004 7.58768C19.3528 7.61458 17.6028 7.61825 15.8552 7.58768C15.0689 7.57423 14.5883 7.03125 14.5614 6.24979C14.5479 5.84745 14.5589 5.44511 14.5589 5.0073H22.3722L22.3735 5.00607Z"
                                            fill="#FFC00B" />
                                    </svg>
                                    <span class="ms-1 d-sm-inline align-middle">Food Order</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('settings') }}" class="nav-link {{ activeMenu('settings') }} align-middle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                         viewBox="0 0 40 40" fill="none">
                                        <path
                                            d="M15.6104 31.617C15.4667 31.9927 15.3415 32.3847 15.1619 32.749C15.1014 32.8722 14.8858 33.0169 14.7647 32.9984C13.4337 32.787 12.2073 32.3026 11.1153 31.5524C11.1092 31.4929 11.102 31.4744 11.1061 31.46C11.2559 30.9797 11.612 30.444 11.5002 30.0366C11.3832 29.6148 10.8249 29.3038 10.4329 28.9765C10.3241 28.8851 10.1199 28.8944 9.9577 28.8872C9.88176 28.8841 9.80171 28.9498 9.72371 28.9847C9.07853 29.27 8.57806 29.1126 8.22228 28.5126C7.67323 27.5797 7.27504 26.5904 7.08415 25.4841C7.47003 25.3117 7.85591 25.17 8.20484 24.9668C8.33517 24.8909 8.42754 24.6785 8.45422 24.5153C8.48809 24.3008 8.43164 24.074 8.42856 23.8523C8.41967 23.2352 8.12239 22.8134 7.53674 22.5869C7.36432 22.5202 7.19396 22.4463 7 22.3673C7.1837 21.0085 7.63218 19.7698 8.37725 18.644C8.44293 18.5445 8.69129 18.486 8.82265 18.5219C9.21366 18.6296 9.58927 18.7949 9.79145 18.8708C10.2871 18.447 10.7141 18.1042 11.1081 17.7265C11.1923 17.6465 11.2118 17.4227 11.1666 17.2986C11.0291 16.9168 10.8454 16.5504 10.673 16.1635C11.7619 15.3138 12.9688 14.776 14.2793 14.4763C14.3984 14.4496 14.6683 14.6251 14.6991 14.7493C14.9166 15.6216 15.4164 15.8628 16.3134 15.7992C16.9456 15.754 17.2822 15.6257 17.4094 15.0079C17.4566 14.7801 17.5788 14.5687 17.6773 14.3224C19.1284 14.5256 20.4318 15.0244 21.6489 15.8505C21.5012 16.2456 21.3329 16.6192 21.2313 17.0102C21.1923 17.159 21.2651 17.3796 21.3626 17.512C21.5012 17.7009 21.7157 17.8312 21.887 17.9975C22.3058 18.4032 22.7843 18.4866 23.3228 18.2479C23.5075 18.1658 23.6953 18.0908 23.9139 17.9995C24.7924 19.1612 25.362 20.4348 25.6422 21.8808C25.3107 22.0338 24.9977 22.2093 24.6641 22.3242C24.3152 22.4443 24.1756 22.6228 24.2526 23.0026C24.309 23.2838 24.3408 23.5906 24.2906 23.8687C24.2044 24.3439 24.4024 24.5471 24.8314 24.6559C25.1249 24.7308 25.401 24.8724 25.7171 24.9966C25.5385 26.4498 25.0202 27.7429 24.2023 28.9744C23.8082 28.8256 23.4367 28.6563 23.0467 28.5547C22.8969 28.5157 22.6701 28.5844 22.5428 28.685C22.3181 28.8636 22.1744 29.1489 21.9404 29.309C21.4416 29.6517 21.4293 30.0253 21.729 30.4994C21.8634 30.7119 21.9342 30.9633 22.0441 31.2219C20.9552 32.0542 19.7596 32.6105 18.4419 32.8958C18.3238 32.9214 18.0611 32.7737 18.0375 32.669C17.8251 31.6909 17.2247 31.4108 16.3 31.6119C16.0897 31.6571 15.8618 31.6191 15.6083 31.6191L15.6104 31.617ZM12.0975 23.6655C12.0872 26.0321 13.9807 27.9522 16.3401 27.9666C18.6851 27.981 20.6247 26.0588 20.635 23.7086C20.6453 21.3492 18.7426 19.4281 16.3832 19.4137C14.0176 19.4004 12.1088 21.2938 12.0975 23.6645V23.6655Z"
                                            fill="#FFC00B" />
                                        <path
                                            d="M24.6624 16.1975C24.3094 16.3946 23.9533 16.5936 23.5756 16.8051C22.8326 16.0703 22.3431 15.2113 22.0598 14.1819C22.5781 13.8238 23.1815 13.6595 23.1466 12.7195C23.1148 11.8451 22.7023 11.5444 22.0547 11.2458C22.3277 10.199 22.8254 9.33486 23.5756 8.59081C23.9564 8.80325 24.3125 9.00235 24.6583 9.19426C24.9498 9.01056 25.2033 8.77554 25.5019 8.67907C26.0694 8.4964 26.2162 8.13002 26.13 7.59636C26.0694 7.22177 26.2141 7.0001 26.6113 7.0001C27.3246 6.99907 28.0389 7.00626 28.7521 7.01139C29.1113 7.01447 29.217 7.21562 29.177 7.54505C29.1585 7.69693 29.1349 7.86627 29.1842 8.00276C29.2478 8.18236 29.3453 8.38864 29.492 8.49127C29.8543 8.74373 30.2535 8.94282 30.6743 9.184C30.9935 9.0044 31.3465 8.8053 31.7293 8.58979C32.4775 9.31433 32.9578 10.1774 33.2533 11.214C32.7043 11.5526 32.1614 11.7743 32.1655 12.702C32.1696 13.6144 32.6714 13.8371 33.3713 14.2291C32.8592 15.124 32.3687 15.982 31.8915 16.8174C31.7006 16.764 31.6493 16.7579 31.6062 16.7353C31.2757 16.5639 30.9073 16.1996 30.6271 16.2591C30.1519 16.3597 29.7076 16.6932 29.3053 17.0011C29.1729 17.1027 29.1554 17.4362 29.1862 17.6497C29.2642 18.209 29.0128 18.4358 28.4945 18.4317C27.848 18.4255 27.2014 18.406 26.5559 18.3824C26.2542 18.3711 26.0746 18.2295 26.13 17.895C26.2336 17.2823 26.0633 16.8574 25.4065 16.6665C25.1407 16.5895 24.918 16.3638 24.6624 16.1975ZM25.5296 12.6928C25.5276 13.8658 26.4574 14.8172 27.6242 14.8367C28.8034 14.8562 29.7774 13.8905 29.7794 12.702C29.7815 11.5116 28.8127 10.5428 27.6335 10.5571C26.4697 10.5705 25.5317 11.5239 25.5286 12.6928H25.5296Z"
                                            fill="#FFD258" />
                                    </svg>
                                    <span class="ms-1 d-sm-inline align-middle">Settings</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('payments') }}" class="nav-link {{ activeMenu('payments') }} align-middle">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M22.6688 4.00003C26.9092 3.98845 30.3787 7.43589 30.3914 11.6741C30.404 15.906 26.9587 19.3756 22.7152 19.4051C18.498 19.4346 14.9968 15.9471 15 11.7226C15.0032 7.45801 18.4253 4.01161 22.6688 4.00003Z"
                                            fill="#FFC00B" />
                                        <path class="menu-hover-path-icon"
                                              d="M23.064 12.928H20.964C21.124 13.448 21.388 13.848 21.756 14.128C22.124 14.408 22.552 14.548 23.04 14.548C23.856 14.548 24.492 14.172 24.948 13.42L26.532 14.2C26.18 14.816 25.692 15.296 25.068 15.64C24.452 15.976 23.752 16.144 22.968 16.144C21.936 16.144 21.064 15.856 20.352 15.28C19.648 14.704 19.192 13.92 18.984 12.928H18.216V12.172H18.888C18.88 12.092 18.876 11.968 18.876 11.8C18.876 11.64 18.88 11.52 18.888 11.44H18.216V10.684H18.984C19.184 9.692 19.636 8.908 20.34 8.332C21.052 7.748 21.928 7.456 22.968 7.456C23.752 7.456 24.452 7.628 25.068 7.972C25.692 8.308 26.18 8.784 26.532 9.4L24.948 10.18C24.492 9.428 23.856 9.052 23.04 9.052C22.552 9.052 22.12 9.196 21.744 9.484C21.376 9.764 21.112 10.164 20.952 10.684H23.724L23.508 11.44H20.82C20.812 11.52 20.808 11.64 20.808 11.8C20.808 11.968 20.812 12.092 20.82 12.172H23.292C23.236 12.34 23.16 12.592 23.064 12.928Z"
                                              fill="white" />
                                        <path
                                            d="M20.2127 31.126C19.0252 31.126 17.8376 31.1123 16.6513 31.1335C16.2763 31.1398 16.0575 31.0373 15.8625 30.6935C14.7687 28.7572 13.6499 26.8334 12.5249 24.9145C12.3474 24.612 12.3261 24.3757 12.5186 24.0682C14.3675 21.1131 18.8727 19.673 22.0978 22.5832C22.2878 22.7544 22.6041 22.8569 22.8654 22.8644C23.8641 22.8969 24.8642 22.8732 25.8642 22.8794C26.773 22.8857 27.3155 23.3732 27.3018 24.1557C27.288 24.9158 26.7643 25.367 25.873 25.3695C24.4154 25.3745 22.9566 25.3683 21.499 25.372C20.769 25.3745 20.3527 25.7221 20.3565 26.3121C20.3602 26.8946 20.784 27.2459 21.5115 27.2484C22.9066 27.2534 24.3029 27.2484 25.698 27.2496C26.4943 27.2496 27.203 27.0084 27.8481 26.5383C29.6144 25.252 31.387 23.9745 33.1646 22.7032C33.4133 22.5244 33.6896 22.3457 33.9796 22.2706C34.5796 22.1169 35.1584 22.4369 35.4209 22.9932C35.6809 23.5457 35.5697 24.157 35.0459 24.562C34.1071 25.287 33.1396 25.9733 32.1783 26.6683C30.847 27.6321 29.5182 28.5997 28.1756 29.5472C26.6343 30.6348 24.9242 31.1848 23.0241 31.1298C22.0878 31.1035 21.149 31.1248 20.2115 31.1248L20.2127 31.126Z"
                                            fill="#FFD258" />
                                        <path
                                            d="M9.39683 23.8192C9.61809 24.0142 9.9306 24.1792 10.0831 24.4392C11.5682 26.9644 13.0307 29.5032 14.4871 32.0446C14.8183 32.6221 14.6883 33.0521 14.0933 33.4021C12.7132 34.2122 11.3282 35.0135 9.93686 35.8023C9.31308 36.156 8.90181 36.041 8.53304 35.406C7.08173 32.9084 5.64041 30.4058 4.20285 27.9006C3.85533 27.2956 3.95158 26.8506 4.51286 26.5193C5.92667 25.6855 7.35174 24.8705 8.7768 24.0555C8.93556 23.9655 9.12057 23.923 9.39683 23.8192Z"
                                            fill="#FFD258" />
                                    </svg>
                                    <span class="ms-1 d-sm-inline align-middle">My Finance</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('coupons.index') }}" class="nav-link {{ activeMenu('coupons') }} align-middle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                         viewBox="0 0 40 40" fill="none">
                                        <path
                                            d="M15.7412 15.6936C15.7361 16.1708 15.4203 16.4886 15 16.4876L15.0335 18.0065C15.4437 18.0217 15.7239 18.3141 15.7422 18.772C15.7564 19.1091 15.7452 19.4472 15.7452 19.7853H15.7442C15.7432 20.1061 15.7574 20.4279 15.7401 20.7478C15.7168 21.1782 15.4812 21.4361 15.0467 21.4737L15.0396 22.9956C15.4721 23.0169 15.7432 23.3428 15.7462 23.8759C15.7523 24.9084 15.7483 25.94 15.7483 26.9725V27.4487C15.8995 27.4649 15.9666 27.4791 16.0336 27.4791C21.3974 27.4802 26.7621 27.4822 32.1259 27.4781C32.725 27.4781 32.992 27.205 32.996 26.607C33.0042 25.3714 33.0031 24.1368 32.996 22.9012C32.992 22.2717 32.7595 22.0392 32.1087 21.9752C30.872 21.8544 30.0009 20.9183 30.0121 19.7223C30.0233 18.5436 30.8863 17.6257 32.0955 17.5069C32.791 17.4389 32.996 17.2125 32.9981 16.4927C33.0011 15.3586 32.9991 14.2255 32.9981 13.0914C32.9971 12.2031 32.791 12 31.8843 12H16.3503H15.7462V12.597C15.7452 13.6295 15.7533 14.6611 15.7412 15.6936Z"
                                            fill="#FFC00B" />
                                        <path
                                            d="M14.2469 15.2327V12.0609C14.1383 12.0315 14.0906 12.0071 14.0439 12.0071C11.9625 12.0041 9.88117 11.997 7.79982 12.0071C7.27492 12.0091 7.00993 12.3015 7.00586 12.8498C6.99673 14.0854 6.99977 15.32 7.00485 16.5556C7.00688 17.2024 7.23227 17.441 7.86988 17.5049C9.12579 17.6308 9.98778 18.5365 9.99184 19.7345C9.9959 20.9315 9.12884 21.8544 7.88308 21.9773C7.23938 22.0402 7.00993 22.2768 7.00688 22.9134C7.00079 24.0982 7.00383 25.2821 7.00586 26.4669C7.0079 27.2527 7.23938 27.4812 8.04248 27.4822C9.93803 27.4842 11.8326 27.4822 13.7281 27.4822H14.25C14.25 26.2212 14.2408 25.0384 14.254 23.8566C14.2601 23.3053 14.583 22.9733 15.0378 22.9956L15.0449 21.4737C14.6246 21.5102 14.2896 21.2412 14.2672 20.7863C14.2337 20.0959 14.2347 19.4015 14.2652 18.7111C14.2855 18.2532 14.6114 17.9912 15.0317 18.0065L14.9982 16.4876C14.5921 16.4866 14.3007 16.2003 14.255 15.7403C14.2378 15.5718 14.2469 15.4022 14.2469 15.2327Z"
                                            fill="#FFD258" />
                                        <path class="menu-hover-path-icon"
                                              d="M28.5232 22.9384C28.5221 24.1283 27.6704 24.9917 26.4955 24.9938C25.312 24.9959 24.4645 24.1474 24.4571 22.9522C24.4496 21.7379 25.3258 20.8416 26.5072 20.8554C27.6662 20.8692 28.5243 21.756 28.5232 22.9384ZM26.4763 22.2345C26.0946 22.2409 25.766 22.5716 25.7713 22.9427C25.7777 23.3287 26.0903 23.6189 26.4955 23.6147C26.8995 23.6104 27.2015 23.3106 27.1962 22.9203C27.1909 22.5386 26.8634 22.2281 26.4753 22.2345H26.4763Z"
                                              fill="white" />
                                        <path class="menu-hover-path-icon"
                                              d="M21.048 15.4257C22.2134 15.4257 23.0885 16.3051 23.0917 17.4768C23.0949 18.6433 22.2209 19.5461 21.0693 19.5631C19.9028 19.5811 18.9905 18.6582 19.0001 17.4705C19.0096 16.287 19.8731 15.4246 21.047 15.4246L21.048 15.4257ZM21.0587 18.1903C21.4606 18.1829 21.7286 17.8947 21.7222 17.4737C21.7158 17.0547 21.4415 16.7878 21.0257 16.7963C20.627 16.8048 20.3335 17.11 20.343 17.5056C20.3526 17.8947 20.6684 18.1967 21.0587 18.1903Z"
                                              fill="white" />
                                        <rect x="19" y="23.9474" width="12.6535" height="1.48865"
                                              rx="0.744323" transform="rotate(-45 19 23.9474)"
                                              fill="white" />
                                    </svg>
                                    <span class="ms-1 d-sm-inline align-middle">Coupons</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('chat') }}" class="nav-link {{ activeMenu('chat') }} align-middle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                         viewBox="0 0 40 40" fill="none">
                                        <path
                                            d="M16.8138 7.00393C19.6223 7.00393 22.4307 7.00393 25.2403 7.00393C26.1912 7.00393 26.4551 7.26083 26.4551 8.20473C26.4586 11.7106 26.4644 15.2165 26.4528 18.7225C26.4458 20.8904 25.0497 22.2842 22.8841 22.2911C19.5723 22.3016 16.2594 22.3039 12.9476 22.2865C12.1571 22.2818 11.4794 22.4922 10.8412 22.963C9.43934 23.9964 8.00722 24.9903 6.59137 26.0074C6.24381 26.2574 5.8974 26.4399 5.46962 26.2085C5.04882 25.9784 5 25.5925 5 25.1635C5.00465 20.2824 4.99768 15.4014 5.00581 10.5203C5.0093 8.43024 6.41933 7.01556 8.50474 7.00626C11.2748 6.99463 14.0449 7.00277 16.815 7.00277L16.8138 7.00393ZM16.3291 11.7583C14.7017 11.7583 13.0743 11.7629 11.4469 11.7548C11.0272 11.7525 10.6739 11.8525 10.4867 12.2616C10.1973 12.8963 10.6587 13.4927 11.4666 13.495C14.6831 13.5031 17.8984 13.5008 21.1148 13.4961C21.8088 13.4961 22.1971 13.1788 22.2099 12.6406C22.2238 12.0849 21.8228 11.7618 21.0951 11.7595C19.506 11.756 17.9182 11.7595 16.3291 11.7595V11.7583ZM16.2745 17.567C17.8821 17.567 19.4909 17.5716 21.0986 17.5647C21.8204 17.5623 22.2227 17.2264 22.2099 16.6661C22.1971 16.1314 21.81 15.8291 21.1114 15.828C18.69 15.8245 16.2675 15.8268 13.8461 15.8268C12.9941 15.8268 12.1408 15.8152 11.2888 15.8338C10.7668 15.8454 10.4286 16.1837 10.41 16.6522C10.3914 17.1136 10.718 17.4845 11.219 17.5542C11.3713 17.5751 11.5282 17.5658 11.6828 17.5658C13.2138 17.5658 14.7435 17.5658 16.2745 17.5658V17.567Z"
                                            fill="#FFC00B" />
                                        <path
                                            d="M28.1941 13.7879C29.4681 13.7879 30.6736 13.6984 31.8593 13.81C33.5076 13.9657 34.7468 15.4013 34.7537 17.0694C34.7723 22.0656 34.77 27.0606 34.7421 32.0567C34.7409 32.3648 34.5143 32.81 34.262 32.9378C34.0109 33.0657 33.525 32.9832 33.267 32.8088C31.7616 31.7882 30.2853 30.7234 28.8148 29.6528C28.258 29.2471 27.664 29.0623 26.977 29.0658C23.685 29.0786 20.3942 29.0727 17.1021 29.0704C14.6761 29.0704 13.3172 27.7185 13.3091 25.3041C13.3079 24.9182 13.3091 24.5323 13.3091 24.0685C13.5648 24.0568 13.7857 24.0371 14.0077 24.0371C16.9313 24.0347 19.856 24.0406 22.7795 24.0347C26.0575 24.0278 28.1825 21.8959 28.1941 18.6108C28.1999 17.0241 28.1941 15.4374 28.1941 13.7902V13.7879Z"
                                            fill="#FFD258" />
                                    </svg>
                                    <span class="ms-1 d-sm-inline align-middle">User Chat</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
        <div class="offcanvas-footer">
            <div class="sidebar-bottom">
                <div class="dropdown dropdown-center">
                  <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    @if(App::isLocale('en'))
                      <img src="{{ asset('images/english-flag.svg') }}" class="img-fluid" alt="country-flag" width="28" height="28" />
                      <span class="">English</span>
                    @else
                      <img src="{{ asset('images/dutch-flag.svg') }}" class="img-fluid" alt="country-flag" width="28" height="28" />
                      <span class="">Dutch</span>
                    @endif
                  </button>
                  <ul class="multi-language-div dropdown-menu">
                      <li>
                        <a class="dropdown-item {{ (App::isLocale('en')) ? 'active': '' }}" href="{{ route('app.setLocal', 'en') }}">
                          <img src="{{ asset('images/english-flag.svg') }}" class="img-fluid" width="28" height="28" alt="country-flag" />English
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item {{ (App::isLocale('nl')) ? 'active': '' }}" href="{{ route('app.setLocal', 'nl') }}">
                          <img src="{{ asset('images/dutch-flag.svg') }}" class="img-fluid" width="28" height="28" alt="country-flag" />Dutch
                        </a>
                      </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</aside>
