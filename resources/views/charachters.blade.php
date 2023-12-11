@extends('layouts.app')

@section('title')
    Charachters
@endsection

@section('content')

<div class="container p-5">
    <h1>Work in Progress</h1>
    <p>Clicca sul bottone sottostante per tornare alla Home</p>
    <a class="btn-primary btn fs-3" role="button" href="{{ route('home') }}">Home </a>
</div>

@endsection