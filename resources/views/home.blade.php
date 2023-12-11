
@extends ('layouts.app')

@section('title')
    Comics
@endsection

@section('content')

<section class="jumbo-section">
    <div class="position-relative"> 
        <img class="w-100 jumbo" src="{{Vite::asset('resources/images/jumbotron.jpg')}}" alt="">
        <button class="btn-primary btn">
        current series
        </button>
    </div>
</section>
<section class="main-content">
    <div class="container">
        <div class="row">

        @foreach ($comics as $comic)
            <div class="col-2">
                <figure class="fig">
                    <img src="{{$comic['thumb']}}">
                    <p> {{$comic['series']}} </p>
                </figure>
            </div>
        @endforeach>

        </div>
    </div>
</section>
<section class="extra-section">
    <button class="btn-primary btn">Load More</button>
    <div class="extras d-flex bg-primary text-light container-fluid">
        <div class="container d-flex p-5">
                <img src="{{Vite::asset('resources/images/buy-comics-merchandise.png')}}">
                <p>DC MERCHANDISE</p>
        </div>
        <div class="container d-flex p-5">
            <img src="{{Vite::asset('resources/images/buy-comics-merchandise.png')}}">
            <p>DC MERCHANDISE</p>
        </div>
        <div class="container d-flex p-5">
            <img src="{{Vite::asset('resources/images/buy-comics-merchandise.png')}}">
            <p>DC MERCHANDISE</p>
        </div>
        <div class="container d-flex p-5">
            <img src="{{Vite::asset('resources/images/buy-comics-merchandise.png')}}">
            <p>DC MERCHANDISE</p>
        </div>
        <div class="container d-flex p-5">
            <img src="{{Vite::asset('resources/images/buy-comics-merchandise.png')}}">
            <p>DC MERCHANDISE</p>
        </div>

    </div>
</section>



@endsection