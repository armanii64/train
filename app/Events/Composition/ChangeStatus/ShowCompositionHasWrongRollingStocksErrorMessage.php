<?php

namespace App\Events\Composition\ChangeStatus;

class ShowCompositionHasWrongRollingStocksErrorMessage
{
    public function handle(CompositionHasWrongRollingStocksError $event): void
    {
        $message = [
            ['status' => 'danger', 'message' => "Skład: " . $event->composition->name . ", posiada część taboru wykorzystaną w innym, zaakceptowanym składzie."]
        ];
        session()->flash('flash', $message);
    }
}
