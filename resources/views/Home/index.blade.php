@extends("layouts.guest")

@section('title','Home')

@section('content')
    <!--Hero Section-->
    @include('partials._hero-section',['book' => $book])
    <!--Author Section-->
    @include('partials._author-section')
    <!--Highly-Ranked-Section-->
    {{--@include('partials.highly-ranked-books-section',['ranked' => $rank])--}}
    <livewire:home.highly-rated-read-section/>
@endsection
