<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomerComplaintRequest extends FormRequest
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
            'customer_name' => 'string', // Allow updating the customer name as a string
            'customer_phone' => 'string|max:10', // Allow updating the customer phone as a string with maximum length of 10 characters
            'customer_email' => 'email|string', // Allow updating the customer email as a valid email address string
            'address' => 'string|max:200', // Allow updating the address as a string with maximum length of 200 characters
            'problem' => 'in:CCTV,PUMP', // Allow updating the problem type to either CCTV or PUMP
            'description' => 'string', // Allow updating the description as a string
            'purchase_date' => 'date', // Allow updating the purchase date as a valid date
            'invoice' => 'nullable|file', // Allow updating the invoice as an optional file
        ];
    }
}
