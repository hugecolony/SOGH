<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table='Employees';
    protected $primaryKey = 'id';
    protected $fillable = [ 'Name','Description','Image','SocialMedia'];
}
