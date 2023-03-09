<div class="card mt-2">
    <div class="card-header text-center font-weight-bold">{{ __('app.rollingStock.labels.graphic') }}</div>
    <div class="card-body">
        @if (!is_null($rollingStock->image_path))
            <div class="form-group row">
                <label class="col-md-3 control-label"></label>
                <div class="col-md-6">
                    <div class="img-wrapper">
                        <img src="{{ asset('storage/' . $rollingStock->image_path) }}" alt="Image" class="img-fluid">
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
<div class="card mt-2">
    <div class="card-header text-center font-weight-bold">{{ __('app.rollingStock.labels.firstPage') }}</div>
    <div class="card-body">
        <div class="form-group row">
            <div class="col-md-6">
                @if (!is_null($rollingStock->locomotive))
                    <label for="number" class="col-md-12 control-label">{{ __('app.rollingStock.labels.locomotiveNumber') }}</label>
                @else
                    <label for="number" class="col-md-12 control-label">{{ __('app.rollingStock.labels.number') }}</label>
                @endif
                <div class="col-md-12">
                    <input id="number" class="form-control" name="common[number]" value="{{ $rollingStock->number }}" disabled>
                </div>
            </div>
            <div class="col-md-6">
                <label for="model_description" class="col-md-12 control-label">{{ __('app.rollingStock.labels.modelDescription') }}</label>
                <div class="col-md-12">
                    <textarea id="model_description" class="form-control" name="common[model_description]" disabled>{{ $rollingStock->model_description }}</textarea>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-4">
                <label for="model_bottom_sign" class="col-md-12 control-label">{{ __('app.rollingStock.labels.modelBottomSign') }}</label>
                <div class="col-md-12">
                    <input id="model_bottom_sign" class="form-control" name="common[model_bottom_sign]" value="{{ $rollingStock->model_bottom_sign }}" disabled>
                </div>
            </div>
            <div class="col-md-4">
                <label for="model_owner" class="col-md-12 control-label">{{ __('app.rollingStock.labels.modelOwner') }}</label>
                <div class="col-md-12">
                    <input id="model_owner" class="form-control" name="common[model_owner]" value="{{ $rollingStock->model_owner }}" disabled>
                </div>
            </div>
            <div class="col-md-4">
                <label for="model_producer" class="col-md-12 control-label">{{ __('app.rollingStock.labels.modelProducer') }}</label>
                <div class="col-md-12">
                    <input id="model_producer" class="form-control" name="common[model_producer]" value="{{ $rollingStock->model_producer }}" disabled>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-3">
                <label for="couplings" class="col-md-12 control-label">{{ __('app.rollingStock.labels.couplings') }}</label>
                <div class="col-md-12">
                    <input id="couplings" class="form-control" name="common[couplings]" value="{{ $rollingStock->couplings }}" disabled>
                </div>
            </div>
            <div class="col-md-3">
                <label for="nem_socket" class="col-md-12 control-label">{{ __('app.rollingStock.labels.nemSocket') }}</label>
                <div class="col-md-12">
                    <input id="nem_socket" class="form-control" name="common[nem_socket]" value="{{ $rollingStock->nem_socket }}" disabled>
                </div>
            </div>
            <div class="col-md-3">
                <label for="kks" class="col-md-12 control-label">{{ __('app.rollingStock.labels.kks') }}</label>
                <div class="col-md-12">
                    <input id="kks" class="form-control" name="common[kks]" value="{{ $rollingStock->kks }}" disabled>
                </div>
            </div>
            <div class="col-md-3">
                <label for="bumpers_spring_loaded" class="col-md-12 control-label">{{ __('app.rollingStock.labels.bumpersSpringLoaded') }}</label>
                <div class="col-md-12">
                    <input id="bumpers_spring_loaded" class="form-control" name="common[bumpers_spring_loaded]" value="{{ $rollingStock->bumpers_spring_loaded }}" disabled>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-3">
                <label for="wheels" class="col-md-12 control-label">{{ __('app.rollingStock.labels.wheels') }}</label>
                <div class="col-md-12">
                    <input id="wheels" class="form-control" name="common[wheels]" value="{{ $rollingStock->wheels }}" disabled>
                </div>
            </div>
            <div class="col-md-3">
                <label for="inside_dimension" class="col-md-12 control-label">{{ __('app.rollingStock.labels.insideDimension') }}</label>
                <div class="col-md-12">
                    <input id="inside_dimension" class="form-control" name="common[inside_dimension]" value="{{ $rollingStock->inside_dimension }}" disabled>
                </div>
            </div>
            <div class="col-md-3">
                <label for="wheel_flange" class="col-md-12 control-label">{{ __('app.rollingStock.labels.wheelFlange') }}</label>
                <div class="col-md-12">
                    <input id="wheel_flange" class="form-control" name="common[wheel_flange]" value="{{ $rollingStock->wheel_flange }}" disabled>
                </div>
            </div>
            <div class="col-md-3">
                <label for="rp_25" class="col-md-12 control-label">{{ __('app.rollingStock.labels.rp25') }}</label>
                <div class="col-md-12">
                    <input id="rp_25" class="form-control" name="common[rp_25]" value="{{ $rollingStock->rp_25 }}" disabled>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-3">
                <label for="model_length" class="col-md-12 control-label">{{ __('app.rollingStock.labels.modelLength') }}</label>
                <div class="col-md-12">
                    <input type="number" step="0.01" min="0.01" id="model_length" class="form-control" name="common[model_length]" value="{{ $rollingStock->model_length }}" disabled>
                </div>
            </div>
            <div class="col-md-3">
                <label for="model_weight" class="col-md-12 control-label">{{ __('app.rollingStock.labels.modelWeight') }}</label>
                <div class="col-md-12">
                    <input type="number" step="0.01" min="0.01" id="model_weight" class="form-control" name="common[model_weight]" value="{{ $rollingStock->model_weight }}" disabled>
                </div>
            </div>
            @if (!is_null($rollingStock->freight))
                <div class="col-md-3">
                    <label for="last_revision" class="col-md-12 control-label">{{ __('app.rollingStock.labels.lastRevision') }}</label>
                    <div class="col-md-12">
                        <input id="last_revision" class="form-control" name="freight[last_revision]" value="{{ $rollingStock->freight->last_revision }}" disabled>
                    </div>
                </div>
            @endif
            @if (!is_null($rollingStock->locomotive))
                <div class="col-md-3">
                    <label for="sound" class="col-md-12 control-label">{{ __('app.rollingStock.labels.sound') }}</label>
                    <div class="col-md-12">
                        <input id="sound" class="form-control" name="locomotive[sound]" value="{{ $rollingStock->locomotive->sound }}" disabled>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="decoder_type" class="col-md-12 control-label">{{ __('app.rollingStock.labels.decoderType') }}</label>
                    <div class="col-md-12">
                        <input id="decoder_type" class="form-control" name="locomotive[decoder_type]" value="{{ $rollingStock->locomotive->decoder_type }}" disabled>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
<div class="card mt-2">
    <div class="card-header text-center font-weight-bold">{{ __('app.rollingStock.labels.secondPage') }}</div>
    @if (!is_null($rollingStock->locomotive))
        @include('rollingStock.locomotive.show-second-page')
    @elseif(!is_null($rollingStock->passenger))
        @include('rollingStock.passenger.show-second-page')
    @elseif(!is_null($rollingStock->freight))
        @include('rollingStock.freight.show-second-page')
    @endif
</div>
<div class="card mt-2">
    <div class="card-header text-center font-weight-bold">{{ __('app.rollingStock.labels.extraInfo') }}</div>
    <div class="card-body">
        <div class="form-group row">
            <div class="col-md-4">
                <label for="disinfected" class="col-md-12 control-label">{{ __('app.rollingStock.labels.disinfected') }}</label>
                <div class="col-md-12">
                    <input id="disinfected" class="form-control" name="common[disinfected]" value="{{ $rollingStock->disinfected }}" disabled>
                </div>
            </div>
            <div class="col-md-4">
                <label for="efficient" class="col-md-12 control-label">{{ __('app.rollingStock.labels.efficient') }}</label>
                <div class="col-md-12">
                    <input id="efficient" class="form-control" name="common[efficient]" value="{{ $rollingStock->efficient }}" disabled>
                </div>
            </div>
            <div class="col-md-4">
                <label for="express_delivery" class="col-md-12 control-label">{{ __('app.rollingStock.labels.expressDelivery') }}</label>
                <div class="col-md-12">
                    <input id="express_delivery" class="form-control" name="common[express_delivery]" value="{{ $rollingStock->express_delivery }}" disabled>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <label for="fault_description" class="col-md-12 control-label">{{ __('app.rollingStock.labels.faultDescription') }}</label>
                <div class="col-md-12">
                    <textarea id="fault_description" class="form-control" name="common[fault_description]" disabled>{{ $rollingStock->fault_description }}</textarea>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-6">
                <label for="additional_notes_1" class="col-md-12 control-label">{{ __('app.rollingStock.labels.additionalNotes1') }}</label>
                <div class="col-md-12">
                    <textarea id="additional_notes_1" class="form-control" name="common[additional_notes_1]" disabled>{{ $rollingStock->additional_notes_1 }}</textarea>
                </div>
            </div>
            <div class="col-md-6">
                <label for="additional_notes_2" class="col-md-12 control-label">{{ __('app.rollingStock.labels.additionalNotes2') }}</label>
                <div class="col-md-12">
                    <textarea id="additional_notes_2" class="form-control" name="common[additional_notes_2]" disabled>{{ $rollingStock->additional_notes_2 }}</textarea>
                </div>
            </div>
        </div>
        @if (!is_null($rollingStock->locomotive))
            <div class="form-group row">
                <div class="col-md-4">
                    <label for="type_ddc" class="col-md-12 control-label">{{ __('app.rollingStock.labels.typeDdc') }}</label>
                    <div class="col-md-12">
                        <input id="type_ddc" class="form-control" name="locomotive[type_ddc]" value="{{ $rollingStock->locomotive->type_ddc }}" disabled>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
