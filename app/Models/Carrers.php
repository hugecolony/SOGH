<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrers extends Model
{
    use HasFactory;
    protected $table   ='Carrers';
    protected $fillable = [
            'Title',
            'Type',
           'Qualification',
          'Description',
            'Location',
          'Terms',
            'ClosingOn',
           'status',
            'Attachment',
    ];
    public function Jobs(){
      return $this->hasMany(Jobs::class,'carrers_id','id');
  }
}
