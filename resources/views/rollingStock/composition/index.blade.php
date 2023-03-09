@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default" style="min-height: 100vh;">
            <div class="row">
                <div class="col-md-6">
                    <h1>{{ __('app.composition.index') }}</h1>
                </div>
                <div class="col-md-6">
                    <a class="pull-right" href="{{ route('composition.create') }}">
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
                            <th scope="col">{{ __('app.composition.name') }}</th>
                            <th scope="col">{{ __('app.composition.description') }}</th>
                            <th scope="col">{{ __('app.composition.event') }}</th>
                            <th scope="col">{{ __('app.composition.rollingStockNumbers') }}</th>
                            <th scope="col">{{ __('app.composition.status') }}</th>
                            <th scope="col">{{ __('app.composition.type') }}</th>
                            <th scope="col">{{ __('app.composition.original') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($entities as $entity)
                            <tr>
                                <td class="text-center">
                                    <div>
                                        <a href="{{ route('composition.show', ['id' => $entity->id]) }}">
                                            <button class="btn btn-outline-dark btn-sm"><i class="fa fa-search"></i></button>
                                        </a>
                                        @if ($entity->status == 'in_progress')
                                            <a href="{{ route('composition.edit', ['id' => $entity->id]) }}">
                                                <button class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></button>
                                            </a>
                                            <button class="btn btn-dark btn-sm send-to-accept" data-id="{{ $entity->id }}" data-positive="true" data-status="{{ $entity->status }}">
                                                <i class="fa fa-send"></i>
                                            </button>
                                            <button class="btn btn-danger btn-sm delete" data-id="{{ $entity->id }}">
                                                <i class="fa fa-remove"></i>
                                            </button>
                                        @endif
                                    </div>
                                </td>
                                <td class="text-center">{{ $entity->id }}</td>
                                <td>{{ $entity->name }}</td>
                                <td>{{ $entity->description }}</td>
                                <td>@if (!is_null($entity->event)){{ $entity->event->name }}@endif</td>
                                <td>
                                    <ul>
                                        @foreach ($entity->rollingStocks as $rollingStock)
                                            <li>
                                                <div>{{ __('app.rollingStock.labels.' . $rollingStock->model_type . '.type') }} {{ $rollingStock->number }}</div>
                                                @if (auth()->id() != $rollingStock->user->id)
                                                    <div>({{ $rollingStock->user->name }})</div>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td class="text-center">{{ __('app.composition.enum.status.' . $entity->status) }}</td>
                                <td class="text-center">{{ __('app.composition.enum.type.' . $entity->type) }}</td>
                                <td class="text-center">@if (!is_null($entity->original)){{ $entity->original->id }}@endif</td>
                            </tr>
                        @empty
                            <tr class="text-center">
                                <td colspan="9">{{ __('app.common.noData') }}</td>
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
    <script type="text/javascript" src="{{ asset('js/composition/changeStatus.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/common/delete.js') }}"></script>
@endsection
