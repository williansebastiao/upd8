<?php

namespace App\Http\Controllers\Api;

use App\Constants\StatusCode;
use App\Http\Controllers\Controller;
use App\Http\Requests\api\CustomerRequest;
use App\repositories\CustomerRepository;
use App\services\CustomerService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    /**
     * @var CustomerService
     * @var CustomerRepository
     */
    protected CustomerService $customerService;
    protected CustomerRepository $customerRepository;

    /**
     * @param CustomerService $customerService
     * @param CustomerRepository $customerRepository
     */
    public function __construct(CustomerService $customerService, CustomerRepository $customerRepository) {
        $this->customerService = $customerService;
        $this->customerRepository = $customerRepository;
    }


    public function index(Request $request)
    {
        try {
            $response = $this->customerService->findUserByParamOrAll();
            return response()->json($response, StatusCode::SUCCESS);
        } catch (\Exception $e) {
            return response()->json(['detail' => $e->getMessage()], StatusCode::INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @param CustomerRequest $request
     * @return JsonResponse
     */
    public function store(CustomerRequest $request): JsonResponse
    {
        try {
            $response = $this->customerService->store($request->validated());
            return response()->json($response, StatusCode::CREATED);
        } catch (\Exception $e) {
            return response()->json(['detail' => $e->getMessage()], StatusCode::INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @param $id
     * @return JsonResponse
     */
    public function show($id): JsonResponse
    {
        try {
            $response = $this->customerRepository->findById($id);
            return response()->json($response, StatusCode::SUCCESS);
        } catch (\Exception $e) {
            return response()->json(['detail' => $e->getMessage()], StatusCode::INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @param CustomerRequest $request
     * @param $id
     * @return JsonResponse
     */
    public function update(CustomerRequest $request, $id): JsonResponse
    {
        try {
            $response = $this->customerService->update($id, $request->validated());
            return response()->json($response, StatusCode::SUCCESS);
        } catch (\Exception $e) {
            return response()->json(['detail' => $e->getMessage()], StatusCode::INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @param $id
     * @return JsonResponse
     */
    public function destroy($id): JsonResponse
    {
        try {
            $this->customerRepository->destroy($id);
            return response()->json(['detail' => 'Data deleted'], StatusCode::SUCCESS);
        } catch (\Exception $e) {
            return response()->json(['detail' => $e->getMessage()], StatusCode::INTERNAL_SERVER_ERROR);
        }
    }
}
