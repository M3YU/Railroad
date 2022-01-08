<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttractionCategory extends Model
{

    use HasFactory;
    //
    protected $table = 'attractioncategories';
    protected $fillable =['name'];

}
