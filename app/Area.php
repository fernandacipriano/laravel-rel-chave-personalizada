<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable = ['descricao','setzon'];

    public function sellers()
    {
        return $this->belongsToMany('App\Seller', 'area_sellers', 'setzon', 'codven', 'setzon', 'codven', 'App\AreaSeller')
        ->using('App\AreaSeller');
    }
}
