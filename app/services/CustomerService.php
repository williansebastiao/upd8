<?php

namespace App\services;

use App\Constants\Gender;
use App\Models\Customer;
use App\repositories\CustomerRepository;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use App\Helpers\Str;

class CustomerService
{

    /**
     * @var CustomerRepository
     */
    protected CustomerRepository $customerRepository;

    /**
     * @param CustomerRepository $customerRepository
     */
    public function __construct(CustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    /**
     * @param array $data
     * @return LengthAwarePaginator
     */
    public function findUserByParamOrAll(array $data): LengthAwarePaginator
    {
        return $this->customerRepository->findAll($data);
    }

    /**
     * @param array $data
     * @return Customer
     * @throws \Exception
     */
    public function store(array $data): Customer
    {

        $this->validateGender($data['gender']);

        $data['cpf'] = $this->formatCpf($data['cpf']);
        $data['birth'] = $this->formatBirth($data['birth']);
        $data['state_id'] = $data['state'];
        $data['city_id'] = $data['city'];

        return $this->customerRepository->save($data);
    }

    /**
     * @param int $id
     * @param array $data
     * @return Customer
     * @throws \Exception
     */
    public function update(int $id, array $data): Customer
    {

        $this->validateGender($data['gender']);

        $data['cpf'] =  Str::formatCpf($data['cpf']);
        $data['birth'] = Str::formatBirth($data['birth']);
        $data['state_id'] = $data['state'];
        $data['city_id'] = $data['city'];

        return $this->customerRepository->update($id, $data);
    }

    /**
     * @param string $gender
     * @return void
     * @throws \Exception
     */
    private function validateGender(string $gender): void
    {
        $genders = [Gender::MALE, Gender::FEMALE];
        if (!in_array($gender, $genders)) {
            throw new \Exception('Gender is not valid');
        }
    }
}
