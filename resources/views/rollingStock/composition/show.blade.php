@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center font-weight-bold">{{ __('app.composition.basicInfo') }}</div>
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="name" class="col-md-12 control-label">{{ __('app.composition.name') }}</label>
                                <div class="col-md-12">
                                    <input id="name" class="form-control" name="name" value="{{ $composition->name }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="description" class="col-md-12 control-label">{{ __('app.composition.description') }}</label>
                                <div class="col-md-12">
                                    <textarea id="description" class="form-control" name=description" disabled>{{ $composition->description }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="event" class="col-md-12 control-label">{{ __('app.composition.event') }}</label>
                                <div class="col-md-12">
                                    <input id="event" class="form-control" name="event_id" value="@if(!is_null($composition->event)) {{ $composition->event->name }} @endif" disabled>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="symbol" class="col-md-12 control-label">{{ __('app.composition.symbol') }}</label>
                                <div class="col-md-12">
                                    <input id="symbol" class="form-control" name="symbol" value="{{ $composition->symbol }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="traction_type" class="col-md-12 control-label">{{ __('app.composition.traction_type') }}</label>
                                <div class="col-md-12">
                                    <input id="traction_type" class="form-control" name="traction_type" value="{{ $composition->traction_type }}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        @foreach($composition->rollingStocks as $rollingStock)
                                            <a class="nav-item nav-link @if($loop->index == 0) active @endif" id="nav-{{ $rollingStock->id }}-tab" data-toggle="tab" href="#nav-{{ $rollingStock->id }}" role="tab" aria-controls="nav-{{ $rollingStock->id }}" aria-selected="true">{{ __('app.rollingStock.labels.' . $rollingStock->model_type . '.type') }} {{ $rollingStock->number }}</a>
                                        @endforeach
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    @foreach($composition->rollingStocks as $rollingStock)
                                        <div class="tab-pane fade @if($loop->index == 0) show active @endif" id="nav-{{ $rollingStock->id }}" role="tabpanel" aria-labelledby="nav-{{ $rollingStock->id }}-tab">
                                            @include('rollingStock.common.show')
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
