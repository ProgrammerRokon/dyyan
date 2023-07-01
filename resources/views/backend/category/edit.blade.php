@extends('backend.layouts.app')
@section('title', 'Update Category Information')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <a href="{{ route('category.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">
                <form action="{{ route('category.update', $category->id) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Category Name *</label>
                        <input value="{{ $category->name }}" type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" required autofocus>
                    </div>

                    <div class="mb-3">
                        <img style="width: 100px;" src="{{ $category->image }}" alt="">
                        <br>
                        <label for="image" class="form-label">Category Image</label>
                        <input type="file" class="form-control" name="image" id="image" aria-describedby="emailHelp">
                    </div>


                    <div class="mb-3">
                        <label for="status" class="form-label">Status *</label>
                        <select name="status" id="status" class="form-control" required>
                            <option value="Active" {{ ($category->status == 'Active') ? "selected" : '' }}>Active</option>
                            <option value="InActive" {{ ($category->status == 'InActive') ? "selected" : '' }}>InActive</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
