@extends('app')
@section('title') {{config('app.name')}} @endsection
@section('content')
    @include('home.partials.slide')
    hello this the content
@endsection