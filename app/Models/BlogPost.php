<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BlogCategory;
class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'thumbnil',
        'category_id',
        'status',
    ];

    public function category(){
        return $this->belongsTo(BlogCategory::class);
    }
}
