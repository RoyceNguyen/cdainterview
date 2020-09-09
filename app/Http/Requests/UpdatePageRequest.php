<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePageRequest extends FormRequest
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
            ],
            'cover_image' => [
                'sometimes',
                'image',
            ],
            'is_public' => [
                'sometimes',
                'boolean',
            ],
            'is_password_protected' => [
                'sometimes',
                'boolean',
            ],
            'meta_title' => [
                'sometimes',
                'string',
            ],
            'meta_description' => [
                'sometimes',
                'string',
            ],
        ];
    }
}
