// <!-- start Sign In Modal -->
document.write(`
<div class="modal fade custom-modal" id="signInModal" tabindex="-1" aria-labelledby="signInModal"
    aria-hidden="true">
    <div class="modal-dialog custom-w-441px modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0 justify-content-center">
                <h1 class="logo-text text-dark-1"> <a href="javascript:void(0);">
                        Gomeal<span class="text-yellow-1">.</span>
                    </a></h1>
            </div>
            <div class="modal-body signin-form">
                <form>
                    <div class="form-group prev-input-group custom-icon-input-group">
                        <span class="input-group-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="12" viewBox="0 0 18 12"
                                fill="none">
                                <path
                                    d="M1.00171 1.4636C1.08065 1.18582 1.18049 0.919994 1.38573 0.706647C1.67418 0.40796 2.02151 0.250083 2.43711 0.250083C6.92992 0.250083 11.4226 0.250083 15.9151 0.250083C16.1045 0.248033 16.2924 0.283785 16.4679 0.355249C16.6433 0.426712 16.8027 0.53245 16.9368 0.666274C17.0708 0.800098 17.1769 0.959319 17.2486 1.13462C17.3204 1.30992 17.3565 1.49777 17.3548 1.68719C17.3565 4.56226 17.3565 7.43733 17.3548 10.3124C17.3564 10.5018 17.3202 10.6896 17.2484 10.8649C17.1766 11.0402 17.0706 11.1994 16.9365 11.3332C16.8025 11.467 16.6431 11.5728 16.4678 11.6444C16.2924 11.7159 16.1045 11.7518 15.9151 11.7499C11.428 11.7499 6.94073 11.7499 2.45332 11.7499C1.75141 11.7499 1.19116 11.2976 1.0303 10.6089C1.0221 10.5842 1.01197 10.56 1 10.5368L1.00171 1.4636ZM2.68032 1.21228C2.72299 1.25836 2.74049 1.28311 2.76225 1.30487C4.76885 3.31887 6.77574 5.33244 8.78291 7.34559C9.01717 7.58027 9.35084 7.57344 9.59363 7.33151C11.5897 5.32946 13.5852 3.32698 15.5802 1.32407C15.6105 1.29421 15.6352 1.25879 15.6736 1.21228H2.68032ZM2.69099 10.783H15.6736C14.2958 9.41975 12.9338 8.0714 11.5718 6.72304C11.1562 7.13693 10.7218 7.5679 10.2891 8.00056C9.64611 8.64274 8.71037 8.64274 8.07033 7.99843C7.67578 7.60303 7.28123 7.20734 6.88668 6.81137C6.84657 6.77126 6.8039 6.73371 6.79494 6.72603L2.69099 10.783ZM1.96305 10.0385L6.05079 5.99979L1.96305 1.95046V10.0385ZM16.3905 10.0641V1.96284L12.2942 6.01174L16.3905 10.0641Z"
                                    fill="#FFC00B" stroke="#FFC00B" stroke-width="0.5" />
                            </svg>
                        </span>
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group prev-input-group custom-icon-input-group password-input-icon mb-3">
                        <span class="input-group-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="20" viewBox="0 0 15 20"
                                fill="none">
                                <path
                                    d="M2.6793 8.30389C2.6793 7.58531 2.66391 6.88221 2.68526 6.18059C2.69244 5.75855 2.73848 5.33808 2.82278 4.92457C3.26268 2.91555 4.86287 1.41052 6.88656 1.07169C9.3854 0.652519 11.7596 2.10615 12.5302 4.52536C12.6912 5.04875 12.7716 5.59383 12.7685 6.14167C12.772 6.79039 12.7685 7.43611 12.7685 8.08333V8.2999C12.8822 8.31387 12.986 8.31936 13.0862 8.34032C13.9089 8.50999 14.4397 9.15771 14.4442 10.0125C14.4501 11.2136 14.4442 12.4148 14.4442 13.6164C14.4442 14.8425 14.4481 16.0685 14.4442 17.2946C14.4407 18.093 13.972 18.7268 13.2332 18.9334C13.0845 18.975 12.9308 18.9965 12.7764 18.9973C9.40758 19.0009 6.03889 19.0009 2.67036 18.9973C1.72008 18.9973 1.00662 18.2672 1.00265 17.2926C0.99669 15.7372 1.00265 14.1813 1.00265 12.6254C1.00265 11.7476 0.99669 10.8698 1.00265 9.99256C1.0101 9.15222 1.54581 8.50649 2.36005 8.33833C2.45737 8.32186 2.55617 8.31787 2.6793 8.30389ZM7.72216 17.875C9.35065 17.875 10.9791 17.875 12.6076 17.875C12.6941 17.8763 12.7806 17.8707 12.8663 17.8585C13.1314 17.8146 13.2829 17.6489 13.3062 17.3834C13.3126 17.3091 13.3141 17.2337 13.3141 17.1594C13.3141 14.8253 13.3141 12.4916 13.3141 10.1582C13.3162 10.0649 13.3117 9.9715 13.3007 9.87878C13.2918 9.78813 13.2563 9.7022 13.1986 9.63191C13.141 9.56162 13.0639 9.51015 12.977 9.48406C12.8704 9.45315 12.7597 9.43884 12.6488 9.44164C9.36703 9.43965 6.08523 9.43965 2.80342 9.44164C2.74148 9.43955 2.67947 9.44122 2.61773 9.44663C2.32828 9.48306 2.16295 9.65822 2.14061 9.95014C2.13564 10.0185 2.13465 10.0869 2.13465 10.1552C2.13465 12.4893 2.13465 14.8232 2.13465 17.1569C2.13323 17.2502 2.13754 17.3435 2.14756 17.4363C2.15933 17.5359 2.20196 17.6292 2.26941 17.7031C2.33686 17.777 2.42571 17.8277 2.5234 17.848C2.62661 17.8681 2.73158 17.8774 2.83669 17.876C4.46518 17.876 6.09367 17.8756 7.72216 17.875ZM11.6226 8.3014C11.6271 8.24202 11.6335 8.19361 11.6335 8.14521C11.6335 7.42314 11.641 6.69807 11.6281 5.97899C11.625 5.70562 11.5934 5.43332 11.5337 5.1666C11.0521 3.11365 9.15503 1.85315 7.0653 2.18748C5.22828 2.4814 3.84357 4.07825 3.81775 5.94755C3.80782 6.6821 3.81477 7.41665 3.81477 8.1512C3.81477 8.2011 3.82321 8.24701 3.82818 8.3009L11.6226 8.3014Z"
                                    fill="#FFC00B" stroke="#FFC00B" stroke-width="0.5"></path>
                                <path
                                    d="M7.16701 15.0815C7.16552 15.0566 7.16552 15.0316 7.16701 15.0067C7.20524 14.6369 7.14864 14.3784 6.75194 14.1583C6.07622 13.7831 5.86819 12.8769 6.17651 12.1339C6.47043 11.4253 7.24148 11.0106 8.00807 11.1493C8.75727 11.2845 9.29547 11.8329 9.39079 12.558C9.49357 13.3405 9.1207 14.0206 8.40476 14.341C8.3646 14.3533 8.33012 14.3796 8.30755 14.4152C8.28498 14.4508 8.27578 14.4933 8.28163 14.5351C8.28759 14.8894 8.2861 15.2442 8.28163 15.5985C8.27865 15.9698 8.0592 16.1973 7.71712 16.1943C7.37504 16.1913 7.17098 15.9658 7.16602 15.604C7.16502 15.4298 7.16701 15.2542 7.16701 15.0815ZM7.71911 13.3669C8.05424 13.3669 8.28213 13.1454 8.28312 12.8145C8.28411 12.4837 8.05126 12.2526 7.72159 12.2551C7.39192 12.2576 7.17545 12.4772 7.16751 12.804C7.15956 13.1309 7.38745 13.3649 7.71911 13.3669Z"
                                    fill="#FFC00B" stroke="#FFC00B" stroke-width="0.5"></path>
                            </svg>
                        </span>
                        <input type="password" class="form-control" placeholder="Password" id="signin_id_password">
                        <span class="input-group-icon passwordeye-icon">
                            <i class="bi bi-eye-slash" id="toggleSignInPassword"></i>
                        </span>
                    </div>
                    <div class="form-group d-flex justify-content-between align-items-center">
                        <div class="form-check">
                            <input class="form-check-input check-input-secondary me-3" type="checkbox"
                                id="remembermecheck">
                            <label class="form-check-label text-capitalize align-middle" for="remembermecheck">
                                Remember Me
                            </label>
                        </div>
                        <div class="text-end">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#resendPasswordModal"
                                class="text-capitalize lead-2 font-regularcustom">forgot
                                password</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <a href="#" class="btn btn-custom-yellow fw-400 text-uppercase font-sebibold w-100">Sign
                            In</a>
                    </div>
                    <div class="form-group">
                        <p class="mb-0 singleline-text text-center text-custom-muted">Don’t you have an account? <a
                                href="#" data-bs-toggle="modal" data-bs-target="#signUpModal"
                                class="text-yellow-2">Sign Up</a>
                            <br /> <br /> Or
                        </p>
                    </div>
                    <a class="btn btn-outline-secondary btn-default w-100 text-capitalize font-sebiregular font-18"
                        href="javascript:void(0);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19"
                            fill="none">
                            <path
                                d="M18.8148 7.63924H18.0496V7.59982H9.49977V11.3997H14.8686C14.0853 13.6117 11.9806 15.1996 9.49977 15.1996C6.35202 15.1996 3.79991 12.6475 3.79991 9.49977C3.79991 6.35202 6.35202 3.79991 9.49977 3.79991C10.9528 3.79991 12.2747 4.34804 13.2812 5.2434L15.9682 2.55639C14.2715 0.975151 12.002 0 9.49977 0C4.25352 0 0 4.25352 0 9.49977C0 14.746 4.25352 18.9995 9.49977 18.9995C14.746 18.9995 18.9995 14.746 18.9995 9.49977C18.9995 8.86281 18.934 8.24105 18.8148 7.63924Z"
                                fill="#FFC00B" />
                            <path
                                d="M1.09766 5.0781L4.21881 7.36707C5.06334 5.27617 7.10864 3.79991 9.5021 3.79991C10.9551 3.79991 12.277 4.34804 13.2835 5.2434L15.9705 2.55639C14.2738 0.975151 12.0043 0 9.5021 0C5.85324 0 2.68887 2.06003 1.09766 5.0781Z"
                                fill="#FF3D00" />
                            <path
                                d="M9.50014 18.9999C11.9539 18.9999 14.1835 18.0609 15.8693 16.5338L12.9291 14.0458C11.9753 14.7683 10.7897 15.2 9.50014 15.2C7.02925 15.2 4.93123 13.6245 4.14084 11.4258L1.04297 13.8126C2.61518 16.8891 5.80805 18.9999 9.50014 18.9999Z"
                                fill="#4CAF50" />
                            <path
                                d="M18.815 7.63708H18.0498V7.59766H9.5V11.3976H14.8688C14.4926 12.4601 13.8091 13.3764 12.9275 14.0437C12.928 14.0433 12.9285 14.0433 12.9289 14.0428L15.8691 16.5308C15.6611 16.7198 18.9998 14.2475 18.9998 9.49761C18.9998 8.86065 18.9342 8.23889 18.815 7.63708Z"
                                fill="#1976D2" />
                        </svg>
                        <span class="align-middle ms-3">Sign in with Google</span>
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>
`);
// <!-- end Sign In Modal -->

// <!-- start resend password Modal -->
document.write(`
<div class="modal fade custom-modal" id="resendPasswordModal" tabindex="-1" aria-labelledby="resendPasswordModal"
aria-hidden="true">
<div class="modal-dialog custom-w-441px modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header border-0 justify-content-center">
            <h1 class="logo-text text-dark-1"> <a href="javascript:void(0);">
                    Gomeal<span class="text-yellow-1">.</span>
                </a></h1>
        </div>
        <div class="modal-body signin-form">
            <form>
                <h3 class="authenticationform-title">Resend Password</h3>
                <div class="form-group prev-input-group custom-icon-input-group mb-0">
                    <span class="input-group-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="12" viewBox="0 0 18 12"
                            fill="none">
                            <path
                                d="M1.00171 1.4636C1.08065 1.18582 1.18049 0.919994 1.38573 0.706647C1.67418 0.40796 2.02151 0.250083 2.43711 0.250083C6.92992 0.250083 11.4226 0.250083 15.9151 0.250083C16.1045 0.248033 16.2924 0.283785 16.4679 0.355249C16.6433 0.426712 16.8027 0.53245 16.9368 0.666274C17.0708 0.800098 17.1769 0.959319 17.2486 1.13462C17.3204 1.30992 17.3565 1.49777 17.3548 1.68719C17.3565 4.56226 17.3565 7.43733 17.3548 10.3124C17.3564 10.5018 17.3202 10.6896 17.2484 10.8649C17.1766 11.0402 17.0706 11.1994 16.9365 11.3332C16.8025 11.467 16.6431 11.5728 16.4678 11.6444C16.2924 11.7159 16.1045 11.7518 15.9151 11.7499C11.428 11.7499 6.94073 11.7499 2.45332 11.7499C1.75141 11.7499 1.19116 11.2976 1.0303 10.6089C1.0221 10.5842 1.01197 10.56 1 10.5368L1.00171 1.4636ZM2.68032 1.21228C2.72299 1.25836 2.74049 1.28311 2.76225 1.30487C4.76885 3.31887 6.77574 5.33244 8.78291 7.34559C9.01717 7.58027 9.35084 7.57344 9.59363 7.33151C11.5897 5.32946 13.5852 3.32698 15.5802 1.32407C15.6105 1.29421 15.6352 1.25879 15.6736 1.21228H2.68032ZM2.69099 10.783H15.6736C14.2958 9.41975 12.9338 8.0714 11.5718 6.72304C11.1562 7.13693 10.7218 7.5679 10.2891 8.00056C9.64611 8.64274 8.71037 8.64274 8.07033 7.99843C7.67578 7.60303 7.28123 7.20734 6.88668 6.81137C6.84657 6.77126 6.8039 6.73371 6.79494 6.72603L2.69099 10.783ZM1.96305 10.0385L6.05079 5.99979L1.96305 1.95046V10.0385ZM16.3905 10.0641V1.96284L12.2942 6.01174L16.3905 10.0641Z"
                                fill="#FFC00B" stroke="#FFC00B" stroke-width="0.5" />
                        </svg>
                    </span>
                    <input type="email" class="form-control" placeholder="Email">
                </div>
                <a href="#" data-bs-toggle="modal" data-bs-target="#forgotPasswordModal"
                    class="btn btn-custom-yellow fw-400 text-uppercase font-sebibold w-100 mt-30px">Send
                    Password Resent Link</a>
            </form>
        </div>
    </div>
</div>
</div>
`);
// <!-- end resend password Modal -->

// <!-- start forgot password Modal -->
document.write(`
<div class="modal fade custom-modal" id="forgotPasswordModal" tabindex="-1" aria-labelledby="forgotPasswordModal"
aria-hidden="true">
<div class="modal-dialog custom-w-441px modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header border-0 justify-content-center">
            <h1 class="logo-text text-dark-1"> <a href="javascript:void(0);">
                    Gomeal<span class="text-yellow-1">.</span>
                </a></h1>
        </div>
        <div class="modal-body signin-form">
            <form>
                <h3 class="authenticationform-title">Forgot Password</h3>
                <div class="form-group">
                    <label for="newpassword" class="form-label">New Password</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group mb-0">
                    <label for="newpassword" class="form-label">Confirm New Password</label>
                    <input type="text" class="form-control">
                </div>
                <button type="button"
                    class="btn btn-custom-yellow fw-400 text-uppercase font-sebibold w-100 mt-30px">Save</button>
            </form>
        </div>
    </div>
</div>
</div>
`);

/* <!-- end forgot password Modal --> */



// <!-- start Sign Up Modal -->
document.write(`
<div class="modal fade custom-modal" id="signUpModal" tabindex="-1" aria-labelledby="signUpModal"
aria-hidden="true">
<div class="modal-dialog custom-w-441px modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header border-0 justify-content-center">
            <h1 class="logo-text text-dark-1"> <a href="javascript:void(0);">
                    Gomeal<span class="text-yellow-1">.</span>
                </a></h1>
        </div>
        <div class="modal-body signin-form">
            <form>
                <div class="form-group prev-input-group custom-icon-input-group">
                    <span class="input-group-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                            fill="none">
                            <path
                                d="M8.00315 9.79568C7.16425 9.79568 6.32161 9.74548 5.48737 9.80537C3.51562 9.9463 2.09163 11.4084 2.04964 13.2748C2.04124 13.6703 2.04964 14.0667 2.04404 14.463C2.03937 14.7572 1.8826 14.936 1.56346 14.9484C1.24526 14.9616 1.04836 14.7854 1.02877 14.5062C0.912124 12.8494 1.10342 11.2763 2.48262 10.0511C3.26553 9.35616 4.18096 8.87789 5.25782 8.84882C7.0728 8.80038 8.89711 8.74048 10.7056 8.85411C13.0804 9.00296 14.8432 10.8139 14.9822 13.0573C15.0102 13.51 14.9999 13.9663 14.9869 14.4208C14.9785 14.7423 14.8077 14.9572 14.44 14.9457C14.091 14.9352 13.9623 14.7211 13.9595 14.4146C13.9557 13.9451 13.9884 13.4721 13.9361 13.008C13.7206 11.0931 12.2434 9.82387 10.1923 9.77631C9.4626 9.75957 8.73194 9.77366 8.00128 9.77366C8.00128 9.78071 8.00128 9.78776 8.00128 9.79392L8.00315 9.79568Z"
                                fill="#FFC00B" stroke="#FFC00B" stroke-width="0.7" />
                            <path
                                d="M8.27599 7.10976C6.40964 7.103 4.91016 5.58921 4.92194 3.72316C4.93288 1.87992 6.44078 0.387252 8.28693 0.390631C10.1508 0.39401 11.6519 1.90864 11.6418 3.77723C11.6317 5.61625 10.1171 7.11652 8.27599 7.11061V7.10976ZM8.27095 6.17209C9.62317 6.17632 10.7129 5.09504 10.7129 3.7502C10.7129 2.42479 9.63663 1.33759 8.31386 1.32661C6.95743 1.31563 5.86522 2.38086 5.8526 3.72823C5.83913 5.07223 6.92377 6.16787 8.27179 6.17209H8.27095Z"
                                fill="#FFC00B" stroke="#FFC00B" stroke-width="0.7" />
                        </svg>
                    </span>
                    <input type="text" class="form-control" placeholder="First Name">
                </div>
                <div class="form-group prev-input-group custom-icon-input-group">
                    <span class="input-group-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                            fill="none">
                            <path
                                d="M8.00315 9.79568C7.16425 9.79568 6.32161 9.74548 5.48737 9.80537C3.51562 9.9463 2.09163 11.4084 2.04964 13.2748C2.04124 13.6703 2.04964 14.0667 2.04404 14.463C2.03937 14.7572 1.8826 14.936 1.56346 14.9484C1.24526 14.9616 1.04836 14.7854 1.02877 14.5062C0.912124 12.8494 1.10342 11.2763 2.48262 10.0511C3.26553 9.35616 4.18096 8.87789 5.25782 8.84882C7.0728 8.80038 8.89711 8.74048 10.7056 8.85411C13.0804 9.00296 14.8432 10.8139 14.9822 13.0573C15.0102 13.51 14.9999 13.9663 14.9869 14.4208C14.9785 14.7423 14.8077 14.9572 14.44 14.9457C14.091 14.9352 13.9623 14.7211 13.9595 14.4146C13.9557 13.9451 13.9884 13.4721 13.9361 13.008C13.7206 11.0931 12.2434 9.82387 10.1923 9.77631C9.4626 9.75957 8.73194 9.77366 8.00128 9.77366C8.00128 9.78071 8.00128 9.78776 8.00128 9.79392L8.00315 9.79568Z"
                                fill="#FFC00B" stroke="#FFC00B" stroke-width="0.7" />
                            <path
                                d="M8.27599 7.10976C6.40964 7.103 4.91016 5.58921 4.92194 3.72316C4.93288 1.87992 6.44078 0.387252 8.28693 0.390631C10.1508 0.39401 11.6519 1.90864 11.6418 3.77723C11.6317 5.61625 10.1171 7.11652 8.27599 7.11061V7.10976ZM8.27095 6.17209C9.62317 6.17632 10.7129 5.09504 10.7129 3.7502C10.7129 2.42479 9.63663 1.33759 8.31386 1.32661C6.95743 1.31563 5.86522 2.38086 5.8526 3.72823C5.83913 5.07223 6.92377 6.16787 8.27179 6.17209H8.27095Z"
                                fill="#FFC00B" stroke="#FFC00B" stroke-width="0.7" />
                        </svg>
                    </span>
                    <input type="text" class="form-control" placeholder="Last Name">
                </div>
                <div class="form-group prev-input-group custom-icon-input-group">
                    <span class="input-group-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="12" viewBox="0 0 18 12"
                            fill="none">
                            <path
                                d="M1.00171 1.4636C1.08065 1.18582 1.18049 0.919994 1.38573 0.706647C1.67418 0.40796 2.02151 0.250083 2.43711 0.250083C6.92992 0.250083 11.4226 0.250083 15.9151 0.250083C16.1045 0.248033 16.2924 0.283785 16.4679 0.355249C16.6433 0.426712 16.8027 0.53245 16.9368 0.666274C17.0708 0.800098 17.1769 0.959319 17.2486 1.13462C17.3204 1.30992 17.3565 1.49777 17.3548 1.68719C17.3565 4.56226 17.3565 7.43733 17.3548 10.3124C17.3564 10.5018 17.3202 10.6896 17.2484 10.8649C17.1766 11.0402 17.0706 11.1994 16.9365 11.3332C16.8025 11.467 16.6431 11.5728 16.4678 11.6444C16.2924 11.7159 16.1045 11.7518 15.9151 11.7499C11.428 11.7499 6.94073 11.7499 2.45332 11.7499C1.75141 11.7499 1.19116 11.2976 1.0303 10.6089C1.0221 10.5842 1.01197 10.56 1 10.5368L1.00171 1.4636ZM2.68032 1.21228C2.72299 1.25836 2.74049 1.28311 2.76225 1.30487C4.76885 3.31887 6.77574 5.33244 8.78291 7.34559C9.01717 7.58027 9.35084 7.57344 9.59363 7.33151C11.5897 5.32946 13.5852 3.32698 15.5802 1.32407C15.6105 1.29421 15.6352 1.25879 15.6736 1.21228H2.68032ZM2.69099 10.783H15.6736C14.2958 9.41975 12.9338 8.0714 11.5718 6.72304C11.1562 7.13693 10.7218 7.5679 10.2891 8.00056C9.64611 8.64274 8.71037 8.64274 8.07033 7.99843C7.67578 7.60303 7.28123 7.20734 6.88668 6.81137C6.84657 6.77126 6.8039 6.73371 6.79494 6.72603L2.69099 10.783ZM1.96305 10.0385L6.05079 5.99979L1.96305 1.95046V10.0385ZM16.3905 10.0641V1.96284L12.2942 6.01174L16.3905 10.0641Z"
                                fill="#FFC00B" stroke="#FFC00B" stroke-width="0.5" />
                        </svg>
                    </span>
                    <input type="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group prev-input-group custom-icon-input-group password-input-icon mb-3">
                    <span class="input-group-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="20" viewBox="0 0 15 20"
                            fill="none">
                            <path
                                d="M2.6793 8.30389C2.6793 7.58531 2.66391 6.88221 2.68526 6.18059C2.69244 5.75855 2.73848 5.33808 2.82278 4.92457C3.26268 2.91555 4.86287 1.41052 6.88656 1.07169C9.3854 0.652519 11.7596 2.10615 12.5302 4.52536C12.6912 5.04875 12.7716 5.59383 12.7685 6.14167C12.772 6.79039 12.7685 7.43611 12.7685 8.08333V8.2999C12.8822 8.31387 12.986 8.31936 13.0862 8.34032C13.9089 8.50999 14.4397 9.15771 14.4442 10.0125C14.4501 11.2136 14.4442 12.4148 14.4442 13.6164C14.4442 14.8425 14.4481 16.0685 14.4442 17.2946C14.4407 18.093 13.972 18.7268 13.2332 18.9334C13.0845 18.975 12.9308 18.9965 12.7764 18.9973C9.40758 19.0009 6.03889 19.0009 2.67036 18.9973C1.72008 18.9973 1.00662 18.2672 1.00265 17.2926C0.99669 15.7372 1.00265 14.1813 1.00265 12.6254C1.00265 11.7476 0.99669 10.8698 1.00265 9.99256C1.0101 9.15222 1.54581 8.50649 2.36005 8.33833C2.45737 8.32186 2.55617 8.31787 2.6793 8.30389ZM7.72216 17.875C9.35065 17.875 10.9791 17.875 12.6076 17.875C12.6941 17.8763 12.7806 17.8707 12.8663 17.8585C13.1314 17.8146 13.2829 17.6489 13.3062 17.3834C13.3126 17.3091 13.3141 17.2337 13.3141 17.1594C13.3141 14.8253 13.3141 12.4916 13.3141 10.1582C13.3162 10.0649 13.3117 9.9715 13.3007 9.87878C13.2918 9.78813 13.2563 9.7022 13.1986 9.63191C13.141 9.56162 13.0639 9.51015 12.977 9.48406C12.8704 9.45315 12.7597 9.43884 12.6488 9.44164C9.36703 9.43965 6.08523 9.43965 2.80342 9.44164C2.74148 9.43955 2.67947 9.44122 2.61773 9.44663C2.32828 9.48306 2.16295 9.65822 2.14061 9.95014C2.13564 10.0185 2.13465 10.0869 2.13465 10.1552C2.13465 12.4893 2.13465 14.8232 2.13465 17.1569C2.13323 17.2502 2.13754 17.3435 2.14756 17.4363C2.15933 17.5359 2.20196 17.6292 2.26941 17.7031C2.33686 17.777 2.42571 17.8277 2.5234 17.848C2.62661 17.8681 2.73158 17.8774 2.83669 17.876C4.46518 17.876 6.09367 17.8756 7.72216 17.875ZM11.6226 8.3014C11.6271 8.24202 11.6335 8.19361 11.6335 8.14521C11.6335 7.42314 11.641 6.69807 11.6281 5.97899C11.625 5.70562 11.5934 5.43332 11.5337 5.1666C11.0521 3.11365 9.15503 1.85315 7.0653 2.18748C5.22828 2.4814 3.84357 4.07825 3.81775 5.94755C3.80782 6.6821 3.81477 7.41665 3.81477 8.1512C3.81477 8.2011 3.82321 8.24701 3.82818 8.3009L11.6226 8.3014Z"
                                fill="#FFC00B" stroke="#FFC00B" stroke-width="0.5"></path>
                            <path
                                d="M7.16701 15.0815C7.16552 15.0566 7.16552 15.0316 7.16701 15.0067C7.20524 14.6369 7.14864 14.3784 6.75194 14.1583C6.07622 13.7831 5.86819 12.8769 6.17651 12.1339C6.47043 11.4253 7.24148 11.0106 8.00807 11.1493C8.75727 11.2845 9.29547 11.8329 9.39079 12.558C9.49357 13.3405 9.1207 14.0206 8.40476 14.341C8.3646 14.3533 8.33012 14.3796 8.30755 14.4152C8.28498 14.4508 8.27578 14.4933 8.28163 14.5351C8.28759 14.8894 8.2861 15.2442 8.28163 15.5985C8.27865 15.9698 8.0592 16.1973 7.71712 16.1943C7.37504 16.1913 7.17098 15.9658 7.16602 15.604C7.16502 15.4298 7.16701 15.2542 7.16701 15.0815ZM7.71911 13.3669C8.05424 13.3669 8.28213 13.1454 8.28312 12.8145C8.28411 12.4837 8.05126 12.2526 7.72159 12.2551C7.39192 12.2576 7.17545 12.4772 7.16751 12.804C7.15956 13.1309 7.38745 13.3649 7.71911 13.3669Z"
                                fill="#FFC00B" stroke="#FFC00B" stroke-width="0.5"></path>
                        </svg>
                    </span>
                    <input type="password" class="form-control" placeholder="Password" id="signup_id_password">
                    <span class="input-group-icon passwordeye-icon">
                        <i class="bi bi-eye-slash" id="toggleSignupPassword"></i>
                    </span>
                </div>
                <div class="form-group prev-input-group custom-icon-input-group password-input-icon mb-3">
                    <span class="input-group-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="20" viewBox="0 0 15 20"
                            fill="none">
                            <path
                                d="M2.6793 8.30389C2.6793 7.58531 2.66391 6.88221 2.68526 6.18059C2.69244 5.75855 2.73848 5.33808 2.82278 4.92457C3.26268 2.91555 4.86287 1.41052 6.88656 1.07169C9.3854 0.652519 11.7596 2.10615 12.5302 4.52536C12.6912 5.04875 12.7716 5.59383 12.7685 6.14167C12.772 6.79039 12.7685 7.43611 12.7685 8.08333V8.2999C12.8822 8.31387 12.986 8.31936 13.0862 8.34032C13.9089 8.50999 14.4397 9.15771 14.4442 10.0125C14.4501 11.2136 14.4442 12.4148 14.4442 13.6164C14.4442 14.8425 14.4481 16.0685 14.4442 17.2946C14.4407 18.093 13.972 18.7268 13.2332 18.9334C13.0845 18.975 12.9308 18.9965 12.7764 18.9973C9.40758 19.0009 6.03889 19.0009 2.67036 18.9973C1.72008 18.9973 1.00662 18.2672 1.00265 17.2926C0.99669 15.7372 1.00265 14.1813 1.00265 12.6254C1.00265 11.7476 0.99669 10.8698 1.00265 9.99256C1.0101 9.15222 1.54581 8.50649 2.36005 8.33833C2.45737 8.32186 2.55617 8.31787 2.6793 8.30389ZM7.72216 17.875C9.35065 17.875 10.9791 17.875 12.6076 17.875C12.6941 17.8763 12.7806 17.8707 12.8663 17.8585C13.1314 17.8146 13.2829 17.6489 13.3062 17.3834C13.3126 17.3091 13.3141 17.2337 13.3141 17.1594C13.3141 14.8253 13.3141 12.4916 13.3141 10.1582C13.3162 10.0649 13.3117 9.9715 13.3007 9.87878C13.2918 9.78813 13.2563 9.7022 13.1986 9.63191C13.141 9.56162 13.0639 9.51015 12.977 9.48406C12.8704 9.45315 12.7597 9.43884 12.6488 9.44164C9.36703 9.43965 6.08523 9.43965 2.80342 9.44164C2.74148 9.43955 2.67947 9.44122 2.61773 9.44663C2.32828 9.48306 2.16295 9.65822 2.14061 9.95014C2.13564 10.0185 2.13465 10.0869 2.13465 10.1552C2.13465 12.4893 2.13465 14.8232 2.13465 17.1569C2.13323 17.2502 2.13754 17.3435 2.14756 17.4363C2.15933 17.5359 2.20196 17.6292 2.26941 17.7031C2.33686 17.777 2.42571 17.8277 2.5234 17.848C2.62661 17.8681 2.73158 17.8774 2.83669 17.876C4.46518 17.876 6.09367 17.8756 7.72216 17.875ZM11.6226 8.3014C11.6271 8.24202 11.6335 8.19361 11.6335 8.14521C11.6335 7.42314 11.641 6.69807 11.6281 5.97899C11.625 5.70562 11.5934 5.43332 11.5337 5.1666C11.0521 3.11365 9.15503 1.85315 7.0653 2.18748C5.22828 2.4814 3.84357 4.07825 3.81775 5.94755C3.80782 6.6821 3.81477 7.41665 3.81477 8.1512C3.81477 8.2011 3.82321 8.24701 3.82818 8.3009L11.6226 8.3014Z"
                                fill="#FFC00B" stroke="#FFC00B" stroke-width="0.5"></path>
                            <path
                                d="M7.16701 15.0815C7.16552 15.0566 7.16552 15.0316 7.16701 15.0067C7.20524 14.6369 7.14864 14.3784 6.75194 14.1583C6.07622 13.7831 5.86819 12.8769 6.17651 12.1339C6.47043 11.4253 7.24148 11.0106 8.00807 11.1493C8.75727 11.2845 9.29547 11.8329 9.39079 12.558C9.49357 13.3405 9.1207 14.0206 8.40476 14.341C8.3646 14.3533 8.33012 14.3796 8.30755 14.4152C8.28498 14.4508 8.27578 14.4933 8.28163 14.5351C8.28759 14.8894 8.2861 15.2442 8.28163 15.5985C8.27865 15.9698 8.0592 16.1973 7.71712 16.1943C7.37504 16.1913 7.17098 15.9658 7.16602 15.604C7.16502 15.4298 7.16701 15.2542 7.16701 15.0815ZM7.71911 13.3669C8.05424 13.3669 8.28213 13.1454 8.28312 12.8145C8.28411 12.4837 8.05126 12.2526 7.72159 12.2551C7.39192 12.2576 7.17545 12.4772 7.16751 12.804C7.15956 13.1309 7.38745 13.3649 7.71911 13.3669Z"
                                fill="#FFC00B" stroke="#FFC00B" stroke-width="0.5"></path>
                        </svg>
                    </span>
                    <input type="password" class="form-control" placeholder="Password"
                        id="signup_confirm_id_password">
                    <span class="input-group-icon passwordeye-icon">
                        <i class="bi bi-eye-slash" id="toggleSignupConfirmPassword"></i>
                    </span>
                </div>
                <div class="form-group">
                    <a href="#" class="btn btn-custom-yellow fw-400 text-uppercase font-sebibold w-100">Sign
                        In</a>
                </div>
                <div class="form-group">
                    <p class="mb-0 singleline-text text-center text-custom-muted text-capitalize">Already have
                        an account? <a href="#" class="text-yellow-2" data-bs-toggle="modal"
                            data-bs-target="#signInModal">Sign In</a>
                        <br /> <br /> Or
                    </p>
                </div>
                <a class="btn btn-outline-secondary btn-default w-100 text-capitalize font-sebiregular font-18"
                    href="javascript:void(0);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19"
                        fill="none">
                        <path
                            d="M18.8148 7.63924H18.0496V7.59982H9.49977V11.3997H14.8686C14.0853 13.6117 11.9806 15.1996 9.49977 15.1996C6.35202 15.1996 3.79991 12.6475 3.79991 9.49977C3.79991 6.35202 6.35202 3.79991 9.49977 3.79991C10.9528 3.79991 12.2747 4.34804 13.2812 5.2434L15.9682 2.55639C14.2715 0.975151 12.002 0 9.49977 0C4.25352 0 0 4.25352 0 9.49977C0 14.746 4.25352 18.9995 9.49977 18.9995C14.746 18.9995 18.9995 14.746 18.9995 9.49977C18.9995 8.86281 18.934 8.24105 18.8148 7.63924Z"
                            fill="#FFC00B" />
                        <path
                            d="M1.09766 5.0781L4.21881 7.36707C5.06334 5.27617 7.10864 3.79991 9.5021 3.79991C10.9551 3.79991 12.277 4.34804 13.2835 5.2434L15.9705 2.55639C14.2738 0.975151 12.0043 0 9.5021 0C5.85324 0 2.68887 2.06003 1.09766 5.0781Z"
                            fill="#FF3D00" />
                        <path
                            d="M9.50014 18.9999C11.9539 18.9999 14.1835 18.0609 15.8693 16.5338L12.9291 14.0458C11.9753 14.7683 10.7897 15.2 9.50014 15.2C7.02925 15.2 4.93123 13.6245 4.14084 11.4258L1.04297 13.8126C2.61518 16.8891 5.80805 18.9999 9.50014 18.9999Z"
                            fill="#4CAF50" />
                        <path
                            d="M18.815 7.63708H18.0498V7.59766H9.5V11.3976H14.8688C14.4926 12.4601 13.8091 13.3764 12.9275 14.0437C12.928 14.0433 12.9285 14.0433 12.9289 14.0428L15.8691 16.5308C15.6611 16.7198 18.9998 14.2475 18.9998 9.49761C18.9998 8.86065 18.9342 8.23889 18.815 7.63708Z"
                            fill="#1976D2" />
                    </svg>
                    <span class="align-middle ms-3">Sign in with Google</span>
                </a>
            </form>
        </div>
    </div>
</div>
</div>
`)
{/* <!-- end Sign Up Modal --> */}

// <!-- start customisable Modal -->
document.write(`
<div class="modal fade custom-modal customisable-modal" id="customisableModal" tabindex="-1" aria-labelledby="customisableModal"
aria-hidden="true">
<div class="modal-dialog custom-w-625px modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header border-0 d-block">
            <button type="button" class="btn-close float-end" data-bs-dismiss="modal"
                aria-label="Close"></button>
            <div class="customisable-item-detail mt-3 text-center">
                <img src="images/burger-svg.svg" alt="burger" width="100" height="100">
                <h4>big mac with Cheese</h4>
                <p> Ketchup, sliced onion, slices cheese(2X),
                    Quarter Pound Bun(2X), tomato ketchup, garlic paste</p>
                <span class="food-custom-price">€20</span>
                <div class="row justify-content-center">
                    <div class="col-xl-5">
                        <div class="form-group mb-0">                                
                            <div class="input-group w-100">
                                <div class="dropdown w-100  ingredientslist-dp custom-default-dropdown">
                                    <button class="form-control bg-white dropdown-toggle d-flex align-items-center justify-content-between w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <div class="d-block">                                                
                                            grilled
                                        </div>
                                    </button>
                                    <ul class="dropdown-menu w-100">
                                        <li><a class="dropdown-item" href="javascript:void(0);">grilled 1</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">grilled 2</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">grilled 3</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">grilled 4</a></li>                                            
                                    </ul>
    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-body pt-0">            
            <div class="customisable-table custom-table">
                <table class="w-100">
                    <thead>
                        <tr>
                            <th colspan="3">Existing Ingredients</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td width="10%"><img src="images/ketchup_img.svg" class="img-fluid me-15px"
                                    alt="ingredient img 1" width="50" height="50"></td>
                            <td class="text-left">Ketchup</td>
                            <td width="5%">
                                <div class="form-check">
                                    <input class="form-check-input from-check-input-yellow" type="checkbox">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td width="10%"><img src="images/american_cheese_img.svg" class="img-fluid me-15px"
                                    alt="ingredient img 2" width="50" height="50"></td>
                            <td class="text-left">Cheese</td>
                            <td width="5%">
                                <div class="form-check">
                                    <input class="form-check-input from-check-input-yellow" type="checkbox"
                                        checked>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td width="10%"><img src="images/quarter_pounder_bun_img.svg"
                                    class="img-fluid me-15px" alt="ingredient img 3" width="50" height="50">
                            </td>
                            <td class="text-left">Quarter Pound Bun</td>
                            <td width="5%">
                                <div class="form-check">
                                    <input class="form-check-input from-check-input-yellow" type="checkbox"
                                        checked>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td width="10%"><img src="images/mustard_img.svg" class="img-fluid me-15px"
                                    alt="ingredient img 4" width="50" height="50"></td>
                            <td class="text-left">Mustard</td>
                            <td width="5%">
                                <div class="form-check">
                                    <input class="form-check-input from-check-input-yellow" type="checkbox"
                                        checked>
                                </div>
                            </td>
                        </tr>                          
                    </tbody>
                </table>
            </div>
            <div class="customisable-table custom-table mt-4">
                <table class="w-100">
                    <thead>
                        <tr>
                            <th colspan="3">Add Extra Ingredients</th>
                        </tr>
                    </thead>
                </table>
                <div class="accordion accordion-flush customisable-accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Sauce
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <table>
                                <tbody>
                                    <tr>
                                        <td width="10%"><img src="images/ketchup_img.svg" class="img-fluid me-15px"
                                                alt="ingredient img 1" width="50" height="50"></td>
                                        <td class="text-left">Ketchup 
                                            <span class="food-custom-price">€05</span>
                                        </td>
                                        <td width="7%">
                                            <div class="foodqty">
                                                <span class="minus">
                                                    <i class="fas fa-minus align-middle"></i>
                                                </span>
                                                <input type="number" class="count" name="qty" value="1">
                                                <span class="plus">
                                                    <i class="fas fa-plus align-middle"></i>
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Bun
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <table>
                            <tbody>
                                <tr>
                                    <td width="10%"><img src="images/american_cheese_img.svg" class="img-fluid me-15px"
                                        alt="ingredient img 2" width="50" height="50"></td>
                                    <td class="text-left">Ketchup
                                        <span class="food-custom-price">€20</span>
                                    </td>
                                    <td width="7%">
                                        <div class="foodqty">
                                            <span class="minus">
                                                <i class="fas fa-minus align-middle"></i>
                                            </span>
                                            <input type="number" class="count" name="qty" value="1">
                                            <span class="plus">
                                                <i class="fas fa-plus align-middle"></i>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Cheese
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <table>
                            <tbody>
                                <tr>
                                    <td width="10%"><img src="images/quarter_pounder_bun_img.svg"
                                        class="img-fluid me-15px" alt="ingredient img 3" width="50" height="50"></td>
                                    <td class="text-left">Ketchup <br />
                                        <span class="food-custom-price">€20</span>
                                    </td>
                                    <td width="7%">
                                        <div class="foodqty">
                                            <span class="minus">
                                                <i class="fas fa-minus align-middle"></i>
                                            </span>
                                            <input type="number" class="count" name="qty" value="1">
                                            <span class="plus">
                                                <i class="fas fa-plus align-middle"></i>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>                   
            </div>
         
        </div>
        <div class="modal-footer border-top-0 d-block">
            <div class="row">
                <div class="col">
                    <div class="foodqty">
                        <span class="minus">
                            <i class="fas fa-minus align-middle"></i>
                        </span>
                        <input type="number" class="count" name="qty" value="1">
                        <span class="plus">
                            <i class="fas fa-plus align-middle"></i>
                        </span>
                    </div>
                </div>
                <div class="col-xx-6 col-xl-7 col-lg-6 col-md-6 col-sm-12 col-12 text-end float-end ms-auto">
                    <a href="javascript:void(0);"
                    class="btn btn-custom-yellow fw-400 text-uppercase font-sebibold m-0 w-100">Add To cart <span>| €30</span></a>
                </div>
            </div>             
        </div>
    </div>
</div>
</div>   

`)
// <!-- end customisable  Modal -->