<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{

    protected $guarded = ['id'];

    public function attachable()
    {
        return $this->morphTo();
    }
}
