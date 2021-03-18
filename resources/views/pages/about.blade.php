@extends('layouts.page')

@section('title', 'About us')

@section('content')   
    <!-- Hero -->
    <x-headers.page-header subtitle="all you need to know" title="about the fanclub" page="About us" image="/images/stockPhoto2.jpg" />

    <!-- Mission & Vision -->
    <section id="our-management-section" class="our-management-section bg-gray-light sec-ptb-100 clearfix">
        <div class="container">
            <div class="row">

                <!-- section-title - start -->
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="section-title text-left mb-50 sr-fade1">
                        <small class="sub-title">we are the fanclub</small>
                        <h2 class="big-title"><strong>No.1</strong> Events Management Platform</h2>
                        <a href="#!" class="custom-btn">
                            get started!
                        </a>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="management-item sr-fade2">
                                <div class="item-title">
                                    <h3 class="title-text">
                                        our mission
                                    </h3>
                                </div>
                                <p class="black-color mb-30">
                                    We're passionate about bringing people together in the hopes that everyone finds a community of friends where they belong and feel welcomed! Above all, we want you to have fun in The Fanclub.
                                </p>
                                <p class="black-color m-0">
                                    <strong>
                                        <i>
                                            We work hard every day so you can have the best experience with your friends! 
                                        </i>	
                                    </strong>
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="management-item sr-fade3">
                                <div class="item-title">
                                    <h3 class="title-text">
                                        our vission
                                    </h3>
                                </div>
                                <p class="black-color mb-30">
                                    We believe everyone deserves to have a place where they can be themselves, with no restrictions. So every day we aim to make The Fanclub that place for you, so you can express yourself and feel at home!
                                </p>
                                <p class="black-color m-0">
                                    <strong>
                                        <i>
                                            For everyone there's a group of people who think alike and share the same interests, in The Fanclub you can find yours! 
                                        </i>	
                                    </strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How it works -->
    <section id="speaker-section" class="speaker-section clearfix">
        <div class="jarallax" style="background-image: url(https://dummyimage.com/1920x1200/76e89c/fff);">
            <div class="overlay-white">
                <div class="container">
                    <x-widgets.how-it-works-carousel.carousel />
                </div>
            </div>
        </div>
    </section>
    <section id="special-offer-section" class="special-offer-section clearfix" style="background-image: url(/images/special-offer-bg.png);">
        <div class="container">
            <div class="row">

                <div class="col-lg-9">
                    <div class="special-offer-content">
                        <h2>Looking for <span>people like you?</span></h2>
                        <p class="m-0 text-white" style="font-size: 1.3rem;">
                            Join the Fandom!
                        </p>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="event-makeing-btn">
                        <a href="#!">Fanclubs</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Advantages -->
    <section id="service-section" class="service-section sec-ptb-100 bg-gray-light clearfix">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title mb-50 sr-fade1">
                        <span class="line-style"></span>
                        <small class="sub-title">why choose us</small>
                        <h2 class="big-title">The Fanclub <strong>Advantages</strong></h2>
                    </div>
                </div>
            </div>

            <div class="service-wrapper sr-fade1">
                <ul>

                    <li>
                        <a href="#!">
                            <span class="icon">
                                <i class="flaticon-handshake"></i>
                            </span>
                            <strong class="service-title">friendly community</strong>
                            <small class="service-sub-title">More than 200 fanclubs</small>
                        </a>
                    </li>

                    <li>
                        <a href="#!">
                            <span class="icon">
                                <i class="flaticon-cheers"></i>
                            </span>
                            <strong class="service-title">Common interests</strong>
                            <small class="service-sub-title">Meet your fellow fans</small>
                        </a>
                    </li>

                    <li>
                        <a href="#!">
                            <span class="icon">
                                <i class="flaticon-two-balloons"></i>
                            </span>
                            <strong class="service-title">Fanclubs</strong>
                            <small class="service-sub-title">find your favorite fanclubs</small>
                        </a>
                    </li>

                    <li>
                        <a href="#!">
                            <span class="icon">
                                <i class="flaticon-speech-bubble"></i>
                            </span>
                            <strong class="service-title">Chat & message</strong>
                            <small class="service-sub-title">Keep in touch with everyone</small>
                        </a>
                    </li>

                    <li>
                        <a href="#!">
                            <span class="icon">
                                <i class="flaticon-clown-hat"></i>
                            </span>
                            <strong class="service-title">Events</strong>
                            <small class="service-sub-title">find your favorite events</small>
                        </a>
                    </li>

                    <li>
                        <a href="#!">
                            <span class="icon">
                                <i class="flaticon-light-bulb"></i>
                            </span>
                            <strong class="service-title">Ideas into action</strong>
                            <small class="service-sub-title">Make your own communitites</small>
                        </a>
                    </li>

                    <li>
                        <a href="#!">
                            <span class="icon">
                                <i class="flaticon-event-date-and-time-symbol"></i>
                            </span>
                            <strong class="service-title">Event Scheduler</strong>
                            <small class="service-sub-title">keep track of your events</small>
                        </a>
                    </li>

                    <li>
                        <a href="#!">
                            <span class="icon">
                                <i class="flaticon-group"></i>
                            </span>
                            <strong class="service-title">Control Panel</strong>
                            <small class="service-sub-title">manage your profile</small>
                        </a>
                    </li>

                </ul>
            </div>

        </div>
    </section>

@endsection