@extends('backend.layouts.app')
@section('title', 'Category')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <a href="{{ route('category.create') }}" type="button" class="btn btn-primary float-end">Create</a>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <th>SL.</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Action</th>
                        </thead>
                        <tbody>
                        @foreach($categories as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <img style="width: 100px;" src="{{ asset($item->image) }}" alt="CategoryImage">
                                </td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->status }}</td>
                                <td>
                                    <form action="{{ route('category.destroy', $item->id) }}" method="post" style="display: inline-block;">
                                        @method("DELETE")
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                    <a href="{{ route('category.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('category.show', $item->id) }}" class="btn btn-info">Show</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    {{ $categories->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection
