<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FireFighting extends Model
{
    //
    protected $fillable = [
        'title', 'preview_img', 'text', 'drawing', 'parameters', 'pdf',
    ];
}
