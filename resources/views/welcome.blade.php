@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 80px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                {{-- links de rutas --}}
                <li><a href="{{ route('shop') }}"> <i class="fa fa-home"></i>Home</a></li>
                <li><a href="{{ route('shop') }}"> <i class="fa fa-list"></i>Products</a></li>
            </ol>
        </nav>
        {{-- <section>
            <form action="{{ route('file.save') }}" class="form" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <div class="col-md-4">
                        <label> Titulo </label>
                        <input type="text" class="form-control" name="titulo">
                    </div>
                    <div class="col-md-4">
                        <label> Archivo </label>
                        <input type="file" class="form-control" name="file">
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </form>
        </section> --}}
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-7">
                        <h2>Products In Our Store</h2>
                    </div>
                </div>
                <hr>
                <section class="posts container">
                    @foreach($products as $product)
                        <article class="post no-image">
                            <div class="content-post">
                                <header class="container-flex space-between">
                                    <div class="reference">
                                        <a href="">
                                            <span class="card-title">{{ $product->reference }}</span>
                                        </a>
                                    </div>
                                    <div class="post-category">
                                        <a href="">
                                            <span class="category text-capitalize">Categoria 1</span>
                                        </a>
                                    </div>
                                </header>
                                <div class="card" style="margin-bottom: -40px; height: auto;">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <img src="/img/{{ $product->file }}"
                                            class="card-img-top mx-auto"
                                            style="height: 200px; width: 200px;display: block;"
                                            alt="{{ $product->file }}"
                                            >
                                        </div>

                                        <div class="col-lg-8">
                                            <a href=""><h5 class="card-title">{{ $product->name }}</h5></a>
                                            <h3>US $ {{ $product->price }}</h3>
                                            <p>Envio GRATIS</p>
                                            <form action="{{ route('cart.store') }}" method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" value="{{ $product->id }}" id="id" name="id">
                                                <input type="hidden" value="{{ $product->name }}" id="name" name="name">
                                                <input type="hidden" value="{{ $product->reference }}" id="reference" name="reference">
                                                <input type="hidden" value="{{ $product->stock }}" id="stock" name="stock">
                                                <input type="hidden" value="{{ $product->details }}" id="details" name="details">
                                                <input type="hidden" value="{{ $product->description }}" id="description" name="description">
                                                <input type="hidden" value="{{ $product->price }}" id="price" name="price">
                                                <input type="hidden" value="{{ $product->shipping_cost }}" id="shipping_cost" name="shipping_cost">
                                                <input type="hidden" value="{{ $product->file }}" id="img" name="img">
                                                {{-- <input type="hidden" value="{{ $product->slug }}" id="slug" name="slug"> --}}
                                                <input type="hidden" value="1" id="quantity" name="quantity">
                                                <div class="card-footer" style="background-color: white;">
                                                    <div class="row">
                                                        <button class="btn btn-primary btn-sm" class="tooltip-test" title="add to cart">
                                                            <i class="fa fa-shopping-cart"></i> Add to cart
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </section>
            </div>
        </div>
        <div class="pagination">
            <ul class="list-unstyled container-flex space-center">
                <li><a href="#" class="pagination-active">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
            </ul>
        </div>
    </div>

@endsection
