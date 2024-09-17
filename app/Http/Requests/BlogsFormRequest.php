<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogsFormRequest extends FormRequest
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
            // "blogs_id"=> ["required","integer"],
            "Title"=> ["required","string"],
            "Description"=> ["required","string"],
            "CoverImage"=>['nullable','mimes:jpg,jpeg,png'],
            "Date"=> ["required","date"],
        ];
    }
}
