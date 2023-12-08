@extends('layouts.karim')

@section('content')
    <!-- start slider section -->
    <section class="py-0 home-creative-agency">
        <div class="container-fluid no-padding-lr">
            <div class="row g-0">
                <div class="col-md-12 position-relative full-screen md-landscape-h-600px">
                    <div class="swiper-container vertical-white-move slider-vertical" data-slider-options='{ "slidesPerView": 1, "spaceBetween": 0, "direction": "vertical", "autoplay": { "delay": 2000, "disableOnInteraction": false }, "pagination": { "el": ".swiper-vertical-pagination", "clickable": true }, "autoplay": { "delay": 2000, "disableOnInteraction": true }, "loop": false, "iOSEdgeSwipeThreshold": 200, "keyboard": { "enabled": true, "onlyInViewport": true }, "touchReleaseOnEdges": true }' data-slider-md-direction="horizontal">

                        @livewire('show-banners')

                        <!-- start slider pagination -->
                        <div class="swiper-pagination swiper-vertical-pagination swiper-pagination-medium swiper-light-pagination d-flex flex-column align-items-center"></div>
                        <!-- end slider pagination -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end slider section -->





    <!-- start section -->
    <section class="extra-big-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5 md-margin-20px-bottom wow animate__fadeIn">
                    <span class="alt-font font-weight-600 text-copper-red text-extra-medium text-uppercase d-block letter-spacing-1px">Индивидуальный подход к каждому клиенту</span>
                </div>
                <div class="col-12 col-md-7 wow animate__fadeIn" data-wow-delay="0.2s">
                    <h5 class="alt-font w-95 line-height-50px md-line-height-36px"><span class="font-weight-600 text-white">Мы не предлагаем готовых решений , мы работали индивидуально с вашими размерами.</span></h5>
                </div>
            </div>
            <div class="row home-creative-agency client-logo-style-06 margin-9-half-rem-top md-margin-6-rem-top sm-margin-4-rem-top justify-content-center">
                <!-- start client logo item -->
                <div class="col-10 col-md-3 col-sm-6 border-right border-bottom border-color-white-transparent text-center xs-no-border-right wow animate__fadeIn">
                    <div class="client-box padding-4-rem-tb lg-padding-3-rem-tb xs-padding-4-rem-tb">
                        <a href="javascript:void()"><img src="images/preview/1.jpg" alt=""></a>
                    </div>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col-10 col-md-3 col-sm-6 border-right border-bottom border-color-white-transparent text-center sm-no-border-right wow animate__fadeIn" data-wow-delay="0.2s">
                    <div class="client-box padding-4-rem-tb lg-padding-3-rem-tb xs-padding-4-rem-tb">
                        <a href="javascript:void()"><img src="images/preview/2.jpg" alt=""></a>
                    </div>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col-10 col-md-3 col-sm-6 border-right border-bottom border-color-white-transparent text-center xs-no-border-right wow animate__fadeIn" data-wow-delay="0.3s">
                    <div class="client-box padding-4-rem-tb lg-padding-3-rem-tb xs-padding-4-rem-tb">
                        <a href="javascript:void()"><img src="images/preview/3.jpg" alt=""></a>
                    </div>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col-10 col-md-3 col-sm-6 border-bottom border-color-white-transparent text-center wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="client-box padding-4-rem-tb lg-padding-3-rem-tb xs-padding-4-rem-tb">
                        <a href="javascript:void()"><img src="images/preview/4.jpg" alt=""></a>
                    </div>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col-10 col-md-3 col-sm-6 border-right border-color-white-transparent text-center sm-border-bottom xs-no-border-right wow animate__fadeIn" data-wow-delay="0.8s">
                    <div class="client-box padding-4-rem-tb lg-padding-3-rem-tb xs-padding-4-rem-tb">
                        <a href="javascript:void()"><img src="images/preview/5.jpg" alt=""></a>
                    </div>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col-10 col-md-3 col-sm-6 border-right border-color-white-transparent text-center sm-no-border-right sm-border-bottom wow animate__fadeIn" data-wow-delay="0.7s">
                    <div class="client-box padding-4-rem-tb lg-padding-3-rem-tb xs-padding-4-rem-tb">
                        <a href="javascript:void()"><img src="images/preview/6.jpg" alt=""></a>
                    </div>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col-10 col-md-3 col-sm-6 border-right border-color-white-transparent text-center xs-no-border-right xs-border-bottom wow animate__fadeIn" data-wow-delay="0.6s">
                    <div class="client-box padding-4-rem-tb lg-padding-3-rem-tb xs-padding-4-rem-tb">
                        <a href="javascript:void()"><img src="images/preview/7.jpg" alt=""></a>
                    </div>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col-10 col-md-3 col-sm-6 border-color-white-transparent text-center wow animate__fadeIn" data-wow-delay="0.5s">
                    <div class="client-box padding-4-rem-tb lg-padding-3-rem-tb xs-padding-4-rem-tb">
                        <a href="javascript:void()"><img src="images/preview/8.jpg" alt=""></a>
                    </div>
                </div>
                <!-- end client logo item -->
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="extra-big-section cover-background" style="background-image: url('images/home-creative-agency-testimonials-bg.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5 md-margin-20px-bottom wow animate__fadeIn">
                    <span class="alt-font font-weight-600 text-copper-red text-extra-medium text-uppercase d-block letter-spacing-1px">Отзывы наших клиентов</span>
                </div>
                <div class="col-12 col-xl-6 col-md-7 wow animate__fadeIn" data-wow-delay="0.2s">
                    <div class="swiper-container white-move" data-slider-options='{ "slidesPerView": 1, "loop": true, "autoplay": { "delay": 4500, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true } }'>
                        <div class="swiper-wrapper">
                            <!-- start testimonial item -->
                            <div class="swiper-slide">
                                <h6 class="alt-font line-height-44px w-95 margin-4-rem-bottom sm-line-height-34px sm-w-100">Я очень доволен работой фирмы! Заказывал стеклянные панели для моей кухни, и результат меня приятно удивил. Материал высочайшего качества, все размеры совершенно точные, а кромки безупречно обработаны. Спасибо, что сделали мою кухню стильной и безопасной!</h6>
                                <h6 class="alt-font font-weight-300 text-white margin-5px-bottom"><span class="font-weight-600">Александр</span> Петрович</h6>
                            </div>
                            <!-- end testimonial item -->
                            <!-- start testimonial item -->
                            <div class="swiper-slide">
                                <h6 class="alt-font line-height-44px w-95 margin-4-rem-bottom sm-line-height-34px sm-w-100">Прекрасная компания, которая точно знает, как работать со стеклом! Заказал зеркала под размер для ванной комнаты, и они превзошли все мои ожидания. Очень аккуратная обработка кромок, без единого дефекта. Профессионализм на высшем уровне. Спасибо за вашу тщательность и внимание к деталям!</h6>
                                <h6 class="alt-font font-weight-300 text-white margin-5px-bottom"><span class="font-weight-600">Елена</span> Смирнова</h6>
                            </div>
                            <!-- end testimonial item -->
                            <!-- start testimonial item -->
                            <div class="swiper-slide">
                                <h6 class="alt-font line-height-44px w-95 margin-4-rem-bottom sm-line-height-34px sm-w-100">Хочу выразить благодарность фирме за оперативность и качество! Мы заказывали нестандартные стеклянные полки для офиса, и все было выполнено в срок и идеально подходит по размерам. Качество стекла отличное, а обработка кромок безопасна для наших сотрудников. Рекомендую данную компанию всем, кто ценит профессионализм и ответственный подход!</h6>
                                <h6 class="alt-font font-weight-300 text-white margin-5px-bottom"><span class="font-weight-600">Дмитрий</span> Иванов</h6>
                            </div>
                            <!-- end testimonial item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

@endsection
