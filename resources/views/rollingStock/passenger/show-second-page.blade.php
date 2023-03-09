<div class="card-body passengerLocomotive">
    <div class="form-group row">
        <div class="col-md-3">
            <label for="passenger_railway_management" class="col-md-12 control-label">{{ __('app.rollingStock.labels.railwayManagement') }}</label>
            <div class="col-md-12">
                <input id="passenger_railway_management" class="form-control" name="common[railway_management]" value="{{ $rollingStock->railway_management }}" disabled>
            </div>
        </div>
        <div class="col-md-3">
            <label for="passenger_epoch" class="col-md-12 control-label">{{ __('app.rollingStock.labels.epoch') }}</label>
            <div class="col-md-12">
                <input id="passenger_epoch" class="form-control" name="common[epoch]" value="{{ $rollingStock->epoch }}" disabled>
            </div>
        </div>
        <div class="col-md-3">
            <label for="passenger_car_sign" class="col-md-12 control-label">{{ __('app.rollingStock.labels.carSign') }}</label>
            <div class="col-md-12">
                <input id="passenger_car_sign" class="form-control" name="passenger[car_sign]" value="{{ $rollingStock->passenger->car_sign }}" disabled>
            </div>
        </div>
        <div class="col-md-3">
            <label for="passenger_uic_type" class="col-md-12 control-label">{{ __('app.rollingStock.labels.uicType') }}</label>
            <div class="col-md-12">
                <input id="passenger_uic_type" class="form-control" name="passenger[uic_type]" value="{{ $rollingStock->passenger->uic_type }}" disabled>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3">
            <label for="passenger_total_length" class="col-md-12 control-label">{{ __('app.rollingStock.labels.totalLength') }}</label>
            <div class="col-md-12">
                <input type="number" step="0.01" min="0.01" id="passenger_total_length" class="form-control" name="common[total_length]" value="{{ $rollingStock->total_length }}" disabled>
            </div>
        </div>
        <div class="col-md-3">
            <label for="passenger_service_weight" class="col-md-12 control-label">{{ __('app.rollingStock.labels.serviceWeight') }}</label>
            <div class="col-md-12">
                <input type="number" step="0.01" min="0.01" id="passenger_service_weight" class="form-control" name="passenger[service_weight]" value="{{ $rollingStock->passenger->service_weight }}" disabled>
            </div>
        </div>
        <div class="col-md-3">
            <label for="passenger_maximum_speed" class="col-md-12 control-label">{{ __('app.rollingStock.labels.maximumSpeed') }}</label>
            <div class="col-md-12">
                <input type="number" step="0.01" min="0.01" id="passenger_maximum_speed" class="form-control" name="common[maximum_speed]" value="{{ $rollingStock->maximum_speed }}" disabled>
            </div>
        </div>
        <div class="col-md-3">
            <label for="passenger_intern_ver" class="col-md-12 control-label">{{ __('app.rollingStock.labels.internVer') }}</label>
            <div class="col-md-12">
                <input id="passenger_intern_ver" class="form-control" name="passenger[intern_ver]" value="{{ $rollingStock->passenger->intern_ver }}" disabled>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-3">
            <label for="passenger_places_first_class" class="col-md-12 control-label">{{ __('app.rollingStock.labels.placesFirstClass') }}</label>
            <div class="col-md-12">
                <input type="number" step="1" min="0" id="passenger_places_first_class" class="form-control" name="passenger[places_first_class]" value="{{ $rollingStock->passenger->places_first_class }}" disabled>
            </div>
        </div>
        <div class="col-md-3">
            <label for="passenger_places_second_class" class="col-md-12 control-label">{{ __('app.rollingStock.labels.placesSecondClass') }}</label>
            <div class="col-md-12">
                <input type="number" step="1" min="0" id="passenger_places_second_class" class="form-control" name="passenger[places_second_class]" value="{{ $rollingStock->passenger->places_second_class }}" disabled>
            </div>
        </div>
        <div class="col-md-3">
            <label for="passenger_heating" class="col-md-12 control-label">{{ __('app.rollingStock.labels.heating') }}</label>
            <div class="col-md-12">
                <input id="passenger_heating" class="form-control" name="passenger[heating]" value="{{ $rollingStock->passenger->heating }}" disabled>
            </div>
        </div>
        <div class="col-md-3">
            <label for="passenger_usage_notes" class="col-md-12 control-label">{{ __('app.rollingStock.labels.usageNotes') }} {{ __('app.rollingStock.labels.car') }}</label>
            <div class="col-md-12">
                <textarea id="passenger_usage_notes" class="form-control" name="common[usage_notes]" disabled>{{ $rollingStock->usage_notes }}</textarea>
            </div>
        </div>
    </div>
</div>
