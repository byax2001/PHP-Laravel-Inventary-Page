@props(['type'=>'info'])

@php
    switch($type){
        case 'info':
            $talert ='bg-blue-100 border-blue-500 text-blue-700';
            break;
        case 'danger':
            $talert ='bg-red-100 border-red-500 text-red-700';
            break;
        case 'success':
            $talert ='bg-green-100 border-green-500 text-green-700';
            break;
        case 'warning':
            $talert ='bg-orange-100 border-orange-500 text-orange-700';
            break;
        default:
            $talert ='bg-blue-100 border-blue-500 text-blue-700';
    }
@endphp
{{-- 

PRIMERA FORMA PARA HACERLO, AGREGANDO UNA VARIABLE A LA CLASE

<div class="p-4 {{$talert}}" role="alert">
    <p class="font-bold">{{$title}}</p>
    <p>{{$bodya ?? 'Se coloca esto en caso no se mande nada de esta variable'}}</p>
</div>
--}}

{{-- SEGUNDA FORMA PARA HACERLO, USANDO EL ATRIBUTO MERGE Y USANDO CLASS TAMBIEN EN DONDE DICHO COMPONENTE SE ESTA INSTANCIANDO 
A TRAVES DE ATTRIBUTES ES QUE SE OBTIENEN LOS PARAMETROS CLASS DE DONDE SE ESTA INSTANCIANDO ESTE COMPONENTE--}}
<div {{ $attributes->merge(['class'=>'p-4 '.$talert]) }}   role="alert">
    <p class="font-bold">{{$title}}</p>
    <p>{{$bodya ?? 'Se coloca esto en caso no se mande nada de esta variable'}}</p>
</div>
