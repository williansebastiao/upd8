<?php

namespace App\Http\Controllers\Api;

use App\Constants\StatusCode;
use App\Http\Controllers\Controller;
use App\repositories\StateRepository;
use Illuminate\Http\Request;

class StateController extends Controller
{

    /**
     * @var StateRepository
     */
    protected StateRepository $stateRepository;

    /**
     * @param StateRepository $stateRepository
     */
    public function __construct(StateRepository $stateRepository) {
        $this->stateRepository = $stateRepository;
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $response = $this->stateRepository->findAllStatesOrderByName();
        return response()->json($response, StatusCode::SUCCESS);
    }
}
