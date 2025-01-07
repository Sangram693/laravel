<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerComplaintRequest extends FormRequest
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
            'customer_name' => 'required|string',
            'customer_phone' => 'required|string|max:10',
            'customer_email' => 'required|email|string',
            'address' => 'required|string|max:200',
            'problem' => 'required|in:CCTV,PUMP', 
            'description' => 'required|string', 
            'purchase_date' => 'required|date', 
            'invoice' => 'nullable|file'
        ];
    }
}
