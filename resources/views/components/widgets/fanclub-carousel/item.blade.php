<div class="item">
    <div class="expertise-item">
        <div class="image image-wrapper">
            <img src="{{ $image }}" alt="{{ $fanclubName }}">
            <a href="{{ $slug }}" class="plus-effect"></a>
        </div>
        <div class="content">
            <h3 class="title">{{ $fanclubName }}</h3>
            @if(Request::getPathInfo() === '/')
                <a href="#">join <strong>now</strong></a>
            @endif
        </div>
    </div>
</div>