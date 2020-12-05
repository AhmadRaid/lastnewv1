<?php

namespace App\Models;

use \JordanMiguel\LaravelPopular\Traits\Visitable;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use Visitable;

    protected $guarded = [];

    public function _is_active($request)
    {
        if (has($request->is_active)) {
            return 1;
        } else {
            return 0;
        }
    }

    public function department()
    {
        return $this->belongsTo(Department::Class, 'Department_id');
    }
}
