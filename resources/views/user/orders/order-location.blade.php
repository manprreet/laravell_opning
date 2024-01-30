@extends('layouts.user-app')

@section('content')

 <div class="main">
   <div class="main-view">
     <div class="container-fluid bd-gutter bd-layout">
       @include('layouts.user.side_nav_bar')
        <main class="bd-main order-1">
          <div class="main-content d-flex flex-column ">
            <div class="section-page-title main-page-title row justify-content-between d-none d-sm-block">
              <div class="col-xxl-6 col-xl-6 col-lg-5 col-md-6 col-sm-6 col-12">
                <h1 class="page-title">Order location</h1>
              </div>
            </div>
            <div class="trackOrder">
              <div class="track-order-main flex-grow-1">
                <div class="iframe-box w-100 position-relative">
                 <!--  <img src="{{ asset('images/track-map.png') }}" alt="img" class="img-fluid w-100"> -->
                  <div id="map" class="img-fluid w-100"></div>
                  <div class="clock-icon">
                    <img src="{{ asset('images/track-clock-icon.svg') }}" alt="img" class="img-fluid svg" width="90">
                  </div>
                </div>
                <div class="row text-row">
                  <div class="col-lg-12 col-xl-6 mb-4">
                    <div class="text-box main-text-box">
                      <div class="title">We received your order</div>
                      <div class="text">You can see all details and updates of your order on the my orders page.</div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-xl-3 mb-4">
                    <div class="text-box">
                      <div class="title">Restaurants Address</div>
                      <div class="text">
                        <div class="img-grp">
                          <img src="{{ asset('images/yellow-icon-img.svg') }}" alt="" class="img-fluid icon svg" width="33">
                          <img src="{{ asset('images/user-img.png') }}" alt="" class="profile svg" width="20">
                        </div> {{ getRestaurantDetail()->rest_address }}
                      </div>
                    </div>
                  </div>
                  @if($order->order->order_type == App\Enums\OrderType::Delivery)
                  <div class="col-lg-6 col-xl-3">
                    <div class="text-box">
                      <div class="title">Your Address</div>
                      <div class="text">
                        <div class="img-grp">
                          <img src="{{ asset('images/yellow-icon-img.svg') }}" alt="" class="img-fluid icon svg" width="33">
                          <img src="{{ asset('images/user-profile.png') }}" alt="" class="profile" width="20">
                        </div> {{ $order->house_no.', '.$order->street_name.', '.$order->city.', '.$order->zipcode }}
                      </div>
                    </div>
                  </div>
                  @endif
                </div>
              </div>
              <div class="btn-grp">
                <a class="btn btn-custom-yellow track-order-btn"  href="{{ route('user.orders',['order_id' => $order->order->id]) }}">
                  <span class="align-middle">My Order</span>
                </a>
              </div>
            </div>
          </div>
        </main>
     </div>
  </div>
     
   <!-- start footer -->
   @include('layouts.user.footer_design')
   <!-- end footer -->
 </div>

@include('user.modals.refund')

@endsection

@section('script')

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgn-yE-BywHdBacEmRH9IWEFbuaM4PWGw"></script>

<script>

      var MapPoints = '[{"lat":"23.022505","lng":"72.571365"},{"lat":"23.215635","lng":"72.636940"}]';
       
      var MY_MAPTYPE_ID = 'custom_style';
       
      function initialize() 
      {
          if (jQuery('#map').length > 0) 
          {
              var locations = jQuery.parseJSON(MapPoints);
           
              window.map = new google.maps.Map(document.getElementById('map'), {
                   mapTypeId: google.maps.MapTypeId.ROADMAP,
                   scrollwheel: false
               });
           
               var infowindow = new google.maps.InfoWindow();
               var flightPlanCoordinates = [];
               var bounds = new google.maps.LatLngBounds();
               
               for (i = 0; i < locations.length; i++) 
               {
                   marker = new google.maps.Marker({
                   position: new google.maps.LatLng(locations[i].lat, locations[i].lng),
                   map: map
                   });
                   flightPlanCoordinates.push(marker.getPosition());
                   bounds.extend(marker.position);
                   
                   /*display marker tag name
                   google.maps.event.addListener(marker, 'click', (function(marker, i) {
                   return function() {
                     infowindow.setContent("point"+[i]);
                     infowindow.open(map, marker);
                   }
                   })(marker, i));*/
               }
           
               map.fitBounds(bounds);
               
               var flightPath = new google.maps.Polyline({
                   map: map,
                   path: flightPlanCoordinates,
                   strokeColor: "#FF0000",
                   strokeOpacity: 1.0,
                   strokeWeight: 2
               });
       
          }
       }

       google.maps.event.addDomListener(window, 'load', initialize);
</script>

@endsection

