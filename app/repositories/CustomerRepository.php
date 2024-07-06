<?php

namespace App\repositories;

use App\Helpers\Str;
use App\Models\City;
use App\Models\Customer;
use App\Models\State;
use Illuminate\Pagination\LengthAwarePaginator;
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
     * @param array $data
     * @return LengthAwarePaginator
     */
    public function findAll(array $data): LengthAwarePaginator
    {

        $query = $this->customer->with(['state', 'city']);
        if(array_key_exists('cpf', $data)){
            $query = $query->orWhere('cpf', Str::formatCpf($data['cpf']));
        }
        if(array_key_exists('first_name', $data)){
            $query = $query->orWhere('first_name', $data['first_name']);
        }
        if(array_key_exists('birth', $data)){
            $query = $query->orWhere('birth', Str::formatBirth($data['birth']));
        }
        if(array_key_exists('gender', $data)){
            $query = $query->orWhere('gender', $data['gender']);
        }
        if(array_key_exists('state', $data)){
            $state = State::where('uf', strtoupper($data['state']))->first();
            $query = $query->orWhere('state_id', $state->id);
        }
        if(array_key_exists('city', $data)){
            $city = City::where('name', $data['city'])->first();
            $query = $query->orWhere('city_id', $city->id);
        }

        return $query->orderBy('id', 'desc')->paginate(10);
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
