<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Content extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'page_id',
        'title',
        'text_data',
        'order_no',
    ];

    public function page()
    {
        $this->belongsTo(Page::class);
    }
}
