<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $fillable = ['descricao', 'codven'];

    public function areas()
    {
        return $this->belongsToMany('App\Area', 'area_sellers', 'codven', 'setzon', 'codven', 'setzon', 'App\AreaSeller')
        ->using('App\AreaSeller');
    }
}
