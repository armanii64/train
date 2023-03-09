<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

/**
 * App\Models\Passenger
 *
 * @property int $id
 * @property string $car_sign
 * @property string $uic_type
 * @property double $service_weight
 * @property int $places_first_class
 * @property int $places_second_class
 * @property string $heating
 * @property string $intern_ver
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 */
class Passenger extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'car_sign',
        'uic_type',
        'service_weight',
        'places_first_class',
        'places_second_class',
        'heating',
        'intern_ver',
    ];

    protected $table = 'passengers';
    protected $primaryKey = 'id';

    public function rollingStock(): BelongsTo
    {
        return $this->belongsTo(RollingStock::class);
    }
}
