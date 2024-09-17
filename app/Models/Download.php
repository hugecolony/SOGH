<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    use HasFactory;
    protected $table='Downloads';
    protected $primaryKey = 'id';
    protected $fillable = [ 'FileName','File'];
}
