@extends('backend.layouts.app')
@section('title', 'Update Product Information')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <a href="{{ route('product.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">
                <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">product Name *</label>
                        <input value="{{ $product->name }}" type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" required autofocus>
                    </div>


                    <div class="mb-3">
                        <label for="status" class="form-label">Status *</label>
                        <select name="status" id="status" class="form-control" required>
                            <option value="Active" {{ ($product->status == 'Active') ? "selected" : '' }}>Active</option>
                            <option value="InActive" {{ ($product->status == 'InActive') ? "selected" : '' }}>InActive</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
