@extends('layouts/Base')

@section('title')
About
@endsection

@section('content')
<div class="logo shadow-md">
    <img src="{{ asset('/images/bssy.jpg') }}" alt="bissaye">
</div>
<h3>
    Build with <span class="text-pink-500">&hearts;</span> by me FRANCK BISSAYE <br>
    An eternal code lover
</h3>
<p>
    <a href="{{ route("app_home") }}" class="text-indigo-500 hover:text-indigo-600 underline">return to home</a>
</p>
@endsection

