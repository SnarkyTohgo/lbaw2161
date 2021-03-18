<section id="breadcrumb-section" class="breadcrumb-section clearfix">
    <div class="jarallax" style="background-image: url({{ $image }});">
        <div class="overlay-black">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <!-- breadcrumb-title - start -->
                        <div class="breadcrumb-title text-center mb-50">
                            <span class="sub-title">{{ $subtitle }}</span>
                            <h2 class="big-title"><strong>{{ $title }}</strong></h2>
                        </div>

                        <!-- breadcrumb-list - start -->
                        <div class="breadcrumb-list">
                            <ul>
                                <li class="breadcrumb-item"><a href="/" class="breadcrumb-link">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $page }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>