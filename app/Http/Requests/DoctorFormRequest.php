<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorFormRequest extends FormRequest
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
            "department_id"=> ["required","integer"],
            "Name"=> ["required","string"],
            "Designation"=> ["required","string"],
            "Educational_Credentials"=> ["required","string"],
            "Email"=> ["required","string"],        
            "Incoming_Time"=> ["nullable","string"],    
            "Outgoing_Time"=> ["nullable","string"],    
            "Description"=> ["nullable","string"],  
            "Facebook_URL"=> ["required","string"],
            "Linkedin_URL"=> ["required","string"],  
            "Expertise"=> ["required","string"],
            "Qualification"=> ["required","string"],
            "Awards"=> ["nullable","string"],
            "Professional_Membership"=> ["required","string"],
            "image"=> [
                "nullable",
              //  'image|mimes:jpg,jpeg,png,pdf,webp',
            ],
            "status"=> [
                'nullable',
            ],

        ];
    }
}
