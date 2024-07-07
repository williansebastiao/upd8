<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agent extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'state_id',
        'city_id',
        'first_name',
        'last_name',
        'email'
    ];

    public function state(): BelongsTo
    {
        return $this->BelongsTo(State::class);
    }

    /**
     * @return BelongsTo
     */
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }
}
