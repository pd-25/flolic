@extends('frontend.main.layout')
@section('content')
    <section id="inn-banner-slider" class="banner-slider">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active"
                    style="background-image: url('{{ asset('frontend/images/inn-banner.jpg') }}');">
                    <canvas id="canvas"></canvas>
                    <div class="carousel-caption inn-cus-cap">
                        <h1>Our Project</h1>
                        <ul class="breadcrumb">
                            <li><a href="index.html"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Home</a>
                            </li>
                            <li>Our Project</li>
                        </ul>
                    </div>
                </div>


            </div>

        </div>
    </section>
    <!-- Page Content -->


    <section id="welcome-section">
        <div class="container">
            <div class="row">
                @foreach ($projects as $project)
                    <div class="col-lg-4 col-md-4 col-sm mb-4">
                        <div class="gallery-img-box">
                            @if (isset($project->project_images) && !empty($project->project_images) && File::exists(public_path('storage/ProjectImages/' . $project->project_images->first()->image)))
                                <img 
                                    src="{{ asset('storage/ProjectImages/' . $project->project_images->first()->image) }}" alt=""
                                    class="img-fluid">
                            @else
                                <img src="{{ asset('frontend/images/gal-pic333.jpg') }}" class="img-fluid">
                            @endif
                            <h3><a href="{{ route('single_project', $project->slug) }}">{{ $project->name }}</a></h3>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-lg-4 col-md-4 col-sm mb-4">
                    <div class="gallery-img-box">
                        <a href="single-project.html"><img src="{{ asset('frontend/images/gal-pic2.jpg') }}"
                                class="img-fluid"></a>
                        <h3><a href="single-project.html">Aircraft Musium</a></h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm mb-4">
                    <div class="gallery-img-box">
                        <a href="single-project.html"><img src="{{ asset('frontend/images/gal-pic3.jpg') }}"
                                class="img-fluid"></a>
                        <h3><a href="single-project.html">Project Name</a></h3>
                    </div>
                </div> --}}

            </div>
        </div>
    </section>
@endsection
