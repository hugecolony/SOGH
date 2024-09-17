<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BlogsGallery;
class Blogs extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
        protected $table   ='Blogs';
    protected $fillable = [
            'Title',
            'Description',
           'CoverImage',
          'Date',
    ];
    public function images(){
        return $this->hasMany(BlogsGallery::class);    
    }
}
