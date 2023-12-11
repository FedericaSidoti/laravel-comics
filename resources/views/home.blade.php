
@extends ('layouts.app')

@section('title')
    Comics
@endsection

@section('content')

@foreach ($comics as $comic)
    <p>{{$comic['title']}}</p>
@endforeach>

@endsection