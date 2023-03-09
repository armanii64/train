@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default" style="min-height: 100vh;">
            <div class="row">
                <div class="col-md-6">
                    <h1>{{ __('app.composition.forEvents') }}</h1>
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
                            <th scope="col">{{ __('app.composition.user') }}</th>
                            <th scope="col">{{ __('app.composition.event') }}</th>
                            <th scope="col">{{ __('app.composition.name') }}</th>
                            <th scope="col">{{ __('app.composition.symbol') }}</th>
                            <th scope="col">{{ __('app.composition.traction_type') }}</th>
                            <th scope="col">{{ __('app.composition.rollingStockNumbers') }}</th>
                            <th scope="col">{{ __('app.composition.status') }}</th>
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
                                        <a href="{{ route('composition.edit', ['id' => $entity->id]) }}">
                                            <button class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></button>
                                        </a>
                                        @if ($entity->status == 'to_accept')
                                            <button class="btn btn-dark btn-sm send-to-accept" data-id="{{ $entity->id }}" data-positive="true" data-status="{{ $entity->status }}">
                                                <i class="fa fa-thumbs-up"></i>
                                            </button>
                                        @endif
                                    </div>
                                </td>
                                <td class="text-center">{{ $entity->id }}</td>
                                <td>{{ $entity->user->name }}</td>
                                <td>{{ $entity->event->name }}</td>
                                <td>{{ $entity->name }}</td>
                                <td>{{ $entity->symbol }}</td>
                                <td>{{ $entity->traction_type }}</td>
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
                            </tr>
                        @empty
                            <tr class="text-center">
                                <td colspan="11">{{ __('app.common.noData') }}</td>
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
