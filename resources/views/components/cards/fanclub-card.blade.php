<div class="event-list-item clearfix">
    <!-- faclub image -->
    <div class="event-image">
        <img src="{{ $image }}" alt="{{ $name }}">
    </div>

    <!-- fanclub content  -->
    <div class="event-content">
        <div class="event-title mb-15">
            <h3 class="title">
                <strong>{{ $name }}</strong>
            </h3>
            <span class="ticket-price yellow-color">{{ $category }}</span>
        </div>
        <p class="discription-text mb-30">
            {{ $description }}
        </p>
        <div class="event-info-list ul-li clearfix d-flex justify-content-end">
            <a href="#!" class="tickets-details-btn">
                join
            </a>
        </div>
    </div>
</div>
