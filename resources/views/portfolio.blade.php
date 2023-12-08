@extends('layouts.karim')

@section('content')





        <!-- start page title -->
        <section class="half-section parallax pb-0" data-parallax-background-ratio="0.5" style="">
            <div class="container">
                <div class="row align-items-stretch justify-content-center extra-small-screen">
                    <div class="col-12 col-xl-6 col-lg-7 col-md-8 page-title-extra-small text-center d-flex justify-content-center flex-column">
                        <h1 class="alt-font text-gradient-sky-blue-pink margin-15px-bottom d-inline-block">Portfolio justified gallery</h1>
                        <h2 class="text-gray alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">Наши работы</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start section -->
        <section class="wow animate__fadeIn py-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 lightbox-portfolio p-0">
                        <div class="justified-gallery" data-justified-options='{ "rowHeight": 500, "maxRowHeight": false, "captions": false, "margins": 15, "waitThumbnailsLoad": true }'>
                            @foreach(File::glob(public_path('storage/portfolio').'/*') as $path)
                                <!-- start portfolio item -->
                                <div class="bg-gradient-fast-blue-purple wow animate__fadeIn">
                                    <a href="{{ str_replace(public_path(), '', $path) }}" class="gallery-link" >
                                        <img src="{{ str_replace(public_path(), '', $path) }}" alt="Armchair">
                                    </a>
                                </div>
                                <!-- end portfolio item -->
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->




@endsection
