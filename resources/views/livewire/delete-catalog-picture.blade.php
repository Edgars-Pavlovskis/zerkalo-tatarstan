
<div class="form-group mt-2">
    @if (isset($catalog_data->image) && strlen($catalog_data->image)>0)
        <div class="row items-push">
            <div class="col-md-2">
                <div class="block block-rounded h-100 mb-0">
                <div class="block-content p-1">
                    <div class="options-container">
                    <img class="img-fluid options-item" src="{{asset('storage/catalog/'.$catalog_data->image)}}" onerror="this.src='/images/apple-touch-icon-114x114.png'" alt="">
                    </div>
                </div>
                <div class="block-content">
                    <div class="mb-1">
                    <div class="dropdown">
                        <button type="button" class="btn btn-alt-danger dropdown-toggle w-100" id="dropdown-default-alt-danger" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Удалить
                        </button>
                        <div class="dropdown-menu fs-sm" aria-labelledby="dropdown-default-alt-danger" style="">
                            <a class="dropdown-item" href="javascript:void(0)" wire:click="delete()">Удалить</a>
                        </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    @else
        <label class="form-label" for="catalogImage"><b>Титульная картинка</b></label>
        <input class="form-control" type="file" name="preview" id="catalogImage">
    @endif
</div>
