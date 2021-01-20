@extends('autoveod.layout')

@section('content')
<div class="flex justify-between border-b pb-4 px-4">
        <h1 class="text-2xl pb-4">Juhi määramine</h1>
        <a href="{{route('autoveods.index')}}" class="mx-5 py-2 text-gray-400 cursor-pointer text-white">
        <span class="fas fa-arrow-left"></span></a>
        </div>
        <x alert />
        <form method="post" action="{{route('autoveod.updateDriver',$autoveod->id)}}" class="py-5">
        @csrf
        @method('get')
        @if($autoveod->juht == "Puudub")
        <div class="py-1">
            <input type="text" name="juht" class="py-2 px-2 border rounded" placeholder="Juht" />
        </div>
        @else
        <div class="py-1">
            <input type="text" name="juht" value="{{$autoveod->juht}}" class="py-2 px-2 border rounded" placeholder="Juht" />
        </div>
        @endif

        <div class="py-3">
            <input type="submit" value="Update" class="p-2 border rounded" />
        </div>
    </form>
@endsection