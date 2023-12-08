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
            @if (isset($catalog) && isset($catalog->id)) {{$catalog->title}} @else Каталог материалов @endif
          </h1>
          <h2 class="fs-base lh-base fw-medium text-muted mb-0">
            @if (isset($catalog) && isset($catalog->id)) {{$catalog->description}} @else Управление содержимым каталога  @endif
          </h2>
        </div>
        <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-alt">

            @if (isset($catalog) && isset($catalog->id))
                <li class="breadcrumb-item">
                  <a class="link-fx" href="/pages/catalog">Каталог материалов</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">
                  Редактирование
                </li>
                <li class="breadcrumb-item" aria-current="page">
                  {{$catalog->title}}
                </li>
            @else
                <li class="breadcrumb-item">
                  <a class="link-fx" href="/pages/catalog">Каталог материалов</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">
                  Список
                </li>
            @endif


          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">




    @if (isset($catalog) && !isset($catalog->id))
        <!-- Partial Table -->
        <div class="block block-rounded">



            <div class="block-content">
                <a href="/pages/catalog/0">
                    <button type="button" class="btn btn-alt-success me-1 mb-3">
                        <i class="fa fa-fw fa-plus me-1"></i> Добавить
                    </button>
                </a>
            <table class="table table-bordered table-striped table-vcenter">
                <thead>
                <tr>
                    <th class="text-center" style="width: 100px;">
                    <i class="far fa-image"></i>
                    </th>
                    <th>Название</th>
                    <th class="d-none d-md-table-cell" style="width: 35%;">Описание</th>
                    <th class="d-none d-md-table-cell" style="width: 10%;">Статус</th>
                    <th class="text-center" style="width: 100px;">Действия</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($catalog as $item)
                        <tr>
                            <td class="text-center">
                            <img class="img-avatar img-avatar48" src="{{asset('storage/catalog/'.$item->image)}}" onerror="this.src='/images/apple-touch-icon-114x114.png'"  alt="">
                            </td>
                            <td class="fw-semibold fs-sm">
                            <a href="/pages/catalog/{{$item->id}}">{{$item->title}}</a>
                            </td>
                            <td class="d-none d-md-table-cell fs-sm">{{$item->description}}</td>
                            @if($item->active == "1")
                                <td class="d-none d-sm-table-cell">
                                    <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">Опубликовано</span>
                                </td>
                            @else
                                <td class="d-none d-sm-table-cell">
                                    <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Выключено</span>
                                </td>
                            @endif
                            <td class="text-center">
                            <div class="btn-group">
                                <a href="/pages/catalog/{{$item->id}}">
                                    <button type="button" class="btn btn-sm btn-alt-secondary " data-bs-toggle="tooltip" title="Edit" >
                                     <i class="fa fa-fw fa-pencil-alt"></i>
                                    </button>
                                </a>
                                <a href="/pages/catalog/delete/{{$item->id}}">
                                    <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Delete">
                                    <i class="fa fa-fw fa-times"></i>
                                    </button>
                                </a>
                            </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            </div>
        </div>
        <!-- END Partial Table -->
    @else

    <!-- Partial Table -->
    <div class="block block-rounded">
        <div class="block-content pt-3">

            <a href="/pages/catalog">
                <button type="button" class="btn btn-alt-secondary me-1 mb-3">
                    <i class="far fa-circle-left me-1"></i> Назад
                </button>
            </a>

            <form action="{{ route('updateCatalog', isset($catalog->id)?$catalog->id:0) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                @endif

                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" value="1" id="active" name="active" {{(!isset($catalog->active) || $catalog->active == 1) ? 'checked=""' : ''}}>
                    <label class="form-check-label" for="active">Активный</label>
                </div>

                <div class="form-group mt-2">
                  <label for="title"><b>Название</b></label>
                  <input type="text" class="form-control" id="title" name="title" value="{{ isset($catalog->title)?$catalog->title:'' }}" required>
                </div>
                <div class="form-group mt-2">
                  <label for="body"><b>Описание</b></label>
                  <textarea class="form-control" id="body" name="description" rows="3" required>{{ isset($catalog->description)?$catalog->description:'' }}</textarea>
                </div>


                @livewire('delete-catalog-picture', ['catalog_id' => isset($catalog->id)?$catalog->id:0])


                <div class="form-group mt-2">
                    <label for="price"><b>Цена м<sup>2</sup> </b></label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ isset($catalog->price)?$catalog->price:0 }}" required>
                </div>

                <div class="form-group mt-2">
                    <label for="corners_price"><b>Цена полировки краев</b></label>
                    <input type="text" class="form-control" id="corners_price" name="corners_price" value="{{ isset($catalog->corners_price)?$catalog->corners_price:0 }}" required>
                </div>


                <button type="submit" class="btn my-3 btn-primary">
                    @if (isset($catalog->id))
                        Обновить
                    @else
                        Создать
                    @endif
                </button>

            </form>

            @livewire('admin-catalog-gallery', ['id' => isset($catalog->id)?$catalog->id:0])

        </div>
    </div>
    <!-- END Partial Table -->






    @endif






  </div>
  <!-- END Page Content -->


@endsection
