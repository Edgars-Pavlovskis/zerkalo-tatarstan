<div>
    <div class="">
        <label class="">Ширина (миллиметры)</label>
        <input class="input-text " type="number" name="quantity" wire:model.live='height' >
    </div>
    <div class="">
        <label class="">Длинна (миллиметры)</label>
        <input class="input-text " type="number" name="quantity" wire:model.live='width' >
    </div>

    <div class="">
        <label><input type="checkbox" name="checkbox" wire:model.live='processing' value="">&nbsp;&nbsp;Нужна обработка кромки</label>
    </div>

    <div class="">
        <label class=""><b>Площядь:</b></label> <span class="text-white"><b>{{$area}}</b> мм<sup>2</sup></span>
        <br>
        <label class=""><b>Сумма за материал:</b></label> <span class="text-white"><b>{{max(150, round($area*$catalog->price,2))}}</b> руб.</span>
        @if ($processing)
            <hr>
            <label class=""><b>Цена обработки:</b></label> <span class="text-white"><b>{{$catalog->corners_price}}</b> руб./метр</span>
            <br>
            <label class=""><b>Общая длинна обрабьотки:</b></label> <span class="text-white"><b>{{$length}}</b> метра(-ов)</span>
            <br>
            <label class=""><b>Сумма за обработку:</b></label> <span class="text-white"><b>{{round($length*$catalog->corners_price,2)}}</b> руб.</span>
            <hr><h6>Сумма к оплате: <b><span class="text-white">{{round((max(150, round($area*$catalog->price,2)))+($length*$catalog->corners_price),2)}}</span></b> руб.</h6>
        @else
            <hr><h6>Сумма к оплате: <b><span class="text-white">{{round((max(150, round($area*$catalog->price,2))),2)}}</span></b> руб.</h6>
        @endif
        <p><i>(Минимальная ценна за изделие - <b>150р</b>.)</i></p>
    </div>



<!--
    <div class="margin-25px-top">
        <a href="#" class="text-uppercase text-extra-small alt-font margin-20px-right font-weight-500 "><i class="feather icon-feather-heart align-middle margin-5px-right"></i>Add to wishlist</a>
        <a href="#" class="text-uppercase text-extra-small alt-font margin-20px-right font-weight-500 "><i class="feather icon-feather-shuffle align-middle margin-5px-right"></i>Add to compare</a>
    </div>
-->
</div>
