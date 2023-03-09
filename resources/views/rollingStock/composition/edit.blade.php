@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form class="form-horizontal" method="POST" action="{{ route('composition.update', ['id' => $composition->id]) }}">
                    {{ method_field('PUT') }}
                    @csrf
                    @include('helpers.errors')
                    <div class="row">
                        <div class="col-md-12">
                            <h1>{{ __('app.composition.edit') }}</h1>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header text-center font-weight-bold">{{ __('app.composition.basicInfo') }}</div>
                        <div class="card-body">
                            @if (!$isAccepted)
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="name" class="col-md-12 control-label">{{ __('app.composition.name') }}</label>
                                        <div class="col-md-12">
                                            <input id="name" class="form-control" name="composition[name]" value="{{ $composition->name }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="description" class="col-md-12 control-label">{{ __('app.composition.description') }}</label>
                                        <div class="col-md-12">
                                            <textarea id="description" class="form-control" name="composition[description]">{{ $composition->description }}</textarea>
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
                                                    <option value="{{ $event->id }}" @if($event->id == $composition->event_id) selected @endif>{{ $event->name }}</option>
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
                                                    <option value="{{ $rollingStock->id }}"
                                                            @foreach ($composition->rollingStocks as $entityRollingStock)
                                                            @if ($rollingStock->id == $entityRollingStock->id) selected @endif
                                                        @endforeach
                                                    >{{ __('app.rollingStock.labels.' . $rollingStock->model_type . '.type') }} {{ $rollingStock->number }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="symbol" class="col-md-12 control-label">{{ __('app.composition.symbol') }}</label>
                                        <div class="col-md-12">
                                            <input id="symbol" class="form-control" name="composition[symbol]" value="{{ $composition->symbol }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="traction_type" class="col-md-12 control-label">{{ __('app.composition.traction_type') }}</label>
                                        <div class="col-md-12">
                                            <input id="traction_type" class="form-control" name="composition[traction_type]" value="{{ $composition->traction_type }}">
                                        </div>
                                    </div>
                                </div>
                            @endif
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
        </div>
    </div>
@endsection
