@extends("layouts.guest")

@section('title','Home')
@section('content')
    @include('partials._hero-section')
    @include('partials._author-section')
    <div class="slider-section mt-md-10 px-md-0">
        <h1 class="display-3">Highly Rated Reads</h1>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <x-slider/>
                </div>
            </div>
        </div>
    </div>
@endsection
