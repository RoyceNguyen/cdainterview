<?php

namespace App\Http\Requests;

use App\Models\Page;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateContentRequest extends FormRequest
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
            'title' => ['sometimes', 'string', 'nullable'],
            'text_data' => ['sometimes', 'string', 'nullable'],
            'order_no' => ['sometimes', 'integer', 'min:1'],
            'page_id' => [
                'sometimes',
                Rule::exists(Page::class)->where('id')->whereNull('deleted_at'),
            ]
        ];
    }
}
