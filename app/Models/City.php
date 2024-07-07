<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'state_id',
        'name'
    ];

    /**
     * @return BelongsTo
     */
    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }

    /**
     * @return HasOne
     */
    public function customer(): HasOne
    {
        return $this->hasOne(Customer::class);
    }

    public function agent(): HasMany
    {
        return $this->hasMany(Customer::class);
    }
}
