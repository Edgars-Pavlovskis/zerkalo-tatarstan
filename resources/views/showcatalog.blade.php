@extends('layouts.karim')

@section('content')

        <!-- start page title -->
        <section class="half-section parallax py-0" data-parallax-background-ratio="0.5" style="">
            <div class="container">
                <div class="row align-items-stretch justify-content-center extra-small-screen">
                    <div class="col-12 page-title-extra-small text-center d-flex justify-content-center flex-column">
                        <h2 class="alt-font text-gradient-sky-blue-pink  margin-15px-bottom d-inline-block">{{$catalog->title}}</h2>
                        <h6 class="text-extra-light-gray  alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">{{$catalog->description}}</h6>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->




        <section class="big-section wow animate__fadeIn pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 shopping-content d-flex flex-column flex-lg-row align-items-md-center">
                        <div class="w-60 md-w-100">
                            <div class="product-images-box lightbox-portfolio row">
                                <div class="col-12 col-lg-9 position-relative px-lg-0 order-lg-2 product-image md-margin-10px-bottom">
                                    <div class="swiper-container product-image-slider" data-slider-options='{ "spaceBetween": 10, "watchOverflow": true, "navigation": { "nextEl": ".slider-product-next", "prevEl": ".slider-product-prev" }, "thumbs": { "swiper": { "el": ".product-image-thumb", "slidesPerView": "auto", "spaceBetween": 15, "direction": "vertical", "navigation": { "nextEl": ".swiper-thumb-next", "prevEl": ".swiper-thumb-prev" } } } }' data-thumb-slider-md-direction="horizontal">
                                        <div class="swiper-wrapper">
                                            <!-- start slider item -->
                                            <div class="swiper-slide">
                                                <a class="gallery-link" href="/storage/catalog/{{$catalog->image}}"><img class="w-100" src="/storage/catalog/{{$catalog->image}}" alt=""></a>
                                            </div>
                                            <!-- end slider item -->


                                            @foreach($catalog->gallery as $item)
                                                <!-- start slider item -->
                                                <div class="swiper-slide">
                                                    <a class="gallery-link" href="/{{$item}}"><img class="w-100" src="/{{$item}}" alt=""></a>
                                                </div>
                                                <!-- end slider item -->
                                            @endforeach

                                        </div>
                                    </div>
                                    <div class="slider-product-next swiper-button-next text-extra-dark-gray"><i class="fa fa-chevron-right"></i></div>
                                    <div class="slider-product-prev swiper-button-prev text-extra-dark-gray"><i class="fa fa-chevron-left"></i></div>
                                </div>
                                <div class="col-12 col-lg-3 order-lg-1 position-relative single-product-thumb md-margin-50px-bottom sm-margin-40px-bottom">
                                    <div class="swiper-container product-image-thumb slider-vertical padding-15px-lr padding-45px-bottom md-no-padding left-0px">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"><img class="w-100" src="/storage/catalog/{{$catalog->image}}" alt=""></div>
                                            @foreach($catalog->gallery as $item)
                                                <div class="swiper-slide"><img class="w-100" src="/{{$item}}" alt=""></div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="swiper-thumb-next-prev text-center">
                                        <div class="swiper-button-prev swiper-thumb-prev"><i class="fa fa-chevron-up"></i></div>
                                        <div class="swiper-button-next swiper-thumb-next"><i class="fa fa-chevron-down"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-40 md-w-100 product-summary padding-7-rem-left lg-padding-5-rem-left md-no-padding-left">
                            <div class="d-flex align-items-center margin-1-half-rem-tb md-margin-1-half-rem-tb">
                                <div class="flex-grow-1">
                                    <h6 class="mb-0">Цена: <b><span class="text-white">{{$catalog->price}} руб./м<sup>2</sup></span></b> </h6>
                                </div>
                            </div>



                            @livewire('calculator', ['id' => $catalog->id])


                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
