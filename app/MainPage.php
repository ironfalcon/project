<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainPage extends Model
{
    //
    protected $fillable = [
        'AboutCompany', 'AboutProduction', 'MainAdress', 'Email', 'MainPhone', 'SecondPhone', 'PhoneThree',
    ];
}
