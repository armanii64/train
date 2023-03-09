@if(Session::has('flash') or Session::has('status'))
    <div class="row">
        <div class="col-sm-12">
            @if (session('status'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ session('status') }}
                </div>
            @endif
            @if (Session::has('flash'))
                @foreach (Session::get('flash') as $item)
                    <div class="alert alert-{{ $item['status'] }} alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                        </button>
                        {{ $item['message'] }}
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endif