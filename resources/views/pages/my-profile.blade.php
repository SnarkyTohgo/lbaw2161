@extends('layouts.page')

@section('title', 'My profile')

@section('content')   
    <!-- My Fanclubs -->
    <section id="event-expertise-section" class="event-expertise-section bg-gray-light sec-ptb-100 clearfix">
        <div class="container">
            <div class="section-title text-center mb-50">
                <small class="sub-title">my area</small>
                <h2 class="big-title">My <strong>Fanclubs</strong></h2>
            </div>
    
            <x-widgets.fanclub-carousel.carousel />
        </div>
    </section>
	
    <!-- My Events -->
    <section id="conference-section" class="conference-section clearfix">
        <div class="jarallax" style="background-image: url(assets/images/conference/pexels-photo-262669.jpg);">
            <div class="overlay-black sec-ptb-100">

                <div class="mb-50">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="section-title text-left">
                                    <span class="line-style"></span>
                                    <small class="sub-title">My Area</small>
                                    <h2 class="big-title">My <strong>Events</strong></h2>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="conference-location ul-li clearfix">
                                    <ul>

                                        <li class="country-select">
                                            <form action="#!">
                                                <label for="country">Fanclub :</label>
                                                <select class="custom-select" id="country">
                                                    <option selected>All</option>
                                                    <option value="1">Option 1</option>
                                                    <option value="2">Option 2</option>
                                                    <option value="3">Option 3</option>
                                                </select>	
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- events-content-wrapper -->
                <x-widgets.events-carousel-vertical.carousel />

            </div>
        </div>
    </section>

@endsection