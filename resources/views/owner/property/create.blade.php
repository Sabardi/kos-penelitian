@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                @if (session()->has('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">{{ __('Propery') }}</div>
                    <div class="card-body">

                        @include('owner.property.__form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
