<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

/**
 * App\Models\RollingStock
 *
 * @property int $id
 * @property string $model_type
 * @property string $number
 * @property string $model_description
 * @property string $model_bottom_sign
 * @property string $image_path
 * @property string $model_owner
 * @property string $model_producer
 * @property string $couplings
 * @property string $nem_socket
 * @property string $kks
 * @property string $bumpers_spring_loaded
 * @property string $wheels
 * @property string $inside_dimension
 * @property string $wheel_flange
 * @property string $rp_25
 * @property double $model_length
 * @property double $model_weight
 * @property string $railway_management
 * @property string $epoch
 * @property double $total_length
 * @property double $maximum_speed
 * @property string $usage_notes
 * @property string $disinfected
 * @property string $efficient
 * @property string $fault_description
 * @property string $additional_notes_1
 * @property string $additional_notes_2
 * @property string $express_delivery
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 */
class RollingStock extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'model_type',
        'number',
        'model_description',
        'model_bottom_sign',
        'image_path',
        'model_owner',
        'model_producer',
        'couplings',
        'nem_socket',
        'kks',
        'bumpers_spring_loaded',
        'wheels',
        'inside_dimension',
        'wheel_flange',
        'rp_25',
        'model_length',
        'model_weight',
        'railway_management',
        'epoch',
        'total_length',
        'maximum_speed',
        'usage_notes',
        'disinfected',
        'efficient',
        'fault_description',
        'additional_notes_1',
        'additional_notes_2',
        'express_delivery',
        'user_id'
    ];

    protected $table = 'rolling_stocks';
    protected $primaryKey = 'id';

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function locomotive(): HasOne
    {
        return $this->hasOne(Locomotive::class);
    }

    public function passenger(): HasOne
    {
        return $this->hasOne(Passenger::class);
    }

    public function freight(): HasOne
    {
        return $this->hasOne(Freight::class);
    }

    public function events(): BelongsToMany
    {
        return $this->belongsToMany(Event::class, 'events_rolling_stocks');
    }

    public function compositions(): BelongsToMany
    {
        return $this->belongsToMany(Composition::class, 'compositions_rolling_stocks');
    }
}
