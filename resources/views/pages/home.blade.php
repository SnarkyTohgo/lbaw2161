@extends('layouts.master')

@section('title', 'Home')

@section('content') 
    <!-- Hero Slider -->
    <x-widgets.hero-slider.slider />
		
    <!-- Fanclubs -->
    <section id="event-expertise-section" class="event-expertise-section bg-gray-light sec-ptb-100 clearfix">
        <div class="container">
            <div class="section-title text-center mb-50">
                <small class="sub-title">fanclubs</small>
                <h2 class="big-title">become a <strong>Fan</strong></h2>
            </div>
    
            <x-widgets.fanclub-carousel.carousel />
        </div>
    </section>

    <!-- How it Works -->
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

    <!-- Get Started -->
    <section id="partners-clients-section" class="partners-clients-section bg-gray-light sec-ptb-100 clearfix">
        <div class="container">
            <div class="section-title text-center mb-50">
                <small class="sub-title">we are the fanclub</small>
                <h2 class="big-title">Are you ready to make <strong>your Own Fanclubs?</strong></h2>
                <p class="fs-3 black-color" style="font-size: 1.3rem;">
                    Get started now, and manage your favorite events!
                </p>
                <a href="#!" class="mt-3 btn btn-primary">register</a>
            </div>
        </div>
    </section>
@endsection

