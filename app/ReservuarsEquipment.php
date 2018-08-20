<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//Резервуарное оборудование
class ReservuarsEquipment extends Model
{
    //
    protected $fillable = [
        'title', 'preview_img', 'text', 'drawing', 'parameters', 'pdf',
    ];
}
