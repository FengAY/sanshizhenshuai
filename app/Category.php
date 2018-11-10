<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=[
        'name','description',
    ];
    public function souvenirs()
    {
        return $this->hasMany('App\Souvenir');
    }
}
