<?php

namespace App\Providers;

use App\Events\Composition\ChangeStatus\Accept\CompositionHasBeenAcceptedCorrectly;
use App\Events\Composition\ChangeStatus\Accept\ShowCompositionHasBeenAcceptedCorrectlyMessage;
use App\Events\Composition\ChangeStatus\CompositionHasWrongRollingStocksError;
use App\Events\Composition\ChangeStatus\CompositionStatusHasBeenChangedCorrectly;
use App\Events\Composition\ChangeStatus\CompositionStatusHasNotBeenChangedCorrectly;
use App\Events\Composition\ChangeStatus\ShowCompositionHasWrongRollingStocksErrorMessage;
use App\Events\Composition\ChangeStatus\ShowCompositionStatusHasBeenChangedCorrectlyMessage;
use App\Events\Composition\ChangeStatus\ShowCompositionStatusHasNotBeenChangedCorrectlyMessage;
use App\Events\Composition\ChangeStatus\ToAccept\CompositionHasBeenSentToAcceptCorrectly;
use App\Events\Composition\ChangeStatus\ToAccept\ShowCompositionHasBeenSentToAcceptCorrectlyMessage;
use App\Events\Composition\Create\CompositionHasBeenCreatedCorrectly;
use App\Events\Composition\Create\ShowCompositionHasBeenCreatedCorrectlyMessage;
use App\Events\Composition\Delete\CompositionHasBeenDeletedCorrectly;
use App\Events\Composition\Delete\ShowCompositionHasBeenDeletedCorrectlyMessage;
use App\Events\Composition\Edit\CompositionHasBeenUpdatedCorrectly;
use App\Events\Composition\Edit\ShowCompositionHasBeenUpdatedCorrectlyMessage;
use App\Events\Event\Create\EventHasBeenCreatedCorrectly;
use App\Events\Event\Create\ShowEventHasBeenCreatedCorrectlyMessage;
use App\Events\Event\Delete\EventHasBeenDeletedCorrectly;
use App\Events\Event\Delete\ShowEventHasBeenDeletedCorrectlyMessage;
use App\Events\Event\Edit\EventHasBeenUpdatedCorrectly;
use App\Events\Event\Edit\ShowEventHasBeenUpdatedCorrectlyMessage;
use App\Events\RollingStock\Create\RollingStockHasBeenCreatedCorrectly;
use App\Events\RollingStock\Create\ShowRollingStockHasBeenCreatedCorrectlyMessage;
use App\Events\RollingStock\Delete\RollingStockHasBeenDeletedCorrectly;
use App\Events\RollingStock\Delete\ShowRollingStockHasBeenDeletedCorrectlyMessage;
use App\Events\RollingStock\Update\RollingStockHasBeenUpdatedCorrectly;
use App\Events\RollingStock\Update\ShowRollingStockHasBeenUpdatedCorrectlyMessage;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        EventHasBeenCreatedCorrectly::class => [
            ShowEventHasBeenCreatedCorrectlyMessage::class
        ],
        EventHasBeenUpdatedCorrectly::class => [
            ShowEventHasBeenUpdatedCorrectlyMessage::class
        ],
        EventHasBeenDeletedCorrectly::class => [
            ShowEventHasBeenDeletedCorrectlyMessage::class
        ],
        RollingStockHasBeenCreatedCorrectly::class => [
            ShowRollingStockHasBeenCreatedCorrectlyMessage::class
        ],
        RollingStockHasBeenDeletedCorrectly::class => [
            ShowRollingStockHasBeenDeletedCorrectlyMessage::class
        ],
        RollingStockHasBeenUpdatedCorrectly::class => [
            ShowRollingStockHasBeenUpdatedCorrectlyMessage::class
        ],
        CompositionHasBeenCreatedCorrectly::class => [
            ShowCompositionHasBeenCreatedCorrectlyMessage::class
        ],
        CompositionHasBeenDeletedCorrectly::class => [
            ShowCompositionHasBeenDeletedCorrectlyMessage::class
        ],
        CompositionHasBeenUpdatedCorrectly::class => [
            ShowCompositionHasBeenUpdatedCorrectlyMessage::class
        ],
        CompositionStatusHasBeenChangedCorrectly::class => [
            ShowCompositionStatusHasBeenChangedCorrectlyMessage::class
        ],
        CompositionStatusHasNotBeenChangedCorrectly::class => [
            ShowCompositionStatusHasNotBeenChangedCorrectlyMessage::class
        ],
        CompositionHasWrongRollingStocksError::class => [
            ShowCompositionHasWrongRollingStocksErrorMessage::class
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
