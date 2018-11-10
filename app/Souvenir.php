<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Souvenir extends Model
{
    protected $fillable=[
       'name','price','supplier_id','category_id','description','pathoffile'
    ];

    public function supplier()
    {
        return $this->belongsTo('App\Supplier','supplier_id','id');
    }

    public function category()
    {
        return $this->belongsTo('App\Category','category_id','id');
    }


}
