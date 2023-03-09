@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('app.common.add') }}</div>
                    <div class="card-body">
                        <form class="form-horizontal" method="POST" action="{{ route('event.store') }}">
                            @csrf
                            @include('helpers.errors')
                            <div class="form-group row">
                                <label for="name" class="col-md-3 control-label">{{ __('app.event.name') }}</label>
                                <div class="col-md-9">
                                    <input id="name" class="form-control" name="name" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="description" class="col-md-3 control-label">{{ __('app.event.description') }}</label>
                                <div class="col-md-9">
                                    <textarea id="description" class="form-control" name="description"></textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success pull-right">
                                        {{ __('app.common.save') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
