<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CompositionsRollingStocks
 *
 * @property int $id
 * @property int $composition_id
 * @property int $rolling_stock_id
 */
class CompositionsRollingStocks extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'composition_id',
        'rolling_stock_id'
    ];

    protected $table = 'compositions_rolling_stocks';
    protected $primaryKey = 'id';
}
