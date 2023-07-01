@extends('backend.layouts.app')
@section('title', 'Unit')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-8 offset-2">
                <a href="{{ route('unit.create') }}" class="btn btn-primary float-end">Create</a>
            </div>
            <div class="col-8 offset-2">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <th>SL.</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Action</th>
                        </thead>
                        <tbody>
                        @foreach($units as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->status }}</td>
                                <td>
                                    <form action="{{ route('unit.destroy', $item->id) }}" method="post" style="display: inline-block;">
                                        @method("DELETE")
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                    <a href="{{ route('unit.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('unit.show', $item->id) }}" class="btn btn-info">Show</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $units->links()  }}
                </div>
            </div>
        </div>
    </div>
@endsection
