
<script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/swiper-bundle.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/dark-mode-switch.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.validate.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgn-yE-BywHdBacEmRH9IWEFbuaM4PWGw&libraries=places&callback=initMap" async defer></script>

<script src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
<script src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>
<script src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.gammel.js"></script>
<script src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.charts.js"></script>
<script src="https://unpkg.com/jquery-fusioncharts@1.1.0/dist/fusioncharts.jqueryplugin.js"></script>
<script type="text/javascript" src="{{ asset('js/jquery.datepicker.min.js')}}"></script>

<script>
    var baseURL = "{{ url('/') }}"

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }

    });
    // timepicker
</script>
<script src="{{ asset('js/user/footer.js')}}"></script>

