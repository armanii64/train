<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        body {
            font-family: DejaVu Sans;
            font-size: 12px;
        }

        table {
            margin-top: 4px;
            width: 100%;
            border-collapse: collapse;
        }

        .bordered td {
            border-color: #959594;
            border-style: solid;
            border-width: 1px;
            padding: 2px 2px;
            vertical-align: middle;
        }

        .text-left {
            text-align: left;
        }

        .text-center {
            text-align: center;
        }

        .fl {
            float: left;
        }

        .fr {
            float: right;
        }

        .ft {
            float: top;
        }

        .w30p {
            width: 30%;
        }

        .bold-value {
            font-weight: bold;
        }

        .title {
            font-size: 10px;
        }

        .main-image-row img {
            max-width: 650px;
            max-height: 200px;
        }

        .main-image-row td {
            height: 200px;
            text-align: center;
        }

        .description {
            height: 105px;
        }

        .uic-cell {
            height: 75px;
            text-align: center;
            float: left;
        }

        .uic-cell .value {
            font-weight: bold;
            font-size: 25px;
        }

        .epoch-cell {
            height: 65px;
            text-align: center;
        }

        .epoch-cell .value {
            padding-left: 5px;
        }
    </style>
</head>
<body>
<table class="bordered">
    <tbody>
    <tr>
        <td colspan="4">
            <span class="title">{{ __('app.rollingStock.labels.number') }}:</span><br/>
            <span class="bold-value">{{ $number }}</span>
        </td>
    </tr>
    <tr class="main-image-row">
        <td colspan="4">
            <span class="title fl">{{ __('app.rollingStock.labels.graphic') }}:</span><br/>
            @if (!is_null($image_path))
                <img src="{{ storage_path('app/public/' . $image_path) }}" alt="Image">
            @endif
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <span class="title">{{ __('app.rollingStock.labels.modelDescription') }}:</span><br/>
            <span>{{ $model_description }}</span>
        </td>
        <td>
            <span class="title">{{ __('app.rollingStock.labels.modelBottomSign') }}:</span><br/>
            <span>{{ $model_bottom_sign }}</span>
        </td>
    </tr>
    <tr>
        <td rowspan="5">
            <span class="title ft">{{ __('app.rollingStock.labels.modelOwner') }}:</span><br/>
            <span>{{ $model_owner }}</span>
        </td>
        <td colspan="3">
            <span class="title">{{ __('app.rollingStock.labels.modelProducer') }}: {{ $model_producer }}</span>
        </td>
    </tr>
    <tr>
        <td class="text-left">
            <span class="title">{{ __('app.rollingStock.labels.couplings') }}:</span>
            <span class="fr">{{ $couplings }}</span>
        </td>
        <td class="text-left">
            <span class="title">{{ __('app.rollingStock.labels.wheels') }}:</span>
            <span class="fr">{{ $wheels }}</span>
        </td>
        <td class="text-left">
            <span class="title">{{ __('app.rollingStock.labels.modelLengthNoShort') }}:</span>
            <span class="fr">{{ $model_length }}mm</span>
        </td>
    </tr>
    <tr>
        <td class="text-left">
            <span class="title">{{ __('app.rollingStock.labels.nemSocket') }}:</span>
            <span class="fr">{{ $nem_socket }}</span>
        </td>
        <td class="text-left">
            <span class="title">{{ __('app.rollingStock.labels.insideDimension') }}:</span>
            <span class="fr">{{ $inside_dimension }}</span>
        </td>
        <td class="text-left">
            <span class="title">{{ __('app.rollingStock.labels.lastRevision') }}:</span>
            <span class="fr">{{ $freight['last_revision'] }}</span>
        </td>
    </tr>
    <tr>
        <td class="text-left">
            <span class="title">{{ __('app.rollingStock.labels.kks') }}:</span>
            <span class="fr">{{ $kks }}</span>
        </td>
        <td class="text-left">
            <span class="title">{{ __('app.rollingStock.labels.wheelFlange') }}:</span>
            <span class="fr">{{ $wheel_flange }}</span>
        </td>
        <td class="text-left">
            <span class="title">{{ __('app.rollingStock.labels.modelWeightNoShort') }}:</span>
            <span class="fr">{{ $model_weight }}g</span>
        </td>
    </tr>
    <tr>
        <td class="text-left">
            <span class="title">{{ __('app.rollingStock.labels.bumpersSpringLoadedShort') }}:</span>
            <span class="fr">{{ $bumpers_spring_loaded }}</span>
        </td>
        <td class="text-left">
            <span class="title">{{ __('app.rollingStock.labels.rp25') }}:</span>
            <span class="fr">{{ $rp_25 }}</span>
        </td>
        <td></td>
    </tr>
    </tbody>
</table>
<table class="bordered">
    <tbody>
    <tr>
        <td colspan="3">
            <span class="title">{{ __('app.rollingStock.labels.number') }}:</span><br/>
            <span class="bold-value">{{ $number }}</span>
        </td>
        <td class="text-center" colspan="1">
            <span class="bold-value">{{ $railway_management }}</span>
        </td>
        <td class="text-center w30p">
            <span></span>
        </td>
    </tr>
    <tr>
        <td class="epoch-cell" rowspan="2" colspan="2">
            <span>{{ $epoch }}</span>
            <span class="value">{{ $freight['car_sign'] }}</span>
        </td>
        <td colspan="2"></td>
        <td rowspan="7"></td>
    </tr>
    <tr>
        <td colspan="2"></td>
    </tr>
    <tr>
        <td colspan="1" class="uic-cell">
            <span class="title ft">{{ __('app.rollingStock.labels.uicType') }}:</span><br/>
            <span class="value">{{ $freight['uic_type'] }}</span>
        </td>
        <td colspan="3">
            <span class="title ft">{{ __('app.rollingStock.labels.modelDescription') }}:</span><br/>
            <span class="bold-value ft">{{ $model_description }}</span>
        </td>
    </tr>
    <tr>
        <td colspan="2" class="text-left">
            <span class="title">{{ __('app.rollingStock.labels.breakType') }}:</span>
            <span class="fr">{{ $freight['break_type'] }}</span>
        </td>
        <td colspan="2" class="text-left">
            <span class="title">{{ __('app.rollingStock.labels.maximumSpeedNoShort') }}:</span>
            <span class="fr">{{ $maximum_speed }}km/h</span>
        </td>
    </tr>
    <tr>
        <td colspan="2" class="text-left">
            <span class="title">{{ __('app.rollingStock.labels.totalLengthNoShort') }}:</span>
            <span class="fr">{{ $total_length }}m</span>
        </td>
        <td colspan="2" class="text-left">
            <span class="title">{{ __('app.rollingStock.labels.cargoLengthNoShort') }}:</span>
            <span class="fr">{{ $freight['cargo_length'] }}m</span>
        </td>
    </tr>
    <tr>
        <td colspan="2" class="text-left">
            <span class="title">{{ __('app.rollingStock.labels.wheelBaseNoShort') }}:</span>
            <span class="fr">{{ $freight['wheel_base'] }}m</span>
        </td>
        <td colspan="2" class="text-left">
            <span class="title">{{ __('app.rollingStock.labels.cargoAreaNoShort') }}:</span>
            <span class="fr">{{ $freight['cargo_area'] }}m<sup>2</sup></span>
        </td>
    </tr>
    <tr>
        <td colspan="2" class="text-left">
            <span class="title">{{ __('app.rollingStock.labels.grObcNoShort') }}:</span>
            <span class="fr">{{ $freight['gr_obc'] }}t</span>
        </td>
        <td colspan="2" class="text-left">
            <span class="title">{{ __('app.rollingStock.labels.cargoVolumeNoShort') }}:</span>
            <span class="fr">{{ $freight['cargo_volume'] }}m<sup>3</sup></span>
        </td>
    </tr>
    <tr>
        <td colspan="4" class="description">
            <span class="title ft">{{ __('app.rollingStock.labels.usageNotes') }}:</span><br/>
            <span class="ft">{{ $usage_notes }}</span>
        </td>
        <td class="text-center">
            <span><b>{{ $freight['intern_ver'] }}</b></span>
        </td>
    </tr>
    </tbody>
</table>
</body>
</html>
