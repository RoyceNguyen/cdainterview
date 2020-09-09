<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'logo',
        'email',
        'phone',
        'email_password',
        'email_host',
        'email_port',
        'email_username',
        'g_analytics',
        'fb_advertising'
    ];
}
