@extends('autoveod.layout')

@section('content')
<div class="flex justify-between border-b pb-4 px-4">
        <h1 class="text-2xl pb-4">Tellimuse muutmine</h1>
        <a href="{{route('autoveods.index')}}" class="mx-5 py-2 text-gray-400 cursor-pointer text-white">
        <span class="fas fa-arrow-left"></span></a>
        </div>
        <x alert />
        <form method="post" action="{{route('autoveods.update',$autoveod->id)}}" class="py-5">
        @csrf
        @method('patch')
        <div class="py-1">
            <input type="text" name="algus" value="{{$autoveod->algus}}" class="py-2 px-2 border rounded" placeholder="Algus" />
        </div>
        <div class="py-1">
            <input type="text" name="otspunkt" value="{{$autoveod->otspunkt}}" class="py-2 px-2 border rounded" placeholder="Otspunkt" />
        </div>
        <div class="py-1">
            <input type="text" name="aeg" value="{{$autoveod->aeg}}" class="py-2 px-2 border rounded" placeholder="Aeg" />
        </div>

        <div class="py-1">
            <h3 class="text-2xl pb-1">Lisa:</h3>
        </div>

    @if($autoveod->nr < 1)
            <input type="text" name="nr" class="py-2 px-2 border rounded" placeholder="Auto Number" />
        @else
            <input type="text" name="nr" value="{{$autoveod->nr}}" class="py-2 px-2 border rounded" placeholder="Auto Number" />
        @endif
    @if($autoveod->juht == "Puudub")
            <input type="text" name="juht" class="py-2 px-2 border rounded" placeholder="Juht" />
        @else
            <input type="text" name="juht" value="{{$autoveod->juht}}" class="py-2 px-2 border rounded" placeholder="Juht" />
        @endif

        <div class="py-3">
            <input type="submit" value="Update" class="p-2 border rounded" />
        </div>
    </form>
@endsection