<!-- Start Time -->

    <div class="top-box-time">

        <i class="zmdi zmdi-time"></i><p>Office Hours Mon - Fri 9.00 - 17.00</p>

    </div>

    <!-- End Our Partner -->

    <div class="our-partner-mains">

        <div class="container">

            <div class="clearfix">

            </div>

            <div class="row">

                <div class="col-lg-12">

                    <div class="box-contact-right-form">

                        <h3 style="color:#fff;">GET IN TOUCH WITH US</h3>

                        <div id="msg"></div>

                        @if (count($errors) > 0)

                            <div class="alert alert-danger">

                                <ul>

                                    @foreach ($errors->all() as $error)

                                        <div>{{ $error }}</div>

                                    @endforeach

                                </ul>

                            </div>

                        @endif



                        @if (Session::has('message'))

                            <div class="alert alert-success">{{ Session::get('message') }}</div>

                        @endif
                        <div class="messsage">

                        </div>
                        <form id="contact-form" class="contact-right-form" method="post" action="{{route('contact')}}">

                           {{csrf_field()}}

                            <div class="row clearfix">

                                <div class="form-group col-md-4">

                                    <input name="title"  placeholder="Title" required>

                                </div>

                                <div class="form-group col-md-4">

                                    <input name="first_name" placeholder="First Name" required>

                                </div>

                                <div class="form-group col-md-4">

                                    <input name="last_name" placeholder="Last Name" required>

                                </div>

                                <div class="form-group col-md-12">

                                    <input name="company"  placeholder="Your Organisation or Your Business Name" required>

                                </div>

                                <div class="form-group col-md-6">

                                    <input name="number"  placeholder="Contact Number" required>

                                </div>

                                <div class="form-group col-md-6">

                                    <input name="email" placeholder="Email" required>

                                </div>

                                <div class="form-group col-md-12">

                                    <textarea name="comment"  placeholder="Message"></textarea>

                                </div>

                                <div class="form-group col-md-5">

                                </div>

                                <div class="form-group col-md-5">

                                    <button id="submit_contact" type="submit" class="theme-btn btn-style-one button-wayra-a">Submit</button>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Start Time -->

    <div class="footer-main">

        <div class="container">

            <div class="row">

                <div class="col-lg-3 col-sm-6">

                    <div class="widget-footer">

                        <div class="footer-description">

                            <h3 class="footer-header">Head Office</h3>

                            <p>Creek Recruit,<br>

                                Room 1, Juniper Suite, Kebbel House,<br>

                                Carpenders Park, Watford<br>

                                WD19 5EF</p><br>

                            <p>Tel: 0333 222 4027<br>

                                Email: info@creekrecruit.com</p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-3 col-sm-6">

                    <div class="widget-footer">

                        <div class="footer-description">

                            <h3 class="footer-header">Southwest Office</h3>

                            <p>Creek Recruit,<br>

                                Unit 37,<br>
                                City Business Park.<br>

                                Somerset Place, Plymouth<br>

                                PL3 4BB</p><br>

                            <p>Tel: 0333 222 4027<br>

                                Email: info@creekrecruit.com</p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-3 col-sm-6">

                    <div class="widget-footer-nav">

                        <h3 class="footer-header">Website</h3>

                        <ul>

                            <p class="foots"><a href="{{url('/')}}">Home</a></p>

                            {{--<p class="foots"><a href="{{url('services')}}">Services</a></p>--}}

                            <p class="foots"><a href="{{url('careers')}}">Careers</a></p>

                            <p class="foots"><a href="{{url('about')}}">About</a></p>
                            <p class="foots"><a href="{{url('gallery')}}">Gallery</a></p>
                            <p class="foots"><a href="{{url('contact')}}">Contact</a></p>

                        </ul>
                        <p class="foots"><a href="{{route('pages',['id'=>'privacy-policy'])}}">Privacy Policy</a></p>


                    </div>

                </div>

                <div class="col-lg-3 col-sm-6">

                    <div class="">

                        <div class="footer-logo">

                            <img src="images/footer-logo.png" alt="" />

                        </div>

                        <div class="footer-socials">

                            <ul>

                                <li><a target="_blank" href="https://www.facebook.com/pg/creekrecruit11/notes/"><i class="zmdi zmdi-facebook"></i></a></li>

                                <li><a href="https://www.instagram.com/creekrecruit/" target="_blank"><i class="zmdi zmdi-instagram"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/creekrecruit/" target="_blank"><i class="zmdi zmdi-linkedin"></i></a></li>


                                <!--<li><a href="#"><i class="zmdi zmdi-google-plus"></i></a></li>

                                <li><a href="#"><i class="zmdi zmdi-pinterest"></i></a></li>

                                <li><a href="#"><i class="zmdi zmdi-skype"></i></a></li>-->

                            </ul>

                        </div>



                    </div>

                </div>
                <p style="color:#fff; text-align:center; margin: 0 auto;">&copy; Copyright <?php echo date('Y'); ?> Creek Investments Ltd. Registration: 8053966. Vat No. 244137131 </p>

            </div>

        </div>

        <!--<div class="copyright-main">

            <div class="container">

                <div class="copyright">

                    <p><a href="http://xtoreapp.com/" target="_blank" rel="noopener noreferrer">Developed & Maintain by </a> Xtoreapp.com</p>

                </div>

            </div>

        </div>-->

    </div>

    <!-- End Footer -->

    <a href="#" id="scroll-to-top" title="Scroll to top"><i class="zmdi zmdi-chevron-up"></i></a>

