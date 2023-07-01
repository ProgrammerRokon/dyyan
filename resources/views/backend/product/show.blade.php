@extends('backend.layouts.app')
@section('title', 'Product Status')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <a href="{{ route('product.index') }}" type="button" class="btn btn-secondary float-end">Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">

                <h4><b>Name : </b>{{ $product->name }}</h4>
                <h4><b>Status : </b>{{ $product->status }}</h4>

            </div>
        </div>
    </div>

@endsection
