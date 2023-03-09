<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

/**
 * App\Models\Composition
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $symbol
 * @property string $traction_type
 * @property string $status
 * @property string $type
 * @property int $user_id
 * @property int $original_id
 * @property User $user
 * @property Event $event
 * @property Composition $original
 * @property Collection $rollingStocks
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 */
class Composition extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'symbol',
        'traction_type',
        'status',
        'type',
        'user_id',
        'event_id',
        'original_id'
    ];

    protected $table = 'compositions';
    protected $primaryKey = 'id';

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }

    public function original(): BelongsTo
    {
        return $this->belongsTo(Composition::class);
    }

    public function rollingStocks(): BelongsToMany
    {
        return $this->belongsToMany(RollingStock::class, 'compositions_rolling_stocks');
    }
}
