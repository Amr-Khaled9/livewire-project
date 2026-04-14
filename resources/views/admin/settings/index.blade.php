@extends('admin.master')

@section('title')
Settings
@endsection

@section('setting-active')
active
@endsection
@section('content')
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
<div class="container mt-4">
    @livewire('admin.admin-settings')
</div>
@endsection