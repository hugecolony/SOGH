<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blogs;
class BlogsGallery extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
        protected $table   ='blogs_galleries';
    protected $fillable = [
            'image',
            'blogs_id',
    ];
    public function Blogs(){
        return $this->belongsTo(Blogs::class);    
    }
}
