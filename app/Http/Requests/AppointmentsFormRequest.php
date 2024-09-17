<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentsFormRequest extends FormRequest
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
            "First_Name"=>["required","string"],
            "Last_Name"=>["required","string"],
            "CNIC"=>["required","string"],
            "Mobile_Number"=>["required","string"],
            "Appointment_date"=>["required","date"],
            "Whatsapp"=>["required","string"],
            'Reason_of_Appointment'=>["required","string"]
        ];
    }
}
