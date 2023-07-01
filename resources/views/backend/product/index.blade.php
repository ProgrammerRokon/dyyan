@extends('backend.layouts.app')
@section('title', 'Product')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="{{ route('product.create') }}" type="button" class="btn btn-primary float-end">Create</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <th>SL.</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Unit</th>
                        <th>Status</th>
                        <th>Action</th>
                        </thead>
                        <tbody>
                        @foreach($products as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>
                                    <img style="width: 100px;" src="{{ asset( $item->image ) }}" alt="">
                                </td>

                                <td>{{ $item->name }}</td>
                                <td>{{ $item->price }} BDT</td>
                                <td>{{ (isset($item->category)) ? $item->category->name : '' }}</td>
                                <td>{{ (isset($item->brand)) ? $item->brand->name : '' }}</td>
                                <td>{{ (isset($item->unit)) ? $item->unit->name : '' }}</td>
                                <td>{{ $item->status }}</td>
                                <td>
                                    <form action="{{ route('product.destroy', $item->id) }}" method="post" style="display: inline-block;">
                                        @method("DELETE")
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                    <a href="{{ route('product.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('product.show', $item->id) }}" class="btn btn-info">Show</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection
