<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
    use HasFactory;
    protected $table = 'attractions';
    protected $fillable = ['name', 'content', 'image_url', 'category_id', 'distance', 'direction'];
    public function attractionCategory()
    {
        return $this->belongsTo(AttractionCategory::class, "category_id", 'id');
    }
}