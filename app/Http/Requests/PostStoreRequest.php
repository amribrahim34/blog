<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostStoreRequest extends FormRequest
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
            'keywords' => 'required|exists:keywords,id',
            // 'user_id' => 'required|exists:users,id',
        ];
    }



    function attributes()
    {
        return [
            'title' => __('posts.title'),
            'body' => __('posts.body'),
            'user_id' => __('posts.user_id'),
            'category_id' => __('posts.category_id'),
        ];
    }
}
