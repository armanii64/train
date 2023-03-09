<div class="card-body freight">
    <div class="form-group row">
        <div class="col-md-3">
            <label for="freight_railway_management" class="col-md-12 control-label">{{ __('app.rollingStock.labels.railwayManagement') }}</label>
            <div class="col-md-12">
                <input id="freight_railway_management" class="form-control" name="common[railway_management]" value="{{ $rollingStock->railway_management }}" disabled>
            </div>
        </div>
        <div class="col-md-3">
            <label for="freight_epoch" class="col-md-12 control-label">{{ __('app.rollingStock.labels.epoch') }}</label>
            <div class="col-md-12">
                <input id="freight_epoch" class="form-control" name="common[epoch]" value="{{ $rollingStock->epoch }}" disabled>
            </div>
        </div>
        <div class="col-md-3">
            <label for="freight_car_sign" class="col-md-12 control-label">{{ __('app.rollingStock.labels.carSign') }}</label>
            <div class="col-md-12">
                <input id="freight_car_sign" class="form-control" name="freight[car_sign]" value="{{ $rollingStock->freight->car_sign }}" disabled>
            </div>
        </div>
        <div class="col-md-3">
            <label for="freight_uic_type" class="col-md-12 control-label">{{ __('app.rollingStock.labels.uicType') }}</label>
            <div class="col-md-12">
                <input id="freight_uic_type" class="form-control" name="freight[uic_type]" value="{{ $rollingStock->freight->uic_type }}" disabled>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-6">
            <label for="freight_break_type" class="col-md-12 control-label">{{ __('app.rollingStock.labels.breakType') }}</label>
            <div class="col-md-12">
                <input id="freight_break_type" class="form-control" name="freight[break_type]" value="{{ $rollingStock->freight->break_type }}" disabled>
            </div>
        </div>
        <div class="col-md-6">
            <label for="freight_total_length" class="col-md-12 control-label">{{ __('app.rollingStock.labels.totalLength') }}</label>
            <div class="col-md-12">
                <input type="number" step="0.01" min="0.01" id="freight_total_length" class="form-control" name="common[total_length]" value="{{ $rollingStock->total_length }}" disabled>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3">
            <label for="freight_wheel_base" class="col-md-12 control-label">{{ __('app.rollingStock.labels.wheelBase') }}</label>
            <div class="col-md-12">
                <input type="number" step="0.01" min="0.01" id="freight_wheel_base" class="form-control" name="freight[wheel_base]" value="{{ $rollingStock->freight->wheel_base }}" disabled>
            </div>
        </div>
        <div class="col-md-3">
            <label for="freight_gr_obc" class="col-md-12 control-label">{{ __('app.rollingStock.labels.grObc') }}</label>
            <div class="col-md-12">
                <input id="freight_gr_obc" class="form-control" name="freight[gr_obc]" value="{{ $rollingStock->freight->gr_obc }}" disabled>
            </div>
        </div>
        <div class="col-md-3">
            <label for="freight_maximum_speed" class="col-md-12 control-label">{{ __('app.rollingStock.labels.maximumSpeed') }}</label>
            <div class="col-md-12">
                <input type="number" step="0.01" min="0.01" id="freight_maximum_speed" class="form-control" name="common[maximum_speed]" value="{{ $rollingStock->maximum_speed }}" disabled>
            </div>
        </div>
        <div class="col-md-3">
            <label for="freight_intern_ver" class="col-md-12 control-label">{{ __('app.rollingStock.labels.internVer') }}</label>
            <div class="col-md-12">
                <input id="freight_intern_ver" class="form-control" name="freight[intern_ver]" value="{{ $rollingStock->freight->intern_ver }}" disabled>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3">
            <label for="freight_cargo_length" class="col-md-12 control-label">{{ __('app.rollingStock.labels.cargoLength') }}</label>
            <div class="col-md-12">
                <input type="number" step="0.01" min="0.01" id="freight_cargo_length" class="form-control" name="freight[cargo_length]" value="{{ $rollingStock->freight->cargo_length }}" disabled>
            </div>
        </div>
        <div class="col-md-3">
            <label for="freight_cargo_area" class="col-md-12 control-label">{{ __('app.rollingStock.labels.cargoArea') }}</label>
            <div class="col-md-12">
                <input type="number" step="1" min="0" id="freight_cargo_area" class="form-control" name="freight[cargo_area]" value="{{ $rollingStock->freight->cargo_area }}" disabled>
            </div>
        </div>
        <div class="col-md-3">
            <label for="freight_cargo_volume" class="col-md-12 control-label">{{ __('app.rollingStock.labels.cargoVolume') }}</label>
            <div class="col-md-12">
                <input type="number" step="1" min="0" id="freight_cargo_volume" class="form-control" name="freight[cargo_volume]" value="{{ $rollingStock->freight->cargo_volume }}" disabled>
            </div>
        </div>
        <div class="col-md-3">
            <label for="freight_usage_notes" class="col-md-12 control-label">{{ __('app.rollingStock.labels.usageNotes') }}</label>
            <div class="col-md-12">
                <textarea id="freight_usage_notes" class="form-control" name="common[usage_notes]" disabled>{{ $rollingStock->usage_notes }}</textarea>
            </div>
        </div>
    </div>
</div>
