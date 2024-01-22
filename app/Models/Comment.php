<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    
    protected $table = 'comments';

    protected $fillable = [
        'comment',
        'user_id',
        'feedback_id'
    ];

    public function getCreatedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('l, F j, Y');
    }

    public function feedback(){
        return $this->belongsTo(\App\Models\Feedback::class);
    }

    public function user(){
        return $this->belongsTo(\App\Models\User::class);
    }
}
