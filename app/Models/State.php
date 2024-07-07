<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class State extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'uf',
    ];

    /**
     * @return HasMany
     */
    public function city(): HasMany
    {
        return $this->hasMany(City::class);
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
