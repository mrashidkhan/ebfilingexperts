@extends('layouts.master')

@section('title', 'Our-Story')

@section('page-title', 'Our-Story')

@section('content')

    @include('partials.whychooseus-banner')
    @include('partials.whychooseus-section1')
    @include('partials.whychooseus-section2')
    @include('partials.whychooseus-section3')
    @include('partials.testimonials')

@endsection
