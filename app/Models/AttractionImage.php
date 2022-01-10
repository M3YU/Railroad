<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttractionImage extends Model
{
    use HasFactory;

    protected $table = 'attraction_images';
    protected $fillable = ['image_url', 'attraction_id'];
    
    public function attraction()
    {
        return $this->belongsTo(Attraction::class, "attraction_id", 'id');
    }

}