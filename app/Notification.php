<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'body',
        'read',
        'created_at',
        'updated_at'
    ];
}
