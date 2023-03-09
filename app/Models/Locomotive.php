<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

/**
 * App\Models\Locomotive
 *
 * @property int $id
 * @property string $sound
 * @property string $decoder_type
 * @property string $name
 * @property string $axle_load
 * @property double $wheel_base
 * @property double $service_weight
 * @property string $type_of_heating
 * @property string $axle_arrangement
 * @property double $power
 * @property int $address_ddc
 * @property string $speed_steps
 * @property string $mode
 * @property string $analog
 * @property string $type_ddc
 * @property int $rolling_stock_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 */
class Locomotive extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sound',
        'decoder_type',
        'name',
        'axle_load',
        'wheel_base',
        'service_weight',
        'type_of_heating',
        'axle_arrangement',
        'power',
        'address_ddc',
        'speed_steps',
        'mode',
        'analog',
        'type_ddc',
        'rolling_stock_id'
    ];

    protected $table = 'locomotives';
    protected $primaryKey = 'id';

    public function rollingStock(): BelongsTo
    {
        return $this->belongsTo(RollingStock::class);
    }
}
