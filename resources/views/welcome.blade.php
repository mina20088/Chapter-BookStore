@extends("layouts.guest")

@section('title','Home')
@section('content')
    <!--Hero Section-->
    @include('partials._hero-section')
    <!--Author Section-->
    @include('partials._author-section')
    <!--Highly-Ranked-Section-->
    @include('partials.highly-ranked-books-section')
@endsection
