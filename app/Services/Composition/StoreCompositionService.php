<?php

namespace App\Services\Composition;

use App\Events\Composition\Create\CompositionHasBeenCreatedCorrectly;
use App\Models\Composition;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreCompositionService
{
    private Dispatcher $dispatcher;

    public function __construct(
        Dispatcher $dispatcher
    )
    {
        $this->dispatcher = $dispatcher;
    }

    public function execute(Request $request): RedirectResponse
    {
        $composition = $this->saveAndGetComposition($request);
        $this->attachRollingStocks($request, $composition);

        $this->dispatcher->dispatch(new CompositionHasBeenCreatedCorrectly($composition));
        return redirect(route('composition.index'));
    }

    private function saveAndGetComposition(Request $request): Composition
    {
        $composition = new Composition($request->get('composition'));
        $composition->user_id = Auth::id();
        $composition->save();
        return $composition;
    }

    private function attachRollingStocks(Request $request, Composition $composition): void
    {
        $rollingStockIds = $request->get('rollingStocks');
        if (is_array($rollingStockIds)) {
            $composition->rollingStocks()->attach($rollingStockIds);
        }
    }
}
