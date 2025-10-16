@extends('layouts.master')

@section('title', 'Leadership Team')

@section('page-title', 'Leadership Team')

@section('content')

    @include('partials.leadershipteam-banner')
    @include('partials.leadershipteam-section1')
    @include('partials.leadershipteam-section2')
    @include('partials.testimonials')

@endsection
