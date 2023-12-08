@extends('layouts.backend')


@section('content')


 <!-- Hero -->
 <div class="bg-body-light">
    <div class="content content-full">
      <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
        <div class="flex-grow-1">
          <h1 class="h3 fw-bold mb-1">
            Каталог материалов
          </h1>
          <h2 class="fs-base lh-base fw-medium text-muted mb-0">
            Управление содержимым каталога
          </h2>
        </div>
        <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-alt">

            <li class="breadcrumb-item">
                <a class="link-fx" href="/pages/catalog">Каталог материалов</a>
              </li>
              <li class="breadcrumb-item" aria-current="page">
                Подтверждение удаления
              </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- END Hero -->


  <div class="content">
    <div class="block block-rounded">
        <div class="block-content pb-3">
            <p class="p-3 bg-warning-light text-warning">Уверены что хотите удалить запись каталога "<b>{{$catalog->title}}</b>"?</p>
            <a href="/pages/catalog/delete/{{$catalog->id}}/confirm"><button type="button" class="btn rounded-0 btn-outline-warning">Удалить</button></a>
            <a href="/pages/catalog"><button type="button" class="btn rounded-0 btn-outline-secondary">Отмена</button></a>

        </div>
    </div>
  </div>

@endsection
