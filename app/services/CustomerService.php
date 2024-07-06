<?php

namespace App\services;

use App\Constants\Gender;
use App\repositories\CustomerRepository;

class CustomerService
{

    protected CustomerRepository $customerRepository;

    public function __construct(CustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function findUserByParamOrAll()
    {
        return $this->customerRepository->findAll();
    }

    public function store(array $data)
    {

        $gender = [Gender::MALE, Gender::FEMALE];
        if (!in_array($data['gender'], $gender)) {
            throw new \Exception('Gender is not valid');
        }

        $data['cpf'] = $this->formatCpf($data['cpf']);
        $data['birth'] = $this->formatBirth($data['birth']);
        $data['state_id'] = $data['state'];
        $data['city_id'] = $data['city'];

        return $this->customerRepository->save($data);
    }

    public function update(int $id, array $data)
    {
        $gender = [Gender::MALE, Gender::FEMALE];
        if (!in_array($data['gender'], $gender)) {
            throw new \Exception('Gender is not valid');
        }

        $data['cpf'] = $this->formatCpf($data['cpf']);
        $data['birth'] = $this->formatBirth($data['birth']);
        $data['state_id'] = $data['state'];
        $data['city_id'] = $data['city'];

        return $this->customerRepository->update($id, $data);
    }

    private function formatCpf(string $cpf)
    {
        return preg_replace('/[^0-9]/', '', $cpf);

    }

    private function formatBirth(string $birth)
    {
        $value = \DateTime::createFromFormat('d/m/Y', $birth);
        return $value->format('Y-m-d');
    }
}
