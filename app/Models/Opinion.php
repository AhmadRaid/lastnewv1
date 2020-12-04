<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    protected $guarded=[];

    public function __is_active($request)
    {
        if (has($request->is_active)) {
            return 1;
        } else {
            return 0;
        }
    }
}
