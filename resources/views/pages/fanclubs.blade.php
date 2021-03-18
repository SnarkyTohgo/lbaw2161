@extends('layouts.page')

@section('title', 'Fanclubs')

@section('content')   
   <!-- Hero -->
   <x-headers.page-header subtitle="Fanclubs" title="all fanclubs" page="Fanclubs" image="/images/stockPhoto4.jpg" /> 
		
    <!-- Fanclub Search Widget -->
    <x-widgets.search.fanclub-search />

    <!-- Fanclubs -->
    <section id="event-section" class="event-section bg-gray-light sec-ptb-100 clearfix">
        <div class="container">
            <div class="row">

                <!-- sidebar-section - start -->
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="sidebar-section">

                        <!-- spacial-event-wrapper - start -->
                        <div class="spacial-event-wrapper text-center" style="background-image: url(assets/images/spacial-event-bg.jpg);">
                            <div class="overlay-black">
                                <p class="sub-title white-color mb-30">Not a member?</p>
                                <h2 class="title-large white-color mb-30">
                                    join
                                    <strong class="yellow-color">The Fanclub</strong>
                                </h2>
                                <a href="#!" class="custom-btn">Register</a>
                            </div>
                        </div>
                        <!-- spacial-event-wrapper - end -->
                        
                    </div>
                </div>
                <!-- sidebar-section - end -->

                <!-- - start -->
                <div class="col-lg-9 col-md-12 col-sm-12">

                    {{-- <div class="search-result-form">
                        <form action="#!">
                            <ul>
                                <li>
                                    <span class="result-text">5 Search results from 20 events</span>
                                </li>
                                <li>
                                    <label for="year-select">Years:</label>
                                    <select id="year-select">
                                        <option selected="">2018</option>
                                        <option value="1">2019</option>
                                        <option value="2">2020</option>
                                        <option value="3">2021</option>
                                    </select>
                                </li>
                                <li>
                                    <label for="munth-select">Months:</label>
                                    <select id="munth-select">
                                        <option selected="">June</option>
                                        <option value="1">July</option>
                                        <option value="2">August</option>
                                    </select>
                                </li>

                            </ul>
                        </form>
                    </div> --}}

                    <div id="list-style">
                        <!-- fanclub item  -->
                        <x-cards.fanclub-card image="/images/hp2.jpg" name="Harry Potter" category="Movies" description="The ultimate potterheads fandom!" />
                        <x-cards.fanclub-card image="/images/billieEilish.jpg" name="Billie Eilish" category="Music" description="When we fall asleep, where do we go?" />
                        <x-cards.fanclub-card image="/images/harryStyles1.jpg" name="Harry Styles" category="Music" description="Watermelon Sugaaaaa Hiiii :D" />
                        <x-cards.fanclub-card image="/images/queen1.png" name="Queen" category="Music" description="I want to break free, I want to breeeak freee" />
                        <x-cards.fanclub-card image="/images/danandphil1.jpg" name="Dan & Phil" category="Youtube" description="Gotta have wiskers to join the phandom!" />
                      

                        <div class="pagination ul-li clearfix d-flex justify-content-center">
                            <ul>
                                <li class="page-item prev-item">
                                    <a class="page-link" href="#!">Prev</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#!">01</a></li>
                                <li class="page-item active"><a class="page-link" href="#!">02</a></li>
                                <li class="page-item"><a class="page-link" href="#!">03</a></li>
                                <li class="page-item"><a class="page-link" href="#!">04</a></li>
                                <li class="page-item"><a class="page-link" href="#!">05</a></li>
                                <li class="page-item next-item">
                                    <a class="page-link" href="#!">Next</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection