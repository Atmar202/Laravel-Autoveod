@if($autoveod->valmis)
    <span class="fas fa-check text-green-400 cursor-pointer px-2" onclick="event.preventDefault();document.getElementById('form-tegemata-{{$autoveod->id}}').submit()"></span>
        <form style="display:none" id="{{'form-tegemata-'.$autoveod->id}}" method="post" action="{{route('autoveod.tegemata', $autoveod->id)}}">
            @csrf
            @method('delete')
        </form>
            @else
            <span onclick="event.preventDefault();document.getElementById('form-tehtud-{{$autoveod->id}}').submit()" class="fas fa-check text-gray-300 cursor-pointer px-4"></span>
            <form style="display:none" id="{{'form-tehtud-'.$autoveod->id}}" method="post" action="{{route('autoveod.tehtud', $autoveod->id)}}">
            @csrf
            @method('put')
        </form>
    @endif