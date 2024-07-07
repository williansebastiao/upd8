<?php

namespace App\repositories;

use App\Models\City;
use App\Models\State;
use Illuminate\Support\Collection;

class CityRepository
{

    protected City $city;
    protected StateRepository $stateRepository;

    public function __construct(City $city, StateRepository $stateRepository){
        $this->city = $city;
        $this->stateRepository = $stateRepository;
    }

    /**
     * @param String $uf
     * @return Collection
     * @throws \Exception
     */
    public function findCitiesByStateUf(String $uf): Collection
    {
        $state = $this->findStateIdByUf($uf);
        if (is_null($state)) {
            throw new \Exception("State id doesn't exist");
        }
        return $this->city->where('state_id', $state->id)->orderBy('name')->get();
    }

    /**
     * @param string $uf
     * @return State
     */
    private function findStateIdByUf(string $uf): State
    {
        return $this->stateRepository->findIdByUf($uf);
    }

}
