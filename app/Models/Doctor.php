<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $table    ='Doctors';
    protected $fillable = [
        'department_id',
        'Name'	,'Designation'	,'Educational_Credentials',	'Email'	,'Incoming_Time','Outgoing_Time'	,'Description'	,'image',

        'Facebook_URL'	,'Linkedin_URL'	,'Expertise'	,'Qualification',	'status',	'Awards',	'Professional_Membership'
    ];

    public function Department(){
        return $this->belongsTo(Department::class,'department_id','id');
    }
    public function doctorImages(){
        return $this->hasMany(DoctorImage::class,'doctor_id','id');
    }
}
