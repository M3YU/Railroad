<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    use HasFactory;

    protected $table = 'news_categories';
    protected $fillable = ['name'];

    public function news()
    {
        return $this->hasMany(News::class, 'category_id', 'id');
    }
}
