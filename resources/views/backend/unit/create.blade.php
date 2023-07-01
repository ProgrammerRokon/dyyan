@extends('backend.layouts.app')
@section('title', 'Create New Unit')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-8 offset-2">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <a href="{{ route('unit.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">
                <form action="{{ route('unit.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Unit Name *</label>
                        <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp"   autofocus>
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
