@extends('frontend.main.layout')
@section('content')
    <section id="inn-banner-slider" class="banner-slider">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                {{-- <div class="carousel-item active" style="background-image: url('images/inn-banner.jpg');"> --}}
                <div class="carousel-item active"
                    style="background-image: url('{{ asset('frontend/images/inn-banner.jpg') }}');">

                    <canvas id="canvas"></canvas>
                    <div class="carousel-caption inn-cus-cap">
                        <h1>{{ $project->name }}</h1>
                        <ul class="breadcrumb">
                            <li><a href="index.html"><i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                    Home</a></li>
                            <li><a href="our-project.html"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Our
                                    Project</a></li>
                            <li>{{ $project->name }}</li>
                        </ul>
                    </div>
                </div>


            </div>

        </div>
    </section>
    <!-- Page Content -->


    <section id="welcome-section">
        <div class="container">
        <div class="row portfolio-item">
    @foreach ($project->project_images as $imageP)
        <div class="item category1 col-lg-4 col-md-4 col-sm mb-4">
            @if (isset($imageP) && !empty($imageP->image) && File::exists(public_path('storage/ProjectImages/' . $imageP->image)))
                <a href="{{ asset('storage/ProjectImages/' . $imageP->image) }}" class="fancylight popup-btn"
                    data-fancybox="{{ $project->id }}" data-caption="{{ $project->name }}">
                    <img class="img-fluid" src="{{ asset('storage/ProjectImages/' . $imageP->image) }}" alt="">
                </a>
            @else
                <a href="images/gallery/gal-pic1.jpg" class="fancylight popup-btn"
                    data-fancybox="{{ $project->id }}" data-caption="{{ $project->name }}">
                    <img class="img-fluid" src="images/gallery/gal-pic1.jpg" alt="">
                </a>
            @endif
        </div>
    @endforeach
</div>

        </div>
    </section>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />

@push('scripts')
      <script>
        $(document).ready(function() {
            $(".fancylight").fancybox({
                loop: true,
                buttons: [
                    'slideShow',
                    'fullScreen',
                    'thumbs',
                    'close'
                ]
            });
        });
    </script>
@endpush
