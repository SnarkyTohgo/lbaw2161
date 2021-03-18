<li class="nav-item">
    <a class="nav-link" id=" {{ $tabMenuId }} " data-toggle="tab" href="#{{ $tabRef }}" aria-expanded="true">
        <span class="image">
            <img src="{{ $image }}" alt=" {{ $eventName }} ">
        </span>
        <span class="title">
            <strong class="yellow-color"> {{ $eventName }} </strong>
        </span>
        <small class="sub-title"> {{ $eventDate }} </small>
        <small class="sub-title"> &nbsp {{ $participantsNo }} </small>
        <small class="price yellow-color"> {{ $fanclubFilter }} </small>
    </a>
</li>