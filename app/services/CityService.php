<?php

namespace App\services;

use App\repositories\CityRepository;
use Illuminate\Support\Collection;

class CityService
{

    protected cityRepository $cityRepository;

    public function __construct(CityRepository $cityRepository){
        $this->cityRepository = $cityRepository;
    }

    /**
     * @throws \Exception
     */
    public function findCitiesByStateUf(array $data)
    {
        if(array_key_exists('state', $data)){
            return $this->cityRepository->findCitiesByStateUf($data['state']);
        }

        throw new \Exception('Param state not found');
    }

}
