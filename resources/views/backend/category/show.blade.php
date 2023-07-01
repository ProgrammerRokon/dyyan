@extends('backend.layouts.app')
@section('title', 'Category Status')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <a href="{{ route('category.index') }}" type="button" class="btn btn-secondary float-end">Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">

                <h4><b>Name : </b>{{ $category->name }}</h4>
                <h4><b>Image : </b><img src="{{ $category->image }}" alt="" style="width: 100px"></h4>
                <h4><b>Status : </b>{{ $category->status }}</h4>

            </div>
        </div>
    </div>

@endsection
