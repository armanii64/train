@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ __('app.common.show') }}</h1>
            </div>
            <div class="col-md-12 justify-content-center">
                @include('rollingStock.common.show')
            </div>
        </div>
    </div>
@endsection
