@extends('layouts.page')

@section('title', 'EventName')

@section('content') 

<div class="container mx-0 px-0">
    <div class="row ">
        <div class="col-md-5" style="background-size:cover">
            <img src="images/harrypotter4.jpg">
            <div class=" text-right">
                <a href="#!" class="event-attendance-number">
                    <span>1230 &nbsp;&nbsp;</span>
                    <i class="fas fa-users"></i>
                </a>
            </div>
        </div>
        <div class="col-md-1"></div>

        <div class="col px-5 pt-5">
            <div class=" d-flex">
                <h1 class=" event-name-label">Virtual Potions Class by Snape 🧙</h1>
            </div>
            <div class=" d-flex my-0 py-0">
                <p><span class="event-name-span">Date:</span> 24 / 03 / 2021 </p>
            </div>  
            <div class=" d-flex mt-0 pt-0  event-name-time">
                <p><span class="event-name-span">Time:</span> 12:00 - 14:00 </p>
            </div> 
            <div class=" d-flex mt-1 event-name-description">
                <p>We're hosting a virtual potions class! To attend you need to wear your Hogwarts robe, and please bring parchment and a writing feather! </p>
            </div>     
  
        </div>
    </div>
</div>

{{-- Chat --}}
<section id="event-section" class="event-section bg-gray-light sec-ptb-100 clearfix">
    <div class="container">
        <div class="row">
            <!-- - start -->

            <div class="tab-content event-custom-content">

                <div class="event-name-label event-custom-chat-label">
                    Event Chat
                </div>


                <div id="list-style" class="event-message-list" class="tab-pane fade in active show">


                    <x-widgets.event-message.event-message photopath="/images/harrypotter2.jpg" time="11:01" username="Slytherin4ever" comment="What an AMAZING event!!!!!" />

                    <x-widgets.event-message.event-message photopath="/images/hp2.jpg" time="11:05" username="UrAWizardHarry" comment="Hello darkness my world friend" />

                    <x-widgets.event-message.event-message photopath="/images/harrypotter1.jpg" time="11:13" username="AdrianaSlytherin98" comment="I'm gonna make a love potion, or felix felicis :D" />

                    <x-widgets.event-message.event-message photopath="/images/harrypotter3.jpg" time="11:24" username="TohgoSpells" comment="I'm the next potions master" />
                    <x-widgets.event-message.event-message photopath="/images/harrypotter4.jpg" time="11:26" username="Hermione123" comment="It's Leviosa, not leviosA" />
                    <x-widgets.event-message.event-message photopath="/images/harrypotter2.jpg" time="11:32" username="GryffindorPotato" comment="I only trust Dumbledore tbh" />

                    <!-- event-item - end -->
                    </div>

                    <div class="clearfix">
                        <div class="row">
                            <div class="col-12 event-comment">
                                <span> Add a Comment</span>
                                <form>
                                    <textarea class="event-comment-textarea"></textarea>
                                    <label for="event-commnet-file">or Send a Picture</label>
                                    <input name="event-comment-file" type="file"><br>
                                    <button class="btn btn-primary"type="submit">&nbsp;&nbsp;Send&nbsp;&nbsp;</button>
                                </form>
                        </div>
                        
                    </div>

                </div>

            </div>

            <!-- - end -->
            
        </div>
    </div>
</section>


@endsection