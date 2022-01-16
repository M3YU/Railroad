<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $fillable = ['title', 'date', 'content', 'image_url', 'category_id'];

    public function NewsCategory()
    {
        return $this->belongsTo(NewsCategory::class, 'category_id', 'id');
    }
}
