@extends ('layouts.postlayout')
@section('title',"Извините, страницы с $id не существует!")
@section('content')
<div class="text">
    Извините, страницы с {{$id}} не существует!
</div>
@endsection
