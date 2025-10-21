@extends('layouts.master')

@section('title', 'Who are we')

@section('page-title', 'Who are we')

@section('content')

    @include('partials.whoarewe-banner')
    @include('partials.whoarewe-section1')
    @include('partials.whoarewe-section2')
    @include('partials.whoarewe-section3')
    @include('partials.whoarewe-section4')

@endsection
