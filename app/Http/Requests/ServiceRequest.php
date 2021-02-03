<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            'title'       => 'required|string|min:10|max:100',
            'label'       => 'required|string|min:10|max:20',
            'description' => 'required|string|min:10|max:1000',
            'image'       => 'exclude_unless:old_image,null|required|image|mimes:jpg,jpeg,png|max:1024',
        ];
    }
}
