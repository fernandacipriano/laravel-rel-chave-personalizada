<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;


class AreaSeller extends Pivot
{
    protected $table = 'area_sellers';

    protected $fillable = ['codven', 'setzon'];
}
