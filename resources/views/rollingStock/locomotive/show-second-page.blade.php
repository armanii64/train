<div class="card-body">
    <div class="form-group row">
        <div class="col-md-4">
            <label for="locomotive_railway_management" class="col-md-12 control-label">{{ __('app.rollingStock.labels.railwayManagement') }}</label>
            <div class="col-md-12">
                <input id="locomotive_railway_management" class="form-control" name="common[railway_management]" value="{{ $rollingStock->railway_management }}" disabled>
            </div>
        </div>
        <div class="col-md-4">
            <label for="locomotive_name" class="col-md-12 control-label">{{ __('app.rollingStock.labels.name') }}</label>
            <div class="col-md-12">
                <input id="locomotive_name" class="form-control" name="locomotive[name]" value="{{ $rollingStock->locomotive->name }}" disabled>
            </div>
        </div>
        <div class="col-md-4">
            <label for="locomotive_axle_load" class="col-md-12 control-label">{{ __('app.rollingStock.labels.axleLoad') }}</label>
            <div class="col-md-12">
                <input id="locomotive_axle_load" class="form-control" name="locomotive[axle_load]" value="{{ $rollingStock->locomotive->axle_load }}" disabled>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3">
            <label for="locomotive_total_length" class="col-md-12 control-label">{{ __('app.rollingStock.labels.totalLength') }}</label>
            <div class="col-md-12">
                <input type="number" step="0.01" min="0.01" id="locomotive_total_length" class="form-control" name="common[total_length]" value="{{ $rollingStock->total_length }}" disabled>
            </div>
        </div>
        <div class="col-md-3">
            <label for="locomotive_wheel_base" class="col-md-12 control-label">{{ __('app.rollingStock.labels.wheelBase') }}</label>
            <div class="col-md-12">
                <input type="number" step="0.01" min="0.01" id="locomotive_wheel_base" class="form-control" name="locomotive[wheel_base]" value="{{ $rollingStock->locomotive->wheel_base }}" disabled>
            </div>
        </div>
        <div class="col-md-3">
            <label for="locomotive_service_weight" class="col-md-12 control-label">{{ __('app.rollingStock.labels.serviceWeight') }}</label>
            <div class="col-md-12">
                <input type="number" step="0.01" min="0.01" id="locomotive_service_weight" class="form-control" name="locomotive[service_weight]" value="{{ $rollingStock->locomotive->service_weight }}" disabled>
            </div>
        </div>
        <div class="col-md-3">
            <label for="locomotive_maximum_speed" class="col-md-12 control-label">{{ __('app.rollingStock.labels.maximumSpeed') }}</label>
            <div class="col-md-12">
                <input type="number" step="0.01" min="0.01" id="locomotive_maximum_speed" class="form-control" name="common[maximum_speed]" value="{{ $rollingStock->maximum_speed }}" disabled>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3">
            <label for="locomotive_type_of_heating" class="col-md-12 control-label">{{ __('app.rollingStock.labels.typeOfHeating') }}</label>
            <div class="col-md-12">
                <input id="locomotive_type_of_heating" class="form-control" name="locomotive[type_of_heating]" value="{{ $rollingStock->locomotive->type_of_heating }}" disabled>
            </div>
        </div>
        <div class="col-md-3">
            <label for="locomotive_axle_arrangement" class="col-md-12 control-label">{{ __('app.rollingStock.labels.axleArrangement') }}</label>
            <div class="col-md-12">
                <input id="locomotive_axle_arrangement" class="form-control" name="locomotive[axle_arrangement]" value="{{ $rollingStock->locomotive->axle_arrangement }}" disabled>
            </div>
        </div>
        <div class="col-md-3">
            <label for="locomotive_power" class="col-md-12 control-label">{{ __('app.rollingStock.labels.power') }}</label>
            <div class="col-md-12">
                <input type="number" step="0.01" min="0.01" id="locomotive_power" class="form-control" name="locomotive[power]" value="{{ $rollingStock->locomotive->power }}" disabled>
            </div>
        </div>
        <div class="col-md-3">
            <label for="locomotive_usage_notes" class="col-md-12 control-label">{{ __('app.rollingStock.labels.usageNotes') }}</label>
            <div class="col-md-12">
                <textarea id="locomotive_usage_notes" class="form-control" name="common[usage_notes]" disabled>{{ $rollingStock->usage_notes }}</textarea>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3">
            <label for="locomotive_address_ddc" class="col-md-12 control-label">{{ __('app.rollingStock.labels.addressDdc') }}</label>
            <div class="col-md-12">
                <input type="number" step="1" min="0" id="locomotive_address_ddc" class="form-control" name="locomotive[address_ddc]" value="{{ $rollingStock->locomotive->address_ddc }}" disabled>
            </div>
        </div>
        <div class="col-md-3">
            <label for="locomotive_speed_steps" class="col-md-12 control-label">{{ __('app.rollingStock.labels.speedSteps') }}</label>
            <div class="col-md-12">
                <input id="locomotive_speed_steps" class="form-control" name="locomotive[speed_steps]" value="{{ $rollingStock->locomotive->speed_steps }}" disabled>
            </div>
        </div>
        <div class="col-md-3">
            <label for="locomotive_mode" class="col-md-12 control-label">{{ __('app.rollingStock.labels.mode') }}</label>
            <div class="col-md-12">
                <input id="locomotive_mode" class="form-control" name="locomotive[mode]" value="{{ $rollingStock->locomotive->mode }}" disabled>
            </div>
        </div>
        <div class="col-md-3">
            <label for="locomotive_analog" class="col-md-12 control-label">{{ __('app.rollingStock.labels.analog') }}</label>
            <div class="col-md-12">
                <input id="locomotive_analog" class="form-control" name="locomotive[analog]" value="{{ $rollingStock->locomotive->analog }}" disabled>
            </div>
        </div>
    </div>
</div>
