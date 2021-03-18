<!-- event-message - start -->
<div class="event-message clearfix">
    <div class="row">
        <div class="col-sm-2">
            <div class="row">
                <img src="{{ $photopath }}" alt="Avatar" class="right event-chat-message-avatar">
                <div class="col">
                    <span class="time-left"> &nbsp;{{ $time }}</span>
                </div>
            </div>
            <div class="row  pt-2">
            {{ $username }}
            </div>
        </div>
        <div class="col-sm-10">
            <p>{{ $comment }}</p>
        </div>
    </div>
</div>
<!-- event-message - end -->