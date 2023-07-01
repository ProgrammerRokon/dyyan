@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-primary h1 text-center">{{ __('Admin Dashboard') }}</div>
                    <div class="card-body text-success h3 text-center">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{ __('Congratulations! You are logged in😀😀😀') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


