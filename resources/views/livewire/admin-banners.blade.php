<div class="content">

    <div class="col-12">
      <!-- Info -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Перекиньте новые баннеры в поле или нажмите на него, что бы добавить. (Размеры: 1920х1160 )</h3>
        </div>
        <div class="block-content fs-sm text-muted">
          <form method="post" class="dropzone dz-clickable mb-3" id="my-great-dropzone" action="{{ route('bannerUpload') }}" enctype="multipart/form-data">
              @csrf
              <div class="dz-default dz-message">
                  <button class="dz-button" type="button">Drop files here to upload</button>
              </div>
          </form>
          <script>
          Dropzone.options.myGreatDropzone = {
              maxFilesize: 5,
              acceptedFiles: '.jpg',
              resizeWidth: 1920,
              resizeHeight: 1160,
              resizeMethod: "crop",
              queuecomplete: function() { @this.call('$refresh'); }
          };
          </script>
        </div>
      </div>
      <!-- END Info -->


      <!-- Info -->
      <div class="block block-rounded">
          <div class="block-header block-header-default">
            <h3 class="block-title">Вашы баннеры</h3>
          </div>
          <div class="block-content fs-sm text-muted mb-4">
              <div class="row items-push">
                    @if (empty($banners))
                        <h2 class="fs-base lh-base fw-medium text-muted mt-0 pt-0">
                            <i>В систему не добавлен не один баннер. Для добавления используйте панель добавления баннеров которая расположена выше.</i>
                        </h2>
                    @else
                        @foreach($banners as $path)
                            <div class="col-md-2 animated fadeIn">
                                <div class="options-container ">
                                    <img class="img-fluid options-item" src="{{ str_replace(public_path(), '', $path) }}" alt="">
                                    <div class="text-center mt-1"><a class="btn btn-sm btn-alt-secondary" wire:click="removeBanner('{{str_replace(public_path(), '', $path)}}')" href="javascript:void(0)"><i class="fa fa-times text-danger me-1"></i> Удалить</a></div>
                                </div>
                            </div>
                        @endforeach
                    @endif

              </div>
          </div>

        </div>
        <!-- END Info -->


    </div>

</div>
