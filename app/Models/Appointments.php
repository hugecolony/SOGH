<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    use HasFactory;
    protected $table    ='appointments';
    protected $fillable = [
        'department_id',
        'First_Name'	,'Last_Name'	,'CNIC',	'Whatsapp'	,'Mobile_Number','Reason_of_Appointment'	,'Appointment_date'
    ];

    public function Department(){
        return $this->belongsTo(Department::class,'department_id','id');
    }
}
