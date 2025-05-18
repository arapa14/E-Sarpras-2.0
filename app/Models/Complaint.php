<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    protected $table = 'complaints';

    protected $fillable = [
        'user_id',
        'ticket',
        'description',
        'location',
        'suggestion',
        'before_image',
        'status'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function Responses() {
        return $this->hasMany(Response::class);
    }
}
