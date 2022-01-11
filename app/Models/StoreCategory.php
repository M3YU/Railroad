<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreCategory extends Model
{
    use HasFactory;
    protected $table = 'store_categories';
    protected $fillable =['name'];

    public function stores()
    {
        return $this->hasMany(Store::class,'category_id','id');
    }


}
