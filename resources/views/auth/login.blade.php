@extends('layouts.app')

@section('content')
    <div class="main" style="min-height: 100vh;">
        <div class="main-view signin-view">
            <div class="container-fluid bd-gutter bd-layout signin-layout py-3">
                <main class="w-100">
                    <div class="main-content">
                        <div class="card signin-card">
                            <div class="card-header">
                                <h1 class="logo-text text-dark-1"><a href="javascript:void(0);">
                                        Gomeal<span class="text-yellow-1">.</span>
                                    </a></h1>
                            </div>
                            <div class="card-body signin-form">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <div
                                            class="form-group prev-input-group mb-0 @error('email') is-invalid @enderror">
                                        <span class="input-group-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="12"
                                                 viewBox="0 0 18 12" fill="none">
                                                <path
                                                    d="M1.00171 1.4636C1.08065 1.18582 1.18049 0.919994 1.38573 0.706647C1.67418 0.40796 2.02151 0.250083 2.43711 0.250083C6.92992 0.250083 11.4226 0.250083 15.9151 0.250083C16.1045 0.248033 16.2924 0.283785 16.4679 0.355249C16.6433 0.426712 16.8027 0.53245 16.9368 0.666274C17.0708 0.800098 17.1769 0.959319 17.2486 1.13462C17.3204 1.30992 17.3565 1.49777 17.3548 1.68719C17.3565 4.56226 17.3565 7.43733 17.3548 10.3124C17.3564 10.5018 17.3202 10.6896 17.2484 10.8649C17.1766 11.0402 17.0706 11.1994 16.9365 11.3332C16.8025 11.467 16.6431 11.5728 16.4678 11.6444C16.2924 11.7159 16.1045 11.7518 15.9151 11.7499C11.428 11.7499 6.94073 11.7499 2.45332 11.7499C1.75141 11.7499 1.19116 11.2976 1.0303 10.6089C1.0221 10.5842 1.01197 10.56 1 10.5368L1.00171 1.4636ZM2.68032 1.21228C2.72299 1.25836 2.74049 1.28311 2.76225 1.30487C4.76885 3.31887 6.77574 5.33244 8.78291 7.34559C9.01717 7.58027 9.35084 7.57344 9.59363 7.33151C11.5897 5.32946 13.5852 3.32698 15.5802 1.32407C15.6105 1.29421 15.6352 1.25879 15.6736 1.21228H2.68032ZM2.69099 10.783H15.6736C14.2958 9.41975 12.9338 8.0714 11.5718 6.72304C11.1562 7.13693 10.7218 7.5679 10.2891 8.00056C9.64611 8.64274 8.71037 8.64274 8.07033 7.99843C7.67578 7.60303 7.28123 7.20734 6.88668 6.81137C6.84657 6.77126 6.8039 6.73371 6.79494 6.72603L2.69099 10.783ZM1.96305 10.0385L6.05079 5.99979L1.96305 1.95046V10.0385ZM16.3905 10.0641V1.96284L12.2942 6.01174L16.3905 10.0641Z"
                                                    fill="#FFC00B" stroke="#FFC00B" stroke-width="0.5"/>
                                            </svg>
                                        </span>
                                            <input type="text" class="form-control" autocomplete="off"
                                                   name="email"
                                                   placeholder="Email" value="{{ old('email') }}">
                                        </div>
                                        @error('email')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <div
                                            class="form-group mb-0 prev-input-group @error('password') is-invalid @enderror">
                                        <span class="input-group-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="20"
                                                 viewBox="0 0 15 20" fill="none">
                                                <path
                                                    d="M2.6793 8.30389C2.6793 7.58531 2.66391 6.88221 2.68526 6.18059C2.69244 5.75855 2.73848 5.33808 2.82278 4.92457C3.26268 2.91555 4.86287 1.41052 6.88656 1.07169C9.3854 0.652519 11.7596 2.10615 12.5302 4.52536C12.6912 5.04875 12.7716 5.59383 12.7685 6.14167C12.772 6.79039 12.7685 7.43611 12.7685 8.08333V8.2999C12.8822 8.31387 12.986 8.31936 13.0862 8.34032C13.9089 8.50999 14.4397 9.15771 14.4442 10.0125C14.4501 11.2136 14.4442 12.4148 14.4442 13.6164C14.4442 14.8425 14.4481 16.0685 14.4442 17.2946C14.4407 18.093 13.972 18.7268 13.2332 18.9334C13.0845 18.975 12.9308 18.9965 12.7764 18.9973C9.40758 19.0009 6.03889 19.0009 2.67036 18.9973C1.72008 18.9973 1.00662 18.2672 1.00265 17.2926C0.99669 15.7372 1.00265 14.1813 1.00265 12.6254C1.00265 11.7476 0.99669 10.8698 1.00265 9.99256C1.0101 9.15222 1.54581 8.50649 2.36005 8.33833C2.45737 8.32186 2.55617 8.31787 2.6793 8.30389ZM7.72216 17.875C9.35065 17.875 10.9791 17.875 12.6076 17.875C12.6941 17.8763 12.7806 17.8707 12.8663 17.8585C13.1314 17.8146 13.2829 17.6489 13.3062 17.3834C13.3126 17.3091 13.3141 17.2337 13.3141 17.1594C13.3141 14.8253 13.3141 12.4916 13.3141 10.1582C13.3162 10.0649 13.3117 9.9715 13.3007 9.87878C13.2918 9.78813 13.2563 9.7022 13.1986 9.63191C13.141 9.56162 13.0639 9.51015 12.977 9.48406C12.8704 9.45315 12.7597 9.43884 12.6488 9.44164C9.36703 9.43965 6.08523 9.43965 2.80342 9.44164C2.74148 9.43955 2.67947 9.44122 2.61773 9.44663C2.32828 9.48306 2.16295 9.65822 2.14061 9.95014C2.13564 10.0185 2.13465 10.0869 2.13465 10.1552C2.13465 12.4893 2.13465 14.8232 2.13465 17.1569C2.13323 17.2502 2.13754 17.3435 2.14756 17.4363C2.15933 17.5359 2.20196 17.6292 2.26941 17.7031C2.33686 17.777 2.42571 17.8277 2.5234 17.848C2.62661 17.8681 2.73158 17.8774 2.83669 17.876C4.46518 17.876 6.09367 17.8756 7.72216 17.875ZM11.6226 8.3014C11.6271 8.24202 11.6335 8.19361 11.6335 8.14521C11.6335 7.42314 11.641 6.69807 11.6281 5.97899C11.625 5.70562 11.5934 5.43332 11.5337 5.1666C11.0521 3.11365 9.15503 1.85315 7.0653 2.18748C5.22828 2.4814 3.84357 4.07825 3.81775 5.94755C3.80782 6.6821 3.81477 7.41665 3.81477 8.1512C3.81477 8.2011 3.82321 8.24701 3.82818 8.3009L11.6226 8.3014Z"
                                                    fill="#FFC00B" stroke="#FFC00B" stroke-width="0.5"/>
                                                <path
                                                    d="M7.16701 15.0815C7.16552 15.0566 7.16552 15.0316 7.16701 15.0067C7.20524 14.6369 7.14864 14.3784 6.75194 14.1583C6.07622 13.7831 5.86819 12.8769 6.17651 12.1339C6.47043 11.4253 7.24148 11.0106 8.00807 11.1493C8.75727 11.2845 9.29547 11.8329 9.39079 12.558C9.49357 13.3405 9.1207 14.0206 8.40476 14.341C8.3646 14.3533 8.33012 14.3796 8.30755 14.4152C8.28498 14.4508 8.27578 14.4933 8.28163 14.5351C8.28759 14.8894 8.2861 15.2442 8.28163 15.5985C8.27865 15.9698 8.0592 16.1973 7.71712 16.1943C7.37504 16.1913 7.17098 15.9658 7.16602 15.604C7.16502 15.4298 7.16701 15.2542 7.16701 15.0815ZM7.71911 13.3669C8.05424 13.3669 8.28213 13.1454 8.28312 12.8145C8.28411 12.4837 8.05126 12.2526 7.72159 12.2551C7.39192 12.2576 7.17545 12.4772 7.16751 12.804C7.15956 13.1309 7.38745 13.3649 7.71911 13.3669Z"
                                                    fill="#FFC00B" stroke="#FFC00B" stroke-width="0.5"/>
                                            </svg>
                                        </span>

                                            <input type="password"
                                                   class="form-control"
                                                   name="password"
                                                   placeholder="Password"
                                                   id="password"  value="{{ old('password') }}" autocomplete="off">
                                            <span class="input-group-icon passwordeye-icon view-pwd-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="19"
                                                     viewBox="0 0 21 19" fill="none">
                                                    <path
                                                        d="M20.3029 8.5703C19.479 6.83452 18.4985 5.4189 17.3615 4.32343L16.169 5.51593C17.1414 6.44523 17.9885 7.66093 18.7209 9.17499C16.7709 13.2109 14.0029 15.1281 10.2201 15.1281C9.08464 15.1281 8.03878 14.9533 7.08253 14.6036L5.79042 15.8957C7.11854 16.509 8.59511 16.8156 10.2201 16.8156C14.7248 16.8156 18.0857 14.4695 20.3029 9.77734C20.3921 9.58863 20.4383 9.38252 20.4383 9.17382C20.4383 8.96512 20.3921 8.75901 20.3029 8.5703ZM18.813 1.0553L17.8139 0.0549912C17.7964 0.0375581 17.7758 0.0237284 17.753 0.0142926C17.7302 0.00485679 17.7058 0 17.6812 0C17.6566 0 17.6322 0.00485679 17.6094 0.0142926C17.5866 0.0237284 17.566 0.0375581 17.5485 0.0549912L14.9852 2.61718C13.5719 1.8953 11.9835 1.53437 10.2201 1.53437C5.71542 1.53437 2.35448 3.88046 0.137294 8.57265C0.0481734 8.76136 0.00195313 8.96747 0.00195312 9.17616C0.00195312 9.38486 0.0481734 9.59097 0.137294 9.77968C1.02307 11.6453 2.08948 13.1407 3.33651 14.2659L0.856356 16.7453C0.82122 16.7805 0.801482 16.8281 0.801482 16.8778C0.801482 16.9276 0.82122 16.9752 0.856356 17.0104L1.8569 18.0109C1.89206 18.0461 1.93974 18.0658 1.98944 18.0658C2.03915 18.0658 2.08682 18.0461 2.12198 18.0109L18.813 1.32062C18.8304 1.3032 18.8443 1.28252 18.8537 1.25976C18.8631 1.237 18.868 1.2126 18.868 1.18796C18.868 1.16332 18.8631 1.13892 18.8537 1.11616C18.8443 1.0934 18.8304 1.07272 18.813 1.0553ZM1.71932 9.17499C3.67167 5.13905 6.43964 3.22187 10.2201 3.22187C11.4984 3.22187 12.6607 3.44124 13.7151 3.88726L12.0675 5.53491C11.2871 5.11858 10.3937 4.96406 9.51887 5.09416C8.64406 5.22426 7.83422 5.63208 7.20884 6.25747C6.58345 6.88286 6.17563 7.69269 6.04553 8.5675C5.91543 9.44231 6.06994 10.3358 6.48628 11.1161L4.53112 13.0712C3.44901 12.1162 2.5162 10.8222 1.71932 9.17499ZM7.50136 9.17499C7.50177 8.76171 7.59966 8.35434 7.78708 7.986C7.97451 7.61765 8.24618 7.29872 8.58002 7.05509C8.91387 6.81147 9.30047 6.65003 9.70843 6.58389C10.1164 6.51775 10.5342 6.54877 10.9279 6.67444L7.62581 9.97655C7.54304 9.71743 7.50106 9.44701 7.50136 9.17499Z"
                                                        fill="#BABABA"/>
                                                    <path
                                                        d="M10.1286 11.8024C10.0475 11.8024 9.96758 11.7987 9.88836 11.7914L8.65039 13.0294C9.39498 13.3145 10.2062 13.3779 10.9861 13.2118C11.7659 13.0457 12.4809 12.6573 13.0447 12.0935C13.6085 11.5297 13.9969 10.8147 14.163 10.0349C14.3291 9.25505 14.2657 8.44381 13.9805 7.69922L12.7426 8.93719C12.7498 9.01641 12.7536 9.09633 12.7536 9.17742C12.7538 9.52219 12.686 9.86362 12.5542 10.1822C12.4223 10.5007 12.229 10.7902 11.9852 11.034C11.7414 11.2778 11.4519 11.4711 11.1334 11.603C10.8148 11.7348 10.4734 11.8026 10.1286 11.8024Z"
                                                        fill="#BABABA"/>
                                                </svg>
                                            </span>

                                        </div>
                                        @error('password')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="input-group justify-content-end text-end">
                                        @if (Route::has('password.request'))
                                            <a href="#" data-bs-toggle="modal"
                                               data-bs-target="#resendPasswordModal"
                                               class="text-capitalize lead-2 font-regularcustom">{{ __('Forgot Your Password?') }}</a>
                                        @endif
                                    </div>

                                    <button type="submit"
                                            class="btn btn-custom-yellow fw-400 text-uppercase font-sebibold w-100 signin-btn">
                                        {{ __('Login') }}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <div class="modal fade loginscreen-modal custom-modal" id="resendPasswordModal" tabindex="-1"
             aria-labelledby="resendPasswordModal" aria-hidden="true">
            <div class="modal-dialog custom-w-441px resendpwdmodal">
                <div class="modal-content">
                    <div class="modal-header border-0 justify-content-center">
                        <h1 class="logo-text text-dark-1"><a href="javascript:void(0);">
                                Gomeal<span class="text-yellow-1">.</span>
                            </a></h1>
                    </div>
                    <div class="modal-body signin-form">
                        <form method="POST" id="reset-pwd-form" action="javascript:void(0)">
                            @csrf
                            <h3 class="authenticationform-title">{{ __('Reset Password') }}</h3>
                            <div class="form-group prev-input-group mb-0">
                            <span class="input-group-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="12" viewBox="0 0 18 12"
                                     fill="none">
                                    <path
                                        d="M1.00171 1.4636C1.08065 1.18582 1.18049 0.919994 1.38573 0.706647C1.67418 0.40796 2.02151 0.250083 2.43711 0.250083C6.92992 0.250083 11.4226 0.250083 15.9151 0.250083C16.1045 0.248033 16.2924 0.283785 16.4679 0.355249C16.6433 0.426712 16.8027 0.53245 16.9368 0.666274C17.0708 0.800098 17.1769 0.959319 17.2486 1.13462C17.3204 1.30992 17.3565 1.49777 17.3548 1.68719C17.3565 4.56226 17.3565 7.43733 17.3548 10.3124C17.3564 10.5018 17.3202 10.6896 17.2484 10.8649C17.1766 11.0402 17.0706 11.1994 16.9365 11.3332C16.8025 11.467 16.6431 11.5728 16.4678 11.6444C16.2924 11.7159 16.1045 11.7518 15.9151 11.7499C11.428 11.7499 6.94073 11.7499 2.45332 11.7499C1.75141 11.7499 1.19116 11.2976 1.0303 10.6089C1.0221 10.5842 1.01197 10.56 1 10.5368L1.00171 1.4636ZM2.68032 1.21228C2.72299 1.25836 2.74049 1.28311 2.76225 1.30487C4.76885 3.31887 6.77574 5.33244 8.78291 7.34559C9.01717 7.58027 9.35084 7.57344 9.59363 7.33151C11.5897 5.32946 13.5852 3.32698 15.5802 1.32407C15.6105 1.29421 15.6352 1.25879 15.6736 1.21228H2.68032ZM2.69099 10.783H15.6736C14.2958 9.41975 12.9338 8.0714 11.5718 6.72304C11.1562 7.13693 10.7218 7.5679 10.2891 8.00056C9.64611 8.64274 8.71037 8.64274 8.07033 7.99843C7.67578 7.60303 7.28123 7.20734 6.88668 6.81137C6.84657 6.77126 6.8039 6.73371 6.79494 6.72603L2.69099 10.783ZM1.96305 10.0385L6.05079 5.99979L1.96305 1.95046V10.0385ZM16.3905 10.0641V1.96284L12.2942 6.01174L16.3905 10.0641Z"
                                        fill="#FFC00B" stroke="#FFC00B" stroke-width="0.5"/>
                                </svg>
                            </span>
                                <input type="text" name="forgot-pwd-email" id="forgot-pwd-email"
                                       class="form-control" placeholder="Email"
                                       value="" autocomplete="email" autofocus>
                            </div>

                            <span class="invalid-feedback" role="alert" style="display:block">
                                <strong id="forgot-pwd-error-msg"></strong>
                            </span>

                            <span class="invalid-feedback" role="alert" style="display:block; color: #0f5132">
                                <strong id="forgot-pwd-success-msg"></strong>
                            </span>

                            <button type="submit" id="forgot-pwd--submit-btn"
                                    class="btn btn-custom-yellow fw-400 text-uppercase font-sebibold w-100 mt-30px">{{ __('Send Password Reset Link') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(function () {
            $(document).on('click', '#forgot-pwd--submit-btn', function () {
                var email = $('#forgot-pwd-email').val()
                $.ajax({
                    url: '{{ route('password.email') }}',
                    type: 'post',
                    data: {
                        email
                    },
                    success: function (response) {
                        $('#forgot-pwd-email').removeClass('is-invalid')
                        $('#forgot-pwd-error-msg').text('')
                        $('#forgot-pwd-success-msg').text(response.message)
                    },
                    error: function (response) {
                        var errorMessage = JSON.parse(response.responseText).message
                        $('#forgot-pwd-error-msg').text(errorMessage)
                        $('#forgot-pwd-email').addClass('is-invalid').val(email)
                    }
                })
            })

            $(document).on('click', '.view-pwd-icon', function () {
                if ($('#password').attr('type') == 'text') {
                    $('#password').attr('type', 'password')
                } else {
                    $('#password').attr('type', 'text')
                }
            })

            $('#resendPasswordModal').on('hidden.bs.modal', function () {
                var alertas = $('#reset-pwd-form');
                alertas.trigger("reset");
                $('#forgot-pwd-error-msg').text('')
                $('#forgot-pwd-success-msg').text('')
                $('#forgot-pwd-email').removeClass('is-invalid')
            });
        })
    </script>
@endsection
