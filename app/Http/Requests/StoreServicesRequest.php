<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServicesRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'=> 'required',
            'slug'=> 'required',
            'image'=> 'required|image',
            'meta_title'=> 'required',
            'seo_keyword'=> 'required',
            'description'=> 'required',
            'meta_description'=> 'required',
        ];
    }
}
