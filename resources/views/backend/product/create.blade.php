@extends('backend.layouts.app')
@section('title', 'Create New Product')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <a href="{{ route('product.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">
                <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Product Name *</label>
                        <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" required autofocus>
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price *</label>
                        <input type="number" class="form-control" name="price" id="price" required>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Image *</label>
                        <input type="file" class="form-control" name="image" id="image" required>
                    </div>

                    <!--category_id select option-->
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Category</label>
                        <select name="category_id" id="category_id" class="form-control">
                            <option value="">Select One</option>
                            @foreach($categories as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!--brand_id select option-->
                    <div class="mb-3">
                        <label for="brand_id" class="form-label">Brand</label>
                        <select name="brand_id" id="brand_id" class="form-control">
                            <option value="">Select One</option>
                            @foreach($brands as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!--unit_id select option-->
                    <div class="mb-3">
                        <label for="unit_id" class="form-label">Unit</label>
                        <select name="unit_id" id="unit_id" class="form-control">
                            <option value="">Select One</option>
                            @foreach($units as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="description" cols="30" rows="5"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Status *</label>
                        <select name="status" id="status" class="form-control" required>
                            <option value="Active">Active</option>
                            <option value="InActive">InActive</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
