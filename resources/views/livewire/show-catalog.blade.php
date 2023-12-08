<section class="padding-four-lr  no-padding-top lg-padding-two-lr sm-no-padding-lr">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 filter-content">
                <ul class="portfolio-classic portfolio-wrapper grid grid-loading grid-6col xl-grid-6col lg-grid-4col md-grid-3col sm-grid-2col xs-grid-1col gutter-extra-large text-center">
                    <li class="grid-sizer"></li>

                    @foreach($catalog as $item)
                    <!-- start portfolio item -->
                    <li class="grid-item photography wow animate__fadeIn">
                        <div class="portfolio-box border-radius-6px box-shadow-large">
                            <div class="portfolio-image bg-gradient-black-blue">
                                <img src="/storage/catalog/{{$item->image}}" alt="" />
                                <div class="portfolio-hover align-items-center justify-content-center d-flex h-100">
                                    <div class="portfolio-icon">
                                        <a href="/catalog/{{$item->id}}" class="text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="feather icon-feather-sliders" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-caption bg-white padding-30px-tb lg-padding-20px-tb">
                                <a href="/catalog/{{$item->id}}"><span class="alt-font text-extra-dark-gray font-weight-500">{{$item->title}}</span></a>
                                <span class="text-medium d-block margin-one-bottom">{{$item->price}} руб./м<sup>2</sup></span>
                            </div>
                        </div>
                    </li>
                    <!-- end portfolio item -->
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
