<div class="swiper-wrapper">

    @if (empty($banners))
        <!-- start slider item -->
        <div class="swiper-slide cover-background" style="background-image: url('https://via.placeholder.com/1920x1160')">
            <div class="overlay-bg bg-transparent-gradient-smoky-black"></div>
        </div>
        <!-- end slider item -->
    @else
        @foreach($banners as $path)
            <!-- start slider item -->
            <div class="swiper-slide cover-background" style="background-image: url('{{ str_replace(public_path(), '', $path) }}')">
                <div class="overlay-bg bg-transparent-gradient-smoky-black"></div>
            </div>
            <!-- end slider item -->
        @endforeach
    @endif






</div>
