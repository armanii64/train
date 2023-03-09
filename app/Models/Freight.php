<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

/**
 * App\Models\Freight
 *
 * @property int $id
 * @property string $last_revision
 * @property string $car_sign
 * @property string $uic_type
 * @property string $break_type
 * @property string $wheel_base
 * @property string $gr_obc
 * @property double $cargo_length
 * @property double $cargo_area
 * @property double $cargo_volume
 * @property string $intern_ver
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 */
class Freight extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'last_revision',
        'car_sign',
        'uic_type',
        'break_type',
        'wheel_base',
        'gr_obc',
        'cargo_length',
        'cargo_area',
        'cargo_volume',
        'intern_ver',
    ];

    protected $table = 'freights';
    protected $primaryKey = 'id';

    public function rollingStock(): BelongsTo
    {
        return $this->belongsTo(RollingStock::class);
    }
}
