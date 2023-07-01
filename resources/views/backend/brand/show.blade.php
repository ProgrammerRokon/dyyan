@extends('backend.layouts.app')
@section('title', 'Brand Status')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <a href="{{ route('brand.index') }}" type="button" class="btn btn-secondary float-end">Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">

                <h4><b>Name : </b>{{ $brand->name }}</h4>
                <h4><b>Status : </b>{{ $brand->status }}</h4>

            </div>
        </div>
    </div>

@endsection
