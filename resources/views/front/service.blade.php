@extends('front.master')

@section('title')
Service
@endsection


@section('header-contant')
@include('front.partials.sub-header',['pageName'=>'Service'])
@endsection


@section('content')
<!-- Service Start -->
@livewire('front.components.services-component')
<!-- Service End -->
@endsection