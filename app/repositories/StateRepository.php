<?php

namespace App\repositories;

use App\Models\State;
use Illuminate\Database\Eloquent\Collection;

class StateRepository
{

    /**
     * @var State
     */
    protected State $state;

    public function __construct(State $state) {
        $this->state = $state;
    }

    /**
     * @return Collection
     */
    public function findAllStatesOrderByName(): Collection
    {
        return $this->state->orderBy('name')->get();
    }

    public function findIdByUf(string $uf)
    {
        return $this->state->where('uf', strtoupper($uf))->first();
    }

}
