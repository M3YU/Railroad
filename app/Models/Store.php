<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $table = 'stores';
    protected $fillable =['name','content','image_url','phone','address','category_id','distance','direction','subtitle'];
    public function storeCategory()
    {
        return $this->belongsTo(StoreCategory::class, "category_id", 'id');
    }

    public function storeImage()
    {
        return $this->hasMany(StoreImage::class,'store_id','id');
    }


}
