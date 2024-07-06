<?php

namespace App\services;

use App\Constants\Gender;
use App\Models\Customer;
use App\repositories\CustomerRepository;
use Illuminate\Support\Collection;

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
     * @return Collection
     */
    public function findUserByParamOrAll(): Collection
    {
        return $this->customerRepository->findAll();
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

        $data['cpf'] = $this->formatCpf($data['cpf']);
        $data['birth'] = $this->formatBirth($data['birth']);
        $data['state_id'] = $data['state'];
        $data['city_id'] = $data['city'];

        return $this->customerRepository->update($id, $data);
    }

    /**
     * @param string $cpf
     * @return string
     */
    private function formatCpf(string $cpf): string
    {
        return preg_replace('/[^0-9]/', '', $cpf);
    }

    /**
     * @param string $birth
     * @return string
     */
    private function formatBirth(string $birth): string
    {
        $value = \DateTime::createFromFormat('d/m/Y', $birth);
        return $value->format('Y-m-d');
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
