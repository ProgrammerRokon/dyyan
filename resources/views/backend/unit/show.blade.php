@extends('backend.layouts.app')
@section('title', 'Unit')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <a href="{{ route('unit.index') }}" type="button" class="btn btn-secondary float-end">Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">

                <h4><b>Name : </b>{{ $unit->name }}</h4>
                <h4><b>Status : </b>{{ $unit->status }}</h4>

            </div>
        </div>
    </div>

@endsection
