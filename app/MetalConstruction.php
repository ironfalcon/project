<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MetalConstruction extends Model
{
    //
    protected $fillable = [
        'title', 'preview_img', 'text', 'drawing', 'parameters', 'pdf',
    ];
}
