@extends('job.layout.layout_noloder')

@if($page)

@section('meta-title'){!! $page->seo_keyword !!} @stop



@section('meta-description'){!! $page->seo_description !!}  @stop

@endif

@section('content')



    <!-- Map Section -->

    <div class="map-container">

        <div id="map"></div>

    </div>



    <!-- Map Section End -->



    <style>



        #map {



            width: 100%;



            height: 30rem;



        }



        .map_wrap {



            float: left;



            background-color: #fff;



            padding: 0px;



            width: 100%;



            color:#000;



        }



    </style>

    <script>



        function initMap() {



            var mapDiv = document.getElementById('map');







            var latlng = new google.maps.LatLngBounds();







            var style = [



                { "featureType": "road",



                    "elementType":



                        "labels.icon",



                    "stylers": [



                        { "saturation": 1 },



                        { "gamma": 1 },



                        { "visibility": "off" },



                        { "hue": "#004459" }



                    ]



                },



                { "elementType": "geometry", "stylers": [



                        { "saturation": -90 }



                    ]



                }



            ];



            var mapLocationsx = [[51.628928,-0.385004],[50.381378,-4.161552]];



            var mapInfoContent = [

                '<strong>Creek Recruit,</strong><br>Room 1, Juniper Suite, Kebbel House,<br>Carpenders Park, Watford.<br>WD19 5EF.<br>0333 222 4027<br>info@creekrecruit.com',

                '<strong>Creek Recruit,</strong><br>Unit 37, City Business Park.<br>Somerset Place, Plymouth.<br>PL3 4BB<br>0333 222 4027<br>info@creekrecruit.com',];



            var mapZoomLevel =  0;

            var mapZoomMseWheel = false;

            var mapTypeCtrl = false;

            var mapPanCtrl = false;



            var mapZoomCtrl = true;



            var mapScaleCtrl = true;



            var mapStreetViewCtrl = false;



            var mapGrayScale = true;



// Check grayscale option



            var grayscale = mapGrayScale ? -100 : 0;







            // Map options



            var mapOptions = {



                zoom: mapZoomLevel,



                center: new google.maps.LatLng( mapLocationsx[0][0], mapLocationsx[0][1] ),



                mapTypeControl: mapTypeCtrl,



                mapTypeControlOptions: {



                    style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,



                    position: google.maps.ControlPosition.TOP_RIGHT



                },



                panControl: mapPanCtrl,



                panControlOptions: {



                    position: google.maps.ControlPosition.TOP_LEFT



                },



                zoomControl: mapZoomCtrl,



                zoomControlOptions: {



                    style: google.maps.ZoomControlStyle.SMALL,



                    position: google.maps.ControlPosition.LEFT_TOP



                },



                scrollwheel: mapZoomMseWheel,



                scaleControl: mapScaleCtrl,



                streetViewControl: mapStreetViewCtrl,



                streetViewControlOptions: {



                    position: google.maps.ControlPosition.LEFT_TOP



                },



                // Add styles as necessary



                styles:[ { stylers:[ { saturation: grayscale } ] } ]



            };







            var map = new google.maps.Map(mapDiv, mapOptions);







            // SET THE MAP TYPE



            var mapType = new google.maps.StyledMapType(style, {name:"Grayscale"});



            map.mapTypes.set('grey', mapType);



            map.setMapTypeId('grey');



            var mapIcon = ['{{url('/')}}/jobs/images/template/map-marker.png','{{url('/')}}/jobs/images/template/map-marker.png'];



            var mapIconW = 51; // Half of actual width



            var mapIconH = 83; // Half of actual height







            // Google Map











            // Add markers



            var locationMarker;



            var infowindow;



            var iconNum = 0;



            for ( var i = 0; i < mapLocationsx.length; i++ ) {



                locationMarker = new google.maps.Marker({



                    position: new google.maps.LatLng(mapLocationsx[i][0], mapLocationsx[i][1]),



                    map: map,



                    icon: new google.maps.MarkerImage( mapIcon[ iconNum ], null, null, null, new google.maps.Size( mapIconW, mapIconH ) )



                });







                // Create info window



                infowindow = new google.maps.InfoWindow({



                    content: mapInfoContent[ i ]



                });







                // Add click event for markers



                google.maps.event.addListener( locationMarker, 'click', ( function( locationMarker, i ) {



                    return function() {



                        infowindow.setContent( mapInfoContent[ i ] );



                        infowindow.open( map, locationMarker );



                    };



                })( locationMarker, i ));







                // count



                iconNum++;



            }



            map.setCenter(51.037320, -1.667421);



            // On resize event center map



            google.maps.event.addDomListener( window, 'resize', function() {



                var mapCenter = map.getCenter();



                google.maps.event.trigger( map, 'resize' );



                map.setCenter(51.037320, -1.667421);



            });







        }



    </script>

    <script async defer



            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzfouctAfuBNIu1uwImynzT91I7fR748o&callback=initMap">



    </script>

    </div>



    <!-- End Header -->

    <!-- Start Contact -->

    <div class="contact-main">





        <div class="container">

            <div class="row">

                <div class="col-lg-12 col-12">

                    <div class="contact-left-slide">

                        <h3>We Are Here For You </h3>
                        <div class="row box-contact-inner">
                            <div class="col-sm-6">


                                <div class="contact-box">


                                    <div class="contact-description">


                            <h4 class="">Head Office</h4>

                            <p><i class="zmdi zmdi-google-maps"></i>Creek Recruit,<br>

                                Room 1, Juniper Suite, Kebbel House,<br>

                                Carpenders Park, Watford<br>

                                WD19 5EF</p><br>

                            <p><i class="zmdi zmdi-phone"></i>0333 222 4027<br>

                                <i class="zmdi zmdi-email"></i>info@creekrecruit.com</p>

                        </div>

                                </div>

                            </div>

                            <div class="col-sm-6">


                                <div class="contact-box">


                                    <div class="contact-description">


                            <h4 class="">Southwest Office</h4>

                            <p><i class="zmdi zmdi-google-maps"></i>Creek Recruit,<br>

                                Unit 37, City Business Park.<br>
                                Somerset Place, Plymouth<br />

                                PL3 4BB</p><br>

                            <p><i class="zmdi zmdi-phone"></i>0333 222 4027<br>

                                <i class="zmdi zmdi-email"></i>info@creekrecruit.com</p>

                        </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- End Contact -->





@stop