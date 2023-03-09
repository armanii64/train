@extends('layouts.app')

@section('content')
    <div class="container justify-content-center">
        <form class="form-horizontal" method="POST" action="{{ route('composition.store') }}">
            @csrf
            @include('helpers.errors')
            <div class="row">
                <div class="col-md-12">
                    <h1>{{ __('app.composition.add') }}</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center font-weight-bold">{{ __('app.composition.basicInfo') }}</div>
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="name" class="col-md-12 control-label">{{ __('app.composition.name') }}</label>
                                    <div class="col-md-12">
                                        <input id="name" class="form-control" name="composition[name]" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="description" class="col-md-12 control-label">{{ __('app.composition.description') }}</label>
                                    <div class="col-md-12">
                                        <textarea id="description" class="form-control" name="composition[description]"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="event" class="col-md-12 control-label">{{ __('app.composition.event') }}</label>
                                    <div class="col-md-12">
                                        <select name="composition[event_id]" id="event" class="form-control selectpicker" title="{{ __('app.common.chooseValue') }}" data-live-search="true">
                                            <option value="">{{ __('app.common.noValue') }}</option>
                                            @foreach ($events as $event)
                                                <option value="{{ $event->id }}">{{ $event->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="rollingStocks" class="col-md-12 control-label">{{ __('app.composition.rollingStocks') }}</label>
                                    <div class="col-md-12">
                                        <select name="rollingStocks[]" id="rollingStocks" class="form-control selectpicker" title="{{ __('app.common.chooseValue') }}" multiple data-live-search="true" required>
                                            @foreach ($rollingStocks as $rollingStock)
                                                <option value="{{ $rollingStock->id }}">{{ __('app.rollingStock.labels.' . $rollingStock->model_type . '.type') }} {{ $rollingStock->number }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row mt-2">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success pull-right">
                        {{ __('app.common.save') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
