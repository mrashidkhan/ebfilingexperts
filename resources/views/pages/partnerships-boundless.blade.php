@extends('layouts.master')

@section('title', 'partnershipsboundless')

@section('page-title', 'partnershipsboundless')

@section('content')

    @include('partials.partnershipsboundless-banner')
    @include('partials.partnershipsboundless-section1')
    @include('partials.partnershipsboundless-section2')
    @include('partials.partnershipsboundless-section3')
    {{-- @include('partials.blog-section1') --}}
    @include('partials.partnershipsboundless-section4')
    @include('partials.partnershipsboundless-section5')
    @include('partials.testimonials')

@endsection
