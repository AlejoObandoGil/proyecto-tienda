@extends('admin.layout')

@section('header')

    <div>
        <br>
        <h1 class="m-0">{{ config('app.name')}}
            <small>Admin / New Product</small>
        </h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                {{-- links de rutas --}}
                <li><a href="{{ route('shop') }}"> <i class="fa fa-home"></i>Home</a></li>
                <li><a href="{{ route('shop') }}"> <i class="fa fa-list"></i>Products</a></li>
            </ol>
        </nav>
    </div>

@stop

@section('content')

    <div class="container">
        <h1 class="mt-8 text-center title">NEW PRODUCT</h1>
        {{-- <div>
            <blog/>
        </div> --}}
        <div>
            <product-index :product="{{ $product }}"/>
        </div>
    </div>

@stop
