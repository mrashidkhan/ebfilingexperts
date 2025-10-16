@extends('layouts.master')

@section('title', 'Home')

@section('page-title', 'Home')

@section('content')

    @include('partials.reviews-banner')
    @include('partials.reviews-section1')
    @include('partials.testimonials')




@endsection
