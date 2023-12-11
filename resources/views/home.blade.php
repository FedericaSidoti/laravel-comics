<!DOCTYPE html>
<html lang="en">
<head>
@extends ('layouts.app')

@section('content')

@foreach ($comics as $comic)
    <p>{{$comic['title']}}</p>
@endforeach>

@endsection