<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $table = 'feedbacks';

    protected $fillable = [
        'title',
        'user_id',
        'category_id',
        'is_solved',
        'description'
    ];

    public function getCreatedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('l, F j, Y');
    }

    public function user(){
        return $this->belongsTo(\App\Models\User::class)->select(['id', 'name']);
    }

    public function category(){
        return $this->belongsTo(\App\Models\Category::class)->select(['id', 'name']);
    }

    public function comment(){
        return $this->hasMany(\App\Models\Comment::class);
    }
}
