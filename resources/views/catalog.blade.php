@extends('layouts.karim')

@section('content')

        <!-- start page title -->
        <section class="half-section parallax py-0" data-parallax-background-ratio="0.5" style="">
            <div class="container">
                <div class="row align-items-stretch justify-content-center extra-small-screen">
                    <div class="col-12 page-title-extra-small text-center d-flex justify-content-center flex-column">
                        <h1 class="alt-font text-gradient-sky-blue-pink  margin-15px-bottom d-inline-block">Shop left sidebar</h1>
                        <h2 class="text-extra-light-gray  alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">Every new print and color of the season</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->




        <!-- start section -->
        <section class="shopping-left-side-bar pt-0">

            @livewire('show-catalog')

        </section>
        <!-- end section -->

@endsection
