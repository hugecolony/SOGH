<?php


namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class CarrerFormRequest extends FormRequest
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
            "Title"=> [
                "required",
                'string',
                'max:255'
            ],
            "Type"=> [
                "required",
                'string',
                'max:100'
            ],
            "Qualification"=> [
                "required",
                'string',
                'max:800'
            ],
            "Description"=> [
                "required",
                'string',
                'max:800'
            ],
            "Location"=> [
                "required",
                'string',
                'max:100'
            ],
            "Terms"=> [
                "required",
                'string',
                'max:100'
            ],
            "ClosingOn"=> [
                "required",
                'date',
                
            ],
            "status"=> [
                'nullable',
            ],
            'Attachment'=>['nullable','mimes:jpg,jpeg,png,pdf,webp'],
      
        ];
    }
}
