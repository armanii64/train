<div class="card-body freight d-none">
    <div class="form-group row">
        <div class="col-md-3">
            <label for="freight_railway_management" class="col-md-12 control-label">{{ __('app.rollingStock.labels.railwayManagement') }}</label>
            <div class="col-md-12">
                <input id="freight_railway_management" class="form-control freight-field" name="common[railway_management]" disabled>
            </div>
        </div>
        <div class="col-md-3">
            <label for="freight_epoch" class="col-md-12 control-label">{{ __('app.rollingStock.labels.epoch') }}</label>
            <div class="col-md-12">
                <input id="freight_epoch" class="form-control freight-field" name="common[epoch]" disabled>
            </div>
        </div>
        <div class="col-md-3">
            <label for="freight_car_sign" class="col-md-12 control-label">{{ __('app.rollingStock.labels.carSign') }}</label>
            <div class="col-md-12">
                <input id="freight_car_sign" class="form-control freight-field" name="freight[car_sign]" disabled>
            </div>
        </div>
        <div class="col-md-3">
            <label for="freight_uic_type" class="col-md-12 control-label">{{ __('app.rollingStock.labels.uicType') }}</label>
            <div class="col-md-12">
                <input id="freight_uic_type" class="form-control freight-field" name="freight[uic_type]" disabled>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-6">
            <label for="freight_break_type" class="col-md-12 control-label">{{ __('app.rollingStock.labels.breakType') }}</label>
            <div class="col-md-12">
                <input id="freight_break_type" class="form-control freight-field" name="freight[break_type]" disabled>
            </div>
        </div>
        <div class="col-md-6">
            <label for="freight_total_length" class="col-md-12 control-label">{{ __('app.rollingStock.labels.totalLength') }}</label>
            <div class="col-md-12">
                <input type="number" step="0.01" min="0.01" id="freight_total_length" class="form-control freight-field" name="common[total_length]" disabled>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3">
            <label for="freight_wheel_base" class="col-md-12 control-label">{{ __('app.rollingStock.labels.wheelBase') }}</label>
            <div class="col-md-12">
                <input type="number" step="0.01" min="0.01" id="freight_wheel_base" class="form-control freight-field" name="freight[wheel_base]" disabled>
            </div>
        </div>
        <div class="col-md-3">
            <label for="freight_gr_obc" class="col-md-12 control-label">Gr.obc. C (t)</label>
            <div class="col-md-12">
                <input id="freight_gr_obc" class="form-control freight-field" name="freight[gr_obc]" disabled>
            </div>
        </div>
        <div class="col-md-3">
            <label for="freight_maximum_speed" class="col-md-12 control-label">{{ __('app.rollingStock.labels.maximumSpeed') }}</label>
            <div class="col-md-12">
                <input type="number" step="0.01" min="0.01" id="freight_maximum_speed" class="form-control freight-field" name="common[maximum_speed]" disabled>
            </div>
        </div>
        <div class="col-md-3">
            <label for="freight_intern_ver" class="col-md-12 control-label">{{ __('app.rollingStock.labels.internVer') }}</label>
            <div class="col-md-12">
                <input id="freight_intern_ver" class="form-control freight-field" name="freight[intern_ver]" disabled>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3">
            <label for="freight_cargo_length" class="col-md-12 control-label">{{ __('app.rollingStock.labels.cargoLength') }}</label>
            <div class="col-md-12">
                <input type="number" step="0.01" min="0.01" id="freight_cargo_length" class="form-control freight-field" name="freight[cargo_length]" disabled>
            </div>
        </div>
        <div class="col-md-3">
            <label for="freight_cargo_area" class="col-md-12 control-label">{{ __('app.rollingStock.labels.cargoArea') }}</label>
            <div class="col-md-12">
                <input type="number" step="1" min="0" id="freight_cargo_area" class="form-control freight-field" name="freight[cargo_area]" disabled>
            </div>
        </div>
        <div class="col-md-3">
            <label for="freight_cargo_volume" class="col-md-12 control-label">{{ __('app.rollingStock.labels.cargoVolume') }}</label>
            <div class="col-md-12">
                <input type="number" step="1" min="0" id="freight_cargo_volume" class="form-control freight-field" name="freight[cargo_volume]" disabled>
            </div>
        </div>
        <div class="col-md-3">
            <label for="freight_usage_notes" class="col-md-12 control-label">{{ __('app.rollingStock.labels.usageNotes') }}</label>
            <div class="col-md-12">
                <textarea id="freight_usage_notes" class="form-control freight-field" name="common[usage_notes]" disabled></textarea>
            </div>
        </div>
    </div>
</div>
