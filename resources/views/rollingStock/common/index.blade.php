@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default" style="min-height: 100vh;">
            <div class="row">
                <div class="col-md-6">
                    <h1>{{ __("app.rollingStock.labels.$type.title") }}</h1>
                </div>
                <div class="col-md-6">
                    <a class="pull-right" href="{{ route('rollingStock.create') }}?type={{ $type }}">
                        <button type="button" class="btn btn-primary btn-circle" title="{{ __('app.common.add') }}">
                            <i class="fa fa-plus"></i>
                        </button>
                    </a>
                </div>
            </div>
            @include('helpers.flash')
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table task-table table-hover table-bordered">
                        <thead class="thead-dark text-center">
                        <tr>
                            <th scope="col">{{ __('app.common.actions') }}</th>
                            <th scope="col">{{ __('app.common.#') }}</th>
                            @if(Auth::user()->is_admin)
                                <th scope="col">{{ __('app.rollingStock.labels.user') }}</th>
                            @endif
                            <th scope="col">{{ __('app.rollingStock.labels.events') }}</th>
                            <th scope="col">{{ __('app.rollingStock.labels.rollingStocks') }}</th>
                            <th scope="col">{{ __("app.rollingStock.labels.$type.number") }}</th>
                            <th scope="col">{{ __('app.rollingStock.labels.modelDescription') }}</th>
                            <th scope="col">{{ __('app.rollingStock.labels.modelBottomSign') }}</th>
                            <th scope="col">{{ __('app.rollingStock.labels.modelOwner') }}</th>
                            <th scope="col">{{ __('app.rollingStock.labels.modelProducer') }}</th>
                            <th scope="col">{{ __('app.rollingStock.labels.couplings') }}</th>
                            <th scope="col">{{ __('app.rollingStock.labels.nemSocket') }}</th>
                            <th scope="col">{{ __('app.rollingStock.labels.kks') }}</th>
                            <th scope="col">{{ __('app.rollingStock.labels.bumpersSpringLoaded') }}</th>
                            <th scope="col">{{ __('app.rollingStock.labels.wheels') }}</th>
                            <th scope="col">{{ __('app.rollingStock.labels.insideDimension') }}</th>
                            <th scope="col">{{ __('app.rollingStock.labels.wheelFlange') }}</th>
                            <th scope="col">{{ __('app.rollingStock.labels.rp25') }}</th>
                            <th scope="col">{{ __('app.rollingStock.labels.modelLength') }}</th>
                            @if ($type === 'freight')
                                @include('rollingStock.freight.index-columns-second-page')
                            @elseif ($type === 'locomotive')
                                @include('rollingStock.locomotive.index-columns-second-page')
                            @else
                                @include('rollingStock.passenger.index-columns-second-page')
                            @endif
                            <th scope="col">{{ __('app.rollingStock.labels.disinfected') }}</th>
                            <th scope="col">{{ __('app.rollingStock.labels.efficient') }}</th>
                            <th scope="col">{{ __('app.rollingStock.labels.expressDelivery') }}</th>
                            <th scope="col">{{ __('app.rollingStock.labels.faultDescription') }}</th>
                            <th scope="col">{{ __('app.rollingStock.labels.additionalNotes1') }}</th>
                            <th scope="col">{{ __('app.rollingStock.labels.additionalNotes2') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($entities as $entity)
                            <tr>
                                <td class="text-center">
                                    <div class="wp-150">
                                        <a href="{{ route('rollingStock.show', ['id' => $entity->id]) }}">
                                            <button class="btn btn-outline-dark btn-sm"><i class="fa fa-search"></i></button>
                                        </a>
                                        @if (count($entity->compositions) === 0)
                                            <a href="{{ route('rollingStock.edit', ['id' => $entity->id]) }}">
                                                <button class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></button>
                                            </a>
                                            <button class="btn btn-danger btn-sm delete" data-id="{{ $entity->id }}">
                                                <i class="fa fa-remove"></i>
                                            </button>
                                        @endif
                                        @if ($type === 'freight')
                                            <a href="{{ route('freight.export', ['id' => $entity->id]) }}" target="_blank">
                                                <button class="btn btn-secondary btn-sm"><i class="fa fa-file-pdf-o"></i></button>
                                            </a>
                                        @endif
                                    </div>
                                </td>
                                <td>{{ $entity->id }}</td>
                                @if(Auth::user()->is_admin)
                                    <td>{{ $entity->user->name }}</td>
                                @endif
                                <td>
                                    <ul>
                                        @foreach ($entity->events as $event)
                                            <li>{{ $event->name }}</li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td>
                                    <div class="wp-200">
                                        <ul>
                                            @foreach ($entity->compositions as $composition)
                                                @if ($composition->type == 'copy')
                                                    <li @if ($composition->status == 'accepted') class="font-weight-bold" @endif>
                                                        <div>{{ $composition->name }}</div>
                                                        @if (auth()->id() != $composition->user->id)
                                                            <div>({{ $composition->user->name }})</div>
                                                        @endif
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </td>
                                <td>{{ $entity->number}}</td>
                                <td>{{ $entity->model_description}}</td>
                                <td>{{ $entity->model_bottom_sign}}</td>
                                <td>{{ $entity->model_owner}}</td>
                                <td>{{ $entity->model_producer }}</td>
                                <td>{{ $entity->couplings }}</td>
                                <td>{{ $entity->nem_socket }}</td>
                                <td>{{ $entity->kks }}</td>
                                <td>{{ $entity->bumpers_spring_loaded }}</td>
                                <td>{{ $entity->wheels }}</td>
                                <td>{{ $entity->inside_dimension }}</td>
                                <td>{{ $entity->wheel_flange }}</td>
                                <td>{{ $entity->rp_25 }}</td>
                                <td>{{ $entity->model_length }}</td>
                                @if ($type === 'freight')
                                    @include('rollingStock.freight.index-data-second-page')
                                @elseif ($type === 'locomotive')
                                    @include('rollingStock.locomotive.index-data-second-page')
                                @else
                                    @include('rollingStock.passenger.index-data-second-page')
                                @endif
                                <td>{{ $entity->disinfected }}</td>
                                <td>{{ $entity->efficient }}</td>
                                <td>{{ $entity->express_delivery }}</td>
                                <td>{{ $entity->fault_description }}</td>
                                <td>{{ $entity->additional_notes_1 }}</td>
                                <td>{{ $entity->additional_notes_2 }}</td>
                            </tr>
                        @empty
                            <tr class="text-center">
                                <td colspan="{{ $tdCounts }}">{{ __('app.common.noData') }}</td>
                            </tr
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript-files')
    <script type="text/javascript" src="{{ asset('js/common/delete.js') }}"></script>
@endsection
