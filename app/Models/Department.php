<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['name', 'parent_id', 'is_active'];

    public function is_active($query)
    {
        if ($query->has('is_active')) {
            return 1;
        } else {
            return 0;
        }
    }
}
