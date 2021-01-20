@extends('autoveod.layout')

@section('content')
<div class="flex justify-between border-b pb-4 px-4">
        <h1 class="text-2xl pb-4">Veotellimus {{$autoveod->id}}</h1>
        <a href="{{route('autoveods.index')}}" class="mx-5 py-2 text-gray-400 cursor-pointer text-white">
        <span class="fas fa-arrow-left"></span></a>
        </div>
        <div>

        <div class="py-1">
        <h3 class="text-lg">Algus: {{$autoveod->algus}}</h3>
        </div>
        <div class="py-1">
        <h3 class="text-lg">Otspunkt: {{$autoveod->otspunkt}}</h3>
        </div>
        <div class="py-1">
        <h3 class="text-lg">Aeg: {{$autoveod->aeg}}</h3>
        </div>
        @if($autoveod->nr > 0)
        <div class="py-1">
        <h3 class="text-lg">Auto Number: {{$autoveod->nr}}</h3>
        </div>
            @endif
        @if($autoveod->juht != "Puudub" && $autoveod->juht != "")
        <div class="py-1">
        <h3 class="text-lg">Juht: {{$autoveod->juht}}</h3>
        </div>
            @endif
        @if($autoveod->valmis)
        <div class="py-1">
        <h3 class="text-lg">Valmis: Jah</h3>
        </div>
        @else
        <div class="py-1">
        <h3 class="text-lg">Valmis: Ei</h3>
        </div>
            @endif
        </div>
@endsection