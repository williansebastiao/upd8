<?php

namespace App\Http\Controllers\Api;

use App\Constants\StatusCode;
use App\Http\Controllers\Controller;
use App\services\CityService;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class CityController extends Controller
{

    protected CityService  $cityService;

    public function __construct(CityService $cityService){
        $this->cityService = $cityService;
    }

    /**
     * @param Request $request
     * @return Collection
     */
    public function index(Request $request)
    {
        try {
            $queryString = $request->query();
            $response = $this->cityService->findCitiesByStateUf($queryString);
            return response()->json($response, StatusCode::SUCCESS);
        } catch (\Exception $e) {
            return response()->json(['detail' => $e->getMessage()], StatusCode::INTERNAL_SERVER_ERROR);
        }
    }
}
