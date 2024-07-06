<?php

namespace App\repositories;

use App\Models\Customer;
use Illuminate\Support\Collection;

class CustomerRepository
{

    /**
     * @var Customer
     */
    protected Customer $customer;

    /**
     * @param Customer $customer
     */
    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    /**
     * @return Collection
     */
    public function findAll(): Collection
    {
        return $this->customer->get();
    }

    /**
     * @param array $data
     * @return Customer
     */
    public function save(array $data): Customer
    {
        return $this->customer->create($data);
    }

    /**
     * @param int $id
     * @return Customer
     */
    public function findById(int $id): Customer
    {
        return $this->customer->findOrFail($id);
    }

    /**
     * @param int $id
     * @param array $data
     * @return Customer
     */
    public function update(int $id, array $data): Customer
    {
        $query = $this->customer->find($id);
        $query->update($data);
        return $query;
    }

    /**
     * @param int $id
     * @return bool
     * @throws \Exception
     */
    public function destroy(int $id): bool
    {
        try {
            $query = $this->customer->findOrFail($id);
            $query->delete();
            return true;
        } catch (\Exception $e) {
            throw new \Exception('An error occurred while deleting the file');
        }

    }

}
