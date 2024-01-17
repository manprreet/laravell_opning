<?php $theme = \Request::session()->get('theme'); ?>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="{{ $theme }}">
@include('layouts.user.header')
<body>

@yield('content')

@if($theme == 'dark')
<a href="{{ url('/change-theme/light') }}">
    <div class="dark-light-btn p-3 cursor-pointer">
        <img src="{{ asset('images/light-theme.svg') }}" alt="" height="240" width="240" class="svg">
    </div>
</a>
@else
<a href="{{ url('/change-theme/dark') }}">
    <div class="dark-light-btn p-3 cursor-pointer">
    
        <img src="{{ asset('images/dark-theme.svg') }}" alt="" height="20" width="20" class="svg">
    </div>
</a>  
@endif

@include('layouts.user.footer')
@yield('script')
</body>
</html>
