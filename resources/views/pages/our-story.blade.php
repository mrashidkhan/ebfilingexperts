@extends('layouts.master')

@section('title', 'Our-Story')

@section('page-title', 'Our-Story')

@section('content')

    @include('partials.ourstory-banner')
    {{-- @include('partials.ourstory-section1') --}}
    @include('partials.ourstory-section2')
    @include('partials.ourstory-section3')
    @include('partials.ourstory-section4')
    @include('partials.ourstory-section5')
@endsection
