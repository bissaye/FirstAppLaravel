@extends('layouts/Base')

@section('title')
home
@endsection

@section('content')
<div class="logo shadow-md">
    <img src="{{ asset('/images/bssy.jpg') }}" alt="bissaye">
</div>
<h1 class="mt-5 text-5xl text-indigo-600">
    First web app in laravel
</h1>
<p class="mt-5 text-lg text-gray-600">
    It is curently {{ date('h:m A')}} .
</p>
@endsection

