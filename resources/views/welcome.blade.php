@extends("layouts.guest")

@section('title','Home')
@section('content')
    @include('partials._hero-section')
    @include('partials._author-section')
    <section class="highly-ranked-books-section bg-dark mt-sm-5 mb-md-10 px-md-0 py-lg-7 py-sm-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="display-3 text-center">Highly Rated Reads</h1>
                    <x-slider/>
                </div>
            </div>
        </div>
    </section>
@endsection
