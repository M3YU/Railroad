<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreImage extends Model
{
    use HasFactory;
    protected $table = 'store_images';
    protected $fillable =['image_url','store_id'];

    public function stores()
    {
        return $this->belongsTo(Store::class, "store_id", 'id');
    }


}
