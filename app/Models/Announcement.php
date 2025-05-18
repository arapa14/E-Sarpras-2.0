<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $table = 'announcements';

    protected $fillable = [
        'title',
        'message',
        'type',
        'is_active',
        'start_at',
        'end_at'
    ];
}
