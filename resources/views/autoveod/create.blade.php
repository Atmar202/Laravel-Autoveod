@extends('autoveods.layout')

@section('content')
    <div>
        <h1>Tellimuse lisamine</h1>
        <form method="post" action="/autoveod/create">
        @csrf
        <input type="text" name="algus" />
        <input type="text" name="otspunkt" />
        <input type="text" name="aeg" />
        <input type="submit" value="Create" />
    </form>
</div>
@endsection

</body>
</html>