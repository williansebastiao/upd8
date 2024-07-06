<?php

namespace App\repositories;

use App\Models\Customer;

class CustomerRepository
{

    protected Customer $customer;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function findAll()
    {
        return $this->customer->get();
    }

    public function save(array $data)
    {
        return $this->customer->create($data);
    }

    public function findById(int $id)
    {
        return $this->customer->findOrFail($id);
    }

    public function update(int $id, array $data)
    {
        $this->customer->find($id)->update($data);
        return $this->customer->find($id);
    }

    public function destroy(int $id)
    {
        return $this->customer->find($id)->delete();
    }


}
