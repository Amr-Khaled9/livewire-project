@extends('front.master')

@section('title')
    Project
@endsection


@section('header-contant')
@include('front.partials.sub-header',['pageName'=>'Project'])
@endsection


@section('content')
@livewire('front.components.projects-component')
@endsection