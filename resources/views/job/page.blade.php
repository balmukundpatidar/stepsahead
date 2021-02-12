@extends('job.layout.layout')
@if($page)
@section('meta-title'){!! $page->seo_keyword !!} @stop
@section('meta-description'){!! $page->seo_description !!}  @stop
@endif
@section('content')
   <!-- main -->
    <main>
        <!-- hero banner -->
        <section class="agency" style="background-image: url('{{url('/')}}/jobs/img/about-bg.jpg');">
            <div class="container">
                <div class="heading-05 wow fadeIn">
                    <h1>About</h1>
                </div>
            </div>
        </section>

        <!-- about info -->
        <section class="sec-about-info bg-white">
            <div class="container wow fadeInDown">
                <h4 class="heading-04 text-color-black">
                    The aim of Steps Ahead Care & Support is to enable the people we support to live as independently as
                    possible. We tailor packages of care and support to meet the clients’ individual requirements, this
                    could be for 24 hours a day or a few hours each week. We also provide high calibre support staff to
                    registered organisations to compliment your existing team at a moments notice. We are an established
                    company with a proven track record of offering excellent care and support to our clients.
                </h4>
            </div>
        </section>
        <!-- Recruitment and Independence -->
        <section class="sec-recruitment  agency-main-sec">
            <div class="row no-gutters">
                <div class="col-md-6  wow fadeInLeft">
                    <div class="recruit-text bg-pink text-color-white">
                        <p>
                            Steps Ahead Care & Support intend to deliver a care and support service of excellence, where
                            compromise is never an option. We specialise in providing care and support both in and out
                            of your home, supporting you to access the community, to complete daily living skills and
                            partake in activities of interest.
                        </p>
                        <p>
                            We work alongside the multidisciplinary team to ensure continuity of care and support to
                            enable people to achieve their individualised goals and aspiration.</p>
                        <p>
                            Steps Ahead Care & Support will provide you with a service tailored to meet your needs with
                            highly trained and experienced staff. We are available 24 hours a day seven days a week, on
                            01752 547257, where you will get to speak to one of our friendly members of office staff.
                        </p>
                    </div>
                </div>
                <div class="col-md-6  wow fadeInRight">
                    <div class="recruit-img care-quality">
                        <img src="{{url('/')}}/jobs/img/add.jpg" alt="" />
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-6  wow fadeInRight">
                    <div class="recruit-text bg-white">
                        <div class="heading-01">
                        </div>
                        <p>
                            Steps Ahead Care & Support provide high calibre and motivated staff who have individualised
                            training to meet the needs of the people we support. All of Steps Ahead Support Workers have
                            an absolute minimum of six months experience in Health and Social Care, though most have
                            many years of experience working with us at Steps Ahead. All applicants are subjected to a
                            rigorous and exhaustive selection and recruitment process designed to ensure that each
                            member of the team are of the highest standard, and have relevant interests and life skills
                            to meet your needs and goals.
                        </p>
                    </div>
                </div>
                <div class="col-md-6  wow fadeInLeft">
                    <div class="recruit-img">
                        <img src="{{url('/')}}/jobs/img/about2.jpg" alt="" />
                    </div>
                </div>
            </div>
        </section>
        <!-- Recruitment and Independence -->
        <!--[agency staff] -->
        <!--[User-Guide] -->
        <section class="sec user-guide">
            <div class="container">
                <div class="row  wow fadeInUp">
                    <div class="col-md-4">
                        <div class="document-wrapper">
                            <div class="file-icon">
                                <img src="{{url('/')}}/jobs/img/document.svg" alt="" />
                            </div>
                            <h5>Statement of Purpose</h5>
                            <div class="news-btn">
                                <a href="#" class="custom-btn">Download</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="document-wrapper">
                            <div class="file-icon">
                                <img src="{{url('/')}}/jobs/img/document.svg" alt="" />
                            </div>
                            <h5>Service User Guide</h5>
                            <div class="news-btn">
                                <a href="#" class="custom-btn">Download</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="document-wrapper">
                            <div class="file-icon">
                                <img src="{{url('/')}}/jobs/img/document.svg" alt="" />
                            </div>
                            <h5>Management of Complaints</h5>
                            <div class="news-btn">
                                <a href="#" class="custom-btn">Download</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="document-wrapper">
                            <div class="file-icon">
                                <img src="{{url('/')}}/jobs/img/document.svg" alt="" />
                            </div>
                            <h5>Easy Read
                                Statement of Purpose</h5>
                            <div class="news-btn">
                                <a href="#" class="custom-btn">Download</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="document-wrapper">
                            <div class="file-icon">
                                <img src="{{url('/')}}/jobs/img/document.svg" alt="" />
                            </div>
                            <h5>Easy Read
                                Service User Guide</h5>
                            <div class="news-btn">
                                <a href="#" class="custom-btn">Download</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="document-wrapper">
                            <div class="file-icon">
                                <img src="{{url('/')}}/jobs/img/document.svg" alt="" />
                            </div>
                            <h5>Easy Read
                                Management of Complaints</h5>
                            <div class="news-btn">
                                <a href="#" class="custom-btn">Download</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--[User-Guide] -->
        <section class="sec-about-info bg-pink">
            <div class="container  wow fadeInUp">
                <h4 class="heading-04">
                    Whether you require long term cover or your requirements are more ad hoc, Steps Ahead Care & Support
                    are able to offer an exceptional service with the highest calibre of staff for more information on
                    the service we can offer you.
                    <h3>Please contact us on: 01752 547257 </h3>
                </h4>
            </div>
        </section>
        <!--[Our Partner] -->
        <section class="sec sec-our-partner">
            <div class="container">
                <div class="heading-01 wow fadeInDown">
                    <h2><span>Our </span>Partners</h2>
                </div>
                <div class="partner-main">
                    <div class="owl-carousel owl-theme wow fadeInDown" id="our-partner">
                        <div class="item">
                            <a href="#">
                                <div class="our-partner-img">
                                    <img src="{{url('/')}}/jobs/img/chas.jpg" alt="" />
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <div class="our-partner-img">
                                    <img src="{{url('/')}}/jobs/img/headway.png" alt="" />
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <div class="our-partner-img">
                                    <img src="{{url('/')}}/jobs/img/social.png" alt="" />
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <div class="our-partner-img">
                                    <img src="{{url('/')}}/jobs/img/arc.png" alt="" />
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <div class="our-partner-img">
                                    <img src="{{url('/')}}/jobs/img/bild.png" alt="" />
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--[Our Partner] -->

    </main>
    <!--[main] -->
    @stop