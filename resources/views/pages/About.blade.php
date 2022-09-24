@extends('layouts/Base')

@section('title')
About
@endsection

@section('content')
<img src="{{ asset('/images/bssy.jpg') }}" alt="" srcset="">
<h3>
    Build with &hearts; by me FRANCK BISSAYE <br>
    An eternal code lover
</h3>
<p>
    <a href="{{ route("app_home") }}">return to home</a>
</p>
@endsection

