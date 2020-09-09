<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => [
                'sometimes',
                'string',
                'max:200',
            ],
            'email' => [
                'sometimes',
                'string',
                'max:200',
            ],
            'phone' => [
                'sometimes',
                'string',
                'max:40',
            ],
            'email_host' => [
                'sometimes',
                'string',
                'max:200',
            ],
            'email_port' => [
                'sometimes',
                'integer',
                'max:100000',
            ],
            'email_username' => [
                'sometimes',
                'string',
                'max:200',
            ],
            'email_password' => [
                'sometimes',
                'string',
                'max:200',
            ],
            'g_analytics' => [
                'sometimes',
                'string',
                'nullable'
            ],
            'fb_advertising' => [
                'sometimes',
                'string',
                'nullable'
            ],
        ];
    }
}
