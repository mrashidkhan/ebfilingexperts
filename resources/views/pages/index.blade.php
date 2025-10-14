@extends('layouts.master')

@section('title', 'Home')

@section('page-title', 'Home')

@section('content')

    @include('partials.homeslider')
    @include('partials.verticalscroll')
    @include('partials.servicesection')
    @include('partials.calltoaction')
    @include('partials.testimonials')
    @include('partials.aboutus')
    @include('partials.counter')
    @include('partials.whychoose')



@endsection
