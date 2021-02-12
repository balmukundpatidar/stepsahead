@extends('job.layout.layout')
@if($page)
@section('meta-title'){!! $page->seo_keyword !!} @stop
@section('meta-description'){!! $page->seo_description !!}  @stop
@endif
@section('content')
    <!-- main -->
 
    <main>
        <!-- hero banner -->
        <section class="map-sec sec-map-contact">
            <!--iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2544.2432520213474!2d-4.165032084105788!3d50.380663800271655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486c933e7e015d89%3A0x4b95b8f6a47d5626!2sSteps%20Ahead%20Care%20%26%20Support%20Ltd!5e0!3m2!1sen!2sin!4v1592681050092!5m2!1sen!2sin"
                width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0">
            </iframe-->
            <div id="map_para_wrap">
      <div id="map_para">
      <div id="map_wrapper">
                     <div id="map" style="width: 100%; height: 100%"></div>
         </div>
         </div>
         </div>
        </section>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFzzVfXfUc91Eb1CWCfPVZZzgMB0U5xVU&callback=initMap"></script>
      <script type="text/javascript">
      var locations = [
        @if(count($address)>0)
        ['{{$address[0]->address}}',{{$address[0]->lat}},{{$address[0]->long}},'{{$address[0]->address_type}}'],
          @endif
        ];
      
      var map = new google.maps.Map(document.getElementById('map'), {
                       mapTypeId: google.maps.MapTypeId.ROADMAP,
                     });
                     var infowindow = new google.maps.InfoWindow();
                     var bounds = new google.maps.LatLngBounds();
                     //Sunil Icon
                     var icon = {
                     url:"/jobs/img/map-pin-blue.png",
                     scaledSize: new google.maps.Size(43, 57), // scaled size
                     origin: new google.maps.Point(0,0), // origin
                     anchor: new google.maps.Point(0, 57) // anchor
                     };
                     var icon2 = {
                     url:"/jobs/img/map-pin-green.png",
                     scaledSize: new google.maps.Size(43,57), // scaled size
                     origin: new google.maps.Point(0,0), // origin
                     anchor: new google.maps.Point(0, 57) // anchor
                     };
                     
                     var marker, i, newicon;
                     var markers1 = new Array();
                     for (i = 0; i < locations.length; i++) {
                     if(locations[i][3]=='office'){
                     newicon=icon;  
                     }else{
                     newicon=icon2; 
                     }
                       marker = new google.maps.Marker({
                         position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                         map: map,
                         icon: newicon,
                         title: locations[i][0],
             
                       });
                        bounds.extend(marker.position);
                       google.maps.event.addListener(marker, 'click', (function(marker, i) {
                         return function() {
                           infowindow.setContent(locations[i][0]);
                           infowindow.open(map, marker);
                           opentoolbars(i);
                         }
                       })(marker, i));
                       markers1.push(marker);  
                     }
                     map.fitBounds(bounds);
                       var listener = google.maps.event.addListener(map, "idle", function () {
                         map.setZoom(15);
                         google.maps.event.removeListener(listener);
                     });
                     // Trigger a click event on each marker when the corresponding marker link is clicked
                     
      </script>
        <section class="sec contact-us-form">
            <div class="container">
                <div class="contact-sec-main">
                    <div class="heading-05 wow fadeIn text-center">
                        <h1>Contact Us</h1>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="contact-wrapper">
                                <form action="{{route('store_contact')}}" method="post">
                                    <input type="hidden" name="_method" value="POST">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="first_name" class="form-control" placeholder="Name" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="email" class="form-control" placeholder="Email*" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="number" class="form-control" placeholder="Phone" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select class="form-control" name="enquiry">
                                                    <option>Make a General Enquiry</option>
                                                    <option>Enquire about a package of support that meets your
                                                        requirements
                                                    </option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea name="comment" class="form-control" rows="7"
                                                    placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                       <!--  <div class="col-md-12">
                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option>Morning</option>
                                                    <option>Afternoon</option>
                                                </select>
                                            </div>
                                        </div> -->
                                        <div class="col-md-12">
                                            <div class="form-btn">
                                                <button type="submit" class="custom-btn">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="contact-wrapper">
                                <div class="contact-info">
                                    <h4>Head Office</h4>
                                    <ul>
                                        <li><img src="{{url('/')}}/jobs/img/phone.svg" alt="" /><a href="tel:{{$setttings->phone_number_1}}">{{$setttings->phone_number_1}}</a>
                                        </li>
                                        <li><img src="{{url('/')}}/jobs/img/mail.svg" alt="" /><a
                                                href="mailto:{{$setttings->email_1}}">{{$setttings->email_1}}</a>
                                        </li>
                                        <li><img src="{{url('/')}}/jobs/img/address.svg" alt="" />{!! $setttings->adress !!}</li>
                                    </ul>
                                </div>
                                <div class="contact-info">
                                    <h4>Cornwall Enquiries</h4>
                                    <ul>
                                        <li><img src="{{url('/')}}/jobs/img/phone.svg" alt="" /><a href="tel:{{$setttings->phone_number_2}}">{{$setttings->phone_number_2}}</a>
                                        </li>
                                        <li><img src="{{url('/')}}/jobs/img/mail.svg" alt="" /><a
                                                href="mailto:{{$setttings->email_2}}">{{$setttings->email_2}}</a>
                                        </li>
                                    </ul>

                                </div>
								<br>
                                <div class="contact-info">
                                    <h4>Bristol Enquiries</h4>
                                    <ul>
                                        <li><img src="{{url('/')}}/jobs/img/phone.svg" alt="" /><a href="tel:0117 9116715">0117 9116715</a>
                                        </li>
                                        <li><img src="{{url('/')}}/jobs/img/mail.svg" alt="" /><a
                                                href="mailto:admin@stepsaheadsupport.co.uk">admin@stepsaheadsupport.co.uk</a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- about info -->
    </main>
    <!--[main] -->
@stop