<div {{ $attributes->merge(['class'=>'p-4 '.$talert]) }}   role="alert">
    <p class="font-bold">{{$title}}</p>
    <p>{{$bodya ?? 'Se coloca esto en caso no se mande nada de esta variable'}}</p>
</div>
