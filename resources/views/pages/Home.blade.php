@extends('layouts/Base')

@section('title')
home
@endsection

@section('content')
<img src="/images/bssy.jpg" alt="" srcset="">
<h1>
    First web app in laravel
</h1>
<p>
    It is curently {{ date('h:m A')}} .
</p>
@endsection

