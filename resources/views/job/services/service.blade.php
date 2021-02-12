@extends('job.layout.layout')
@if($page)
@section('meta-title'){!! $page->seo_keyword !!} @stop

@section('meta-description'){!! $page->seo_description !!}  @stop
@endif
@section('content')

    <!-- Start All Pages Title -->

    <div class="page-title-main services">

        <div class="container">

            <div class="clearfix">

                <div class="title-all text-center">

                    <h2>Our Services</h2>

                </div>

            </div>

        </div>

    </div>

    <!-- End All Pages Title -->

    </div>

    <!-- End Header -->

    <!-- Start Services -->

    <div class="services-main-inner">

        <div class="container">

            <div class="row">

                @foreach($services as $service)

                <div class="col-lg-6 col-sm-12">

                    <div class="inner-ser-box">

                        {{--<div class="ser-icon">--}}

                            {{--<i class="hi-icon zmdi zmdi-accounts-alt"></i>--}}

                        {{--</div>--}}

                        <div class="icon-help">

                            <img class="hover-icon" src="{{url('/')}}/uploads/services/{{$service->service_image}}" alt="" />

                            <img class="hover-icon-h" src="{{url('/')}}/uploads/services/{{$service->service_image}}" alt="" />

                        </div>

                        <div class="services-dit-inner">

                            <a href="javascript:void(0);">

                                <h3>{{$service->service_title}}</h3>

                            </a>

                            <p>{!! $service->service_desc !!}</p>

                        </div>

                    </div>

                </div>

                    @endforeach

            </div>

        </div>

    </div>

    <!-- End Services -->

    <div class="how-help-main">

        <div id="contact">

        </div>

        <div class="container">

            <div class="clearfix">

                <div class="text-center">

                    <h2 style=";">We currently supply the following areas across England.</h2>

                    <p style="">Plymouth-Totnes-Paignton-Torquay-Okehampton- parts of Cornwall -Exeter-Newtonabbott-Buckfast leigh-Tavistock-Yelverton-Harrow-Pinner-Watford-Elstree-Edgeware…………… and many more.</p>

                </div>

            </div>

        </div>

    </div>

    @stop