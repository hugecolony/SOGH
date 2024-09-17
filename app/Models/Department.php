<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $table = "Departments";
    protected $primaryKey = 'id';
    protected $fillable = [
        
        'Name',
        'Description',
        'Services',
        'Image',
    ];
    public function doctors(){
        return $this->hasMany(Doctor::class,'department_id','id');
    }
    public function appointments(){
        return $this->hasMany(Appointments::class,'department_id','id');
    }
}
