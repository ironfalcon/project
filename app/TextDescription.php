<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TextDescription extends Model
{
    //
    protected $fillable = [
        'type', 'text',
    ];
}
