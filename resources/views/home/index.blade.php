@extends('app')
@section('title') {{config('app.name')}} @endsection
@section('content')
    @include('home.partials.slide')
    @include('home.partials.infos')

    <div class="mt-12">
        <div class="flex justify-between items-center py-4">
            <div class="font-bold text-black text-2xl">
                Woman's
            </div>
            <div class="flex gap-6">
                <a href="http://">New Arrivals</a>
                <a href="http://">Specials</a>
                <a href="http://">Bestsellers</a>
                <a href="http://">Most Viewed</a>
                <a href="http://">Featured Products</a>
            </div>
        </div>
    </div>
    <div class="h-44 hidden border flex gap-8">
        @include('components.product.item')
        @include('components.product.item')
        @include('components.product.item')
        @include('components.product.item')
    </div>

    hello this the content
@endsection