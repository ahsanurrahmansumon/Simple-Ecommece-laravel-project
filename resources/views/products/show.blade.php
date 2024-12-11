@extends('layouts.app')
<title> {{ $product->name }} | Product Details </title>
@section('content')
    <div class="mt-4">
        <div class="card">
            <div class="card-header text-center">
                <h2>{{ $product->name }}</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('images/'.$product->image) }}" alt="{{ $product->name }}" class="img-fluid rounded mb-3">
                    </div>
                    <div class="col-md-3">
                        <h4 class="card-title">Price: ${{ $product->price }}</h4>
                        <p class="card-text">{{ $product->description }}</p>
                        <a href="{{ route('products.home') }}" class="btn btn-primary btn-block mt-4">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


