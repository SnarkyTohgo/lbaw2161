@extends('layouts.page')

@section('title', 'Fanclub Example')

@section('content') 

<x-headers.page-header subtitle="" title="Harry Potter Fanclub" page="Fanclub name" image="/images/stockPhoto4.jpg" />

{{-- Modal for inviting --}}
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Invite Members to FanClubname</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-group">
                  <label for="formGroupExampleInput">Username</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                </div>
                <ul class="list-group">
                    <li class="list-group-item">JoanaCarolina</li>
                    <li class="list-group-item active">JoaoRocha88</li>
                    <li class="list-group-item">JorgeQuimZeca</li>
                  </ul>
              </form>

            

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Invite!</button>
        </div>
      </div>
    </div>
  </div>


<section id="our-management-section" class="our-management-section bg-gray-light clearfix"></section>

    <section id="event-section" class="event-section bg-gray-light sec-ptb-100 clearfix">
        <div class="container">
            <div class="row">
                <!-- sidebar-section - start -->
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="sidebar-section">

                        <!-- Add to Calendar - start -->
                        {{-- <div title="" class="addeventatc" id="addeventatc1" aria-haspopup="true" aria-expanded="false" tabindex="0" style="visibility: visible; z-index: auto;">
                            Add to Calendar
                            <span class="start atc_node">06/18/2015 09:00 AM</span>
                            <span class="end atc_node">06/18/2015 11:00 AM</span>
                            <span class="timezone atc_node">Europe/Paris</span>
                            <span class="title atc_node">Summary of the event</span>
                            <span class="description atc_node">Description of the event</span>
                            <span class="location atc_node">Location of the event</span>
                            <span class="organizer atc_node">Organizer</span>
                            <span class="organizer_email atc_node">Organizer e-mail</span>
                            <span class="all_day_event atc_node">false</span>
                            <span class="date_format atc_node">MM/DD/YYYY</span>
                        <span class="addeventatc_icon atc_node"></span></div> --}}
                        <!-- Add to Calendar - end -->

                        <!-- map-wrapper - start -->
                        {{-- <div class="map-wrapper mb-30">
                            <h2 class="title-small default-color mb-30">Google Map Search</h2>
                            <div id="google-map">
                                <div id="googleMaps" class="google-map-container"></div>
                            </div>
                        </div> --}}
                        <!-- map-wrapper - end -->

                        <!-- spacial-event-wrapper - start -->
                        <div class="spacial-event-wrapper " style="background-image: url(assets/images/spacial-event-bg.jpg);">
                            <div class="overlay-black">
                                <p class="sub-title white-color mb-30">Info:</p>
                                <h2 class="title-small  white-color mb-30 right-align">
                                    Description here?? Lorem ipsum dollor site amet the best consectuer adipiscing elites sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat insignia the consectuer adipiscing elit.


                                    <strong class="yellow-color"><br>Category?</strong>
                                </h2>
                                <div class="  text-center">
                                    <button href="#!" data-toggle="modal" data-target="#exampleModalLong" class="custom-btn">Invite To Fanclub</button>
                                </div>
                                <div class="  text-center mt-3">
                                    <button href="#!" data-toggle="modal" data-target="#exampleModalLong" class="custom-btn">Edit FanClub</button>
                                </div>
                            </div>
                        </div>
                        <!-- spacial-event-wrapper - end -->
                        
                    </div>
                </div>
                <!-- sidebar-section - end -->

                <!-- - start -->
                <div class="col-lg-9 col-md-12 col-sm-12">
                    <div class="search-result-form">
                        <form action="#!">
                            <ul>
                                <li>
                                    <span class="result-text">5 Events from 202 Total</span>
                                </li>
                                <li>
                                    <label for="event-type-options">Type</label>
                                    <select name="event-type-options" id="event-type-options" class="fanclub-type-select">
                                        <option selected=""></option>
                                        <option value="1">Public</option>
                                        <option value="2">Private</option>
                                        <option value="3">Any (?)</option>
                                    </select>
                                </li>
                            </ul>
                        </form>
                        <ul class="nav event-layout-btngroup">
                            <li><a class="active" data-toggle="tab" href="#list-style"><i class="fas fa-th-list"></i></a></li>
                            <li><a data-toggle="tab" href="#grid-style"><i class="fas fa-th"></i></a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div id="list-style" class="tab-pane fade in active show">

                            <!-- event-item - start -->
                            <div class="event-list-item clearfix">
                                <!-- event-image - start -->
                                <div class="event-image">
                                    <div class="post-date">
                                        <span class="date">31</span>
                                        <small class="month">Feb</small>
                                    </div>
                                    <img src="images/stockPhoto3.jpg" alt="Image_not_found">
                                </div>
                                <!-- event-image - end -->
                                <!-- event-content - start -->
                                <div class="event-content">
                                    <div class="event-title mb-15">
                                        <h3 class="title">
                                            <strong>Episode 32 Premiereeeee!! 😻</strong>
                                        </h3>
                                        <span class="ticket-price yellow-color">Public</span>
                                    </div>
                                    <p class="discription-text mb-30">
                                        Join us to discuss the Episode 32 premiering at 31 of Februaryy!!! OMG I CAN'T DEAL WITH THE EXCITEMENTASOFKASOFAS 
                                    </p>
                                    <div class="event-info-list ul-li clearfix">
                                        <ul>
                                            <li>
                                                <span class="icon">
                                                    <i class="fas fa-user-tie"></i>
                                                </span>
                                                <div class="info-content">
                                                    <small>Creator</small>
                                                    <h3>JoaoRocha88</h3>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="icon">
                                                    <i class="fas fa-ticket-alt"></i>
                                                </span>
                                                <div class="info-content">
                                                    <small>Participants</small>
                                                    <h3>2,250 fans</h3>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#!" class="tickets-details-btn">
                                                    Attend!
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- event-content - end -->

                            </div>
                            <!-- event-item - end -->

                            <!-- event-item - start -->
                            <div class="event-list-item clearfix">

                                <!-- event-image - start -->
                                <div class="event-image">
                                    <div class="post-date">
                                        <span class="date">26</span>
                                        <small class="month">june</small>
                                    </div>
                                    <img src="assets/images/event/event-2.jpg" alt="Image_not_found">
                                </div>
                                <!-- event-image - end -->

                                <!-- event-content - start -->
                                <div class="event-content">
                                    <div class="event-title mb-15">
                                        <h3 class="title">
                                            Barcelona <strong>Food truck Festival 2018</strong>
                                        </h3>
                                        <span class="ticket-price yellow-color">Tickets from $52</span>
                                    </div>
                                    <p class="discription-text mb-30">
                                        Lorem ipsum dollor site amet the best  consectuer diam nerdistin adipiscing elites sed diam nonummy nibh the ebest uismod delgas tincidunt ut laoreet dolore magna...
                                    </p>
                                    <div class="event-info-list ul-li clearfix">
                                        <ul>
                                            <li>
                                                <span class="icon">
                                                    <i class="fas fa-microphone"></i>
                                                </span>
                                                <div class="info-content">
                                                    <small>Speaker</small>
                                                    <h3>jenny juis</h3>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="icon">
                                                    <i class="fas fa-ticket-alt"></i>
                                                </span>
                                                <div class="info-content">
                                                    <small>Max Seats</small>
                                                    <h3>2,250 seats</h3>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#!" class="tickets-details-btn">
                                                    tickets &amp; details
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- event-content - end -->

                            </div>
                            <!-- event-item - end -->

                            <!-- event-item - start -->
                            <!-- event-item - start -->
                            <div class="event-list-item clearfix">
                                <!-- event-image - start -->
                                <div class="event-image">
                                    <div class="post-date">
                                        <span class="date">31</span>
                                        <small class="month">Feb</small>
                                    </div>
                                    <img src="images/stockPhoto3.jpg" alt="Image_not_found">
                                </div>
                                <!-- event-image - end -->
                                <!-- event-content - start -->
                                <div class="event-content">
                                    <div class="event-title mb-15">
                                        <h3 class="title">
                                            <strong>Episode 32 Premiereeeee!! 😻</strong>
                                        </h3>
                                        <span class="ticket-price yellow-color">Public</span>
                                    </div>
                                    <p class="discription-text mb-30">
                                        Join us to discuss the Episode 32 premiering at 31 of Februaryy!!! OMG I CAN'T DEAL WITH THE EXCITEMENTASOFKASOFAS 
                                    </p>
                                    <div class="event-info-list ul-li clearfix">
                                        <ul>
                                            <li>
                                                <span class="icon">
                                                    <i class="fas fa-user-tie"></i>
                                                </span>
                                                <div class="info-content">
                                                    <small>Creator</small>
                                                    <h3>JoaoRocha88</h3>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="icon">
                                                    <i class="fas fa-ticket-alt"></i>
                                                </span>
                                                <div class="info-content">
                                                    <small>Participants</small>
                                                    <h3>2,250 fans</h3>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#!" class="tickets-details-btn">
                                                    Attend!
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- event-content - end -->

                            </div>
                            <!-- event-item - end -->

                            <!-- event-item - start -->
                            <div class="event-list-item clearfix">

                                <!-- event-image - start -->
                                <div class="event-image">
                                    <div class="post-date">
                                        <span class="date">26</span>
                                        <small class="month">june</small>
                                    </div>
                                    <img src="assets/images/event/event-2.jpg" alt="Image_not_found">
                                </div>
                                <!-- event-image - end -->

                                <!-- event-content - start -->
                                <div class="event-content">
                                    <div class="event-title mb-15">
                                        <h3 class="title">
                                            Barcelona <strong>Food truck Festival 2018</strong>
                                        </h3>
                                        <span class="ticket-price yellow-color">Tickets from $52</span>
                                    </div>
                                    <p class="discription-text mb-30">
                                        Lorem ipsum dollor site amet the best  consectuer diam nerdistin adipiscing elites sed diam nonummy nibh the ebest uismod delgas tincidunt ut laoreet dolore magna...
                                    </p>
                                    <div class="event-info-list ul-li clearfix">
                                        <ul>
                                            <li>
                                                <span class="icon">
                                                    <i class="fas fa-microphone"></i>
                                                </span>
                                                <div class="info-content">
                                                    <small>Speaker</small>
                                                    <h3>jenny juis</h3>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="icon">
                                                    <i class="fas fa-ticket-alt"></i>
                                                </span>
                                                <div class="info-content">
                                                    <small>Max Seats</small>
                                                    <h3>2,250 seats</h3>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#!" class="tickets-details-btn">
                                                    tickets &amp; details
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- event-content - end -->

                            </div>
                            <!-- event-item - end -->

                            <!-- event-item - start -->
                                            <!-- event-item - start -->
                            <div class="event-list-item clearfix">
                                <!-- event-image - start -->
                                <div class="event-image">
                                    <div class="post-date">
                                        <span class="date">31</span>
                                        <small class="month">Feb</small>
                                    </div>
                                    <img src="images/stockPhoto3.jpg" alt="Image_not_found">
                                </div>
                                <!-- event-image - end -->
                                <!-- event-content - start -->
                                <div class="event-content">
                                    <div class="event-title mb-15">
                                        <h3 class="title">
                                            <strong>Episode 32 Premiereeeee!! 😻</strong>
                                        </h3>
                                        <span class="ticket-price yellow-color">Public</span>
                                    </div>
                                    <p class="discription-text mb-30">
                                        Join us to discuss the Episode 32 premiering at 31 of Februaryy!!! OMG I CAN'T DEAL WITH THE EXCITEMENTASOFKASOFAS 
                                    </p>
                                    <div class="event-info-list ul-li clearfix">
                                        <ul>
                                            <li>
                                                <span class="icon">
                                                    <i class="fas fa-user-tie"></i>
                                                </span>
                                                <div class="info-content">
                                                    <small>Creator</small>
                                                    <h3>JoaoRocha88</h3>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="icon">
                                                    <i class="fas fa-ticket-alt"></i>
                                                </span>
                                                <div class="info-content">
                                                    <small>Participants</small>
                                                    <h3>2,250 fans</h3>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#!" class="tickets-details-btn">
                                                    Attend!
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- event-content - end -->

                            </div>
                            <!-- event-item - end -->

                            <!-- event-item - start -->
                            <!-- event-item - start -->
                            <div class="event-list-item clearfix">
                            <!-- event-image - start -->
                            <div class="event-image">
                                <div class="post-date">
                                    <span class="date">31</span>
                                    <small class="month">Feb</small>
                                </div>
                                <img src="images/stockPhoto3.jpg" alt="Image_not_found">
                            </div>
                            <!-- event-image - end -->
                            <!-- event-content - start -->
                            <div class="event-content">
                                <div class="event-title mb-15">
                                    <h3 class="title">
                                        <strong>Episode 32 Premiereeeee!! 😻</strong>
                                    </h3>
                                    <span class="ticket-price yellow-color">Public</span>
                                </div>
                                <p class="discription-text mb-30">
                                    Join us to discuss the Episode 32 premiering at 31 of Februaryy!!! OMG I CAN'T DEAL WITH THE EXCITEMENTASOFKASOFAS 
                                </p>
                                <div class="event-info-list ul-li clearfix">
                                    <ul>
                                        <li>
                                            <span class="icon">
                                                <i class="fas fa-user-tie"></i>
                                            </span>
                                            <div class="info-content">
                                                <small>Creator</small>
                                                <h3>JoaoRocha88</h3>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="icon">
                                                <i class="fas fa-ticket-alt"></i>
                                            </span>
                                            <div class="info-content">
                                                <small>Participants</small>
                                                <h3>2,250 fans</h3>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#!" class="tickets-details-btn">
                                                Attend!
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- event-item - end -->

                            <div class="pagination ul-li clearfix">
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

                        <div id="grid-style" class="tab-pane fade">
                            <div class="row justify-content-center">

                                <!-- event-grid-item - start -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="event-grid-item">
                                        <!-- event-image - start -->
                                        <div class="event-image">
                                            <div class="post-date">
                                                <span class="date">26</span>
                                                <small class="month">june</small>
                                            </div>
                                            <img src="assets/images/event/1.event-grid.jpg" alt="Image_not_found">
                                        </div>
                                        <!-- event-image - end -->

                                        <!-- event-content - start -->
                                        <div class="event-content">
                                            <div class="event-title mb-30">
                                                <h3 class="title">
                                                    Barcelona Food Truck Festival 2018-2019
                                                </h3>
                                                <span class="ticket-price yellow-color">Tickets from $52</span>
                                            </div>
                                            <div class="event-post-meta ul-li-block mb-30">
                                                <ul>
                                                    <li>
                                                        <span class="icon">
                                                            <i class="far fa-clock"></i>
                                                        </span>
                                                        Start 20:00pm - 22:00pm
                                                    </li>
                                                    <li>
                                                        <span class="icon">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                        </span>
                                                        Manhattan, New York
                                                    </li>
                                                </ul>
                                            </div>
                                            <a href="#!" class="tickets-details-btn">
                                                tickets &amp; details
                                            </a>
                                        </div>
                                        <!-- event-content - end -->
                                    </div>
                                </div>
                                <!-- event-grid-item - end -->

                                <!-- event-grid-item - start -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="event-grid-item">
                                        <!-- event-image - start -->
                                        <div class="event-image">
                                            <div class="post-date">
                                                <span class="date">26</span>
                                                <small class="month">june</small>
                                            </div>
                                            <img src="assets/images/event/2.event-grid.jpg" alt="Image_not_found">
                                        </div>
                                        <!-- event-image - end -->

                                        <!-- event-content - start -->
                                        <div class="event-content">
                                            <div class="event-title mb-30">
                                                <h3 class="title">
                                                    Barcelona Food Truck Festival 2018-2019
                                                </h3>
                                                <span class="ticket-price yellow-color">Tickets from $52</span>
                                            </div>
                                            <div class="event-post-meta ul-li-block mb-30">
                                                <ul>
                                                    <li>
                                                        <span class="icon">
                                                            <i class="far fa-clock"></i>
                                                        </span>
                                                        Start 20:00pm - 22:00pm
                                                    </li>
                                                    <li>
                                                        <span class="icon">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                        </span>
                                                        Manhattan, New York
                                                    </li>
                                                </ul>
                                            </div>
                                            <a href="#!" class="tickets-details-btn">
                                                tickets &amp; details
                                            </a>
                                        </div>
                                        <!-- event-content - end -->
                                    </div>
                                </div>
                                <!-- event-grid-item - end -->

                                <!-- event-grid-item - start -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="event-grid-item">
                                        <!-- event-image - start -->
                                        <div class="event-image">
                                            <div class="post-date">
                                                <span class="date">26</span>
                                                <small class="month">june</small>
                                            </div>
                                            <img src="assets/images/event/1.event-grid.jpg" alt="Image_not_found">
                                        </div>
                                        <!-- event-image - end -->

                                        <!-- event-content - start -->
                                        <div class="event-content">
                                            <div class="event-title mb-30">
                                                <h3 class="title">
                                                    Barcelona Food Truck Festival 2018-2019
                                                </h3>
                                                <span class="ticket-price yellow-color">Tickets from $52</span>
                                            </div>
                                            <div class="event-post-meta ul-li-block mb-30">
                                                <ul>
                                                    <li>
                                                        <span class="icon">
                                                            <i class="far fa-clock"></i>
                                                        </span>
                                                        Start 20:00pm - 22:00pm
                                                    </li>
                                                    <li>
                                                        <span class="icon">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                        </span>
                                                        Manhattan, New York
                                                    </li>
                                                </ul>
                                            </div>
                                            <a href="#!" class="tickets-details-btn">
                                                tickets &amp; details
                                            </a>
                                        </div>
                                        <!-- event-content - end -->
                                    </div>
                                </div>
                                <!-- event-grid-item - end -->

                                <!-- event-grid-item - start -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="event-grid-item">
                                        <!-- event-image - start -->
                                        <div class="event-image">
                                            <div class="post-date">
                                                <span class="date">26</span>
                                                <small class="month">june</small>
                                            </div>
                                            <img src="assets/images/event/2.event-grid.jpg" alt="Image_not_found">
                                        </div>
                                        <!-- event-image - end -->

                                        <!-- event-content - start -->
                                        <div class="event-content">
                                            <div class="event-title mb-30">
                                                <h3 class="title">
                                                    Barcelona Food Truck Festival 2018-2019
                                                </h3>
                                                <span class="ticket-price yellow-color">Tickets from $52</span>
                                            </div>
                                            <div class="event-post-meta ul-li-block mb-30">
                                                <ul>
                                                    <li>
                                                        <span class="icon">
                                                            <i class="far fa-clock"></i>
                                                        </span>
                                                        Start 20:00pm - 22:00pm
                                                    </li>
                                                    <li>
                                                        <span class="icon">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                        </span>
                                                        Manhattan, New York
                                                    </li>
                                                </ul>
                                            </div>
                                            <a href="#!" class="tickets-details-btn">
                                                tickets &amp; details
                                            </a>
                                        </div>
                                        <!-- event-content - end -->
                                    </div>
                                </div>
                                <!-- event-grid-item - end -->

                                <!-- event-grid-item - start -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="event-grid-item">
                                        <!-- event-image - start -->
                                        <div class="event-image">
                                            <div class="post-date">
                                                <span class="date">26</span>
                                                <small class="month">june</small>
                                            </div>
                                            <img src="assets/images/event/1.event-grid.jpg" alt="Image_not_found">
                                        </div>
                                        <!-- event-image - end -->

                                        <!-- event-content - start -->
                                        <div class="event-content">
                                            <div class="event-title mb-30">
                                                <h3 class="title">
                                                    Barcelona Food Truck Festival 2018-2019
                                                </h3>
                                                <span class="ticket-price yellow-color">Tickets from $52</span>
                                            </div>
                                            <div class="event-post-meta ul-li-block mb-30">
                                                <ul>
                                                    <li>
                                                        <span class="icon">
                                                            <i class="far fa-clock"></i>
                                                        </span>
                                                        Start 20:00pm - 22:00pm
                                                    </li>
                                                    <li>
                                                        <span class="icon">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                        </span>
                                                        Manhattan, New York
                                                    </li>
                                                </ul>
                                            </div>
                                            <a href="#!" class="tickets-details-btn">
                                                tickets &amp; details
                                            </a>
                                        </div>
                                        <!-- event-content - end -->
                                    </div>
                                </div>
                                <!-- event-grid-item - end -->

                                <!-- event-grid-item - start -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="event-grid-item">
                                        <!-- event-image - start -->
                                        <div class="event-image">
                                            <div class="post-date">
                                                <span class="date">26</span>
                                                <small class="month">june</small>
                                            </div>
                                            <img src="assets/images/event/2.event-grid.jpg" alt="Image_not_found">
                                        </div>
                                        <!-- event-image - end -->

                                        <!-- event-content - start -->
                                        <div class="event-content">
                                            <div class="event-title mb-30">
                                                <h3 class="title">
                                                    Barcelona Food Truck Festival 2018-2019
                                                </h3>
                                                <span class="ticket-price yellow-color">Tickets from $52</span>
                                            </div>
                                            <div class="event-post-meta ul-li-block mb-30">
                                                <ul>
                                                    <li>
                                                        <span class="icon">
                                                            <i class="far fa-clock"></i>
                                                        </span>
                                                        Start 20:00pm - 22:00pm
                                                    </li>
                                                    <li>
                                                        <span class="icon">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                        </span>
                                                        Manhattan, New York
                                                    </li>
                                                </ul>
                                            </div>
                                            <a href="#!" class="tickets-details-btn">
                                                tickets &amp; details
                                            </a>
                                        </div>
                                        <!-- event-content - end -->
                                    </div>
                                </div>
                                <!-- event-grid-item - end -->

                                <!-- pagination - start -->
                                <div class="pagination ul-li clearfix">
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
                                <!-- pagination - end -->

                            </div>
                        </div>
                    </div>

                </div>
                <!-- - end -->
                
            </div>
        </div>
    </section>


@endsection
