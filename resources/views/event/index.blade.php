@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default" style="min-height: 100vh;">
            <div class="row">
                <div class="col-md-6">
                    <h1>{{ __('app.event.index') }}</h1>
                </div>
                @if(Auth::user()->is_admin)
                    <div class="col-md-6">
                        <a class="pull-right" href="{{ route('event.create') }}">
                            <button type="button" class="btn btn-primary btn-circle" title="{{ __('app.common.add') }}"><i class="fa fa-plus"></i>
                            </button>
                        </a>
                    </div>
                @endif
            </div>
            @include('helpers.flash')
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped task-table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">{{ __('app.common.#') }}</th>
                            <th scope="col">{{ __('app.event.name') }}</th>
                            <th scope="col">{{ __('app.event.description') }}</th>
                            @if(Auth::user()->is_admin)
                                <th scope="col" class="text-center">{{ __('app.common.actions') }}</th>
                            @endif
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($entities as $entity)
                            <tr>
                                <td>{{ $entity->id }}</td>
                                <td>{{ $entity->name }}</td>
                                <td>{{ $entity->description }}</td>
                                @if(Auth::user()->is_admin)
                                    <td class="text-center">
                                        <a href="{{ route('event.edit', ['id' => $entity->id]) }}">
                                            <button class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></button>
                                        </a>
                                        @if (count($entity->compositions) == 0 && count($entity->rollingStocks) == 0)
                                            <button class="btn btn-danger btn-sm delete" data-id="{{ $entity->id }}">
                                                <i class="fa fa-remove"></i>
                                            </button>
                                        @endif
                                    </td>
                                @endif
                            </tr>
                        @empty
                            <tr class="text-center">
                                <td colspan="4">{{ __('app.common.noData') }}</td>
                            </tr>
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
