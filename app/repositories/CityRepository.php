<?php

namespace App\repositories;

use App\Models\City;
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
     * @throws \Exception
     */
    public function findCitiesByStateUf(String $uf)
    {
        $state = $this->findStateIdByUf($uf);
        if (is_null($state)) {
            throw new \Exception("State id doesn't exist");
        }
        return $this->city->where('state_id', $state->id)->orderBy('name')->get();
    }

    private function findStateIdByUf(string $uf) {
        return $this->stateRepository->findIdByUf($uf);
    }

}
