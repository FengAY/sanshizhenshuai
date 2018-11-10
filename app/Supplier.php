<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'name','address','emailaddress','phone',
    ];

    public function souvenirs()
    {
        return $this->hasMany('App\Souvenir');
    }
}
