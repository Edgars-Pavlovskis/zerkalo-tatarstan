@extends('layouts.backend')

@section('css')
  <link rel="stylesheet" href="{{ asset('js/plugins/dropzone/min/basic.min.css') }}">
  <link rel="stylesheet" href="{{ asset('js/plugins/dropzone/min/dropzone.min.css') }}">
@endsection

@section('js')
  <!-- jQuery (required for Slick Slider plugin) -->
  <script src="{{ asset('js/lib/jquery.min.js') }}"></script>

  <!-- Page JS Plugins -->
  <script src="{{ asset('js/plugins/dropzone/min/dropzone-amd-module.min.js') }}"></script>

@endsection

@section('content')
  <!-- Hero -->
  <div class="bg-body-light">
    <div class="content content-full">
      <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
        <div class="flex-grow-1">
          <h1 class="h3 fw-bold mb-1">
            Беннеры
          </h1>
          <h2 class="fs-base lh-base fw-medium text-muted mb-0">
            Сдесь вы можете добавлять или удалять банеры для первой странички
          </h2>
        </div>
        <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-alt">
            <li class="breadcrumb-item">
              <a class="link-fx" href="javascript:void(0)">Управление контентом</a>
            </li>
            <li class="breadcrumb-item" aria-current="page">
                Баннеры
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- END Hero -->

  <!-- Page Content -->
    @livewire('admin-banners')
  <!-- END Page Content -->
@endsection
