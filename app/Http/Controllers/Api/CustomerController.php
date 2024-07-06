<?php

namespace App\Http\Controllers\Api;

use App\Constants\StatusCode;
use App\Http\Controllers\Controller;
use App\Http\Requests\api\CustomerRequest;
use App\repositories\CustomerRepository;
use App\services\CustomerService;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    protected CustomerService $customerService;
    protected CustomerRepository $customerRepository;

    public function __construct(CustomerService $customerService, CustomerRepository $customerRepository) {
        $this->customerService = $customerService;
        $this->customerRepository = $customerRepository;
    }

    public function index(Request $request) {
        try {
            return $this->customerService->findUserByParamOrAll();
        } catch (\Exception $e) {
            return response()->json(['detail' => $e->getMessage()], StatusCode::INTERNAL_SERVER_ERROR);
        }
    }

    public function store(CustomerRequest $request)
    {
        try {
            return $this->customerService->store($request->validated());
        } catch (\Exception $e) {
            return response()->json(['detail' => $e->getMessage()], StatusCode::INTERNAL_SERVER_ERROR);
        }
    }

    public function show($id) {
        try {
            return $this->customerRepository->findById($id);
        } catch (\Exception $e) {
            return response()->json(['detail' => $e->getMessage()], StatusCode::INTERNAL_SERVER_ERROR);
        }
    }

    public function update(CustomerRequest $request, $id) {
        try {
            return $this->customerService->update($id, $request->validated());
        } catch (\Exception $e) {
            return response()->json(['detail' => $e->getMessage()], StatusCode::INTERNAL_SERVER_ERROR);
        }
    }

    public function destroy($id) {
        try {
            return $this->customerRepository->destroy($id);
        } catch (\Exception $e) {
            return response()->json(['detail' => $e->getMessage()], StatusCode::INTERNAL_SERVER_ERROR);
        }
    }
}
