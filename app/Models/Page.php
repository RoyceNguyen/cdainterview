<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'cover_image',
        'is_public',
        'is_password_protected',
        'meta_title',
        'meta_description',
    ];
}
