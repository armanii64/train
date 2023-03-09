@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form class="form-horizontal" method="POST" action="{{ route('rollingStock.store') }}" enctype="multipart/form-data">
                    @csrf
                    @include('helpers.errors')
                    <div class="row">
                        <div class="col-md-12">
                            <h1>{{ __('app.common.add') }}</h1>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header text-center font-weight-bold">{{ __('app.rollingStock.type.choose') }}</div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="model_type" class="col-md-12 control-label">{{ __('app.rollingStock.type.model') }}</label>
                                <div class="col-md-12">
                                    <select name="common[model_type]" id="model_type" class="form-control" required>
                                        <option value="locomotive">{{ __('app.rollingStock.type.locomotive') }}</option>
                                        <option value="passenger">{{ __('app.rollingStock.type.passenger') }}</option>
                                        <option value="freight">{{ __('app.rollingStock.type.freight') }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-2">
                        <div class="card-header text-center font-weight-bold">{{ __('app.rollingStock.labels.graphic') }}</div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="image" class="col-md-4 control-label">{{ __('app.rollingStock.labels.loadGraphic') }}</label>
                                <div class="col-md-12">
                                    <input id="image" class="form-control" name="image" type="file">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-2">
                        <div class="card-header text-center font-weight-bold">{{ __('app.rollingStock.labels.firstPage') }}</div>
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="number" class="col-md-12 control-label locomotive">{{ __('app.rollingStock.labels.locomotiveNumber') }}</label>
                                    <label for="number" class="col-md-12 control-label passenger-freight d-none">{{ __('app.rollingStock.labels.number') }}</label>
                                    <div class="col-md-12">
                                        <input id="number" class="form-control" name="common[number]" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="model_description" class="col-md-12 control-label">{{ __('app.rollingStock.labels.modelDescription') }}</label>
                                    <div class="col-md-12">
                                        <textarea id="model_description" class="form-control" name="common[model_description]"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="model_bottom_sign" class="col-md-12 control-label">{{ __('app.rollingStock.labels.modelBottomSign') }}</label>
                                    <div class="col-md-12">
                                        <input id="model_bottom_sign" class="form-control" name="common[model_bottom_sign]">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="model_owner" class="col-md-12 control-label">{{ __('app.rollingStock.labels.modelOwner') }}</label>
                                    <div class="col-md-12">
                                        <input id="model_owner" class="form-control" name="common[model_owner]">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="model_producer" class="col-md-12 control-label">{{ __('app.rollingStock.labels.modelProducer') }}</label>
                                    <div class="col-md-12">
                                        <input id="model_producer" class="form-control" name="common[model_producer]">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="couplings" class="col-md-12 control-label">{{ __('app.rollingStock.labels.couplings') }}</label>
                                    <div class="col-md-12">
                                        <input id="couplings" class="form-control" name="common[couplings]">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="nem_socket" class="col-md-12 control-label">{{ __('app.rollingStock.labels.nemSocket') }}</label>
                                    <div class="col-md-12">
                                        <input id="nem_socket" class="form-control" name="common[nem_socket]">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="kks" class="col-md-12 control-label">{{ __('app.rollingStock.labels.kks') }}</label>
                                    <div class="col-md-12">
                                        <input id="kks" class="form-control" name="common[kks]">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="bumpers_spring_loaded" class="col-md-12 control-label">{{ __('app.rollingStock.labels.bumpersSpringLoaded') }}</label>
                                    <div class="col-md-12">
                                        <input id="bumpers_spring_loaded" class="form-control" name="common[bumpers_spring_loaded]">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="wheels" class="col-md-12 control-label">{{ __('app.rollingStock.labels.wheels') }}</label>
                                    <div class="col-md-12">
                                        <input id="wheels" class="form-control" name="common[wheels]">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="inside_dimension" class="col-md-12 control-label">{{ __('app.rollingStock.labels.insideDimension') }}</label>
                                    <div class="col-md-12">
                                        <input id="inside_dimension" class="form-control" name="common[inside_dimension]">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="wheel_flange" class="col-md-12 control-label">{{ __('app.rollingStock.labels.wheelFlange') }}</label>
                                    <div class="col-md-12">
                                        <input id="wheel_flange" class="form-control" name="common[wheel_flange]">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="rp_25" class="col-md-12 control-label">{{ __('app.rollingStock.labels.rp25') }}</label>
                                    <div class="col-md-12">
                                        <input id="rp_25" class="form-control" name="common[rp_25]">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="model_length" class="col-md-12 control-label">{{ __('app.rollingStock.labels.modelLength') }}</label>
                                    <div class="col-md-12">
                                        <input type="number" step="0.01" min="0.01" id="model_length" class="form-control" name="common[model_length]">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="model_weight" class="col-md-12 control-label">{{ __('app.rollingStock.labels.modelWeight') }}</label>
                                    <div class="col-md-12">
                                        <input type="number" step="0.01" min="0.01" id="model_weight" class="form-control" name="common[model_weight]">
                                    </div>
                                </div>
                                <div class="col-md-3 freight d-none">
                                    <label for="last_revision" class="col-md-12 control-label">{{ __('app.rollingStock.labels.lastRevision') }}</label>
                                    <div class="col-md-12">
                                        <input id="last_revision" class="form-control" name="freight[last_revision]">
                                    </div>
                                </div>
                                <div class="col-md-3 locomotive">
                                    <label for="sound" class="col-md-12 control-label">{{ __('app.rollingStock.labels.sound') }}</label>
                                    <div class="col-md-12">
                                        <input id="sound" class="form-control" name="locomotive[sound]">
                                    </div>
                                </div>
                                <div class="col-md-3 locomotive">
                                    <label for="decoder_type" class="col-md-12 control-label">{{ __('app.rollingStock.labels.decoderType') }}</label>
                                    <div class="col-md-12">
                                        <input id="decoder_type" class="form-control" name="locomotive[decoder_type]">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-2">
                        <div class="card-header text-center font-weight-bold">{{ __('app.rollingStock.labels.secondPage') }}</div>
                        @include('rollingStock.locomotive.create-second-page')
                        @include('rollingStock.passenger.create-second-page')
                        @include('rollingStock.freight.create-second-page')
                    </div>
                    <div class="card mt-2">
                        <div class="card-header text-center font-weight-bold">{{ __('app.rollingStock.labels.extraInfo') }}</div>
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="disinfected" class="col-md-12 control-label">{{ __('app.rollingStock.labels.disinfected') }}</label>
                                    <div class="col-md-12">
                                        <input id="disinfected" class="form-control" name="common[disinfected]">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="efficient" class="col-md-12 control-label">{{ __('app.rollingStock.labels.efficient') }}</label>
                                    <div class="col-md-12">
                                        <input id="efficient" class="form-control" name="common[efficient]">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="express_delivery" class="col-md-12 control-label">{{ __('app.rollingStock.labels.expressDelivery') }}</label>
                                    <div class="col-md-12">
                                        <input id="express_delivery" class="form-control" name="common[express_delivery]">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="fault_description" class="col-md-12 control-label">{{ __('app.rollingStock.labels.faultDescription') }}</label>
                                    <div class="col-md-12">
                                        <textarea id="fault_description" class="form-control" name="common[fault_description]"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="additional_notes_1" class="col-md-12 control-label">{{ __('app.rollingStock.labels.additionalNotes1') }}</label>
                                    <div class="col-md-12">
                                        <textarea id="additional_notes_1" class="form-control" name="common[additional_notes_1]"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="additional_notes_2" class="col-md-12 control-label">{{ __('app.rollingStock.labels.additionalNotes2') }}</label>
                                    <div class="col-md-12">
                                        <textarea id="additional_notes_2" class="form-control" name="common[additional_notes_2]"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4 locomotive">
                                    <label for="type_ddc" class="col-md-12 control-label">{{ __('app.rollingStock.labels.typeDdc') }}</label>
                                    <div class="col-md-12">
                                        <input id="type_ddc" class="form-control" name="locomotive[type_ddc]">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="events" class="col-md-12 control-label">{{ __('app.rollingStock.labels.events') }}</label>
                                    <div class="col-md-12">
                                        <select name="events[]" id="events" class="form-control selectpicker" title="{{ __('app.common.chooseValue') }}" multiple data-live-search="true">
                                            @foreach ($events as $event)
                                                <option value="{{ $event->id }}">{{ $event->name }}</option>
                                            @endforeach
                                        </select>
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
        </div>
    </div>
@endsection
@section('javascript-files')
    <script type="text/javascript" src="{{ asset('js/rollingStock/create.js') }}"></script>
@endsection
