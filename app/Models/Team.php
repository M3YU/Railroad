<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $table = 'teams';
    protected $fillable = ['user_id', 'name', 'date', 'category_id', 'timing', 'content'];

    const CATEGORY = ['歷史行', '歷史行', '健身行', '親子行', '交友行'];
    const TIMING = ['半日遊', '全日遊'];
}
