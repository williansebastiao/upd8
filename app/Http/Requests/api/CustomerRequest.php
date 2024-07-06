<?php

namespace App\Http\Requests\api;

use App\Constants\StatusCode;
use App\Rules\UniqueCpf;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|min:4',
            'last_name' => 'required|min:4',
            'cpf' => ['required', new UniqueCpf],
            'birth' => 'required|date_format:d/m/Y',
            'gender' => 'required',
            'address' => 'required',
            'state' => 'required|integer',
            'city' => 'required|integer',
        ];
    }

    public function failedValidation(Validator $validator) {
        throw new HttpResponseException(response()->json(['message' => $validator->errors()->first()], StatusCode::UNPROCESSABLE_ENTITY));
    }
}
