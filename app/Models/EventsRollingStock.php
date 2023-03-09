<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\EventsRollingStock
 *
 * @property int $id
 * @property int $event_id
 * @property int $rolling_stock_id
 */
class EventsRollingStock extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'event_id',
        'rolling_stock_id'
    ];

    protected $table = 'events_rolling_stocks';
    protected $primaryKey = 'id';
}
