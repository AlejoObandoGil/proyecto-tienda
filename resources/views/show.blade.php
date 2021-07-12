@extends('layouts.app')

@section('content')

<section class="posts container">
<article class="post no-image">

            <div class="content-post">

                <header class="container-flex space-between">
                    <div class="date">
                        <span class="c-gris">Stock: {{ $product->stock }}</span>
                    </div>
                    <div class="post-category">
                        <span class="category">Reference: {{ $product->reference }}</span>
                    </div>
                </header>
                <h1>{{ $product->name }}</h1>
                <div class="divider"></div>

                <div class="card" style="margin-bottom: -40px; height: auto;">
                    <div class="row">
                        <div class="col-lg-8">
                            <img src="/img/{{ $product->image_path }}"
                            class="card-img-top mx-auto"
                            style="display: block;"
                            alt="{{ $product->image_path }}"
                            >
                            <br>
                            <div class="card-title">
                                <h3>Description:</h3>
                                {!! $product->description !!}
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <a href="/show/{{ $product->id }}"><h5 class="card-title">{{ $product->name }}</h5></a>
                            <div class="card-title">
                                <h3>Details:</h3>
                                {!! $product->details !!}
                            </div>
                            <h3>US $ {{ $product->price }}</h3>
                            <h5>shipping cost: US $ {{ $product->shipping_cost }}</h5>
                            <form action="{{ route('cart.store') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" value="{{ $product->id }}" id="id" name="id">
                                <input type="hidden" value="{{ $product->name }}" id="name" name="name">
                                <input type="hidden" value="{{ $product->price }}" id="price" name="price">
                                <input type="hidden" value="{{ $product->image_path }}" id="img" name="img">
                                {{-- <input type="hidden" value="{{ $product->slug }}" id="slug" name="slug"> --}}
                                <input type="hidden" value="1" id="quantity" name="quantity">
                                <div class="card-footer" style="background-color: white;">
                                    <div class="text-center">
                                        <button class="btn btn-primary" title="add to cart">
                                            <i class="fa fa-shopping-cart"></i> Add to cart
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</article>

@endsection
