@extends('autoveod.layout')

@section('content')
<div class="flex justify-between border-b pb-4 px-4">
<h1 class="text-2xl">Veotellimused</h1>
<h2 class="pt-2 border rounded border-black">&#8203; Algus | Otspunkt | Aeg | Nr | Juht &#8203;</h2>
<a href="{{route('autoveods.create')}}" class="mx-5 py-2 text-blue-400 cursor-pointer text white">
<span class="fas fa-plus-circle"></span></a>
</div>
    <ul>
    <x alert />
        @forelse($autoveods as $autoveod)
        <li class="flex justify-between p-2">
        <div>
        @include('autoveod.valmisButton')
        </div>

        @if($autoveod->valmis)
            <p class="line-through">{{$autoveod->algus}} | {{$autoveod->otspunkt}} | {{$autoveod->aeg}} | {{$autoveod->nr}} | {{$autoveod->juht}}</p>
            @else
            <p>{{$autoveod->algus}} | {{$autoveod->otspunkt}} | {{$autoveod->aeg}} | {{$autoveod->nr}} | {{$autoveod->juht}}</p>
            @endif

            <div>
            <a href="{{route('autoveods.show', $autoveod->id)}}" class="text-green-400 cursor-pointer text-white">
                <span class="far fa-clipboard px-2"></span></a>

            <a href="{{route('autoveods.edit', $autoveod->id)}}" class="text-orange-400 cursor-pointer text-white">
                <span class="fas fa-edit px-2"></span></a>

                <span class="fas fa-trash text-red-500 px-2 cursor-pointer" onclick="event.preventDefault(); if(confirm('Do you really want to delete?')) {
                     document.getElementById('form-delete-{{$autoveod->id}}').submit()
                     }"></span>
                <form style="display:none" id="{{'form-delete-'.$autoveod->id}}" method="post" action="{{route('autoveods.destroy', $autoveod->id)}}">
                @csrf
                @method('delete')
                </form>
                </div>
            </li>
            @empty
            <p>Veotellimusi pole.</p>
            @endif
            <ul>
@endsection
