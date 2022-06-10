@extends('app')
@section('title') {{config('app.name')}} @endsection
@section('content')
    @include('home.partials.slide')
    @include('home.partials.infos')

    @include('components.section', ['category'=>"Women's", 'products'=>[1,2,3,4]])
    @include('components.section', ['category'=>"Men's", 'products'=>[1,2,3,4]])

@endsection