@extends('layouts.page')

@section('title', 'Harry Potter Fanclub')

@section('content') 

{{-- Modal for Creating polls --}}
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Create a new Poll!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-group">
                  <label for="formGroupExampleInput">Question</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="What's the question you want to ask the fandom?">
                </div>
                <ul class="list-group">
                    <li class="list-group-item">
                        <input type="text" value="Option1">
                    </li>
                    <li class="list-group-item">
                        <input type="text" value="Option2">
                    </li>
                    <li class="list-group-item">
                        <input type="text" value="Option3">
                    </li>
                  </ul>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Create!</button>
        </div>
      </div>
    </div>
  </div>

<x-headers.page-header subtitle="" title="Harry Potter Fanclub" page="Harry Potter Fanclub" image="/images/harrypotter4.jpg" />

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
                                <p class="sub-title white-color mb-30">Description:</p>
                                <h2 class="title-small  white-color mb-30 right-align">
                                    This Fanclub is for Potterheads only! Here we create events related to the wizarding world, and we also post a lot of content about Harry Potter. You're welcome to join, even if you're still waiting for your Hogwarts letter :)


                                <strong class="yellow-color"><br>Category: Movies</strong>
                                </h2>
                                <div class=" d-flex text-center">
                                    <a href="#!" class="custom-btn">Join!</a>
                                </div>

                                <div class=" d-flex text-center create-poll-btn">
                                    <button href="#!" data-toggle="modal" data-target="#exampleModalLong" class="custom-btn">Create a Poll</button>
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
                                    <span class="result-text">4 Events from 202 Total</span>
                                </li>
                                <li>
                                    <label for="event-type-options">Type</label>
                                    <select name="event-type-options" id="event-type-options" class="fanclub-type-select">
                                        <option selected=""></option>
                                        <option value="1">Public</option>
                                        <option value="2">Private</option>
                                        <option value="3">Any</option>
                                    </select>
                                </li>
                            </ul>
                        </form>

                    </div>

                    <div class="tab-content">
                        <div id="list-style" class="tab-pane fade in active show">

                            <!-- event-item - start -->
                            <div class="event-list-item clearfix">
                                <!-- event-image - start -->
                                <div class="event-image">
                                    <div class="post-date">
                                        <span class="date">31</span>
                                        <small class="month">May</small>
                                    </div>
                                    <img src="images/harrypotter3.jpg" alt="Image_not_found">
                                </div>
                                <!-- event-image - end -->
                                <!-- event-content - start -->
                                <div class="event-content">
                                    <div class="event-title mb-15">
                                        <h3 class="title">
                                            <strong>Rewatching Harry Potter and The Prisoner of Askaban! 😻</strong>
                                        </h3>
                                        <span class="ticket-price yellow-color">Public</span>
                                    </div>
                                    <p class="discription-text mb-30">
                                        Join us to discuss Harry Potter and The Prisoner of Askaban on 31 of May!!! OMG I CAN'T DEAL WITH THE EXCITEMENT :D 
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
                                                <a href="/event" class="tickets-details-btn">
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
                    
                            

                                <!-- event-content - start -->
                                    <div class="event-poll-item">
                                            <div class="row">
                                                <div class="event-poll-title">
                                                   <div class="col-11">
                                                       Which Harry Potter movie is the best??
                                                       
                                                       <div class="event-poll-username">By: <span>JoaoRocha88 </span></div>

                                                    </div>
                                                </div>

                                            <div class="col">
                                                <button class="event-poll-option">
                                                    The Prisoner of Askaban!!
                                                </button>      
                                                <button class=" event-poll-option">
                                                    Goblet of Fire! 100% NO DOUBTS
                                                </button> 
                                                <button class=" event-poll-option">
                                                    Deathly Hallows part1 ofc
                                                </button>        
                                        </div>      
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
                                        <span class="date">2</span>
                                        <small class="month">Aug</small>
                                    </div>
                                    <img src="images/harrypotter2.jpg" alt="Image_not_found">
                                </div>
                                <!-- event-image - end -->
                                <!-- event-content - start -->
                                <div class="event-content">
                                    <div class="event-title mb-15">
                                        <h3 class="title">
                                            <strong>Meeting at Kings Cross Station :D</strong>
                                        </h3>
                                        <span class="ticket-price yellow-color">Public</span>
                                    </div>
                                    <p class="discription-text mb-30">
                                        Lets all meet at King's Cross Station in London and wear all our Harry Potter merchandise! 
                                    </p>
                                    <div class="event-info-list ul-li clearfix">
                                        <ul>
                                            <li>
                                                <span class="icon">
                                                    <i class="fas fa-user-tie"></i>
                                                </span>
                                                <div class="info-content">
                                                    <small>Creator</small>
                                                    <h3>AdrianaSlytherin98</h3>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="icon">
                                                    <i class="fas fa-ticket-alt"></i>
                                                </span>
                                                <div class="info-content">
                                                    <small>Participants</small>
                                                    <h3>250 fans</h3>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="/event" class="tickets-details-btn">
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
                                        <span class="date">12</span>
                                        <small class="month">Apr</small>
                                    </div>
                                    <img src="images/harrypotter1.jpg" alt="Image_not_found">
                                </div>
                                <!-- event-image - end -->
                                <!-- event-content - start -->
                                <div class="event-content">
                                    <div class="event-title mb-15">
                                        <h3 class="title">
                                            <strong>Watching Harry Potter and the Deathly Hallows part2 for the 1000th time 😻</strong>
                                        </h3>
                                        <span class="ticket-price yellow-color">Public</span>
                                    </div>
                                    <p class="discription-text mb-30">
                                        Join us to watch deathly hallows 2 AGAIN! Bring lots of snacks and your best Harry Potter outfits! 
                                    </p>
                                    <div class="event-info-list ul-li clearfix">
                                        <ul>
                                            <li>
                                                <span class="icon">
                                                    <i class="fas fa-user-tie"></i>
                                                </span>
                                                <div class="info-content">
                                                    <small>Creator</small>
                                                    <h3>DebsWizardingWorld</h3>
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
                                                <a href="/event" class="tickets-details-btn">
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
                                    <span class="date">24</span>
                                    <small class="month">Mar</small>
                                </div>
                                <img src="images/harrypotter4.jpg" alt="Image_not_found">
                            </div>
                            <!-- event-image - end -->
                            <!-- event-content - start -->
                            <div class="event-content">
                                <div class="event-title mb-15">
                                    <h3 class="title">
                                        <strong>Virtual Potions Class by Snape 🧙</strong>
                                    </h3>
                                    <span class="ticket-price yellow-color">Public</span>
                                </div>
                                <p class="discription-text mb-30">
                                     We're hosting a virtual potions class! To attend you need to wear your Hogwarts robe, and please bring parchment and a writing feather!
                                </p>
                                <div class="event-info-list ul-li clearfix">
                                    <ul>
                                        <li>
                                            <span class="icon">
                                                <i class="fas fa-user-tie"></i>
                                            </span>
                                            <div class="info-content">
                                                <small>Creator</small>
                                                <h3>SeverusSnape</h3>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="icon">
                                                <i class="fas fa-ticket-alt"></i>
                                            </span>
                                            <div class="info-content">
                                                <small>Participants</small>
                                                <h3>1,230 fans</h3>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="/event" class="tickets-details-btn">
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

                        
                    </div>

                </div>
                <!-- - end -->
                
            </div>
        </div>
    </section>


@endsection
