<div class="card-body locomotive">
    <div class="form-group row">
        <div class="col-md-3">
            <label for="locomotive_railway_management" class="col-md-12 control-label">{{ __('app.rollingStock.labels.railwayManagement') }}</label>
            <div class="col-md-12">
                <input id="locomotive_railway_management" class="form-control locomotive-field" name="common[railway_management]">
            </div>
        </div>
        <div class="col-md-3">
            <label for="locomotive_epoch" class="col-md-12 control-label">{{ __('app.rollingStock.labels.epoch') }}</label>
            <div class="col-md-12">
                <input id="locomotive_epoch" class="form-control" name="common[epoch]">
            </div>
        </div>
        <div class="col-md-3">
            <label for="locomotive_name" class="col-md-12 control-label">{{ __('app.rollingStock.labels.name') }}</label>
            <div class="col-md-12">
                <input id="locomotive_name" class="form-control" name="locomotive[name]">
            </div>
        </div>
        <div class="col-md-3">
            <label for="locomotive_axle_load" class="col-md-12 control-label">{{ __('app.rollingStock.labels.axleLoad') }}</label>
            <div class="col-md-12">
                <input id="locomotive_axle_load" class="form-control" name="locomotive[axle_load]">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3">
            <label for="locomotive_total_length" class="col-md-12 control-label">{{ __('app.rollingStock.labels.totalLength') }}</label>
            <div class="col-md-12">
                <input type="number" step="0.01" min="0.01" id="locomotive_total_length" class="form-control locomotive-field" name="common[total_length]">
            </div>
        </div>
        <div class="col-md-3">
            <label for="locomotive_wheel_base" class="col-md-12 control-label">{{ __('app.rollingStock.labels.wheelBase') }}</label>
            <div class="col-md-12">
                <input type="number" step="0.01" min="0.01" id="locomotive_wheel_base" class="form-control" name="locomotive[wheel_base]">
            </div>
        </div>
        <div class="col-md-3">
            <label for="locomotive_service_weight" class="col-md-12 control-label">{{ __('app.rollingStock.labels.serviceWeight') }}</label>
            <div class="col-md-12">
                <input type="number" step="0.01" min="0.01" id="locomotive_service_weight" class="form-control locomotive-field" name="locomotive[service_weight]">
            </div>
        </div>
        <div class="col-md-3">
            <label for="locomotive_maximum_speed" class="col-md-12 control-label">{{ __('app.rollingStock.labels.maximumSpeed') }}</label>
            <div class="col-md-12">
                <input type="number" step="0.01" min="0.01" id="locomotive_maximum_speed" class="form-control locomotive-field" name="common[maximum_speed]">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3">
            <label for="locomotive_type_of_heating" class="col-md-12 control-label">{{ __('app.rollingStock.labels.typeOfHeating') }}</label>
            <div class="col-md-12">
                <input id="locomotive_type_of_heating" class="form-control locomotive-field" name="locomotive[type_of_heating]">
            </div>
        </div>
        <div class="col-md-3">
            <label for="locomotive_axle_arrangement" class="col-md-12 control-label">{{ __('app.rollingStock.labels.axleArrangement') }}</label>
            <div class="col-md-12">
                <input id="locomotive_axle_arrangement" class="form-control locomotive-field" name="locomotive[axle_arrangement]">
            </div>
        </div>
        <div class="col-md-3">
            <label for="locomotive_power" class="col-md-12 control-label">{{ __('app.rollingStock.labels.power') }}</label>
            <div class="col-md-12">
                <input type="number" step="0.01" min="0.01" id="locomotive_power" class="form-control locomotive-field" name="locomotive[power]">
            </div>
        </div>
        <div class="col-md-3">
            <label for="locomotive_usage_notes" class="col-md-12 control-label">{{ __('app.rollingStock.labels.usageNotes') }}</label>
            <div class="col-md-12">
                <textarea id="locomotive_usage_notes" class="form-control locomotive-field" name="common[usage_notes]"></textarea>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3">
            <label for="locomotive_address_ddc" class="col-md-12 control-label">{{ __('app.rollingStock.labels.addressDdc') }}</label>
            <div class="col-md-12">
                <input type="number" step="1" min="0" id="locomotive_address_ddc" class="form-control locomotive-field" name="locomotive[address_ddc]">
            </div>
        </div>
        <div class="col-md-3">
            <label for="locomotive_speed_steps" class="col-md-12 control-label">{{ __('app.rollingStock.labels.speedSteps') }}</label>
            <div class="col-md-12">
                <input id="locomotive_speed_steps" class="form-control locomotive-field" name="locomotive[speed_steps]">
            </div>
        </div>
        <div class="col-md-3">
            <label for="locomotive_mode" class="col-md-12 control-label">{{ __('app.rollingStock.labels.mode') }}</label>
            <div class="col-md-12">
                <input id="locomotive_mode" class="form-control locomotive-field" name="locomotive[mode]">
            </div>
        </div>
        <div class="col-md-3">
            <label for="locomotive_analog" class="col-md-12 control-label">{{ __('app.rollingStock.labels.analog') }}</label>
            <div class="col-md-12">
                <input id="locomotive_analog" class="form-control locomotive-field" name="locomotive[analog]">
            </div>
        </div>
    </div>
</div>
