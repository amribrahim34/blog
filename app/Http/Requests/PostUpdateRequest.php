<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostUpdateRequest extends FormRequest
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
            'title' => 'required|min:6|max:100|string',
            'body' => 'required|min:20|max:60000|string',
            'category_id' => 'required|exists:categories,id',
            // 'user_id' => 'required|exists:users,id',
        ];
    }
}
