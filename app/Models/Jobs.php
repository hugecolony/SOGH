<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;
    protected $table   = 'apply_jobs';
    protected $fillable = [
            'carrers_id',
            'name',
            'phone',
            'email',
            'image',
    ];

    public function Carrers(){
        return $this->belongsTo(Carrers::class,'carrers_id','id');
    }
  
}
